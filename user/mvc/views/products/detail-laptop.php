<!-- start php -->
<?php
    while($row = mysqli_fetch_array($data["detail"])){
?>
<form action="products/addcart/<?php echo $row["id_category"] ?>/<?php echo $row["id_product"] ?>" method="POST">
<div class="detail">
    <h3>Chi tiết</h3>
    <!-- top -->
    <div class="top-detail">
        <div class="left">
            <div class="main-img">
                <img class="img-laptop" src="../images/products/laptops/<?php echo $row["img_product"] ?>">
            </div>
            <div class="mini-img">
                <img src="../images/products/laptops/<?php  echo $row["img_product"] ?>">
            </div>
        </div>
        <div class="right">
            <h2><?php  echo $row["name_product"] ?></h2>
            <span>Thương hiệu: <?php  echo $row["type_name"] ?></span>
            <p class="price"><?php  echo number_format($row["price"], 0, ',', '.') ?></p>
            <p class="title">Màu sắc</p>
                <select class="selectpicker">
                    <option selected><?php  echo $row["color"] ?></option>
                </select></br></br>
            <?php
                if($row["quantity"] != 0){
            ?>
            <input type="hidden" name="basequantity" value="<?php  echo $row["quantity"] ?>">
            <span>còn hàng: <?php  echo $row["quantity"] ?></span></br>
            <div class="buttons_added">
                <input class="minus is-form" type="button" value="-">
                <input aria-label="quantity" name="quantity" class="input-qty" max="<?php echo $row["quantity"] ?>" min="1" name="" type="number" value="1">
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
                <td><?php  echo $row["weight"] ?> kg</td>
            </tr>
            <tr>
                <th>Ổ cứng</th>
                <td><?php  echo $row["hard_drive"] ?></td>
            </tr>
            <tr>
                <th>Model</th>
                <td><?php  echo $row["model"] ?></td>
            </tr>
            <tr>
                <th>Hệ điều hành</th>
                <td><?php  echo $row["os"] ?></td>
            </tr>
            <tr>
                <th>Tốc độ CPU</th>
                <td><?php  echo $row["cpu"] ?></td>
            </tr>
            <tr>
                <th>Kích thước</th>
                <td><?php  echo $row["size"] ?></td>
            </tr>
            <tr>
                <th>Các tính năng khác</th>
                <td><?php  echo $row["other"] ?></td>
            </tr>
            <tr>
                <th>Chip</th>
                <td><?php  echo $row["chip"] ?></td>
            </tr>
            <tr>
                <th>Card đồ họa</th>
                <td><?php  echo $row["chip_graphic"] ?>/td>
            </tr>
            <tr>
                <th>Pin</th>
                <td><?php  echo $row["pin"] ?></td>
            </tr>
        </table>
    </div>
    <!-- bottom -->
    <div class="bottom-detail">
        <h4><strong>Mô tả sản phẩm</strong></h4>
        <?php  echo $row["decription"] ?>
    </div>
</div>
</form>
<?php
    }
?>
<!-- end php -->