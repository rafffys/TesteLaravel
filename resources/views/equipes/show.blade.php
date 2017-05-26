<equipe>
	<h1>{{$equipe->nome}}</h1>
	<div>Email: {{$equipe->email}}</div>
	<div>Integrantes: 
	@foreach ($equipe->pessoas as $pessoa)
		{{$pessoa->nome}} /
	@endforeach
	</div>
</equipe>
{!! link_to_route('equipes.index','Equipes') !!}