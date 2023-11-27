@extends('employee.blank')
@section('title', 'Photographer Dashboard')
@section('main')
<div id="scheduleContainer">
    <!-- Button trigger modal -->
    <div id="schedulePageTitle">
        <p>Sessions</p>
    </div>
    <hr>
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive table-data" >

        <table class="table table-striped text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>User</th>
                    <th>Date</th>
                    <th>Day</th>
                    <th>Time</th>
                    <th>Status</th>
                    <th>Confirm / Pending</th>
                    <th>Cancel</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sessions as $session)
                    <tr>
                        <td>{{ $session->id }}</td>
                        <td>{{ $session->user->fname . " " . $session->user->lname }}</td>
                        <td>{{ $session->date }}</td>
                        <td>{{ \Carbon\Carbon::parse($session->date)->format('l') }}</td>
                        <td>{{ $session->time }}</td>
                        <td>{{ $session->status }}</td>
                        <td>
                            <form method="post" action="{{ url('changeStatus-photographerSide', $session->id) }}">
                                @csrf
                                @if($session->status=='confirmed')
                                    <button type="submit" class="btn btn-outline-primary" name="status" value="pending">Pending</button>
                                @elseif($session->status=='pending')
                                    <button type="submit" class="btn btn-outline-primary" name="status" value="confirmed">Confirmed</button>
                                @elseif($session->status=='canceled')
                                    <button type="submit" class="btn btn-outline-primary" name="status" value="confirmed">Confirmed</button>
                                @endif
                            </form>
                        </td>
                        <td>
                            <form method="post" action="{{ url('cancelSession-photographerSide', $session->id) }}">
                                @csrf
                                <button type="submit" class="btn btn-outline-danger" name="status" value="canceled">Canceled</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>


    </div>
</div>
@endsection
