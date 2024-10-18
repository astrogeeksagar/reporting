@extends('frontend.layouts.main')
@section('main-container')

    <div id="imageSlider" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://picsum.photos/seed/1/800/400" alt="Slide 1">
            </div>
            <div class="carousel-item">
                <img src="https://picsum.photos/seed/2/800/400" alt="Slide 2">
            </div>
            <div class="carousel-item">
                <img src="https://picsum.photos/seed/3/800/400" alt="Slide 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#imageSlider" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#imageSlider" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

@endsection
