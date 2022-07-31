<?php

    class productsModel extends connectDB{
        function getAll(){
            $sql ="select * from products";
            return mysqli_query($this->con, $sql);
        }
        function getDetail($id, $table_product){
            $sql="select * from ".$table_product." where id_product=".$id."";
            return mysqli_query($this->con, $sql);
        }
        function updateQuantity($id,$updateQuantity){
            $sql = "update products set soluong = ".$updateQuantity." where id =".$id."";
            mysqli_query($this->con, $sql);
        }
        function get_new_phone(){
            $sql = "SELECT * FROM products_phone ORDER BY time_up DESC LIMIT 4";
            return mysqli_query($this->con, $sql);
        }
        function get_sell_phone(){
            $sql = "SELECT * FROM products_phone LIMIT 4";
            return mysqli_query($this->con, $sql);
        }
        function get_new_laptop(){
            $sql = "SELECT * FROM products_laptop ORDER BY time_up DESC LIMIT 4";
            return mysqli_query($this->con, $sql);
        }
        function get_sell_laptop(){
            $sql = "SELECT * FROM products_laptop LIMIT 4";
            return mysqli_query($this->con, $sql);
        }
        function get_new_accessories(){
            $sql = "SELECT * FROM products_accessories ORDER BY time_up DESC LIMIT 4";
            return mysqli_query($this->con, $sql);
        }
        function get_sell_accessories(){
            $sql = "SELECT * FROM products_accessories LIMIT 4";
            return mysqli_query($this->con, $sql);
        }
        function get_all_phone(){
            $array = array();
            $sql = "SELECT * FROM products_phone";
            $result = mysqli_query($this->con, $sql);
            while( $row = mysqli_fetch_array($result))
            {
                $array[] = $row;
            }
            return $array;
        }
        function get_all_laptop(){
            $array = array();
            $sql = "SELECT * FROM products_laptop";
            $result = mysqli_query($this->con, $sql);
            while( $row = mysqli_fetch_array($result))
            {
                $array[] = $row;
            }
            return $array;
        }
        function get_all_accessories(){
            $array = array();
            $sql = "SELECT * FROM products_accessories";
            $result = mysqli_query($this->con, $sql);
            while( $row = mysqli_fetch_array($result))
            {
                $array[] = $row;
            }
            return $array;
        }
    }

?>