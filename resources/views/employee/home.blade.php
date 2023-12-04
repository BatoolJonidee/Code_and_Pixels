@extends('employee.blank')
@section('title', 'Photographer Dashboard')
@section('main')

    <div id="reservation-photographer-side-div-container">


    <div id="total-div">
        <div>
            <h5>New Session</h5>
            <h2>{{ $reservation }}</h2>
        </div>
        <div id="book-icon-div">
            <i id="book-icon" class="fa-solid fa-book"></i>
        </div>
    </div>

    <div id="scheduleContainer">
        <div id="schedulePageTitle">
            <p>Sessions</p>
        </div>
        <hr>


        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <div class="table-responsive table-data">

            <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>User</th>
                        <th>Date</th>
                        <th>Day</th>
                        <th>Time</th>
                        <th>Location</th>
                        <th>Status</th>
                        <th>Confirm / Pending</th>
                        <th>Cancel</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $total = 0; ?>
                    @foreach ($sessions as $session)
                        <tr>
                            <td>{{ $total += 1 }}</td>
                            <td>{{ $session->user->fname . ' ' . $session->user->lname }}</td>
                            <td>{{ $session->date }}</td>
                            <td>{{ \Carbon\Carbon::parse($session->date)->format('D') }}</td>
                            <td>{{ \Carbon\Carbon::parse($session->time)->format('g :i A') }}</td>
                            <td>{{ $session->session_location }}</td>
                            <td>{{ $session->status }}</td>
                            <td>
                                <form method="post" action="{{ url('changeStatus-photographerSide', $session->id) }}">
                                    @csrf
                                    @if ($session->status == 'confirmed')
                                        <button type="submit" class="btn btn-outline-primary" name="status"
                                            value="pending">Pending</button>
                                    @elseif($session->status == 'pending')
                                        <button type="submit" class="btn btn-outline-primary" name="status"
                                            value="confirmed">Confirmed</button>
                                    @elseif($session->status == 'canceled')
                                        <button type="submit" class="btn btn-outline-primary" name="status"
                                            value="confirmed">Confirmed</button>
                                    @endif
                                </form>
                            </td>
                            <td>
                                <form method="post" action="{{ url('cancelSession-photographerSide', $session->id) }}">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-danger" name="status"
                                        value="canceled">Canceled</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>


        </div>
    </div>
</div>
@endsection
