<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<html lang="en">

<head>

    <title>TicoRides</title>
    <link rel="shortcut icon" href="<?php echo asset_url(); ?>images/logo.png" type="image/png">
    

    <link href="https://fonts.googleapis.com/css?family=Archivo+Black|Libre+Baskerville" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playball" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <link rel="stylesheet" href="<?php echo asset_url(); ?>font-awesome/font-awesome/css/font-awesome.min.css">

   
    <meta charset="UTF-8"> 

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  


    <link rel="stylesheet" href="<?php echo asset_url(); ?>css/estilo.css">
    <link rel="stylesheet" href="<?php echo asset_url(); ?>css/estilos.css">
    <link rel="stylesheet" href="<?php echo asset_url(); ?>css/modals.css">
    <link rel="stylesheet" href="<?php echo asset_url(); ?>css/view.css">
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

                    <a class="navbar-brand" href="welcome.html">TicoRides.com <img class="" src="<?php echo asset_url(); ?>images/logo.png" ></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">

                        <li class="active"><a><span class="glyphicon glyphicon-home"></span> Home</a></li>
                        <li><a href="info.html"><span class="glyphicon glyphicon-info-sign"></span> About</a></li>
                        

<?php if(isset( $this->session->userdata()['login'])){
 $user_data= ($this->session->userdata()['user']);
    
    ?>
    <li><a><span class="glyphicon glyphicon-user"></span> <?php echo $user_data->username ?> </a></li>
    <li><a id="page" href="<?php echo site_url('ride')?>"> <span class="glyphicon glyphicon-triangle-right"></span> My Rides</a></li>
     <li><a id="logOut" href="<?php echo site_url('user/logout')?>"> <span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
<?php }else{   
     ?>
  
                        <li><a href="<?php echo site_url('usuario/login')?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    
                        <?php } ?>
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

            <div class="col-sm-offset-9 col-md-offset-10 titulo">
                <h1 class="hidden-xs brand">TicoRides </h1>
               
            </div>
            <div class=" col-xs-offset-2  col-sm-offset-6 col-md-offset-8 titulo">
                <p> The best way to get around!</p>
            </div>

        
            <div class="search container-fluid ">
                <div class="col-xs-offset-2 col-sm-offset-3">
                    <h1>Search for a ride </h1>
                </div>
        
                <form id="login-form"  action= "<?php echo site_url('main/search');?>"  method="post" role="form" style="display: block;">
                <div class="form-group col-xs-offset-2 col-sm-4 col-sm-offset-5">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><span class=" glyphicon glyphicon-map-marker"></span></span>
                        <input name="from" type="text" class="form-control" placeholder="From" aria-describedby="basic-addon1">
                    </div>
                </div>

                <div class="form-group col-xs-offset-2 col-sm-4 col-sm-offset-5">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><span class=" glyphicon glyphicon-map-marker"></span></span>
                        <input name="to" type="text" class="form-control" placeholder="To" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="form-group col-xs-offset-2 col-md-3 col-md-offset-8">

                    <div class=" col-md-6 col-md-offset-3  ">

                     <button type="submit"  class="btn " id="btnSearch">
                      <span class="glyphicon glyphicon-search"></span> Search </button>
                    </div>

                </div>

</form>

            </div>
            <div class="find container-fluid">

                <div class="col-xs-offset-2 col-sm-offset-3">


                    <h3>Results </h3> 
                    <table class="table table-responsive table-bordered table-hover">

        <thead>
          <tr>
          <th>User</th>
            <th>Start</th>
            <th>End</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        <?php 
    include('utils.php');
  createTable($rides);
 // createModal();

 // <a href="<?php echo site_url('user/create')*?<*">Create User</a>?>
            
        </tbody>
   
                    </table>

                </div>
            </div>

        </div>
    </div>
    <!-- conteiner -->
    <div id="view-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-login">
 
         <div class="modal-content" >  
         <div class="modal-header">
				<div class="avatar">
                <img  src="<?php echo asset_url(); ?>images/logo.png" alt="Avatar">
				</div>				
				<h4 class="modal-title">Firsname Lastname</h4>	
			</div>
			<div class="modal-body" id="user_profile">
               
         </div>
         
         <div class="modal-footer">  
                   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
              </div> 
          </div>  
    </div>  
</div>  

<div id="view-ride" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-login">
         <div class="modal-content" >  
         <div class="modal-header">
				<div class="avatar">
					<img  src="<?php echo asset_url(); ?>images/logo.png" alt="Avatar">
                </div>
                <h4 class="modal-title">Ride Details</h4>	
			</div>
            <div class="modal-body" id="ride">


            </div>
       <div class="modal-footer">  
                   <button  type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                   </div>  
                   </div>  
                    </div>  
              </div>  
         
    
    <script src="<?php echo asset_url(); ?>js/modals.js" type="text/javascript"> </script>
    
</body>

</html>
