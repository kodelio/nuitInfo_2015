@extends('app')

@section('titre')
Connexion
@stop

@section('contenu')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-success">
				<div class="panel-heading">Connexion</div>
				<div class="panel-body">

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">Adresse Mail</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Mot de passe</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<br />
								<button type="submit" class="btn btn-primary">Se connecter</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="panel panel-info" style="margin-top: 100px;">
				<div class="panel-heading">Options</div>
				<div class="panel-body">
					<div class="col-md-8">
						<a class="btn btn-info" href="{{ url('/auth/register') }}">Créer un compte</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
@endsection
