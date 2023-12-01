<div class="dashboard-main-wrapper">
<div class="dashboard-header">
    <nav class="navbar navbar-expand-lg bg-white fixed-top">
        <a class="navbar-brand" href="{{ url('dashboard') }}">Code And Pixels</a>
        {{-- <button  type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-align-justify navbar-toggler-icon"></i>
        </button> --}}
        <a class="nav-link nav-user-img navbar-toggler" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="{{ asset('storage/images/profilePicture.png') }}" alt="Profile Image" class="user-avatar-md rounded-circle">
        </a>
        <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2" style="text-align: center">
            <div class="nav-user-info" >
                <h5 class="mb-0 text-white nav-user-name">{{ session('user_name') }} </h5>
            </div>
            <a class="dropdown-item" href="{{ url('admin-profile') }}"><i class="fas fa-user mr-2"></i>Account</a>
            <a class="dropdown-item" href="{{route('logout')}}"><i class="fas fa-power-off mr-2"></i>Logout</a>
        </div>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto navbar-right-top">
                <li class="nav-item dropdown nav-user">
                    <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ asset('storage/images/profilePicture.png') }}" alt="Profile Image" class="user-avatar-md rounded-circle">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2" style="text-align: center">
                        <div class="nav-user-info" >
                            <h5 class="mb-0 text-white nav-user-name">{{ session('user_name') }} </h5>
                        </div>
                        <a class="dropdown-item" href="{{ url('admin-profile') }}"><i class="fas fa-user mr-2"></i>Account</a>
                        <a class="dropdown-item" href="{{route('logout')}}"><i class="fas fa-power-off mr-2"></i>Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>
