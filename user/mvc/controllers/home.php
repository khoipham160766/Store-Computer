<?php

    class home extends controller{
        function __construct(){
            $this->productsModel = $this->model("productsModel");
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
            $this->view("pages/master",
                       ["view"=>"home/index.php",
                       "products"=>$this->productsModel->getAll(),
                       "header"=>$this->header,
                       "total_quantity_cart"=>$this->total_quantity_cart
                       ]);
        }
        function logout(){
            unset($_SESSION["email_user"]);
            echo "<script>window.location.href = 'http://localhost:8080/Ecommerce/user/home';</script>";
        }
    }

?>