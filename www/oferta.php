<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Ofertas</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/custom.css" rel="stylesheet">
		<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
		<script src="js/jquery-1.12.3.js"></script>
		<script src="js/jquery.js"></script>
	</head>
	<body>
		<div class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<div>
						<a class="navbar-brand" href="index.html">David-o-trips</a>
					</div>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="active"><a href="busqueda.html">Hoteles</a></li>
						<li><a href="#register" data-toggle="modal">Registrarse</a></li>
						<li><a href="#log-in" data-toggle="modal">Iniciar Sesión</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Buscar<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li class="dropdown-header">Buscar lugar</li>
								<li><input type="search" name="lugar" placeholder="EJ. Manzanillo"></input></li>
								<li><button href="busqueda.html" type="button" class="btn btn-default">Buscar</button></li>
							</ul>
						</li>
					</ul>
					</div><!--/.nav-collapse -->
				</div>
			</div>
			<!--body-->
			<div class="container">
				<div class="page-header">
					<h1>Hotel de la costa</h1>
				</div>
				<div class="col-sm-8">
					<div class="thumbnail">
						<img src="img/manzanillo.jpg" alt="Habitacion de hotes">
						<div class="caption text-center">
							<a href="img/manzanillo.jpg" class="btn btn-primary" role="button">Ver Imagen completa</a>
						</div>
					</div>
					<p>
						Las habitaciones de este lugar son muy comodas para disfrutar en familia, para negocios o simplemente para un descanso placentero
					</p>
					<div class="col-sm-6">
						<h3>Incluyen</h3>
						<ul>
							<li>Wi-Fi</li>
							<li>Acceso a la alberca</li>
							<li>Servicio a la habitacion</li>
							<li>Desayuno</li>
						</ul>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Tipo de habitación</h3>
						</div>
						<div class="panel-body bg-grey text-center">
							<input name="tipoHabitacion" list="habitaciones" value="Suite">
							<datalist id="habitaciones">
							<option value="Suite"></option>
							<option value="Sencilla"></option>
							<option value="Doble"></option>
							<option value="Triple"></option>
							</datalist>
							</input>
						</div>
					</div>
					<div class="thumbnail bg-grey text-center">
						<h2>$150.00</h2>
						<p>Habitacion económica por noche</p>
						<a href="info.html" class="btn btn-success" role="button">COMPRAR</a>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Reservación</h3>
						</div>
						<div class="panel-body bg-grey" id="barraR">
							<label>Llegada</label><br>
                            <input type="date" name="entrada"></input><br>
                            <label>Salida</label><br>
                            <input type="date" name="salida"></input><br>
                            <label>No. de Personas</label><br>
                            <input name="personas" list="numeros">
                            <datalist id="numeros">
                            <option value="1"></option>
                            <option value="2"></option>
                            <option value="3"></option>
                            <option value="4"></option>
                            <option value="5"></option>
                            <option value="6"></option>
                            <option value="7"></option>
                            </datalist>
                            </input><br>
						</div>
					</div>
				</div>
			</div>
			<!-- Fixed footer -->
			<div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
				<div class="container">
					<div class="navbar-text pull-left">
						<p>©2015 Universidad de Colima</p>
					</div>
					<div class="navbar-text pull-right">
						<a href="https://www.facebook.com/Universidad-de-Colima-Oficial-158697750839178/"><i class="fa fa-facebook-square fa-2x"></i></a>
					</div>
				</div>
			</div>
			<!--End fixed-footer-->
			
			<!--Log in information-->
			<div class="modal fade" id="log-in" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<form class="form-horizontal" role="form">
							<div class="modal-header">
								<h4>Log In</h4>
							</div>
							<div class="modal-body">
								<div class="form-group">
									<label for="contact-email" class="col-sm-4 control-label">Correo Electronico</label>
									<div class="col-sm-6">
										<input type="email" class="form-control" id="contact-email" placeholder="example@example.com">
									</div>
								</div>
								<div class="form-group">
									<label for="contact-password" class="col-sm-4 control-label">Contraseña</label>
									<div class="col-sm-6">
										<input type="password" class="form-control" id="contact-password" placeholder="*********">
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<a class="btn btn-default" data-dismiss="modal">Cancelar</a>
								<button type="submit" class="btn btn-primary" href="academias.html">Entrar</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!--End Log in information-->
			<!--Register information-->
			<div class="modal fade" id="register" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<form class="form-horizontal" role="form">
							<div class="modal-header">
								<h4>Registro</h4>
							</div>
							<div class="modal-body">
								<div class="form-group">
									<label for="contact-email-new" class="col-sm-4 control-label">Correo Electronico</label>
									<div class="col-sm-6">
										<input type="email" class="form-control" id="contact-email-new" placeholder="example@example.com">
									</div>
								</div>
								<div class="form-group">
									<label for="contact-password-new" class="col-sm-4 control-label">Contraseña</label>
									<div class="col-sm-6">
										<input type="password" class="form-control" id="contact-password-new" placeholder="Contraseña">
									</div>
								</div>
								<div class="form-group">
									<label for="contact-password-repit" class="col-sm-4 control-label">Confirmar Contraseña</label>
									<div class="col-sm-6">
										<input type="password" class="form-control" id="contact-password-repit" placeholder="Contraseña">
									</div>
								</div>
								<div class="form-group">
									<label for="user-name" class="col-sm-4 control-label">Nombre de Usuario</label>
									<div class="col-sm-6">
										<input type="text" class="form-control" id="user-name" placeholder="Nombre o Nombres">
									</div>
								</div>
								<div class="form-group">
									<label for="user-apellidoP" class="col-sm-4 control-label">Apellido Paterno</label>
									<div class="col-sm-6">
										<input type="text" class="form-control" id="user-apellidoP" placeholder="Apellido Paterno">
									</div>
								</div>
								<div class="form-group">
									<label for="user-apellidoM" class="col-sm-4 control-label">Apellido Materno</label>
									<div class="col-sm-6">
										<input type="text" class="form-control" id="user-apellidoM" placeholder="Apellido Materno">
									</div>
								</div>
								<div class="form-group">
									<label for="date-birth" class="col-sm-4 control-label">Fecha de nacimiento</label>
									<input type="date"></input>
								</div>
							</div>
							<div class="modal-footer">
								<a class="btn btn-default" data-dismiss="modal">Cancelar</a>
								<button type="submit" class="btn btn-primary">Entrar</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!--End Register information-->
			
			<!--Bootstrap JavaScript-->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
			<script src="js/bootstrap.min.js"></script>
		</body>
	</html>