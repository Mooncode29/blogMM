@extends('layout_admin')
@section('content')
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h2>Créer un nouvel article</h2>
		<hr>
		{!! Form::open(['url' => 'master/create']) !!}
    		{{ Form::label('title', 'titre')}}
    		{{ Form::text('title', null, array('class'=>'form-control'))}}
    		{{ Form::label('content', 'contenu')}}
    		{{ Form::textarea('content', null, array('class'=>'form-control'))}}
    		{{ Form::submit('Enregistrer', array('class'=>'btn btn-success btn-block','style'=>'margin-top:2em;')) }}
    		

		{!! Form::close() !!}
		
	</div>
</div>
@endsection

