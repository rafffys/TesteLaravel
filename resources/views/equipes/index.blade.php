@extends($layout)


@section('content')
	<h1>Equipes</h1>
	{!! link_to_route('equipes.create','Nova Equipe') !!}
	<table border="1">
		<tr>
			<th>Edit</th>
			<th>Delete</th>
			<th>Nome</th>
		</tr>
		@foreach ($equipes as $equipe)
			<tr>
				<td>{!! link_to_route('equipes.edit','Edit',$equipe->id) !!}</td>
				<td>
					{!! Form::open(['method'=>'DELETE','route'=>['equipes.destroy',$equipe->id]]) !!}
					<button type='submit'>Delete</button>
					{!! Form::close() !!}
				</td>
				<td>{!! link_to_route('equipes.show',$equipe->nome,$equipe->id) !!}</td>
			</tr>
		@endforeach
	</table>
@endsection
