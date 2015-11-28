<div class="form-group col-lg-8">
	{!! Form::label('name', 'Nom :') !!}
	{!! Form::text('name', Input::old('name'), array('class' => 'form-control input-sm')) !!}
</div>
<div class="form-group col-lg-8" style="margin-top: 10px;">
	{!! Form::label('email', 'Email :') !!}
	{!! Form::email('email', Input::old('email'), array('class' => 'form-control input-sm')) !!}
</div>
<div class="form-group col-lg-8">
	{!! Form::hidden('password', Input::old('password'), array('hidden' => 'hidden', 'class' => 'form-control input-sm')) !!}
</div>
@if ($userId != $user->id)
<div class="form-group col-lg-8" style="margin-top: 10px;">
	@if ($user->admin == 1)
	<?php $checkedAdmin = "checked"; ?>
	@else
	<?php $checkedAdmin = ""; ?>
	@endif
	<label for="admin" class="control-label">Admin :</label>
	<input id='adminHidden' type='hidden' value='0' name='admin'>
	<input id='admin' type="checkbox" value="1" name='admin' <?php echo $checkedAdmin; ?>>
</div>
@endif

<div class="form-group col-lg-12" style="margin-top: 10px;">
	{!! Form::submit($submit_text, ['class'=>'btn btn-primary', 'style' => 'width: 88px']) !!}
	<a class="btn btn-warning" href="{{ route('users.index') }}">Annuler</a>
</div>
