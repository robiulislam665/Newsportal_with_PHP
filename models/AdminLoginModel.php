<?php

/**
 * Description of AdminLoginModel

 */
 
require './models/DB_connection.php';

class AdminLoginModel {

    
     
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

    public static function admin_login_authentication_DB($data) {
        try {
            $email = $data['email'];
            $pass = $data['password'];

            $obj_db_connection = new DB_connection();
            $connection = $obj_db_connection->connectDB();

            $sql = "SELECT * FROM users WHERE email=:_adminEmail AND password=:_adminPassword";
            $query_statement = $connection->prepare($sql);
            $query_statement->bindParam(':_adminEmail', $email);
            $pass_md5 = md5($pass);
            $query_statement->bindParam(':_adminPassword', $pass_md5);
            $query_statement->execute();
            $result_array = $query_statement->fetch(PDO::FETCH_ASSOC);
            $obj_db_connection->connect_db_close();

            if ($result_array) {
                return $result_array;
            } else {
                session_start();
                $_SESSION["exception"] = 'Ooops... Something went wrong with internal database, Please try later.';
                header('Location: '.BASE_URL.'admin_login');
            }
        } catch (Exception $e) {
            //echo $e;
            session_start();
            $_SESSION["exception"] = 'Ooops... Something went wrong with internal database, Please try later.';
            header('Location: '.BASE_URL.'admin_login');
            exit();
        }
    }

}
