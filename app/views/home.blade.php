@extends('layout')

@section('content')
<h1 class="Home-title">Repuestos para vehículos más buscados</h1>
<form class="Search-form">
	<input class="Search-input" type="text" name="txtSearch" placeholder="Buscar aquí..." required >
	<button class="Search-button" id="btnSearch">Buscar</button>
</form>
<section class="Items" id="itemsContainer"></section>

{{-- <div class="pagination"> {{ $items->links() }} </div> --}}

<div class="Button-box">
	<label id="showAll" class="u-button">Ver todos los productos</label>
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
				if ($txtSearch.val() !== '' && validateString($txtSearch.val())) {
					if (type === 'filter') {

						// data = $txtSearch.val();
						data = replaceSpaces($txtSearch.val());
						return $('#itemsContainer').load('{{ route("items") }}' + '/filter/' + data);
					}
				}else if (type === 'all') {
					return $('#itemsContainer').load('{{ route("itemsAll") }}');
				}else
					return $('#itemsContainer').load('{{ route("items") }}');
			}

			loadItems('topTen');
		})();
	</script>
@stop