<?php require "includes/config.php" ?>
<!DOCTYPE html>
<html lang="ua">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/style2.css">
    <link href="https://fonts.googleapis.com/css2?family=Uchen&display=swap" rel="stylesheet">
    <title><?php echo $config['title'] ?></title>
</head>

<body>

    <?php require "blocks/header.php" ?>

    <?php require "blocks/categoriesNav.php" ?>

    <?php
    $articles = mysqli_query($connection, "SELECT * FROM articles ORDER BY pubdate DESC LIMIT 6");
    ?>

    <h1 class="blog_logo">Найновіші статті</h1>

    <div class="blog_grid">
        <?php
        while ($art = mysqli_fetch_assoc($articles)) {
        ?>
            <img src="/media/img/<?php echo $art['image']; ?>">
            <p>
                <a href="../article.php?id=<?php echo $art['id']; ?>">
                    <strong>
                        <?php echo $art['title']; ?>
                    </strong>
                    <br>
                    <?php echo mb_substr($art['text'], 0, 200, 'utf-8') . " ..."; ?>
                    <br>
                </a>
                <i class="fa fa-eye">
                    <?php echo $art['views']; ?>
                </i>
            </p>

        <?php
        }
        ?>
    </div>

    <?php
    $articles = mysqli_query($connection, "SELECT * FROM articles ORDER BY views DESC LIMIT 6");
    ?>
    <h1 class="blog_logo">Найбільш популярні статті</h1>

    <div class="blog_grid">
        <?php
        while ($art = mysqli_fetch_assoc($articles)) {
        ?>
            <img src="/media/img/<?php echo $art['image']; ?>">
            <p>
                <a href="../article.php?id=<?php echo $art['id']; ?>">
                    <strong>
                        <?php echo $art['title']; ?>
                    </strong>
                    <br>
                    <?php echo mb_substr($art['text'], 0, 200, 'utf-8') . " ..."; ?>
                    <br>
                </a>
                <i class="fa fa-eye">
                    <?php echo $art['views']; ?>
                </i>
            </p>

        <?php
        }
        ?>
    </div>

    <?php require "blocks/footer.php" ?>

</body>

</html>