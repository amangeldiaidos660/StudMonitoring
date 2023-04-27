<?php 
    include "path.php";
    include "app/controllers/users.php";   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Stud Monitoring AGPK</title>
</head>
<body>
    <?php include "app/include/header.php"; ?>
    <section class="main-section">
        <div class="container">
            <div class="main-title">
                <h1>Студенттердің сабаққа қатысуын есепке алу және бақылаудың ақпараттық жүйесі</h1>
            </div>
            <div>
                <a class="btn" id="open-pop-up">Студент ретінде кіру</a>
                <a class="btn" id="open-pop-up-x2">Оқытушы ретінде кіру</a>
            </div>
        </div>

        <div class="pop_up" id="pop_up">
            <div class="pop_up_container">
                <div class="pop_up_body" id="pop_up_body">
                    <form action="index.php" method="post">
                        <h2>Кіру терезесі</h2>
                        <input type="text" placeholder="Логин" name="login" value="<?=$login?>">
                        <input type="password" placeholder="Пароль" name="password"><br>
                        <button type="submit" class="login_btn" name="button-log">Кіру</button><br>
                        <a href="https://wa.me/+77071824061">Құпия сөзді ұмыттыңыз ба?</a>
                        <p><?=$errMessage?></p>
                        <!--Страница для восс.пароля-->
                    </form>
                    <div class="pop_up_close" id="close_pop_up">&#10006</div>
                </div>
            </div>
        </div>
    </section>
    <?php include "app/include/footer.php"; ?>

<script src="assets/js/main.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>