@if (session()->has('user_id') != null && session('is_admin') ==1)
    @extends('includeUser.top')
    @section('title', 'Photographer Dashboard')
    @include('includeUser.nav')

    @yield('main')

    @include('includeUser.footer')
@else
    @include('error')
@endif
