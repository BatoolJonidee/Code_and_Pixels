<script src="https://kit.fontawesome.com/a11421cbe7.js" crossorigin="anonymous"></script>
<header>
    <div id="logoNavDiv">
        <div id="logoDiv">
            <a class="aLogoNav" href="{{ url('/') }}">
                <img id="logo-img" src="{{ url('storage/logo.png') }}" alt="logo image" />
            </a>
        </div>
        <div id="navbar-div">
            @if (session()->has('user_id') != null && session('is_admin') == 0)
                <p><a class="aNav" href="{{ url('/') }}">Home</a></p>
                <p><a class="aNav" href="{{ url('photographer') }}">Photographers</a></p>
                <p><a class="aNav" href="{{ url('/contact') }}">Contact</a></p>
                <p><a class="aNav" href="">About</a></p>
                <p>
                    <a class="aNav" href=" {{ route('profile') }} "><i class="fa-solid fa-user"></i></a>&nbsp;|&nbsp;
                    {{-- <a class="aNav" href=""><i class="fa-solid fa-cart-shopping "></i></a>&nbsp;|&nbsp; --}}
                    <a class="aNav" href="{{ route('logout') }}"><i class="fa-solid fa-right-to-bracket "></i></a>
                </p>
            @elseif (session()->has('user_id') == null && session('is_admin') == 0)
                <p><a class="aNav" href="{{ url('/') }}">Home</a></p>
                <p><a class="aNav" href="{{ url('photographer') }}">Photographers</a></p>
                <p><a class="aNav" href="{{ url('/contact') }}">Contact</a></p>
                <p><a class="aNav" href="">About</a></p>
                <p><a class="aLoginNav" href="{{ route('reg') }}">Login | Register</a></p>
            @else
                <p><a class="pNav" href="{{ url('Photographer-dashboard') }}">Sessions</a></p>
                <p><a class="pNav" href="{{ url('Photographer-schedule') }}">Schedule</a></p>
                <p>
                    <a class="pNav" href=" {{ url('Photographer-profile') }} ">Profile</a>
                </p>
                <p>
                    <a class="pNav" href="{{ route('logout') }}">Logout</a>
                </p>
            @endif
        </div>
        <div id="bars-div">
            <p>
                <i class="fa-solid fa-bars fa-xl"></i>
            </p>
        </div>
    </div>
    <div id="mobile-nav-div">
        @if (session()->has('user_id') != null && session('is_admin') == 0)
            <p><a class="aNav" href="{{ url('/') }}">Home</a></p>
            {{-- <p><a class="aNav" href="">Developers</a></p> --}}
            <p><a class="aNav" href="{{ url('photographer') }}">Photographers</a></p>
            <p><a class="aNav" href="{{ url('/contact') }}">Contact</a></p>
            <p><a class="aNav" href="">About</a></p>
            <p>
                <a class="aNav" href=" {{ route('profile') }} "><i class="fa-solid fa-user "></i></a> |
                {{-- <a class="aNav" href=""><i class="fa-solid fa-cart-shopping "></i></a> | --}}
                <a class="aNav" href=" {{ route('logout') }} "><i class="fa-solid fa-right-to-bracket "></i></a>
            </p>
        @elseif(session()->has('user_id') == null)
            <p><a class="aNav" href="{{ url('/') }}">Home</a></p>
            {{-- <p><a class="aNav" href="">Developers</a></p> --}}
            <p><a class="aNav" href="{{ url('photographer') }}">Photographers</a></p>
            <p><a class="aNav" href="{{ url('/contact') }}">Contact</a></p>
            <p><a class="aNav" href="">About</a></p>
            <p><a class="aLoginNav" href="{{ route('reg') }}">Login | Register</a></p>
        @else
            <p><a class="aNav" href="{{ url('Photographer-dashboard') }}">Sessions</a></p>
            <p><a class="aNav" href="">Schedule</a></p>
            <p>
                <a class="aNav" href="{{ url('Photographer-profile') }}"><i class="fa-solid fa-user "></i></a> |
                <a class="aNav" href=" {{ route('logout') }} "><i class="fa-solid fa-right-to-bracket "></i></a>
            </p>
        @endif
    </div>
</header>
