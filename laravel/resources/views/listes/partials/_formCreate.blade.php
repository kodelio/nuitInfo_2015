<div class="form-group col-lg-8">
	{!! Form::label('name', 'Nom :') !!}
	{!! Form::text('name', '', array('class' => 'form-control input-sm')) !!}
</div>
<div class="form-group col-lg-12" style="margin-top: 10px;">
	{!! Form::submit($submit_text, ['class'=>'btn btn-primary', 'style' => 'width: 88px']) !!}
	<a class="btn btn-warning" href="{{ route('listes.index') }}">Annuler</a>
</div>
