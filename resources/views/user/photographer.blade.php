<base href="/public">
@extends('welcome')
@section('title', 'Photographer')

@section('main')
    <div id="photographerDetails-container">
        <div id="photographerDetails-imgDiv">
            <img id="photographerDetails-profilePic" src="{{ asset('storage/' . $photographer->photo) }}" alt="photographer profile picture" />
        </div>
        <div id="photographerDetails-detailsDiv">
            <h1 id="photographerDetails-title">{{$photographer->fname . " " . $photographer->lname}}</h1><br/>
            <p>{!! nl2br(e($photographer->description)) !!}</p><br>
            <p id="photographerDetails-bookBtn" data-bs-toggle="modal" data-bs-target="#bookSessionModal">Book Session</p>
        </div>
    </div>
    <div class="modal fade" id="bookSessionModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Sessions</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                    <div class="modal-body">
                        <div>
                            <label for="selectedDate">Select Date:</label>
                            <input type="date" id="datePicker" name="date" required>
                        </div>
<script>
    const availableDates = @json($availableDates); // Pass the available dates from your controller to JavaScript

    // Initialize your date picker and dynamically enable available dates
    const datePicker = document.getElementById('datePicker');

    datePicker.addEventListener('focus', function () {
        const currentDate = new Date();
        const options = {
            year: 'numeric',
            month: '2-digit',
            day: '2-digit'
        };

        const formattedDates = availableDates.map(function (dateString) {
            const [year, month, day] = dateString.split('-');
            return new Date(year, month - 1, day).toLocaleDateString('en-US', options);
        });

        datePicker.setAttribute('readonly', 'readonly');
        datePicker.value = '';

        datePicker.addEventListener('click', function () {
            datePicker.removeAttribute('readonly');
        });

        datePicker.addEventListener('blur', function () {
            if (datePicker.value === '') {
                datePicker.setAttribute('readonly', 'readonly');
            }
        });

        datePicker.addEventListener('input', function () {
            const selectedDate = new Date(datePicker.value);
            const formattedSelectedDate = selectedDate.toLocaleDateString('en-US', options);
            if (!formattedDates.includes(formattedSelectedDate)) {
                datePicker.value = '';
            }
        });

        datePicker.addEventListener('keydown', function(evt) {
            if (evt.key == 'Enter' && !availableDates.includes(datePicker.value)) {
                evt.preventDefault();
                datePicker.value = '';
            }
        });

        datePicker.addEventListener('focus', function() {
            const datepicker = this;
            const datepickerValue = this.value;
            const optionsArray = Array.from(this.options);
            optionsArray.forEach(function (option) {
                if (availableDates.includes(option.value)) {
                    option.removeAttribute('disabled');
                } else {
                    option.setAttribute('disabled', 'disabled');
                }
            });
            if (datepickerValue && availableDates.includes(datepickerValue)) {
                datepicker.value = datepickerValue;
            } else {
                datepicker.value = '';
            }
        });
    });
</script>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn" style="background-color: #f0f0f0" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn"  style="background-color: #076595;color:white">Save Schedule</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
