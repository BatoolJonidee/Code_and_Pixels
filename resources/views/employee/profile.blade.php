@if (session()->has('user_id') != null && session('is_admin') == 1)

@extends('includeUser.top')
    @section('title', 'Photographer Profile')
    @include('includeUser.nav')
<div id="containerProfilePhotographer">
    {{-- Left Div --}}
    {{-- Left Div --}}
    {{-- Left Div --}}
    {{-- Left Div --}}
    <div id="photoDivProfilePhotographer">
        <div>
            <img id="profilePicPhotographer" src="{{ asset('storage/' . $photographer->photo) }}" alt="Photographer Profile Picture"
                data-bs-toggle="modal" data-bs-target="#pictureEditModal">
        </div>
        {{-- Edit Profile Picture --}}
        <div class="modal fade" id="pictureEditModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <form method="post" action="{{ url('profilePicPhotographer') }}" style=" width:100%;text-align: center"
                enctype="multipart/form-data">
                @csrf
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Profile Picture</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" value="{{ $photographer->id }}" name="id">
                            <img src="{{ asset('storage/' . $photographer->photo) }}" alt="Profile Picture"
                                style="width:70%;"><br><br>
                            <span><input type="file" value="{{ $photographer->photo }}" name="photo" required>
                            </span>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn" id="save-photo-Button">Save changes</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div style="margin-top:10%;text-align: center">
            <h1>{{ $photographer->fname . ' ' . $photographer->lname }}</h1>
        </div>
    </div>

    {{-- Right Divs  --}}
    {{-- Right Divs  --}}
    {{-- Right Divs  --}}
    {{-- Right Divs  --}}
    <div id="settingDivPhotographer">

    <h3>Settings</h3>
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
    @endif
    {{-- Fname  --}}
    {{-- Fname  --}}
    {{-- Fname  --}}
    {{-- Fname  --}}
    <div id="fname-showPhotographer">
        <div>
            <p>First Name</p>
        </div>
        <div>
            <p>{{ $photographer->fname }}</p>
        </div>
        <div>
            <button class="btn" type="button" data-bs-toggle="modal" data-bs-target="#fnameEditModal" style="background-color: #076595; color:white; cursor: pointer;">
                <i class="fa-solid fa-pen-to-square" ></i>
            </button>
        </div>
    </div>
    <!-- edit First Name Modal -->
    <!-- edit First Name Modal -->
    <!-- edit First Name Modal -->
    <!-- edit First Name Modal -->
    <form method="post" action="{{ url('fnamePhotographer') }}" class="profilePhotographerForm">
        @csrf
        <div class="modal fade" id="fnameEditModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Frist Name Edit</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" value="{{ $photographer->id }}" name="id">
                        <span>First Name</span>
                        <span><input id='fnameEditInput' type="text" value="{{ $photographer->fname }}"
                                name="fname" class="editProfileInputPhotographer" required></span><br>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn " id="save-fname-Button-Photographer">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </form>


    {{-- Lname --}}
    {{-- Lname --}}
    {{-- Lname --}}
    {{-- Lname --}}
    <div id="lname-showPhotographer">
        <div>
            <p>Last Name</p>
        </div>
        <div>
            <p>{{ $photographer->lname }}</p>
        </div>
        <div>
            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#lnameEditModal"
                style="background-color: #076595; color:white; cursor: pointer;">
                <i class="fa-solid fa-pen-to-square"></i>
            </button>
        </div>
    </div>

    <!-- edit Last Name Modal -->
    <!-- edit Last Name Modal -->
    <!-- edit Last Name Modal -->
    <!-- edit Last Name Modal -->
    <form method="post" action="{{ url('lnamePhotographer') }}" class="profilePhotographerForm">
        @csrf
        <div class="modal fade" id="lnameEditModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Last Name Edit</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" value="{{ $photographer->id }}" name="id">
                        <span>Last Name</span>
                        <span><input id="lnameEditInput" type="text" value="{{ $photographer->lname }}"
                                name="lname" class="editProfileInputPhotographer" required></span>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                            data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn" id="save-lname-Button-Photographer">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    {{-- Email --}}
    {{-- Email --}}
    {{-- Email --}}
    {{-- Email --}}
    <div id="email-showPhotographer">
        <div>
            <p>Email</p>
        </div>
        <div>
            <p>{{ $photographer->email }}</p>
        </div>
        <div>
            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#emailEditModal"
                style="background-color: #076595; color:white; cursor: pointer;">
                <i class="fa-solid fa-pen-to-square"></i>
            </button>
        </div>
    </div>

    <!-- edit email Modal -->
    <!-- edit email Modal -->
    <!-- edit email Modal -->
    <!-- edit email Modal -->
    <form method="post" action="{{ url('emailPhotographer') }}" class="profilePhotographerForm">
        @csrf
        <div class="modal fade" id="emailEditModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Email Edit</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" value="{{ $photographer->id }}" name="id">
                        <span>Email</span>
                        <span><input id="emailEditInput" type="email" value="{{ $photographer->email }}"
                                name="email" class="editProfileInputPhotographer" required></span>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                            data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn" id="save-email-Button-Photographer">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    {{-- Password --}}
    {{-- Password --}}
    {{-- Password --}}
    {{-- Password --}}
    <div id="password-showPhotographer">
        <div>
            <p>Password</p>
        </div>
        <div>
            <p>********</p>
        </div>
        <div>
            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#PasswordEditModal"
                style="background-color: #076595; color:white; cursor: pointer;">
                <i class="fa-solid fa-pen-to-square"></i>
            </button>
        </div>
    </div>

    <!-- edit password Modal -->
    <!-- edit password Modal -->
    <!-- edit password Modal -->
    <!-- edit password Modal -->
    <form method="post" action="{{ url('passwordPhotographer') }}" class="profilePhotographerForm">
        @csrf
        <div class="modal fade" id="passwordEditModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Password Edit</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" value="{{ $photographer->id }}" name="id">
                        <span>Old Password</span>
                        <span><input type="password" name="password" class="editProfileInputPhotographer"
                                required></span><br /><br />
                        <span>New Password</span>
                        <span><input id="passwordEditInput" type="password" name="newPassword"
                                class="editProfileInputPhotographer" required></span>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                            data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn" id="save-password-Button-Photographer">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    {{-- Description --}}
    {{-- Description --}}
    {{-- Description --}}
    {{-- Description --}}
    <div id="description-showPhotographer">
        <div>
            <p style="color:black">Description</p>
        </div>
        <div style="width:30%;">
            <p style="color:black">{!! nl2br(e($photographer->description)) !!}</p>
        </div>
        <div>
            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#descriptionEditModal"
                style="background-color: #076595; color:white; cursor: pointer;">
                <i class="fa-solid fa-pen-to-square"></i>
            </button>
        </div>
    </div>

    <!-- edit Description Modal -->
    <!-- edit Description Modal -->
    <!-- edit Description Modal -->
    <!-- edit Description Modal -->
    <form method="post" action="{{ url('descriptionPhotographer') }}" class="profilePhotographerForm">
        @csrf
        <div class="modal fade" id="descriptionEditModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Description Edit</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" value="{{ $photographer->id }}" name="id">
                        <span>Description</span>
                        <span>
                            <textarea cols="40" rows="5" name='description' class="editProfileInputPhotographer" required>{{ $photographer->description }}</textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                            data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn" id="save-description-Button-Photographer">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>

@include('includeUser.footer')
@else
    @include('error')
@endif
