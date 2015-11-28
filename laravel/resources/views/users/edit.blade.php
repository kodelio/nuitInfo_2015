@extends('app')

@section('titre')
Modification de l'utilisateur {!! $user->name !!}
@stop

@section('h3')
<h3>Modification de l'utilisateur <span style="color: #0c84e4;">{!! $user->name !!}</span></h3>
<?php
$dateCrea = date("d/m/Y", strtotime($user->created_at)); $dateUpdate = date("d/m/Y", strtotime($user->updated_at));
?>
<span style="color: grey;">Crée le {!! $dateCrea !!}</span><br />
<span style="color: grey;">Dernière modification le {!! $dateUpdate !!}</span>
@stop

@section('contenu')
<div class="panel panel-default" style="margin-top:10px;">
	<div class="panel-body">
		<div class="container">
			<br>
			{!! Form::model($user, ['method' => 'PATCH', 'route' => ['users.update', $user->id]]) !!}
			@include('users.partials._formEdit', ['submit_text' => 'Valider'])
			{!! Form::close() !!}
			{!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('users.destroy', $user->id))) !!}
			<a href="#deleteUser" role="button" class="btn btn-danger col-lg-2" data-toggle="modal" style="margin-left: 15px; width: 183px;">Supprimer</a>
			@include('users.modal')
			{!! Form::close() !!}
		</div>
		<br>
	</div>
</div>
@stop

@section('script')

document.getElementById("tabUser").className = "active";

@stop
