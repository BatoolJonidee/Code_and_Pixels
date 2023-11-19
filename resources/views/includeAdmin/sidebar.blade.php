<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li class="nav-item ">
                        <a class="nav-link " href="{{url('dashboard')}}" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1">
                            {{-- <i class="fa-regular fa-user"></i> --}}
                            <i class="fas fa-chart-area"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('users')}}" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2">
                            <i class="fas fa-users"></i>
                            Users
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('categories')}}" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3">
                            <i class="  fas fa-clipboard"></i>
                            Categories
                        </a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="#" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3">
                            <i class=" fas fa-code"></i>
                            Developers
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4">
                            <i class=" fas fa-eye"></i>
                            Designers
                        </a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('photographers')}}" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5">
                            <i class=" fas fa-camera"></i>
                            Photographers
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" aria-expanded="false" data-target="#submenu-6" aria-controls="submenu-6">
                            <i class=" fas fa-calendar-alt"></i>
                            Appointments
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('contacts')}}" aria-expanded="false" data-target="#submenu-7" aria-controls="submenu-7">
                            <i class=" fas fa-comment-alt"></i>
                            Contacts
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
