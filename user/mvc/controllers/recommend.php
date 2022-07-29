<?php

    class recommend extends controller{
        function __construct(){
            $this->userModel = $this->model("userModel");
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
            $this->view("pages/master",["view"=>"recommend/index.php",
                        "header"=>$this->header,
                        "total_quantity_cart"=>$this->total_quantity_cart]);
        }
    }

?>