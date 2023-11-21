
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
                        {{-- @error('success')
                            <div class="alert alert-success" role="alert" style="width: 100%">
                                {{ $message }}
                            </div>
                        @enderror

                        <div class="table-responsive table-data">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Subject</th>
                                        <th>Message</th>
                                        <th>Created at</th>
                                        <th>Updated at</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contacts as $contact)
                                        <tr>
                                            <td>{{ $contact->id }}</td>
                                            <td>{{ $contact->name }}</td>
                                            <td>{{ $contact->email }}</td>
                                            <td>{{ $contact->subject }}</td>
                                            <td>{{ $contact->message }}</td>
                                            <td>{{ $contact->created_at }}</td>
                                            <td>{{ $contact->updated_at }}</td>
                                            <td>
                                                <input type="submit" class="btn btn-outline-danger" value="Delete" data-bs-toggle="modal"
                                                data-bs-target="#DeleteModal{{ $contact->id }}">
                                            </td>
                                        </tr>
                                    </tbody>

                                <div class="modal fade" id="DeleteModal{{ $contact->id }}" tabindex="-1"
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
                                </div>
                                @endforeach
                            </table>
                        </div> --}}

                    </div>
                </div>
            </div>

        </div>
    </div>
    {{-- <script src="js/usersAdmin.js"></script> --}}
@endsection
