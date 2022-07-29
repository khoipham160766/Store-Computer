<?php

    class categoryModel extends connectDB{
        function get_all_category(){
            $sql = "SELECT * FROM category";
            return mysqli_query($this->con, $sql);
        }
        function get_id_from_name($name_category){
            $id = 0;
            $sql = "SELECT * FROM category WHERE name_category = '".$name_category."'";
            $result = mysqli_query($this->con, $sql);
            while( $row = mysqli_fetch_array($result)){
                $id = $row["id_category"];
            }
            return $id;
        }
    }

?>