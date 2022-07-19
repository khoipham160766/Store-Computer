<?php

    class home extends controller{
        function index(){
            $productsModel = $this->model("productsModel");
            //echo $productsModel->getAll();
            $this->view("pages/master",
                       ["view"=>"home/index.php",
                       "products"=>$productsModel->getAll()
                       
            ]);
        }
    }

?>