<?php

    class cart extends controller{
        function __construct(){
            $this->userModel = $this->model("userModel");
            $this->cartModel = $this->model("cartModel");
            $this->header = "";
            $this->category_profile = "";
            $this->total_quantity_cart = "";
            if(isset($_SESSION["email_user"]))
            {
                $this->header = $this->userModel->get_info($_SESSION["email_user"]);
                $this->category_profile = $this->userModel->get_info($_SESSION["email_user"]);
                $this->total_quantity_cart = $this->cartModel->quantity_cart_user($_SESSION["email_user"]);
            }
        }
        function index(){
            $email = "";
            if(isset($_SESSION["email_user"]))
            {
                $email = $_SESSION["email_user"];
            }
            $this->view("pages/master",["view"=>"cart/index.php",
                        "header"=>$this->header,
                        "category_profile"=>$this->category_profile,
                        "total_quantity_cart"=>$this->total_quantity_cart,
                        "cart_user"=>$this->cartModel->get_cart_user($email)]);
        }
        function buy(){
            $this->view("pages/master",["view"=>"cart/buy.php",
                        "header"=>$this->header,
                        "total_quantity_cart"=>$this->total_quantity_cart]);
        }
    }

?>