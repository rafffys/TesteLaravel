{!! Form::open(['route'=>'pessoas.store','id'=>'pessoas-form']) !!}
	@include('pessoas.form',array('submitButtonText'=>'Incluir Pessoa'))
{!! Form::close() !!}