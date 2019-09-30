<?php


/**
 * Description of DB_connection
 *
 * @author MD. SHAHED
 */
class DB_connection {
    
    /*
     * @Author              : TT 
     * @CreatedDate         : 26-01-2018
     * @Developed By        : MD. SHAHED
     * @Start DateTime      : 26-01-2018 10:46 PM 
     * @ModifiedDate        : 
     * @ModifiedBy          : 
     * @Used IN             : every model
     * @Route               : 
     * @Description         : This function is used for connection establish to DB
     * @view                : 
     * @deprecated          : 
     * @exception           : 
     * @Parameter           : 
     * @Return              :   
     * @value               : 
     * @Status              : active
     * @version             : v1.0         
     */

    public static function connectDB() {
        $servername = "localhost";
        $username = "root";
        $password = "";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=db_times_news_robiul;charset=utf8", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Connected successfully";
            return $conn;
            
        } catch (PDOException $e) {
            
            die("Connection failed: " . $e->getMessage());
            //echo "Connection failed: " . $e->getMessage();
        }
    }
    
    
    /*
     * @Author              : TT 
     * @CreatedDate         : 26-01-2018
     * @Developed By        : MD. SHAHED
     * @Start DateTime      : 26-01-2018 10:46 PM 
     * @ModifiedDate        : 
     * @ModifiedBy          : 
     * @Used IN             : every model
     * @Route               : 
     * @Description         : This function is used for connection close to DB
     * @view                : 
     * @deprecated          : 
     * @exception           : 
     * @Parameter           : 
     * @Return              :   
     * @value               : 
     * @Status              : active
     * @version             : v1.0         
     */

    public static function connect_db_close() {
        $conn = null;
        return $conn;
    }
    
}
