<?php

    class products extends controller{
        public $productsModel;
        function __construct(){
            $this->productsModel= $this->model("productsModel");
        }
        function index(){
            $this->view("pages/master",["view"=>"products/index.php"]);
        }
        function detaillaptop($id){
            $this->view("pages/master",
                       ["view"=>"products/detail-laptop.php",
                       "detail"=>$this->productsModel->getDetail($id)
            ]);
        }
        function detailphone(){
            $this->view("pages/master",
                       ["view"=>"products/detail-phone.php"
            ]);
        }
        function detailaccessory(){
            $this->view("pages/master",
                       ["view"=>"products/detail-accessory.php"
            ]);
        }
        function buylaptop($id){
            $quantity= $_POST["quantity"];
            $basequantity=$_POST["basequantity"];
            $updateQuantity=$basequantity - $quantity;
            $productsModel->updateQuantity($id, $updateQuantity);
            $this->view("pages/master",
                       ["view"=>"products/detail-laptop.php",
                       "detail"=>$this->productsModel->getDetail($id)
            ]);
            
        }
    }

?>