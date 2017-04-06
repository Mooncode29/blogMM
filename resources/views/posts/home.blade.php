@extends('layout_admin');
@section('content')
                               
    <div class="container-fluid">
        <div class="row">
            <div class=" contenu col-lg-12">
            	<div class="panel panel-default">
  <!-- Default panel contents -->
				  	<div class="panel-heading">
				  		<div class="bouton">
		            		<form action="/master/create" method="get"><button class="btn btn-primary"> + nouvel article</button></form>
		                </div>
				  	</div>

<!-- 				  	
				   Table -->

				 

					<div class="responsive table">
	            		<table class="table table-striped"> 
		            		<thead>
								<tr>
									<th>Titre</th>
									<th>Publié le</th>
							
							</thead>
							@foreach($posts as $post)
							<tbody>
								<tr>
									<td>{{$post->title}}</td>
									<td>{{$post->created_at}}</td>
									<td><form action="master/show/{{$post->id}}" method="get"><button class="btn btn-primary">voir</button></form></td><td><form action="master/edit/{{$post->id}}" method="get"><button class="btn btn-success">Editer</button></form></td>
									<td><form action="master/delete/{{$post->id}}" method="post">
									{{csrf_field()}}
									{{method_field('DELETE')}}
									<button class="btn btn-danger">Supprimer</button>
									</form>
									</td>
								</tr>
							</tbody>
							@endforeach
						</table>
            		</div>
				  	
				</div>  	   
            </div>
        </div>
    </div>

@endsection
