<?php

    class contact extends controller{
        function __construct(){
            $this->userModel = $this->model("userModel");
            $this->feedbackModel = $this->model("feedbackModel");
            $this->cartModel = $this->model("cartModel");
            $this->header = "";
            $this->total_quantity_cart = "";
            if(isset($_SESSION["email_user"]))
            {
                $this->header = $this->userModel->get_info($_SESSION["email_user"]);
                $this->total_quantity_cart = $this->cartModel->quantity_cart_user($_SESSION["email_user"]);
            }
        }
        function index(){
            $this->view("pages/master",["view"=>"contact/index.php",
                        "header"=>$this->header,
                        "total_quantity_cart"=>$this->total_quantity_cart]);
        }
        function sendfeedback(){
            $name = $_POST["name"];
            $email = $_POST["email"];
            $feedback = $_POST["feedback"];
            $time = date("Y/m/d H:i:s");
            if($this->feedbackModel->insert_feedback($name, $email, $feedback, $time))
            {
                echo "<script>alert('Cảm ơn bạn đã gửi phản hồi đến với chúng tôi !');</script>";
            }else
            {
                echo "<script>alert('Gửi phản hồi không thành công !');</script>";
            }
            echo "<script>window.location.href = 'http://localhost:8080/Ecommerce/user/contact';</script>";
        }
    }

?>