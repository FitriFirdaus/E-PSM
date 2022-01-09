<?php

$logged_user = session()->get('logged_user');

?>

<!DOCTYPE html>
<html>

<head>
	<title>UMP | e-PSM</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}"></script>

	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">

	<!-- global css -->
	<style type="text/css">
		body {
			background-color: white;
		}
	</style>

</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-white">
		<a class="navbar-brand" href="/">
			<img src="./images/ump_logo.png" width="80" height="50" alt="">
			<!-- Navbar -->
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">

				<li class="nav-item active" style="margin-right: 10px;">
					<a class="nav-link" href="/">Login</a>
				</li>

				<li class="nav-item dropdown active" style="margin-right: 80px;">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Action
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="register">Create Account</a>
						<!-- <div class="dropdown-divider"></div> -->
						<a class="dropdown-item" href="forgot">Change Password</a>
						@if ($logged_user)
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="logout">Logout</a>
						@endif
					</div>
				</li>
			</ul>
			<!-- <form class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		</form> -->
		</div>
	</nav>