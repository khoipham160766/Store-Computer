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
                       "total_quantity_cart"=>$this->total_quantity_cart,
                       "new_phone"=>$this->productsModel->get_new_phone(),
                       "new_laptop"=>$this->productsModel->get_new_laptop(),
                       "new_accessories"=>$this->productsModel->get_new_accessories(),
                       "sell_phone"=>$this->productsModel->get_sell_phone(),
                       "sell_laptop"=>$this->productsModel->get_sell_laptop(),
                       "sell_accessories"=>$this->productsModel->get_sell_accessories(),
                       ]);
        }
        function logout(){
            unset($_SESSION["email_user"]);
            echo "<script>window.location.href = 'http://localhost:8080/Ecommerce/user/home';</script>";
        }
    }

?>