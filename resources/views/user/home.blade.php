@extends('welcome')
@section('title', 'Profile')
@section('icon')
    <link rel="icon" type="image/x-icon" href="storage/logo.png">
@endsection
@section('main')

    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel" >
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="5000">
                <div style="display:flex; justify-content: center; padding-left:10%; padding-right:10% ">
                    <div style="width:50%; padding-top:9%; ">
                        <p style="font-size: 35px; text-align: left ; font-weight: 600">Life is Full of </p><br>
                        <p style="font-size: 50px; text-align: center ; color:#0a598f; font-weight: bolder">Beautiful
                            Momments</p><br>
                        <h5 style="font-size: 35px; text-align: right ; font-weight: 600">Remember Them..</h5>
                        {{-- <p>Some representative placeholder content for the first slide.</p>  class="carousel-caption d-none d-md-block" --}}
                    </div>
                    <div style="width:50%">
                        <img src="storage/images/360_F_572457480_Gh1QFNcddrLkybzJcf1hKD9TWb7TqqYO.jpg" class="d-block w-100"
                            alt="first slide image" style="width: 100%">
                    </div>

                </div>

            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <div style="display:flex; justify-content: center; padding-left:10%; padding-right:10% ">
                    <div style="width: 50%">
                        <img src="storage/images/slider(1).jpg" class="d-block w-100" alt="second slide image"
                            style="width:100%">
                    </div>
                    <div style="width:50%; padding-top:9%; " >
                        {{-- <h5>Life is Full of </h5><br> --}}
                        <p style="font-size: 40px; text-align: left ; font-weight: 600">Professional
                            </p><br>
                        <p style="font-size: 50px; text-align: center ; color:#0a598f; font-weight: bolder">
                            Photographers</p><br>
                        <p style="font-size: 30px; text-align: right ; font-weight: 600">We Have..</p>
                        {{-- <p>Some representative placeholder content for the first slide.</p>  class="carousel-caption d-none d-md-block" --}}
                    </div>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="storage/images/slider 3.jpeg" class="d-block w-100" alt="third slide image" style="padding-left:10%; padding-right:10% ">
                <div class="carousel-caption d-none d-md-block" >
                    <h3 style="color: white">Still waiting?</h3><br>
                    <p style="color: white; font-size: 50px; font-weight: bolder"> <span style="font-size: 30px;font-weight: bold ">Hurry Up!!</span> Book Your Session Now</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
{{-- 
    <script>
        const myCarouselElement = document.querySelector('#carouselExampleDark')

        const carousel = new bootstrap.Carousel(myCarouselElement, {
            interval: 2000,
            touch: true
        })
    </script> --}}
@endsection
