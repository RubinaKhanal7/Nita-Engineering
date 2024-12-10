@extends('portal.layouts.master')
@section('content')
<div class="container py-5">
    <div class="row mb-4">
        <div class="col-lg-5">
            <h2 class="display-4 font-weight-light" style="color:#ffb600">Gallery</h2>
            <p class="font-italic text-muted">A view of our work</p>
        </div>
    </div>
</div>

<style>
    .gallerycontainer img {
        border-radius: 8px !important;
        position: relative;
        width: 100%;
        height: 100%;
    }
    .gallerimage {
        position: relative;
        overflow: hidden;
    }
    .des {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(64, 153, 255, 0.3);
        color: black;
        padding: 20px;
        border-radius: 8px;
        transform: translateY(-100%);
        opacity: 0;
        transition: transform 0.7s ease, opacity 0.7s ease;
    }
    .gallerimage:hover .des {
        transform: translateY(0);
        opacity: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }
    .image-title {
        font-size: 18px;
        color: white;
        text-transform: capitalize;
    }
</style>

<section class="container-fluid p-0 m-0">
    <div class="container gallerycontainer p-0">
        <div class="row">
            @foreach ($gallerys as $gallery)
                @php
                    $images = null;
                    if (!empty($gallery->image)) {
                        if (is_string($gallery->image)) {
                            $images = json_decode($gallery->image, true);
                        } 
                        elseif (is_array($gallery->image)) {
                            $images = $gallery->image;
                        }
                    }
                @endphp

                @if (!empty($images))
                <div class="col-md-4 rounded py-1 p-0 m-0">
                    <div class="col-12">
                        <div class="gallerimage">
                            <img src="{{ asset(reset($images)) }}" 
                                alt="{{ $gallery->title }}" 
                                class="col-12 rounded p-0 m-0" 
                                style="height: 300px; object-fit: cover;">
                            <div class="des">
                                <h5 class="image-title">{{ $gallery->title }}</h5>
                                <a href="{{ route('gallery.show', $gallery->id) }}" class="btn btn-primary">View Gallery</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
        </div>
    </div>
</section>
@endsection