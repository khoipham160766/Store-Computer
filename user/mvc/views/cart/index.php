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
                <div class="card-product">
                    <div class="check">
                        <input type="checkbox">
                        <p>Điện thoại</p>
                    </div>
                    <div class="cart-title">
                        <div class="title-product">
                            <img src="../images/products/phones/iphone-13-pro-max.jpg">
                            <p class="content-p">iphone 13 pro max</p>
                            <p class="type">Loại: màu bạc, 256GB</p>
                        </div>
                        <div class="title-price">
                            <p class="price" id="price-cart-1"><?php echo number_format('28000000', 0, ',', '.') ?></p>
                        </div>
                        <div class="title-quantity">
                            <div class="buttons_added mt-button">
                                <input class="minus is-form quantity-style" type="button" value="-" onclick="subquantity(1)">
                                <input aria-label="quantity" name="quantity" class="input-qty quantity-input" max="5" min="1" id="quantity-1" type="number" value="1" onchange="test()">
                                <input class="plus is-form quantity-style" type="button" value="+" onclick="addquantity(1,5)">
                            </div>
                        </div>
                        <div class="title-total">
                            <p class="total" id="title-total-1">29.000.000</p>
                        </div>
                        <div class="title-choose">
                            <a href="#" class="delete">Xóa</a>
                        </div>
                    </div>
                </div>
                <div class="card-product">
                    <div class="check">
                        <input type="checkbox">
                        <p>Điện thoại</p>
                    </div>
                    <div class="cart-title">
                        <div class="title-product">
                            <img src="../images/products/phones/iphone-13-pro-max.jpg">
                            <p class="content-p">iphone 13 pro max</p>
                            <p class="type">Loại: màu bạc, 256GB</p>
                        </div>
                        <div class="title-price">
                            <p class="price" id="price-cart-2"><?php echo number_format('30000000', 0, ',', '.') ?></p>
                        </div>
                        <div class="title-quantity">
                            <div class="buttons_added mt-button">
                                <input class="minus is-form quantity-style" type="button" value="-" onclick="subquantity(2)">
                                <input aria-label="quantity" name="quantity" class="input-qty quantity-input" max="5" min="1" id="quantity-2" type="number" value="1">
                                <input class="plus is-form quantity-style" type="button" value="+" onclick="addquantity(2,5)">
                            </div>
                        </div>
                        <div class="title-total">
                            <p class="total" id="title-total-2">29.000.000</p>
                        </div>
                        <div class="title-choose">
                            <a href="#" class="delete">Xóa</a>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="cart-bottom">
                <p class="total-product">Số sản phẩm đã chọn: 8</p>
                <button class="buy-now" type="submit">Mua hàng</button>
                <p class="total-price">Tổng thanh toán: <span>21.000.000</span></p>
            </div>
        </div>
    </div>
</form>