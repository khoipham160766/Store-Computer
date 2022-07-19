<?php

    session_start();
    require_once "./mvc/bridge.php";
    $myApp = new app();

?>
<!--       
          .htaccess
*normal: user/index.php?url=home
*. htaccess: user/home => user/index.php?url=home

-->