<h2 class="Items-quantity">Cantidad de Productos: {{ count($items) }}</h2>
<div class="Items-container">
	@foreach ($items as $item)
	<article class="Items-box">
		<img class="Items-img"src="{{ $item->img }}">
		<h2 class="Items-title">{{ $item->name }}</h2>
		@if(Auth::check())
		<h3 class="Items-price">Precio: {{ $item->price }} Bs.F.</h3>
		@endif
	</article>
	@endforeach
</div>
{{-- <div class="pagination"> {{ $items->links() }} </div> --}}
