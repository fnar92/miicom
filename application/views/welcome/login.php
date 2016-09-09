    <!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Miicom Internet &TI</title>
    
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        
        <!-- Main Style -->
        <link rel="stylesheet" type="text/css" href="assets/css/main.css">

        <!-- Responsive Style -->
        <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

        <!--Icon Font-->
        <link rel="stylesheet" media="screen" href="assets/fonts/font-awesome/font-awesome.min.css" />


        <!-- Extras -->
        <link rel="stylesheet" type="text/css" href="assets/extras/animate.css">


        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        
        <link rel="stylesheet" type="text/css" href="assets/miicom/css/style_mii.css">
        <script src="assets/miicom/js/modal.js"></script>
        <script src="assets/miicom/js/login.js"></script>
      </head>

    <body>
    <!-- Nav Menu Section -->
    <div class="logo-menu">
    <nav class="navbar navbar-default">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header col-md-3">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html"><i class="fa fa-fa fa-cubes"></i> Miicom</a>
        </div>

        <div class="collapse navbar-collapse" id="navbar">
        <ul class="nav navbar-nav pull-right">
            <li ><a href="<?= base_url()?>">Home</a>
            </li>
            <li class="active"><a href="sign-in">Entrar</a>
            </li>
            <li><a href="sign-up">Registrate</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    </div>
<!-- Nav Menu Section End -->

<!-- Hero Area Section -->

<section id="sign-in-area">

<div class="container">
    <div class="row">
<div class="col-md-12">
        <h1 class="title-big wow fadeIn"><i class="fa fa-sign-in"></i></h1>
        <h2 class="subtitle-big">Acceder</h2>
</div>


<div class="col-md-12 text-center">

    <form role="form" class="sign-in-form" id="form-login">
  <div class="form-group col-md-offset-4 col-md-4 col-md-offset-4 wow fadeInDown">
      <input type="email" class="form-control" id="email" name="email" placeholder="Tu email o usuario">
  </div>
  <div class="form-group col-md-offset-4 col-md-4 col-md-offset-4 wow fadeInDown" data-wow-delay=".7s">
    <input type="password" class="form-control" id="pass" name="pass" placeholder="Contraseña">

    <a  id="btn-login" class="sign-up-button btn btn-border btn-lg col-md-offset-3 col-md-6 col-md-offset-3 wow fadeInUp" data-wow-delay="1s" >Entrar</a>
  </div>
</form>
</div>
</div>
</div>
</div>
</section>

<!-- Hero Area Section End-->





    <section id="bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-3 col-xs-12">
          <h3>Productos</h3>
          <ul>
            <li><a href="#">Internet</a>
            </li>
            <li><a href="#">Enlaces p-p</a>
            </li>
            </li>
          </ul>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-12">
          <h3>Preguntas</h3>
          <ul>
          </ul>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-12">
          <h3>Acerca de</h3>
          <ul>
<!--            <li><a href="#">Career</a>
            </li>
            <li><a href="#">Partners</a>
            </li>
            <li><a href="#">Team</a>
            </li>
            <li><a href="#">Clients</a>
            </li>-->
            <li><a href="#">Contacto</a>
            </li>
          </ul>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-12">
          <h3>Siguenos</h3>
          <a class="social" href="#" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>
          <a class="social" href="#" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>
          <a class="social" href="#" target="_blank"><i class="fa fa-google-plus fa-2x"></i></a>
          <a class="social" href="#" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a>
        </div>
      </div>
    </div>
  </section>
        <!-- Bootstrap JS -->
        <script src="assets/js/bootstrap.js"></script>
        <!-- WOW JS plugin for animation -->
        <script src="assets/js/wow.js"></script>
        <!-- All JS plugin Triggers -->
        <script src="assets/js/main.js"></script>

<div id="wait" class="modal fade" role="dialog" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-body">
                    <div class="center_div"><img src="<?= base_url() ?>assets/miicom/images/loading.GIF" class=""></div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Modal -->
    <div class="modal fade ativa-scroll" id="modal" role="dialog">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content pagination-centered text-center">
                <div class="modal-header">
                <button type="button" class="close cros_close_modal" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Miicom</h4>
                </div>
                <div class="modal-body ajax_msj">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default btn_close_modal" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    </body>
    </html>