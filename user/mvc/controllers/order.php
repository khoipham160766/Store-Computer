<?php

    class order extends controller{
        function __construct(){
            $this->userModel = $this->model("userModel");
            $this->header = "";
            if(isset($_SESSION["email_user"]))
            {
                $this->header = $this->userModel->get_info($_SESSION["email_user"]);
            }
        }
        function index(){
            $this->view("pages/master",["view"=>"order/index.php",
                        "header"=>$this->header]);
        }
        function wait(){
            $this->view("pages/master",["view"=>"order/index.php",
                        "header"=>$this->header]);
        }
        function prepare(){
            $this->view("pages/master",["view"=>"order/index.php",
                        "header"=>$this->header]);
        }
        function delivering(){
            $this->view("pages/master",["view"=>"order/index.php",
                        "header"=>$this->header]);
        }
        function complete(){
            $this->view("pages/master",["view"=>"order/index.php",
                        "header"=>$this->header]);
        }
    }

?>