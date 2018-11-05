<!DOCTYPE html>
<html>
<head>
	<title>SBY-PC</title>
	<meta charset="utf-8">
	{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
	{{-- <link rel="stylesheet" type="text/css" href="/css/style.css"> --}}

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<link rel="stylesheet" type="text/css" href="css/semantic.min.css">
	<link rel="stylesheet" type="text/css" href="css/icon.min.css">

	{{-- <link rel="stylesheet" type="text/css" href=" {{asset('css/app.css')}} "> --}}

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

 	<script src="js/semantic.min.js"></script>

  	{{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> --}}
  	<style type="text/css">
	  	body {
	    	background-color: #FFFFFF;
	  	}
	  	.ui.menu .item img.logo {
	  		margin-right: 1.5em;
  		}
  		.main.container {
    		margin-top: 7em;
  		}
  		.wireframe {
    		margin-top: 2em;
  		}
  		.ui.footer.segment {
  			margin: 5em 0em 0em;
  			padding: 5em 0em;
  		}
  	</style>

  	  <script>
  	  	$(document).ready(function() {
      		$('.main.menu  .ui.dropdown').dropdown({
        		on: 'hover'
      		});
    	});
  </script>
</head>

<body>

	@include('partials.navbar')
	<div class="ui main container">
		@yield('content')
	</div>
	@include('partials.footer')

{{-- 	<div class="wrapper">
		@include ('layouts.navbar')
		@yield('content')
		@include('layouts.footer')
	</div> --}}


		{{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> --}}
		{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> --}}
		{{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> --}}
		<script type="text/javascript" src=" {{asset('js/app.js')}} "></script>
	</body>
</body>
</html>