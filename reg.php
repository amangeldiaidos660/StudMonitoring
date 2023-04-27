<?php 
    include "path.php";
    //include "app/database/database.php";
    include "app/controllers/users.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Кабинет админа</title>
    <style>
        input{
            display: block;
            margin: 5px auto 0px auto;
            width: 500px;
            padding: 17px 20px;
            background-color: #fff;
            border-radius: 20px;
            border: none;
            font-family: 'Playfair Display', sans-serif;
            font-size: 14px;
            color: #AD2622;
            text-align: center;
            font-weight: bold;
        }
        button{
            cursor: pointer;
            display: block;
            width: 500px;
            margin: 5px auto 0px auto;
            padding: 17px 0;
            font-family: 'Playfair Display', sans-serif;
            font-size: 16px;
            border: none;
            color: #AD2622;
            border-radius: 20px;
            background-color: #fff;
        }
    </style>
</head>
<body>
    <?php include "app/include/header.php"; ?>
    <section class="reg">
        <form action="" method="post">
            <input name="name" type="text" placeholder="введите name..."><br><br>
            <input name="surname" type="text" placeholder="введите surname..."><br><br>
            <input name="login" type="text" placeholder="введите ваш логин..."><br><br>
            <input name="mail" type="email" placeholder="введите ваш email..."><br><br>
            <input name="pass-first" type="password" placeholder="введите ваш пароль..."><br><br>
            <input name="pass-second" type="password" placeholder="повторите ваш пароль..."><br><br>
            <button name="button-reg" type="submit">Тіркеу</button>
        </form>

    </section>
    <?php include "app/include/footer.php"; ?>

<script src="assets/js/main.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>