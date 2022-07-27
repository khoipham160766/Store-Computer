<!-- start php -->
<?php
    while($row = mysqli_fetch_array($data["detail"])){
?>
<form action="products/buylaptop/<?php echo $row["id"] ?>" method="POST">
<div class="detail">
    <h3>Chi tiết</h3>
    <!-- top -->
    <div class="top-detail">
        <div class="left">
            <div class="main-img">
                <img class="img-laptop" src="../images/products/laptops/<?php echo $row["hinhanh"] ?>">
            </div>
            <div class="mini-img">
                <img src="../images/products/laptops/<?php  echo $row["hinhanh"] ?>">
            </div>
        </div>
        <div class="right">
            <h2><?php  echo $row["tensp"] ?></h2>
            <span>Thương hiệu: <?php  echo $row["thuonghieu"] ?></span>
            <p class="price"><?php  echo number_format($row["gia"], 0, ',', '.') ?></p>
            <p class="title">Màu sắc</p>
                <select class="selectpicker">
                    <option selected>Đen</option>
                    <option>Trắng</option>
                </select></br></br>
            <?php
                if($row["soluong"] != 0){
            ?>
            <input type="hidden" name="basequantity" value="<?php  echo $row["soluong"] ?>">
            <span>còn hàng: <?php  echo $row["soluong"] ?></span></br>
            <div class="buttons_added">
                <input class="minus is-form" type="button" value="-">
                <input aria-label="quantity" name="quantity" class="input-qty" max="<?php echo $row["soluong"] ?>" min="1" name="" type="number" value="1">
                <input class="plus is-form" type="button" value="+">
            </div></br>
            <button type="submit" class="add-button"><i class="fa-solid fa-cart-shopping"></i>THÊM VÀO GIỎ</button>
            <button type="submit" class="buy-button"><i class="fa-solid fa-check"></i>MUA NGAY</button>
            <?php
                } else {
            ?>
                        <h5>Hết hàng</h5>
            <?php
                }
            ?>
        </div>
    </div>
    <!-- mid -->
    <div class="mid-detail">
        <h4><strong>Thông tin chi tiết</strong></h4>
        <table>
            <tr>
                <th>Khối lượng</th>
                <td>1.35kg</td>
            </tr>
            <tr>
                <th>Ổ cứng</th>
                <td>SSD 256GB</td>
            </tr>
            <tr>
                <th>Model</th>
                <td>Update...</td>
            </tr>
            <tr>
                <th>Hệ điều hành</th>
                <td>Windows</td>
            </tr>
            <tr>
                <th>Tốc độ CPU</th>
                <td>1.6Hz</td>
            </tr>
            <tr>
                <th>Kích thước</th>
                <td>300 x 192 x 17 mm</td>
            </tr>
            <tr>
                <th>Các tính năng khác</th>
                <td>Bluetooth 4.0, Wifi</td>
            </tr>
            <tr>
                <th>Chip</th>
                <td>Itel core i5</td>
            </tr>
            <tr>
                <th>Card đồ họa</th>
                <td>Intel Graphics 6000</td>
            </tr>
            <tr>
                <th>Pin</th>
                <td>3 Cell</td>
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
<?php
    }
?>
<!-- end php -->