@extends($layout)

@section('content')
	{!! Form::model($pessoa,['method'=>'PATCH','route'=>['pessoas.update',$pessoa->id],'id'=>'pessoas-form']) !!}
		@include('pessoas.form',array('submitButtonText'=>'Editar Pessoa'))
	{!! Form::close() !!}
@endsection