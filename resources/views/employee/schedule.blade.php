@extends('employee.blank')
@section('title', 'Photographer Dashboard')
@section('main')
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Add Sessions
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Add Sessions</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="" method="post" style="width: 100%; ">
                @csrf
                <label for="date">Select Date:</label><br/>
                <input type="date" id="date" name="date" required><br/><br/>

                <label for="times">Select Times:</label><br/>
                <input type="checkbox" name="times[]" value="09:00"> 09:00-10:00&nbsp;&nbsp;
                <input type="checkbox" name="times[]" value="10:00"> 10:00-11:00<br/>
                <input type="checkbox" name="times[]" value="11:00"> 11:00-12:00&nbsp;&nbsp;
                <input type="checkbox" name="times[]" value="12:00"> 12:00-13:00<br/>
                <input type="checkbox" name="times[]" value="13:00"> 13:00-14:00&nbsp;&nbsp;
                <input type="checkbox" name="times[]" value="14:00"> 14:00-15:00<br/>
                <input type="checkbox" name="times[]" value="15:00"> 15:00-16:00&nbsp;&nbsp;
                <input type="checkbox" name="times[]" value="16:00"> 16:00-17:00<br/>
                <input type="checkbox" name="times[]" value="17:00"> 17:00-18:00&nbsp;&nbsp;
                <input type="checkbox" name="times[]" value="18:00"> 18:00-19:00<br/>
                <input type="checkbox" name="times[]" value="19:00"> 19:00-20:00&nbsp;&nbsp;
                <input type="checkbox" name="times[]" value="20:00"> 20:00-21:00<br/>
                <input type="checkbox" name="times[]" value="21:00"> 21:00-22:00&nbsp;&nbsp;
                <input type="checkbox" name="times[]" value="22:00"> 22:00-23:00<br/>
                <input type="checkbox" name="times[]" value="23:00"> 23:00-00:00
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save Schedule</button>
        </div>
      </div>
    </div>
  </div>
@endsection
