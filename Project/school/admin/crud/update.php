<?php
if($_SERVER['REQUEST_METHOD']=='POST'&&!empty($_POST['student_id'])){
    session_start();
    
    require_once "connection.php";
    if(!empty($_SESSION['username'])){
          $student_name = $_POST['student_name'];     
          $courses = $_POST['courses'];     
          $stu_img = $_FILES['student_image'];     
          $birth_date = $_POST['birth_date'];
          $student_status = $_POST['student_status'];
          $student_id = $_POST['student_id'];
          if(isset($student_name,$courses,$birth_date,$student_status)){
            if(!empty($stu_img)){
                var_dump($stu_img);
                $fileName = $stu_img['name'];
                $fileTemp = $stu_img['tmp_name'];
                $explode = explode('.', $fileName);
                $fileExt = end($explode);
                $allowedExt = ['jpg', 'png', 'jpeg'];
                if(in_array($fileExt, $allowedExt)){
                    move_uploaded_file($fileTemp, '../images/'.$fileName);
                    $update = $connection->prepare('UPDATE students SET student_name=?,courses=?, student_image=?,birth_date=?,student_status=? WHERE student_id=?');
                    $update->execute([$student_name,$courses,$fileName,$birth_date,$student_status,$student_id]);
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