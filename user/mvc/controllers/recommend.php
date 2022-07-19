<?php

    class recommend extends controller{
        function index(){
            $productsModel = $this->model("productsModel");
            //echo $productsModel->getAll();
            $this->view("pages/master",["view"=>"recommend/index.php"]);
        }
    }

?>