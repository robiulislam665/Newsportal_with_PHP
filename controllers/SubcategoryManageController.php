<?php

/**
 * Description of SubcategoryManageController

 */

require './models/SubcategoryManageModel.php';

class SubcategoryManageController extends MainController{
    
 /*
     * @Author              : TT 
     * @Developed By        : TalhaTraining
     * @Route               : 'add_subcategory'
     * @Description         : This function is used for show create sub category page
     * @view                : "views/admin_view/subcategory/create_subcategory.php" 
     * @Parameter           : $viewName[STRING] 
     * @Status              : active
     * @version             : v1.0         
*/


    public static function add_subcategory($viewName) {
        require "views/admin_view/$viewName.php";
    }

    
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
    public static function save_subcategory() {
        try {
            $data = array();
            
            $data['category_id'] = $_POST['category_id'];
            $data['sub_category_name'] = $_POST['sub_category_name'];
            if(empty($data['category_id']) || empty($data['sub_category_name'])){
                if (session_status() !== PHP_SESSION_ACTIVE) {
                    session_start();
                    $_SESSION["err_message"] = Global_Data_Insert_Failed;
                    header('Location: ' . BASE_URL . 'add-subcategory');
                }
                    exit();

            }

            $obj_user_subcategory_model = new SubcategoryManageModel();
            $check_result = $obj_user_subcategory_model->save_subcategory_DB($data);

            if ($check_result) {
                if (session_status() !== PHP_SESSION_ACTIVE) {
                    session_start();
                    $_SESSION["success_message"] = Global_Data_Insert_Success;
                    header('Location: ' . BASE_URL . 'add-subcategory');
                    //exit();
                } else {
                    $_SESSION["success_message"] = Global_Data_Insert_Success;
                    header('Location: ' . BASE_URL . 'manage-subcategory');
                    //exit();
                }
            } else {
                if (session_status() !== PHP_SESSION_ACTIVE) {
                    session_start();
                    $_SESSION["err_message"] = Global_Data_Insert_Failed;
                    header('Location: ' . BASE_URL . 'add-subcategory');
                    //exit();
                } else {
                    $_SESSION["err_message"] = Global_Data_Insert_Failed;
                    header('Location: ' . BASE_URL . 'add-subcategory');
                    //exit();
                }
            }
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

    public static function get_all_subcategory() {
        $obj_user_subcategory_model = new SubcategoryManageModel();
        $admin_data = $obj_user_subcategory_model->get_all_subcategory_from_DB();
        return $admin_data;
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

    public static function get_all_category_name() {
        $obj_user_subcategory_model = new SubcategoryManageModel();
        $data = $obj_user_subcategory_model->get_all_category_name_from_CategoryDB();
        return $data;
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

    public static function get_category_name_by_category_id($id) {
        $obj_user_subcategory_model = new SubcategoryManageModel();
        $data = $obj_user_subcategory_model->get_category_name_by_category_id_from_DB($id);
        return $data;
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
    

    public static function unpublish_subcategory_status($id) {

        $obj_user_subcategory_model = new SubcategoryManageModel();
        $result = $obj_user_subcategory_model->unpublish_subcategory_status_from_DB($id);

        if ($result) {
            if (session_status() !== PHP_SESSION_ACTIVE) {
                session_start();
                $_SESSION["success_message"] = Global_Status_Updated;
                header('Location: ' . BASE_URL . 'manage-subcategory');
                //exit();
            } else {
                $_SESSION["success_message"] = Global_Status_Updated;
                header('Location: ' . BASE_URL . 'manage-subcategory');
                //exit();
            }
        } else {
            if (session_status() !== PHP_SESSION_ACTIVE) {
                session_start();
                $_SESSION["err_message"] = Global_Status_Not_Updated;
                header('Location: ' . BASE_URL . 'manage-subcategory');
                //exit();
            } else {
                $_SESSION["err_message"] = Global_Status_Not_Updated;
                header('Location: ' . BASE_URL . 'manage-subcategory');
                //exit();
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

    public static function publish_subcategory_status($id) {
        $obj_user_subcategory_model = new SubcategoryManageModel();
        $result = $obj_user_subcategory_model->publish_subcategory_status_from_DB($id);

        if ($result) {
            if (session_status() !== PHP_SESSION_ACTIVE) {
                session_start();
                $_SESSION["success_message"] = Global_Status_Updated;
                header('Location: ' . BASE_URL . 'manage-subcategory');
                //exit();
            } else {
                $_SESSION["success_message"] = Global_Status_Updated;
                header('Location: ' . BASE_URL . 'manage-subcategory');
                //exit();
            }
        } else {
            if (session_status() !== PHP_SESSION_ACTIVE) {
                session_start();
                $_SESSION["err_message"] = Global_Status_Not_Updated;
                header('Location: ' . BASE_URL . 'manage-subcategory');
                //exit();
            } else {
                $_SESSION["err_message"] = Global_Status_Not_Updated;
                header('Location: ' . BASE_URL . 'manage-subcategory');
                //exit();
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
    

    public static function edit_subcategory($id, $viewName) {
        $obj_user_subcategory_model = new SubcategoryManageModel();
        $result = $obj_user_subcategory_model->edit_subcategory_from_DB($id);


        require "views/admin_view/$viewName.php";
    }


    public static function delete_subcategory($id){
        $obj_user_subcategory_model = new SubcategoryManageModel();
        $del_result = $obj_user_subcategory_model->delete_subcategory_from_db($id);

        //return  $del_result;
         if ($del_result) {
                if (session_status() !== PHP_SESSION_ACTIVE) {
                    session_start();
                }
                    $_SESSION["success_message"] = Global_Data_Deleted_Success;
                    header('Location: ' . BASE_URL . 'manage-subcategory');
                    //exit();
            } else {
                if (session_status() !== PHP_SESSION_ACTIVE) {
                    session_start();
                }
                    $_SESSION["err_message"] = Global_Data_Deleted_Failed;
                    header('Location: ' . BASE_URL . 'manage-subcategory');
                    //exit();
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
    

    public static function update_subcategory() {
        try {
            $data['id'] = $_POST['id'];
            $data['category_id'] = $_POST['category_id'];
            $data['sub_category_name'] = $_POST['sub_category_name'];

            if (empty($data['category_id']) || empty($data['sub_category_name'])) {
                if (session_status() !== PHP_SESSION_ACTIVE) {
                    session_start();
                    $_SESSION["err_message"] = Global_Data_Update_Failed;
                    header('Location: ' . BASE_URL . 'edit-subcategory/' . $data['id']);
                }
                    exit();
            }
        
            
            $obj_user_subcategory_model = new SubcategoryManageModel();
            $check_result = $obj_user_subcategory_model->update_subcategory_DB($data);

            if ($check_result) {
                if (session_status() !== PHP_SESSION_ACTIVE) {
                    session_start();
                    $_SESSION["success_message"] = Global_Data_Update_Success;
                    header('Location: ' . BASE_URL . 'edit-subcategory/' . $data['id']);
                    //exit();
                } else {
                    $_SESSION["success_message"] = Global_Data_Update_Success;
                    header('Location: ' . BASE_URL . 'edit-subcategory/' . $data['id']);
                    //exit();
                }
            } else {
                if (session_status() !== PHP_SESSION_ACTIVE) {
                    session_start();
                    $_SESSION["err_message"] = Global_Data_Update_Failed;
                    header('Location: ' . BASE_URL . 'edit-subcategory/' . $data['id']);
                    //exit();
                } else {
                    $_SESSION["err_message"] = Global_Data_Update_Failed;
                    header('Location: ' . BASE_URL . 'edit-subcategory/' . $data['id']);
                 
                }
            }
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

    
    /*
     * @Author              : TT 
     * @Developed By        : TalhaTraining
     * @Route               : 'manage_subcategory'
     * @Description         : This function is used for the show manage sub category page
     * @view                : "views/admin_view/subcategory/manage_subcategory.php" 
     * @Parameter           : $viewName[STRING] 
     * @Status              : active
     * @version             : v1.0         
*/

    public static function manage_subcategory($viewName) {
        require "views/admin_view/$viewName.php";
    }
    

}
