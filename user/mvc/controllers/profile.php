<?php

    class profile extends controller{
        function __construct(){
            $this->userModel = $this->model("userModel");
            $this->info_user = "";
            $this->header = "";
            if(isset($_SESSION["email_user"]))
            {
                $this->info_user = $this->userModel->get_info($_SESSION["email_user"]);
                $this->header = $this->userModel->get_info($_SESSION["email_user"]);
            }
        }
        function profileuser(){
            $this->view("pages/master",["view"=>"profile/profile-user.php",
                                        "header"=>$this->header,
                                        "user_info"=>$this->info_user]);
        }
    }

?>