<div class="main-product">
    <div class="search-product">
        <h3>Danh mục</h3>
        <ul>
            <?php
                while( $row = mysqli_fetch_array($data["category"]))
                {
            ?>
            <li>
                <a href="products/<?php echo $row["fold_img"] ?>"><?php echo $row["name_category"] ?></a>
                <button type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $row["id_category"] ?>" aria-expanded="false"></button>
                <div class= "collapse multi-collapse" id="collapse<?php echo $row["id_category"] ?>">
                    <ul class="sub-menu-product" >
                        <?php
                            foreach($data["sub_category"] as $key => $item)
                            {
                                if($row["id_category"] == $item["id_category"])
                                {
                        ?>
                        <li><a href="#"><?php echo $item["name_subcategory"] ?></a></li>
                        <?php
                                }
                            }
                        ?>
                    </ul>
                </div>
            </li>
            <?php
                }
            ?>
        </ul>
        <!--  start form search -->
        <form action="products/index/" method="get">
            <h3>Tìm kiếm</h3>
            <div class="display">
                <h6>Giá: </h6>
                <p id="min">0</p>
                <span>-</span>
                <p id="max">50.000.000</p>
            </div>
            <div class="range-slide">
                <div class="slide">
                    <div class="line" id="line" style="left: 0%; right: 0%;"></div>
                    <span class="thumb" id="thumbMin" style="left: 0%;"></span>
                    <span class="thumb" id="thumbMax" style="left: 100%;"></span>
                </div>
                <input id="rangeMin" name="rangeMin" type="range" data-min="0" value="0">
                <input id="rangeMax" name="rangeMax" type="range" data-max="100" value="100">
            </div>
            <button type="submit">lọc</button>
        </form>
        <!-- end form search -->
    </div>
    <div class="main-content-product">
        <div class="main-content-product-title">
            <h3>Sản phẩm</h3>
            <div class="center">
                <select name="sources" id="sources" class="custom-select sources" placeholder="Thứ tự mặc định">
                    <option value="profile" selected="selected"><b>Profile</b></option>
                    <option value="word">Word</option>
                    <option value="hashtag">Hashtag</option>
                </select>
            </div>
        </div>
        <div class="main-content-product-all">
            <?php
                foreach( $data["all_product"] as $key => $item)
                {
            ?>
            <div class="product-main">
                <div class="card h-100 shadow-sm">
                    <a href="products/<?php if($item["id_category"] == 1) {echo "detailphone";}else if($item["id_category"] == 2){echo "detaillaptop";}else if($item["id_category"] == 3){echo "detailaccessories";} ?>/<?php echo $item["id_product"] ?>">
                        <img src="../images/products/<?php foreach($data["fold"] as $key_fold => $item_fold){ if($item["id_category"] == $item_fold["id_category"]){echo $item_fold["fold_img"];} } ?>/<?php echo $item["img_product"] ?>" class="card-img-top" alt="product.title" />
                    </a>
                    <div class="label-top shadow-sm style-label">
                        <a class="text-white"><?php echo $item["type_name"] ?></a>
                    </div>
                    <div class="card-body">
                        <h3><a class="card-title" href="products/<?php if($item["id_category"] == 1) {echo "detailphone";}else if($item["id_category"] == 2){echo "detaillaptop";}else if($item["id_category"] == 3){echo "detailaccessories";} ?>/<?php echo $item["id_product"] ?>"><?php echo $item["name_product"] ?></a></h3>
                        <div class="clearfix mb-3">
                            <span class="card-price"><?php echo number_format($item["price"], 0, ',', '.') ?></span>
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
        </div>
    </div>
</div>