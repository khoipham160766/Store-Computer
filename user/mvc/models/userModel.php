<?php

    class userModel extends connectDB{
        function signup($firstname, $lastname, $email, 
                        $password, $address, $phonenumber)
        {
            $check_register = 0;
            $sql_check_register = "SELECT * FROM user WHERE email = '".$email."'";
            $sql_insert = "INSERT INTO `user`(`first_name`, `last_name`, `email`, `password`, `address`, `phone_number`, `gender`, `status`, `avatar`) 
                           VALUES ('$firstname', '$lastname', '$email', '$password', '$address', '$phonenumber','Nam','1','avatar-nobody.jpg')";
            if(mysqli_num_rows(mysqli_query($this->con, $sql_check_register)) > 0)
            {
                return false;
            }
            else
            {
                mysqli_query($this->con, $sql_insert);
                return true;
            }
                
        }
        // -----signin
        function signin_check_email($email){
            $sql = "SELECT * FROM user WHERE email = '".$email."'";
            if(mysqli_num_rows(mysqli_query($this->con, $sql)) == 0 )
            {
                return false;
            }
            return true;
        }
        function signin($email, $password){
            $sql = "SELECT * FROM user WHERE email = '".$email."' AND password = '".$password."'";
            if(mysqli_num_rows(mysqli_query($this->con, $sql)) == 0)
            {
                return false;
            }
            return true;
        }
        function get_info($email){
            $sql = "SELECT * FROM user WHERE email = '".$email."'";
            return mysqli_query($this->con, $sql);
        }
        // -------change info user
        function changeinfo($email, $firstname, $lastname, $phone, $address, $gender){
            $sql = "UPDATE `user` SET `first_name`='".$firstname."',`last_name`='".$lastname."',`address`='".$address."',`phone_number`='".$phone."',`gender`='".$gender."' WHERE `email` = '".$email."'";
            if(mysqli_query($this->con, $sql)){
                return true;
            }
            return false;
        }
        // -------change password
        function check_old_password($email, $old_password){
            $sql = "SELECT * FROM user WHERE email = '".$email."' AND password = '".$old_password."'";
            if(mysqli_num_rows(mysqli_query($this->con, $sql)) == 0){
                return false;
            }
            return true;
        }
        function change_password($email, $new_password){
            $sql = "UPDATE `user` SET `password`='".$new_password."' WHERE `email` = '".$email."'";
            if(mysqli_query($this->con, $sql))
            {
                return true;
            }
            return false;
        }
        // -----------change avatar
        function change_avatar($email, $name_img){
            $sql = "UPDATE `user` SET `avatar`='".$name_img."' WHERE `email` = '".$email."'";
            if(mysqli_query($this->con, $sql)){
                return true;
            }
            return false;
        }

    }

?>