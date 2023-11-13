<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/error.css">
</head>
<body>
    <div id="notfound">
		<div class="notfound">
			<div class="notfound-bg">
				<div></div>
				<div></div>
				<div></div>
			</div>
			<h1>oops!</h1>
			<h2>Error : Can't Access To This Page Before Login</h2>
			<a href="{{route('reg')}}">Login | Register</a>
            <a href="{{url('/')}}">Home Page</a>
		</div>
	</div>
</body>
</html>
