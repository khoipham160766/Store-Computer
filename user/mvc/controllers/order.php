<?php

    class order extends controller{
        function __construct(){
            $this->userModel = $this->model("userModel");
            $this->cartModel = $this->model("cartModel");
            $this->orderModel = $this->model("orderModel");
            $this->email_user = "";
            $this->header = "";
            $this->category_profile = "";
            $this->total_quantity_cart = "";
            if(isset($_SESSION["email_user"]))
            {
                $this->email_user = $_SESSION["email_user"];
                $this->header = $this->userModel->get_info($_SESSION["email_user"]);
                $this->category_profile = $this->userModel->get_info($_SESSION["email_user"]);
                $this->total_quantity_cart = $this->cartModel->quantity_cart_user($_SESSION["email_user"]);
            }
        }
        function index(){
            $this->view("pages/master",["view"=>"order/index.php",
                        "header"=>$this->header,
                        "category_profile"=>$this->category_profile,
                        "total_quantity_cart"=>$this->total_quantity_cart,
                        "order_wait"=>$this->orderModel->order_wait($this->email_user)]);
        }
        function wait(){
            $this->view("pages/master",["view"=>"order/index.php",
                        "header"=>$this->header,
                        "category_profile"=>$this->category_profile,
                        "total_quantity_cart"=>$this->total_quantity_cart,
                        "order_wait"=>$this->orderModel->order_wait($this->email_user)]);
        }
        function prepare(){
            $this->view("pages/master",["view"=>"order/index.php",
                        "header"=>$this->header,
                        "category_profile"=>$this->category_profile,
                        "total_quantity_cart"=>$this->total_quantity_cart,
                        "order_prepare"=>$this->orderModel->order_prepare($this->email_user)]);
        }
        function delivering(){
            $this->view("pages/master",["view"=>"order/index.php",
                        "header"=>$this->header,
                        "category_profile"=>$this->category_profile,
                        "total_quantity_cart"=>$this->total_quantity_cart,
                        "order_delivering"=>$this->orderModel->order_delivering($this->email_user)]);
        }
        function complete(){
            $this->view("pages/master",["view"=>"order/index.php",
                        "header"=>$this->header,
                        "category_profile"=>$this->category_profile,
                        "total_quantity_cart"=>$this->total_quantity_cart,
                        "order_complete"=>$this->orderModel->order_complete($this->email_user)]);
        }
    }

?>