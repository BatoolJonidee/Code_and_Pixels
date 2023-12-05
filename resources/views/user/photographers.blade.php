@extends('welcome')
@section('title', 'Photographers')

@section('main')
        <h1 id="photographers-page-header">Photographers</h1>
        <div id="photographers-container-div">
            @foreach ($photographers as $photographer)
                <div id="card-photographers-page">
                    <div id="img-photographers-div">
                        <img src="{{ asset('storage/' . $photographer->photo) }}" class="card-img-top"
                            alt="photographer profile picture">
                    </div>
                    <div>
                        <p id="card-title-photographers">
                            <a href="{{ route('photographerDetails', $photographer->id) }}">
                                {{ $photographer->fname . ' ' . $photographer->lname }}
                            </a>
                        </p>
                        <p>
                            {{ Str::limit($photographer->description, 60) }}
                            <a href="{{ route('photographerDetails', $photographer->id) }}">
                                See More
                            </a>
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
        <br><br>
@endsection
