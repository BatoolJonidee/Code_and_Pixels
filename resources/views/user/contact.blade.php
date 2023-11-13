@extends('welcome')
@section('title', 'Contact')

@section('main')
<div id="container">
    <div id="left-div-contact">
        <h1>Contact Us</h1>
        <div style="display: flex; justify-content: space-between; width:100%;">
            <div style="width:47%">
                <label for='fullName'>Full Name</label><br/>
                <input id="fullName" class="form-control" type="text" name="name" placeholder="Name">
            </div>
            <div style="width:47%">
                <label for='email'>Email</label><br/>
                <input id="email" class="form-control" type="email" name="email" placeholder="Email">
            </div>
        </div>
        <div>
            <label for='subject'>Subject</label><br/>
            <input id="subject" class="form-control" type="text" name="subject" placeholder="Subject">
        </div>
        <div>
            <label for='message'>Message</label><br/>
            <textarea id="message" class="form-control" name="message" placeholder="Message" rows="5"></textarea>
        </div>
        <div>
            <input type="submit" class="submit-contact" value="Send Message" >
        </div>
    </div>
    <div id="right-div-contact">
        ecefrewfrf
    </div>
</div>
@endsection
