<?php
if(isset($_SESSION["email_user"]))
{
    while ($row = mysqli_fetch_array($data["user_info"])){
?>
<div class="profile">
    <div class="profile-avatar">
        <img class="style-avatar" src="../images/avatars/<?php echo $row["avatar"] ?>">
        <span><?php echo $row["email"] ?></span>
        <button class="change-avatar" onclick="changeAvatar()">đổi ảnh</button>
    </div>
    <div class="profile-user">
       <h3>Thông tin cá nhân</h3>
       <table>
            <tr>
                <th>Họ tên</th>
                <td><?php echo $row["first_name"],"&nbsp", $row["last_name"] ?></td>
            </tr>
            <tr>
                <th>Số điện thoại</th>
                <td><?php echo $row["phone_number"] ?></td>
            </tr>
            <tr>
                <th>Địa chỉ</th>
                <td><?php echo $row["address"] ?></td>
            </tr>
            <tr>
                <th>Giới tính</th>
                <td><?php echo $row["gender"] ?></td>
            </tr>
            <tr>
                <th>Mật khẩu</th>
                <td>***********</td>
            </tr>
       </table>
       <div class="profile-user-button">
            <button onclick="changeProfile()">Thay đổi thông tin</button>
            <button onclick="changePassword()">Thay đổi mật khẩu</button>
       </div>
    </div>
</div>
<div class="form-change-info" id="form-change-info">
    <form onSubmit="return checkChangeInfo()" action="profile/changeprofile" method="post">
        <h3>Thay đổi thông tin</h3>
        <i class="fa-solid fa-xmark" onclick="exitChangeProfile()"></i>
        <div class="col-md-9 border-right style-change-form">
            <div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Họ và tên lót</label><input type="text" class="form-control" name="firstname" value="<?php echo $row["first_name"] ?>"></div>
                    <div class="col-md-6"><label class="labels">Tên</label><input type="text" class="form-control" id="name" name="lastname"  value="<?php echo $row["last_name"] ?>"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Số điện thoại</label><input type="text" class="form-control" name="phone" id="phone-number" value="<?php echo $row["phone_number"] ?>"></div>
                    <div class="col-md-12 mt-3"><label class="labels">Địa chỉ</label><input type="text" class="form-control"name="address" value="<?php echo $row["address"] ?>"></div>
                    <div class="col-md-12 mt-3">
                        <label class="labels">Giới tính</label>
                        <input type="radio" class="style-radio" value="Nam" name="gender" <?php echo ($row["gender"]=="Nam")?"checked":"" ?>/><span class="style-span">Nam</span>
                        <input type="radio" class="style-radio" value="Nữ" name="gender" <?php echo ($row["gender"]=="Nữ")?"checked":"" ?>/><span class="style-span">Nữ</span>
                    </div>
                </div>
                <p id="error-change-info" class="error"></p>
                <div class="mt-5 text-center"><button class="change-info-button" type="submit">Lưu thay đổi</button></div>
            </div>
        </div>
    </form>
</div>
<div class="form-change-info" id="form-change-password">
    <form onSubmit="return checkChangePassword()" action="profile/changepassword" method="post">
        <h3>Thay đổi mật khẩu</h3>
        <i class="fa-solid fa-xmark" onclick="exitChangePassword()"></i>
        <div class="col-md-9 border-right style-change-form">
            <div >
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Nhập mật khẩu cũ</label><input type="password" class="form-control style-input-password" name="old-password" value="" id="old-password"><i class="fa-solid fa-eye" onclick="viewOldPassword()"></i></div>
                    <div class="col-md-12 mt-3"><label class="labels">Nhập mật khẩu mới</label><input type="password" class="form-control style-input-password" name="new-password" value="" id="new-password"><i class="fa-solid fa-eye" onclick="viewNewPassword()"></i></div>
                    <div class="col-md-12 mt-3"><label class="labels">Nhập lại mật khẩu mới</label><input type="password" class="form-control style-input-password" value="" id="new-password-again"><i class="fa-solid fa-eye" onclick="viewNewPasswordAgain()"></i></div>
                </div>
                <p id="error-change-password" class="error"></p>
                <div class="mt-5 text-center"><button class="change-info-button" type="submit">Xác nhận</button></div>
            </div>
        </div>
    </form>
</div>
<div class="form-change-info" id="form-change-avatar">
    <form action="profile/changeavatar" method="post" enctype="multipart/form-data">
        <h3>Đổi ảnh đại diện</h3>
        <i class="fa-solid fa-xmark" onclick="exitChangeAvatar()"></i>
        <div class="col-md-9 border-right style-change-form">
            <div >
                <div class="row style-avatar">
                    <div class="div-img">
                        <img src="../images/avatars/<?php echo $row["avatar"] ?>" id="img-avatar">
                    </div>
                    <input type="file" name="avatar" id="file" class="inputfile" onchange="changeImg()">
                    <label for="file">Chọn ảnh</label>
                </div>
                <div class="mt-5 text-center"><button class="change-info-button" type="submit">Xác nhận</button></div>
            </div>
        </div>
    </form>
</div>
<?php
    }
}
?>