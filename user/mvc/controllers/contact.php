<?php

    class contact extends controller{
        function index(){
            $productsModel = $this->model("productsModel");
            //echo $productsModel->getAll();
            $this->view("pages/master",["view"=>"contact/index.php"]);
        }
    }

?>