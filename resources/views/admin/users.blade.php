@extends('includeAdmin.top')

@section('title', 'Admin Dashboard | Users')

@extends('includeAdmin.blank')
@section('main')
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            {{-- <div class="container border-radius"> --}}

            <div class="modal fade" id="userAddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                                    class=" far fa-window-close"></i></button>
                        </div>
                        <form method="post" action="{{ route('users.store') }}" style=" width:100%;text-align: center">
                            <div class="modal-body">
                                @csrf
                                {{-- add fname  --}}
                                {{-- add fname  --}}
                                {{-- add fname  --}}
                                {{-- add fname  --}}
                                <input id="fnameInput-Add-Admin" class="col-5" class="input-class" type="text"
                                    name="fname" placeholder="First Name"><br>
                                <p id='fnamePAdd' style="font-size: 12px; font-weight: bold; display: none;">** Letters Only
                                </p><br>
                                @error('fname')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror


                                {{-- add lname --}}
                                {{-- add lname --}}
                                {{-- add lname --}}
                                {{-- add lname --}}
                                <input id="lnameInput-Add-Admin" class="col-5" class="input-class" type="text"
                                    name="lname" placeholder="Last Name"><br>
                                <p id='lnamePAdd'
                                    style="font-size: 12px; color: rgb(65, 65, 65); font-weight: bold; display: none;">**
                                    Letters Only</p><br>
                                @error('lname')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror


                                {{-- add email --}}
                                {{-- add email --}}
                                {{-- add email --}}
                                {{-- add email --}}
                                <input id="emailInput-Add-Admin" class="col-5" class="input-class" type="email"
                                    name="email" placeholder="Email"><br>
                                <p id='emailPAdd'
                                    style="font-size: 12px; color: rgb(65, 65, 65); font-weight: bold; display: none;">**
                                    example@mail.com</p><br>
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror

                                {{-- add password --}}
                                {{-- add password --}}
                                {{-- add password --}}
                                {{-- add password --}}
                                <input id="passwordInput-Add-Admin" class="col-5" class="input-class" type="password"
                                    name="password" placeholder="Password"><br>
                                <p id='passwordPAdd'
                                    style="font-size: 12px; color: rgb(65, 65, 65); font-weight: bold; display: none;">**
                                    Password must be 8-32 characters and include uppercase
                                    and lowercase letters, number and special character</p><br>
                                @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror

                                {{-- add confirm password --}}
                                {{-- add confirm password --}}
                                {{-- add confirm password --}}
                                {{-- add confirm password --}}
                                <input id="confirmPasswordInput-Add-Admin" class="col-5" class="input-class"
                                type="password" name="conf-password" placeholder="Confirm Password"><br>
                                <p id='confirmPasswordPAdd'
                                style="font-size: 12px; color: rgb(65, 65, 65); font-weight: bold; display: none;">**
                                Must Match with Password</p><br>
                                @error('conf-password')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                {{-- add phone --}}
                                {{-- add phone --}}
                                {{-- add phone --}}
                                {{-- add phone --}}
                                <input id="phoneInput-Add-Admin" class="col-5" class="input-class" type="number" name="phone"
                                placeholder="Phone"><br>
                                <p id='phonePAdd'
                                style="font-size: 12px; color: rgb(65, 65, 65); font-weight: bold; display: none;">** Numbers Only (10 Digits)</p><br>
                                @error('phone')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                {{-- add gender --}}
                                {{-- add gender --}}
                                {{-- add gender --}}
                                {{-- add gender --}}
                                <select id="genderInput-Add-Admin" class="col-5" name="gender" style="height:25px; color:gray">
                                    <option value="Gender" selected disabled>Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select><br />
                                <p id='genderPAdd'
                                style="font-size: 12px; color: rgb(65, 65, 65); font-weight: bold; display: none;">** Gender Required</p><br>
                                @error('gender')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                {{-- add city --}}
                                {{-- add city --}}
                                {{-- add city --}}
                                {{-- add city --}}
                                <select id="cityInput-Add-Admin" class="col-5" name='city' style="height:25px; color:gray">
                                    <option value="City" selected disabled>City</option>
                                    <option value="Amman">Amman</option>
                                    <option value="Ajloun">Ajloun</option>
                                    <option value="Aqaba">Aqaba</option>
                                    <option value="Balqa">Balqa</option>
                                    <option value="Irbid">Irbid</option>
                                    <option value="Jerash">Jerash</option>
                                    <option value="Karak">Karak</option>
                                    <option value="Ma'an">Ma'an</option>
                                    <option value="Madaba">Madaba</option>
                                    <option value="Mafraq">Mafraq</option>
                                    <option value="Tafilah">Tafilah</option>
                                    <option value="Zarqa">Zarqa</option>
                                </select><br>
                                <p id='cityPAdd'
                                style="font-size: 12px; color: rgb(65, 65, 65); font-weight: bold; display: none;">** City Required</p><br>
                                @error('city')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                {{-- add address --}}
                                {{-- add address --}}
                                {{-- add address --}}
                                {{-- add address --}}
                                <textarea id="addressInput-Add-Admin" class="col-5" id="address-input" rows="1" name="address" placeholder="Address.."></textarea><br>
                                <p id='addressPAdd'
                                style="font-size: 12px; color: rgb(65, 65, 65); font-weight: bold; display: none;">** Address Required</p><br>
                                @error('address')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                {{-- add status --}}
                                {{-- add status --}}
                                {{-- add status --}}
                                {{-- add status --}}
                                <select id="statusInput-Add-Admin" class="col-5" name="is_admin" style="height:25px; color:gray">
                                    <option value="3" selected disabled>Status</option>
                                    <option value="2">Super Admin</option>
                                    <option value="1">Sub Admin</option>
                                    <option value="0">User</option>
                                </select><br>
                                <p id='statusPAdd'
                                style="font-size: 12px; color: rgb(65, 65, 65); font-weight: bold; display: none;">** Status Required</p><br>
                                @error('status')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn" style="background-color: #076595;color:white"
                                    id="Add-User-Button">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <hr>
            <div class="col-lg-12">
                <!-- USER DATA-->
                <div class="user-data m-b-30" style="background-color: white;padding:2%">
                    <div style="width:100%">
                        <div style="display:flex;justify-content: space-between ">
                            <div>
                                <h2 class="title-3">
                                    <i class="zmdi zmdi-account-calendar"></i> Users
                                </h2>
                            </div>
                            <div>

                                {{-- <div class="d-grid gap-2 col-6 mx-auto"> --}}
                                <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                                    data-bs-target="#userAddModal">Add New User</button>
                            </div>
                        </div>

                        {{-- <form method="post"> --}}
                        {{-- <p style="text-align: left; color: #888">Total number of users: {{$sum}} &nbsp; --}}
                        {{-- <input type="button" id="addUser-btn" class="btn btn btn-secondary" value="Add New User" name="adding"> --}}
                        {{-- </form> --}}
                        {{-- </div> --}}

                        <div class="table-responsive table-data">
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

                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Photo</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        {{-- <td>Password</td> --}}
                                        <th>Phone</th>
                                        <th>Gender</th>
                                        <th>City</th>
                                        <th>Address</th>
                                        <th>Status</td>
                                        <th>Created at</th>
                                        <th>Updated at</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>
                                                <img src="{{ asset('storage/' . $user->photo) }}"
                                                    alt="User Profile Image" style="height: 50px">
                                            </td>
                                            <td>{{ $user->fname }}</td>
                                            <td>{{ $user->lname }}</td>
                                            <td>{{ $user->email }}</td>
                                            {{-- <td>{{$user->password}}</td> --}}
                                            <td>{{ $user->phone }}</td>
                                            <td>{{ $user->gender }}</td>
                                            <td>{{ $user->city }}</td>
                                            <td>{{ $user->address }}</td>
                                            @if ($user->is_admin == 0)
                                                <td>User</td>
                                            @elseif($user->is_admin == 1)
                                                <td>Sub Admin</td>
                                            @else
                                                <td>Super Admin</td>
                                            @endif
                                            <td>{{ $user->created_at }}</td>
                                            <td>{{ $user->updated_at }}</td>
                                            <td>
                                                {{-- <form method="post" action="{{ route('users.edit',$user->id) }}" > --}}
                                                <input type="button" class="btn btn-outline-primary" value="Edit"
                                                    name="editpro" data-bs-toggle="modal"
                                                    data-bs-target="#userEditModal{{ $user->id }}">

                                                {{-- </form> --}}
                                            </td>
                                            <td>
                                                {{-- <form method="post"action="{{ route('users.destroy',$user->id) }}" >
                                            @csrf
                                            @method('DELETE') --}}
                                                <input type="submit" class="btn btn-outline-danger" value="Delete">
                                                {{-- </form> --}}
                                            </td>
                                        </tr>

                                </tbody>
                                <div class="modal fade" id="userEditModal{{ $user->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"><i class=" far fa-window-close"></i></button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="post" action=""
                                                    style=" width:100%;text-align: center">
                                                    @csrf
                                                    @method('PUT')
                                                    <input type="hidden" id="id-input" name="id">
                                                    <label class="col-2">First Name:</label>
                                                    <input class="col-5" id="fname-input" type="text" name="fname"
                                                        value="{{ $user->fname }}"><br>
                                                    <label class="col-2">Last Name:</label>
                                                    <input class="col-5" id="lname-input" type="text" name="lname"
                                                        value="{{ $user->lname }}"><br>
                                                    <label class="col-2">Email:</label>
                                                    <input class="col-5" id="email-input" type="text" name="email"
                                                        value="{{ $user->email }}"><br>
                                                    <label class="col-2">Gender:</label>
                                                    <select class="col-5" name="gender">
                                                        <option name="gender" id="gender-male" value="male">Male
                                                        </option>
                                                        <option name="gender" id="gender-female" value="female">FeMale
                                                        </option>
                                                    </select><br>
                                                    <label class="col-2">Password:</label>
                                                    <input class="col-5" id="password-input" type="text"
                                                        name="password"><br>
                                                    <label class="col-2">Mobile:</label>
                                                    <input class="col-5" id="mobile-input" type="text"
                                                        name="phone"><br>
                                                    <label class="col-2">Admin:</label>
                                                    <input type="radio" id="admin-yes" value="1" name="is_admin"
                                                        required> Yes
                                                    <input type="radio" id="admin-no" value="0" name="is_admin"
                                                        required> No<br><br>
                                                    <input type="submit" class="btn btn-outline-secondary"
                                                        value="Save">
                                                </form>
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

                                {{-- delete modal --}}
                                {{-- delete modal --}}
                                {{-- delete modal --}}
                                {{-- delete modal --}}
                                {{-- delete modal --}}
                                {{-- delete modal --}}
                                
                                @endforeach
                            </table>
                        </div>

                    </div>
                    <!-- END USER DATA-->
                </div>
            </div>

        </div>
    </div>
    <script src="js/usersAdmin.js"></script>
@endsection
