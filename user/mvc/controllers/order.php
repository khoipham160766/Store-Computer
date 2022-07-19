<?php

    class order extends controller{
        function index(){
            $this->view("pages/master",["view"=>"order/index.php"]);
        }
        function wait(){
            $this->view("pages/master",["view"=>"order/index.php"]);
        }
        function prepare(){
            $this->view("pages/master",["view"=>"order/index.php"]);
        }
        function delivering(){
            $this->view("pages/master",["view"=>"order/index.php"]);
        }
        function complete(){
            $this->view("pages/master",["view"=>"order/index.php"]);
        }
    }

?>