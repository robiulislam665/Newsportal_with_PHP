 <?php
//back button protection
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
    if (!isset($_SESSION["user_id"])) {
        header('Location: '.BASE_URL.'admin_login');
    }
} else {
    if (!isset($_SESSION["user_id"])) {
        header('Location: '.BASE_URL.'admin_login');
    }
}

// for exploding and determining content page
$uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)); 

?>



 <?php include('views/admin_view/header_panel.php') ?>
 <?php include('views/admin_view/left_panel.php') ?>

	<div class="main">
		<div class="card info">
           <?php if ($uriSegments[3] == 'dashboard') { ?>
			<div class="card-body">
				<div class="row">
						 <?php include('views/admin_view/master_content.php');?>
					</div>				
			</div> 
			<?php }?>
		</div>
			<?php
			if (($uriSegments[3] == 'add-category')) {
				include('pages/category/create_category.php');
			}
			?>
		     <?php
			if (($uriSegments[3] == 'manage-category')) {
				include('pages/category/manage_category.php');
			}
			?>
			<?php
			if (($uriSegments[3] == 'edit-category')) {
				include('pages/category/edit_category.php');
			}
			?>

			<?php
			if (($uriSegments[3] == 'add-subcategory')) {
				include('pages/subcategory/create_subcategory.php');
			}
			?>
			<?php
			if (($uriSegments[3] == 'manage-subcategory')) {
				include('pages/subcategory/manage_subcategory.php');
			}
			?>
			<?php
			if (($uriSegments[3] == 'edit-subcategory')) {
				include('pages/subcategory/edit_subcategory.php');
			}
			?>
			<?php
			if (($uriSegments[3] == 'add-post')) {
				include('pages/post/create_post.php');
			}
			?>
			<?php
			if (($uriSegments[3] == 'manage-post')) {
				include('pages/post/manage_post.php');
			}
			?>

			<?php
			if (($uriSegments[3] == 'edit-post')) {
				include('pages/post/edit_post.php');
			}
			?>
		</div>
		

		<div class="footer">
		  <p>Copyright © 2019. All rights reserved. </p>
		</div>
	</div>
 <?php include('views/admin_view/footer_panel.php') ?>