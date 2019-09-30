<?php


/**
 * Description of CategoryManageModel

 */

require './models/DB_connection.php';
//require './library/helper.php';

class CategoryManageModel {
        
     /*
     * @Author              : TT 
     * @Developed By        : TalhaTraining
     * @Route               : 'save_category'
     * @Description         : This function is used for insert category
     * @view                : "views/admin_view/pages/category/create_category.php" 
     * @Parameter           : $viewName[STRING] 
     * @Status              : active
     * @version             : v1.0         
*/

    public static function save_category_DB($data) {
        try {
            $obj_db_connection = new DB_connection();
            $connection = $obj_db_connection->connectDB();

            $sql = "INSERT INTO categories (name) VALUES (:_category_name)";
            $query_statement = $connection->prepare($sql);
            $query_statement->bindParam(':_category_name', $data['name']);
            $result = $query_statement->execute();

            $obj_db_connection->connect_db_close();

            return $result;
        } catch (Exception $e) {
            if (session_status() !== PHP_SESSION_ACTIVE) {
                session_start();
            }
                $_SESSION["exception_message"] = Global_DB_Error;
                header('Location: ' . BASE_URL . 'add-category');
                exit();
        }
    }

    /*
     * @Author              : TT 
     * @Developed By        : TalhaTraining
     * @Route               : 'get_all_category'
     * @Description         : This function is used for the collect all category
     * @view                : "" 
     * @Parameter           : $viewName[STRING] 
     * @Status              : active
     * @version             : v1.0         
*/

    public static function get_all_category_from_DB() {
        try {
            $obj_db_connection = new DB_connection();
            $connection = $obj_db_connection->connectDB();
            
            $sql = "SELECT * FROM categories ";
            $query_statement = $connection->prepare($sql);
            $query_statement->execute();
            $result = $query_statement->fetchAll();
            $obj_db_connection->connect_db_close();
            return $result;
        } catch (Exception $e) {
            if (session_status() !== PHP_SESSION_ACTIVE) {
                session_start();
            }
                $_SESSION["exception_message"] = Global_DB_Error;
                header('Location: ' . BASE_URL . 'manage-category');
                exit();
        }
    }

    /*
     * @Author              : TT 
     * @Developed By        : TalhaTraining
     * @Route               : 'unpublish_category_status'
     * @Description         : This function is used for the unpublished category status.
     * @view                : "views/admin_view/pages/category/manage_category.php"
     * @Parameter           : $viewName[STRING] 
     * @Status              : active
     * @version             : v1.0         
*/


    public static function unpublish_category_status_from_DB($id) {
        try {
            $obj_db_connection = new DB_connection();
            $connection = $obj_db_connection->connectDB();

            $sql = "UPDATE categories set status = '0' where id = :_categoryId ";
            $query_statement = $connection->prepare($sql);
            $query_statement->bindParam(':_categoryId', $id);
            $result = $query_statement->execute();

           $sql1 = "UPDATE sub_categories set status = '0' where category_id = :_categoryId1";
            $query_statement1 = $connection->prepare($sql1);
            $query_statement1->bindParam(':_categoryId1', $id);
            $result = $query_statement1->execute();

            $sql2 = "UPDATE posts set status = '0' where category_id = :_categoryId2";
            $query_statement2 = $connection->prepare($sql2);
            $query_statement2->bindParam(':_categoryId2', $id);
            $result = $query_statement2->execute();

            $obj_db_connection->connect_db_close();
            return $result;

           
            

        } catch (Exception $e) {
            if (session_status() !== PHP_SESSION_ACTIVE) {
                session_start();
            }
                $_SESSION["exception_message"] = Global_DB_Error;
                header('Location: ' . BASE_URL . 'manage-category');
                exit();
        }
    }

    
/*
     * @Author              : TT 
     * @Developed By        : TalhaTraining
     * @Route               : 'unpublish_category_status'
     * @Description         : This function is used for the published category status.
     * @view                :"views/admin_view/pages/category/manage_category.php" 
     * @Parameter           : $viewName[STRING] 
     * @Status              : active
     * @version             : v1.0         
*/
    public static function publish_category_status_from_DB($id) {
        try {
            $obj_db_connection = new DB_connection();
            $connection = $obj_db_connection->connectDB();

            $sql = "UPDATE categories set status = '1' where id = :_categoryId ";
            $query_statement = $connection->prepare($sql);
            $query_statement->bindParam(':_categoryId', $id);
            $result = $query_statement->execute();

           $sql1 = "UPDATE sub_categories set status = '1' where category_id = :_categoryId1";
            $query_statement1 = $connection->prepare($sql1);
            $query_statement1->bindParam(':_categoryId1', $id);
            $result = $query_statement1->execute();

            $sql2 = "UPDATE posts set status = '1' where category_id = :_categoryId2";
            $query_statement2 = $connection->prepare($sql2);
            $query_statement2->bindParam(':_categoryId2', $id);
            $result = $query_statement2->execute();

            $obj_db_connection->connect_db_close();
            return $result;


        } catch (Exception $e) {
            if (session_status() !== PHP_SESSION_ACTIVE) {
                session_start();
            }
                $_SESSION["exception_message"] = Global_DB_Error;
                header('Location: ' . BASE_URL . 'manage-category');
                exit();
        }
    }

    

   /*
     * @Author              : TT 
     * @Developed By        : TalhaTraining
     * @Route               : 'edit_category'
     * @Description         : This function is used for the edit category.
     * @view                : "views/admin_view/pages/category/manage_category.php"
     * @Parameter           : $viewName[STRING] 
     * @Status              : active
     * @version             : v1.0         
*/
    

    public static function edit_category_from_DB($id) {
        try {
            $obj_db_connection = new DB_connection();
            $connection = $obj_db_connection->connectDB();

            $sql = "SELECT * FROM categories WHERE id = :_id";
            $query_statement = $connection->prepare($sql);
            $query_statement->bindParam(':_id', $id);
            $query_statement->execute();
            $result_array = $query_statement->fetch(PDO::FETCH_ASSOC);
            $obj_db_connection->connect_db_close();

            return $result_array;

        } catch (Exception $e) {
            if (session_status() !== PHP_SESSION_ACTIVE) {
                session_start();
            }
                $_SESSION["exception_message"] = Global_DB_Error;
                header('Location: ' . BASE_URL . 'edit-category/' . $id);
                exit();
        }
    } 

    public static function delete_category_from_DB($id) {

            function delete_category_under_subcategory($id){
                try {
                    $obj_db_connection = new DB_connection();
                    $connection = $obj_db_connection->connectDB();

                   $sql = "SELECT * FROM categories WHERE id = :_categoryId";
                    $query_statement = $connection->prepare($sql);
                    $query_statement->bindParam(':_categoryId', $id);
                    $query_statement->execute();
                    $result_array = $query_statement->fetch(PDO::FETCH_ASSOC);
                    $obj_db_connection->connect_db_close();


                    return $result;
                } catch (Exception $e) {
                    if (session_status() !== PHP_SESSION_ACTIVE) {
                        session_start();
                        $_SESSION["exception_message"] = Global_DB_Error;
                        header('Location: ' . BASE_URL . 'manage-category/' . $id);
                        exit();
                    } else {
                        $_SESSION["exception_message"] = Global_DB_Error;
                        header('Location: ' . BASE_URL . 'manage-category/' . $id);
                        exit();
                    }
                }
            }

            if ($result_array) {
                while ($row = mysql_fetch_assoc($result_array))
                  delete_category_under_subcategory($row[':_subcategoryId']);
              }


        try {
            $obj_db_connection = new DB_connection();
            $connection = $obj_db_connection->connectDB();

            $sql = "DELETE FROM categories WHERE id = :_id";
            $query_statement = $connection->prepare($sql);
            $query_statement->bindParam(':_id', $id);
            return $query_statement->execute();
            //$result_array = $query_statement->fetch(PDO::FETCH_ASSOC);
            $obj_db_connection->connect_db_close();

            //return $result_array;

        } catch (Exception $e) {
            if (session_status() !== PHP_SESSION_ACTIVE) {
                session_start();
            }
                $_SESSION["exception_message"] = Global_DB_Error;
               
                exit();
        }
         header('Location: ' . BASE_URL . 'manage-category/' . $id);
    }

    /*
     * @Author              : TT 
     * @Developed By        : TalhaTraining
     * @Route               : 'update_category'
     * @Description         : This function is used for the update category.
     * @view                : "views/admin_view/pages/category/edit_category.php" 
     * @Parameter           : $viewName[STRING] 
     * @Status              : active
     * @version             : v1.0         
*/


    public static function update_category_DB($data) {
        try {
            $obj_db_connection = new DB_connection();
            $connection = $obj_db_connection->connectDB();

            $sql = "UPDATE categories SET name = :_name where id = :_id ";
            $query_statement = $connection->prepare($sql);

            $query_statement->bindParam(':_id', $data['id']);
            $query_statement->bindParam(':_name', $data['name']);
           

            $result = $query_statement->execute();

            $obj_db_connection->connect_db_close();

            return $result;
        } catch (Exception $e) {
            if (session_status() !== PHP_SESSION_ACTIVE) {
                session_start();
            }
                $_SESSION["exception_message"] = Global_DB_Error;
                header('Location: ' . BASE_URL . 'edit-category/' . $data['category_id']);
                exit();
        }
    }
      

}
