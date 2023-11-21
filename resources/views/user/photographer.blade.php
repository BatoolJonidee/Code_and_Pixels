<base href="/public">
@extends('welcome')
@section('title', 'Photographer')

@section('main')
    <div id="photographerDetails-container">
        <div id="photographerDetails-imgDiv">
            <img id="photographerDetails-profilePic" src="{{ asset('storage/' . $photographer->photo) }}" alt="photographer profile picture" />
        </div>
        <div id="photographerDetails-detailsDiv">
            <h1 id="photographerDetails-title">{{$photographer->fname . " " . $photographer->lname}}</h1><br/>
            <p>{!! nl2br(e($photographer->description)) !!}</p><br>
            <p id="photographerDetails-bookBtn">Book Session</p>
        </div>
    </div>
@endsection
