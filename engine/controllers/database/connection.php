<?php
/*
 * Connection class
 */
class Connection {

    // Public conn
    public $conn;

    // Function connection
    public function connectDB(){
        try{
            // Try to connect to the dababase
            $this->conn = new PDO("mysql:host=".DB_HOST.";dbname=" . DB_NAME . ";", DB_USERNAME, DB_PASSWORD);
        } catch(PDOException $e){
            // Throw error when not works
            die("There is no database connection or some other error happened: " . $e->errorInfo);
        }
    }
}
?>