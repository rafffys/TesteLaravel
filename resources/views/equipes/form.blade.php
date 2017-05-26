<div>
	{!! Form::label('nome','Nome:') !!}
	{!! Form::text('nome') !!}
</div>
<div>
	{!! Form::label('email','E-Mail:') !!}
	{!! Form::text('email') !!}
</div>
{!! Form::submit($submitButtonText) !!}