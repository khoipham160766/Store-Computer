<?php
    while( $row = mysqli_fetch_array($data["category_profile"]) )
    {
?>
<div class="info-user">
    <img src="../images/avatars/<?php echo $row["avatar"] ?>">
    <b>Xin chào</b>
    <p><?php echo $row["first_name"],"&nbsp", $row["last_name"] ?></p>
</div>
<?php
    }
?>
<ul>
    <li><a href="profile/profileuser"><i class="fa-solid fa-user icon-user"></i>Thông tin cá nhân</a></li>
    <li><a href="order"><i class="fa-solid fa-wallet icon-order"></i>Đơn hàng</a></li>
    <li><a href="cart"><i class="fa-solid fa-cart-shopping icon-cart"></i>Giỏ hàng</a></li>
    <li><a href="#"><i class="fa-solid fa-arrow-right-from-bracket icon-logout"></i>Đăng xuất</a></li>
</ul>