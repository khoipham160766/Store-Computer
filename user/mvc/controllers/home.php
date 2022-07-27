<?php

    class home extends controller{
        function __construct(){
            $this->productsModel = $this->model("productsModel");
            $this->userModel = $this->model("userModel");
            $this->header = "";
            if(isset($_SESSION["email_user"]))
            {
                $this->header = $this->userModel->get_info($_SESSION["email_user"]);
            }
        }
        function index(){
            $this->view("pages/master",
                       ["view"=>"home/index.php",
                       "products"=>$this->productsModel->getAll(),
                       "header"=>$this->header
                       ]);
        }
    }

?>