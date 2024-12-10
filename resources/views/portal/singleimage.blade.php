@extends('portal.layouts.master')

@section('content')
<div class="container py-5">
    <div class="row mb-12">
        <div class="col-lg-12">
            <h2 class="display-5 font-weight-light" style="color:#ffb600">{{ $gallery->title }}</h2>
        </div>
    </div>

    <div class="single-service-container">
        <div class="row">
            <div class="col-md-offset-1 col-sm-12 col-md-12 col-md-10">
                <div class="services-list">
                    <div class="row mt-3">
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

                        @if(!empty($images))
                        @foreach ($images as $imgUrl)
                            <div class="col-md-3 mb-4">
                                <a href="{{ asset($imgUrl) }}" data-lightbox="image-gallery">
                                    <img src="{{ asset($imgUrl) }}" class="img-fluid rounded gallery_image" style="height: 200px; width: 100%; object-fit: cover;">
                                </a>
                            </div>
                        @endforeach
                        @else
                        <div class="col-12">
                            <p>No images found for this gallery.</p>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.gallery_image {
    transition: transform 0.3s ease;
    cursor: pointer;
}

.gallery_image:hover {
    transform: scale(1.05);
}
</style>
@endsection