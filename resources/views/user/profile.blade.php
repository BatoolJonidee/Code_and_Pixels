@extends('welcome')
@section('title', 'Profile')

@section('main')
@if(session()->has('user_id')!=NULL && session('is_admin')==0)
<div id="containerProfile" style="display: flex; justify-content: space-evenly; width:100%;">
    {{-- Left Div --}}
    {{-- Left Div --}}
    {{-- Left Div --}}
    {{-- Left Div --}}
    <div id="photoDivProfile" style="margin-top: 5%;margin-bottom: 5%;border:1px solid gray;box-shadow: 5px 5px 10px gray; border-radius:10px ;width:20%;padding:1%;display: flex;flex-direction: column">
        <div >
            <img src="{{ asset('storage/' . $user->photo) }}" alt="Profile Picture" style="border-radius: 50%;width:90%;margin-left:5%; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#pictureEditModal">
        </div>
        {{-- Edit Profile Picture --}}
        <div class="modal fade" id="pictureEditModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <form method="post"  action="{{ route('profilePictureEdit') }}" style=" width:100%;text-align: center" enctype="multipart/form-data">
            @csrf
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Profile Picture</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" value="{{ $user->id }}" name="id">
                            <img src="{{ asset('storage/' . $user->photo) }}" alt="Profile Picture" style="width:70%;"><br><br>
                            <span><input type="file" value="{{ $user->photo }}" name="photo" required>
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
            <h1>{{$user->fname ." ". $user->lname}}</h1>
        </div>
        <div id="settingBtn" style="text-align: center ; margin-top:10% ; background-color: #076595; color:white ;cursor: pointer; border-radius: 10px;">
            <h5>
                Setting
            </h5>
        </div>
        <div id="appointmentBtn" style="text-align: center ; margin-top:5% ; background-color: #076595; color:white ;cursor: pointer; border-radius: 10px;">
            <h5>
                Appointments
            </h5>
        </div>
    </div>



    {{-- Right Divs  --}}
    {{-- Right Divs  --}}
    {{-- Right Divs  --}}
    {{-- Right Divs  --}}
    <div id="settingDiv" style="margin-top: 5%;border:1px solid gray;box-shadow: 5px 5px 10px gray; border-radius:10px ;width:70%;margin-bottom: 5%;padding:1%">

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
        <div id="fname-show" style="border-radius:5px; padding:1%; display: flex;width:100%;justify-content: space-between;background-color: rgb(233, 233, 233);">
            <div>
                <p style="color:black">First Name</p>
            </div>
            <div>
                <p style="color:black">{{ $user->fname }}</p>
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
        <form method="post" action="{{ route('fnameEdit') }}" style=" width:100%;text-align: center">
            @csrf
            <div class="modal fade" id="fnameEditModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Frist Name Edit</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" value="{{ $user->id }}" name="id">
                            <span>First Name</span>
                            <span><input id='fnameEditInput' type="text" value="{{ $user->fname }}" name="fname" class="editProfileInput"
                                    required></span><br>
                            <p id='fnameEditP' style="display: none">** Letters Only</p>
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
                <p style="color:black">{{ $user->lname }}</p>
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
        <form method="post" action="{{ route('lnameEdit') }}" style=" width:100%;text-align: center">
            @csrf
            <div class="modal fade" id="lnameEditModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Last Name Edit</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" value="{{ $user->id }}" name="id">
                            <span>Last Name</span>
                            <span><input id="lnameEditInput" type="text" value="{{ $user->lname }}" name="lname" class="editProfileInput"
                                    required></span>
                            <p id='lnameEditP' style="display: none">** Letters Only</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
        <div id="email-show" style="border-radius:5px;padding:1%; background-color: rgb(233, 233, 233);display: flex;width:100%;justify-content: space-between;">
            <div>
                <p style="color:black">Email</p>
            </div>
            <div>
                <p style="color:black">{{ $user->email }}</p>
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
        <form method="post" action="{{ route('emailEdit') }}" style=" width:100%;text-align: center">
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
                            <input type="hidden" value="{{ $user->id }}" name="id">
                            <span>Email</span>
                            <span><input id="emailEditInput" type="email" value="{{ $user->email }}" name="email"
                                    class="editProfileInput" required></span>
                            <p id="emailEditP" style="display: none">** example@mail.com</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
        <form method="post" action="{{ route('passwordEdit') }}" style=" width:100%;text-align: center">
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
                            <input type="hidden" value="{{ $user->id }}" name="id">
                            <span>Old Password</span>
                            <span><input type="password" name="password" class="editProfileInput"
                                    required></span><br /><br />
                            <span>New Password</span>
                            <span><input id="passwordEditInput" type="password" name="newPassword" class="editProfileInput" required></span>
                            <p style="display: none" id='passwordEditP' >Password must be 8-32 characters.<br>
                                Password must include uppercase.<br>
                                Password must include lowercase.<br>
                                Password must include number.<br>
                                Password must include special character.</p>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn" id="save-password-Button">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        {{-- Phone --}}
        {{-- Phone --}}
        {{-- Phone --}}
        {{-- Phone --}}
        <div id="phone-show" style="border-radius:5px;padding:1%; background-color: rgb(233, 233, 233);display: flex;width:100%;justify-content: space-between;">
            <div>
                <p style="color:black">Phone</p>
            </div>
            <div>
                <p style="color:black">0{{ $user->phone }}</p>
            </div>
            <div>
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#phoneEditModal"
                    style="background-color: #076595; color:white">
                    <i class="fa-solid fa-pen-to-square" style="cursor: pointer;"></i>
                </button>
            </div>
        </div>

        <!-- edit phone Modal -->
        <!-- edit phone Modal -->
        <!-- edit phone Modal -->
        <!-- edit phone Modal -->
        <form method="post" action="{{ route('phoneEdit') }}" style=" width:100%;text-align: center">
            @csrf
            <div class="modal fade" id="phoneEditModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Phone Edit</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" value="{{ $user->id }}" name="id">
                            <span>Phone</span>
                            <span><input id="phoneEditInput" type="number" value="0{{ $user->phone }}" name="phone"
                                    class="editProfileInput" required></span>
                            <p id="phoneEditP" style="display: none">** Numbers Only (10 Digits)</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn" id="save-phone-Button">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        {{-- gender --}}
        {{-- gender --}}
        {{-- gender --}}
        {{-- gender --}}
        <div id="gender-show" style="padding:1%; display: flex;width:100%;justify-content: space-between;">
            <div>
                <p style="color:black">Gender</p>
            </div>
            <div>
                <p style="color:black">{{ $user->gender }}</p>
            </div>
            <div>
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#genderEditModal"
                    style="background-color: #076595; color:white">
                    <i class="fa-solid fa-pen-to-square" style="cursor: pointer;"></i>
                </button>
            </div>
        </div>

        <!-- edit gender Modal -->
        <!-- edit gender Modal -->
        <!-- edit gender Modal -->
        <!-- edit gender Modal -->
        <form method="post" action="{{ route('genderEdit') }}" style=" width:100%;text-align: center">
            @csrf
            <div class="modal fade" id="genderEditModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Gender Edit</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" value="{{ $user->id }}" name="id">
                            <span>Gender</span>
                            <span>
                                @if ($user->gender == 'Male')
                                    <select name='gender' class="editProfileInput" required>
                                        <option value='Male' selected>Male</option>
                                        <option value='Female'>Female</option>
                                    </select>
                                @else
                                    <select name='gender' class="editProfileInput" required>
                                        <option value='Male'>Male</option>
                                        <option value='Female' selected>Female</option>
                                    </select>
                                @endif
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn" id="save-gender-Button">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        {{-- city --}}
        {{-- city --}}
        {{-- city --}}
        {{-- city --}}
        <div id="city-show" style="border-radius:5px;padding:1%; background-color: rgb(233, 233, 233);display: flex;width:100%;justify-content: space-between;">
            <div>
                <p style="color:black">City</p>
            </div>
            <div>
                <p style="color:black">{{ $user->city }}</p>
            </div>
            <div>
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#cityEditModal"
                    style="background-color: #076595; color:white">
                    <i class="fa-solid fa-pen-to-square" style="cursor: pointer;"></i>
                </button>
            </div>
        </div>

        <!-- edit city Modal -->
        <!-- edit city Modal -->
        <!-- edit city Modal -->
        <!-- edit city Modal -->
        <form method="post" action="{{ route('cityEdit') }}" style=" width:100%;text-align: center">
            @csrf
            <div class="modal fade" id="cityEditModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">City Edit</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" value="{{ $user->id }}" name="id">
                            <span>City</span>
                            <span>
                                <select id="city" name="city" class="editProfileInput">
                                    @php
                                        $cities = [
                                            'Amman' => 'Amman',
                                            'Ajloun' => 'Ajloun',
                                            'Aqaba' => 'Aqaba',
                                            'Balqa' => 'Balqa',
                                            'Irbid' => 'Irbid',
                                            'Jerash' => 'Jerash',
                                            'Karak' => 'Karak',
                                            'Ma\'an' => 'Ma\'an',
                                            'Madaba' => 'Madaba',
                                            'Mafraq' => 'Mafraq',
                                            'Tafilah' => 'Tafilah',
                                            'Zarqa' => 'Zarqa',
                                        ];
                                    @endphp

                                    @foreach ($cities as $cityValue => $city)
                                        <option value="{{ $cityValue }}"
                                            {{ $user->city == $cityValue ? 'selected' : '' }}>
                                            {{ $city }}
                                        </option>
                                    @endforeach
                                </select>
                            </span>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn" id="save-city-Button">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        {{-- Address --}}
        {{-- Address --}}
        {{-- Address --}}
        {{-- Address --}}
        <div id="address-show" style="padding:1%; display: flex;width:100%;justify-content: space-between;">
            <div>
                <p style="color:black">Address</p>
            </div>
            <div>
                <p style="color:black">{{ $user->address }}</p>
            </div>
            <div>
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#addressEditModal"
                    style="background-color: #076595; color:white">
                    <i class="fa-solid fa-pen-to-square" style="cursor: pointer;"></i>
                </button>
            </div>
        </div>

        <!-- edit First Name Modal -->
        <!-- edit First Name Modal -->
        <!-- edit First Name Modal -->
        <!-- edit First Name Modal -->
        <form method="post" action="{{ route('addressEdit') }}" style=" width:100%;text-align: center">
            @csrf
            <div class="modal fade" id="addressEditModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Address Edit</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" value="{{ $user->id }}" name="id">
                            <span>Address</span>
                            <span>
                                <textarea cols="40" rows="1" name='address' class="editProfileInput"
                                    required>{{ $user->address }}</textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn" id="save-address-Button">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
    <div id="appointmentDiv" style="display:none;margin-top: 5%;border:1px solid gray;box-shadow: 5px 5px 10px gray; border-radius:10px ;width:70%;margin-bottom: 5%;padding:1%">
        dfgrgrfv<br>
        cwdcdqwcq<br>

    </div>
</div>
<script src="js/profile.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
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
			<a href="{{route('reg')}}">Login | Register</a>
            <a href="{{url('/')}}">Home Page</a>
		</div>
	</div>
    @endif
@endsection
