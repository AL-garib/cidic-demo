
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	
	<link href="{{ asset('person_style/css/style.css') }}" rel="stylesheet">

	<link href="{{ asset('person_style/css/bootstrap.min.css') }}" rel="stylesheet">
	 
	<link href="{{ asset('person_style/css/bootstrap-rtl.min.css') }}" rel="stylesheet">

    <title>Hello, world!</title>
  </head>
  <body>
	@include('person.layouts.navbar')

	 

	<div class="container-fluid">
			@yield('content')
		
		  </div>
		
 

	

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <!-- <script src="{{ asset('js/jquery.min.js') }}"></script> -->
 
<script src="{{ asset('person_style/js/bootstrap.min.js') }}"></script>
 
  </body>
</html>