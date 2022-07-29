<?php

    class orderModel extends connectDB{
        function order_wait($email){
            $sql = "SELECT * FROM order WHERE email_user = '".$email."' AND status = '0'";
            return mysqli_query($this->con, $sql);
        }
        function order_prepare($email){
            $sql = "SELECT * FROM order WHERE email_user = '".$email."' AND status = '1'";
            return mysqli_query($this->con, $sql);
        }
        function order_delivering($email){
            $sql = "SELECT * FROM order WHERE email_user = '".$email."' AND status = '2'";
            return mysqli_query($this->con, $sql);
        }
        function order_complete($email){
            $sql = "SELECT * FROM order WHERE email_user = '".$email."' AND status = '3'";
            return mysqli_query($this->con, $sql);
        }
    }

?>