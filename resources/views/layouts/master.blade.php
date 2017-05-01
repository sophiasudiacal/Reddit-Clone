<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset = "utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Reddit</title>
	<!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/head.css">
    @yield('more_css')

</head>
<body>
	<nav class="navbar navbar-default navbar-toggleable-md navbar-light bg-faded">
  	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link" href="{{ action('HomeController@showWelcome') }}">Home <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{ action('PostsController@index') }}">Posts</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{ action('StudentsController@index') }}">Students</a>
			</li>
		</ul>
		<ul class="navbar-nav navbar-right">
			@if (Auth::check())
				<li>{{ Auth::user()->name }}</li>
				<li><a href="{{ action('Auth\AuthController@getLogout') }}">Logout</a></li>
			@else
				<li><a href="{{ action('Auth\AuthController@getLogin') }}">Login</a></li>
			@endif
		</ul>
	</div>
	</nav>
	<main class="container">
		@if (Session::has('successMessage'))
            <div class="alert alert-success">{{ session('successMessage') }}</div>
        @endif

        @if (Session::has('errorMessage'))
            <div class="alert alert-danger">{{ session('errorMessage') }}</div>
        @endif
    
    	@yield('content')
		
	</main>

    <footer class="footer footer-fixed-bottom">Copyright 2017</footer>
	
	<!-- Bootstrap JS  -->
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- jQuery JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
</body>
</html>