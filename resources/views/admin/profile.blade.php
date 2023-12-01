@extends('includeAdmin.top')

@section('title', 'Admin Dashboard | Categories')

@extends('includeAdmin.blank')
@section('main')
<div class="row">

            <div class="col-xl-3 col-lg-3 col-md-5 col-sm-12 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="user-avatar text-center d-block">
                            <img src="{{ asset('storage/' . $admin->photo) }}" alt="Admin Avatar"
                                class="rounded-circle user-avatar-xxl" data-bs-toggle="modal"
                                data-bs-target="#pictureEditModal">
                        </div>
                        <div class="text-center">
                            <h2 class="font-24 mb-0">{{ $admin->fname . ' ' . $admin->lname }}</h2>
                        </div>
                    </div>
                </div>
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
                                <input type="hidden" value="{{ $admin->id }}" name="id">
                                <img src="{{ asset('storage/' . $admin->photo) }}" alt="Profile Picture"
                                    style="width:70%;"><br><br>
                                <span><input type="file" value="{{ $admin->photo }}" name="photo" required>
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
            <div class="col-xl-9 col-lg-9 col-md-7 col-sm-12 col-12">
                <div class="user-data m-b-30" style="background-color: white;padding:2%">
                    <div style="width:100%">
                        <div style="display:flex;justify-content: space-between ">
                            <div>
                                <h2 class="title-3">
                                    <i class="zmdi zmdi-account-calendar"></i> Contacts
                                </h2>
                            </div>
                        </div>
                        @error('success')
                            <div class="alert alert-success" role="alert" style="width: 100%">
                                {{ $message }}
                            </div>
                        @enderror

                        <div class="table-responsive table-data">

                            <table class="table table-striped" >
                                <tr>
                                    <th>First Name</th>
                                    <td>{{ $admin->fname }}</td>
                                    <td>
                                        <input type="button" class="btn btn-outline-primary" value="Edit" name="editpro"
                                            data-bs-toggle="modal" data-bs-target="">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Last Name</th>
                                    <td>{{ $admin->lname }}</td>
                                    <td>
                                        <input type="button" class="btn btn-outline-primary" value="Edit" name="editpro"
                                            data-bs-toggle="modal" data-bs-target="">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{ $admin->email }}</td>
                                    <td>
                                        <input type="button" class="btn btn-outline-primary" value="Edit" name="editpro"
                                            data-bs-toggle="modal" data-bs-target="">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Phone</th>
                                    <td>{{ $admin->phone }}</td>
                                    <td>
                                        <input type="button" class="btn btn-outline-primary" value="Edit" name="editpro"
                                            data-bs-toggle="modal" data-bs-target="">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Gender</th>
                                    <td>{{ $admin->gender }}</td>
                                    <td>
                                        <input type="button" class="btn btn-outline-primary" value="Edit" name="editpro"
                                            data-bs-toggle="modal" data-bs-target="">
                                    </td>
                                </tr>
                                <tr>
                                    <th>City</th>
                                    <td>{{ $admin->city }}</td>
                                    <td>
                                        <input type="button" class="btn btn-outline-primary" value="Edit" name="editpro"
                                            data-bs-toggle="modal" data-bs-target="">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Address</th>
                                    <td>{{ $admin->address }}</td>
                                    <td>
                                        <input type="button" class="btn btn-outline-primary" value="Edit" name="editpro"
                                            data-bs-toggle="modal" data-bs-target="">
                                    </td>
                                </tr>
                            </table>
                        </div>
                                {{-- <div class="modal fade" id="DeleteModal{{ $contact->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Delete User</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"><i class=" far fa-window-close"></i></button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want to delete user?
                                            </div>
                                            <div class="modal-footer">
                                                <form method="post"action="{{ route('contacts.destroy', $contact->id) }}">
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
                                </div> --}}
                    </div>
                    <!-- END USER DATA-->
                </div>

            </div>
</div>
        <script src="js/photographersAdmin.js"></script>
    @endsection
