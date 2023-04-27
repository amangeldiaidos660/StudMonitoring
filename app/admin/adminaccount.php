<?php 
    include "../../path.php"; 
    include "../database/database.php";
    @session_start();
    $conn=mysqli_connect("localhost","root","mysql");
    mysqli_select_db($conn,"stud_monitoring");
    $sql="SELECT * FROM users WHERE id='".$_SESSION['id']."'";
    $run=mysqli_query($conn,$sql);
    $data=mysqli_fetch_assoc($run);
    ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin account</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <style>
        
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
    <div class="main-container">
        <div class="panels">
            <div class="left-panel">
                <?php include "../include/sidebar3.php"; ?>
            </div>
            <div class="right-panel">
                <div class="card-body">
                    <?php if(isset($_SESSION['id'])): ?>
                        <h4>Қолданушы деректері:         <?php echo $_SESSION['login']; ?></h4> 
                    <?php endif; ?>
                    <ul>
                        <li class="profile-content">
                            <dl>
                                <dt>Тегі</dt>
                                <dd><?php echo $data['surname']; ?></dd>
                            </dl>
                        </li>
                        <li class="profile-content">
                            <dl>
                                <dt>Аты</dt>
                                <dd><?php echo $data['name']; ?></dd>
                            </dl>
                        </li>
                        <li class="profile-content">
                            <dl>
                                <dt>Электронды пошта мекен-жайы</dt>
                                <dd><?php echo $data['email']; ?></dd>
                            </dl>
                        </li>
                        <li class="profile-content">
                            <dl>
                                <dt>Құпиясөз</dt>
                                <dd><?php echo $data['password']; ?></dd>
                            </dl>
                        </li>
                        <li class="profile-content">
                            <dl>
                                <dt>Қала</dt>
                                <dd>Алматы</dd>
                            </dl>
                        </li>
                        <li class="profile-content">
                            <dl>
                                <dt>Ел</dt>
                                <dd>Казахстан</dd>
                            </dl>
                        </li>
                        <!--<li class="edit-profile">
                            <span>
                                <a href="">Редактировать профиль</a>
                            </span>
                        </li>-->
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php include "../include/footer.php"; ?>
    <script>
        const menuToggle = document.querySelector(".menu-toggle");
        const nav = document.querySelector(".nav");
        menuToggle.onclick = function(){
            nav.classList.toggle('open');
        }

        const list = document.querySelectorAll(".list");
        function activeLink(){
            list.forEach((item)=>
            item.classList.remove('active'));
            this.classList.add('active');
        }
        list.forEach((item)=>
        item.addEventListener('click', activeLink))
        
    </script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>