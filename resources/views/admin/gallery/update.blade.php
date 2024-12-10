@extends('admin.layouts.master')

@section('content')
<div class="row mb-2">
    <div class="col-sm-6">
        <a href="{{ url('admin') }}">
            <button type="button" class="btn-primary btn-sm"><i class="fa fa-arrow-left"></i>Back</button>
        </a>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Update Gallery</h3>
    </div>

    <form id="quickForm" method="POST" action="{{ route('admin.gallery.update') }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{ $gallery->id }}">
        
        <div class="card-body">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" placeholder="Title.." 
                       value="{{ old('title', $gallery->title) }}">
                @error('title')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
    
            <!-- Current Images Display with Removal Option -->
            @php
                $images = is_string($gallery->image) ? json_decode($gallery->image) : $gallery->image;
            @endphp
            @if(!empty($images))
                <div class="form-group">
                    <label>Current Images:</label>
                    <div class="row" id="currentImagesContainer">
                        @foreach($images as $image)
                            <div class="col-md-3 mb-3 image-item">
                                <div class="position-relative">
                                    <img src="{{ asset($image) }}" class="img-thumbnail" style="max-height: 150px;">
                                    <input type="checkbox" name="remove_images[]" value="{{ $image }}" 
                                           class="image-remove-checkbox" style="position: absolute; top: 10px; right: 10px;">
                                </div>
                                <small class="text-muted">Check to remove</small>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
    
            <!-- Image Upload Input -->
            <div class="form-group">
                <label for="images">Add More Images</label>
                <input type="file" name="images[]" class="form-control" multiple 
                       accept="image/*" onchange="previewImages(event)">
                <small class="text-muted">You can select multiple images to add</small>
                @error('images.*')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
    
            <!-- New Images Preview Container -->
            <div class="row mt-3" id="newImagesPreviewContainer"></div>
        </div>
    
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Update Gallery</button>
        </div>
    </form>
</div>

@push('scripts')
<script>
function previewImages(event) {
    const container = document.getElementById('imagePreviewContainer');
    container.innerHTML = ''; // Clear previous previews
    
    const files = event.target.files;
    
    for (let i = 0; i < files.length; i++) {
        const file = files[i];
        if (file.type.startsWith('image/')) {
            const col = document.createElement('div');
            col.className = 'col-md-3 mb-3';
            
            const img = document.createElement('img');
            img.src = URL.createObjectURL(file);
            img.className = 'img-thumbnail';
            img.style.maxHeight = '150px';
            
            col.appendChild(img);
            container.appendChild(col);
        }
    }
}
</script>
@endpush
@stop