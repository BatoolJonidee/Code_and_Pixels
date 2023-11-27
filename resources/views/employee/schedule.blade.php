@if (session()->has('user_id') != null && session('is_admin') == 1)

@extends('includeUser.top')
    @section('title', 'Photographer Profile')
    @include('includeUser.nav')
    <div id="scheduleContainer">
        <!-- Button trigger modal -->
        <div id="schedulePageTitle">
            <p>Schedule</p>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addSessionModal">
                Add Sessions
            </button>
        </div>
        <hr>
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <!-- Modal -->
        <div class="modal fade" id="addSessionModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Sessions</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ url('Photographer-storeSchedule', session('user_id')) }}" method="post"
                        style="width: 100%; ">
                        <div class="modal-body">
                            @csrf
                            <label for="date">Select Date:</label><br />
                            <input type="date" id="date" name="date" required><br /><br />

                            <label for="times">Select Times:</label><br />
                            <input type="checkbox" name="times[]" value="09:00"> 09:00-10:00&nbsp;&nbsp;
                            <input type="checkbox" name="times[]" value="10:00"> 10:00-11:00<br />
                            <input type="checkbox" name="times[]" value="11:00"> 11:00-12:00&nbsp;&nbsp;
                            <input type="checkbox" name="times[]" value="12:00"> 12:00-13:00<br />
                            <input type="checkbox" name="times[]" value="13:00"> 13:00-14:00&nbsp;&nbsp;
                            <input type="checkbox" name="times[]" value="14:00"> 14:00-15:00<br />
                            <input type="checkbox" name="times[]" value="15:00"> 15:00-16:00&nbsp;&nbsp;
                            <input type="checkbox" name="times[]" value="16:00"> 16:00-17:00<br />
                            <input type="checkbox" name="times[]" value="17:00"> 17:00-18:00&nbsp;&nbsp;
                            <input type="checkbox" name="times[]" value="18:00"> 18:00-19:00<br />
                            <input type="checkbox" name="times[]" value="19:00"> 19:00-20:00&nbsp;&nbsp;
                            <input type="checkbox" name="times[]" value="20:00"> 20:00-21:00<br />
                            <input type="checkbox" name="times[]" value="21:00"> 21:00-22:00&nbsp;&nbsp;
                            <input type="checkbox" name="times[]" value="22:00"> 22:00-23:00<br />
                            <input type="checkbox" name="times[]" value="23:00"> 23:00-00:00
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn" style="background-color: #f0f0f0" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn"  style="background-color: #076595;color:white">Save Schedule</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="table-responsive table-data" >

            <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Date</th>
                        <th>Day</th>
                        <th>Time</th>
                        <th>Status</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($schedules as $schedule)
                    <tr>
                        <td>{{ $schedule->id }}</td>
                        <td>{{ $schedule->date }}</td>
                        <td>{{ \Carbon\Carbon::parse($schedule->date)->format('l') }}</td>
                        <td>{{ $schedule->time }}</td>
                        @if ($schedule->status == 0)
                        <td>Available</td>
                        @else
                        <td>Booked</td>
                        @endif
                        <td>
                            <input type="submit" class="btn btn-outline-danger" value="Delete" data-bs-toggle="modal"
                                data-bs-target="#scheduleDeleteModal{{ $schedule->id }}">
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            @foreach ($schedules as $schedule)
            <div class="modal fade" id="scheduleDeleteModal{{ $schedule->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Delete Session</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        @if ($schedule->status == 0)
                        <div class="modal-body">
                            Are you sure you want to delete this session?
                        </div>
                        <div class="modal-footer">
                            <form method="post" action="{{ url('photographer-destroySchedule', $schedule->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn" style="background-color: #f0f0f0" data-bs-dismiss="modal">No</button>
                                <button type="submit" class="btn " style="background-color: #076595; color:white">Yes</button>
                            </form>
                        </div>
                        @else
                        <div class="modal-body">
                            You can't delete this session because this session is <span
                                style="color: red; font-weight: bold">booked</span>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn " style="background-color: #076595; color:white" data-bs-dismiss="modal">Ok</button>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
    <script>
        document.getElementById('date').min = new Date(new Date().getTime() + 24 * 60 * 60 * 1000).toISOString().split('T')[
            0];
    </script>

@include('includeUser.footer')
@else
    @include('error')
@endif
