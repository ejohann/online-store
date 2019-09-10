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

        public static function addSubCategory($sub_cat_name, $cat_id){
            global $database;
            $insert_sub_category = $database->connection->prepare("INSERT INTO sub_cat (sub_category_name, category_id) 
                VALUES (:sub_category, :category_id)");
            $insert_sub_category->bindParam(":sub_category", $sub_cat_name);
            $insert_sub_category->bindParam(":category_id", $cat_id);
            $insert_sub_category->execute();
            $id = $database->connection->lastInsertId();
            $insert_sub_category = null;
            return $id ? $id : false;
        }

        public static function allCategories(){
            global $database;
            $results = array();
            $select_categories = $database->connection->prepare("SELECT * FROM main_cat");
            $select_categories->execute();
            while($row = $select_categories->fetch(PDO::FETCH_ASSOC)){
                $results[] = $row;
             }
            return $results ? $results : false;
        }
    
    }


?>