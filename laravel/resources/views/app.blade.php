<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>@yield('titre')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<link href="{{ asset('/style/css/bootstrap.css') }}" rel="stylesheet">
	<link rel="shortcut icon" href="{{ asset('/style/img/favicon3.png') }}" />
	<link href="//fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
	<link href="{{ asset('/style/css/font-awesome.css') }}" rel="stylesheet">
	<link href="{{ asset('/style/css/bootstrap-datepicker.css') }}" rel="stylesheet">
	<link href="{{ asset('/style/css/bootstrap-timepicker.css') }}" rel="stylesheet">
	<link href="{{ asset('/style/css/alertify.default.css') }}" rel="stylesheet">
	<link href="{{ asset('/style/css/alertify.core.css') }}" rel="stylesheet">

	{!! HTML::script('style/js/alertify.js'); !!}

	<script>

		function notifSuccess()
		{
			alertify.success("{{ Session::get('message_success') }}");
		}

		function notifInfo()
		{
			alertify.log("{{ Session::get('message_modif') }}");
		}

		function notifDelete()
		{
			alertify.error("{{ Session::get('message_delete') }}");
		}
	</script>

	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<![endif]-->
		</head>
		<body>
			<nav class="navbar navbar-inverse">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a style="margin-left: 0px;" class="navbar-brand logo-top" href="{{ route('listes.index') }}">APP</a>
					</div>

					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
						<ul class="nav navbar-nav navbar-right">
							<?php if(isset($userName)){echo '<li><a href="';?> {{ route('users.show', $userId) }} <?php echo'" style="font-size: 13px;"> Bonjour, <strong>'.$userName.'</strong> </a>
							<li><a href="';?>{{ url('auth/logout') }}<?php echo '" style="font-size: 13px;"><i class="icon-signout"></i> Déconnexion </a>';} ?>
							</ul>
						</div>
					</div>
				</nav>

				<nav class="navbar navbar-default" style="margin-top: -21px;">
					<div class="container-fluid">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>

						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								@if (isset(Auth::user()->admin) AND Auth::user()->admin == '1')
								<li id="tabUser"><a href="{{ route('users.index') }}"><i class="icon-user"></i><span> Utilisateurs</span> </a> </li>
								@endif
								<li id="tabListe"><a href="{{ route('listes.index') }}"><i class="icon-list-alt"></i><span> Listes</span> </a> </li>
							</ul>
						</div>
					</div>
				</nav>

				<div class="main">
					<div class="main-inner">
						<div class="container">
							@yield('h3')
							<div class="row">
								<div id="alert">
									@if (Session::has('message_success'))
									<?php echo "<script>notifSuccess();</script>"; ?>
									@elseif (Session::has('message_delete'))
									<?php echo "<script>notifDelete();</script>"; ?>
									@elseif (Session::has('message_modif'))
									<?php echo "<script>notifInfo();</script>"; ?>
									@endif
								</div>

								@if ($errors->any())
								<div class='alert alert-danger'>
									@foreach ( $errors->all() as $error )
									<p>{{ $error }}</p>
									@endforeach
								</div>
								@endif
								@yield('contenu')
							</div>
						</div>
						@yield('contenuIndex')
						@yield('contenuBis')
					</div>
				</div>

				<!-- Le javascript================================================== -->
				<!-- Placed at the end of the document so the pages load faster -->

				{!! HTML::script('https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js'); !!}
				{!! HTML::script('style/js/bootstrap.min.js'); !!}
				{!! HTML::script('style/js/bootstrap-datepicker.js'); !!}
				{!! HTML::script('style/js/locales/bootstrap-datepicker.fr.js'); !!}
				{!! HTML::script('style/js/datePicker.js'); !!}
				{!! HTML::script('style/js/bootstrap-timepicker.js'); !!}

				<script>@yield('script')</script>

			</body>
			</html>
