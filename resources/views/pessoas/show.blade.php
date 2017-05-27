@extends($layout)

@section('content')
	<pessoa>
		<h1>{{$pessoa->nome}}</h1>
		<div>Endereço: {{$pessoa->endereco}}</div>
		<div>Telefone: {{$pessoa->telefone}}</div>
		<div>Equipe: {{$pessoa->equipe->nome}}</div>
	</pessoa>
	{!! link_to_route('pessoas.index','Pessoas') !!}
@endsection