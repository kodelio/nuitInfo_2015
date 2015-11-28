<fieldset>
	<div class="form-group col-lg-8">
		{!! Form::label('name', 'Nom :') !!}
		{!! Form::text('name', '', array('class' => 'form-control input-sm')) !!}
	</div>
	<div class="form-group col-lg-8" style="margin-top: 10px;">
		{!! Form::label('email', 'Email :') !!}
		{!! Form::email('email', '', array('class' => 'form-control input-sm')) !!}
	</div>
	<div class="form-group col-lg-8" style="margin-top: 10px;">
		{!! Form::label('password', 'Mot de passe :') !!}
		{!! Form::password('password', array('class' => 'form-control input-sm')) !!}
	</div>
	<div class="form-group col-lg-8" style="margin-top: 15px;">
		<label for="admin">Admin :</label>
		<input id='adminHidden' type='hidden' value='0' name='admin'>
		<input id='admin' type="checkbox" value="1" name='admin'>
	</div>
	<div class="form-group col-lg-12" style="margin-top: 10px;">
		{!! Form::submit($submit_text, ['class'=>'btn btn-primary', 'style' => 'width: 88px']) !!}
		<a class="btn btn-warning" href="{{ route('users.index') }}">Annuler</a>
	</div>
</fieldset>
