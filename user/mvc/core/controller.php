<!--
    *required views & models
    *file in controllers extends it
-->
<?php

    class controller{

        function model($model){
            require_once "./mvc/models/".$model.".php";
            return new $model;
        }

        function view($view, $data =  []){
            require_once "./mvc/views/".$view.".php";
        }
    }

?>