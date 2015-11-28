@extends('app')

@section('titre')
Liste des utilisateurs
@stop

@section('contenu')

<div class="container-fluid">
	<p>
		<a style="margin-top: 5px;" class="btn btn-success btn-sm" href="{{ route('users.create') }}" title="Cliquez pour ajouter un utilisateur"><span class="icon-plus"></span> Ajouter un utilisateur</a>
		
	</p>
	
	<div class="table-responsive">
		
		@if ( !$users->count() )
		<div class="panel panel-info" style="margin-top: 40px;">
			<div class="panel-heading">
				<h3 class="panel-title">Aucun utilisateur</h3>
			</div>
			<div class="panel-body">
				Il n'y a aucun utilisateur dans la base de données.
			</div>
		</div>
		@else
		<table class="table table-hover table-bordered table-condensed">
			<thead>
				<tr>
					<th style="font-size: 11px;">ID</th>
					<th style="font-size: 11px;">NOM</th>
					<th style="font-size: 11px;">EMAIL</th>
					<th style="font-size: 11px;">DATE CRÉATION</th>
				</tr>
			</thead>
			<tbody>
				@foreach( $users as $user )
				<tr style="cursor: pointer;" class='clickable-row' data-href='{{ route('users.edit', $user->id) }}'>
					<?php $dateCrea = date("d/m/Y", strtotime($user->created_at)); ?>
					<td style="font-size: 14px;">{!! $user->id !!}</td>
					<td style="font-size: 14px;">{!! $user->name !!}</td>
					<td style="font-size: 14px;">{!! $user->email !!}</td>
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

document.getElementById("tabUser").className = "active";

@stop
