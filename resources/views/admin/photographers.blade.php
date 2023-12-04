@extends('includeAdmin.top')

@section('title', 'Admin Dashboard | Photographers')

@extends('includeAdmin.blank')
@section('main')
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="modal fade" id="photographerAddModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Photographer</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                                    class=" far fa-window-close"></i></button>
                        </div>

                        <form method="post" action="{{ route('photographers.store') }}"
                            style=" width:100%;text-align: center">
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

                                {{-- add price --}}
                                {{-- add price --}}
                                {{-- add price --}}
                                {{-- add price --}}
                                <input id="lnameInput-Add-Admin" class="col-5" class="input-class" type="text"
                                    name="price" placeholder="Session Price" required><br>
                                <br>

                                {{-- add description --}}
                                {{-- add description --}}
                                {{-- add description --}}
                                {{-- add description --}}
                                <textarea id="descriptionInput-Add-Admin" class="col-5" id="description-input" rows="1" name="description"
                                    placeholder="Description.." required></textarea><br>
                                <br>

                                {{-- add session_type --}}
                                {{-- add session_type --}}
                                {{-- add session_type --}}
                                {{-- add session_type --}}
                                <textarea id="descriptionInput-Add-Admin" class="col-5" id="description-input" rows="1" name="session_type"
                                    placeholder="Session types.." required></textarea><br>
                                <br>


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
                <div class="user-data m-b-30" style="background-color: white;padding:2%">
                    <div style="width:100%">
                        <div style="display:flex;justify-content: space-between ">
                            <div>
                                <h2 class="title-3">
                                    <i class="zmdi zmdi-account-calendar"></i> Photographers
                                </h2>
                            </div>
                            <div>
                                <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                                    data-bs-target="#photographerAddModal">Add New Photographer</button>
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
                        @error('photo')
                            <div class="alert alert-danger" role="alert" style="width: 100%">
                                {{ $message }}
                            </div>
                        @enderror
                        @error('fname')
                            <div class="alert alert-danger" role="alert" style="width: 100%">{{ $message }}</div>
                        @enderror
                        @error('lname')
                            <div class="alert alert-danger" role="alert" style="width: 100%">{{ $message }}</div>
                        @enderror
                        @error('email')
                            <div class="alert alert-danger" role="alert" style="width: 100%">{{ $message }}</div>
                        @enderror
                        @error('password')
                            <div class="alert alert-danger" role="alert" style="width: 100%">{{ $message }}</div>
                        @enderror
                        @error('conf-password')
                            <div class="alert alert-danger" role="alert" style="width: 100%">{{ $message }}</div>
                        @enderror
                        @error('price')
                            <div class="alert alert-danger" role="alert" style="width: 100%">{{ $message }}</div>
                        @enderror
                        @error('description')
                            <div class="alert alert-danger" role="alert" style="width: 100%">{{ $message }}</div>
                        @enderror
                        @error('session_type')
                            <div class="alert alert-danger" role="alert" style="width: 100%">{{ $message }}</div>
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
                                        <th>Price</th>
                                        <th>Description</th>
                                        <th>Session's Type</th>
                                        <th>Created at</th>
                                        <th>Updated at</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $total=0 ?>
                                    @foreach ($photographers as $photographer)
                                        <tr>
                                            <td>{{ $total+=1 }}</td>
                                            <td>
                                                <img src="{{ asset('storage/' . $photographer->photo) }}"
                                                    alt="Photographer Profile Image" style="height: 50px">
                                            </td>
                                            <td>{{ $photographer->fname }}</td>
                                            <td>{{ $photographer->lname }}</td>
                                            <td>{{ $photographer->email }}</td>
                                            <td>{{ $photographer->price }}JOD</td>
                                            <td>{!! nl2br(e($photographer->description)) !!}</td>
                                            <td>{{ $photographer->session_type}}</td>
                                            <td>{{ $photographer->created_at }}</td>
                                            <td>{{ $photographer->updated_at }}</td>
                                            <td>
                                                <input type="button" class="btn btn-outline-primary" value="Edit"
                                                    name="editpro" data-bs-toggle="modal"
                                                    data-bs-target="#photographerEditModal{{ $photographer->id }}">
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
                                        <div class="modal fade" id="photographerEditModal{{ $photographer->id }}"
                                            tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Edit Photographer
                                                        </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"><i
                                                                class=" far fa-window-close"></i></button>
                                                    </div>
                                                    <div class="modal-body" style="text-align: center">
                                                        <form method="post"
                                                            action="{{ route('photographers.update', $photographer->id) }}"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            @method('PUT')
                                                            {{-- first name edit --}}
                                                            {{-- first name edit --}}
                                                            {{-- first name edit --}}
                                                            <label class="col-3">First Name:</label>
                                                            <input class="col-5 fnameInput-Edit-Admin" type="text"
                                                                name="fname" value="{{ $photographer->fname }}"
                                                                required><br>

                                                            {{-- last name edit --}}
                                                            {{-- last name edit --}}
                                                            {{-- last name edit --}}
                                                            <label class="col-3">Last Name:</label>
                                                            <input id ="lnameInput-Edit-Admin" class="col-5"
                                                                type="text" name="lname"
                                                                value="{{ $photographer->lname }}" required><br>

                                                            {{-- email edit --}}
                                                            {{-- email edit --}}
                                                            {{-- email edit --}}
                                                            <label class="col-3">Email:</label>
                                                            <input id ="emailInput-Edit-Admin" class="col-5"
                                                                type="text" name="email"
                                                                value="{{ $photographer->email }}" required><br>

                                                            {{-- price edit --}}
                                                            {{-- price edit --}}
                                                            {{-- price edit --}}
                                                            {{-- price edit --}}
                                                            <label class="col-3">Price:</label>
                                                            <input id ="lnameInput-Edit-Admin" class="col-5"
                                                                type="text" name="price"
                                                                value="{{ $photographer->price }}" required><br>

                                                            {{-- description edit --}}
                                                            {{-- description edit --}}
                                                            {{-- description edit --}}
                                                            <label class="col-3">Description:</label>
                                                            <textarea id ="addressInput-Edit-Admin" class="col-5" rows="3" name="description" required>{{ $photographer->description }}</textarea><br>

                                                            {{-- session's type edit --}}
                                                            <label class="col-3">Sessions Type:</label>
                                                            <textarea id ="addressInput-Edit-Admin" class="col-5" rows="3" name="session_type" required>{{ $photographer->session_type }}</textarea><br>

                                                            {{-- photo edit --}}
                                                            {{-- photo edit --}}
                                                            {{-- photo edit --}}
                                                            <label class="col-3">Photo:</label>
                                                            <input type="file" name="photo"
                                                                value="{{ $photographer->photo }}" />
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

                                        <div class="modal fade" id="photographerDeleteModal{{ $photographer->id }}"
                                            tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Delete Photographer
                                                        </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"><i
                                                                class=" far fa-window-close"></i></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Are you sure you want to delete user?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <form method="post"
                                                            action="{{ route('photographers.destroy', $photographer->id) }}">
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
