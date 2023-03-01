<?php
if($_SERVER['REQUEST_METHOD']=='GET'&&!empty($_GET['student_id'])){
    require_once "connection.php";
    $delete=$connection->prepare('DELETE FROM students WHERE student_id=?');
    $delete->execute([$_GET['student_id']]);
    header("Location: ../index.php");
}
?>