<?php


require './models/DB_connection.php';
//require './library/helper.php';

class FrontModel {

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
    public static function all_post_db(){
        $obj_db_connection = new DB_connection();
            $connection = $obj_db_connection->connectDB();
            
            $sql = "SELECT * FROM posts WHERE status = '1'ORDER BY id DESC";
            $query_statement = $connection->prepare($sql);
            $query_statement->execute();
            $result = $query_statement->fetchAll();
            $obj_db_connection->connect_db_close();
            return $result;  

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

	public static function get_limit_headline_db(){

		   $obj_db_connection = new DB_connection();
            $connection = $obj_db_connection->connectDB();
            
            $sql = "SELECT * FROM categories WHERE status = '1' limit 7";
            $query_statement = $connection->prepare($sql);
            $query_statement->execute();
            $result = $query_statement->fetchAll();
            $obj_db_connection->connect_db_close();
            return $result;  
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

	public static function get_all_headline_db(){
	    $obj_db_connection = new DB_connection();
        $connection = $obj_db_connection->connectDB();
         $sql = "SELECT * FROM categories WHERE status = '1' ";
        $query_statement = $connection->prepare($sql);
        $query_statement->execute();
        $result = $query_statement->fetchAll();
        $obj_db_connection->connect_db_close();
        return $result; 

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

    public function get_sub_categoey_rand_db(){
        $obj_db_connection = new DB_connection();
        $connection = $obj_db_connection->connectDB();
        $sql = "SELECT * FROM sub_categories WHERE status = '1' ORDER BY RAND() LIMIT 7 ";
        $query_statement = $connection->prepare($sql);
        $query_statement->execute();
        $result = $query_statement->fetchAll();
        $obj_db_connection->connect_db_close();
        return $result;

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

    /**************first category name ***********/

    public static function first_category_name_db(){
        $obj_db_connection = new DB_connection();
        $connection = $obj_db_connection->connectDB();
        $sql = "SELECT * FROM categories WHERE  id = '1' AND status = '1'";
        $query_statement = $connection->prepare($sql);
        $query_statement->execute();
        $result = $query_statement->fetchAll();
        $obj_db_connection->connect_db_close();
        return $result;
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
    /******** second category name***********/

 public static function second_category_name_db(){
        $obj_db_connection = new DB_connection();
        $connection = $obj_db_connection->connectDB();
        $sql = "SELECT * FROM categories WHERE  id = '2' AND status = '1'";
        $query_statement = $connection->prepare($sql);
        $query_statement->execute();
        $result = $query_statement->fetchAll();
        $obj_db_connection->connect_db_close();
        return $result;
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
    /******** get all post from category first ********/ 

    public static function get_all_post_from_category_first_db(){

        $obj_db_connection = new DB_connection();
        $connection = $obj_db_connection->connectDB();
        $sql = "SELECT * FROM posts WHERE  category_id = '1' AND status = '1' ORDER BY id DESC";
        $query_statement = $connection->prepare($sql);
        $query_statement->execute();
        $result = $query_statement->fetchAll();
        $obj_db_connection->connect_db_close();
        return $result;
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
    /************* get all post from category second***********/

    public static function get_all_post_from_category_second_db(){

        $obj_db_connection = new DB_connection();
        $connection = $obj_db_connection->connectDB();
        $sql = "SELECT * FROM posts WHERE  category_id = '2' AND status = '1' ORDER BY id DESC";
        $query_statement = $connection->prepare($sql);
        $query_statement->execute();
        $result = $query_statement->fetchAll();
        $obj_db_connection->connect_db_close();
        return $result;
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

    /************* thirt category name************/

public static function thirt_category_name_db(){
        $obj_db_connection = new DB_connection();
        $connection = $obj_db_connection->connectDB();
        $sql = "SELECT * FROM categories WHERE  id = '3' AND status = '1'";
        $query_statement = $connection->prepare($sql);
        $query_statement->execute();
        $result = $query_statement->fetchAll();
        $obj_db_connection->connect_db_close();
        return $result;
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
    /*********get all post thirt category ************/


 public static function get_all_post_from_category_thirt_db(){
        $obj_db_connection = new DB_connection();
        $connection = $obj_db_connection->connectDB();
        $sql = "SELECT * FROM posts WHERE  category_id = '3' AND status = '1' ORDER BY id DESC";
        $query_statement = $connection->prepare($sql);
        $query_statement->execute();
        $result = $query_statement->fetchAll();
        $obj_db_connection->connect_db_close();
        return $result;
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
    /************* four category name************/

public static function four_category_name_db(){
        $obj_db_connection = new DB_connection();
        $connection = $obj_db_connection->connectDB();
        $sql = "SELECT * FROM categories WHERE  id = '4' AND status = '1'";
        $query_statement = $connection->prepare($sql);
        $query_statement->execute();
        $result = $query_statement->fetchAll();
        $obj_db_connection->connect_db_close();
        return $result;
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

     /*********get all post four category ************/
 public static function get_all_post_from_category_four_db(){
        $obj_db_connection = new DB_connection();
        $connection = $obj_db_connection->connectDB();
        $sql = "SELECT * FROM posts WHERE  category_id = '4' AND status = '1' ORDER BY id DESC";
        $query_statement = $connection->prepare($sql);
        $query_statement->execute();
        $result = $query_statement->fetchAll();
        $obj_db_connection->connect_db_close();
        return $result;
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
     /************* five category name************/
      public static function five_category_name_db(){
        $obj_db_connection = new DB_connection();
        $connection = $obj_db_connection->connectDB();
        $sql = "SELECT * FROM categories WHERE  id = '5' AND status = '1'";
        $query_statement = $connection->prepare($sql);
        $query_statement->execute();
        $result = $query_statement->fetchAll();
        $obj_db_connection->connect_db_close();
        return $result;
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
     /*********get all post five category ************/
 public static function get_all_post_from_category_five_db(){
        $obj_db_connection = new DB_connection();
        $connection = $obj_db_connection->connectDB();
        $sql = "SELECT * FROM posts WHERE  category_id = '5' AND status = '1' ORDER BY id DESC";
        $query_statement = $connection->prepare($sql);
        $query_statement->execute();
        $result = $query_statement->fetchAll();
        $obj_db_connection->connect_db_close();
        return $result;
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
     /************* six category name************/
      public static function six_category_name_db(){
        $obj_db_connection = new DB_connection();
        $connection = $obj_db_connection->connectDB();
        $sql = "SELECT * FROM categories WHERE  id = '6' AND status = '1'";
        $query_statement = $connection->prepare($sql);
        $query_statement->execute();
        $result = $query_statement->fetchAll();
        $obj_db_connection->connect_db_close();
        return $result;
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
    /*********get all post six category ************/
 public static function get_all_post_from_category_six_db(){
        $obj_db_connection = new DB_connection();
        $connection = $obj_db_connection->connectDB();
        $sql = "SELECT * FROM posts WHERE  category_id = '6' AND status = '1' ORDER BY id DESC";
        $query_statement = $connection->prepare($sql);
        $query_statement->execute();
        $result = $query_statement->fetchAll();
        $obj_db_connection->connect_db_close();
        return $result;
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
     /************* seven category name************/
      public static function seven_category_name_db(){
        $obj_db_connection = new DB_connection();
        $connection = $obj_db_connection->connectDB();
        $sql = "SELECT * FROM categories WHERE  id = '7' AND status = '1'";
        $query_statement = $connection->prepare($sql);
        $query_statement->execute();
        $result = $query_statement->fetchAll();
        $obj_db_connection->connect_db_close();
        return $result;
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
    /*********get all post seven category ************/
 public static function get_all_post_from_category_seven_db(){
        $obj_db_connection = new DB_connection();
        $connection = $obj_db_connection->connectDB();
        $sql = "SELECT * FROM posts WHERE  category_id = '7' AND status = '1' ORDER BY id DESC";
        $query_statement = $connection->prepare($sql);
        $query_statement->execute();
        $result = $query_statement->fetchAll();
        $obj_db_connection->connect_db_close();
        return $result;
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
     /************* eight category name************/
      public static function eight_category_name_db(){
        $obj_db_connection = new DB_connection();
        $connection = $obj_db_connection->connectDB();
        $sql = "SELECT * FROM categories WHERE  id = '8' AND status = '1'";
        $query_statement = $connection->prepare($sql);
        $query_statement->execute();
        $result = $query_statement->fetchAll();
        $obj_db_connection->connect_db_close();
        return $result;
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
     /*********get all post eight category ************/
 public static function get_all_post_from_category_eight_db(){
        $obj_db_connection = new DB_connection();
        $connection = $obj_db_connection->connectDB();
        $sql = "SELECT * FROM posts WHERE  category_id = '8' AND status = '1' ORDER BY id DESC LIMIT 4";
        $query_statement = $connection->prepare($sql);
        $query_statement->execute();
        $result = $query_statement->fetchAll();
        $obj_db_connection->connect_db_close();
        return $result;
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
    /************* nine category name************/
      public static function nine_category_name_db(){
        $obj_db_connection = new DB_connection();
        $connection = $obj_db_connection->connectDB();
        $sql = "SELECT * FROM categories WHERE  id = '9' AND status = '1'";
        $query_statement = $connection->prepare($sql);
        $query_statement->execute();
        $result = $query_statement->fetchAll();
        $obj_db_connection->connect_db_close();
        return $result;
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
     /*********get all post eight category ************/
 public static function get_all_post_from_category_nine_db(){
        $obj_db_connection = new DB_connection();
        $connection = $obj_db_connection->connectDB();
        $sql = "SELECT * FROM posts WHERE  category_id = '9' AND status = '1' ORDER BY id DESC LIMIT 4";
        $query_statement = $connection->prepare($sql);
        $query_statement->execute();
        $result = $query_statement->fetchAll();
        $obj_db_connection->connect_db_close();
        return $result;
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
    public static function details_posts_db($id) {
       
        try {
            $obj_db_connection = new DB_connection();
            $connection = $obj_db_connection->connectDB();
            $sql1 = "SELECT * FROM posts WHERE id = :_id";
            $query_statement = $connection->prepare($sql1);
            $query_statement->bindParam(':_id', $id);
            $query_statement->execute();
            $result_array = $query_statement->fetch(PDO::FETCH_ASSOC);
            $obj_db_connection->connect_db_close();
            return $result_array;
        } catch (Exception $e) {
            
        }
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
    public static function category_name_details_page_wise_db($id){

         try {
            $obj_db_connection = new DB_connection();
            $connection = $obj_db_connection->connectDB();
            $sql1 = "SELECT * FROM  categories WHERE id = :_id";
            $query_statement = $connection->prepare($sql1);
            $query_statement->bindParam(':_id', $id);
            $query_statement->execute();
            $result_array = $query_statement->fetch(PDO::FETCH_ASSOC);
            $obj_db_connection->connect_db_close();
    
            return $result_array;

        } catch (Exception $e) {
            
        }

    }
    

	
}