<pessoa>
	<h1>{{$pessoa->nome}}</h1>
	<div>{{$pessoa->endereco}}</div>
	<div>{{$pessoa->telefone}}</div>
</pessoa>
{!! link_to_route('pessoas.index','Pessoas') !!}