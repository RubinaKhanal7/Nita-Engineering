<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Models\ImageConverter;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $galleries = Gallery::all();
        return view('admin.gallery.index', ['galleries' => $galleries, 'page_title' => 'Gallery Index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.gallery.create', [
            'page_title' => 'Create Gallery',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'image.*' => 'required|image|mimes:jpg,png,jpeg,gif,webp,svg|max:5555',
        ]);

        $images = $request->file('image');
        $savedImages = [];

        // Ensure the uploads directory exists
        $uploadPath = public_path('uploads/gallery');
        if (!File::exists($uploadPath)) {
            File::makeDirectory($uploadPath, 0755, true);
        }

        // Process and save each image
        foreach ($images as $image) {
            $filename = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move($uploadPath, $filename);
            // Prepend new images to the array
            array_unshift($savedImages, 'uploads/gallery/' . $filename);
        }

        $gallery = new Gallery;
        $gallery->title = $request->title;
        $gallery->slug = SlugService::createSlug(Gallery::class, 'slug', $request->title);
        $gallery->image = json_encode($savedImages);
        $gallery->save();

        return redirect('admin/gallery/index')->with(['successMessage' => 'Success !! Gallery created']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
public function show($id, Request $request)
{
    $gallery = Gallery::findOrFail($id); // Retrieve the gallery
    $highlightedImage = $request->query('image', $gallery->image[0] ?? null);

    return view('gallery.show', compact('gallery', 'highlightedImage'));
}


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery, $id)
    {
        //
        $gallery = Gallery::find($id);
        return view('admin.gallery.update', ['gallery' => $gallery, 'page_title' => 'Update Gallery']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */

     public function update(Request $request)
    {
        $this->validate($request, [
            'id' => 'required|exists:galleries,id',
            'title' => 'required|string',
            'images.*' => 'nullable|image|mimes:jpg,png,jpeg,gif,webp,svg|max:5555',
            'remove_images' => 'nullable|array',
        ]);

        $gallery = Gallery::findOrFail($request->id);

        // Update title and slug
        $gallery->title = $request->title;
        $gallery->slug = SlugService::createSlug(Gallery::class, 'slug', $request->title);

        // Ensure the uploads directory exists
        $uploadPath = public_path('uploads/gallery');
        if (!File::exists($uploadPath)) {
            File::makeDirectory($uploadPath, 0755, true);
        }

        // Get current images
        $currentImages = is_string($gallery->image) 
            ? json_decode($gallery->image, true) 
            : $gallery->image;
        $currentImages = $currentImages ?? [];

        // Remove selected images
        if ($request->has('remove_images')) {
            foreach ($request->remove_images as $imageToRemove) {
                $fullPath = public_path($imageToRemove);
                if (File::exists($fullPath)) {
                    File::delete($fullPath);
                }
                $currentImages = array_filter($currentImages, function($image) use ($imageToRemove) {
                    return $image !== $imageToRemove;
                });
            }
        }

        // Handle new image uploads
        if ($request->hasFile('images')) {
            $newImages = $request->file('images');
            
            foreach ($newImages as $image) {
                $filename = uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move($uploadPath, $filename);
                // Prepend new images to the beginning of the array
                array_unshift($currentImages, 'uploads/gallery/' . $filename);
            }
        }

        // Update gallery with modified images
        $gallery->image = json_encode($currentImages);
        $gallery->save();

        return redirect('admin/gallery/index')
            ->with('successMessage', 'Gallery updated successfully!');
    }     
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery, $id)
    {
        //
        $gallery = Gallery::find($id);

        $gallery->delete();

        return redirect('admin/gallery/index')->with(['successMessage' => 'Success !!Image Deleted']);
    }
}