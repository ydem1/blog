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

    <div class="contact_info">


        <h1>Форма зворотнього зв'язку</h1>

        <form class="feedback">
            <input placeholder="Ім'я">
            <br><br>
            <input type="email" placeholder="Ел.пошта">
            <br><br>
            <select>
                <option disabled selected>Тема повідовлення</option>
                <option>Пропозиція</option>
                <option>Відгук</option>
                <option>Скарга</option>
            </select>
            <div class="email"><textarea rows="10" cols="100" placeholder="Повідомлення"> </textarea></div>
            <div> <button type="submit" value="submit">Відправити</button></div>
        </form>

        <h1>Контакти</h1>
        <div class="contact_grid">
            <div><i class="fa fa-mobile"></i><br><strong>Телефон</strong><br>
                <p>Київ Стар: +38 (096) 20 64 212</p>
            </div>
            <div><i class="fa fa-map"></i><br><strong>Адреса</strong><br>
                <p>м. Хмельницький</p>
            </div>
            <div><i class="fa fa-envelope"></i><br><strong>Email</strong><br><a href="mailto:vadimbavorovsky@gmail.com">vadimbavorovsky@gmail.com</a></div>
        </div>
    </div>

    <?php require "blocks/footer.php" ?>

</body>

</html>