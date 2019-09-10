<?php 
    class DB_Helper{

        public static function addCategory($cat_name){
            global $database;
            $insert_category = $database->connection->prepare("INSERT INTO main_cat (category_name) VALUES (:category)");
            $insert_category->bindParam(":category", $cat_name);
            $insert_category->execute();
            $id = $database->connection->lastInsertId();
            $insert_category = null;
            return $id ? $id : false;
        }
    }


?>