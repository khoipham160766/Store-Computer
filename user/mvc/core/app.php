<?php 

    class app{
        protected $controller="home";
        protected $action="index";
        protected $param=[];
        //constructer
        function __construct(){
            $arr = $this->urlProcess();
            // handle controller
            if(isset($arr[0])){
                if( file_exists("./mvc/controllers/".$arr[0].".php")){
                    $this->controller = $arr[0];
                unset($arr[0]);
                }
            }
            require_once "./mvc/controllers/".$this->controller.".php";
            // create object, it's screen display
            $this->controller = new $this->controller;
            // handle action
            if( isset($arr[1]) ){
                if( method_exists($this->controller, $arr[1]) )
                    $this->action = $arr[1];
                unset($arr[1]);
            }
            // handle param
            $this->param=$arr?array_values($arr):[];
            // call class, function & param
            call_user_func_array([$this->controller, $this->action], $this->param);
        }

        // handle url
        function urlProcess(){
            if( isset($_GET["url"]) ){
                $cleanUrl=filter_var(trim($_GET["url"],"/"));
                return explode("/", $cleanUrl);
            }
        }
    }

?>