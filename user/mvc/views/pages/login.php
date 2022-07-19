<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../images/mini-logo.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./public/css/login.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>E-Tech Store</title>
</head>
<body>
    <h2>Chào mừng bạn đến với E-Tech</h2>
    <img src="../images/logo.png" class="style-img" >
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="#">
                <h1>Tạo tài khoản</h1>
                <input type="text" placeholder="Họ tên" />
                <input type="email" placeholder="Email" />
                <input type="password" placeholder="Mật khẩu" />
                <input type="password" placeholder="Nhập lại mật khẩu" />
                <input type="text" placeholder="Địa chỉ" />
                <input type="text" placeholder="Số điện thoại" />
                <button>Đăng ký</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="#">
                <h1>Đăng nhập</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>hoặc sử dụng tài khoản</span>
                <input type="email" placeholder="Email đăng nhập..." />
                <input type="password" placeholder="Mật khẩu..." />
                <a href="#">Quên mật khẩu ?</a>
                <button>Đăng nhập</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Chào mừng bạn!</h1>
                    <p>Nếu bạn đã có tài khoản. Hãy chọn</p>
                    <button class="ghost" id="signIn">Đăng nhập</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hãy tham gia với chúng tôi</h1>
                    <p>Nếu bạn chưa có tài khoản. Hãy chọn</p>
                    <button class="ghost" id="signUp">Đăng ký</button>
                </div>
            </div>
        </div>
    </div>
    
    <script type="text/javascript" src="./public/js/login.js"></script>
</body>
</html>