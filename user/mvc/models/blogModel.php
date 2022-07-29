<?php

    class blogModel extends connectDB{
        function get_all_blog(){
            $sql = "SELECT * FROM blog";
            return mysqli_query($this->con, $sql);
        }
        function get_detail_blog($id_blog){
            $sql = "SELECT * FROM blog WHERE id_blog  = '".$id_blog."'";
            return mysqli_query($this->con, $sql);
        }
        function  get_blog_type($type){
            $sql = "SELECT * FROM blog WHERE id_category = '".$type."'";
            return mysqli_query($this->con, $sql);
        }
    }

?>