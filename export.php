<?php
//include "app/database/connect.php";
$connect = mysqli_connect("localhost", "root", "mysql", "stud_monitoring");
$output = '';
if(isset($_POST["export"])){
    $sql = "SELECT * FROM attendance ORDER BY id DESC";
    $result = mysqli_query($connect, $sql);
    if(mysqli_num_rows($result) > 0){
        $output .= '
        <table class="table" bordered="1">
            <tr>
                <th>ФИО</th>
                <th>Группа</th>
                <th>Активность</th>
                <th>Дата</th>
            </tr>
        ';
        while($row = mysqli_fetch_array($result)){
            $output .= '
                <tr>
                    <td>'.$row["fullname"].'</td>
                    <td>'.$row["group"].'</td>
                    <td>'.$row["attendance"].'</td>
                    <td>'.$row["date"].'</td>
                </tr>
            ';
        }
        $output .= '</table>';
        header("Content-Type: application/xls");
        header("Content-Disposition: attachment; filename=download.xls");
        echo $output;

    }

}
