<?php



require './models/PostManageModel.php';

class PostManageController extends MainController{

/*
     * @Author              : TT 
     * @Developed By        : TalhaTraining
     * @Route               : 'add_post'
     * @Description         : This function is used for show admin post page
     * @view                : "views/admin_view/post/create_post.php" 
     * @Parameter           : $viewName[STRING] 
     * @Status              : active
     * @version             : v1.0         
*/

   public static function add_post($viewName){
   	require "views/admin_view/$viewName.php";
   }

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

   public static function get_all_category_name() {
        $obj_user_subcategory_model = new PostManageModel();
        $data = $obj_user_subcategory_model->get_all_category_name_from_CategoryDB();
        return $data;
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

    public static function get_all_sub_category_name(){
        $obj_user_subcategory_model = new PostManageModel();
        $data = $obj_user_subcategory_model->get_all_sub_category_name_from_CategoryDB();
        return $data;
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

   public static function get_all_subcategory_for_post_add_by_category() {
        $category_id = $_GET['category_id'];
        $obj_post_manage_model = new PostManageModel();
        $subcategory_names = $obj_post_manage_model->get_all_subcategory_for_post_add_by_category_from_DB($category_id);
        foreach ($subcategory_names as $v_subcategory_names) {
            echo '<option value="' . $v_subcategory_names['id'] . '">' . $v_subcategory_names['sub_category_name'] . '</option>';
        }
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

    public static function save_post(){

    	try {
    		$data = array();
    		$data['title'] = $_POST['title'];
	    	$data['description'] = $_POST['description'];
	    	$data['content'] = $_POST['content'];
	    	$data['category_id'] = $_POST['category_id'];
	    	$data['sub_category_id'] = $_POST['sub_category_id'];
	    	$data['published_at'] = $_POST['published_at'];



	    	$obj_post_model = new PostManageModel();
	    	$check_result = $obj_post_model->save_post_db($data);
	    	
	    	if ($check_result) {
                if (session_status() !== PHP_SESSION_ACTIVE) {
                    session_start();
                    $_SESSION["success_message"] = Global_Data_Insert_Success;
                    header('Location: ' . BASE_URL . 'add-post');
                    //exit();
                } else {
                    $_SESSION["success_message"] = Global_Data_Insert_Success;
                    header('Location: ' . BASE_URL . 'add-post');
                    //exit();
                }
            } else {
                if (session_status() !== PHP_SESSION_ACTIVE) {
                    session_start();
                    $_SESSION["err_message"] = Global_Data_Insert_Failed;
                    header('Location: ' . BASE_URL . 'add-post');
                    //exit();
                } else {
                    $_SESSION["err_message"] = Global_Data_Insert_Failed;
                    header('Location: ' . BASE_URL . 'add-post');
                    //exit();
                }
            }
    		
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
     * @Description         : This function is used for show mange_post page
     * @view                : "views/admin_view/post/manage_post.php" 
     * @Parameter           : $viewName[STRING] 
     * @Status              : active
     * @version             : v1.0         
*/

    public static function manage_post($viewName){
         require "views/admin_view/$viewName.php";
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

     public static function get_all_post(){
        $get_post_model = new PostManageModel();
        $all_post = $get_post_model->get_all_post_db();
        return $all_post;
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
      public static function edit_post($id, $viewName) {
        $obj_post_model = new PostManageModel();
        $result_edit_post = $obj_post_model->edit_post_from_DB($id);

        require "views/admin_view/$viewName.php";
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

    public static function update_post(){
        try {
            $data = array();
            $data['id'] = $_POST['id'];
            $data['title'] = $_POST['title'];
            $data['description'] = $_POST['description'];
            $data['content'] = $_POST['content'];
            $data['category_id'] = $_POST['category_id'];
            $data['sub_category_id'] = $_POST['sub_category_id'];
            $data['published_at'] = $_POST['published_at'];
            $data['last_image'] = $_POST['last_image'];
            
            if (empty($data['title']) || empty($data['description']) || empty($data['content']) || empty($data['category_id']) || empty($data['sub_category_id']) || empty($data['published_at'])) {

               if (session_status() !== PHP_SESSION_ACTIVE) {
                    session_start();
                }
                    $_SESSION["err_message"] = Global_Data_Update_Failed;
                    header('Location: ' . BASE_URL . 'edit-post/' . $data['id']);
                    exit();
            }



            $obj_post_manage_model = new PostManageModel();
            $check_result = $obj_post_manage_model->update_post_DB($data);

            if ($check_result) {
                if (session_status() !== PHP_SESSION_ACTIVE) {
                    session_start();
                }
                    $_SESSION["success_message"] = Global_Data_Update_Success;
                    header('Location: ' . BASE_URL . 'edit-post/' . $data['id']);
                    //exit();
            } else {
                if (session_status() !== PHP_SESSION_ACTIVE) {
                    session_start();
                }
                    $_SESSION["err_message"] = Global_Data_Update_Failed;
                    header('Location: ' . BASE_URL . 'edit-post/' . $data['id']);
                    //exit();
            }
        } catch (Exception $e) {
            if (session_status() !== PHP_SESSION_ACTIVE) {
                session_start();
            }
                $_SESSION["exception_message"] = Global_DB_Error;
                header('Location: ' . BASE_URL . 'edit-post/' . $data['id']);
                exit();
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
     public static function unpublish_post_status($id) {

        $obj_user_post_model = new PostManageModel();
        $result = $obj_user_post_model->unpublish_post_status_from_DB($id);

        if ($result) {
            if (session_status() !== PHP_SESSION_ACTIVE) {
                session_start();
                $_SESSION["success_message"] = Global_Status_Updated;
                header('Location: ' . BASE_URL . 'manage-post');
                //exit();
            } else {
                $_SESSION["success_message"] = Global_Status_Updated;
                header('Location: ' . BASE_URL . 'manage-post');
                //exit();
            }
        } else {
            if (session_status() !== PHP_SESSION_ACTIVE) {
                session_start();
                $_SESSION["err_message"] = Global_Status_Not_Updated;
                header('Location: ' . BASE_URL . 'manage-post');
                //exit();
            } else {
                $_SESSION["err_message"] = Global_Status_Not_Updated;
                header('Location: ' . BASE_URL . 'manage-post');
                //exit();
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

      public static function publish_post_status($id) {

        $obj_user_post_model = new PostManageModel();
        $result = $obj_user_post_model->publish_post_status_from_DB($id);

        if ($result) {
            if (session_status() !== PHP_SESSION_ACTIVE) {
                session_start();
                $_SESSION["success_message"] = Global_Status_Updated;
                header('Location: ' . BASE_URL . 'manage-post');
                //exit();
            } else {
                $_SESSION["success_message"] = Global_Status_Updated;
                header('Location: ' . BASE_URL . 'manage-post');
                //exit();
            }
        } else {
            if (session_status() !== PHP_SESSION_ACTIVE) {
                session_start();
                $_SESSION["err_message"] = Global_Status_Not_Updated;
                header('Location: ' . BASE_URL . 'manage-post');
                //exit();
            } else {
                $_SESSION["err_message"] = Global_Status_Not_Updated;
                header('Location: ' . BASE_URL . 'manage-post');
                //exit();
            }
        }
    }

}