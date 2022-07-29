<?php

    class profile extends controller{
        function __construct(){
            $this->userModel = $this->model("userModel");
            $this->cartModel = $this->model("cartModel");
            $this->info_user = "";
            $this->header = "";
            $this->total_quantity_cart = "";
            if(isset($_SESSION["email_user"]))
            {
                $this->info_user = $this->userModel->get_info($_SESSION["email_user"]);
                $this->header = $this->userModel->get_info($_SESSION["email_user"]);
                $this->total_quantity_cart = $this->cartModel->quantity_cart_user($_SESSION["email_user"]);
            }
        }
        function profileuser(){
            $this->view("pages/master",["view"=>"profile/profile-user.php",
                                        "header"=>$this->header,
                                        "user_info"=>$this->info_user,
                                        "total_quantity_cart"=>$this->total_quantity_cart]);
        }
        function changeprofile(){
            $firstname = $_POST["firstname"];
            $lastname = $_POST["lastname"];
            $phone = $_POST["phone"];
            $address = $_POST["address"];
            $gender = $_POST["gender"];
            if($this->userModel->changeinfo($_SESSION["email_user"], $firstname, $lastname,
                                            $phone, $address, $gender))
            {
                echo "<script>alert('Thay đổi thông tin thành công !');</script>";
            }else
            {
                echo "<script>alert('Thay đổi thông tin thất bại !');</script>";
            }
            echo "<script>window.location.href = 'http://localhost:8080/Ecommerce/user/profile/profileuser';</script>";
        }
        function changepassword(){
            $old_password = md5($_POST["old-password"]);
            $new_password = md5($_POST["new-password"]);
            if(!$this->userModel->check_old_password($_SESSION["email_user"], $old_password))
            {
                echo "<script>alert('Mật khẩu cũ không chính xác !');</script>";
            }else if(!$this->userModel->change_password($_SESSION["email_user"], $new_password))
            {
                echo "<script>alert('Thay đổi mật khẩu không thành công !');</script>";
            }else if($this->userModel->change_password($_SESSION["email_user"], $new_password))
            {
                echo "<script>alert('Thay đổi mật khẩu thành công !');</script>";
            }
            echo "<script>window.location.href = 'http://localhost:8080/Ecommerce/user/profile/profileuser';</script>";
        }
        function changeavatar(){
            $tmp_name = $_FILES["avatar"]["tmp_name"];
            $fldimageurl = "../images/avatars/". $_FILES["avatar"]["name"];
            if($this->userModel->change_avatar($_SESSION["email_user"], $_FILES["avatar"]["name"]))
            {
                echo "<script>alert('Đổi avatar thành công !');</script>";
                move_uploaded_file($tmp_name, $fldimageurl);
            }else
            {
                echo "<script>alert('Thay đổi avatar thất bại !');</script>";
            }
            echo "<script>window.location.href = 'http://localhost:8080/Ecommerce/user/profile/profileuser';</script>";
        }
    }

?>