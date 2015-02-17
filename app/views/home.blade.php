@extends('layout')

@section('content')
<h1>Repuestos para vehículos más buscados</h1>
<form id="searchform">
	<input type="text" name="txtSearch" placeholder="Buscar aquí..." required >
	<button id="btnSearch">Buscar</button>
</form>
<section id="itemsHome"></section>

{{-- <div class="pagination"> {{ $items->links() }} </div> --}}

<div class="botones">
	<a href="#" id="showAll" class="boton">Ver todos los productos</a>
</div>
@stop
@section('body_script')
	<script>
		(function	(){
			$txtSearch  = $('input[name=txtSearch]');
			$btnSearch  = $('#btnSearch');
			$btnShowAll = $('#showAll');

			$btnSearch.on('click', function(event) {
				event.preventDefault();
				loadItems('filter');
			});

			$btnShowAll.on('click', function(event) {
				event.preventDefault();
				loadItems('all');
			});

			$txtSearch.on('keyup', function(event) {
				event.preventDefault();
				loadItems('filter');
			});

			function loadItems (type) {
				// console.log(type);
				if ($txtSearch.val() !== '' && validateString($txtSearch.val())) {
					if (type === 'filter') {
						data = $txtSearch.val();
						return $('#itemsHome').load('{{ route("items") }}' + '/filter/' + data);
					}
				}else if (type === 'all') {
					return $('#itemsHome').load('{{ route("itemsAll") }}');
				}else
					return $('#itemsHome').load('{{ route("items") }}');
			}

			loadItems('topTen');
		})();
	</script>
@stop