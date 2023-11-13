@if (session()->has('user_id') != null && session('is_admin') == 2)
    @include('includeAdmin.header')
    @include('includeAdmin.sidebar')
    <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                @yield('main')
            </div>
        </div>
    </div>
    @include('includeAdmin.end')
@else
    <div id="notfound">
        <div class="notfound">
            <div class="notfound-bg">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <h1>oops!</h1>
            <h2>Error : Can't Access To This Page Before Login</h2>
            <a href="{{ route('reg') }}">Login | Register</a>
            <a href="{{ url('/') }}">Home Page</a>
        </div>
    </div>
@endif
