@extends('app')

@section('titre')
Modification de la liste {!! $liste->name !!}
@stop

@section('h3')
<h3>Modification de la liste <span style="color: #0c84e4;">{!! $liste->name !!}</span></h3>
<?php
$dateCrea = date("d/m/Y", strtotime($liste->created_at)); $dateUpdate = date("d/m/Y", strtotime($liste->updated_at));
?>
<span style="color: grey;">Crée le {!! $dateCrea !!}</span><br />
<span style="color: grey;">Dernière modification le {!! $dateUpdate !!}</span>
@stop

@section('contenu')
<div class="panel panel-default" style="margin-top:10px;">
	<div class="panel-body">
		<div class="container">
			<br>
			{!! Form::model($liste, ['method' => 'PATCH', 'route' => ['listes.update', $liste->id]]) !!}
			@include('listes.partials._formEdit', ['submit_text' => 'Valider'])
			{!! Form::close() !!}
			{!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('listes.destroy', $liste->id))) !!}
			<a href="#deleteListe" role="button" class="btn btn-danger col-lg-2" data-toggle="modal" style="margin-left: 15px; width: 183px;">Supprimer</a>
			@include('listes.modal')
			{!! Form::close() !!}
		</div>
		<br>
	</div>
</div>
@stop

@section('script')

document.getElementById("tabListe").className = "active";

@stop
