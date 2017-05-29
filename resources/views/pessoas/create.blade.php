@extends($layout)

@section('content')
	{!! Form::open(['route'=>'pessoas.store','data-remote'=>$remote,'id'=>'pessoas-form']) !!}
		@include('pessoas.form',array('submitButtonText'=>'Incluir Pessoa'))
	{!! Form::close() !!}
@endsection