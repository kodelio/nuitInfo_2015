@extends('app')

@section('titre')
Erreur 404
@stop

@section('contenu')
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="table-responsive">
               <p>Il semblerait que la page soit introuvable. Vérifiez votre requête ou contactez le support.<br><br>
                <a href="{{ route('users.index') }}" class="btn btn-primary">Retour</a>
            </p>
        </div>
        <!-- /.table-responsive -->
    </div>
    <!-- /.panel-body -->
</div>
<!-- /.panel -->
</div>   					
@stop
