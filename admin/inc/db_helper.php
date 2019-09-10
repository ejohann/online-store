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

        public static function allCategories(){
            global $database;
            $select_categories = $database->connection->prepare("SELECT * FROM main_cat");
            $select_categories->execute();
            $results = $select_categories->fetch(PDO::FETCH_ASSOC);
            return $results ? $results : false;
        }
    
    }


?>