<?php #session_start();
    include "path.php";
    include "app/database/database.php"

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All teachers</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        table{
            border-collapse: collapse; 
            line-height: 1.1;
            font-family: "Playfair Display", sans-serif;
            width: 50%;
            text-align: center;
            margin-top: 20px;
            margin-left: 100px;
        }
        th {
            padding: 10px; 
            border-bottom: 1px solid #AD2622;
            border-top: 1px solid #AD2622;
            color: #AD2622;
        }
        td {
            font-size: 0.8em;
            padding: 5px 7px;
            border-bottom: 1px solid #AD2622;
        }
        td .input{
            border: none;
            font-family: "Playfair Display", sans-serif;
            text-align: center;
            line-height: 1.1;
        }
        .create{
            padding: 13px 20px;
            border-bottom: 1px solid #AD2622;
            text-decoration: none;
            font-weight: 700;
            background: white;
            margin-left: 400px;
            color: #AD2622; 
        }
        .create:hover{
            box-shadow: 0 1px 5px 0 #AD2622;
            color: #AD2622;
        }
        h4{
            margin-left: 100px;
            color: #AD2622;
            line-height: 1.1;
            font-family: "Playfair Display", sans-serif;
        }
        .lessons{
            margin-left: 100px;
            color: #AD2622;
            line-height: 1.1;
            font-family: "Playfair Display", sans-serif;
            width: 200px;
        }
    </style>
</head>
<body>
    <?php 
        $teachers = selectAll('teachers');
        include "app/include/header.php";
    ?>
    <div class="panels">
        <div class="left-panel">
            <?php include "app/include/sidebar3.php"; ?>
        </div>
        <div class="right-panel">
        <br>
        <a href="reg.php" class="create">Жаңа оқытушыны тіркеу</a><br>
            <form method="get">
                <table id="table">
                    <tr>
                        <th>Тегі</th>
                        <th>Аты</th>
                        <th>Логин</th>
                        <th>Электронды пошта</th>
                    </tr>
                    <?php foreach ($teachers as $key => $value): ?>
                    <tr>
                        <td><?=$value['surname']?></td>
                        <td><?=$value['name']?></td>
                        <td><?=$value['username']?></td>
                        <td><?=$value['email']?></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </form>
        </div>
    </div>

    <?php include "app/include/footer.php"; ?>

</body>
</html>