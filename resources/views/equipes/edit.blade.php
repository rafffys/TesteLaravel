{!! Form::model($equipe,['method'=>'PATCH','route'=>['equipes.update',$equipe->id],'id'=>'equipes-form']) !!}
	@include('equipes.form',array('submitButtonText'=>'Editar Equipe'))
{!! Form::close() !!}