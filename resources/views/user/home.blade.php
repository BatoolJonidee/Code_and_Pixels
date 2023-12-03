@extends('welcome')
@section('title', 'Code And Pixels')
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
                <div style="display:flex; justify-content: center; padding-left:8%; padding-right:7% ">
                    <div id="slider-1-div-text" >
                        <p style="font-size: 35px; text-align: left ; font-weight: 600">Life is Full of </p><br>
                        <p style="font-size: 50px; text-align: center ; color:#0a598f; font-weight: bolder">Beautiful
                            Momments</p><br>
                        <h5 style="font-size: 35px; text-align: right ; font-weight: 600">Remember Them..</h5>
                    </div>
                    <div id="slider-1-div-img" style="width:60%">
                        <img src="storage/images/imgonline-com-ua-resize-lSVXrX46v54RnXNU.jpg" class="d-block w-100"
                            alt="first slide image" style="width: 100%">
                    </div>

                </div>

            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <div style="display:flex; justify-content: center; padding-left:10%; padding-right:10% ">
                    <div id="slider-2-div-img">
                        <img src="storage/images/imgonline-com-ua-resize-b1uV5y00AjerJ.jpg"  alt="second slide image"
                            style="width:100%">
                    </div>
                    <div style="width:50%; padding-top:9%; " id="slider-2-div-text">
                        <p style="font-size: 40px; text-align: left ; font-weight: 600">Professional
                            </p><br>
                        <p style="font-size: 50px; text-align: center ; color:#0a598f; font-weight: bolder">
                            Photographers</p><br>
                        <p style="font-size: 30px; text-align: right ; font-weight: 600">We Have..</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img id="slider-3-img-large-screen" src="storage/images/slider 3.jpeg" alt="third slide image" style="width:90%;padding-left:10%;">
                <div class="carousel-caption d-none d-md-block" id="slider-3-div" >
                    <h3 style="color: white">Still waiting?</h3>
                    <p style="color: white; font-size: 50px; font-weight: bolder"> Book Your Session Now</p>
                </div>
                <div style="width:100%" id="slider-3-small-screen" >
                    <img src="storage/images/imgonline-com-ua-resize-lSVXrX46v54RnXNU.jpg" 
                        alt="first slide image"  >
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
    <div id="choos-us-div-container">
        

    </div>
@endsection
