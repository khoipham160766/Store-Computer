<div class="main-profile">
    <div class="main-profile-left">
        <?php require_once "./mvc/views/profile/category-profile.php" ?>
    </div>
    <div class="main-profile-right">
        <div class="option-order">
            <ul>
                <li><a href="order/wait">Chờ xác nhận</a></li>
                <li><a href="order/prepare">Chờ lấy hàng</a></li>
                <li><a href="order/delivering">Đang giao</a></li>
                <li><a href="order/complete">Đã giao</a></li>
            </ul>
        </div>
        <div class="product-order-card">
            <div class="top">
                <i class="fa-solid fa-truck"></i>
                <p>Chờ xác nhận</p>
                <span>Cửa hàng E-Tech</span>
            </div>
            <div class="mid">
                <div class="mid-product-card">
                    <a href="#">
                        <img src="../images/products/phones/iphone-13-pro-max.jpg">
                    </a>
                    <div class="info-product-card">
                        <b>iphone 13 pro max</b>
                        <span>Phân loại hàng: màu trắng, 256GB</span>
                        <p>x1</p>
                    </div>
                    <div class="price-product-card">
                        <p class="price-sale">6.000</p>
                        <p class="price-basic">10.000</p>
                        <p class="price">10.000</p>
                    </div>
                </div>
                <div class="mid-product-card">
                    <a href="#">
                        <img src="../images/products/phones/iphone-13-pro-max.jpg">
                    </a>
                    <div class="info-product-card">
                        <b>iphone 13 pro max</b>
                        <span>Phân loại hàng: màu trắng, 256GB</span>
                        <p>x1</p>
                    </div>
                    <div class="price-product-card">
                        <p class="price-sale">6.000</p>
                        <p class="price-basic">10.000</p>
                        <p class="price">10.000</p>
                    </div>
                </div>
            </div>
            <div class="bottom">
                <div class="price-total">
                    <p>12.000</p>
                    <span>Tổng tiền:</span>
                    <i class="fa-solid fa-money-bill"></i>
                </div>
                <p class="bottom-style-p">Ngày đặt mua <span>17-07-2022</span></p>
                <button class="bottom-style-button">Hủy đơn</button>
            </div>
        </div>
    </div>
</div>