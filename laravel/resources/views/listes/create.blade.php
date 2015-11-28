@extends('app')

@section('titre')
Ajout d'une liste
@stop

@section('h3')
<h3>Création d'une liste</h3>
@stop

@section('contenu')
<div class="panel panel-default" style="margin-top:10px;">
	<div class="panel-body">
		<div class="container">
			{!! Form::model(new App\Liste, ['route' => ['listes.store']]) !!}
			@include('listes.partials._formCreate', ['submit_text' => 'Créer'])
			{!! Form::close() !!}
		</div>
		<br>
	</div>
</div>
@stop

@section('script')
document.getElementById("tabListe").className = "active";
@stop
