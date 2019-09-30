<?php

/**
 * Description of CategoryManageController

 */

require './models/CategoryManageModel.php';

class CategoryManageController extends MainController{
    
/*
     * @Author              : TT 
     * @Developed By        : TalhaTraining
     * @Route               : 'add_category'
     * @Description         : This function is used for the category view
     * @view                : "views/admin_view/pages/category/create_category.php" 
     * @Parameter           : $viewName[STRING] 
     * @Status              : active
     * @version             : v1.0         
*/

    public static function add_category($viewName) {
        require "views/admin_view/$viewName.php";
    }

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

    public static function save_category() {
        try {
            $data = array();
            $data['name'] = $_POST['name'];

            if (empty($data['name'])) {
                   if (session_status() !== PHP_SESSION_ACTIVE) {
                    session_start();
                }
                    $_SESSION["err_message"] = Global_Data_Insert_Failed;
                    header('Location: ' . BASE_URL . 'add-category');
                    exit();
            }
            // $data['category_activation_status'] = $_POST['category_activation_status'];
            // $data['last_category_image'] = $_POST['last_category_image'];

            $obj_user_category_model = new CategoryManageModel();
            $check_result = $obj_user_category_model->save_category_DB($data);

            if ($check_result) {
                if (session_status() !== PHP_SESSION_ACTIVE) {
                    session_start();
                }
                    $_SESSION["success_message"] = Global_Data_Insert_Success;
                    header('Location: ' . BASE_URL . 'manage-category');
                    //exit();
            } else {
                if (session_status() !== PHP_SESSION_ACTIVE) {
                    session_start();
                }
                    $_SESSION["err_message"] = Global_Data_Insert_Failed;
                    header('Location: ' . BASE_URL . 'add-category');
                    //exit();
            }
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

    public static function get_all_category() {
        $obj_user_category_model = new CategoryManageModel();
        $admin_data = $obj_user_category_model->get_all_category_from_DB();
        return $admin_data;
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

    public static function unpublish_category_status($id) {

        $obj_user_category_model = new CategoryManageModel();
        $result = $obj_user_category_model->unpublish_category_status_from_DB($id);

        if ($result) {
            if (session_status() !== PHP_SESSION_ACTIVE) {
                session_start();
            }
                $_SESSION["success_message"] = Global_Status_Updated;
                header('Location: ' . BASE_URL . 'manage-category');
                //exit();
        } else {
            if (session_status() !== PHP_SESSION_ACTIVE) {
                session_start();
            }
                $_SESSION["err_message"] = Global_Status_Not_Updated;
                header('Location: ' . BASE_URL . 'manage-category');
                //exit();
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

    public static function publish_category_status($id) {
        $obj_user_category_model = new CategoryManageModel();
        $result = $obj_user_category_model->publish_category_status_from_DB($id);

        if ($result) {
            if (session_status() !== PHP_SESSION_ACTIVE) {
                session_start();
            }
                $_SESSION["success_message"] = Global_Status_Updated;
                header('Location: ' . BASE_URL . 'manage-category');
                //exit();
        } else {
            if (session_status() !== PHP_SESSION_ACTIVE) {
                session_start();
            }
                $_SESSION["err_message"] = Global_Status_Not_Updated;
                header('Location: ' . BASE_URL . 'manage-category');
                //exit();
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
   

    public static function edit_category($id, $viewName) {
        $obj_user_category_model = new CategoryManageModel();
        $result = $obj_user_category_model->edit_category_from_DB($id);

        require "views/admin_view/$viewName.php";
    }

    public static function delete_category($id) {
        $obj_user_category_model = new CategoryManageModel();
        $del_result = $obj_user_category_model->delete_category_from_DB($id);
        //return $result;
         if ($del_result) {
                if (session_status() !== PHP_SESSION_ACTIVE) {
                    session_start();
                }
                    $_SESSION["success_message"] = Global_Data_Deleted_Success;
                    header('Location: ' . BASE_URL . 'manage-category');
                    //exit();
            } else {
                if (session_status() !== PHP_SESSION_ACTIVE) {
                    session_start();
                }
                    $_SESSION["err_message"] = Global_Data_Deleted_Failed;
                    header('Location: ' . BASE_URL . 'manage-category');
                    //exit();
            }
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

    public static function update_category() {
        try {
            $data = array();
            $data['id'] = $_POST['id'];
            $data['name'] = $_POST['name'];

            if (empty($data['name'])) {
               if (session_status() !== PHP_SESSION_ACTIVE) {
                    session_start();
                }
                    $_SESSION["err_message"] = Global_Data_Update_Failed;
                    header('Location: ' . BASE_URL . 'edit-category/' . $data['id']);
                    exit();
            }
            // $data['last_category_image'] = $_POST['last_category_image'];
            
            $obj_user_category_model = new CategoryManageModel();
            $check_result = $obj_user_category_model->update_category_DB($data);

            if ($check_result) {
                if (session_status() !== PHP_SESSION_ACTIVE) {
                    session_start();
                }
                    $_SESSION["success_message"] = Global_Data_Update_Success;
                    header('Location: ' . BASE_URL . 'edit-category/' . $data['id']);
                    //exit();
            } else {
                if (session_status() !== PHP_SESSION_ACTIVE) {
                    session_start();
                }
                    $_SESSION["err_message"] = Global_Data_Update_Failed;
                    header('Location: ' . BASE_URL . 'edit-category/' . $data['id']);
                    //exit();
            }
        } catch (Exception $e) {
            if (session_status() !== PHP_SESSION_ACTIVE) {
                session_start();
            }
                $_SESSION["exception_message"] = Global_DB_Error;
                header('Location: ' . BASE_URL . 'edit-category/' . $data['id']);
                exit();
        }
    }

    
 /*
     * @Author              : TT 
     * @Developed By        : TalhaTraining
     * @Route               : 'manage_category'
     * @Description         : This function is used for the all category list page show .
     * @view                : "views/admin_view/pages/category/manage_category.php" 
     * @Parameter           : $viewName[STRING] 
     * @Status              : active
     * @version             : v1.0         
*/
    public static function manage_category($viewName) {
        require "views/admin_view/$viewName.php";
    }
    
}
