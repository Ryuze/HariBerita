<!DOCTYPE html>
<html lang="id">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="x-ua-compatible" content="ie=edge">

		<title>Berita Harian | {{ $title }}</title>

		{{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
		<link rel="stylesheet" href="/vendor/bootstrap-5/css/bootstrap.min.css">
		<link rel="stylesheet" href="/vendor/almasaeed2010/adminlte/plugins/fontawesome-free/css/all.min.css">
		<link rel="stylesheet" href="/vendor/almasaeed2010/adminlte/dist/css/adminlte.min.css">
		<link rel="stylesheet" href="/vendor/bootstrap-icons/font/bootstrap-icons.css">
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
		@isset($botStyle)
        	{{ $botStyle }}
		@endisset
	</head>
	<body class="hold-transition sidebar-mini">
		<div class="wrapper">
			<nav class="main-header navbar navbar-expand navbar-white navbar-light">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
					</li>
					<li class="nav-item d-none d-sm-inline-block">
						<a href="{{ Route('index') }}" class="nav-link">Home</a>
					</li>
					<li class="nav-item d-none d-sm-inline-block">
						<a href="#" class="nav-link">About us</a>
					</li>
				</ul>

				<ul class="navbar-nav ml-auto">
					<div class="dropdown">
						<a class="btn mr-5" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						{{ Auth::user()->name }}
						</a>

						<div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink">
							<a href="{{ URL::to('akun/updateakun') }}" class="nav-link {{ in_array("updateakun", explode("/", Request::path())) ? "active" : "" }}" 
							class="dropdown-item">Pengaturan</a>
							<form action="{{ Route('logout') }}" method="post">
								@csrf
								<a href="{{ Route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="dropdown-item">Keluar</a>
							</form>
						</div>
					</div>
				</ul>
			</nav>

			@include('components.sidebar')

			<div class="content-wrapper">
				<div class="content-header">
					<div class="container-fluid">
						{{ $contentHeader }}
					</div>
				</div>

				<x-session-alert/>
				{{ $body }}
			</div>

			<footer class="main-footer">
				<div class="float-right d-none d-sm-inline">
					Anything you want
				</div>
				<strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
			</footer>
		</div>

		<script src="/vendor/almasaeed2010/adminlte/plugins/jquery/jquery.min.js"></script>
		<script src="/vendor/almasaeed2010/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="/vendor/almasaeed2010/adminlte/dist/js/adminlte.min.js"></script>
		@isset($botScripts)
			{{ $botScripts }}
		@endisset
		{{-- <script src="{{ asset('js/app.js') }}"></script> --}}
	</body>
</html>
