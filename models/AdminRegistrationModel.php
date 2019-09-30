<?php

/**
 * Description of AdminManageModel

 */

require './models/DB_connection.php';

class AdminRegistrationModel {
    
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
   

    public static function adminRegistration($data) {
        try {
            $obj_db_connection = new DB_connection();
            $connection = $obj_db_connection->connectDB();
            
            $sql = "SELECT * FROM users where email='".$data['email']."'";
             $query_statement = $connection->prepare($sql);
                $query_statement->execute();
                $result = $query_statement->fetchAll();
            
             if($result){
                 $_SESSION["exception"] = 'Email allready Exit';
                 header('Location: '.BASE_URL.'admin_registration');
             }else{


            $sql = "INSERT INTO users (name, email, password) VALUES (:_name, :_email, :_password)";
            $query_statement = $connection->prepare($sql);
            $query_statement->bindParam(':_name', $data['name']);
            $query_statement->bindParam(':_email', $data['email']);
            $pass_md5 = md5($data['password']);
            $query_statement->bindParam(':_password', $pass_md5);
            $result = $query_statement->execute();

            $obj_db_connection->connect_db_close();

            return $result;
        }
        } catch (Exception $e) {
            if (session_status() !== PHP_SESSION_ACTIVE) {
                session_start();
                $_SESSION["exception_message"] = 'Ooops... Something went wrong with internal database, Please try later.';
                header('Location: '.BASE_URL.'admin_registration');
                exit();
            } else {
                $_SESSION["exception_message"] = 'Ooops... Something went wrong with internal database, Please try later.';
                header('Location: '.BASE_URL.'admin_registration');
                exit();
            }
        }
        
    }
    
    
 
    
}
