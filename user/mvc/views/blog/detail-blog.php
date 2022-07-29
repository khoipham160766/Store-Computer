<div class="blog">
    <?php require_once "./mvc/views/blog/category-blog.php" ?>
    <div class="blog-content">
        <?php
            while( $row = mysqli_fetch_array($data["detail_blog"]))
            {
        ?>
        <h3><?php echo $row["title_blog"] ?></h3>
        <p><?php echo $row["content"] ?></p>
        <?php
            }
        ?>
    </div>
</div>