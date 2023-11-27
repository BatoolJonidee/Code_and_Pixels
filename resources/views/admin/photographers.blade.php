@extends('includeAdmin.top')

@section('title', 'Admin Dashboard | Categories')

@extends('includeAdmin.blank')
@section('main')
<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="modal fade" id="photographerAddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Photographer</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                                class=" far fa-window-close"></i></button>
                    </div>

                    <form method="post" action="{{ route('photographers.store') }}" style=" width:100%;text-align: center">
                        <div class="modal-body">
                            @csrf
                            {{-- add fname  --}}
                            {{-- add fname  --}}
                            {{-- add fname  --}}
                            {{-- add fname  --}}
                            <input id ="fnameInput-Add-Admin" class="col-5" class="input-class" type="text"
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

                            {{-- add description --}}
                            {{-- add description --}}
                            {{-- add description --}}
                            {{-- add description --}}
                            <textarea id="descriptionInput-Add-Admin" class="col-5" id="description-input" rows="1" name="description"
                                placeholder="Description.."></textarea><br>
                            <p id='descriptionPAdd'
                                style="font-size: 12px; color: rgb(65, 65, 65); font-weight: bold; display: none;">**
                                description Required</p><br>
                            @error('description')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn" style="background-color: #076595;color:white"
                                id="Add-Photographer-Button">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <hr>
        <div class="col-lg-12">
            <!-- Photographer DATA-->
            <div class="user-data m-b-30" style="background-color: white;padding:2%">
                <div style="width:100%">
                    <div style="display:flex;justify-content: space-between ">
                        <div>
                            <h2 class="title-3">
                                <i class="zmdi zmdi-account-calendar"></i> Photographers
                            </h2>
                        </div>
                        <div>

                            {{-- <div class="d-grid gap-2 col-6 mx-auto"> --}}
                            <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                                data-bs-target="#photographerAddModal">Add New Photographer</button>
                        </div>
                    </div>

                    {{-- <form method="post"> --}}
                    {{-- <p style="text-align: left; color: #888">Total number of users: {{$sum}} &nbsp; --}}
                    {{-- <input type="button" id="addUser-btn" class="btn btn btn-secondary" value="Add New User" name="adding"> --}}
                    {{-- </form> --}}
                    {{-- </div> --}}
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
                    <div class="table-responsive table-data">

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Photo</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Description</th>
                                    <th>Created at</th>
                                    <th>Updated at</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($photographers as $photographer)
                                    <tr>
                                        <td>{{ $photographer->id }}</td>
                                        <td>
                                            <img src="{{ asset('storage/' . $photographer->photo) }}"
                                                alt="Photographer Profile Image" style="height: 50px">
                                        </td>
                                        <td>{{ $photographer->fname }}</td>
                                        <td>{{ $photographer->lname }}</td>
                                        <td>{{ $photographer->email }}</td>
                                        <td>{{ $photographer->description }}</td>
                                        <td>{{ $photographer->created_at }}</td>
                                        <td>{{ $photographer->updated_at }}</td>
                                        <td>
                                            {{-- <form method="post" action="{{ route('users.edit',$user->id) }}" > --}}
                                            <input type="button" class="btn btn-outline-primary" value="Edit"
                                                name="editpro" data-bs-toggle="modal"
                                                data-bs-target="#photographerEditModal{{ $photographer->id }}">

                                            {{-- </form> --}}
                                        </td>
                                        <td>
                                            <input type="submit" class="btn btn-outline-danger" value="Delete"
                                                data-bs-toggle="modal"
                                                data-bs-target="#photographerDeleteModal{{ $photographer->id }}">
                                        </td>
                                    </tr>
                            {{-- Edit modal --}}
                            {{-- Edit modal --}}
                            {{-- Edit modal --}}
                            {{-- Edit modal --}}
                            {{-- Edit modal --}}
                            {{-- Edit modal --}}
                            <div class="modal fade" id="photographerEditModal{{ $photographer->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Photographer</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"><i class=" far fa-window-close"></i></button>
                                        </div>
                                        <div class="modal-body" style="text-align: center">
                                            <form method="post" action="{{ route('photographers.update', $photographer->id) }}"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                {{-- first name edit --}}
                                                {{-- first name edit --}}
                                                {{-- first name edit --}}
                                                <label class="col-3">First Name:</label>
                                                <input  class="col-5 fnameInput-Edit-Admin"
                                                    type="text" name="fname" value="{{ $photographer->fname }}"><br>
                                                <p class='fnamePEdit'
                                                    style="font-size: 12px; font-weight: bold; display: none;">**
                                                    Letters Only
                                                </p>

                                                {{-- last name edit --}}
                                                {{-- last name edit --}}
                                                {{-- last name edit --}}
                                                <label class="col-3">Last Name:</label>
                                                <input id ="lnameInput-Edit-Admin" class="col-5"
                                                    type="text" name="lname" value="{{ $photographer->lname }}"><br>
                                                <p id='lnamePEdit'
                                                    style="font-size: 12px; color: rgb(65, 65, 65); font-weight: bold; display: none;">
                                                    **
                                                    Letters Only</p>
                                                {{-- email edit --}}
                                                {{-- email edit --}}
                                                {{-- email edit --}}
                                                <label class="col-3">Email:</label>
                                                <input id ="emailInput-Edit-Admin" class="col-5"
                                                    type="text" name="email" value="{{ $photographer->email }}"><br>
                                                <p id='emailPEdit'
                                                    style="font-size: 12px; color: rgb(65, 65, 65); font-weight: bold; display: none;">
                                                    **
                                                    example@mail.com</p>
                                                {{-- description edit --}}
                                                {{-- description edit --}}
                                                {{-- description edit --}}
                                                <label class="col-3">Description:</label>
                                                <textarea id ="addressInput-Edit-Admin" class="col-5" rows="3" name="description">{{ $photographer->description }}</textarea><br>
                                                <p id='addressPEdit'
                                style="font-size: 12px; color: rgb(65, 65, 65); font-weight: bold; display: none;">**
                                Description Required</p>
                                                {{-- photo edit --}}
                                                {{-- photo edit --}}
                                                {{-- photo edit --}}
                                                <label class="col-3">Photo:</label>
                                                <input type="file" name="photo" value="{{ $photographer->photo }}" />
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

                            <!-- Modal -->
                            <div class="modal fade" id="photographerDeleteModal{{ $photographer->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Delete Photographer</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"><i class=" far fa-window-close"></i></button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure you want to delete user?
                                        </div>
                                        <div class="modal-footer">
                                            <form method="post" action="{{ route('photographers.destroy', $photographer->id) }}">
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
                <!-- END USER DATA-->
            </div>
        </div>

    </div>
</div>
<script src="js/photographersAdmin.js"></script>
@endsection
