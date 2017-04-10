@extends('layout')

@section('content')
<div class="a container">

	<h2 class ="t">Hello!</h2>
	

	<div class="jumbotron">
		<div class="row">
		@foreach($articles as $article)
			<div class="col-lg-6">
				<h2>{{$article->title}}</h2>
				<h5>Publié le {{$article->created_at}}</h5>			
				<p>{{$article->content}}</p>
			</div>
		@endforeach
		
			</div>
		</div>
	</div>
</div>




@endsection