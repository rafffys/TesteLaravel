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
<div>
    {!! Form::label('idequipe', 'Equipe:') !!}
    {!! Form::select('idequipe', $equipes, $pessoa->idequipe) !!}
</div>
{!! Form::submit($submitButtonText) !!}