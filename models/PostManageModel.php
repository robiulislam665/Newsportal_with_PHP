<?php
session_start();
?>
<?php


require './models/DB_connection.php';
require './library/helper.php';

class PostManageModel {

    /*
     * @Author              : TT 
     * @Developed By        : TalhaTraining
     * @Route               : 'get_all_category_name'
     * @Description         : This function is used for show all category name
     * @view                : "views/admin_view/post/create_post.php" 
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
     * @Route               : 'get_all_sub_category_name'
     * @Description         : This function is used for show all sub category name name
     * @view                : "" 
     * @Parameter           : $viewName[STRING] 
     * @Status              : active
     * @version             : v1.0         
*/

     public static function get_all_sub_category_name_from_CategoryDB() {
        $obj_db_connection = new DB_connection();
        $connection = $obj_db_connection->connectDB();

        $sql = "SELECT * FROM  sub_categories WHERE status='1'";
        $query_statement = $connection->prepare($sql);
        $query_statement->execute();
        $result = $query_statement->fetchAll();
        $obj_db_connection->connect_db_close();
        return $result;
    }


 /*
     * @Author              : TT 
     * @Developed By        : TalhaTraining
     * @Route               : 'get_all_subcategory_for_post_add_by_category'
     * @Description         : This function is used for get all subcategory name accoriding to category wise
     * @view                : "" 
     * @Parameter           : $viewName[STRING] 
     * @Status              : active
     * @version             : v1.0         
*/

     public static function get_all_subcategory_for_post_add_by_category_from_DB($id) {
        //require './models/DB_connection.php';
        $obj_db_connection = new DB_connection();
        $connection = $obj_db_connection->connectDB();

        $sql = "SELECT * FROM  sub_categories WHERE category_id=:_categoryID";
        $query_statement = $connection->prepare($sql);
        $query_statement->bindParam(':_categoryID', $id);
        $query_statement->execute();
        $result = $query_statement->fetchAll();
        $obj_db_connection->connect_db_close();
        return $result;
    }
 /*
     * @Author              : TT 
     * @Developed By        : TalhaTraining
     * @Route               : 'save_post'
     * @Description         : This function is used for insert post
     * @view                : "views/admin_view/post/create_post.php" 
     * @Parameter           : $viewName[STRING] 
     * @Status              : active
     * @version             : v1.0         
*/
    public static function save_post_db($data){
        try {
            $obj_db_connection = new DB_connection();
            $connection = $obj_db_connection->connectDB();

            if (!empty($_FILES['image'])) {
                $currentDir = getcwd();    //base directory of file to uploaded
                $uploadDirectory = "/resources/backend2/post_images/";   //file upload destination directory
                //$fileName = $_FILES['merchant_info_verified_document']['name'];   //original file name
                $fileExtension = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);  //get file extension
                $fileExtension = strtolower($fileExtension);
                $fileName = random_generator5() . date('mdHis') . '.' . $fileExtension;    //new file name
                $fileSize = $_FILES['image']['size']; //get file size
                $fileTmpName = $_FILES['image']['tmp_name'];  //get file tmp name**
                $fileType = $_FILES['image']['type'];    //get file type
                $uploadPath = $currentDir . $uploadDirectory . basename($fileName); //file uploading full path
                //if ($fileExtension == 'jpg' || $fileExtension == 'jpeg' || $fileExtension == 'png') {
                if ($fileExtension == 'jpg') {
                    if ($fileSize < 5000000) {
                        move_uploaded_file($fileTmpName, $uploadPath);  //upload file to directory
                        $data['image'] = $fileName;
                    } else {
                        $_SESSION["err_message"] = Global_File_Size_Too_Large;
                        header('Location: ' . BASE_URL . 'add-post');
                    }
                } else {
                    $_SESSION["err_message"] = Global_File_Type_Not_Supported;
                    header('Location: ' . BASE_URL . 'add-post');
                }
            } else {
                $_SESSION["err_message"] = Global_File_Not_Selected;
                header('Location: ' . BASE_URL . 'add-post');
            }

            $sql = "INSERT INTO posts (title,user_id, description, content,image,category_id,sub_category_id,published_at) VALUES ( :_title,:_user_id, :_description, :_content,:_image,:_category_id,:_sub_category_id,:_published_at)";
            $query_statement = $connection->prepare($sql);
            $query_statement->bindParam(':_title', $data['title']);
            $query_statement->bindParam(':_description', $data['description']);
            $query_statement->bindParam(':_content', $data['content']);
            $query_statement->bindParam(':_image', $data['image']);
            $query_statement->bindParam(':_category_id', $data['category_id']);
            $query_statement->bindParam(':_sub_category_id', $data['sub_category_id']);
            $query_statement->bindParam(':_published_at', $data['published_at']);
              $query_statement->bindParam(':_user_id',  $_SESSION["user_id"]);
            $result = $query_statement->execute();
            $obj_db_connection->connect_db_close();
            return $result;
            
        } catch (Exception $e) {
            if (session_status() !== PHP_SESSION_ACTIVE) {
                session_start();
                $_SESSION["exception_message"] = Global_DB_Error;
                header('Location: ' . BASE_URL . 'add-post');
                exit();
            } else {
                $_SESSION["exception_message"] = Global_DB_Error;
                header('Location: ' . BASE_URL . 'add-post');
                exit();
            }
        }
    }
 /*
     * @Author              : TT 
     * @Developed By        : TalhaTraining
     * @Route               : 'manage_post'
     * @Description         : This function is used for show all post
     * @view                : "views/admin_view/post/manage_post.php" 
     * @Parameter           : $viewName[STRING] 
     * @Status              : active
     * @version             : v1.0         
*/
    public static function get_all_post_db(){

       try {
            $obj_db_connection = new DB_connection();
            $connection = $obj_db_connection->connectDB();
            
            $sql = "SELECT  posts.*, categories.name,sub_categories.sub_category_name
                    FROM posts
                    INNER JOIN categories ON posts.category_id=categories.id
                    INNER JOIN sub_categories ON posts.sub_category_id=sub_categories.id
                    ORDER BY posts.id DESC";

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
     * @Route               : 'edit_post'
     * @Description         : This function is used for edit post
     * @view                : "views/admin_view/post/manage_post.php" 
     * @Parameter           : $viewName[STRING] 
     * @Status              : active
     * @version             : v1.0         
*/
     public static function edit_post_from_DB($id) {
        try {
            $obj_db_connection = new DB_connection();
            $connection = $obj_db_connection->connectDB();

            $sql = "SELECT * FROM posts WHERE id = :_id";
            $query_statement = $connection->prepare($sql);
            $query_statement->bindParam(':_id', $id);
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
                header('Location: ' . BASE_URL . 'edit-post/' . $id);
                exit();
            } else {
                $_SESSION["exception_message"] = Global_DB_Error;
                header('Location: ' . BASE_URL . 'edit-post/' . $id);
                exit();
            }
        }
    }

 /*
     * @Author              : TT 
     * @Developed By        : TalhaTraining
     * @Route               : 'update_post'
     * @Description         : This function is used for show mange_post page
     * @view                : "views/admin_view/post/edit_post.php" 
     * @Parameter           : $viewName[STRING] 
     * @Status              : active
     * @version             : v1.0         
*/
    public function update_post_DB($data){
         try {
            $obj_db_connection = new DB_connection();
            $connection = $obj_db_connection->connectDB();
            $check_file = $_FILES['image']['name'];
            if (!empty($check_file)) {
                $currentDir = getcwd();    //base directory of file to uploaded
                $uploadDirectory = "/resources/backend2/post_images/";   //file upload destination directory
                $fileExtension = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);  //get file extension
                $fileExtension = strtolower($fileExtension);
                $fileName = random_generator5() . date('mdHis') . '.' . $fileExtension;    //new file name
                $fileSize = $_FILES['image']['size']; //get file size
                $fileTmpName = $_FILES['image']['tmp_name'];  //get file tmp name**
                $fileType = $_FILES['image']['type'];    //get file type
                $uploadPath = $currentDir . $uploadDirectory . basename($fileName); //file uploading full path
                
                if ($fileExtension == 'jpg' || $fileExtension == 'jpeg' || $fileExtension == 'png') {
                    if ($fileSize < 5000000) {
                        $success = move_uploaded_file($fileTmpName, $uploadPath);  //upload file to directory

                        if (isset($data['last_image'])) {
                            $old_file_path = $data['last_image'];
                            unlink('resources/backend2/post_images/' . $old_file_path);
                        }
                        $data['image'] = $fileName;
                    } else {
                        if (session_status() !== PHP_SESSION_ACTIVE) {
                            session_start();
                        }
                        $_SESSION["err_message"] = Global_File_Size_Too_Large;
                        header('Location: ' . BASE_URL . 'edit-post/' . $data['id']);
                    }
                } else {
//                    echo 'Yes'.$data['brand_id'];
//                    exit();
                    if (session_status() !== PHP_SESSION_ACTIVE) {
                            session_start();
                        }
                    $_SESSION["err_message"] = Global_File_Type_Not_Supported;
                    header('Location: ' . BASE_URL . 'edit-post/' . $data['id']);
                    exit();
                }
            } else {
                $data['image'] = $data['last_image'];
            }
            
            $sql = "UPDATE posts SET title = :_title,content = :_content,description = :_description,category_id = :_category_id, 
            sub_category_id = :_sub_category_id, published_at = :_published_at, image = :_image where id = :_id ";
            $query_statement = $connection->prepare($sql);

            $query_statement->bindParam(':_title', $data['title']);
            $query_statement->bindParam(':_content', $data['content']);
            $query_statement->bindParam(':_description', $data['description']);
            $query_statement->bindParam(':_category_id', $data['category_id']);
            $query_statement->bindParam(':_sub_category_id', $data['sub_category_id']);
            $query_statement->bindParam(':_published_at', $data['published_at']);
            $query_statement->bindParam(':_image', $data['image']);
            $query_statement->bindParam(':_id', $data['id']);

            $obj_db_connection->connect_db_close();
            $result = $query_statement->execute();
            return $result;
        } catch (Exception $e) {
            if (session_status() !== PHP_SESSION_ACTIVE) {
                session_start();
                $_SESSION["exception_message"] = Global_DB_Error;
                header('Location: ' . BASE_URL . 'edit-brand/' . $data['id']);
                exit();
            } else {
                $_SESSION["exception_message"] = Global_DB_Error;
                header('Location: ' . BASE_URL . 'edit-brand/' . $data['id']);
                exit();
            }
        }

    }

    /*
     * @Author              : TT 
     * @Developed By        : TalhaTraining
     * @Route               : 'unpublish_post_status'
     * @Description         : This function is used for unpublished status
     * @view                : "views/admin_view/post/manage_post.php" 
     * @Parameter           : $viewName[STRING] 
     * @Status              : active
     * @version             : v1.0         
*/

    public static function unpublish_post_status_from_DB($id) {
        try {
            $obj_db_connection = new DB_connection();
            $connection = $obj_db_connection->connectDB();

            $sql = "UPDATE  posts set status = '0' where id = :_subcategoryId ";
            $query_statement = $connection->prepare($sql);
            $query_statement->bindParam(':_subcategoryId', $id);
            $result = $query_statement->execute();
            $obj_db_connection->connect_db_close();
            return $result;

        } catch (Exception $e) {
            if (session_status() !== PHP_SESSION_ACTIVE) {
                session_start();
                $_SESSION["exception_message"] = Global_DB_Error;
                header('Location: ' . BASE_URL . 'manage-post');
                exit();
            } else {
                $_SESSION["exception_message"] = Global_DB_Error;
                header('Location: ' . BASE_URL . 'manage-post');
                exit();
            }
        }
    }

/*
     * @Author              : TT 
     * @Developed By        : TalhaTraining
     * @Route               : 'publish_post_status'
     * @Description         : This function is used for published status
     * @view                : "views/admin_view/post/manage_post.php" 
     * @Parameter           : $viewName[STRING] 
     * @Status              : active
     * @version             : v1.0         
*/
       public static function publish_post_status_from_DB($id) {
        try {
            $obj_db_connection = new DB_connection();
            $connection = $obj_db_connection->connectDB();

            $sql = "UPDATE  posts set status = '1' where id = :_subcategoryId ";
            $query_statement = $connection->prepare($sql);
            $query_statement->bindParam(':_subcategoryId', $id);
            $result = $query_statement->execute();
            $obj_db_connection->connect_db_close();
            return $result;

        } catch (Exception $e) {
            if (session_status() !== PHP_SESSION_ACTIVE) {
                session_start();
                $_SESSION["exception_message"] = Global_DB_Error;
                header('Location: ' . BASE_URL . 'manage-post');
                exit();
            } else {
                $_SESSION["exception_message"] = Global_DB_Error;
                header('Location: ' . BASE_URL . 'manage-post');
                exit();
            }
        }
    }


   
}