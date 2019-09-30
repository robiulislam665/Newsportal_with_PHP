<?php

/**
 * Description of AdminLoginController
 
 */
session_start();

require './models/AdminRegistrationModel.php';
require './controllers/AdminDashboardController.php';

class AdminRegistrationController extends MainController {

    
/*
     * @Author              : TT 
     * @Developed By        : TalhaTraining
     * @Route               : 'createAdminRegistration'
     * @Description         : This function is used for Admin Registration  view or page
     * @view                : "views/admin_registration.php" 
     * @Parameter           : $viewName[STRING] 
     * @Status              : active
     * @version             : v1.0         
*/
    public static function createAdminRegistration() {
        require 'views/admin_registration.php';
    }

    
   
/*
     * @Author              : TT 
     * @Developed By        : TalhaTraining
     * @Route               : 'storeAdminRegistration'
     * @Description         : This function is used for the "check" properly Admin Registration. afer registration you go to login page
     * @view                : "views/admin_registration.php" 
     * @Parameter           : $viewName[STRING] 
     * @Status              : active
     * @version             : v1.0         
*/

      public static function storeAdminRegistration(){
        $data = array();
        $data['name'] = $_POST['name'];
        $data['email'] = $_POST['email'];
        $data['password'] = $_POST['password'];
        $data['confirm_password'] = $_POST['confirm_password'];
        if (empty($data['name']) || empty($data['email']) || empty($data['password'])) {
            $_SESSION["exception"] = 'Field Must be required';
             header('Location: '.BASE_URL.'admin_registration');
        }else{
        if ($data['password'] == $data['confirm_password']) {
            $admin_registration = new AdminRegistrationModel();
            $result = $admin_registration->adminRegistration($data);
            if (isset($result)) {
                   $_SESSION["message"] = 'you registration successfully now login';
                    header('Location: '.BASE_URL.'admin_login');
            }
        }else{
            $_SESSION["exception"] = 'password not match';
             header('Location: '.BASE_URL.'admin_registration');
        }
    }
      }
   
    

    
}
