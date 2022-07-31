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
        function addcart($email, $id_category,$id_product, $name_product, $product_img, $type, $price, $quantity, $name_category){
            $check = "SELECT * FROM cart WHERE email_user = '".$email."' AND id_category = '".$id_category."' AND id_product = '".$id_product."'";
            $result_check = mysqli_query($this->con, $check);
            if(mysqli_num_rows($result_check) > 0){
                return false;
            }
            $sql = "INSERT INTO `cart`(`email_user`, `id_category`,`id_product`, `name_product`, `product_img`, `type`, `price`, `quantity`, `name_category`) 
                    VALUES ('".$email."','".$id_category."', '".$id_product."','".$name_product."','".$product_img."','".$type."','".$price."','".$quantity."','".$name_category."')";
            mysqli_query($this->con, $sql);
            return true;
        }
    }

?>