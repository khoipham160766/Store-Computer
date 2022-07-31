<?php

    class products extends controller{
        public $productsModel;
        public $categoryModel;
        public $cartModel;
        public $userModel;
        public $all_product = array();
        public $fold = array();
        function __construct(){
            $this->productsModel= $this->model("productsModel");
            $this->categoryModel= $this->model("categoryModel");
            $this->cartModel= $this->model("cartModel");
            $this->userModel = $this->model("userModel");
            $this->header = "";
            $this->total_quantity_cart = "";
            if(isset($_SESSION["email_user"]))
            {
                $this->header = $this->userModel->get_info($_SESSION["email_user"]);
                $this->total_quantity_cart = $this->cartModel->quantity_cart_user($_SESSION["email_user"]);
            }
        }
        function index(){
            $sub_category = $this->categoryModel->get_sub_category();
            $all_product = array_merge($this->productsModel->get_all_phone(),
                                       $this->productsModel->get_all_laptop(),
                                       $this->productsModel->get_all_accessories());
            $fold = $this->categoryModel->get_fold_img();
            $this->view("pages/master",["view"=>"products/index.php",
                                        "category"=>$this->categoryModel->get_all_category(),
                                        "sub_category"=>$sub_category,
                                        "all_product"=>$all_product,
                                        "fold"=>$fold,
                                        "header"=>$this->header,
                                        "total_quantity_cart"=>$this->total_quantity_cart]);

        }
        function phones(){
            $sub_category = $this->categoryModel->get_sub_category();
            $all_product = $this->productsModel->get_all_phone();
            $fold = $this->categoryModel->get_fold_img();
            $this->view("pages/master",["view"=>"products/index.php",
                                        "category"=>$this->categoryModel->get_all_category(),
                                        "sub_category"=>$sub_category,
                                        "all_product"=>$all_product,
                                        "fold"=>$fold,
                                        "header"=>$this->header,
                                        "total_quantity_cart"=>$this->total_quantity_cart]);

        }
        function laptops(){
            $sub_category = $this->categoryModel->get_sub_category();
            $all_product = $this->productsModel->get_all_laptop();
            $fold = $this->categoryModel->get_fold_img();
            $this->view("pages/master",["view"=>"products/index.php",
                                        "category"=>$this->categoryModel->get_all_category(),
                                        "sub_category"=>$sub_category,
                                        "all_product"=>$all_product,
                                        "fold"=>$fold,
                                        "header"=>$this->header,
                                        "total_quantity_cart"=>$this->total_quantity_cart]);

        }
        function accessories(){
            $sub_category = $this->categoryModel->get_sub_category();
            $all_product = $this->productsModel->get_all_accessories();
            $fold = $this->categoryModel->get_fold_img();
            $this->view("pages/master",["view"=>"products/index.php",
                                        "category"=>$this->categoryModel->get_all_category(),
                                        "sub_category"=>$sub_category,
                                        "all_product"=>$all_product,
                                        "fold"=>$fold,
                                        "header"=>$this->header,
                                        "total_quantity_cart"=>$this->total_quantity_cart]);

        }
        function detaillaptop($id){
            $this->view("pages/master",
                       ["view"=>"products/detail-laptop.php",
                       "detail"=>$this->productsModel->getDetail($id, "products_laptop"),
                       "header"=>$this->header,
                       "total_quantity_cart"=>$this->total_quantity_cart
            ]);
        }
        function detailphone($id){
            $this->view("pages/master",
                       ["view"=>"products/detail-phone.php",
                       "detail"=>$this->productsModel->getDetail($id, "products_phone"),
                       "header"=>$this->header,
                        "total_quantity_cart"=>$this->total_quantity_cart
            ]);
        }
        function detailaccessories($id){
            $this->view("pages/master",
                       ["view"=>"products/detail-accessory.php",
                       "detail"=>$this->productsModel->getDetail($id, "products_accessories"),
                       "header"=>$this->header,
                        "total_quantity_cart"=>$this->total_quantity_cart
            ]);
        }
        function addcart($id_category, $id_product){
            $table_product = "";
            $email = $_SESSION["email_user"];
            $name_product = "";
            $product_img = "";
            $type = "";
            $price = "";
            $quantity = "";
            $name_category = "";
            $detail = "";
            if($id_category == 1)
            {
                $detail = "detailphone";
                $name_category =  "Điện thoại";
                $table_product = "products_phone";
            }else if($id_category == 2)
            {
                $detail = "detaillaptop";
                $name_category =  "Laptop";
                $table_product = "products_laptop";
            }else if($id_category == 3)
            {
                $detail = "detailaccessories";
                $name_category =  "Phụ kiện";
                $table_product = "products_accessories";
            }
            $result = $this->productsModel->getDetail($id_product, $table_product);
            while( $row = mysqli_fetch_array($result))
            {
                $name_product = $row["name_product"];
                $product_img = $row["img_product"];
                $type = $row["type_name"];
                $price = $row["price"];
                $quantity = $row["quantity"];
            }
            if(!$this->cartModel->addcart($email, $id_category, $id_product, $name_product, $product_img, $type, $price, $quantity, $name_category )){
                echo "<script>alert('Sản phẩm đã có trong giỏ hàng');</script>";
            }
            echo "<script>window.location.href = 'http://localhost:8080/Ecommerce/user/products/".$detail."/".$id_product."';</script>";
        }
    }

?>