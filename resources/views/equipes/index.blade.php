@extends($layout)

@section('content')
	@include('shared.alert')
	<h1>Equipes</h1>
	{!! link_to_route('equipes.create','Nova Equipe',null,['class'=>'btn btn-primary btn-lg','data-remote'=>'true']) !!}
	<table class='table'>
		<tr>
			<th>Edit</th>
			<th>Delete</th>
			<th>Nome</th>
		</tr>
		@foreach ($equipes as $equipe)
			<tr>
				<td>{!! link_to_route('equipes.edit','Edit',$equipe->id,['class'=>'btn btn-default']) !!}</td>
				<td>
					{!! Form::open(['method'=>'DELETE','route'=>['equipes.destroy',$equipe->id]]) !!}
					<button type='submit' class='btn btn-warning'>Delete</button>
					{!! Form::close() !!}
				</td>
				<td>{!! link_to_route('equipes.show',$equipe->nome,$equipe->id) !!}</td>
			</tr>
		@endforeach
	</table>
@endsection
