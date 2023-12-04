<base href="/public">
@extends('welcome')
@section('title', 'Photographer')

@section('main')

    <div style="width:fit-content; margin-left:auto; margin-right:auto">
        @if (session('success'))
            <div class="alert alert-success" role="alert" style="width:100%">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger" role="alert" style="width:100%">
                {{ session('error') }}
            </div>
        @endif
        <div id="photographerDetails-container">

            <div id="photographerDetails-imgDiv">
                <img id="photographerDetails-profilePic" src="{{ asset('storage/' . $photographer->photo) }}"
                    alt="photographer profile picture" />
            </div>
            <div id="photographerDetails-detailsDiv">
                <h1 id="photographerDetails-title">{{ $photographer->fname . ' ' . $photographer->lname }}</h1><br />
                <p><strong style="color: red">Description: </strong> {!! nl2br(e($photographer->description)) !!}</p>
                <p><strong style="color: red">Session's type: </strong> {{ $photographer->session_type }}</p>

                <div><strong style="color:red">Session Price: </strong> {{ $photographer->price }} JOD</div>
                <br/>
                <p id="photographerDetails-bookBtn" data-bs-toggle="modal" data-bs-target="#bookSessionModal">Book Session
                </p>
            </div>
        </div>
        <div class="modal fade" id="bookSessionModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" style="text-align: center">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Sessions</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    @if (session()->has('user_id') != null && session('is_admin') == 0 && $scheduleCount !=0)
                        <form method="post" action=" {{ url('storeReservation') }} ">
                            @csrf
                            <div class="modal-body">
                                <label>Photographer</label>
                                <input type="text" value="{{ $photographer->fname . ' ' . $photographer->lname }}"
                                    @disabled(true) /><br><br />
                                <input type="hidden" name="id" value="{{ $photographer->id }}" />
                                <label>Date</label>
                                <select id="selectedDate" name="date"
                                    onchange="selectTime({{ json_encode($schedules) }})" required>
                                    <option value="" disabled selected>Select Date</option>
                                    @foreach ($availableDates as $date)
                                        <option value="{{ $date }}">{{ $date }}</option>
                                    @endforeach
                                </select>&nbsp;&nbsp;&nbsp;
                                <label>Time</label>
                                <select id="selectedTime" name="time" required>
                                    <option value="" disabled selected>Select Time</option>
                                </select>

                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn" style="background-color: #f0f0f0"
                                    data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn" style="background-color: #076595;color:white">Save
                                    Schedule</button>
                            </div>
                        </form>
                        @elseif (session()->has('user_id') != null && session('is_admin') == 0 && $scheduleCount ==0)
                        <div class="modal-body">
                            Sorry, <span style="color: red"> {{$photographer->fname . ' ' . $photographer->lname}}</span> doesn't have Schedule Now, come back later.
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn" data-bs-dismiss="modal"
                                style="background-color: #076595;color:white">
                                Close</button>
                        </div>
                    @else
                        <div class="modal-body">
                            Sorry, you can't <span style="color: red">Book Sessions</span> before login.
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn" data-bs-dismiss="modal"
                                style="background-color: #076595;color:white">
                                Close</button>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <script>
        function selectTime(schedules) {
            let select = document.getElementById('selectedTime');
            let date = document.getElementById('selectedDate').value;
            select.innerHTML = '<option value="" disabled selected>Select Time</option>';
            schedules.forEach(element => {
                if (date == element.date && element.status == 0) {
                    let option = document.createElement('option');
                    option.value = element.time;
                    option.text = element.time;
                    select.appendChild(option);
                }
            });
        };
    </script>
@endsection
