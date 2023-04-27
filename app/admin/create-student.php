<?php 
include "../database/database.php";
include "../../path.php";


if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['create-student'])){
    $role = 0;
    $name = trim($_POST['name']);
    $surname = trim($_POST['surname']);
    $login = trim($_POST['login']);
    $email = trim($_POST['mail']);
    $group = trim($_POST['group']);
    $passF = trim($_POST['pass-first']);
    $passS = trim($_POST['pass-second']);
            $pass = password_hash($passF, PASSWORD_DEFAULT);
            $user = [
                'role' => $role,
                'name' => $name,
                'surname' => $surname,
                'username' => $login,
                'email' => $email,
                'group' => $group,
                'password' => $pass
            ];
            $id = insert('students', $user);
            $user = selectOne('students', ['id' => $id] );
        }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <style>
        .card-body{
            width: 100%;
            background-color: #AD2622;
            border-radius: 10px;
            padding: 30px 25px;
            margin-top: 25px;
            box-shadow: 0 1px 20px 0 #AD2622;
            display: flex;
            justify-content: center;
        }
        .card-body h4{
            text-align: center;
            color: #D9D9D9;
            text-transform: uppercase;
        }
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
    <header id="header">
        <div class="main-icon">
            <a href="https://almatypolytech.edu.kz/">
                <img src="../../assets/img/logo.svg" alt="logo" width="160">
            </a>
        </div>
        <div class="header-links">
            <a href="https://www.instagram.com/polytechalmaty/" class="social_link"><span><ion-icon name="logo-instagram"></ion-icon></span></a>
            <a href="https://m.facebook.com/profile.php?id=100070603250345&_rdr" class="social_link"><span><ion-icon name="logo-facebook"></ion-icon></span></a>
            <a href="https://www.youtube.com/channel/UC0mlIq6b97sX5vfWLpEWdPA/videos" class="social_link"><span><ion-icon name="logo-youtube"></ion-icon></span></a>
            <a href="https://www.tiktok.com/@polytech_college?_t=8WNbG2CEXva&_r=1" class="social_link"><span><ion-icon name="logo-tiktok"></ion-icon></span></a>
        </div>
    </header>
    <div class="panels">
        <div class="left-panel">
            <?php include "../include/sidebar3.php"; ?>
        </div>
        <div class="right-panel">
            <div class="card-body">
                <form action="create-student.php" method="post">
                            <h4>Студентті тіркеу</h4>
                            <input name="name" type="text" placeholder="name..."><br><br>
                            <input name="surname" type="text" placeholder="surname..."><br><br>
                            <input name="login" type="text" placeholder="логин..."><br><br>
                            <input name="mail" type="email" placeholder="email..."><br><br>
                            <input name="group" type="text" placeholder="group..."><br><br>
                            <input name="pass-first" type="password" placeholder="құпиясөз..."><br><br>
                            <input name="pass-second" type="password" placeholder="құпиясөзді растау..."><br><br>
                            <button name="create-student" type="submit">Тіркеу</button>
                </form>
            </div>
        </div>
    </div>

    <?php include "../include/footer.php"; ?>

</body>
</html>