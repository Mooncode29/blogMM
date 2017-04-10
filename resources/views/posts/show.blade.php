@extends('layout_admin')
@section('content')
<div class="card">

	<img class="card-img-top" src="{{$post->img_path or 'Default'}}" alt="Card image cap">
  	<div class="card-block">
	  	<h2 class="card-title">{{$post->title}}</h4>
	  	<h5 class="card-subtitle mb-2 text-muted">publié le {{$post->created_at}}</h6>
	  	<p class="card-text">{{$post->content}}</p>
  	</div>
  	<a class="btn btn-link" href="/home"><span class="glyphicon glyphicon-chevron-left"></span>Retour aux articles </a>
</div>


@endsection