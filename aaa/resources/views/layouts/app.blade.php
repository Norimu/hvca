<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Admin - Huancavelica</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
		<meta content="Coderthemes" name="author" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />

		<!-- App favicon -->
		<link rel="shortcut icon" href="assets/images/favicon.ico">

		<!-- C3 charts css -->
		<link href="../plugins/c3/c3.min.css" rel="stylesheet" type="text/css"  />

		<!-- App css -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.css" rel="stylesheet" type="text/css" />

		<script src="assets/js/modernizr.min.js"></script>

	</head>
	<body>
			<!-- Begin page -->
		<div id="wrapper">
				<!-- Top Bar Start -->
				<div class="topbar">
						<!-- LOGO -->
						<div class="topbar-left">
						 <a class="logo" href="{{ url('/home') }}">
                          
														<span>
																<img src="assets/images/logo.png" alt="" height="25">
														</span>
										<i>
												<img src="assets/images/logo_sm.png" alt="" height="28">
										</i>
								</a>
						</div>
						<nav class="navbar-custom">

								<ul class="list-inline float-right mb-0">
										<li class="list-inline-item dropdown notification-list">
												<a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
														aria-haspopup="false" aria-expanded="false">
														<i class="dripicons-bell noti-icon"></i>
														<span class="badge badge-pink noti-icon-badge">4</span>
												</a>
												<div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg" aria-labelledby="Preview">
														<!-- item-->
														<div class="dropdown-item noti-title">
																<h5><span class="badge badge-danger float-right">5</span>Notification</h5>
														</div>

														<!-- item-->
														<a href="javascript:void(0);" class="dropdown-item notify-item">
																<div class="notify-icon bg-success"><i class="icon-bubble"></i></div>
																<p class="notify-details">Robert S. Taylor commented on Admin<small class="text-muted">1 min ago</small></p>
														</a>
											

														<!-- All-->
														<a href="javascript:void(0);" class="dropdown-item notify-item notify-all">
																View All
														</a>

												</div>
										</li>

										<li class="list-inline-item dropdown notification-list">
												<a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
														aria-haspopup="false" aria-expanded="false">
											
														<span class="badge badge-pink noti-icon-badge">
														

														<a href="#" class="dropdown-toggle badge" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} {{ Auth::user()->lastname }} <span class="caret"></span>
                            		</a>
														
														
														</span>
												</a>

										</li>

										<li class="list-inline-item dropdown notification-list">
												<a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
														aria-haspopup="false" aria-expanded="false">
														<img src="assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle">
												</a>
												<div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
														<!-- item-->
														
														<!-- item-->
														<a href="javascript:void(0);" class="dropdown-item notify-item">
																<i class="zmdi zmdi-account-circle"></i> <span>Profile</span>
														</a>

														<!-- item-->
														<a href="javascript:void(0);" class="dropdown-item notify-item">
																<i class="zmdi zmdi-settings"></i> <span>Settings</span>
														</a>

														<!-- item-->
														<a href="javascript:void(0);" class="dropdown-item notify-item">
																<i class="zmdi zmdi-lock-open"></i> <span>Lock Screen</span>
														</a>

														<!-- Salir-->
														<a class="dropdown-item notify-item" href="{{ route('logout') }}"
																onclick="event.preventDefault();
																					document.getElementById('logout-form').submit();">
															<i class="zmdi zmdi-power"></i> <span>Salir</span>
														</a>

														<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
																{{ csrf_field() }}
														</form>									
												</div>
										</li>

								</ul>

								<ul class="list-inline menu-left mb-0">
										<li class="float-left">
												<button class="button-menu-mobile open-left waves-light waves-effect">
														<i class="dripicons-menu"></i>
												</button>
										</li>
										<li class="hide-phone app-search">
												<form role="search" class="">
														<input type="text" placeholder="Buscar..." class="form-control">
														<a href=""><i class="fa fa-search"></i></a>
												</form>
										</li>
								</ul>

						</nav>
				</div>
				<!-- Top Bar End -->
				<!-- ========== Left Sidebar Start ========== -->
				<div class="left side-menu">
						<div class="slimscroll-menu" id="remove-scroll">
								<!--- Sidemenu -->
							<div id="sidebar-menu">
									<!-- Left Menu Start -->
								<ul class="metismenu" id="side-menu">
										<li class="menu-title">Navigación</li>
										<li>
											<a href="javascript: void(0);">
												<i class="fi-air-play"></i><span class="badge badge-success pull-right">2</span> <span> Escritorio </span>
											</a>
										</li>
										<li>
											<a href="javascript: void(0);"><i class="fi-paper"></i> <span> Documentos </span> <span class="menu-arrow"></span></a>
											<ul class="nav-second-level" aria-expanded="false">
													<li><a href="email-inbox.html">Inbox</a></li>
													<li><a href="email-read.html">Read Email</a></li>
													<li><a href="email-compose.html">Compose Email</a></li>
											</ul>
										</li>							
								</ul>
							</div>
								<!-- Sidebar -->
								<div class="clearfix"></div>

						</div>
						<!-- Sidebar -left -->
				</div>
				<!-- Left Sidebar End -->
				<!-- ============================================================== -->
				<!-- Start right Content here -->
				<!-- ============================================================== -->
				<div class="content-page">
						<!-- Start content -->
						<div class="content">
								<div class="container-fluid">

										<div class="row">
												<div class="col-12">
														<div class="page-title-box">
																<h4 class="page-title float-left">Dashboard</h4>

																<ol class="breadcrumb float-right">
																		<li class="breadcrumb-item"><a href="#">Adminox</a></li>
																		<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
																		<li class="breadcrumb-item active">Dashboard 1</li>
																</ol>

																<div class="clearfix"></div>
														</div>
												</div>
										</div>
										<!-- end row -->
										<div class="row">
										
										@yield('content')
											
										</div>
										<!--- end row -->

								</div> <!-- container -->

						</div> <!-- content -->

						<footer class="footer text-right">
								2018 © FreeCloud. - Norimu.com
						</footer>

				</div>
				<!-- ============================================================== -->
				<!-- End Right content here -->
				<!-- ============================================================== -->
		</div>
		<!-- END wrapper -->
		<!-- jQuery  -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/tether.min.js"></script><!-- Tether for Bootstrap -->
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/metisMenu.min.js"></script>
		<script src="assets/js/waves.js"></script>
		<script src="assets/js/jquery.slimscroll.js"></script>
		<!-- Counter js  -->
		<script src="../plugins/waypoints/jquery.waypoints.min.js"></script>
		<script src="../plugins/counterup/jquery.counterup.min.js"></script>
		<!--C3 Chart-->
		<script type="text/javascript" src="../plugins/d3/d3.min.js"></script>
		<script type="text/javascript" src="../plugins/c3/c3.min.js"></script>
		<!--Echart Chart-->
		<script src="../plugins/echart/echarts-all.js"></script>
		<!-- Dashboard init -->
		<script src="assets/pages/jquery.dashboard.js"></script>
		<!-- App js -->
		<script src="assets/js/jquery.core.js"></script>
		<script src="assets/js/jquery.app.js"></script>
	</body>
</html>