<div>
	{!! Form::label('nome','Nome:') !!}
	{!! Form::text('nome') !!}
</div>
<div>
	{!! Form::label('endereco','Endereço:') !!}
	{!! Form::text('endereco') !!}
</div>
<div>
	{!! Form::label('telefone','Telefone:') !!}
	{!! Form::text('telefone') !!}
</div>
{!! Form::submit($submitButtonText) !!}