<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>
  <title></title>
  <link rel="shortcut icon" href="<?php echo asset_url(); ?>images/logo.png" type="image/png">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
    crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
    crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
    crossorigin="anonymous"></script>

  <link href="https://fonts.googleapis.com/css?family=Archivo+Black|Libre+Baskerville" rel="stylesheet">
  
  <link rel = "stylesheet" type = "text/css"  href = "<?php echo asset_url(); ?>css/estiloLogin.css"> 
  <link rel = "stylesheet" type = "text/css"  href = "<?php echo asset_url(); ?>css/estilos.css"> 
  <link rel = "stylesheet" type = "text/css"  href = "<?php echo asset_url(); ?>css/estilo.css"> 

</head>


<body>

  <header>


    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a class="navbar-brand" href="#">TicoRides.com
            <img class="hidden-xs" src="<?php echo asset_url(); ?>images/logo.png">
          </a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">

            <li class="active">
              <a id="page">
                <span class="glyphicon glyphicon-log-in"></span> Login</a>
            </li>
            <li>
              <a id="home" href=" <?php echo site_url('welcome')?>" ><span class="  glyphicon glyphicon-home"></span> Home</a>
            </li>

          </ul>

        </div>
      </div>
    </nav>

  </header>


  <div class="container-fluid wrap">
    <div class="row">

      <div class="col-xs-1  col-sm-2 col-md-2 vertical">
        <h3 class="hidden-xs">HEY!</h3>
        <p class="hidden-xs">Find your ride </p>
      </div>

      <div class=" col-xs-offset-2  col-sm-offset-6 col-md-offset-8 titulo">
        <p>The best way to get around!</p>
      </div>

      <div class="search container-fluid ">

        <div class=" col-md-6 col-md-offset-3">
          <div class="panel panel-login">
            <div class="panel-body">
              <div class="row">
			   
			  <div class="col-lg-12">
			 
                  <form id="login-form"  action= "<?php echo site_url('user/login_validation');?>"  method="post" role="form" style="display: block;">
                    <h2>LOGIN</h2> 
                    <?php  
                          echo '<label class="text-danger">'.$this->session->flashdata("error").'</label>';  
                     ?>
                    <div class="form-group">
                      <input type="text" name="usernameLogin" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
					  <span class="text-danger"><?php echo form_error('usernameLogin'); ?>
					</div>
                    <div class="form-group">
                      <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
					  <span class="text-danger"><?php echo form_error('password'); ?>
					</div>
        
                    <div class="col-xs-6 form-group pull-right">
                          <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                    </div>

                   

                    <div class="group x col-xs-offset-0 col-xs-12 col-lg-offset-3 col-lg-6">
                   
                      <h1 class="brand"> TicoRides.com </h1>
                    </div>

				  </form>
				
				  <form id="register-form" class="" action="<?php echo site_url('usuario/salvar'); ?>" method="post" role="form" style="display: none;">  
				  <h2>REGISTER</h2>

                    <div class="form-group">
                      <input type="text" name="first_name" id="name" tabindex="1" class="form-control" placeholder="Firstname" value="">
					  <input type="text" name="last_name" id="name" tabindex="1" class="form-control" placeholder="Lastname" value="">
					</div>
                    <div class="form-group">
                      <input type="text" name="phone" id="phone" tabindex="1" class="form-control" placeholder="Phone" value="">
                    </div>

                    <div class="form-group">
					 <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
				     <span class="text-danger"><?php echo form_error('username'); ?>
					</div>

                    <div class="form-group">
                      <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
					  <span class="text-danger"><?php echo form_error('password'); ?>
					</div>
                    <div class="form-group">
                      <input type="password" name="confirmpw" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
					</div>
					
					<span class="text-danger"><?php echo form_error('confirmpw'); ?>
				   
					<div class="form-group">
                      <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
               			<input type="submit" name="register-submit" 
								id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register ">
					
						</div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="panel-heading">
              <div class="row">
                <div class="col-xs-6 tabs">
                  <a href="#" class="active" id="login-form-link">
                    <div class="login">LOGIN</div>
                  </a>
                </div>
                <div class="col-xs-6 tabs">
                  <a href="#" id="register-form-link">
                    <div class="register">Non a user? REGISTER!</div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>
  <footer>
    <div class="container">
      <div class="col-md-10 col-md-offset-1 text-center">
        Catalina
      </div>
    </div>
  </footer>



  <script src="<?php echo asset_url(); ?>js/function.js " type="text/javascript"> </script> 
</body>

</html>