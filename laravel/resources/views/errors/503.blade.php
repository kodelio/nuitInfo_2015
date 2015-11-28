@extends('app')

@section('titre')
Erreur 503
@stop

@section('contenu')
<div class="col-lg-12">
  <div class="panel panel-default">
    <div class="panel-body">
      <div class="table-responsive">
       <p>Application en maintenance. Réessayez plus tard ou contactez le support.
       </p>
     </div>
     <!-- /.table-responsive -->
   </div>
   <!-- /.panel-body -->
 </div>
 <!-- /.panel -->
</div>   					
@stop
