<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Login | Register</title>
    <link rel="icon" type="image/x-icon" href="./img/nav/logo.png">
    <link rel="stylesheet" type="text/css" href="css/register.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="container" id="container"  >
        <div id="login-register" >
            {{-- Sign up form --}}
            <div class="form-container sign-up-container" id="signupDiv">
                <form action="{{ route('signup') }}" method="post" id="signUp-form">

                    @csrf
                    <h1>Register</h1>

                    <input type="text" placeholder="First Name" name='fname' id='fnameInput' />
                    <p class='errorParagraph' id='fnameP'>** Letters Only</p>
                    @error('fname')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <br>
                    <input type="text" placeholder="Last Name" name='lname' id='lnameInput' />
                    <p class='errorParagraph' id='lnameP'>** Letters Only</p>
                    @error('lname')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <br>
                    <input type="email" placeholder="Email" name='email' id='emailInput' />
                    <p class='errorParagraph' id='emailP'>** example@mail.com</p>
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <br>
                    <input type="password" placeholder="Password" name='password' id='passwordInput' />
                    <p class='errorParagraph' id='passwordP'>** Password must be 8-32 characters and include uppercase
                        and lowercase letters, number and special character</p>
                    @error('password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <br>
                    <input type="password" placeholder="Confirm-Password" name='conf-password'
                        id='confirmPasswordInput' />
                    <p class='errorParagraph' id='confirmPasswordP'>** Must Match with Password</p>
                    @error('conf-password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <br>
                    <input type="number" placeholder="Phone" name='phone' id='phoneInput' />
                    <p class='errorParagraph' id='phoneP'>** Numbers Only (10 Digits)</p>
                    @error('phone')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <br>
                    <select id="gender" name='gender'>
                        <option value="Gender" selected disabled>Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    <p class='errorParagraph' id='genderP'>** Gender Required</p>
                    @error('gender')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <br>
                    <select id="city" name='city'>
                        <option value="City" selected disabled>City</option>
                        <option value="Amman">Amman</option>
                        <option value="Ajloun">Ajloun</option>
                        <option value="Aqaba">Aqaba</option>
                        <option value="Balqa">Balqa</option>
                        <option value="Irbid">Irbid</option>
                        <option value="Jerash">Jerash</option>
                        <option value="Karak">Karak</option>
                        <option value="Ma'an">Ma'an</option>
                        <option value="Madaba">Madaba</option>
                        <option value="Mafraq">Mafraq</option>
                        <option value="Tafilah">Tafilah</option>
                        <option value="Zarqa">Zarqa</option>
                    </select>
                    <p class='errorParagraph' id='cityP'>** City Required</p>
                    @error('city')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <br>
                    <textarea id="addressText" placeholder="Address.." cols="5" name='address'></textarea><br />
                    <p class='errorParagraph' id='addressP'>** Address Required</p>
                    @error('address')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <br>
                    <input type="submit" id='regSubmit' value="REGISTER" class="button">
                    @error('error')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <br><br>
                </form>
            </div>

            {{-- Login form  --}}
            <div class="form-container sign-in-container" id="loginDiv">
                <form action="{{ route('login') }}" method="POST" id='signIn-form'>
                    @csrf
                    <h1>Login</h1>
                    <br>
                    @error('error')
                        <div class="alert alert-danger" role="alert" style="width: 100%">
                            {{ $message }}
                        </div>
                    @enderror
                    @error('success')
                        <div class="alert alert-success" role="alert" style="width: 100%">
                            {{ $message }}
                        </div>
                    @enderror
                    <br>
                    <input type="text" placeholder="Email" name="Email" />
                    @error('Email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <br>
                    <input type="password" placeholder="Password" name="Password" />
                    @error('Password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <br><br>
                    <input type="submit" value="LOGIN" class="button">
                    @error('msg')
                        <div class="alert alert-danger" role="alert" style="width: 100%">
                            {{ $message }}
                        </div>
                    @enderror
                    <p class="button" id='createAnAccountBtn'>Create an account</p>
                </form>
            </div>
        </div>
        {{-- ----------------------------------------- --}}
        <div class="overlay-container" id='overlayContainerDiv'>

            <div class="overlay">
                <div class="bg-bubbles">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </div>
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signUp">Register</button>
                </div>
            </div>
            {{-- ----------------------------------------- --}}
        </div>
    </div>
    <div id="regDivMob" style="display: none">
        <form action="{{ route('signup') }}" method="post" id="signUpMob-form">

            @csrf
            <h1>Register</h1>

            <input type="text" placeholder="First Name" name='fname' id='fnameInputMob' />
            <p class='errorParagraph' id='fnamePMob'>** Letters Only</p>
            @error('fname')
                <div class="text-danger">{{ $message }}</div>
            @enderror

            <input type="text" placeholder="Last Name" name='lname' id='lnameInputMob' />
            <p class='errorParagraph' id='lnamePMob'>** Letters Only</p>
            @error('lname')
                <div class="text-danger">{{ $message }}</div>
            @enderror

            <input type="email" placeholder="Email" name='email' id='emailInputMob' />
            <p class='errorParagraph' id='emailPMob'>** example@mail.com</p>
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror

            <input type="password" placeholder="Password" name='password' id='passwordInputMob' />
            <p class='errorParagraph' id='passwordPMob'>** Password must be 8-32 characters and include uppercase
                and lowercase letters, number and special character</p>
            @error('password')
                <div class="text-danger">{{ $message }}</div>
            @enderror

            <input type="password" placeholder="Confirm-Password" name='conf-password'
                id='confirmPasswordInputMob' />
            <p class='errorParagraph' id='confirmPasswordPMob'>** Must Match with Password</p>
            @error('conf-password')
                <div class="text-danger">{{ $message }}</div>
            @enderror

            <input type="number" placeholder="Phone" name='phone' id='phoneInputMob' />
            <p class='errorParagraph' id='phonePMob'>** Numbers Only (10 Digits)</p>
            @error('phone')
                <div class="text-danger">{{ $message }}</div>
            @enderror

            <select id="genderMob" name='gender'>
                <option value="Gender" selected disabled>Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            <p class='errorParagraph' id='genderPMob'>** Gender Required</p>
            @error('gender')
                <div class="text-danger">{{ $message }}</div>
            @enderror

            <select id="cityMob" name='city'>
                <option value="City" selected disabled>City</option>
                <option value="Amman">Amman</option>
                <option value="Ajloun">Ajloun</option>
                <option value="Aqaba">Aqaba</option>
                <option value="Balqa">Balqa</option>
                <option value="Irbid">Irbid</option>
                <option value="Jerash">Jerash</option>
                <option value="Karak">Karak</option>
                <option value="Ma'an">Ma'an</option>
                <option value="Madaba">Madaba</option>
                <option value="Mafraq">Mafraq</option>
                <option value="Tafilah">Tafilah</option>
                <option value="Zarqa">Zarqa</option>
            </select>
            <p class='errorParagraph' id='cityPMob'>** City Required</p>
            @error('city')
                <div class="text-danger">{{ $message }}</div>
            @enderror

            <textarea id="addressTextMob" placeholder="Address.." cols="5" name='address'></textarea><br />
            <p class='errorParagraph' id='addressPMob'>** Address Required</p>
            @error('address')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            <input type="submit" id='regSubmitMob' value="REGISTER" class="button">
            <p class="button" id='haveAnAccountBtn'>Have an account? Login</p>
        </form>
    </div>
    <script src="js/register.js"></script>
</body>

</html>


{{-- /////////////////////////////////////// --}}
