<?php

    class blog extends controller{
        function index(){
            $productsModel = $this->model("productsModel");
            //echo $productsModel->getAll();
            $this->view("pages/master",["view"=>"blog/index.php"]);
        }
        function detailblog(){
            $productsModel = $this->model("productsModel");
            //echo $productsModel->getAll();
            $this->view("pages/master",["view"=>"blog/detail-blog.php"]);
        }
    }

?>