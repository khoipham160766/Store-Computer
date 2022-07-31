<?php
    while( $row = mysqli_fetch_array($data["detail"]))
    {
?>
<form action="products/addcart/<?php echo $row["id_category"] ?>/<?php echo $row["id_product"] ?>" method="POST">
<div class="detail">
    <h3>Chi tiết</h3>
    <!-- top -->
    <div class="top-detail">
        <div class="left">
            <div class="main-img">
                <img class="img-phone" src="../images/products/phones/<?php echo $row["img_product"] ?>">
            </div>
            <div class="mini-img">
                <img src="../images/products/phones/<?php echo $row["img_product"] ?>">
            </div>
        </div>
        <div class="right">
            <h2><?php  echo $row["name_product"] ?></h2>
            <span>Thương hiệu: <?php  echo $row["type_name"] ?></span>
            <p class="price"><?php  echo number_format($row["price"], 0, ',', '.') ?></p>
            <p class="title">Kích thước</p>
                <select>
                    <option selected><?php  echo $row["hard_drive"] ?></option>
                </select>
            <p class="title">Màu sắc</p>
                <select class="selectpicker">
                    <option selected><?php  echo $row["color"] ?></option>
                </select></br></br>
            <input type="hidden" name="basequantity" value="<?php  echo $row["quantity"] ?>">
            <span>còn hàng: <?php  echo $row["quantity"] ?></span></br>
            <div class="buttons_added">
                <input class="minus is-form" type="button" value="-">
                <input aria-label="quantity" name="quantity" class="input-qty" max="<?php  echo $row["quantity"] ?>" min="1" name="" type="number" value="1">
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
                <td><?php  echo $row["model"] ?></td>
            </tr>
            <tr>
                <th>Camera</th>
                <td><?php  echo $row["camera"] ?></td>
            </tr>
            <tr>
                <th>Hệ điều hành</th>
                <td><?php  echo $row["os"] ?></td>
            </tr>
            <tr>
                <th>Màn hình</th>
                <td><?php  echo $row["screen"] ?></td>
            </tr>
            <tr>
                <th>Tốc độ CPU</th>
                <td><?php  echo $row["cpu"] ?> Hz</td>
            </tr>
            <tr>
                <th>Kích thước</th>
                <td><?php  echo $row["size"] ?></td>
            </tr>
            <tr>
                <th>Khối lượng</th>
                <td><?php  echo $row["weight"] ?> g</td>
            </tr>
            <tr>
                <th>Chất liệu</th>
                <td><?php  echo $row["material"] ?></td>
            </tr>
            <tr>
                <th>Chip</th>
                <td><?php  echo $row["chip"] ?></td>
            </tr>
            <tr>
                <th>Chip đồ họa</th>
                <td><?php  echo $row["chip_graphic"] ?></td>
            </tr>
            <tr>
                <th>Pin</th>
                <td><?php  echo $row["pin"] ?> mAh</td>
            </tr>
            <tr>
                <th>Sạc nhanh</th>
                <td><?php  echo $row["fast_charging"] ?> W</td>
            </tr>
        </table>
    </div>
    <!-- bottom -->
    <div class="bottom-detail">
        <h4><strong>Mô tả sản phẩm</strong></h4>
        <?php  echo $row["description"] ?>
    </div>
</div>
</form>
<?php
    }
?>
<!-- end php -->