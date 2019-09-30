<?php

/**
 * Description of AdminLoginController

 */
session_start();

require './models/AdminLoginModel.php';
require './controllers/AdminDashboardController.php';

class AdminLoginController extends MainController {

    /*
     * @Author              : TT 
     * @Developed By        : TalhaTraining
     * @Route               : 'admin_login'
     * @Description         : This function is used for admin login .
     * @view                : "views/admin_login.php" 
     * @Parameter           : $viewName[STRING] 
     * @Status              : active
     * @version             : v1.0         
*/

    public static function index() {
        require 'views/admin_login.php';
    }

    
    /*
     * @Author              : TT 
     * @Developed By        : TalhaTraining
     * @Route               : 'admin_login_authentication'
     * @Description         : This function is used for to go dashbord after successfully login .
     * @view                : "views/admin_view/admin_master.php" 
     * @Parameter           : $viewName[STRING] 
     * @Status              : active
     * @version             : v1.0         
*/

    public static function admin_login_authentication() {

        $data = array();
        $data['email'] = $_POST['email'];
        $data['password'] = $_POST['password'];

        $obj_admin_login_model = new AdminLoginModel();
        $check_result = $obj_admin_login_model->admin_login_authentication_DB($data);

        if (isset($check_result)) {
                
                if (session_status() !== PHP_SESSION_ACTIVE) {
                    session_start();
                    } 
                $_SESSION["user_id"] = $check_result['id'];
                    $_SESSION["user_name"] = $check_result['name'];
                    $_SESSION["user_email"] = $check_result['email'];
                     $_SESSION["role"] = $check_result['role'];

                    // echo '<pre>';
                    //  print_r($_SESSION);
                    // exit();
                    
                    header('Location: '.BASE_URL.'dashboard');  // here 'dashboard' is the route that we declared
            
        } else {
            if (session_status() !== PHP_SESSION_ACTIVE) {
                session_start();
                $_SESSION["exception"] = Global_Invalid_Login;
                header('Location: '.BASE_URL.'admin_login');
                //exit();
            } else {
                $_SESSION["exception"] = Global_Invalid_Login;
                header('Location: '.BASE_URL.'admin_login');
                //exit();
            }
            
        }
    }
    
    

    
}
