@extends('layout_admin')
@section('content')
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h2>Créer un nouvel article</h2>
		<hr>
		@if (count($errors) > 0)
    	<div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
    	</div>
		@endif
		{!! Form::open(['url' => 'master/store']) !!}
    		{{ Form::label('title', 'titre')}}
    		{{ Form::text('title', null, array('class'=>'form-control'))}}
    		{{ Form::label('content', 'contenu')}}
    		{{ Form::textarea('content', null, array('class'=>'form-control'))}}
    		{{ Form::submit('Publier', array('class'=>'btn btn-success btn-block','style'=>'margin-top:2em;')) }}
    		{{ Form::checkbox('Brouillon') }}
    		{{ Form::label('brouillon', 'sauvegarder dans le brouillon', array('style'=>'padding-top:3em;')) }}

    		
    		

		{!! Form::close() !!}
		
	</div>
</div>
@endsection

