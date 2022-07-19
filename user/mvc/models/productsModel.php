<?php

    class productsModel extends connectDB{
        function getAll(){
            $sql ="select * from products";
            return mysqli_query($this->con, $sql);
            // $rows = mysqli_query($this->con, $sql);
            // $arr = array();
            // while($row = mysqli_fetch_array($rows)){
            //     $arr[] = $row; 
            // }
            // echo json_encode($arr);
            // return json_encode($arr);
        }
        function getDetail($id){
            $sql="select * from products where id=".$id."";
            return mysqli_query($this->con, $sql);
        }
        function updateQuantity($id,$updateQuantity){
            $sql = "update products set soluong = ".$updateQuantity." where id =".$id."";
            mysqli_query($this->con, $sql);
        }
    }

?>