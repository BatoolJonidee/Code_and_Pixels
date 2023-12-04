@extends('includeAdmin.top')

@section('title', 'Admin Dashboard | Users')


@extends('includeAdmin.blank')
@section('main')
    <div class="section__content section__content--p30">
        <div class="container-fluid">
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
                                <input id ="fnameInput-Add-Admin" class="col-5" class="input-class" type="text"
                                    name="fname" placeholder="First Name" required><br>
                                <br>

                                {{-- add lname --}}
                                {{-- add lname --}}
                                {{-- add lname --}}
                                {{-- add lname --}}
                                <input id="lnameInput-Add-Admin" class="col-5" class="input-class" type="text"
                                    name="lname" placeholder="Last Name" required><br>
                                <br>

                                {{-- add email --}}
                                {{-- add email --}}
                                {{-- add email --}}
                                {{-- add email --}}
                                <input id="emailInput-Add-Admin" class="col-5" class="input-class" type="email"
                                    name="email" placeholder="Email" required><br>
                                <br>

                                {{-- add password --}}
                                {{-- add password --}}
                                {{-- add password --}}
                                {{-- add password --}}
                                <input id="passwordInput-Add-Admin" class="col-5" class="input-class" type="password"
                                    name="password" placeholder="Password" required><br>
                                <br>

                                {{-- add confirm password --}}
                                {{-- add confirm password --}}
                                {{-- add confirm password --}}
                                {{-- add confirm password --}}
                                <input id="confirmPasswordInput-Add-Admin" class="col-5" class="input-class"
                                    type="password" name="conf-password" placeholder="Confirm Password" required><br>
                                <br>

                                {{-- add phone --}}
                                {{-- add phone --}}
                                {{-- add phone --}}
                                {{-- add phone --}}
                                <input id="phoneInput-Add-Admin" class="col-5" class="input-class" type="number"
                                    name="phone" placeholder="Phone - 10 Digits" required><br>
                                <br>

                                {{-- add gender --}}
                                {{-- add gender --}}
                                {{-- add gender --}}
                                {{-- add gender --}}
                                <select id="genderInput-Add-Admin" class="col-5" name="gender"
                                    style="height:25px; color:gray" required>
                                    <option value="Gender" selected disabled>Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select><br />
                                <br>

                                {{-- add city --}}
                                {{-- add city --}}
                                {{-- add city --}}
                                {{-- add city --}}
                                <select id="cityInput-Add-Admin" class="col-5" name='city'
                                    style="height:25px; color:gray" required>
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
                                <br>

                                {{-- add address --}}
                                {{-- add address --}}
                                {{-- add address --}}
                                {{-- add address --}}
                                <textarea id="addressInput-Add-Admin" class="col-5" id="address-input" rows="1" name="address"
                                    placeholder="Address.." required></textarea><br>
                                <br>

                                {{-- add status --}}
                                {{-- add status --}}
                                {{-- add status --}}
                                {{-- add status --}}
                                <select id="statusInput-Add-Admin" class="col-5" name="is_admin"
                                    style="height:25px; color:gray" required>
                                    <option value="3" selected disabled>Status</option>
                                    <option value="2">Admin</option>
                                    <option value="0">User</option>
                                </select><br>
                                <br>

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
                <div class="user-data m-b-30" style="background-color: white;padding:2%">
                    <div style="width:100%">
                        <div style="display:flex;justify-content: space-between ">
                            <div>
                                <h2 class="title-3">
                                    <i class="zmdi zmdi-account-calendar"></i> Users
                                </h2>
                            </div>
                            <div>

                                <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                                    data-bs-target="#userAddModal">Add New User</button>
                            </div>
                        </div>
                        @error('success')
                            <div class="alert alert-success" role="alert" style="width: 100%">
                                {{ $message }}
                            </div>
                        @enderror
                        @error('error')
                            <div class="alert alert-danger" role="alert" style="width: 100%">
                                {{ $message }}
                            </div>
                        @enderror
                        @error('photo')
                            <div class="alert alert-danger" role="alert" style="width: 100%">
                                {{ $message }}
                            </div>
                        @enderror
                        @error('fname')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        @error('lname')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        @error('password')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        @error('conf-password')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        @error('phone')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        @error('gender')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        @error('city')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        @error('address')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        @error('status')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="table-responsive table-data">

                            <table class="table table-striped" style='text-align:center'>
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Photo</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
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
                                    <?php $total=0 ?>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $total+=1 }}</td>
                                            <td>
                                                <img src="{{ asset('storage/' . $user->photo) }}"
                                                    alt="User Profile Image" style="height: 50px">
                                            </td>
                                            <td>{{ $user->fname }}</td>
                                            <td>{{ $user->lname }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>0{{ $user->phone }}</td>
                                            <td>{{ $user->gender }}</td>
                                            <td>{{ $user->city }}</td>
                                            <td>{{ $user->address }}</td>
                                            @if ($user->is_admin == 0)
                                                <td>User</td>
                                            @else
                                                <td>Admin</td>
                                            @endif
                                            <td>{{ $user->created_at }}</td>
                                            <td>{{ $user->updated_at }}</td>
                                            <td>
                                                <input type="button" class="btn btn-outline-primary" value="Edit"
                                                    name="editpro" data-bs-toggle="modal"
                                                    data-bs-target="#userEditModal{{ $user->id }}">
                                            </td>
                                            <td>
                                                <input type="submit" class="btn btn-outline-danger" value="Delete"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#userDeleteModal{{ $user->id }}">
                                            </td>
                                        </tr>
                                        {{-- Edit modal --}}
                                        {{-- Edit modal --}}
                                        {{-- Edit modal --}}
                                        {{-- Edit modal --}}
                                        {{-- Edit modal --}}
                                        {{-- Edit modal --}}
                                        <div class="modal fade" id="userEditModal{{ $user->id }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"><i
                                                                class=" far fa-window-close"></i></button>
                                                    </div>
                                                    <div class="modal-body" style="text-align: center">
                                                        <form method="post"
                                                            action="{{ route('users.update', $user->id) }}"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            @method('PUT')
                                                            {{-- first name edit --}}
                                                            {{-- first name edit --}}
                                                            {{-- first name edit --}}
                                                            <label class="col-3">First Name:</label>
                                                            <input class="col-5 fnameInput-Edit-Admin" type="text"
                                                                name="fname" value="{{ $user->fname }}" required><br>
                                                            
                                                            {{-- last name edit --}}
                                                            {{-- last name edit --}}
                                                            {{-- last name edit --}}
                                                            <label class="col-3">Last Name:</label>
                                                            <input id ="lnameInput-Edit-Admin" class="col-5"
                                                                type="text" name="lname"
                                                                value="{{ $user->lname }}" required><br>
                                                            
                                                            {{-- email edit --}}
                                                            {{-- email edit --}}
                                                            {{-- email edit --}}
                                                            <label class="col-3">Email:</label>
                                                            <input id ="emailInput-Edit-Admin" class="col-5"
                                                                type="text" name="email"
                                                                value="{{ $user->email }}" required><br>
                                                            
                                                            {{-- phone edit --}}
                                                            {{-- phone edit --}}
                                                            {{-- phone edit --}}
                                                            <label class="col-3">Mobile:</label>
                                                            <input id ="phoneInput-Edit-Admin" class="col-5"
                                                                type="number" name="phone"
                                                                value="0{{ $user->phone }}" required><br>
                                                            
                                                            {{-- gender edit --}}
                                                            {{-- gender edit --}}
                                                            {{-- gender edit --}}
                                                            <label class="col-3">Gender:</label>
                                                            @if ($user->gender == 'Female')
                                                                <select id ="genderInput-Edit-Admin" class="col-5"
                                                                    name="gender" style="height: 25px" required>
                                                                    <option name="gender" id="gender-male"
                                                                        value="Male">Male
                                                                    </option>
                                                                    <option name="gender" id="gender-female"
                                                                        value="Female" selected>Female
                                                                    </option>
                                                                </select><br>
                                                            @else
                                                                <select id ="genderInput-Edit-Admin" class="col-5"
                                                                    name="gender" style="height: 25px" required>
                                                                    <option name="gender" id="gender-male"
                                                                        value="Male" selected>Male
                                                                    </option>
                                                                    <option name="gender" id="gender-female"
                                                                        value="Female">
                                                                        Female
                                                                    </option>
                                                                </select><br>
                                                            @endif
                                                            
                                                            {{-- city edit --}}
                                                            {{-- city edit --}}
                                                            {{-- city edit --}}
                                                            <label class="col-3">City:</label>
                                                            <select id ="cityInput-Edit-Admin" name="city"
                                                                class="col-5" style="height: 25px" required>
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
                                                            </select><br>
                                                            
                                                            {{-- address edit --}}
                                                            {{-- address edit --}}
                                                            {{-- address edit --}}
                                                            <label class="col-3">Address:</label>
                                                            <textarea id ="addressInput-Edit-Admin" class="col-5" rows="1" name="address" required>{{ $user->address }}</textarea><br>
                                                            
                                                            {{-- status edit --}}
                                                            {{-- status edit --}}
                                                            {{-- status edit --}}
                                                            <label class="col-3">Status:</label>
                                                            @if ($user->is_admin == 0)
                                                                <select id ="statusInput-Edit-Admin" class="col-5"
                                                                    name="is_admin" style="height: 25px" required>
                                                                    <option value="0" selected>User
                                                                    </option>
                                                                    <option value="2">Admin
                                                                    </option>
                                                                </select><br>
                                                            @else
                                                                <select id ="statusInput-Edit-Admin" class="col-5"
                                                                    name="is_admin" style="height: 25px" required>
                                                                    <option value="0">User
                                                                    </option>
                                                                    <option value="2" selected>Admin
                                                                    </option>
                                                                </select><br>
                                                            @endif
                                                           
                                                            {{-- photo edit --}}
                                                            {{-- photo edit --}}
                                                            {{-- photo edit --}}
                                                            <label class="col-3">Photo:</label>
                                                            <input type="file" name="photo"
                                                                value="{{ $user->photo }}" />
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn"
                                                            style="background-color: #076595;color:white">Save</button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- delete modal --}}
                                        {{-- delete modal --}}
                                        {{-- delete modal --}}
                                        {{-- delete modal --}}
                                        {{-- delete modal --}}
                                        {{-- delete modal --}}

                                        <div class="modal fade" id="userDeleteModal{{ $user->id }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Delete User</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"><i
                                                                class=" far fa-window-close"></i></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Are you sure you want to delete user?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <form method="post"
                                                            action="{{ route('users.destroy', $user->id) }}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="button" class="btn"
                                                                data-bs-dismiss="modal">No</button>
                                                            <button type="submit" class="btn "
                                                                style="background-color: #076595; color:white">Yes</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
