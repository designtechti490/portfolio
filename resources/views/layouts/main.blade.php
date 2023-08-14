<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<title>@yield('title')</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
		<link rel="shortcut icon" href="/midias/favicon.ico" type="image/x-icon" />

		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet"/>

		<link rel="stylesheet" href="/css/bootstrap.css" />
		<link rel="stylesheet" href="/css/animate.css" />
		<link rel="stylesheet" href="/css/owl.carousel.min.css" />
		<link rel="stylesheet" href="/css/magnific-popup.css" />

		<link rel="stylesheet" href="/css/style.css" />
	</head>
	<body>
		<header role="banner">

			<nav class="navbar navbar-expand-md navbar-dark bg-light">
				<div class="container">
				<img src="/midias/logo.png" class="logo">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
						<ul class="navbar-nav ml-auto pl-lg-5 pl-0">
							<li class="nav-item">
								<a class="nav-link" href="/">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link segundo" href="/sobre">Sobre</a>
							</li>
							<li class="nav-item">
								<a class="nav-link segundo" href="/blog">Blog</a>
							  </li>
							<li class="nav-item">
								<a class="nav-link segundo" href="/projetos">Projetos</a>
							</li>
							</li>
							<li class="nav-item">
								<a class="nav-link " href="/contato">Contato</a>
							</li>
						</ul>

					</div>
				</div>
			</nav>
		</header>

        <section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url('{{ asset($dadosBanner['imagem']) }}'); background-size: 110%;">
			<div class="container">
				<div class="row align-items-center site-hero-inner justify-content-center">
					<div class="col-md-8 text-center">
						<div class="mb-5 element-animate">
							<h1>{{ $dadosBanner['titulo'] }}</h1>
						</div>
							<div class="mb-5 element-animate">
								<p class="lead">{{ $dadosBanner['descricao'] }}</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="quick-info element-animate" data-animate-effect="fadeInLeft">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 bgcolor">
						<div class="row">
							<div class="col-md-4 mb-3">
								<div class="media">
									<div class="mr-3 icon-wrap"><span class="icon ion-ios-telephone"></span></div>
									<div class="media-body">
										<h5 class="whatsapp">&nbsp;{{ $phoneNumber['ddd'] }} {{ $phoneNumber['number'] }}</h5>
									</div>
								</div>
							</div>
							<div class="col-md-4 mb-3">
								<div class="media">
									<div class="mr-3 icon-wrap"><span class="icon ion-location"></span></div>
									<div class="media-body">
										<h5 class="map">{{$city}}</h5>
									</div>
								</div>
							</div>
							<div class="col-md-4 mb-3">
								<div class="media">
									<div class="mr-3 icon-wrap"><span class="icon ion-android-time"></span></div>
									<div class="media-body">
										<h5 class="clock">Segunda à Sábado <br>das 9hs às 18hs</h5>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		@yield('content')

		<footer>
			<img src="/midias/logo.png" class="logo">
			<p class="copyright">&copy; Design Tech TI | 2016 - {{date('Y')}}</p>
		</footer>

		<script src="/js/jquery-3.2.1.min.js"></script>
		<script src="/js/jquery-migrate-3.0.0.js"></script>
		<script src="/js/popper.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
		<script src="/js/owl.carousel.min.js"></script>
		<script src="/js/jquery.waypoints.min.js"></script>
		<script src="/js/jquery.stellar.min.js"></script>

		<script src="/js/jquery.magnific-popup.min.js"></script>
		<script src="/js/magnific-popup-options.js"></script>

		<script src="/js/main.js"></script>
	</body>
</html>
