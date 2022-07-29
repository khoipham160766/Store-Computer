<div class="blog-menu">
    <h3>DANH MỤC BLOG</h3>
    <ul>
    <li><a href="blog/">Tất Cả</a></li>
        <?php
            while( $row = mysqli_fetch_array($data["category_blog"]) )
            {
        ?>
        <li><a href="blog/typeblog/<?php echo $row["name_category"] ?>"><?php echo $row["name_category"] ?></a></li>
        <?php
            }
        ?>
    </ul>
</div>