
<script src="https://kit.fontawesome.com/a11421cbe7.js" crossorigin="anonymous"></script>
<header>
    <div id="logoNavDiv">
        <div id="logoDiv">
            <a class="aLogoNav" href="{{url('/')}}" >
                <img id="logo-img" src="{{url('storage/logo.png')}}" alt="logo image"/>
            </a>
        </div>
        <div id="navbar-div">
            <p><a class="aNav" href="{{url('/')}}">Home</a></p>
            {{-- <p><a class="aNav" href="">Developers</a></p>
            <p><a class="aNav" href="">Designers</a></p> --}}
            <p><a class="aNav" href="{{ url('photographer') }}">Photographers</a></p>
            <p><a class="aNav" href="{{url('/contact')}}">Contact</a></p>
            <p><a class="aNav" href="">About</a></p>
            @if(session()->has('user_id')!=NULL)
            <p>
                <a class="aNav" href=" {{ route('profile') }} "><i class="fa-solid fa-user"></i></a>&nbsp;|&nbsp;
                {{-- <a class="aNav" href=""><i class="fa-solid fa-cart-shopping "></i></a>&nbsp;|&nbsp; --}}
                <a class="aNav" href="{{route('logout')}}"><i class="fa-solid fa-right-to-bracket "></i></a>
            </p>
            @else
                <p><a class="aLoginNav" href="{{route('reg')}}">Login | Register</a></p>
            @endif
        </div>
        <div id="bars-div">
            <p>
                <i class="fa-solid fa-bars fa-xl"></i>
            </p>
        </div>
    </div>
    <div id="mobile-nav-div">
        <p><a class="aNav" href="{{url('/')}}">Home</a></p>
        <p><a class="aNav" href="">Developers</a></p>
        <p><a class="aNav" href="{{ url('photographer') }}">Photographers</a></p>
        <p><a class="aNav" href="{{url('/contact')}}">Contact</a></p>
        <p><a class="aNav" href="">About</a></p>
        @if(session()->has('user_id')!=NULL)
        <p>
            <a class="aNav" href=" {{ route('profile') }} "><i class="fa-solid fa-user "></i></a> |
            {{-- <a class="aNav" href=""><i class="fa-solid fa-cart-shopping "></i></a> | --}}
            <a class="aNav" href=" {{route('logout')}} "><i class="fa-solid fa-right-to-bracket "></i></a>
        </p>
        @else
            <p><a class="aLoginNav" href="{{route('reg')}}">Login | Register</a></p>
        @endif
    </div>
</header>
