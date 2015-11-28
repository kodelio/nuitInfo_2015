@extends('app')

@section('titre')
Ajout d'un utilisateur
@stop

@section('h3')
<h3>Création d'un utilisateur</h3>
@stop

@section('contenu')
<div class="panel panel-default" style="margin-top:10px;">
	<div class="panel-body">
		<div class="container">
			{!! Form::model(new App\User, ['route' => ['users.store']]) !!}
			@include('users.partials._formCreate', ['submit_text' => 'Créer'])
			{!! Form::close() !!}
		</div>
		<br>
	</div>
</div>
@stop

@section('script')
document.getElementById("tabUser").className = "active";
@stop
