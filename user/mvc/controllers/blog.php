<?php

    class blog extends controller{
        function __construct(){
            $this->userModel = $this->model("userModel");
            $this->header = "";
            if(isset($_SESSION["email_user"]))
            {
                $this->header = $this->userModel->get_info($_SESSION["email_user"]);
            }
        }
        function index(){
            $this->view("pages/master",["view"=>"blog/index.php",
                                        "header"=>$this->header]);
        }
        function detailblog(){
            $this->view("pages/master",["view"=>"blog/detail-blog.php"]);
        }
    }

?>