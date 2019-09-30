<?php

/**
 * Description of SubcategoryManageModel

 */
require './models/DB_connection.php';
//require './library/helper.php';

class SubcategoryManageModel {
   

/*
     * @Author              : TT 
     * @Developed By        : TalhaTraining
     * @Route               : 'save_subcategory'
     * @Description         : This function is used for insert sub category
     * @view                : "views/admin_view/subcategory/create_subcategory.php" 
     * @Parameter           : $viewName[STRING] 
     * @Status              : active
     * @version             : v1.0         
*/
    public static function save_subcategory_DB($data) {
        try {
            $obj_db_connection = new DB_connection();
            $connection = $obj_db_connection->connectDB();
            
            $sql = "INSERT INTO sub_categories (category_id, sub_category_name) VALUES (:_category_id, :_sub_category_name)";
            $query_statement = $connection->prepare($sql);
            $query_statement->bindParam(':_sub_category_name', $data['sub_category_name']);
            $query_statement->bindParam(':_category_id', $data['category_id']);
            $result = $query_statement->execute();

            $obj_db_connection->connect_db_close();

            return $result;
        } catch (Exception $e) {
            if (session_status() !== PHP_SESSION_ACTIVE) {
                session_start();
                $_SESSION["exception_message"] = Global_DB_Error;
                header('Location: ' . BASE_URL . 'add-subcategory');
                exit();
            } else {
                $_SESSION["exception_message"] = Global_DB_Error;
                header('Location: ' . BASE_URL . 'add-subcategory');
                exit();
            }
        }
    }

    /*
     * @Author              : TT 
     * @Developed By        : TalhaTraining
     * @Route               : 'get_all_subcategory'
     * @Description         : This function is used for show all sub category
     * @view                : "" 
     * @Parameter           : $viewName[STRING] 
     * @Status              : active
     * @version             : v1.0         
*/

    public static function get_all_subcategory_from_DB() {
        try {
            $obj_db_connection = new DB_connection();
            $connection = $obj_db_connection->connectDB();

            $sql = "SELECT * FROM  sub_categories  ORDER BY id DESC";
            $query_statement = $connection->prepare($sql);
            $query_statement->execute();
            $result = $query_statement->fetchAll();
            $obj_db_connection->connect_db_close();
            return $result;
        } catch (Exception $e) {
            if (session_status() !== PHP_SESSION_ACTIVE) {
                session_start();
                $_SESSION["exception_message"] = Global_DB_Error;
                header('Location: ' . BASE_URL . 'manage-subcategory');
                exit();
            } else {
                $_SESSION["exception_message"] = Global_DB_Error;
                header('Location: ' . BASE_URL . 'manage-subcategory');
                exit();
            }
        }
    }
 /*
     * @Author              : TT 
     * @Developed By        : TalhaTraining
     * @Route               : 'get_all_category_name'
     * @Description         : This function is used for show all  category
     * @view                : "" 
     * @Parameter           : $viewName[STRING] 
     * @Status              : active
     * @version             : v1.0         
*/
    

    public static function get_all_category_name_from_CategoryDB() {
        $obj_db_connection = new DB_connection();
        $connection = $obj_db_connection->connectDB();

        $sql = "SELECT * FROM  categories WHERE status='1'";
        $query_statement = $connection->prepare($sql);
        $query_statement->execute();
        $result = $query_statement->fetchAll();
        $obj_db_connection->connect_db_close();
        return $result;
    }
    
    
/*
     * @Author              : TT 
     * @Developed By        : TalhaTraining
     * @Route               : 'get_category_name_by_category_id'
     * @Description         : This function is used for get category name by category id
     * @view                : "" 
     * @Parameter           : $viewName[STRING] 
     * @Status              : active
     * @version             : v1.0         
*/
    public static function get_category_name_by_category_id_from_DB($id) {
        $obj_db_connection = new DB_connection();
        $connection = $obj_db_connection->connectDB();

        $sql = "SELECT * FROM categories where id = :_category_id";
        $query_statement = $connection->prepare($sql);
        $query_statement->bindParam(':_category_id', $id);
        $query_statement->execute();
        $result = $query_statement->fetch(PDO::FETCH_ASSOC);;
        $obj_db_connection->connect_db_close();
        return $result;
    }

   
/*
     * @Author              : TT 
     * @Developed By        : TalhaTraining
     * @Route               : 'unpublish_subcategory_status'
     * @Description         : This function is used for unpublished sub category
     * @view                : "views/admin_view/subcategory/manage_subcategory.php" 
     * @Parameter           : $viewName[STRING] 
     * @Status              : active
     * @version             : v1.0         
*/
    public static function unpublish_subcategory_status_from_DB($id) {
        try {
            $obj_db_connection = new DB_connection();
            $connection = $obj_db_connection->connectDB();

            $sql = "UPDATE  sub_categories set status = '0' where id = :_subcategoryId ";
            $query_statement = $connection->prepare($sql);
            $query_statement->bindParam(':_subcategoryId', $id);
            $result = $query_statement->execute();

             $sql1 = "UPDATE posts set status = '0' where sub_category_id = :_categoryId2";
            $query_statement1 = $connection->prepare($sql1);
            $query_statement1->bindParam(':_categoryId2', $id);
            $result = $query_statement1->execute();

            $obj_db_connection->connect_db_close();
            return $result;

        } catch (Exception $e) {
            if (session_status() !== PHP_SESSION_ACTIVE) {
                session_start();
                $_SESSION["exception_message"] = Global_DB_Error;
                header('Location: ' . BASE_URL . 'manage-subcategory');
                exit();
            } else {
                $_SESSION["exception_message"] = Global_DB_Error;
                header('Location: ' . BASE_URL . 'manage-subcategory');
                exit();
            }
        }
    }

    
/*
     * @Author              : TT 
     * @Developed By        : TalhaTraining
     * @Route               : 'publish_subcategory_status'
     * @Description         : This function is used for published sub category
     * @view                : "views/admin_view/subcategory/manage_subcategory.php" 
     * @Parameter           : $viewName[STRING] 
     * @Status              : active
     * @version             : v1.0         
*/
    public static function publish_subcategory_status_from_DB($id) {
        try {
            $obj_db_connection = new DB_connection();
            $connection = $obj_db_connection->connectDB();

            $sql = "UPDATE  sub_categories set status = '1' where id = :_subcategoryId ";
            $query_statement = $connection->prepare($sql);
            $query_statement->bindParam(':_subcategoryId', $id);
            $result = $query_statement->execute();

             $sql1 = "UPDATE posts set status = '1' where sub_category_id = :_categoryId2";
            $query_statement1 = $connection->prepare($sql1);
            $query_statement1->bindParam(':_categoryId2', $id);
            $result = $query_statement1->execute();

            $obj_db_connection->connect_db_close();
            return $result;

        } catch (Exception $e) {
            if (session_status() !== PHP_SESSION_ACTIVE) {
                session_start();
                $_SESSION["exception_message"] = Global_DB_Error;
                header('Location: ' . BASE_URL . 'manage-subcategory');
                exit();
            } else {
                $_SESSION["exception_message"] = Global_DB_Error;
                header('Location: ' . BASE_URL . 'manage-subcategory');
                exit();
            }
        }
    }

    

   
   /*
     * @Author              : TT 
     * @Developed By        : TalhaTraining
     * @Route               : 'edit_subcategory'
     * @Description         : This function is used for edit sub category
     * @view                : "views/admin_view/subcategory/edit_subcategory.php" 
     * @Parameter           : $viewName[STRING] 
     * @Status              : active
     * @version             : v1.0         
*/
    public static function edit_subcategory_from_DB($id) {
        try {
            $obj_db_connection = new DB_connection();
            $connection = $obj_db_connection->connectDB();

            $sql = "SELECT * FROM sub_categories WHERE id = :_subcategoryId";
            $query_statement = $connection->prepare($sql);
            $query_statement->bindParam(':_subcategoryId', $id);
            $query_statement->execute();
            $result_array = $query_statement->fetch(PDO::FETCH_ASSOC);
            $obj_db_connection->connect_db_close();
            
           // echo '<pre>';
           // print_r($result_array);
           // exit();
            
            return $result_array;
        } catch (Exception $e) {
            if (session_status() !== PHP_SESSION_ACTIVE) {
                session_start();
                $_SESSION["exception_message"] = Global_DB_Error;
                header('Location: ' . BASE_URL . 'edit-subcategory/' . $id);
                exit();
            } else {
                $_SESSION["exception_message"] = Global_DB_Error;
                header('Location: ' . BASE_URL . 'edit-subcategory/' . $id);
                exit();
            }
        }
    }





      

    public static function delete_subcategory_from_db($id){

        function delete_subcategory_under_post($id){
        try {
            $obj_db_connection = new DB_connection();
            $connection = $obj_db_connection->connectDB();

           $sql = "SELECT * FROM sub_categories WHERE id = :_subcategoryId";
            $query_statement = $connection->prepare($sql);
            $query_statement->bindParam(':_subcategoryId', $id);
            $query_statement->execute();
            $result_array = $query_statement->fetch(PDO::FETCH_ASSOC);
            $obj_db_connection->connect_db_close();


            return $result;
        } catch (Exception $e) {
            if (session_status() !== PHP_SESSION_ACTIVE) {
                session_start();
                $_SESSION["exception_message"] = Global_DB_Error;
                header('Location: ' . BASE_URL . 'manage-subcategory/' . $id);
                exit();
            } else {
                $_SESSION["exception_message"] = Global_DB_Error;
                header('Location: ' . BASE_URL . 'manage-subcategory/' . $id);
                exit();
            }
        }
    }

    if ($result_array) {
    while ($row = mysql_fetch_assoc($result_array))
      delete_subcats($row[':_subcategoryId']);
  }




        try {
            $obj_db_connection = new DB_connection();
            $connection = $obj_db_connection->connectDB();

            $sql = "DELETE FROM sub_categories WHERE id = :_subcategoryId";
            $query_statement = $connection->prepare($sql);
            $query_statement->bindParam(':_subcategoryId', $id);
           return $query_statement->execute();
            //$result_array = $query_statement->fetch(PDO::FETCH_ASSOC);
            $obj_db_connection->connect_db_close();


            //return $result;
        } catch (Exception $e) {
            if (session_status() !== PHP_SESSION_ACTIVE) {
                session_start();
                $_SESSION["exception_message"] = Global_DB_Error;
                header('Location: ' . BASE_URL . 'manage-subcategory/' . $id);
                exit();
            } else {
                $_SESSION["exception_message"] = Global_DB_Error;
                header('Location: ' . BASE_URL . 'manage-subcategory/' . $id);
                exit();
            }
        }
    }
/*
     * @Author              : TT 
     * @Developed By        : TalhaTraining
     * @Route               : 'update_subcategory'
     * @Description         : This function is used for update sub category
     * @view                : "views/admin_view/subcategory/edit_subcategory.php" 
     * @Parameter           : $viewName[STRING] 
     * @Status              : active
     * @version             : v1.0         
*/
    public static function update_subcategory_DB($data) {
        try {
            $obj_db_connection = new DB_connection();
            $connection = $obj_db_connection->connectDB();
            
            
//            echo '<pre>';
//            print_r($_FILES);
//            
//            echo '<pre>';
//            print_r($data);
//            exit();
            $sql = "UPDATE sub_categories SET category_id = :_category_id, sub_category_name = :_sub_category_name where id = :_id ";
            $query_statement = $connection->prepare($sql);

            $query_statement->bindParam(':_category_id', $data['category_id']);
            $query_statement->bindParam(':_sub_category_name', $data['sub_category_name']);
            $query_statement->bindParam(':_id', $data['id']);

            $result = $query_statement->execute();

            $obj_db_connection->connect_db_close();

            return $result;
        } catch (Exception $e) {
            if (session_status() !== PHP_SESSION_ACTIVE) {
                session_start();
                $_SESSION["exception_message"] = Global_DB_Error;
                header('Location: ' . BASE_URL . 'edit-subcategory/' . $data['id']);
                exit();
            } else {
                $_SESSION["exception_message"] = Global_DB_Error;
                header('Location: ' . BASE_URL . 'edit-subcategory/' . $data['id']);
                exit();
            }
        }
    }
    

}
