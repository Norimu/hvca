@extends('layouts.app')

@section('content')
	<div class="col-lg-12">
		<div class="card-box">
			<h4 class="m-t-0 header-title"><b>Recent Candidates</b></h4>
			<p class="text-muted font-14 m-b-20">Your awesome text goes here.	</p>
			<div class="table-responsive">
				<table class="table table-hover m-0 table-actions-bar">
					<thead>
					<tr>
						<th>
							<div class="btn-group dropdown">
								<button type="button" class="btn btn-secondary btn-xs dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false"><i class="caret"></i></button>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="#">Dropdown link</a>
									<a class="dropdown-item" href="#">Dropdown link</a>
								</div>
							</div>
						</th>
						<th>Nombre</th>
						<th>Ciudad</th>
						<th>Timepo</th>
						<th>Sueldo</th>
						<th>Acción</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>
							<img src="assets/images/users/avatar-2.jpg" alt="contact-img" title="contact-img" class="rounded-circle thumb-sm" />
						</td>
						<td>
							<h5 class="m-b-0 m-t-0 font-600">Tomaslau</h5>
							<p class="m-b-0"><small>Web Designer</small></p>
						</td>
						<td>
							<i class="mdi mdi-map-marker text-primary"></i> New York
						</td>
						<td>
							<i class="mdi mdi-clock text-success"></i> Full Time
						</td>
						<td>
							<i class="mdi mdi-currency-usd text-warning"></i> 3265
						</td>
						<td>
							<a href="#" class="table-action-btn"><i class="mdi mdi-pencil"></i></a>
							<a href="#" class="table-action-btn"><i class="mdi mdi-close"></i></a>
						</td>
					</tr>
					<tr>
						<td>
							<img src="assets/images/users/avatar-3.jpg" alt="contact-img" title="contact-img" class="rounded-circle thumb-sm" />
						</td>
						<td>
							<h5 class="m-b-0 m-t-0 font-600">Erwin E. Brown</h5>
							<p class="m-b-0"><small>Programmer</small></p>
						</td>
						<td>
							<i class="mdi mdi-map-marker text-primary"></i> California
						</td>
						<td>
							<i class="mdi mdi-clock text-success"></i> Part Time
						</td>
						<td>
							<i class="mdi mdi-currency-usd text-warning"></i> 1365
						</td>
						<td>
							<a href="#" class="table-action-btn"><i class="mdi mdi-pencil"></i></a>
							<a href="#" class="table-action-btn"><i class="mdi mdi-close"></i></a>
						</td>
					</tr>					
					</tbody>
				</table>
			</div>
		</div>
	</div>
			<!-- end col -->
@endsection