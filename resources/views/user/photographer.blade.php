<base href="/public">
@extends('welcome')
@section('title', 'Photographer')

@section('main')
<p>{{$photographer->fname . " " . $photographer->lname}}</p>

@endsection
