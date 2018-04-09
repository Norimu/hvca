@extends('layouts.app')     

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					Ver etiquetas
					<p><strong>Nombre</strong> {{$tag->nombre}}</p>
                    <p><strong>Slug</strong> {{$tag->slug}}</p>
				</div>
				<div class="panel-body">
					
				</div>
			</div>
		</div>	
	</div>
</div>

@endsection