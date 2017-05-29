@include('shared.alert')
<div class="form-group">
	{!! Form::label('nome','Nome:') !!}
	{!! Form::text('nome',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('endereco','Endereço:') !!}
	{!! Form::text('endereco',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('telefone','Telefone:') !!}
	{!! Form::text('telefone',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('idequipe', 'Equipe:') !!}
    {!! Form::select('idequipe', $equipes, $pessoa->idequipe,['class'=>'form-control']) !!}
</div>
{!! Form::submit($submitButtonText,['class'=>'btn btn-primary']) !!}