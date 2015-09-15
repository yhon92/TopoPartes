<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="Compra materiales electricos de todo tipo." />
  <title>Todo Partes Global</title>
  <link rel="stylesheet" href="{{ asset('css/slide.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
</head>
<body>
	<nav class="MainMenu">
		<figure class="MainMenu-logo">
			<img src="{{ asset('img/logo.png') }}" />
		</figure>
		<ul class="MainMenu-container">
			<li class="MainMenu-option">
        <a class="MainMenu-link" href="{{ route('home') }}">Inicio</a>
      </li>
      <li class="MainMenu-option">
        <a class="MainMenu-link" href="{{ route('we') }}">Nosotros</a>
      </li>
      <li class="MainMenu-option">
        <a class="MainMenu-link" href="#">Productos</a>
      </li>
    </ul>
  </nav>
  <div id="wowslider-container1">
    <div class="ws_images">
     <ul>
      <li><a href=""><img src="img/1.jpg" alt="1" title="Todo Partes Global" id="wows1_0"/></a></li>
      <li><a href=""><img src="img/2.jpg" alt="full screen slider" title="Los mejores respuesto para carros" id="wows1_1"/></a></li>
      <li><a href=""><img src="img/3.jpg" alt="3" title="Al mejor precio" id="wows1_2"/></a></li>
    </ul>
  </div>
		{{-- <div class="ws_bullets">
			<div>
				<a href="#" title="1"><img src="img/tooltips/1.jpg" alt="Todo Partes Global"/>1</a>
				<a href="#" title="full screen slider"><img src="img/tooltips/2.jpg" alt="Los mejores respuesto para carros"/>2</a>
				<a href="#" title="3"><img src="img/tooltips/3.jpg" alt="Al mejor precio"/>3</a>
			</div>
		</div> --}}
		<div class="ws_shadow"></div>
	</div>
	
	<div class="contenido">

   @yield('content')

 </div>

 <footer class="Footer">
  <div class="Footer-social">
    <span>Síguenos:</span>
    <ul>
      <li><a href="#" class="fa fa-facebook"></a></li>
      <li><a href="#" class="fa fa-twitter"></a></li>
    </ul>
  </div>
  <div class="Footer-main">
    <div class="wrapper">
      <div class"Footer-about">
        <h4 class="Footer-title">Acerca de nosotros</h4>
        <p>Todopartesglobal.com.ve es un sitio donde puedes <span class="blue">chequear</span> todo tipo de repuestos para autos de manera sencilla, así podrás confirmar si estamos vendiendo el producto que necesitas.</p>
        <p>Los agradecimientos sinceros van para <strong><a rel="nofollow" href="#">Grafiweb</a></strong> quienes ayudaron en la obtención de este proyecto</p>
      </div>
      <div class="Footer-info">
        <h4 class="Footer-title">Más información</h4>
        <p>Puede contactarnos, preguntar y comprar por estas vías.</p>
        <ul>
          <li><i class="fa fa-phone"></i>0424-5257827</li>
          <li><i class="fa fa-globe"></i>Calle 9 entre carreras 8 y 9 La playa Santa Isabel, Barquisimeto Edo. Lara</li>
          <li><i class="fa fa-envelope"></i><a href="#">loboautos@hotmail.com</a></li>
        </ul>
      </div>
    </div>
    <div class="Footer-bottom">
     <p>Copyright © 2015 <strong><a href="{{ route('home') }}">Todo Partes Global</a></strong></p>
   </div>
 </div>
</footer>

<script src="{{ asset('js/app.js') }}"></script>
@yield('body_script')
</body>
</html>