@extends('employee.blank')
@section('title', 'Photographer Dashboard')
@section('main')


<div id="total-div" style="width:30%; margin-left:35%; margin-top:3%; box-shadow: 5px 5px 10px black; border-radius: 5px; padding:2%; text-align: center; display:flex; justify-content: space-between">
    <div>
        <h5>New Appointments</h5>
        <h2>{{ $reservation }}</h2>
    </div>
    <div id="book-icon-div" style="border-radius: 50%; background-color:#ffdbe6; width:30%;">
        <i id="book-icon" class="fa-solid fa-book" style="color: #ff407b;padding-top:15%; font-size: 40px"></i>
    </div>
</div>

<div id="scheduleContainer">
    <!-- Button trigger modal -->
    <div id="schedulePageTitle" style="display: block ">
        <p>Sessions</p><br/>
        <p>New Appointments: {{ $reservation }}</p>
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
