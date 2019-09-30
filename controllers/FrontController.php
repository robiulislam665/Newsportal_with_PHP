<?php
require './models/FrontModel.php';

class FrontController extends MainController{

/*
     * @Author              : TT 
     * @Developed By        : TalhaTraining
     * @Route               : 'index'
     * @Description         : This function is used view website front index page
     * @view                : "views/front_view/front_master.php" 
     * @Parameter           : $viewName[STRING] 
     * @Status              : active
     * @version             : v1.0         
*/
	public static function index($viewName){
		require "views/front_view/$viewName.php";
	}

    //test
    public static function test_view($testName){
        require "views/front_view/$testName.php";   
    }






/*
     * @Author              : TT 
     * @Developed By        : TalhaTraining
     * @Route               : 'all_post'
     * @Description         : This function is used for get all post from database
     * @view                : "views/front_view/front_master_content.php" 
     * @Parameter           : $viewName[STRING] 
     * @Status              : active
     * @version             : v1.0         
*/

    public static function all_post(){
    	$front_model = new FrontModel();
		$result_limit_headline = $front_model->all_post_db();
		return $result_limit_headline;
    }


/*
     * @Author              : TT 
     * @Developed By        : TalhaTraining
     * @Route               : 'get_limit_headline'
     * @Description         : This function is used for get headline name (category name) from database limit 5
     * @view                : "views/front_view/front_header_panel.php" 
     * @Parameter           : $viewName[STRING] 
     * @Status              : active
     * @version             : v1.0         
*/
	public static function get_limit_headline(){
		$front_model = new FrontModel();
		$result_limit_headline = $front_model->get_limit_headline_db();
		return $result_limit_headline;

	}

/*
     * @Author              : TT 
     * @Developed By        : TalhaTraining
     * @Route               : 'get_limit_headline'
     * @Description         : This function is used for get headline name (category name) from database.
     * @view                : "views/front_view/front_header_panel.php" 
     * @Parameter           : $viewName[STRING] 
     * @Status              : active
     * @version             : v1.0         
*/

	public static function get_all_headline(){
		$front_model = new FrontModel();
		$result_all_headline  = $front_model->get_all_headline_db();
		return $result_all_headline;
	}


    /*
     * @Author              : TT 
     * @Developed By        : TalhaTraining
     * @Route               : 'get_limit_headline'
     * @Description         : This function is used for get sub category name from database
     * @view                : "views/front_view/front_master_content.php" 
     * @Parameter           : $viewName[STRING] 
     * @Status              : active
     * @version             : v1.0         
*/

	public static function get_sub_categoey_rand(){

		$get_sub_category = new FrontModel();
		$result_get_sub_cetagory = $get_sub_category->get_sub_categoey_rand_db();
		return $result_get_sub_cetagory;
	}


 /*
     * @Author              : TT 
     * @Developed By        : TalhaTraining
     * @Route               : 'get_limit_headline'
     * @Description         : This function is used for show first category name.
     * @view                : "views/front_view/front_master_content.php" 
     * @Parameter           : $viewName[STRING] 
     * @Status              : active
     * @version             : v1.0         
*/

 /************** Fisrst Category name**************/

 public static function first_category_name(){
 	$obj_front_model = new FrontModel();
    $get_result = $obj_front_model->first_category_name_db();
    return $get_result;
 }

 /*
     * @Author              : TT 
     * @Developed By        : TalhaTraining
     * @Route               : 'get_limit_headline'
     * @Description         : This function is used for show second category name
     * @view                : "views/front_view/front_master_content.php" 
     * @Parameter           : $viewName[STRING] 
     * @Status              : active
     * @version             : v1.0         
*/

 /***** Second categoryname*************/

 public static function second_category_name(){
 	$obj_front_model = new FrontModel();
    $get_result = $obj_front_model->second_category_name_db();
    return $get_result;
 }

 /*
     * @Author              : TT 
     * @Developed By        : TalhaTraining
     * @Route               : 'get_limit_headline'
     * @Description         : This function is used for show all post from first category
     * @view                : "views/front_view/front_master_content.php" 
     * @Parameter           : $viewName[STRING] 
     * @Status              : active
     * @version             : v1.0         
*/

 /************ get all post for category first ***********/

 public static function get_all_post_from_category_first(){
 	$obj_front_model = new FrontModel();
    $get_result = $obj_front_model->get_all_post_from_category_first_db();
    return $get_result;
 }

 /*
     * @Author              : TT 
     * @Developed By        : TalhaTraining
     * @Route               : 'get_limit_headline'
     * @Description         : This function is used for show all post from second category
     * @view                : "views/front_view/front_master_content.php" 
     * @Parameter           : $viewName[STRING] 
     * @Status              : active
     * @version             : v1.0         
*/

 /****** get all post for category second ******/

public static function get_all_post_from_category_second(){
 	$obj_front_model = new FrontModel();
    $get_result = $obj_front_model->get_all_post_from_category_second_db();
    return $get_result;
 }



/*
     * @Author              : TT 
     * @Developed By        : TalhaTraining
     * @Route               : 'get_limit_headline'
     * @Description         : This function is used for show thirt category name
     * @view                : "views/front_view/front_master_content.php" 
     * @Parameter           : $viewName[STRING] 
     * @Status              : active
     * @version             : v1.0         
*/
/**********thirt category name ***********/

 public static function thirt_category_name(){
 	$obj_front_model = new FrontModel();
    $get_result = $obj_front_model->thirt_category_name_db();
    return $get_result;
 }


/*
     * @Author              : TT 
     * @Developed By        : TalhaTraining
     * @Route               : 'get_limit_headline'
     * @Description         : This function is used for show all post from thirt category
     * @view                : "views/front_view/front_master_content.php" 
     * @Parameter           : $viewName[STRING] 
     * @Status              : active
     * @version             : v1.0         
*/
 /************get all post category thirt  ***********/

 public static function get_all_post_from_category_thirt(){
 	$obj_front_model = new FrontModel();
    $get_result = $obj_front_model->get_all_post_from_category_thirt_db();
    return $get_result;
 }


/*
     * @Author              : TT 
     * @Developed By        : TalhaTraining
     * @Route               : 'get_limit_headline'
     * @Description         : This function is used for show four category name
     * @view                : "views/front_view/front_master_content.php" 
     * @Parameter           : $viewName[STRING] 
     * @Status              : active
     * @version             : v1.0         
*/
 /******* fourth category name *****/

public static function four_category_name(){
 	$obj_front_model = new FrontModel();
    $get_result = $obj_front_model->four_category_name_db();
    return $get_result;
 }

/*
     * @Author              : TT 
     * @Developed By        : TalhaTraining
     * @Route               : 'get_limit_headline'
     * @Description         : This function is used for show all post from four category
     * @view                : "views/front_view/front_master_content.php" 
     * @Parameter           : $viewName[STRING] 
     * @Status              : active
     * @version             : v1.0         
*/
 /************get all post category four  ***********/

 public static function get_all_post_from_category_four(){
 	$obj_front_model = new FrontModel();
    $get_result = $obj_front_model->get_all_post_from_category_four_db();
    return $get_result;
 }


/*
     * @Author              : TT 
     * @Developed By        : TalhaTraining
     * @Route               : 'get_limit_headline'
     * @Description         : This function is used for show five category name
     * @view                : "views/front_view/front_master_content.php" 
     * @Parameter           : $viewName[STRING] 
     * @Status              : active
     * @version             : v1.0         
*/
 /******* five category name *****/

public static function five_category_name(){
 	$obj_front_model = new FrontModel();
    $get_result = $obj_front_model->five_category_name_db();
    return $get_result;
 }


/*
     * @Author              : TT 
     * @Developed By        : TalhaTraining
     * @Route               : 'get_limit_headline'
     * @Description         : This function is used for show all post from five category
     * @view                : "views/front_view/front_master_content.php" 
     * @Parameter           : $viewName[STRING] 
     * @Status              : active
     * @version             : v1.0         
*/
  /************get all post category five  ***********/
 public static function get_all_post_from_category_five(){
 	$obj_front_model = new FrontModel();
    $get_result = $obj_front_model->get_all_post_from_category_five_db();
    return $get_result;
 }


 /*
     * @Author              : TT 
     * @Developed By        : TalhaTraining
     * @Route               : 'get_limit_headline'
     * @Description         : This function is used for show six category name
     * @view                : "views/front_view/front_master_content.php" 
     * @Parameter           : $viewName[STRING] 
     * @Status              : active
     * @version             : v1.0         
*/

 /******* six category name *****/
public static function six_category_name(){
 	$obj_front_model = new FrontModel();
    $get_result = $obj_front_model->six_category_name_db();
    return $get_result;
 }


/*
     * @Author              : TT 
     * @Developed By        : TalhaTraining
     * @Route               : 'get_limit_headline'
     * @Description         : This function is used for show all post from six category
     * @view                : "views/front_view/front_master_content.php" 
     * @Parameter           : $viewName[STRING] 
     * @Status              : active
     * @version             : v1.0         
*/
  /************get all post category six  ***********/
 public static function get_all_post_from_category_six(){
 	$obj_front_model = new FrontModel();
    $get_result = $obj_front_model->get_all_post_from_category_six_db();
    return $get_result;
 }


 /*
     * @Author              : TT 
     * @Developed By        : TalhaTraining
     * @Route               : 'get_limit_headline'
     * @Description         : This function is used for show seven category name
     * @view                : "views/front_view/front_master_content.php" 
     * @Parameter           : $viewName[STRING] 
     * @Status              : active
     * @version             : v1.0         
*/

 /******* seven category name *****/
public static function seven_category_name(){
 	$obj_front_model = new FrontModel();
    $get_result = $obj_front_model->seven_category_name_db();
    return $get_result;
 }


/*
     * @Author              : TT 
     * @Developed By        : TalhaTraining
     * @Route               : 'get_limit_headline'
     * @Description         : This function is used for show all post from seven category
     * @view                : "views/front_view/front_master_content.php" 
     * @Parameter           : $viewName[STRING] 
     * @Status              : active
     * @version             : v1.0         
*/
  /************get all post category seven  ***********/
 public static function get_all_post_from_category_seven(){
 	$obj_front_model = new FrontModel();
    $get_result = $obj_front_model->get_all_post_from_category_seven_db();
    return $get_result;
 }


/*
     * @Author              : TT 
     * @Developed By        : TalhaTraining
     * @Route               : 'get_limit_headline'
     * @Description         : This function is used for show eight category name
     * @view                : "views/front_view/front_master_content.php" 
     * @Parameter           : $viewName[STRING] 
     * @Status              : active
     * @version             : v1.0         
*/
 /******* eight category name *****/
public static function eight_category_name(){
 	$obj_front_model = new FrontModel();
    $get_result = $obj_front_model->eight_category_name_db();
    return $get_result;
 }


/*
     * @Author              : TT 
     * @Developed By        : TalhaTraining
     * @Route               : 'get_limit_headline'
     * @Description         : This function is used for show all post from eight category
     * @view                : "views/front_view/front_master_content.php" 
     * @Parameter           : $viewName[STRING] 
     * @Status              : active
     * @version             : v1.0         
*/
 /************get all post category eight  ***********/
 public static function get_all_post_from_category_eight(){
 	$obj_front_model = new FrontModel();
    $get_result = $obj_front_model->get_all_post_from_category_eight_db();
    return $get_result;
 }


 /*
     * @Author              : TT 
     * @Developed By        : TalhaTraining
     * @Route               : 'get_limit_headline'
     * @Description         : This function is used for show nine category name
     * @view                : "views/front_view/front_master_content.php" 
     * @Parameter           : $viewName[STRING] 
     * @Status              : active
     * @version             : v1.0         
*/

  /******* nine category name *****/
public static function nine_category_name(){
 	$obj_front_model = new FrontModel();
    $get_result = $obj_front_model->nine_category_name_db();
    return $get_result;
 }


 /*
     * @Author              : TT 
     * @Developed By        : TalhaTraining
     * @Route               : 'get_limit_headline'
     * @Description         : This function is used for show all post from nine category
     * @view                : "views/front_view/front_master_content.php" 
     * @Parameter           : $viewName[STRING] 
     * @Status              : active
     * @version             : v1.0         
*/
 /************get all post category nine  ***********/
 public static function get_all_post_from_category_nine(){
 	$obj_front_model = new FrontModel();
    $get_result = $obj_front_model->get_all_post_from_category_nine_db();
    return $get_result;
 }



/*
     * @Author              : TT 
     * @Developed By        : TalhaTraining
     * @Route               : 'get_limit_headline'
     * @Description         : This function is used for show details page
     * @view                : "views/front_view/pages/details.php" 
     * @Parameter           : $viewName[STRING] 
     * @Status              : active
     * @version             : v1.0         
*/
 public static function details_posts($id, $viewName) {


        $obj_user_details_post_model = new FrontModel();
        $news_details = $obj_user_details_post_model->details_posts_db($id);
        /*echo '<pre>';
        print_r($news_details);
        exit();*/
        require "views/front_view/$viewName.php";
    }

    //category_wise_view
    public static function category_wise_post($id, $categoryWisePost){
        $obj_user_category_post_model = new FrontModel();
        $news_category_wise_post = $obj_user_category_post_model->category_wise_posts_db($id);

        require "views/front_view/$categoryWisePost.php";
    } 

/*
     * @Author              : TT 
     * @Developed By        : TalhaTraining
     * @Route               : 'get_limit_headline'
     * @Description         : This function is used for show category name in the details page
     * @view                : "views/front_view/pages/details.php" 
     * @Parameter           : $viewName[STRING] 
     * @Status              : active
     * @version             : v1.0         
*/
    public static function category_name_details_page_wise($id)
    {

        $obj_category_name_details_page_wise = new FrontModel();
        $cat_name_details_page = $obj_category_name_details_page_wise->category_name_details_page_wise_db($id);
        return  $cat_name_details_page;
    }


}