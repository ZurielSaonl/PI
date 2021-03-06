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
        <!--Nuevo card-->
        <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
        <script src="js/pago.js"></script>
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
                    <h2 id="Jh1" >Información de Pago</h2>
                    <form class="form-horizontal" role="form" id="forma">
                        <div class="modal-header">
                            <h4>Registro</h4>
                            <span>* Campo requerido</span>
                        </div>
                        <div class="modal-body col-sm-6">
                            <div class="form-group">
                                <label for="user-name" class="col-sm-6 control-label">Nombre de Usuario *</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="user-name" placeholder="Nombre o Nombres">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="user-apellidoP" class="col-sm-6 control-label">Apellido Paterno *</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="user-apellidoP" placeholder="Apellido Paterno">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="user-apellidoM" class="col-sm-6 control-label">Apellido Materno *</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="user-apellidoM" placeholder="Apellido Materno">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dir-factura" class="col-sm-6 control-label">Dirección de Facturación *</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="dir-factura">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="estado" class="col-sm-6 control-label">Estado *</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="estado" placeholder="Colima">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="municipio" class="col-sm-6 control-label">Municipio *</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="municipio" placeholder="Colima">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="CP" class="col-sm-6 control-label">Codigo Postal *</label>
                                <div class="col-sm-6">
                                    <input type="number" class="form-control" id="CP" placeholder="28545">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="telefono" class="col-sm-6 control-label">No. de Telefono *</label>
                                <div class="col-sm-6">
                                    <input type="tel" class="form-control" id="telefono"></input>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="correo" class="col-sm-6 control-label">Correo Electrónico *</label>
                                <div class="col-sm-6">
                                    <input type="email" class="form-control" placeholder="example@example.com" id="correo"></input>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <!-- You can make it whatever width you want. I'm making it full width
                                on <= small devices and 4/12 page width on >= medium devices -->
                                <div class="col-xs-12 col-md-4">
                                    <!-- CREDIT CARD FORM STARTS HERE -->
                                    <div class="panel panel-default credit-card-box">
                                        <div class="panel-heading display-table" >
                                            <div class="row display-tr" >
                                                <h3 class="panel-title display-td" >Payment Details</h3>
                                                <div class="display-td" >
                                                    <img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <form role="form" id="payment-form">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <div class="form-group">
                                                            <label for="cardNumber">CARD NUMBER</label>
                                                            <div class="input-group">
                                                                <input
                                                                type="tel"
                                                                class="form-control"
                                                                name="cardNumber"
                                                                placeholder="Valid Card Number"
                                                                autocomplete="cc-number"
                                                                required autofocus
                                                                />
                                                                <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-7 col-md-7">
                                                        <div class="form-group">
                                                            <label for="cardExpiry"><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
                                                            <input
                                                            type="tel"
                                                            class="form-control"
                                                            name="cardExpiry"
                                                            placeholder="MM / YY"
                                                            autocomplete="cc-exp"
                                                            required
                                                            />
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-5 col-md-5 pull-right">
                                                        <div class="form-group">
                                                            <label for="cardCVC">CV CODE</label>
                                                            <input
                                                            type="tel"
                                                            class="form-control"
                                                            name="cardCVC"
                                                            placeholder="CVC"
                                                            autocomplete="cc-csc"
                                                            required
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <div class="form-group">
                                                            <label for="couponCode">COUPON CODE</label>
                                                            <input type="text" class="form-control" name="couponCode" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <button class="btn btn-success btn-lg btn-block" type="submit">Start Subscription</button>
                                                    </div>
                                                </div>
                                                <div class="row" style="display:none;">
                                                    <div class="col-xs-12">
                                                        <p class="payment-errors"></p>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- CREDIT CARD FORM ENDS HERE -->
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a class="btn btn-default" data-dismiss="modal">Cancelar</a>
                            <button type="submit" class="btn btn-primary">Pagar</button>
                        </div>
                    </form>
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