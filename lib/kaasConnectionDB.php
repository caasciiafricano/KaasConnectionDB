<?php
/*
    Author: Caascii Africano
    Copyrigh: 2023 - onionbuisness
    Version: 1.0.0
    Facebook: Carlos Avelino  (Кааскии Африкано) 
    Created at: 31/12/2023
    Updated at: 01/01/2024 - 02:42
*/

    // Setting datatypes strict declaraction
    declare(strict_types=1);

    // Importing settings script
    include_once "config/config.php";

    // Class
    // --------------------------------------------------------------------------------------------------------------
    class KaasConnectionDB
    {

        // Class Propierties, all useful below
        // --------------------------------------------------------------------------------------------------------------
        private string $conn = "";
        private $cmd = null;
        
        // Magic method of class to build connection with the database
        public function __construct()
        {

            // Checking if all drivers are avaiable
            if(!$this->check_mysql_drivers()){
                echo '<script>console.log("[ERROR] »» Cannot connect with MySQL, Verify if all useful pdo extensions are available and try again")</script>';
                exit(1);
            }

            #$this->conn = "mysql:host=" + MYSQL_HOST + ";dbname=" + MYSQL_DBNAME + ";charset=" + MYSQL_CHAR;

            /*
            $this->cmd = new PDO(
                $this->conn,
                MYSQL_USER,
                MYSQL_PASS,
                array(PDO::ATTR_PERSISTENT)
            );
            */
            #$this->delete("DELETE FROM");
        }

        // Class Method for database settings, all below
        // --------------------------------------------------------------------------------------------------------------
        
        // Method who checks if all useful drivers are available
        private function check_mysql_drivers() : bool{

            // Get all available extensions
            $extensions = get_loaded_extensions();

            // Checking if "PDO" and "pdo_mysql" are available
            if(!in_array("PDO",$extensions) and !in_array("pdo_mysql",$extensions))
                return false;

            return true;
        }        

        // Generic methods for querying the database, all below
        // --------------------------------------------------------------------------------------------------------------
        // Generic query methods
        public function select(string $sql){

            // Check if the SELECT statement is written correctly
            if(!preg_match('/^SELECT\b/i',$sql)){
                echo '<script>console.log("You have problems with the syntax of SELECT Statements")</script>';
                exit(2);
            }

            echo "Ok";
        }

        // Generic query method to insert data
        public function insert(string $sql){
            
            // Check if the INSERT statement is written correctly
            if(!preg_match('/^INSERT INTO\b/i',$sql)){
                echo '<script>console.log("You have problems with the syntax of INSERT INTO Statements")</script>';
                exit(2);
            }

            echo "Ok";
        }

        // Generic query method to update data
        public function update(string $sql){
            
            // Check if the UPDATE statement is written correctly
            if(!preg_match('/^UPDATE\b/i',$sql)){
                echo '<script>console.log("You have problems with the syntax of UPDATE Statements")</script>';
                exit(2);
            }

            echo "Ok";
        }

        // Generic query method to delete data
        public function delete(string $sql){

            // Check if the DELETE statement is written correctly
            if(!preg_match('/^DELETE FROM\b/i',$sql)){
                echo '<script>console.log("You have problems with the syntax of DELETE FROM Statements")</script>';
                exit(2);
            }

            echo "Ok";
            
        }
    }

?>