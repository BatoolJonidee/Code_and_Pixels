
@extends('includeAdmin.top')

@section('title', 'Admin Dashboard | Profile')

@extends('includeAdmin.blank')
@section('main')
    <div class="row">

        <div class="col-xl-4 col-lg-4 col-md-5 col-sm-12 col-12">

            <div class="card">
                <div class="card-body">
                    <div class="user-avatar text-center d-block">
                        <img src="{{ asset('storage/' . $admin->photo) }}" alt="Admin Avatar"
                            class="rounded-circle" data-bs-toggle="modal" data-bs-target="#pictureEditModal"
                            style="cursor: pointer; width:80%;">
                    </div>
                    <div class="text-center">
                        <h2 class="font-24 mb-0">{{ $admin->fname . ' ' . $admin->lname }}</h2>
                    </div>
                </div>
            </div>
        </div>
        {{-- Edit Profile Picture --}}
        {{-- Edit Profile Picture --}}
        {{-- Edit Profile Picture --}}
        {{-- Edit Profile Picture --}}
        <div class="modal fade" id="pictureEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <form method="post" action="{{ route('profilePictureEdit') }}" style=" width:100%;text-align: center"
                enctype="multipart/form-data">
                @csrf
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Profile Picture</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                                    class=" far fa-window-close"></i></button>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" value="{{ $admin->id }}" name="id">
                            <img src="{{ asset('storage/' . $admin->photo) }}" alt="Profile Picture"
                                style="width:70%;"><br><br>
                            <span><input type="file" value="{{ $admin->photo }}" name="photo" style="border-radius: 5px; padding:2px 5px; background-color: rgb(223, 223, 223);" required>
                            </span>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn " data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn" style="background-color: #076595;color:white">Save
                                changes</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-xl-8 col-lg-9 col-md-7 col-sm-12 col-12">
            <div class="user-data m-b-30" style="background-color: white;padding:2%">
                <div style="width:100%">
                    <div style="display:flex;justify-content: space-between ">
                        <div>
                            <h2 class="title-3">
                                <i class="zmdi zmdi-account-calendar"></i> Profile
                            </h2>
                        </div>
                    </div>
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
                    <div class="table-responsive table-data">

                        <table class="table table-striped" >
                            {{-- first name --}}
                            {{-- first name --}}
                            {{-- first name --}}
                            {{-- first name --}}
                            <tr>
                                <th>First Name</th>
                                <td>{{ $admin->fname }}</td>
                                <td>
                                    <input type="button" class="btn btn-outline-primary" value="Edit" name="editpro"
                                        data-bs-toggle="modal" data-bs-target="#fnameEditModal">
                                </td>
                            </tr>
                            {{-- endit first name --}}
                            {{-- endit first name --}}
                            {{-- endit first name --}}
                            {{-- endit first name --}}
                            <form method="post" action="{{ route('fnameEdit') }}" style=" width:100%;text-align:center">
                                @csrf
                                <div class="modal fade" id="fnameEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="text-align: center">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Frist Name Edit</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"><i class=" far fa-window-close"></i></button>
                                            </div>
                                            <div class="modal-body">
                                                <input type="hidden" value="{{ $admin->id }}" name="id">
                                                <span>First Name</span>
                                                <span><input type="text" value="{{ $admin->fname }}"
                                                        name="fname" style="border-radius: 5px; padding:2px 5px; background-color: rgb(223, 223, 223);" required></span><br>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn "
                                                    style="background-color: #076595;color:white">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            {{-- last name --}}
                            {{-- last name --}}
                            {{-- last name --}}
                            {{-- last name --}}
                            <tr>
                                <th>Last Name</th>
                                <td>{{ $admin->lname }}</td>
                                <td>
                                    <input type="button" class="btn btn-outline-primary" value="Edit" name="editpro"
                                        data-bs-toggle="modal" data-bs-target="#lnameEditModal">
                                </td>
                            </tr>
                            {{-- edit last name --}}
                            {{-- edit last name --}}
                            {{-- edit last name --}}
                            {{-- edit last name --}}
                            <form method="post" action="{{ route('lnameEdit') }}"
                                style=" width:100%;text-align: center">
                                @csrf
                                <div class="modal fade" id="lnameEditModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true" style="text-align: center">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Last Name Edit</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                                                    class=" far fa-window-close"></i></button>
                                            </div>
                                            <div class="modal-body">
                                                <input type="hidden" value="{{ $admin->id }}" name="id">
                                                <span>Last Name</span>
                                                <span><input type="text" value="{{ $admin->lname }}" name="lname"
                                                    style="border-radius: 5px; padding:2px 5px; background-color: rgb(223, 223, 223);" required></span>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn"
                                                    style="background-color: #076595;color:white">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            {{-- email --}}
                            {{-- email --}}
                            {{-- email --}}
                            {{-- email --}}
                            <tr>
                                <th>Email</th>
                                <td>{{ $admin->email }}</td>
                                <td>
                                    <input type="button" class="btn btn-outline-primary" value="Edit" name="editpro"
                                        data-bs-toggle="modal" data-bs-target="#emailEditModal">
                                </td>
                            </tr>
                            {{-- edit email --}}
                            {{-- edit email --}}
                            {{-- edit email --}}
                            {{-- edit email --}}
                            <form method="post" action="{{ route('emailEdit') }}" style=" width:100%;text-align: center">
                                @csrf
                                <div class="modal fade" id="emailEditModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true" style="text-align: center">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Email Edit</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                                                    class=" far fa-window-close"></i></button>
                                            </div>
                                            <div class="modal-body">
                                                <input type="hidden" value="{{ $admin->id }}" name="id">
                                                <span>Email</span>
                                                <span><input type="email" value="{{ $admin->email }}" name="email" style="border-radius: 5px; padding:2px 5px; background-color: rgb(223, 223, 223);" required></span>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn" style="background-color: #076595;color:white">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            {{-- password --}}
                            {{-- password --}}
                            {{-- password --}}
                            {{-- password --}}
                            <tr>
                                <th>Password</th>
                                <td>********</td>
                                <td>
                                    <input type="button" class="btn btn-outline-primary" value="Edit" name="editpro"
                                        data-bs-toggle="modal" data-bs-target="#passwordEditModal">
                                </td>
                            </tr>
                            {{-- edit password --}}
                            {{-- edit password --}}
                            {{-- edit password --}}
                            {{-- edit password --}}
                            <form method="post" action="{{ route('passwordEdit') }}" style=" width:100%;text-align: center">
                                @csrf
                                <div class="modal fade" id="passwordEditModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true" style="text-align: center">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Password Edit</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                                                    class=" far fa-window-close"></i></button>
                                            </div>
                                            <div class="modal-body">
                                                <input type="hidden" value="{{ $admin->id }}" name="id">
                                                <span>Old Password</span>
                                                <span><input type="password" name="password" style="border-radius: 5px; padding:2px 5px; background-color: rgb(223, 223, 223);"
                                                        required></span><br /><br />
                                                <span>New Password</span>
                                                <span><input id="passwordEditInput" type="password" name="newPassword"
                                                    style="border-radius: 5px; padding:2px 5px; background-color: rgb(223, 223, 223);" required></span>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn" style="background-color: #076595;color:white">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            {{-- phone --}}
                            {{-- phone --}}
                            {{-- phone --}}
                            {{-- phone --}}
                            <tr>
                                <th>Phone</th>
                                <td>{{ 0 . $admin->phone }}</td>
                                <td>
                                    <input type="button" class="btn btn-outline-primary" value="Edit" name="editpro"
                                        data-bs-toggle="modal" data-bs-target="#phoneEditModal">
                                </td>
                            </tr>
                            {{-- edit phone --}}
                            {{-- edit phone --}}
                            {{-- edit phone --}}
                            {{-- edit phone --}}
                            <form method="post" action="{{ route('phoneEdit') }}" style=" width:100%;text-align: center">
                                @csrf
                                <div class="modal fade" id="phoneEditModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true" style="text-align: center">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Phone Edit</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                                                    class=" far fa-window-close"></i></button>
                                            </div>
                                            <div class="modal-body">
                                                <input type="hidden" value="{{ $admin->id }}" name="id">
                                                <span>Phone</span>
                                                <span><input  type="number" value="0{{ $admin->phone }}"
                                                        name="phone" style="border-radius: 5px; padding:2px 5px; background-color: rgb(223, 223, 223);" required></span>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn" style="background-color: #076595;color:white">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            {{-- gender --}}
                            {{-- gender --}}
                            {{-- gender --}}
                            {{-- gender --}}
                            <tr>
                                <th>Gender</th>
                                <td>{{ $admin->gender }}</td>
                                <td>
                                    <input type="button" class="btn btn-outline-primary" value="Edit" name="editpro"
                                        data-bs-toggle="modal" data-bs-target="#genderEditModal">
                                </td>
                            </tr>
                            {{-- edit gender --}}
                            {{-- edit gender --}}
                            {{-- edit gender --}}
                            {{-- edit gender --}}
                            <form method="post" action="{{ route('genderEdit') }}" style=" width:100%;text-align: center">
                                @csrf
                                <div class="modal fade" id="genderEditModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true" style="text-align: center">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Gender Edit</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                                                    class=" far fa-window-close"></i></button>
                                            </div>
                                            <div class="modal-body">
                                                <input type="hidden" value="{{ $admin->id }}" name="id">
                                                <span>Gender</span>
                                                <span>
                                                    @if ($admin->gender == 'Male')
                                                        <select name='gender'style="border-radius: 5px; padding:2px 5px; background-color: rgb(223, 223, 223);" required>
                                                            <option value='Male' selected>Male</option>
                                                            <option value='Female'>Female</option>
                                                        </select>
                                                    @else
                                                        <select name='gender'style="border-radius: 5px; padding:2px 5px; background-color: rgb(223, 223, 223);" required>
                                                            <option value='Male'>Male</option>
                                                            <option value='Female' selected>Female</option>
                                                        </select>
                                                    @endif
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn" style="background-color: #076595;color:white">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            {{-- city --}}
                            {{-- city --}}
                            {{-- city --}}
                            {{-- city --}}
                            <tr>
                                <th>City</th>
                                <td>{{ $admin->city }}</td>
                                <td>
                                    <input type="button" class="btn btn-outline-primary" value="Edit" name="editpro"
                                        data-bs-toggle="modal" data-bs-target="#cityEditModal">
                                </td>
                            </tr>
                            {{-- edit city --}}
                            {{-- edit city --}}
                            {{-- edit city --}}
                            {{-- edit city --}}
                            <form method="post" action="{{ route('cityEdit') }}" style=" width:100%;text-align: center">
                                @csrf
                                <div class="modal fade" id="cityEditModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true" style="text-align: center">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">City Edit</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                                                    class=" far fa-window-close"></i></button>
                                            </div>
                                            <div class="modal-body">
                                                <input type="hidden" value="{{ $admin->id }}" name="id">
                                                <span>City</span>
                                                <span>
                                                    <select name="city" style="border-radius: 5px; padding:2px 5px; background-color: rgb(223, 223, 223);">
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
                                                                {{ $admin->city == $cityValue ? 'selected' : '' }}>
                                                                {{ $city }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </span>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn" style="background-color: #076595;color:white">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <tr>
                                {{-- address --}}
                                {{-- address --}}
                                {{-- address --}}
                                {{-- address --}}
                                <th>Address</th>
                                <td>{{ $admin->address }}</td>
                                <td>
                                    <input type="button" class="btn btn-outline-primary" value="Edit" name="editpro"
                                        data-bs-toggle="modal" data-bs-target="#addressEditModal">
                                </td>
                            </tr>
                            {{-- edit address --}}
                            {{-- edit address --}}
                            {{-- edit address --}}
                            {{-- edit address --}}
                            <form method="post" action="{{ route('addressEdit') }}" style=" width:100%;text-align: center">
                                @csrf
                                <div class="modal fade" id="addressEditModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true" style="text-align: center">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Address Edit</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                                                    class=" far fa-window-close"></i></button>
                                            </div>
                                            <div class="modal-body">
                                                <input type="hidden" value="{{ $admin->id }}" name="id">
                                                <span>Address</span>
                                                <span>
                                                    <textarea cols="20" rows="1" name='address' style="border-radius: 5px; padding:2px 5px; background-color: rgb(223, 223, 223);" required>{{ $admin->address }}</textarea>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn" style="background-color: #076595;color:white">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
