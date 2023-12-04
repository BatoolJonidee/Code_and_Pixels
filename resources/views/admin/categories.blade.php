@extends('includeAdmin.top')

@section('title', 'Admin Dashboard | Categories')

@extends('includeAdmin.blank')
@section('main')
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="modal fade" id="categoryAddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                                    class=" far fa-window-close"></i></button>
                        </div>

                        <form method="post" action="{{ route('categories.store') }}" style=" width:100%;text-align: center"
                            enctype="multipart/form-data">
                            <div class="modal-body">
                                @csrf
                                <label class="col-3">Name:</label>
                                <input class="col-5" class="input-class" type="text" name="name"
                                    placeholder="Category Name" required><br>

                                <label class="col-3">Photo:</label>
                                <input type="file" name="photo" />
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
                                    <i class="zmdi zmdi-account-calendar"></i> Categories
                                </h2>
                            </div>
                            <div>
                                <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                                    data-bs-target="#categoryAddModal">Add New Category</button>
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
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="table-responsive table-data">

                            <table class="table table-striped" style='text-align:center'>
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Photo</th>
                                        <th>Name</th>
                                        <th>Created at</th>
                                        <th>Updated at</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $total=0 ?>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>{{ $total+=1 }}</td>
                                            <td>
                                                <img src="{{ asset('storage/' . $category->photo) }}"
                                                    alt="User Profile Image" style="height: 50px">
                                            </td>
                                            <td>{{ $category->name }}</td>
                                            <td>{{ $category->created_at }}</td>
                                            <td>{{ $category->updated_at }}</td>
                                            <td>
                                                <input type="button" class="btn btn-outline-primary" value="Edit"
                                                    name="editpro" data-bs-toggle="modal"
                                                    data-bs-target="#categoryEditModal{{ $category->id }}">
                                            </td>
                                            <td>
                                                <input type="submit" class="btn btn-outline-danger" value="Delete"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#categoryDeleteModal{{ $category->id }}">
                                            </td>
                                        </tr>
                                        {{-- Edit modal --}}
                                        {{-- Edit modal --}}
                                        {{-- Edit modal --}}
                                        {{-- Edit modal --}}
                                        {{-- Edit modal --}}
                                        {{-- Edit modal --}}
                                        <div class="modal fade" id="categoryEditModal{{ $category->id }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"><i class=" far fa-window-close"></i></button>
                                                    </div>
                                                    <div class="modal-body" style="text-align: center">
                                                        <form method="post"
                                                            action="{{ route('categories.update', $category->id) }}"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            @method('PUT')
                                                            {{--  name edit --}}
                                                            {{--  name edit --}}
                                                            {{--  name edit --}}
                                                            <label class="col-3">Name:</label>
                                                            <input class="col-5" type="text" name="name"
                                                                value="{{ $category->name }}" required><br>

                                                            {{-- photo edit --}}
                                                            {{-- photo edit --}}
                                                            {{-- photo edit --}}
                                                            <label class="col-3">Photo:</label>
                                                            <input type="file" name="photo"
                                                                value="{{ $category->photo }}" />
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

                                        <div class="modal fade" id="categoryDeleteModal{{ $category->id }}"
                                            tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Delete Category
                                                        </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"><i
                                                                class=" far fa-window-close"></i></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Are you sure you want to delete category?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <form method="post"
                                                            action="{{ route('categories.destroy', $category->id) }}">
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
