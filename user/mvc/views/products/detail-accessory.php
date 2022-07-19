
<form action="products/buylaptop" method="POST">
<div class="detail">
    <h3>Chi tiết</h3>
    <!-- top -->
    <div class="top-detail">
        <div class="left">
            <div class="main-img">
                <img class="img-phone" src="../images/products/accessories/hydrus-pj.jpg">
            </div>
            <div class="mini-img">
                <img src="../images/products/accessories/hydrus-pj.jpg">
            </div>
        </div>
        <div class="right">
            <h2>Iphone 13 pro max</h2>
            <span>Thương hiệu: Iphone</span>
            <p class="price"><?php  echo number_format('32990000', 0, ',', '.') ?></p>
            <p class="title">Kích thước</p>
                <select>
                    <option selected>SSD 512GB</option>
                    <option>SSD 256GB</option>
                </select>
            <p class="title">Màu sắc</p>
                <select class="selectpicker">
                    <option selected>Đen</option>
                    <option>Trắng</option>
                </select></br></br>
            <input type="hidden" name="basequantity" value="5">
            <span>còn hàng: 21</span></br>
            <div class="buttons_added">
                <input class="minus is-form" type="button" value="-">
                <input aria-label="quantity" name="quantity" class="input-qty" max="5" min="1" name="" type="number" value="1">
                <input class="plus is-form" type="button" value="+">
            </div></br>
            <button type="submit" class="add-button"><i class="fa-solid fa-cart-shopping"></i>THÊM VÀO GIỎ</button>
            <button type="submit" class="buy-button"><i class="fa-solid fa-check"></i>MUA NGAY</button>
        </div>
    </div>
    <!-- mid -->
    <div class="mid-detail">
        <h4><strong>Thông tin chi tiết</strong></h4>
        <table>
            <tr>
                <th>Model</th>
                <td>Iphone 13 Pro Max</td>
            </tr>
            <tr>
                <th>Camera</th>
                <td>3 camera 12 MP</td>
            </tr>
            <tr>
                <th>Hệ điều hành</th>
                <td>IOS 15</td>
            </tr>
            <tr>
                <th>Màn hình</th>
                <td>OLED, 6.7", Super Retina XDR</td>
            </tr>
            <tr>
                <th>Tốc độ CPU</th>
                <td>1.6Hz</td>
            </tr>
            <tr>
                <th>Kích thước</th>
                <td>160.8 x 78.1 x7.65 mm</td>
            </tr>
            <tr>
                <th>Khối lượng</th>
                <td>240 g</td>
            </tr>
            <tr>
                <th>Chất liệu</th>
                <td>Khung thép không ghỉ và mặt lưng kính cường lực</td>
            </tr>
            <tr>
                <th>Chip</th>
                <td>Apple A15 Bionic</td>
            </tr>
            <tr>
                <th>Chip đồ họa</th>
                <td>Apple GPU 5 nhân</td>
            </tr>
            <tr>
                <th>Pin</th>
                <td>4352 mAh</td>
            </tr>
            <tr>
                <th>Sạc nhanh</th>
                <td>20 W</td>
            </tr>
        </table>
    </div>
    <!-- bottom -->
    <div class="bottom-detail">
        <h4><strong>Mô tả sản phẩm</strong></h4>
        <p>update...</p>
    </div>
</div>
</form>
<!-- end php -->