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
        <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <script src="js/jquery-1.12.3.js"></script>
        <script src="js/jquery.js"></script>
    </head>
    <body>
        <?php
        $conn = new mysqli("localhost", "root", "","pi_db");
        if ($conn->connect_error)
        die("Connection failed: " . $conn->connect_error);
        ?>
        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <div class="Titulo">
                        <a href="index.html">David-o-trips</a>
                        <img src="img/titulo-pequeño-blanco.png" width=60 height=40>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <!--Jumbotron-->
            <div class="container">
                <div class="jumbotron text-center">
                    <!--<div class="alert alert-info" role="alert">Software's official relase date has been delayed due to technical</div>-->
                    <h1 id="Jh1" class="Titulo">David-o-trips</h1>
                    <div>
                        <!--Carousel-->
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="5000">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            
                            <!-- Wrapper for slides-->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img id="imagenC" src="img/manzanillo.jpg" alt="Manzanillo, Colima">
                                    <div class="carousel-caption">
                                        <h3>Manzanillo, Colima</h3>
                                    </div>
                                </div>
                                <div class="item">
                                    <img id="imagenC" src="img/vallarta.jpg" alt="Puerto Vallarta, Jalisco">
                                    <div class="carousel-caption">
                                        <h3>Puerto Vallarta, Jalisco</h3>
                                    </div>
                                </div>
                                <div class="item">
                                    <img id="imagenC" src="img/cabos.jpg" alt="Cabos San Lucas, Baja California Sur">
                                    <div class="carousel-caption">
                                        <h3>Cabos San Lucas, Baja California Sur</h3>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Controls-->
                            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                        <!--End Carousel-->
                    </div>
                    <div>
                        <input type="search" name="lugar" placeholder="EJ. Manzanillo"></input>
                        <a href="busqueda.html" class="btn btn-primary" role="button">Buscar</a>
                    </div>
                    <br>
                    <div>
                        <a href="#log-in" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-log-in" style="margin-right:3px"></span> Inicia Sesion</a>
                        <a href="#register" data-toggle="modal" class="btn btn-success"><span class="glyphicon glyphicon-user" style="margin-right:3px"></span> Registrate</a>
                    </div>
                </div>
            </div>
        </div>
        <!--End Jumbotron-->
        
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