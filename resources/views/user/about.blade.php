@extends('welcome')
@section('title', 'Contact')

@section('main')

    <div id='about-container'>
        <h1 id="our-vision-title">Our Vision</h1>
        <div id='our-vision-container'>
            <div id='our-vision-text'>
                <div>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sometimes, we have happy moments that we
                    want to remember and capture. With the idea of
                    freelance photography becoming popular, we might feel a bit confused when looking for professional
                    photographers. <strong> That's where our idea comes in.</strong> In just a few seconds, you can book a
                    session at a time that suits you with the best photographers through our website. We have a bunch of
                    really
                    skilled photographers ready for you.
                </div>
            </div>
            <div id='our-vision-logo'>
                <img src='{{ asset('storage/logo.png') }}' alt='logo image' />
                <h5>Code and Pixels</h5>
            </div>
        </div>
    </div>

    {{-- <div id="founder-container">
            <div id='founder-img-div'>
                <img src='{{ asset('storage/batoolAli.png') }}' alt='owner image' />
            </div>
            <div id='founder-about-div'>
                <h1>Batool Ali Al-Jonidee,</h1>
                <h2>Computer Engineer & Full Stack Developer</h2>
                <h3></h3>
            </div>
        </div> --}}

@endsection
