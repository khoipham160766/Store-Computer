<?php

    class profile extends controller{
        function profileuser(){
            $this->view("pages/master",["view"=>"profile/profile-user.php"]);
        }
    }

?>