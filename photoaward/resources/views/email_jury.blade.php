<!DOCTYPE html>
<html>
<head>
    <title>Welcome Email</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style type="text/css">
    	.container{
    		display: block;
    		width: 50%;
    		margin: 0 auto;
    		background: #fff;
            height: auto;
            border-radius: 10px;
    		
    	}
    	h2{
    		background: green;
    		color: white;
    		padding: 20px;
    	}

    </style>

</head>
 
<body>
<div class="container">

<h3 class="btn btn-success">Welcome to Picture+254 {{$user->name}}</h3>
<br/>
<p>Your email is {{$user['email']}} and Password is {{$passs}}, Please click on the below link to login.</p>
<br/>
<a href="{{route('admin-dashboard')}}" class="btn btn-primary">Login</a>

</div>
</body>
 
</html>