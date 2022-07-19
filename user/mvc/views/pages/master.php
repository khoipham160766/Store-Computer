<!DOCTYPE html>
<html lang="en">
<head>
    <base href="http://localhost:8080/Ecommerce/user/" />
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../images/mini-logo.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="./public/css/myStyle.css" >
    <link rel="stylesheet" type="text/css" href="./public/css/header.css" >
    <link rel="stylesheet" type="text/css" href="./public/css/banner.css" >
    <link rel="stylesheet" type="text/css" href="./public/css/footer.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>E-Tech Store</title>
</head>
<body id="main-body">
    <?php require_once "./mvc/views/header/index.php" ?>
    <?php 
        if($data["view"]=="home/index.php")
            require_once "./mvc/views/banner/index.php"; 
    ?>
    <div class="content">
        <?php  require_once "./mvc/views/".$data["view"] ?>
    </div>
    <?php require_once "./mvc/views/footer/index.php" ?>
    
    <script type="text/javascript" src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="./public/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="./public/js/myStyle.js"></script>
</body>
</html>