<?php
    include "app/database/database.php";
    include "app/database/connect.php";

$lesson_title = '';
$students = selectAll('students');
$records = selectAllFromAttendanceWithTeacher('attendance', 'teachers');
$lessons = selectAll('lessons');


if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['button-save'])){
    $id_teacher = $_SESSION['id'];
    $lesson_title = trim($_POST['lessons']);
    $fullname = trim($_POST['fullname']);
    $group = trim($_POST['group']);
    $attendance = 'Қатыспады';
    if (isset($_POST['attend'])) $attendance = 'Қатысты';
        $sql = "INSERT INTO `attendance` (`id`, `id_teacher`, `lesson_title`,`fullname`, `group`, `attendance`, `date`) VALUES (NULL, '$id_teacher', '$lesson_title', '$fullname', '$group', '$attendance', CURRENT_TIMESTAMP)";
        $query = $pdo->prepare($sql);
        $query -> execute();
        return $pdo->lastInsertId();
}