<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>


    <title>TicoRides-Rides</title>
    <link rel="shortcut icon" href="images/logo.png" type="image/png">

    <link href="https://fonts.googleapis.com/css?family=Archivo+Black|Libre+Baskerville" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playball" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oleo+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <meta charset="utf-8">


    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="<?php echo asset_url(); ?>font-awesome/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?php echo asset_url(); ?>css/estilo.css">
    <link rel="stylesheet" href="<?php echo asset_url(); ?>css/estilos.css">
    <link rel="stylesheet" href="<?php echo asset_url(); ?>css/modals.css">
    <link rel="stylesheet" href="<?php echo asset_url(); ?>css/view.css">
    <link rel="stylesheet" href="<?php echo asset_url(); ?>css/rides.css">

</head>

<body>

 
<header>
<?php 
$user_data= ($this->session->userdata()['user']);

var_dump($ride);
if($profile != null){
$photo = $profile->photo;

}
else{
    $photo = "default-user-image.png";
}
?>
  


        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a class="navbar-brand" href="welcome.html">TicoRides.com <img class="" src="<?php echo asset_url(); ?>images/logo.png" ></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="main.html"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                        <li><a id="navUser"><span class="glyphicon glyphicon-user"></span> <?php echo $user_data->username ?> </a></li>
                        <li><a id="logOut"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
                    </ul>


                </div>
            </div>
        </nav>

    </header>


    <div class="container-fluid wrap">
        <div class="row">


            <div class="col-xs-1  col-sm-2 col-md-2 vertical">
                <div class="hidden-xs col-sm-offset-1 col-sm-1  col-md-1 col-lg-offset-6 col-lg-3 profile">
                    <div class="user">
                        <label>Welcome</label>
                        <a class="username" id="btnProfile">  <?php echo $user_data->username ?></a>
                        <img class="hidden-md  hidden-sm img-circle" src="<?php echo upload_url().$photo ?>">
                    </div>
                </div>
            </div>

        

                    <div class=" col-xs-offset-0 col-xs-12 col-sm-offset-3 col-sm-6  col-md-offset-2 col-md-6  col-lg-offset-4 col-lg-5">

                        <div class="well text-center">

                            <h1> Editing a Ride </h1>
                        </div>

                    </div>


                    <div class="col-xs-offset-1 col-xs-10  col-md-offset-4 col-md-5  col-lg-offset-4  col-lg-5" id="line"> </div>

   </div>
                       </div>

                   
                    <div class="title container-fluid ">
                        <div class="col-xs-offset-2 col-sm-offset-3">
                            <h1>Rides </h1>
                        </div>
  </div>

                        <div class="myrides container-fluid">
                     <div class="col-xs-offset-2 col-sm-offset-3">

                                    <div class=" col-md-6  col-md-offset-3  col-lg-offset-0  col-lg-4">

                                        <div class="form-group">
                                            <div class="input-group">

                                                <label><i class="material-icons">person_pin</i> 
  Ride name</label>

                                                <input id="ride" type="text" class="form-control" aria-describedby="basic-addon1">
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <div class="input-group">

                                                <label> <i class="material-icons">slow_motion_video</i>
  Start from</label>

                                                <input id="start" type="text" class="form-control" aria-describedby="basic-addon1">
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">

                                                <label> <i class="material-icons">slow_motion_video</i>
  End</label>

                                                <input id="end" type="text" class="form-control" aria-describedby="basic-addon1">
                                            </div>

                                        </div>



                                        <div class="form-group">
                                            <div class="input-group">

                                                <label>  <span class="glyphicon glyphicon-pencil"></span> 
Description </label>

                                                <textarea id="description" class="form-control" placeholder="Say something about yourself"></textarea>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="">


                                    <div class="col-xs-offset-2 col-sm-offset-3 col-md-6  col-md-offset-3  col-lg-offset-2 col-lg-4">

                                        <span>
  When: </span>

                                        <div class="form-group">
                                            <div class="input-group">

                                                <label><i class="material-icons">person_pin</i> 
  Departure</label>

                                                <input id="departure" type="text" class="form-control" aria-describedby="basic-addon1">
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <div class="input-group">

                                                <label> <i class="material-icons">slow_motion_video</i>
  Estimated arraival</label>

                                                <input id="arraival" type="text" class="form-control" aria-describedby="basic-addon1">
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <div class="input-group">


                                                <label> <i class="material-icons">slow_motion_video</i>
Select days</label>

                                                <div class="boxes">
                                                    <input class="box" type="checkbox" id="box-1">
                                                    <label for="box-1">Monday</label>

                                                    <input class="box" type="checkbox" id="box-2">
                                                    <label for="box-2">Tuesday </label>

                                                    <input class="box" type="checkbox" id="box-3">
                                                    <label for="box-3">Wednesday</label>

                                                    <input type="checkbox" id="box-4">
                                                    <label for="box-4">Thursday</label>

                                                    <input type="checkbox" id="box-5">
                                                    <label for="box-5">Friday </label>

                                                    <input type="checkbox" id="box-6">
                                                    <label for="box-6">Saturday</label>

                                                    <input type="checkbox" id="box-7">
                                                    <label for="box-7">Sunday</label>
                                                </div>

                                            </div>

                                        </div>

                                    </div>



                                    <div class="row">

                                        <div class="col-xs-offset-1 col-xs-10  col-md-offset-4 col-md-5  col-lg-offset-0  col-lg-12" id="line"> </div>

                                        <div class="  col-xs-offset-1  col-xs-1   col-sm-offset-3  col-sm-1 col-lg-offset-4  col-lg-2  ">
                                            <button type="button" class="btn" id="btnSave">
    <span class="glyphicon glyphicon-ok-sign"></span> Save
  </button>
                                        </div>
                                        <div class="col-xs-offset-4 col-xs-1   col-sm-offset-3  col-sm-1 col-lg-offset-2  col-lg-2">
                                            <button type="button" class="btn " id="btnCancelEdit">
    <span class="glyphicon glyphicon-remove-sign"></span>Cancel
  </button>
                                        </div>

                                    </div>


                                </div>
                                <!-- ws -->


                            </div>
                            <!-- conteiner -->
  

                    <!-- <script src="js/script2.js " type="text/javascript"> </script>
 <script src="js/script3.js " type="text/javascript"> </script>
 -->
                    <script src="js/functions.js " type="text/javascript">


                    </script>
                    <script src="js/editar.js " type="text/javascript">


                    </script>

</body>

</html>
