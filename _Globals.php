<?php
/*

 * The array 'Route' stores all of the valid routes, you can add
 * new routes by editing the file 'routes/Routes.php'.
*/

//$Route = array();
//echo '<pre>';
//print_r($Route);
//exit();


/*process to find base url.*/
$uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$uriSegments[1] = '/'.$uriSegments[1].'/times_news_robiul/';



/*
 * Here BASE_URL is our project's base url.
*/

define( 'BASE_URL', $uriSegments[1] );
