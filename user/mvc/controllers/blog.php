<?php

    class blog extends controller{
        function __construct(){
            $this->userModel = $this->model("userModel");
            $this->categoryModel = $this->model("categoryModel");
            $this->blogModel = $this->model("blogModel");
            $this->cartModel = $this->model("cartModel");
            $this->header = "";
            $this->total_quantity_cart = "";
            if(isset($_SESSION["email_user"]))
            {
                $this->header = $this->userModel->get_info($_SESSION["email_user"]);
                $this->total_quantity_cart = $this->cartModel->quantity_cart_user($_SESSION["email_user"]);
            }
        }
        function index(){
            $this->view("pages/master",["view"=>"blog/index.php",
                                        "header"=>$this->header,
                                        "all_blog"=>$this->blogModel->get_all_blog(),
                                        "category_blog"=>$this->categoryModel->get_all_category(),
                                        "total_quantity_cart"=>$this->total_quantity_cart]);
        }
        function detailblog($id_blog){
            $this->view("pages/master",["view"=>"blog/detail-blog.php",
                                        "header"=>$this->header,
                                        "category_blog"=>$this->categoryModel->get_all_category(),
                                        "detail_blog"=>$this->blogModel->get_detail_blog($id_blog),
                                        "total_quantity_cart"=>$this->total_quantity_cart]);
        }
        function typeblog($type){
             $id = $this->categoryModel->get_id_from_name($type);
             $this->view("pages/master",["view"=>"blog/index.php",
                                        "header"=>$this->header,
                                        "all_blog"=>$this->blogModel->get_blog_type($id),
                                        "category_blog"=>$this->categoryModel->get_all_category(),
                                        "total_quantity_cart"=>$this->total_quantity_cart]);
        }
    }

?>