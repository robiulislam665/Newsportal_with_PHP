<?php


//require './models/AdminDashboardModel.php';
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}
class AdminDashboardController extends MainController{


/*
     * @Author              : TT 
     * @Developed By        : TalhaTraining
     * @Route               : 'dashboard'
     * @Description         : This function is used for Admin dashboard view or page
     * @view                : "views/admin_view/admin_master.php" 
     * @Parameter           : $viewName[STRING] 
     * @Status              : active
     * @version             : v1.0         
*/
    
    public static function index($viewName) {
        require "views/admin_view/$viewName.php";
    }


    /*
     * @Author              : TT 
     * @Developed By        : TalhaTraining
     * @Route               : 'logout'
     * @Description         : This function is used for logout from Admin dashboard and return admin_login
     * @view                : "views/admin_login.php" 
     * @Parameter           : $viewName[STRING] 
     * @Status              : active
     * @version             : v1.0         
*/
   

    public static function logout() {
        //session_unset();
        session_destroy();
        //session_start();
        $_SESSION["message"] = Global_Logout_Successful;
        header('Location: ' . BASE_URL.'admin_login');  // here this is the route that we declared       
    }


    
}
