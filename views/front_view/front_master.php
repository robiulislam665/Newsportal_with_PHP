 <?php


// for exploding and determining content page
$uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)); 

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>News Portal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>resources/front/css/bootstrap.min.css">

  <script type="text/javascript" src="<?php echo BASE_URL; ?>resources/front/js/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo BASE_URL; ?>resources/front/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>resources/front/fontawesome/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>resources/front/css/custom/style.css">

  <script type="text/javascript">
	$(document).ready(function(){
		$(".wish-icon i").click(function(){
			$(this).toggleClass("fa-heart fa-heart-o");
		});
	});	

	$(document).ready(function(){
	  $("#hide").click(function(){
	    $(".show-hide").toggle();
	  });
	});
</script>


</head>
<body>

<!-- navbar -->
<?php include 'views/front_view/front_header_panel.php'; ?>
<!--End navbar -->

<!-- ======================content part ====================-->
<?php
	if (($uriSegments[3] == '')) {
		  include ('views/front_view/front_master_content.php');
	}
?>

<?php
	if (($uriSegments[3] == 'details-post')) {
		include('pages/details.php');
	}
?>
<!--===================End content part==================== -->
	

<!-- Footer -->
<?php include 'views/front_view/front_footer_panel.php'; ?>
<!--End Footer -->






	</body>
</html>
