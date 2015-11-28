@extends('app')

@section('titre')
Listes
@stop

@section('contenu')

<div class="container-fluid">
	<p>
		<a style="margin-top: 5px;" class="btn btn-success btn-sm" href="{{ route('listes.create') }}" title="Cliquez pour ajouter une liste"><span class="icon-plus"></span> Ajouter une liste</a>
		
	</p>
	
	<div class="table-responsive">
		
		@if ( !$listes->count() )
		<div class="panel panel-info" style="margin-top: 40px;">
			<div class="panel-heading">
				<h3 class="panel-title">Aucune liste</h3>
			</div>
			<div class="panel-body">
				Il n'y a aucune liste dans la base de données.
			</div>
		</div>
		@else
		<table class="table table-hover table-bordered table-condensed">
			<thead>
				<tr>
					<th style="font-size: 11px;">ID</th>
					<th style="font-size: 11px;">NOM</th>
					<th style="font-size: 11px;">DATE CRÉATION</th>
				</tr>
			</thead>
			<tbody>
				@foreach( $listes as $liste )
				<tr style="cursor: pointer;" class='clickable-row' data-href='{{ route('listes.edit', $liste->id) }}'>
					<?php $dateCrea = date("d/m/Y", strtotime($liste->created_at)); ?>
					<td style="font-size: 14px;">{!! $liste->id !!}</td>
					<td style="font-size: 14px;">{!! $liste->name !!}</td>
					<td style="font-size: 14px;">{!! $dateCrea !!}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		@endif
	</div>
</div>
@stop

@section('script')

jQuery(document).ready(function($) {
$(".clickable-row").click(function() {
window.document.location = $(this).data("href");
});
});

document.getElementById("tabListe").className = "active";

@stop
