<div class="main-buy">
    <div class="address">
        <div class="line-top-address"></div>
        <h3><i class="fa-solid fa-location-dot"></i>Địa Chỉ Nhận Hàng</h3>
        <b class="name-buyer" id="name-buyer">Phạm Trần Khôi</b>
        <b class="phone-buyer" id="phone-buyer">(079466791)</b>
        <p class="address-buyer" id="address-buyer">56/6A, Khu Phố 7, Phường Tân Hưng Thuận, Quận 12, TP.HCM</p>
        <p class="change-address" id="change-address">THAY ĐỔI</p>
        <input type="hidden" id="info-order" value="">
    </div>
    <div class="products">
        <div class="product-title">
            <ul>
                <li class="title-product">Sản phẩm</li>
                <li class="price-title">Đơn giá</li>
                <li class="quantity-title">Số lượng</li>
                <li class="total-title">Thành tiền</li>
            </ul>
        </div>
        <div class="content-buy">
            <div class="content-product">
                <img src="../images/products/phones/iphone-13-pro-max.jpg">
                <label>Iphone 13 pro max</label>
                <label class="type">Loại: màu bạc, 256GB</label>
            </div>
            <div class="price-content">
                <p>29.000.000</p>
            </div>
            <div class="quantity-content">
                <span>2</span>
            </div>
            <div class="total-content">
                <p>58.000.000</p>
            </div>
        </div>
        <div class="note">
            <label>Lời nhắn:</label>
            <input type="text" name="note" placeholder="Lưu ý...">
        </div>
        <div class="total-price">
            <p class="price">58.000.000</p>
            <span class="label-price">Tổng số tiền (2 sản phẩm):</span>
        </div>
    </div>
    <div class="payments">
        <div class="method-pay">
            <h3>Phương thức thanh toán</h3>
            <input type="radio" name="pay" id="off" checked><label for="off"></label>
            <span>Thanh toán khi nhận hàng.</span>
            <input type="radio" name="pay" id="on" disabled><label for="on"></label>
            <span>Thẻ tín dụng.</span>
        </div>
        <div class="buy">
            <div class="price-buy">
                <p>Tổng thanh toán: <span>58.000.000</span></p>
            </div>
            <div class="btn-buy">
                <button>Đặt Hàng</button>
            </div>
        </div>
    </div>
    <div class="form-change-address" id="form-change-address">
        <h3>Thay đổi địa chỉ giao hàng</h3>
        <i class="fa-solid fa-xmark" id="exit-form-change-address"></i>
        <div class="col-md-9 border-right style-change-form">
            <div>
                <div class="row mt-2">
                    <div class="col-md-12"><label class="labels">Họ và tên</label><input type="text" class="form-control" id="new-name-buyer" value=""></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Số điện thoại</label><input type="text" class="form-control" id="new-phone-buyer" value=""></div>
                    <div class="col-md-12 mt-3"><label class="labels">Địa chỉ</label><input type="text" class="form-control" id="new-address-buyer" value=""></div>
                </div>
                <p id="error-change-info" class="error"></p>
                <div class="mt-5 text-center"><button class="change-info-button" type="button" id="btn-change-address" >Lưu thay đổi</button></div>
            </div>
        </div>
    </div>
</div>