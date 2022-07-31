<?php
    if(!isset($_SESSION["email_user"])){
        echo "<h6 class='not-user'>Cần đăng nhập để sử dụng chức năng này</h6>";
    }else
    {
?>
<form action="cart/buy" method="post">
    <div class="main-profile">
        <div class="main-profile-left">
            <?php require_once "./mvc/views/profile/category-profile.php" ?>
        </div>
        <div class="main-profile-right">
            <div class="cart-top">
                <h3>Giỏ hàng</h3>
                <div class="cart-title">
                    <div class="title-product">
                        <p>Sản phẩm</p>
                    </div>
                    <div class="title-price">
                        <p>Đơn giá</p>
                    </div>
                    <div class="title-quantity">
                        <p>Số lượng</p>
                    </div>
                    <div class="title-total">
                        <p>Số tiền</p>
                    </div>
                    <div class="title-choose">
                        <p>Thao tác</p>
                    </div>
                </div>
            </div>
            <div class="cart-mid">
                <?php
                    if(mysqli_num_rows($data["cart_user"]) == 0){
                        echo "<h3 class='emty-cart'>Chưa có sản phẩm nào trong giỏ hàng</h3>";
                    }else{
                        while( $row = mysqli_fetch_array($data["cart_user"]) )
                        {
                    
                ?>
                <div class="card-product">
                    <div class="check">
                        <input type="checkbox">
                        <p><?php echo $row["name_category"] ?></p>
                    </div>
                    <div class="cart-title">
                        <div class="title-product">
                            <img src="../images/products/<?php if($row["id_category"] == 1){ echo "phones";}else if($row["id_category"] == 2){echo "laptops";}else if($row["id_category"] == 3){echo "accessories";} ?>/<?php echo $row["product_img"] ?>">
                            <p class="content-p"><?php echo $row["name_product"] ?></p>
                            <p class="type">Loại: <?php echo $row["type"] ?></p>
                        </div>
                        <div class="title-price">
                            <p class="price" id="price-cart-1"><?php echo number_format($row["price"], 0, ',', '.') ?></p>
                        </div>
                        <div class="title-quantity">
                            <div class="buttons_added mt-button">
                                <input class="minus is-form quantity-style" type="button" value="-" onclick="subquantity(1)">
                                <input aria-label="quantity" name="quantity" class="input-qty quantity-input" max="5" min="1" id="quantity-1" type="number" value="<?php echo $row["quantity"] ?>" onchange="test()">
                                <input class="plus is-form quantity-style" type="button" value="+" onclick="addquantity(1,5)">
                            </div>
                        </div>
                        <div class="title-total">
                            <p class="total" id="title-total-1"><?php echo $row["price"] ?></p>
                        </div>
                        <div class="title-choose">
                            <a href="#" class="delete">Xóa</a>
                        </div>
                    </div>
                </div>
                <?php
                        }
                    }
                ?>
                
            </div>
            <div class="cart-bottom">
                <p class="total-product">Số sản phẩm đã chọn: 0</p>
                <button class="buy-now" type="submit">Mua hàng</button>
                <p class="total-price">Tổng thanh toán: <span>0</span></p>
            </div>
        </div>
    </div>
</form>
<?php
    }
?>