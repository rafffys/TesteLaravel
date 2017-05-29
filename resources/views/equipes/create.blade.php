@extends($layout)

@section('content')
	{!! Form::open(['route'=>'equipes.store','data-remote'=>$remote,'id'=>'equipes-form']) !!}
		@include('equipes.form',array('submitButtonText'=>'Incluir Equipe'))
	{!! Form::close() !!}
@endsection