<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="Compra materiales electricos de todo tipo." />
	<title>TodopartesGlobal</title>
	<link rel="stylesheet" href="{{ asset('css/normalize.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/estilos.css') }}" />
	<!--Slide -->
	<link rel="stylesheet" href="{{ asset('css/slide.css') }}" />
</head>
<body>
	<nav>
		<figure id="logo">
			<img src="{{ asset('img/logo.png') }}" />
		</figure>
		<ul>
			<li><a href="index.php">Inicio</a></li>
			<li><a href="#">Nosotros</a></li>
			<li><a href="#">Productos</a></li>
			<li><a href="#">Contacto</a></li>
		</ul>
	</nav>
	<div id="wowslider-container1">
		<div class="ws_images">
			<ul>
				<li><a href="#"><img src="img/1.jpg" alt="1" title="Todo Partes Global" id="wows1_0"/></a></li>
				<li><a href="#"><img src="img/2.jpg" alt="full screen slider" title="Los mejores respuesto para carros" id="wows1_1"/></a></li>
				<li><a href="#"><img src="img/3.jpg" alt="3" title="Al mejor precio" id="wows1_2"/></a></li>
			</ul>
		</div>
		<div class="ws_bullets">
			<div>
				<a href="#" title="1"><img src="img/tooltips/1.jpg" alt="Todo Partes Global"/>1</a>
				<a href="#" title="full screen slider"><img src="img/tooltips/2.jpg" alt="Los mejores respuesto para carros"/>2</a>
				<a href="#" title="3"><img src="img/tooltips/3.jpg" alt="Al mejor precio"/>3</a>
			</div>
		</div>
		<div class="ws_shadow"></div>
	</div>
	
	<div id="contenido">

	@yield('content')

	</div>	
	
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/wowslider.js') }}"></script>
	<script src="{{ asset('js/script.js') }}"></script>
	<script src="{{ asset('js/app.js') }}"></script>
	@yield('body_script')
</body>
</html>