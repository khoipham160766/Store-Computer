<?php

    class cartModel extends connectDB{
        function quantity_cart_user($email){
            $sql = "SELECT * FROM cart WHERE email_user = '".$email."'";
            $result = mysqli_query($this->con, $sql);
            return mysqli_num_rows($result);
        }
        function get_cart_user($email){
            $sql = "SELECT * FROM cart WHERE email_user = '".$email."'";
            return mysqli_query($this->con, $sql);
        }
    }

?>