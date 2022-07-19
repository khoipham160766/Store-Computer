<?php

    class register extends controller{
        function index(){
            $productsModel = $this->model("productsModel");
            //echo $productsModel->getAll();
            $this->view("pages/register");
        }
    }

?>