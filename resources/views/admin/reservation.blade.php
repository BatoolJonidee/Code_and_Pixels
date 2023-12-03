@extends('includeAdmin.top')

@section('title', 'Admin Dashboard | Appointments')

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
                                    <i class="zmdi zmdi-account-calendar"></i> Appointments
                                </h2>
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
                        <div class="table-responsive table-data">

                            <table class="table table-striped" style='text-align:center'>
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>User</th>
                                        <th>Photographer</th>
                                        <th>Date</th>
                                        <th>Day</th>
                                        <th>Time</th>
                                        <th>Status</th>
                                        <th>Confirm / Pending</th>
                                        <th>Cancel</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($reservations as $reservation)
                                        <tr>
                                            <td>{{ $reservation->id }}</td>
                                            <td>{{ $reservation->user->fname . ' ' . $reservation->user->lname }}</td>
                                            <td>{{ $reservation->employee->fname . ' ' . $reservation->employee->lname }}
                                            </td>
                                            <td>{{ $reservation->date }}</td>
                                            <td>{{ \Carbon\Carbon::parse($reservation->date)->format('D') }}</td>
                                            <td>{{ \Carbon\Carbon::parse($reservation->time)->format('h:i A') }}</td>
                                            <td>
                                                @if ($reservation->date < \Carbon\Carbon::today())
                                                    Passed
                                                @elseif($reservation->status == 'confirmed')
                                                    Confirmed
                                                @elseif($reservation->status == 'pending')
                                                    Pending
                                                @else
                                                    Canceled
                                                @endif
                                                </>
                                            <td>
                                                <form method="post"
                                                    action="{{ url('changeStatus-photographerSide', $reservation->id) }}">
                                                    @csrf
                                                    @if ($reservation->status == 'confirmed')
                                                        <button type="submit" class="btn btn-outline-primary"
                                                            name="status" value="pending">Pending</button>
                                                    @elseif($reservation->status == 'pending')
                                                        <button type="submit" class="btn btn-outline-primary"
                                                            name="status" value="confirmed">Confirmed</button>
                                                    @elseif($reservation->status == 'canceled')
                                                        <button type="submit" class="btn btn-outline-primary"
                                                            name="status" value="confirmed">Confirmed</button>
                                                    @endif
                                                </form>
                                            </td>
                                            <td>
                                                <form method="post"
                                                    action="{{ url('cancelSession-photographerSide', $reservation->id) }}">
                                                    @csrf
                                                    <button type="submit" class="btn btn-outline-danger" name="status"
                                                        value="canceled">Canceled</button>
                                                </form>
                                            </td>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/photographersAdmin.js"></script>
@endsection
