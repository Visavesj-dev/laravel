@extends('layouts.master_template')
@section('title')hello @endsection
@section('content')
    <div id="carouselId" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselId" data-slide-to="0" class="active"></li>
            <li data-target="#carouselId" data-slide-to="1"></li>
            <li data-target="#carouselId" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="{{ asset('assets/images/1.jpg') }}" class="img-fluid" alt="First slide">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/2.jpg') }}" class="img-fluid" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/3.jpg') }}" class="img-fluid" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-4 text-center">
                <i class="fas fa-home fa-3x text-success"></i>
                <h1>Home</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit necessitatibus impedit placeat,
                    quibusdam maxime inventore corrupti recusandae natus nostrum dolorum consectetur, quis repudiandae quos
                    perspiciatis provident minima temporibus tempore. Eum.</p>
            </div>
            <div class="col-md-4 text-center">
                <i class="fas fa-concierge-bell fa-3x text-warning"></i>
                <h1>About us</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit necessitatibus impedit placeat,
                    quibusdam maxime inventore corrupti recusandae natus nostrum dolorum consectetur, quis repudiandae quos
                    perspiciatis provident minima temporibus tempore. Eum.</p>
            </div>
            <div class="col-md-4 text-center">
                <i class="fas fa-cloud-showers-heavy fa-3x text-danger"></i>
                <h1>Service</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit necessitatibus impedit placeat,
                    quibusdam maxime inventore corrupti recusandae natus nostrum dolorum consectetur, quis repudiandae quos
                    perspiciatis provident minima temporibus tempore. Eum.</p>
            </div>
        </div>
    </div>


@endsection
