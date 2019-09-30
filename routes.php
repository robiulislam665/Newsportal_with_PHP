<?php

/* 
 * This generates url routes from browser Url. 
 */


$uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
// echo  '<pre>';
// print_r($uriSegments);
// exit();

if(isset($uriSegments[3])){
    define( 'ID', $uriSegments[3] );    // this is id variable in url
}

if(isset($uriSegments[4])){
    define( 'ID2', $uriSegments[4] );    // this is id variable in url
}





/* 
 * Here we define all our custom routes. 
 * ------
 * Rules:
 * ------
 * #use "set" method for ststic routes
 * #use "post" method for form action type routes
 * #use "get" method for parameter passing type routes
 * 
 * --------
 * example:
 * --------
 * if ($uriSegments[2] == 'your-route-name') {          //'$uriSegments[2]' is browsers url that we set,  'your-route-name' is the route name that, you provide.
 *   Route::method('your-route-name', function() {      //'method' here you put your method name such as "set"/"post".
 *        ControllerName::methodName();                 //controller_name::method_name();
 *   });
 * }
 * 
 */

/*-------------------Fron Side start ------------------*/
if ($uriSegments[3] == 'index.php' || $uriSegments[3] == '') {
    
    
    Route::set('index.php', function() {
        FrontController::index('front_master');  //controller_name::method_name();
    });
}

if ($uriSegments[3] == 'category-wise-post') {
    
    
    Route::set('category-wise-post', function() {
        FrontController::category_wise_post(ID2, 'front_master');  //controller_name::method_name();
    });
}



if ($uriSegments[3] == 'details-post') {
    
    Route::get('details-post', function() {
        FrontController::details_posts(ID2, 'front_master');
    });
}







/******************* Front side end ------------*/






/*-------------------Admin login section Robiul------------*/

if ($uriSegments[3] == 'admin_login') {
    Route::set('admin_login', function() {
        AdminLoginController::index();  //controller_name::method_name();
    });
}

if ($uriSegments[3] == 'admin-login-authentication') {
    Route::post('admin-login-authentication', function() {
        AdminLoginController::admin_login_authentication();
    });
}


if ($uriSegments[3] == 'dashboard') {
    Route::set('dashboard', function() {
        AdminDashboardController::index('admin_master');
    });
}

if ($uriSegments[3] == 'logout') {
    Route::set('logout', function() {
        AdminDashboardController::logout();
    });
}
/*-------------------!Admin login section Robiul------------*/



/*--------------------Admin Registration Robiul-------------*/
if ($uriSegments[3] == 'admin_registration') {
    Route::set('admin_registration', function() {
        AdminRegistrationController::createAdminRegistration();  //controller_name::method_name();
    });
}

if ($uriSegments[3] == 'admin_store_registration') {
    Route::post('admin_store_registration', function() {
        AdminRegistrationController::storeAdminRegistration();
    });
}
/*--------------------Admin Registration end----------*/

/*-------------------Category section Robiul------------*/
if ($uriSegments[3] == 'add-category') {
    Route::set('add-category', function() {
        CategoryManageController::add_category('admin_master');
    });
}

if ($uriSegments[3] == 'save-category') {
    Route::post('save-category', function() {
        CategoryManageController::save_category();
    });
}


if ($uriSegments[3] == 'unpublish-category-status') {
    Route::get('unpublish-category-status', function() {
        CategoryManageController::unpublish_category_status(ID2);
    });
}

if ($uriSegments[3] == 'publish-category-status') {
    Route::get('publish-category-status', function() {
        CategoryManageController::publish_category_status(ID2);
    });
}

if ($uriSegments[3] == 'edit-category') {
    Route::get('edit-category', function() {
        CategoryManageController::edit_category(ID2, 'admin_master');
    });
}

if ($uriSegments[3] == 'delete-category') {
    Route::get('delete-category', function() {
        CategoryManageController::delete_category(ID2, 'admin_master');
    });
}

if ($uriSegments[3] == 'update-category') {
    Route::post('update-category', function() {
        CategoryManageController::update_category();
    });
}

if ($uriSegments[3] == 'manage-category') {
    Route::set('manage-category', function() {
        CategoryManageController::manage_category('admin_master');
    });
}


/*-------------------!Category section------------*/


/*-------------------Subcategory section Robiul------------*/
if ($uriSegments[3] == 'add-subcategory') {
    Route::set('add-subcategory', function() {
        SubcategoryManageController::add_subcategory('admin_master');
    });
}

if ($uriSegments[3] == 'save-subcategory') {
    Route::post('save-subcategory', function() {
        SubcategoryManageController::save_subcategory();
    });
}


if ($uriSegments[3] == 'unpublish-subcategory-status') {
    Route::get('unpublish-subcategory-status', function() {
        SubcategoryManageController::unpublish_subcategory_status(ID2);
    });
}

if ($uriSegments[3] == 'publish-subcategory-status') {
    Route::get('publish-subcategory-status', function() {
        SubcategoryManageController::publish_subcategory_status(ID2);
    });
}


if ($uriSegments[3] == 'edit-subcategory') {
    Route::get('edit-subcategory', function() {
        SubcategoryManageController::edit_subcategory(ID2, 'admin_master');
    });
}

if ($uriSegments[3] == 'delete-subcategory') {
    Route::get('delete-subcategory', function() {
        SubcategoryManageController::delete_subcategory(ID2, 'admin_master');
    });
}

if ($uriSegments[3] == 'update-subcategory') {
    Route::post('update-subcategory', function() {
        SubcategoryManageController::update_subcategory();
    });
}

if ($uriSegments[3] == 'manage-subcategory') {
    Route::set('manage-subcategory', function() {
        SubcategoryManageController::manage_subcategory('admin_master');
    });
}


/*-------------------!Subcategory section Robiul------------*/


/*--------------------------post section Robiul--------------*/
if ($uriSegments[3] == 'add-post') {
    Route::set('add-post', function() {
        PostManageController::add_post('admin_master');
    });
}

if ($uriSegments[3] == 'get-subcategory-by-category-id') {
    Route::set('get-subcategory-by-category-id', function() {
        PostManageController::get_all_subcategory_for_post_add_by_category();
    });
}

if ($uriSegments[3] == 'save-post') {
    Route::post('save-post', function() {
        PostManageController::save_post();
    });
}
if ($uriSegments[3] == 'manage-post') {
    Route::post('manage-post', function() {
        PostManageController::manage_post('admin_master');
    });
}

if ($uriSegments[3] == 'edit-post') {
    Route::get('edit-post', function() {
        PostManageController::edit_post(ID2, 'admin_master');
    });
}

if ($uriSegments[3] == 'update-post') {
    Route::post('update-post', function() {
        PostManageController::update_post();
    });
}

if ($uriSegments[3] == 'unpublished-post-status') {
    Route::get('unpublished-post-status', function() {
        PostManageController::unpublish_post_status(ID2);
    });
}

if ($uriSegments[3] == 'published-post-status') {
    Route::get('published-post-status', function() {
        PostManageController::publish_post_status(ID2);
    });
}

/*-------------------------end post section Robiul------------*/



if ($uriSegments[3] == 'add-test') {
    Route::set('add-test', function() {
        CategoryManageController::add_category('admin_master');
    });
}