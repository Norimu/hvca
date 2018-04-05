<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Huancavelica</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>
    </head>
    <body class="bg-accpunt-pages">
     <!-- HOME -->
      <section>
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="wrapper-page">
								<div class="account-pages">
									<div class="account-box">
										<div class="account-logo-box">
											<h2 class="text-uppercase text-center">
												<a href="index.html" class="text-success">
													<span><img src="assets/images/logo_dark.png" alt="" height="30"></span>
												</a>
											</h2>
											<h5 class="text-uppercase font-bold m-b-5 m-t-50">Inicia Sesión</h5>												
										</div>
										<div class="account-content">
										<!-- Forumalrio -->											
											<form class="form-horizontal" method="POST" action="{{ route('login') }}">
                      						  {{ csrf_field() }}
												<div class="form-group m-b-20 row{{ $errors->has('email') ? ' has-error' : '' }}">												
													<div class="col-12">
														<label for="email">Correo Electrónico</label>
														<input class="form-control" type="email" id="email" required="" name="email" placeholder="usuario@correo.com" value="{{ old('email') }}" required autofocus>
												
														 @if ($errors->has('email'))
															<span class="help-block">
																<strong>{{ $errors->first('email') }}</strong>
															</span>
                              							@endif
													</div>
												</div>

												<div class="form-group row m-b-20{{ $errors->has('password') ? ' has-error' : '' }}">										
													<div class="col-12">
														<a href="{{ route('password.request') }}" class="text-muted pull-right"><small>Olvidaste tu contraseña?</small></a>


														<label for="password">Contraseña</label>														
														<input class="form-control" type="password" required="" id="password" placeholder="Escriba su contraseña" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
													</div>
												</div>



												<div class="form-group row m-b-20">
														<div class="col-12">

																<div class="checkbox checkbox-success">
																		<input id="remember" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
																		<label for="remember">																
																				Recuerdame
																		</label>
																</div>

														</div>
												</div>

												<div class="form-group row text-center m-t-10">
														<div class="col-12">
																<button class="btn btn-md btn-block btn-primary waves-effect waves-light" type="submit">Ingresa</button>
														</div>
												</div>

											</form>
											</div>

											<div class="row m-t-50">
												<div class="col-sm-12 text-center">
													<p class="text-muted">¿No tiene una cuenta? <a href="{{ route('register') }}" class="text-dark m-l-5"><b>Regístrate</b></a></p>
												</div>
											</div>

										</div>
									</div>
								</div>
								<!-- end card-box-->
							</div>
										<!-- end wrapper -->
						</div>
					</div>
				</div>
			</section>
          <!-- END HOME -->
		<script>
				var resizefunc = [];
		</script>
		<!-- jQuery  -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/tether.min.js"></script><!-- Tether for Bootstrap -->
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/metisMenu.min.js"></script>
		<script src="assets/js/waves.js"></script>
		<script src="assets/js/jquery.slimscroll.js"></script>
		<!-- App js -->
		<script src="assets/js/jquery.core.js"></script>
		<script src="assets/js/jquery.app.js"></script>

	</body>
</html>