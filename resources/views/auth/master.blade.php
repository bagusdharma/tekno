<!DOCTYPE html>
<html>
<head>
	<title>SBY-PC</title>
	<meta charset="utf-8">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<link rel="stylesheet" type="text/css" href="/css/semantic.min.css">
	<link rel="stylesheet" type="text/css" href="/css/icon.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

 	<script src="/js/semantic.min.js"></script>
 	<style type="text/css">
	    body {
	        background-color: #DADADA;
	    }
	    body > .grid {
	        height: 100%;
	    }
	    .image {
	        margin-top: -100px;
	    }
	    .column {
	        max-width: 450px;
	    }
	</style>

	<script>
		$(document).ready(function() {
			$('.ui.form').form({
				fields: {
					email: {
						identifier  : 'email',
						rules: [
						{
							type   : 'empty',
							prompt : 'Please enter your e-mail'
						},
						{
							type   : 'email',
							prompt : 'Please enter a valid e-mail'
						}]
					},
					password: {
						identifier  : 'password',
						rules: [
						{
							type   : 'empty',
							prompt : 'Please enter your password'
						},
						{
							type   : 'length[6]',
							prompt : 'Your password must be at least 6 characters'
						}]
					}
				}
			});
		});
	</script>
</head>

<body>

{{-- 	@include('partials.navbar') --}}
	<div class="ui middle aligned center aligned grid">
		@yield('content')
	</div>
	{{-- @include('partials.footer') --}}

	<script type="text/javascript" src=" {{asset('js/app.js')}} "></script>
	</body>
</body>
</html>