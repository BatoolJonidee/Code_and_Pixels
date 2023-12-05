
@extends('includeAdmin.top')

@section('title', 'Admin Dashboard | Contact')

@extends('includeAdmin.blank')
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
                                    <i class="zmdi zmdi-account-calendar"></i> Contacts
                                </h2>
                            </div>
                        </div>
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div class="table-responsive table-data">
                            <table class="table table-striped" style='text-align:center'>
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Subject</th>
                                        <th>Message</th>
                                        <th>Created at</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $total=0 ?>
                                    @foreach ($contacts as $contact)
                                        <tr>
                                            <td>{{ $total+=1 }}</td>
                                            <td>{{ $contact->name }}</td>
                                            <td>{{ $contact->email }}</td>
                                            <td>{{ $contact->subject }}</td>
                                            <td>{{ $contact->message }}</td>
                                            <td>{{ $contact->created_at }}</td>
                                            <td>
                                                <input type="submit" class="btn btn-outline-danger" value="Delete" data-bs-toggle="modal"
                                                data-bs-target="#DeleteModal{{ $contact->id }}">
                                            </td>
                                        </tr>

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
                            </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
