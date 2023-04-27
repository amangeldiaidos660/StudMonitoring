<?php #session_start();
    include "path.php";
    include "app/controllers/attendance.php"
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student mark page</title>
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
        .submit{
            padding: 13px 20px;
            border: none;
            border-bottom: 1px solid #AD2622;
            text-decoration: none;
            font-weight: 700;
            margin-top: 10px;
            margin-left: 450px;
            background: white;
        }
        .submit:hover{
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
        include "app/include/header.php";
        $cur_date = date('Y-m-d');
    ?>
    <div class="panels">
        <div class="left-panel">
            <?php include "app/include/sidebar1.php"; ?>
        </div>
        <div class="right-panel">
            <form action="mark.php" method="post">
                <h4>Күні: <?php echo $cur_date; ?></h4>
                <select name="lessons" class="lessons">
                    <option selected>Пәнді таңдаңыз: </option>
                    <?php foreach($lessons as $key => $lesson): ?>
                        <option value="<?=$lesson['title'];?>"><?=$lesson['title'];?></option>
                    <?php endforeach; ?>
                </select>
                <table id="table">
                    <tr>
                        <th>Студент</th>
                        <th>Топ</th>
                        <th>Белсенділік</th>
                    </tr>
                    <?php foreach ($students as $key => $attend): ?>
                    <tr>
                        <td><input type="text" class="input" name="fullname" value="<?=$attend['surname'] . ' ' . $attend['name'];?>"></td>
                        <td><input type="text" class="input" name="group" value="<?=$attend['group'];?>"></td>
                        <td><input type="checkbox" name="attend[<?=$attend['id'];?>]"></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
                <input type="submit" name="button-save" class="submit">
            </form>
        </div>
    </div>

    <?php include "app/include/footer.php"; ?>

</body>
</html>