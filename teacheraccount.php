<?php 
    include "path.php"; 
    include "app/database/database.php";
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
    <title>Teacher account</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php include("app/include/header.php"); ?>
    <div class="main-container">
        <div class="panels">
            <div class="left-panel">
                <?php include "app/include/sidebar1.php"; ?>
            </div>
            <div class="right-panel">
                <div class="card-body">
                    <?php if(isset($_SESSION['id'])): ?>
                        <h4>Қолданушы деректері: :         <?php echo $_SESSION['login']; ?></h4> 
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
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php include("app/include/footer.php"); ?>
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