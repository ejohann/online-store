<?php 
    $root_dir = realpath($_SERVER['DOCUMENT_ROOT']);
    $separator = "/";
    $site_dir = "online-store";
    $site_path = $root_dir . $separator . $site_dir . $separator;

    require_once($site_path ."config.php");
    class Database{
     
        public $connection;
        function __construct(){
            $this->connect_database();
         }
        private function connect_database(){
            try{
                $this->connection = new PDO("mysql:dbname=".DB_NAME.";host=".DB_HOST.";port=".DB_PORT, DB_USER, DB_PASSWORD);
                $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
              }
            catch(PDOException $error){
                echo "Connection failed: " . $error->getMessage();
              }
          }
    }
$database = new Database();


?>