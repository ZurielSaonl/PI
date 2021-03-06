<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>David-o-trips</title>
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
                                <li><button href="busqueda.html" type="button" class="btn-success">Buscar</button></li>
                            </ul>
                        </li>
                    </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
            <div class="container">
                <div>
                    <div class="col-sm-3">
                        <div class="panel panel-default" id="barraL">
                            <div class="panel-heading">
                                <h2 class="panel-title">Datos de reservación</h2>
                            </div>
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
                            <label>Clasificación</label><br>
                            <label for="filter5Stars">
                                <input id="filter5Stars" name="stars" data-filter-name="stars" type="checkbox">
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star">5</span>
                            </label><br>
                            <label for="filter4Stars">
                                <input id="filter4Stars" name="stars" data-filter-name="stars" type="checkbox">
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star-empty">4</span>
                            </label><br>
                            <label for="filter3Stars">
                                <input id="filter3Stars" name="stars" data-filter-name="stars" type="checkbox">
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                                <span class="glyphicon glyphicon-star-empty">3</span>
                            </label><br>
                            <label for="filter2Stars">
                                <input id="filter2Stars" name="stars" data-filter-name="stars" type="checkbox">
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                                <span class="glyphicon glyphicon-star-empty">2</span>
                            </label><br>
                            <label for="filter1Stars">
                                <input id="filter1Stars" name="stars" data-filter-name="stars" type="checkbox">
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                                <span class="glyphicon glyphicon-star-empty">1</span>
                            </label><br>
                            <!--<label>Rango de Precios: <span id="valorPrecio"></span></label><br>
                            <input type="range" id="precio" name="precio" min="100" max="10000" step="10" value="275">-->
                            
                            <!--Aquí está el rango-->
                            <p>
                                <label for="amount">Rango de precios:</label>
                                <input type="text" id="amount" name="range" readonly="" />
                            </p>
                            <div id="slider-range"></div><br>
                            <input type="button" value="Buscar" id="buscar" class="btn-success" />
                            <div>
                                <a href="index.html">Inicio</a>
                                <samp>|</samp>
                                <a href="#">FAQ</a>
                                <samp>|</samp>
                                <a href="#">Developer</a>
                            </div>
                        </div>
                    </div>
                    <div class="container col-md-8" id="opciones">
                        <div class="opcion row">
                            <a class="col-sm-2 thumbnail home-thumb">
                                <img src="img/manzanillo.jpg">
                            </a>
                            <div class="col-md-8">
                                <h4 class="header">Hotel de la costa, Manzanillo</h4>
                                <p>Aprovecha las ofertas para viajar a manzanillo con paquetes todo incluido en los diferentes hoteles que te ofrecemos</p>
                            </div>
                            <div class="col-sm-2">
                                <h4>$150.00</h4>
                                <a href="oferta.html" class="btn btn-primary">Ver Oferta...</a>
                            </div>
                        </div>
                        <div class="opcion row">
                            <a class="col-sm-2 thumbnail home-thumb">
                                <img src="img/manzanillo.jpg">
                            </a>
                            <div class="col-md-8">
                                <h4 class="header">Hotel de la costa, Manzanillo</h4>
                                <p>Aprovecha las ofertas para viajar a manzanillo con paquetes todo incluido en los diferentes hoteles que te ofrecemos</p>
                            </div>
                            <div class="col-sm-2">
                                <h4>$150.00</h4>
                                <a href="oferta.html" class="btn btn-primary">Ver Oferta...</a>
                            </div>
                        </div>
                        <div class="opcion row">
                            <a class="col-sm-2 thumbnail home-thumb">
                                <img src="img/manzanillo.jpg">
                            </a>
                            <div class="col-md-8">
                                <h4 class="header">Hotel de la costa, Manzanillo</h4>
                                <p>Aprovecha las ofertas para viajar a manzanillo con paquetes todo incluido en los diferentes hoteles que te ofrecemos</p>
                            </div>
                            <div class="col-sm-2">
                                <h4>$150.00</h4>
                                <a href="oferta.html" class="btn btn-primary">Ver Oferta...</a>
                            </div>
                        </div>
                        <div class="opcion row">
                            <a class="col-sm-2 thumbnail home-thumb">
                                <img src="img/manzanillo.jpg">
                            </a>
                            <div class="col-md-8">
                                <h4 class="header">Hotel de la costa, Manzanillo</h4>
                                <p>Aprovecha las ofertas para viajar a manzanillo con paquetes todo incluido en los diferentes hoteles que te ofrecemos</p>
                            </div>
                            <div class="col-sm-2">
                                <h4>$150.00</h4>
                                <a href="oferta.html" class="btn btn-primary">Ver Oferta...</a>
                            </div>
                        </div>
                        <div class="opcion row">
                            <a class="col-sm-2 thumbnail home-thumb">
                                <img src="img/manzanillo.jpg">
                            </a>
                            <div class="col-md-8">
                                <h4 class="header">Hotel de la costa, Manzanillo</h4>
                                <p>Aprovecha las ofertas para viajar a manzanillo con paquetes todo incluido en los diferentes hoteles que te ofrecemos</p>
                            </div>
                            <div class="col-sm-2">
                                <h4>$150.00</h4>
                                <a href="oferta.html" class="btn btn-primary">Ver Oferta...</a>
                            </div>
                        </div>
                        <div class="opcion row">
                            <a class="col-sm-2 thumbnail home-thumb">
                                <img src="img/manzanillo.jpg">
                            </a>
                            <div class="col-md-8">
                                <h4 class="header">Hotel de la costa, Manzanillo</h4>
                                <p>Aprovecha las ofertas para viajar a manzanillo con paquetes todo incluido en los diferentes hoteles que te ofrecemos</p>
                            </div>
                            <div class="col-sm-2">
                                <h4>$150.00</h4>
                                <a href="oferta.html" class="btn btn-primary">Ver Oferta...</a>
                            </div>
                        </div>
                        <div class="opcion row">
                            <a class="col-sm-2 thumbnail home-thumb">
                                <img src="img/manzanillo.jpg">
                            </a>
                            <div class="col-md-8">
                                <h4 class="header">Hotel de la costa, Manzanillo</h4>
                                <p>Aprovecha las ofertas para viajar a manzanillo con paquetes todo incluido en los diferentes hoteles que te ofrecemos</p>
                            </div>
                            <div class="col-sm-2">
                                <h4>$150.00</h4>
                                <a href="oferta.html" class="btn btn-primary">Ver Oferta...</a>
                            </div>
                        </div>
                        <div class="opcion row">
                            <a class="col-sm-2 thumbnail home-thumb">
                                <img src="img/manzanillo.jpg">
                            </a>
                            <div class="col-md-8">
                                <h4 class="header">Hotel de la costa, Manzanillo</h4>
                                <p>Aprovecha las ofertas para viajar a manzanillo con paquetes todo incluido en los diferentes hoteles que te ofrecemos</p>
                            </div>
                            <div class="col-sm-2">
                                <h4>$150.00</h4>
                                <a href="oferta.html" class="btn btn-primary">Ver Oferta...</a>
                            </div>
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
            <link rel="stylesheet" href="css/jquery-ui.css"></link>
            <script src="js/jquery-1.9.1.js"></script>
            <script src="js/jquery-ui.js"></script>
            <script src="js/range.js"></script>
        </body>
    </html>