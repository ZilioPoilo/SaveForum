<html>
<head>
    <title>SaveForum</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
    
</head>

<body class="dark whitetext">
<!--<?php //session_start(); ?> -->
<nav class="navbar navbar-expand ">
	<div class="container-fluid">
        <h1 class="orangetext">SaveForum</h1>
	    <div class="" id="navbar">
	    <ul class="nav m-auto nav-pills">
	        <li class="nav-item active"><a href="{{ route('home') }}" class="link orangetext">Home</a></li>
	        <li class="nav-item"><a href="{{ route('profile.posts') }}" class="link orangetext">Profile</a></li>
	        <li class="nav-item"><a href="{{ route('save.add') }}" class="link orangetext">Add Save</a></li>
	        <li class="nav-item"><a href="{{ route('about') }}" class="link orangetext">About</a></li>
	    </ul>
	    </div>
	</div> 
</nav>
<div class="border-top my-2"></div>
<div class="container whitetext" >
    @yield('content')
</div>

<footer class="container">

</footer>

</body>
</html>