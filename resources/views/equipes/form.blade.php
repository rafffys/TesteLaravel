<div class="form-group">
	{!! Form::label('nome','Nome:') !!}
	{!! Form::text('nome',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('email','E-Mail:') !!}
	{!! Form::text('email',null,['class'=>'form-control']) !!}
</div>
{!! Form::submit($submitButtonText,['class'=>'btn btn-primary']) !!}