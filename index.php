<?php

//echo "Hello";
$GLOBALS['language']=1;

/*
* This includes all global variables. such as base url.
*/
require_once( './_Globals.php');

require_once( './library/_Custom_Validation_Message_English.php');
require_once( './library/_Global_Errors_English.php');
//require_once( './library/_Global_Errors_Bangla.php');

/*
 * By including ./routes.php we get access to the $Route
 * array containing all of the valid routes for our app.
 */

//require_once( './routes.php' );


//autoloades all the classes from class folders
function __autoload($class_name) {
    if(file_exists('./classes/' . $class_name . '.php')){
        require_once './classes/' . $class_name . '.php';
    }elseif (file_exists('./controllers/' . $class_name . '.php')) {
        require_once './controllers/' . $class_name . '.php';
    }
}


/*
 * By including ./routes.php we get access to the $Route
 * array containing all of the valid routes for our app.
 */
require_once( './routes.php' );