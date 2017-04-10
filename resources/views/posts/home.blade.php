@extends('layout_admin')
@section('content')
                               
    <div class="container-fluid">
        <div class="row">
            <div class=" contenu col-lg-12">
            	<div class="panel panel-default">
  <!-- Default panel contents -->
				  	<div class="panel-heading">
				  		<div class="bouton">
		            		<button class="btn btn-primary"> + nouvel article</button>
		            		<button class="btn btn-primary"> supprimer la selection</button>
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
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Lorem ipsum dolor sit amet</td>
									<td>Lorem ipsum dolor sit ame</td>
								</tr>
							</tbody>
						</table>
            		</div>
				  	
				</div>  	   
            </div>
        </div>
    </div>

@endsection
