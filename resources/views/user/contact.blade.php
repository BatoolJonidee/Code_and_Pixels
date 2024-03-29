@extends('welcome')
@section('title', 'Contact')

@section('main')

    <h1 id="contact-page-header">Contact Us</h1>
    <div id="container">

        <div id="inner-container">
            <div id="left-div-contact">
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('error') }}
                    </div>
                @endif
                <form method="post" action="{{ route('createContact') }}">
                    @csrf
                    <div id="name-email-div-contact">
                        <div style="width:47%">
                            <label for='fullName'>Full Name</label><br />
                            @if (session()->has('user_id') == null)
                                <input id="fullName" class="form-control" type="text" name="name" placeholder="Name"
                                    required>
                            @else
                                <input id="fullName" class="form-control" type="text" name="name" placeholder="Name"
                                    value="{{ session('user_name') }}" required>
                            @endif
                        </div>
                        <div style="width:47%">
                            <label for='email'>Email</label><br />
                            @if (session()->has('user_email') == null)
                                <input id="email" class="form-control" type="email" name="email" placeholder="Email"
                                    required>
                            @else
                                <input id="email" class="form-control" type="email" name="email" placeholder="Email"
                                    value="{{ session('user_email') }}" required>
                            @endif
                        </div>
                    </div>
                    <div>
                        <label for='subject'>Subject</label><br />
                        <input id="subject" class="form-control" type="text" name="subject" placeholder="Subject"
                            required>
                    </div>
                    <div>
                        <label for='message'>Message</label><br />
                        <textarea id="message" class="form-control" name="message" placeholder="Message" rows="5" required></textarea>
                    </div>
                    <div>
                        <input type="submit" class="submit-contact" value="Send Message">
                    </div>
                </form>
            </div>
            <div id="right-div-contact">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13885.08034981758!2d35.00909064990769!3d29.53762785770232!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2sjo!4v1699864938927!5m2!1sar!2sjo"
                    width="100%" height="520" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
@endsection
