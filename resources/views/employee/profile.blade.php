@extends('includeEmployee.top')

@section('title', 'Photographer | Profile')

@extends('includeEmployee.blank')
@section('main')
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <hr>
            <div class="col-lg-12">
                <div class="user-data m-b-30" style="background-color: white;padding:2%">
                    <div style="width:100%">
                        <div style="display:flex;justify-content: space-between ">
                            <div>
                                <h2 class="title-3">
                                    Profile
                                </h2>
                            </div>
                        </div>
                        <div id="settingDiv"
                            style="margin-top: 5%;border:1px solid gray;box-shadow: 5px 5px 10px gray; border-radius:10px ;width:70%;margin-bottom: 5%;padding:1%">
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
                            <div class="table-responsive table-data">
                            <div id="fname-show"
                                style="border-radius:5px; padding:1%; display: flex;width:100%;justify-content: space-between;background-color: rgb(233, 233, 233);">
                                <div>
                                    <p style="color:black">First Name</p>
                                </div>
                                <div>
                                    <p style="color:black">{{ $photographer->fname }}</p>
                                </div>
                                <div>
                                    <button type="button" class="btn" data-bs-toggle="modal"
                                        data-bs-target="#fnameEditModal" style="background-color: #076595; color:white">
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
                                <div class="modal fade" id="fnameEditModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn " id="save-fname-Button">Save
                                                    changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>


                            {{-- Lname --}}
                            {{-- Lname --}}
                            {{-- Lname --}}
                            {{-- Lname --}}
                            <div id="lname-show"
                                style="padding:1%; display: flex;width:100%;justify-content: space-between;">
                                <div>
                                    <p style="color:black">Last Name</p>
                                </div>
                                <div>
                                    <p style="color:black">{{ $photographer->lname }}</p>
                                </div>
                                <div>
                                    <button type="button" class="btn" data-bs-toggle="modal"
                                        data-bs-target="#lnameEditModal" style="background-color: #076595; color:white">
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
                                <div class="modal fade" id="lnameEditModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                <button type="submit" class="btn" id="save-lname-Button">Save
                                                    changes</button>
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
                                    <button type="button" class="btn" data-bs-toggle="modal"
                                        data-bs-target="#emailEditModal" style="background-color: #076595; color:white">
                                        <i class="fa-solid fa-pen-to-square" style="cursor: pointer;"></i>
                                    </button>
                                </div>
                            </div>

                            <!-- edit email Modal -->
                            <!-- edit email Modal -->
                            <!-- edit email Modal -->
                            <!-- edit email Modal -->
                            <form method="post" action=""
                                style=" width:100%;text-align: center">
                                @csrf
                                <div class="modal fade" id="emailEditModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                <span><input id="emailEditInput" type="email"
                                                        value="{{ $photographer->email }}" name="email"
                                                        class="editProfileInput" required></span>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn" id="save-email-Button">Save
                                                    changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            {{-- Password --}}
                            {{-- Password --}}
                            {{-- Password --}}
                            {{-- Password --}}
                            <div id="password-show"
                                style="padding:1%; display: flex;width:100%;justify-content: space-between;">
                                <div>
                                    <p style="color:black">Password</p>
                                </div>
                                <div>
                                    <p style="color:black">********</p>
                                </div>
                                <div>
                                    <button type="button" class="btn" data-bs-toggle="modal"
                                        data-bs-target="#PasswordEditModal"
                                        style="background-color: #076595; color:white">
                                        <i class="fa-solid fa-pen-to-square" style="cursor: pointer;"></i>
                                    </button>
                                </div>
                            </div>

                            <!-- edit password Modal -->
                            <!-- edit password Modal -->
                            <!-- edit password Modal -->
                            <!-- edit password Modal -->
                            <form method="post" action=""
                                style=" width:100%;text-align: center">
                                @csrf
                                <div class="modal fade" id="passwordEditModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                <button type="submit" class="btn" id="save-password-Button">Save
                                                    changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            {{-- Description--}}
                            {{-- Description--}}
                            {{-- Description--}}
                            {{-- Description--}}
                            <div id="description-show"
                                style="padding:1%; display: flex;width:100%;justify-content: space-between;border-radius:5px; background-color: rgb(233, 233, 233); width:100%;">
                                <div>
                                    <p style="color:black">Description</p>
                                </div>
                                <div style="width:40%">
                                    <p style="color:black" >{!! nl2br(e($photographer->description)) !!}</p>
                                </div>
                                <div>
                                    <button type="button" class="btn" data-bs-toggle="modal"
                                        data-bs-target="#descriptionEditModal" style="background-color: #076595; color:white">
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
                                <div class="modal fade" id="descriptionEditModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Description Edit</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <input type="hidden" value="{{ $photographer->id }}" name="id">
                                                <span>Address</span>
                                                <span>
                                                    <textarea cols="40" rows="5" name='address' class="editProfileInput" required>{{ $photographer->description }}</textarea>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn" id="save-address-Button">Save
                                                    changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
        {{-- <script src="js/usersAdmin.js"></script> --}}
    @endsection
