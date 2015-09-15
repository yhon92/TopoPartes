@extends('layout')

@section('content')
<article class="We">
<h2 class="We-title">Quiénes somos</h2>
  <section class="We-image">
    <img src="img/plant.jpg">
  </section>
  <section class="History">
    <h1 class="History-title">Nuestra Historia</h1>
    <p class="History-text">Todo Partes Global es una empresa que nace con la intención de cubrir la demanda que existe en el comercio de repuestos para automóviles y sumarse al grupo de empresas que distribuyen estos productos.
    </p>
    <p class="History-text">Con el paso del tiempo fuimos creciendo y ahora tenemos una variedad amplia de repuestos de muchos tipos de marcas para distintos tipos de vehículos.</p>

    <a href="{{ route('home') }}" class="u-button">Volver</a>
  </section>
</article>
@stop
