
<?php 
session_start();
if(isset($_SESSION['username'])){

require_once "adminTemplate/header.php"; 

require_once "adminTemplate/nav.php";  ?>



<div class="container-fluid">

    <div class="row p-5">
        <?php require_once "addStudent.php"; ?>
    </div>

    <div class="row p-5">
        <?php require_once "allStudents.php"; ?>
    </div>
</div>

<?php require_once "adminTemplate/footer.php";
}else{
    header("Location: login.php");
}
?>