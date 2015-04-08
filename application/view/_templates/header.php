<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Filip Topolovec">
    <meta name="description" content="">
    <meta name="keywords" content="mediapitch,foto,natječaj">
    <title>Mediapitch Contests</title>

    <!-- Bootstrap -->

    <link href="<?php echo URL; ?>css/custom.css" rel="stylesheet" media="screen">
    <link href="<?php echo URL; ?>css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="<?php echo URL; ?>css/half-slider.css" rel="stylesheet">
    <link href="<?php echo URL; ?>css/jquery.vegas.css" rel="stylesheet">  
    <link rel="shortcut icon" href="<?php echo URL; ?>img/favicon.gif">

    <!--<link href="css/bootstrap.min.css" rel="stylesheet">-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>

      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>

      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->

  </head>
  <body>
  <!-- Navigacija -->
    <nav class="navbar navbar-fixed-top" role="navigation">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"><span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a class="navbar-brand" href="<?php echo URL; ?>">
            <img alt="Brand" src="<?php echo URL; ?>img/mptch_logo1.png">
          </a>
        </div>
 
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo URL; ?>Home">Home <span class="sr-only">(current)</span></a></li>
            <li class="dropdown">
              <a href="contests.html" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-expanded="false">Contests <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo URL; ?>Contests">View contests</a></li>
                <li class="divider"></li>
                <li data-toggle="tooltip" data-placement="bottom" title="Login required"><a href="#">My Entries</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Help <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Privacy & terms</a></li>
                <li><a href="#">About us</a></li>
              </ul>
            </li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Contact us</a></li>
			
					<li><a href="#" data-toggle="modal" data-target="#membersRegister">Register</a></li>
					<li><a href="<?php echo URL; ?>user/login">Login</a></li>

					<li><a href="<?php echo URL; ?>user/logout">Logout</a></li>
					<li><?php echo $username; ?></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <!-- Login modal -->
    <div class="modal fade" id="membersLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Members login</h4>
          </div>
          <div class="modal-body">
            <div class="input-group" style="margin-bottom:3%;">
              <span class="input-group-addon" id="sizing-addon2">Username</span>
              <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon2">
            </div>
            <div class="input-group">
              <span class="input-group-addon" id="sizing-addon2">Password</span>
              <input type="password" class="form-control" placeholder="Password" aria-describedby="sizing-addon2">
            </div>
            <hr>
            <a href="#" data-toggle="modal" data-target="#membersRegister">Register</a> if you don't have account yet!
            </div>
             <div class="modal-footer">
                <a href="<?php echo URL; ?>profile"><button type="button" class="btn btn-primary">Login</button></a>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
      </div>
    </div>
    <!-- Register modal -->
    <div class="modal fade" id="membersRegister" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Register for Mediapitch.net</h4>
          </div>
          <div class="modal-body">
            <div class="input-group" style="margin-bottom:3%;">
              <span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-user"></span></span>
              <input name="ime_reg" type="text" class="form-control" id="ime_reg" placeholder="Ime" aria-describedby="sizing-addon2">
            </div>
            <div class="input-group">
              <span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-user"></span></span>
              <input name="prezime_reg" type="text" class="form-control" id="prezime_reg" placeholder="Prezime" aria-describedby="sizing-addon2">
            </div>
            <div class="input-group">
              <span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-envelope"></span></span>
              <input name="email_reg" type="text" class="form-control" id="email_reg" placeholder="Email" aria-describedby="sizing-addon2">
            </div>
            <div class="input-group">
              <span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-phone-alt"></span></span>
              <input name="tel_reg" type="text" class="form-control" id="tel_reg" placeholder="Tel/mob" aria-describedby="sizing-addon2">
            </div>
            <div class="input-group">
              <span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-user"></span></span>
              <input name="korisnicko_reg" type="text" class="form-control" id="korisnicko_reg" placeholder="Korisničko ime" aria-describedby="sizing-addon2">
            </div>
            <div class="input-group">
              <span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-lock"></span></span>
              <input type="password" class="form-control" placeholder="Unesite lozinku" aria-describedby="sizing-addon2" name="lozinka_reg" id="lozinka1">
            </div>
            <div class="input-group">
              <span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-lock"></span></span>
              <input type="password" class="form-control" placeholder="Unesite lozinku drugi puta" aria-describedby="sizing-addon2" name="lozinka2_reg" id="lozinka2" onkeyup="checkPass(); return false;">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary">Register</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Navigacija zavrsena -->