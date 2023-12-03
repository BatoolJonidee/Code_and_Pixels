<script src="https://kit.fontawesome.com/a11421cbe7.js" crossorigin="anonymous"></script>
<header>
    <div id="logoNavDiv">
        <div id="logoDiv">
            @if (session()->has('user_id') != null && session('is_admin') == 0 || session()->has('user_id') == null)
            <a class="aLogoNav" href="{{ url('/') }}">
                <img id="logo-img" src="{{ url('storage/logo.png') }}" alt="logo image" />
            </a>
            @endif
            @if(session()->has('user_id') != null && session('is_admin') == 1)
            <a class="aLogoNav" href="{{ url('Photographer-dashboard') }}">
                <img id="logo-img" src="{{ url('storage/logo.png') }}" alt="logo image" />
            </a>
            @endif
        </div>
        <div id="navbar-div">
            @if (session()->has('user_id') != null && session('is_admin') == 0)
                <p><a class="aNav" href="{{ url('/') }}">Home</a></p>
                <p><a class="aNav" href="{{ url('photographer') }}">Photographers</a></p>
                <p><a class="aNav" href="{{ url('contact') }}">Contact</a></p>
                <p><a class="aNav" href="{{ url('about') }}">About</a></p>
                <p>
                    <a class="aNav" href=" {{ route('profile') }} "><i class="fa-solid fa-user"></i></a>&nbsp;|&nbsp;
                    {{-- <a class="aNav" href=""><i class="fa-solid fa-cart-shopping "></i></a>&nbsp;|&nbsp; --}}
                    <a class="aNav" href="{{ route('logout') }}"><i class="fa-solid fa-right-to-bracket "></i></a>
                </p>
            @endif
            @if (session()->has('user_id') == null || session('is_admin') == 2)
                <p><a class="aNav" href="{{ url('/') }}">Home</a></p>
                <p><a class="aNav" href="{{ url('photographer') }}">Photographers</a></p>
                <p><a class="aNav" href="{{ url('contact') }}">Contact</a></p>
                <p><a class="aNav" href="{{ url('about') }}">About</a></p>
                <p><a class="aLoginNav" href="{{ route('reg') }}">Login | Register</a></p>
            @endif
            @if (session()->has('user_id') != null && session('is_admin') == 1)
                
                
                <p><a class="aNav" href="{{ url('Photographer-dashboard') }}">Sessions</a></p>
                <p><a class="aNav" href="{{ url('Photographer-schedule') }}">Schedule</a></p>
                <p><a class="aNav" href="{{ url('contact') }}">Contact</a></p>
                <p><a class="aNav" href="{{ url('about') }}">About</a></p>
                <p>
                    <a class="aNav" href=" {{ url('Photographer-profile') }} "><i class="fa-solid fa-user"></i></a>&nbsp;|&nbsp;
                    <a class="aNav" href="{{ route('logout') }}"><i class="fa-solid fa-right-to-bracket "></i></a>
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
            <p><a class="aNav" href="{{ url('photographer') }}">Photographers</a></p>
            <p><a class="aNav" href="{{ url('contact') }}">Contact</a></p>
            <p><a class="aNav" href="{{ url('about') }}">About</a></p>
            <p>
                <a class="aNav" href=" {{ route('profile') }} "><i class="fa-solid fa-user "></i></a> |
                <a class="aNav" href=" {{ route('logout') }} "><i class="fa-solid fa-right-to-bracket "></i></a>
            </p>
        @endif
        @if(session()->has('user_id') == null || session('is_admin')==2)
            <p><a class="aNav" href="{{ url('/') }}">Home</a></p>
            {{-- <p><a class="aNav" href="">Developers</a></p> --}}
            <p><a class="aNav" href="{{ url('photographer') }}">Photographers</a></p>
            <p><a class="aNav" href="{{ url('contact') }}">Contact</a></p>
            <p><a class="aNav" href="{{ url('about') }}">About</a></p>
            <p><a class="aLoginNav" href="{{ route('reg') }}">Login | Register</a></p>
        @endif
        @if (session()->has('user_id') != null && session('is_admin') == 1)
            <p><a class="aNav" href="{{ url('Photographer-dashboard') }}">Sessions</a></p>
            <p><a class="aNav" href="{{ url('Photographer-schedule') }}">Schedule</a></p>
            <p><a class="aNav" href="{{ url('contact') }}">Contact</a></p>
            <p><a class="aNav" href="{{ url('about') }}">About</a></p>
            <p>
                <a class="aNav" href="{{ url('Photographer-profile') }}"><i class="fa-solid fa-user "></i></a> |
                <a class="aNav" href=" {{ route('logout') }} "><i class="fa-solid fa-right-to-bracket "></i></a>
            </p>
        @endif
    </div>
</header>
