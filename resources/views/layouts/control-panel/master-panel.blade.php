<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="A Fantastic Applaction!">
<meta name="keywords" content="Admin Panel For SoldItOut">
<title>Cidic | Admin Panel</title>
<link rel='shortcut icon' type='image/x-icon' href='images/favicon.ico' />
<link href="{{ asset('css/entypo.css') }}" rel="stylesheet">
<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/plugins/css3-animate-it-plugin/animations.css') }}" rel="stylesheet">
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/mouldifi-core.css') }}" rel="stylesheet">
<link href="{{ asset('css/mouldifi-forms.css') }}" rel="stylesheet">
<link href="{{ asset('css/bootstrap-rtl.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/mouldifi-rtl-core.css') }}" rel="stylesheet">
 <link href="{{ asset('css/app.css') }}" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
<![endif]-->

<!--[if lte IE 8]>
	<script type="text/javascript" src="js/plugins/flot/excanvas.min.js"></script>
<![endif]-->
</head>
<body>

<!-- Page container -->
<div class="page-container">

	<!-- Page Sidebar -->

		@include('layouts.control-panel._includes.sidebar')

   <!-- /page sidebar -->
  
  <!-- Main container -->

  <div class="main-container">
  
	<!-- Main header -->

		@include('layouts.control-panel._includes.toolbar')
		
	<!-- /main header -->
	
	  <!-- Main content -->

				@yield('content')

	  <!-- /main content -->
	  
    </div>
  <!-- /main container -->
  
</div>
<!-- /page container -->

<!--Load JQuery-->
<!-- <script src="{{ asset('js/jquery.min.js') }}"></script> -->
<!-- Load CSS3 Animate It Plugin JS -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/plugins/css3-animate-it-plugin/css3-animate-it.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/plugins/metismenu/jquery.metisMenu.js') }}"></script>
<script src="{{ asset('js/plugins/blockui-master/jquery-ui.js') }}"></script>
<script src="{{ asset('js/plugins/blockui-master/jquery.blockUI.js') }}"></script>
<!--Float Charts-->
<script src="{{ asset('js/plugins/flot/jquery.flot.min.js') }}"></script>
<script src="{{ asset('js/plugins/flot/jquery.flot.tooltip.min.js') }}"></script>
<script src="{{ asset('js/plugins/flot/jquery.flot.resize.min.js') }}"></script>
<script src="{{ asset('js/plugins/flot/jquery.flot.selection.min.js') }}"></script>
<script src="{{ asset('js/plugins/flot/jquery.flot.pie.min.js') }}"></script>
<script src="{{ asset('js/plugins/flot/jquery.flot.time.min.js') }}"></script>
<script src="{{ asset('js/functions.js') }}"></script>

	@yield('js')

</body>
</html>