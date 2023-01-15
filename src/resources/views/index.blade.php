@extends('layout/layout')
@section('title')
    Home
@endsection

@section('content')
    <div class="mx-auto mt-5 w-50 text-center">
        <h1>Telzir</h1>

        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('carousel/image1.jpg') }}" class="d-block w-100" alt="telephone">
                    <div class="carousel-caption d-none d-md-block" style="text-align: -webkit-center;">
                        <h5 class="bg-secondary rounded-pill w-50">FaleMais 30</h5>
                        <p class="bg-secondary rounded-pill w-50"><a class="text-white" href="/fale-mais-30">Clique aqui e conheça!</a></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('carousel/image2.jpg') }}" class="d-block w-100" alt="telephone">
                    <div class="carousel-caption d-none d-md-block" style="text-align: -webkit-center;">
                        <h5 class="bg-secondary rounded-pill w-50">FaleMais 60</h5>
                        <p class="bg-secondary rounded-pill w-50"><a class="text-white" href="/fale-mais-60">Clique aqui e conheça!</a></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('carousel/image3.jpg') }}" class="d-block w-100" alt="telephone">
                    <div class="carousel-caption d-none d-md-block" style="text-align: -webkit-center;">
                        <h5 class="bg-secondary rounded-pill w-50">FaleMais 120</h5>
                        <p class="bg-secondary rounded-pill w-50"><a class="text-white" href="/fale-mais-120">Clique aqui e conheça!</a></p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
@endsection
