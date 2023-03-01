
<?php
session_start();

require_once "connection.php";
if(!empty($_SESSION['username'])){
    if($_SERVER['REQUEST_METHOD']=='POST'){
      $student_name = $_POST['student_name'];         
      $student_image = $_FILES['student_image'];     
      $student_status = $_POST['student_status'];
      $courses = $_POST['courses'];
      $birth_date = $_POST['birth_date'];
      if(isset($student_name, $student_status, $courses, $birth_date)){
        if(!empty($student_image)){
            $fileName = $student_image['name'];
            $fileTemp = $student_image['tmp_name'];
            $explode = explode('.', $fileName);
            $fileExt = end($explode);
            $allowedExt = ['jpg', 'png', 'jpeg'];
            if(in_array($fileExt, $allowedExt)){
                move_uploaded_file($fileTemp, '../images/'.$fileName);
                $insert = $connection->prepare('INSERT INTO students (student_name, student_image, student_status, courses, birth_date) VALUES (?,?,?,?,?)');
                $insert->execute([$student_name, $fileName, $student_status, $courses, $birth_date]);
                header("Location: ../index.php");
            }else{
                echo "Sorry! Not allowed to upload that file!";
            }
        }
      }else{
        header("location: index.php");
      } 
    }
}
?>