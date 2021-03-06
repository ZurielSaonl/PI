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
                    <div>
                        <!--<img src="img/udec.png" height="51px" alt="UDC"/>-->
                        <a class="navbar-brand" href="index.html">David-o-trips</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="container">
                <div class="jumbotron text-center">
                    <!--<div class="alert alert-info" role="alert">Software's official relase date has been delayed due to technical</div>-->
                    <h2 id="Jh1" >Registrate y aprovecha las ventajas de<br><span style="font-family: 'Slabo 27px', serif, serif;">David-o-trips</span></h2>
                    <div class="row">
                        <div class="col-sm-8">
                            <ul id="listaJB">
                                <li>Mayor agilidad en el pago</li>
                                <li>Recibe promociones a tu correo electronico</li>
                                <li>Recibe ofertas de tus destinos frecuentes</li>
                                <li>Y MUCHO MÁS!!!</li>
                            </ul>
                        </div>
                        <div class="col-sm-4" id="img">
                            <img src="img/registerJB.png">
                        </div>
                    </div>
                    <div style="display: inline-block;">
                        <a href="#log-in" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-log-in" style="margin-right:3px"></span> Inicia Sesion</a>
                        <a href="#register" data-toggle="modal" class="btn btn-success"><span class="glyphicon glyphicon-user" style="margin-right:3px"></span> Registrate</a>
                        <a href="pago.html" class="btn btn-default" role="button">Continuar sin registrarme</a>
                    </div>
                </div>
            </div>
        </div>
        <!--End Jumbotron-->
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