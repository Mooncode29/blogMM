@extends('layout_admin')
@section('content')
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h2>Editer un article</h2>
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
		{!! Form::open(['url' => 'update']) !!}
    		{{ Form::label('title', 'titre')}}
    		{{ Form::text('title', $post->title, array('class'=>'form-control'))}}
    		{{ Form::label('content', 'contenu')}}
    		{{ Form::textarea('content', $post->content, array('class'=>'form-control'))}}
    		{{ Form::submit('modifier', array('class'=>'btn btn-success btn-block','style'=>'margin-top:2em;')) }}
    		{{ Form::checkbox('brouillon','false') }}
    		{{ Form::label('brouillon', 'brouillon') }}
    		<input type="hidden" name="id" value="{{$post->id}}">

		{!! Form::close() !!}
		
	</div>
</div>
@endsection