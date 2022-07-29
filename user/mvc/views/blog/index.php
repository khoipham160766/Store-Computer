<div class="blog">
    <?php require_once "./mvc/views/blog/category-blog.php" ?>
    <div class="blog-content">
        <h3>BLOG</h3>
        <?php
            while( $row = mysqli_fetch_array($data["all_blog"]) )
            {
        ?>
        <div class="card mb-3 blog-content-card">
            <div class="row g-0">
                <div class="col-md-5">
                    <img src="../images/blog/<?php echo $row["main_img"] ?>" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-7">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row["title_blog"] ?></h5>
                        <p class="card-text"><?php echo $row["sub_recommend"] ?></p>
                        <p class="card-text"><small class="text-muted style-text-muted"><?php echo $row["time_create"] ?></small></p>
                        <a href="blog/detailblog/<?php echo $row["id_blog"] ?>" class="style-button-blog">XEM TIẾP</a>
                    </div>
                </div>
            </div>
        </div>
        <?php
            }
        ?>
    </div>
</div>