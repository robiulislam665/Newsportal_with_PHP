<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="<?php echo BASE_URL; ?>resources/backend2/js/jquery.min.js"></script>
	 <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>resources/backend2/font/RobotoCondensed-Regular.ttf"> 
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>resources/backend2/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>resources/backend2/css/daterangepicker-bs3.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>resources/backend2/css/bootstrap-toggle.min.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>resources/backend2/css/bootstrap-select.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>resources/backend2/css/all.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>resources/backend2/css/style.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>resources/backend2/css/dialog.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>resources/backend2/css/wheather.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>resources/backend2/css/map.css">
	
	

</head>
<body>
<div id="dialogoverlay" style="display: none"></div>
  <div id="dialogbox" style="display: none">
    <div>
      <div id="dialogboxhead"></div>
      <div id="dialogboxbody"></div>
      <div id="dialogboxfoot"></div>
    </div>
  </div>
  
	<div class="header">
		<div class="row">
			<div class="col-md-10">
				<a href="#default" class="logo"><img width="140px" height="52px" src="<?php echo BASE_URL; ?>resources/backend2/img/logo/logo.png"></a>
			
			</div>
			<div class="col-md-2">
				 <div class="row">
				 	<div class="col-md-4">
				 		hello,&nbsp;
                <?php 
                if (session_status() !== PHP_SESSION_ACTIVE) {
                    session_start();
                    echo $_SESSION["user_name"];
                } else {
                    echo $_SESSION["user_name"];
                }
                ?>
				 	</div>
				 	<div class="col-md-8">
				 		<a class="btn btn-info btn-sm" href="<?php echo BASE_URL.'logout'?>">logout</a>
				 		

				 	</div>
				 </div>
			</div>
		</div>

	</div>
	<div class="header-right">

	</div>



