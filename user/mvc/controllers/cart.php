<?php

    class cart extends controller{
        function index(){
            $this->view("pages/master",["view"=>"cart/index.php"]);
        }
        function buy(){
            $this->view("pages/master",["view"=>"cart/buy.php"]);
        }
    }

?>