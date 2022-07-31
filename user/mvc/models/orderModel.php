<?php

    class orderModel extends connectDB{
        function order_wait($id_user){
            $sql = "SELECT * FROM order WHERE id_user = '".$id_user."' AND status = '0'";
            return mysqli_query($this->con, $sql);
        }
        function order_prepare($id_user){
            $sql = "SELECT * FROM order WHERE id_user = '".$id_user."' AND status = '1'";
            return mysqli_query($this->con, $sql);
        }
        function order_delivering($id_user){
            $sql = "SELECT * FROM order WHERE id_user = '".$id_user."' AND status = '2'";
            return mysqli_query($this->con, $sql);
        }
        function order_complete($id_user){
            $sql = "SELECT * FROM order WHERE idl_user = '".$id_user."' AND status = '3'";
            return mysqli_query($this->con, $sql);
        }
    }

?>