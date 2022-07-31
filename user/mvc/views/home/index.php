<div class="laptop">
    <div class="title-laptop">
        <span>LAPTOP</span>
    </div>
    <div class="new-product">
        <div class="mini-title-content">
            <span><i class="fa-solid fa-shekel-sign"></i> Sản phẩm mới</span>
        </div>
        <!-- start php call product -->
        <?php
         while ( $row = mysqli_fetch_array($data["new_laptop"])){
        ?>
        <div class="product">
            <div class="card h-100 shadow-sm">
                <a href="products/detaillaptop/<?php echo $row["id_product"] ?>"><img src="../images/products/laptops/<?php echo $row["img_product"] ?>" class="card-img-top" alt="product.title" /></a>
                <div class="label-top shadow-sm style-label">
                    <a class="text-white"><?php echo $row["type_name"] ?></a>
                </div>
                <div class="card-body">
                    <h3><a class="card-title" href="products/detaillaptop/<?php echo $row["id_product"] ?>"><?php echo $row["name_product"] ?></a></h3>
                    <div class="clearfix mb-3">
                        <span class="card-price"><?php echo number_format($row["price"], 0, ',', '.') ?></span>
                    </div>
                    <div class="clearfix mb-1">
                        <span class="float-start"><a href="#"><i class="fas fa-question-circle"></i></a></span>
                        <span class="float-end"><i class="far fa-heart" style="cursor: pointer"></i></span>
                    </div>
                </div>
            </div>
        </div>
        <?php
         }
        ?>
        <!-- end php -->
        <div class="btn-viewmore">
            <a href="#">XEM THÊM</a>
        </div>    
    </div>
    <div class="sell-product">
        <div class="mini-title-content">
            <span><i class="fa-solid fa-check-double"></i> Sản phẩm bán chạy</span>
        </div>
        <?php
         while ( $row = mysqli_fetch_array($data["sell_laptop"])){
        ?>
        <div class="product">
            <div class="card h-100 shadow-sm">
                <a href="products/detaillaptop/<?php echo $row["id_product"] ?>"><img src="../images/products/laptops/<?php echo $row["img_product"] ?>" class="card-img-top" alt="product.title" /></a>
                <div class="label-top shadow-sm style-label">
                    <a class="text-white"><?php echo $row["type_name"] ?></a>
                </div>
                <div class="card-body">
                    <h3><a class="card-title" href="products/detaillaptop/<?php echo $row["id_product"] ?>"><?php echo $row["name_product"] ?></a></h3>
                    <div class="clearfix mb-3">
                        <span class="card-price"><?php echo number_format($row["price"], 0, ',', '.') ?></span>
                    </div>
                    <div class="clearfix mb-1">
                        <span class="float-start"><a href="#"><i class="fas fa-question-circle"></i></a></span>
                        <span class="float-end"><i class="far fa-heart" style="cursor: pointer"></i></span>
                    </div>
                </div>
            </div>
        </div>
        <?php
         }
        ?>
        <div class="btn-viewmore">
            <a href="#">XEM THÊM</a>
        </div>
    </div>
</div>
<div class="phone">
    <div class="title-phone">
        <span>ĐIỆN THOẠI</span>
    </div>
    <div class="new-phone">
        <div class="mini-title-content">
            <span><i class="fa-solid fa-shekel-sign"></i> Sản phẩm mới</span>
        </div>
        <?php
            while( $row = mysqli_fetch_array($data["new_phone"]))
            {
        ?>
        <div class="product">
            <div class="card h-100 shadow-sm">
                <a href="products/detailphone/<?php echo $row["id_product"] ?>"><img src="../images/products/phones/<?php echo $row["img_product"] ?>" class="card-img-top" alt="product.title" /></a>
                <div class="label-top shadow-sm style-label">
                    <a class="text-white"><?php echo $row["type_name"] ?></a>
                </div>
                <div class="card-body">
                    <h3><a class="card-title" href="products/detailphone/<?php echo $row["id_product"] ?>"><?php echo $row["name_product"] ?></a></h3>
                    <div class="clearfix mb-3">
                        <span class="card-price"><?php echo number_format($row["price"], 0, ',', '.') ?></span>
                    </div>
                    <!-- <div class="d-grid gap-2 my-4">
                        <a href="#" class="btn add-cart">THÊM VÀO GIỎ HÀNG</a>
                    </div> -->
                    <div class="clearfix mb-1">
                        <span class="float-start"><a href="#"><i class="fas fa-question-circle"></i></a></span>
                        <span class="float-end"><i class="far fa-heart" style="cursor: pointer"></i></span>
                    </div>
                </div>
            </div>
        </div>   
        <?php
            }
        ?>
    </div>
    <div class="sell-phone">
        <div class="mini-title-content">
            <span><i class="fa-solid fa-check-double"></i> Sản phẩm bán chạy</span>
        </div>
        <?php
            while( $row = mysqli_fetch_array($data["sell_phone"]))
            {
        ?>
        <div class="product">
            <div class="card h-100 shadow-sm">
                <a href="products/detailphone/<?php echo $row["id_product"] ?>"><img src="../images/products/phones/<?php echo $row["img_product"] ?>" class="card-img-top" alt="product.title" /></a>
                <div class="label-top shadow-sm style-label">
                    <a class="text-white"><?php echo $row["type_name"] ?></a>
                </div>
                <div class="card-body">
                    <h3><a class="card-title" href="products/detailphone/<?php echo $row["id_product"] ?>"><?php echo $row["name_product"] ?></a></h3>
                    <div class="clearfix mb-3">
                        <span class="card-price"><?php echo number_format($row["price"], 0, ',', '.') ?></span>
                    </div>
                    <!-- <div class="d-grid gap-2 my-4">
                        <a href="#" class="btn add-cart">THÊM VÀO GIỎ HÀNG</a>
                    </div> -->
                    <div class="clearfix mb-1">
                        <span class="float-start"><a href="#"><i class="fas fa-question-circle"></i></a></span>
                        <span class="float-end"><i class="far fa-heart" style="cursor: pointer"></i></span>
                    </div>
                </div>
            </div>
        </div>   
        <?php
            }
        ?>
    </div>
</div>
<div class="accessories">
    <div class="title-accessories">
        <span>PHỤ KIỆN</span>
    </div>
    <div class="new-accessories">
        <div class="mini-title-content">
            <span><i class="fa-solid fa-shekel-sign"></i> Sản phẩm mới</span>
        </div>
        <?php
            while( $row = mysqli_fetch_array($data["new_accessories"]))
            {
        ?>
        <div class="product">
            <div class="card h-100 shadow-sm">
                <a href="products/detailaccessories/<?php echo $row["id_product"] ?>"><img src="../images/products/accessories/<?php echo $row["img_product"] ?>" class="card-img-top" alt="product.title" /></a>
                <div class="label-top shadow-sm style-label">
                    <a class="text-white"><?php echo $row["type_name"] ?></a>
                </div>
                <div class="card-body">
                    <h3><a class="card-title" href="products/detailaccessories/<?php echo $row["id_product"] ?>"><?php echo $row["name_product"] ?></a></h3>
                    <div class="clearfix mb-3">
                        <span class="card-price"><?php echo number_format($row["price"], 0, ',', '.') ?></span>
                    </div>
                    <!-- <div class="d-grid gap-2 my-4">
                        <a href="#" class="btn add-cart">THÊM VÀO GIỎ HÀNG</a>
                    </div> -->
                    <div class="clearfix mb-1">
                        <span class="float-start"><a href="#"><i class="fas fa-question-circle"></i></a></span>
                        <span class="float-end"><i class="far fa-heart" style="cursor: pointer"></i></span>
                    </div>
                </div>
            </div>
        </div>   
        <?php
            }
        ?>
    </div>
    <div class="sell-accessories">
        <div class="mini-title-content">
            <span><i class="fa-solid fa-check-double"></i> Sản phẩm bán chạy</span>
        </div>
        <?php
            while( $row = mysqli_fetch_array($data["sell_accessories"]))
            {
        ?>
        <div class="product">
            <div class="card h-100 shadow-sm">
                <a href="products/detailaccessories/<?php echo $row["id_product"] ?>"><img src="../images/products/accessories/<?php echo $row["img_product"] ?>" class="card-img-top" alt="product.title" /></a>
                <div class="label-top shadow-sm style-label">
                    <a class="text-white"><?php echo $row["type_name"] ?></a>
                </div>
                <div class="card-body">
                    <h3><a class="card-title" href="products/detailaccessories/<?php echo $row["id_product"] ?>"><?php echo $row["name_product"] ?></a></h3>
                    <div class="clearfix mb-3">
                        <span class="card-price"><?php echo number_format($row["price"], 0, ',', '.') ?></span>
                    </div>
                    <!-- <div class="d-grid gap-2 my-4">
                        <a href="#" class="btn add-cart">THÊM VÀO GIỎ HÀNG</a>
                    </div> -->
                    <div class="clearfix mb-1">
                        <span class="float-start"><a href="#"><i class="fas fa-question-circle"></i></a></span>
                        <span class="float-end"><i class="far fa-heart" style="cursor: pointer"></i></span>
                    </div>
                </div>
            </div>
        </div>   
        <?php
            }
        ?>
    </div>
</div>