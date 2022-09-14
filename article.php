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
    $id = $_GET['id'];
    $article = mysqli_query($connection, "SELECT * FROM articles WHERE id = $id");
    if (mysqli_num_rows($article) <= 0) {
    ?>
        <h1>Стаття не знайдена</p>
        <?php
    } else {
        $art = mysqli_fetch_assoc($article);
        mysqli_query($connection, "UPDATE articles SET views = views + 1 WHERE id = $id");
        ?>
            <h1 class="article_logo"><?php echo $art['title']; ?></h1>
            <i class="fa fa-eye">
                <?php echo $art['views']; ?>
            </i>
            <div class="article">
                <img src="media/img/<?php echo $art['image']; ?>">
                <p><?php echo $art['text']; ?></p>
            </div>
        <?php
    }
        ?>

        <?php require "blocks/footer.php" ?>
</body>

</html>