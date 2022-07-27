<?php

    class register extends controller{
        function __construct(){
            $this->userModel = $this->model("userModel");
        }
        function index(){
            $this->view("pages/register");
        }
        function signup(){
            $firstname = $_POST["firstname"];
            $lastname = $_POST["lastname"];
            $email = $_POST["email"];
            $password = md5($_POST["password"]);
            $address = $_POST["address"];
            $phonenumber = $_POST["phonenumber"];
            if($this->userModel->signup($firstname, $lastname, $email, $password, $address, $phonenumber) == true){
                echo "<script>alert('Đăng ký thành công !');</script>";
            } else{
                echo "<script>alert('Đăng ký thất bại. Trùng email !');</script>";
            }
            echo "<script>window.location.href = 'http://localhost:8080/Ecommerce/user/register';</script>";
        }
        function signin(){
            $email = $_POST["email"];
            $password = md5($_POST["password"]);
            if(!$this->userModel->signin_check_email($email))
            {
                echo "<script>alert('Tài khoản không tồn tại !');</script>";
                echo "<script>window.location.href = 'http://localhost:8080/Ecommerce/user/login';</script>";
            }else if(!$this->userModel->signin($email, $password))
            {
                echo "<script>alert('Mật khẩu không chính xác !');</script>";
                echo "<script>window.location.href = 'http://localhost:8080/Ecommerce/user/login';</script>";
            }else if($this->userModel->signin($email, $password))
            {
                echo "<script>alert('Đăng nhập thành công !');</script>";
                $_SESSION["email_user"] = $email;
                echo "<script>window.location.href = 'http://localhost:8080/Ecommerce/user/';</script>";
            }
            
        }
    }

?>