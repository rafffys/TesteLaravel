@extends($layout)

@section('content')
	@include('shared.alert')
	<h1>Pessoas</h1>
	{!! link_to_route('pessoas.create','Nova Pessoa',null,['class'=>'btn btn-primary btn-lg','data-remote'=>'true']]) !!}
	<table class='table'>
		<tr>
			<th>Edit</th>
			<th>Delete</th>
			<th>Nome</th>
			<th>Equipe</th>
		</tr>
		@foreach ($pessoas as $pessoa)
			<tr>
				<td>{!! link_to_route('pessoas.edit','Edit',$pessoa->id,['class'=>'btn btn-default']) !!}</td>
				<td>
					{!! Form::open(['method'=>'DELETE','route'=>['pessoas.destroy',$pessoa->id]]) !!}
					<button type='submit' class='btn btn-warning'>Delete</button>
					{!! Form::close() !!}
				</td>
				<td>{!! link_to_route('pessoas.show',$pessoa->nome,$pessoa->id) !!}</td>
				<td>{!! $pessoa->equipe->nome !!}</td>
			</tr>
		@endforeach
	</table>
@endsection