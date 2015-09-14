<h2>Cantidad de Productos: {{ count($items) }}</h2>

	@foreach ($items as $item)
		<article class="cajas">
			<img class="productos"src="{{ $item->img }}">
			<h2>{{ $item->name }}</h2>
			@if(Auth::check())
				<h3>Precio: {{ $item->price }} Bs.F.</h3>
			@endif
		</article>
	@endforeach
	{{-- <div class="pagination"> {{ $items->links() }} </div> --}}
