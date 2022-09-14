<?php
$categories = mysqli_query($connection, "SELECT * FROM articles_categories ")
?>
<div class="categories">

    <ul>
        <?php
        while ($cat = mysqli_fetch_assoc($categories)) {
        ?>
            <li><a href="../articles_categories.php?id=<?php echo $cat['id']; ?>"><?php echo $cat['title']  ?></a></li>
        <?php
        }
        ?>
        <!-- <<li><a href="./articles_categories.php?id">Всі категорії</a></li>   </h1>  -->

    </ul>
</div>