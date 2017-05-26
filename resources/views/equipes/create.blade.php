{!! Form::open(['route'=>'equipes.store','id'=>'equipes-form']) !!}
	@include('equipes.form',array('submitButtonText'=>'Incluir Equipe'))
{!! Form::close() !!}