@extends('employee.blank')
@section('title', 'Photographer Dashboard')
@section('main')
<div id="containerProfile" style="display: flex; justify-content: space-evenly; width:100%;">
    {{-- Left Div --}}
    {{-- Left Div --}}
    {{-- Left Div --}}
    {{-- Left Div --}}
    <div id="photoDivProfile"
        style="margin-top: 5%;margin-bottom: 5%;border:1px solid gray;box-shadow: 5px 5px 10px gray; border-radius:10px ;width:20%;padding:1%;display: flex;flex-direction: column">
        <div>
            <img src="{{ asset('storage/' . $photographer->photo) }}" alt="Photographer Profile Picture"
                style="border-radius: 50%;width:90%;margin-left:5%; cursor: pointer;" data-bs-toggle="modal"
                data-bs-target="#pictureEditModal">
        </div>
        {{-- Edit Profile Picture --}}
        <div class="modal fade" id="pictureEditModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <form method="post" action="{{ route('profilePictureEdit') }}" style=" width:100%;text-align: center"
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
    <div id="settingDiv"
    style="margin-top: 5%;border:1px solid gray;box-shadow: 5px 5px 10px gray; border-radius:10px ;width:70%;margin-bottom: 5%;padding:1%">

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
    <div id="fname-show"
        style="border-radius:5px; padding:1%; display: flex;width:100%;justify-content: space-between;background-color: rgb(233, 233, 233);">
        <div>
            <p style="color:black">First Name</p>
        </div>
        <div>
            <p style="color:black">{{ $photographer->fname }}</p>
        </div>
        <div>
            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#fnameEditModal"
                style="background-color: #076595; color:white">
                <i class="fa-solid fa-pen-to-square" style="cursor: pointer;"></i>
            </button>
        </div>
    </div>
    <!-- edit First Name Modal -->
    <!-- edit First Name Modal -->
    <!-- edit First Name Modal -->
    <!-- edit First Name Modal -->
    <form method="post" action="" style=" width:100%;text-align: center">
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
                                name="fname" class="editProfileInput" required></span><br>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn " id="save-fname-Button">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </form>


    {{-- Lname --}}
    {{-- Lname --}}
    {{-- Lname --}}
    {{-- Lname --}}
    <div id="lname-show" style="padding:1%; display: flex;width:100%;justify-content: space-between;">
        <div>
            <p style="color:black">Last Name</p>
        </div>
        <div>
            <p style="color:black">{{ $photographer->lname }}</p>
        </div>
        <div>
            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#lnameEditModal"
                style="background-color: #076595; color:white">
                <i class="fa-solid fa-pen-to-square" style="cursor: pointer;"></i>
            </button>
        </div>
    </div>

    <!-- edit Last Name Modal -->
    <!-- edit Last Name Modal -->
    <!-- edit Last Name Modal -->
    <!-- edit Last Name Modal -->
    <form method="post" action="" style=" width:100%;text-align: center">
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
                                name="lname" class="editProfileInput" required></span>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                            data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn" id="save-lname-Button">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    {{-- Email --}}
    {{-- Email --}}
    {{-- Email --}}
    {{-- Email --}}
    <div id="email-show"
        style="border-radius:5px;padding:1%; background-color: rgb(233, 233, 233);display: flex;width:100%;justify-content: space-between;">
        <div>
            <p style="color:black">Email</p>
        </div>
        <div>
            <p style="color:black">{{ $photographer->email }}</p>
        </div>
        <div>
            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#emailEditModal"
                style="background-color: #076595; color:white">
                <i class="fa-solid fa-pen-to-square" style="cursor: pointer;"></i>
            </button>
        </div>
    </div>

    <!-- edit email Modal -->
    <!-- edit email Modal -->
    <!-- edit email Modal -->
    <!-- edit email Modal -->
    <form method="post" action="" style=" width:100%;text-align: center">
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
                                name="email" class="editProfileInput" required></span>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                            data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn" id="save-email-Button">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    {{-- Password --}}
    {{-- Password --}}
    {{-- Password --}}
    {{-- Password --}}
    <div id="password-show" style="padding:1%; display: flex;width:100%;justify-content: space-between;">
        <div>
            <p style="color:black">Password</p>
        </div>
        <div>
            <p style="color:black">********</p>
        </div>
        <div>
            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#PasswordEditModal"
                style="background-color: #076595; color:white">
                <i class="fa-solid fa-pen-to-square" style="cursor: pointer;"></i>
            </button>
        </div>
    </div>

    <!-- edit password Modal -->
    <!-- edit password Modal -->
    <!-- edit password Modal -->
    <!-- edit password Modal -->
    <form method="post" action="" style=" width:100%;text-align: center">
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
                        <span><input type="password" name="password" class="editProfileInput"
                                required></span><br /><br />
                        <span>New Password</span>
                        <span><input id="passwordEditInput" type="password" name="newPassword"
                                class="editProfileInput" required></span>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                            data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn" id="save-password-Button">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    {{-- Description --}}
    {{-- Description --}}
    {{-- Description --}}
    {{-- Description --}}
    <div id="description-show" style="padding:1%; display: flex;width:100%;justify-content: space-between;">
        <div>
            <p style="color:black">Description</p>
        </div>
        <div>
            <p style="color:black">{{ $photographer->description }}</p>
        </div>
        <div>
            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#descriptionEditModal"
                style="background-color: #076595; color:white">
                <i class="fa-solid fa-pen-to-square" style="cursor: pointer;"></i>
            </button>
        </div>
    </div>

    <!-- edit Description Modal -->
    <!-- edit Description Modal -->
    <!-- edit Description Modal -->
    <!-- edit Description Modal -->
    <form method="post" action="" style=" width:100%;text-align: center">
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
                            <textarea cols="40" rows="5" name='address' class="editProfileInput" required>{{ $photographer->description }}</textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                            data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn" id="save-address-Button">Save changes</button>
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
@endsection
