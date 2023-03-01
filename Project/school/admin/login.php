
<?php 
session_start();
require_once "adminTemplate/header.php"; ?>
<div class="container-fluid">

  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12">
        
        <?php if(empty($_SESSION['username'])){ ?>
        <div class="card login-content shadow-lg border-0">
          <div class="card-body">
            <div class="text-center">
            <img class="kidLogo" alt="Student icon" srcset="https://img.icons8.com/external-flaticons-lineal-color-flat-icons/512/external-student-edutainment-flaticons-lineal-color-flat-icons-4.png 2x, https://img.icons8.com/external-flaticons-lineal-color-flat-icons/256/external-student-edutainment-flaticons-lineal-color-flat-icons-4.png 1x" src="https://img.icons8.com/external-flaticons-lineal-color-flat-icons/512/external-student-edutainment-flaticons-lineal-color-flat-icons-4.png" style="width: 256px; height: 256px;">
            </div>
           
            <br>
            
            <form class="text-center" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
              <input id="studentLogIn" class="form-control border-0" type="text" name="username" placeholder="Type Your Username">
              <br>
              <input id="studentLogIn" class="form-control border-0" type="password" name="password" placeholder="Type Your Password">
              <br>
              <button id="studentSubmit" class="btn btn-primary btn-sm border-0" type="submit" name="submit">Sign In</button>
              
            </form>
            <?php 
            
            if(!empty($_POST['username'])&&!empty($_POST['password'])){
                $username = $_POST['username'];
                $password = $_POST['password'];
                if($username == 'admin' && $password=='123456'){
                    $_SESSION['username'] = $username;
                    header("Location: index.php");
                }else{
                    echo "<center style='color: rgb(210, 4, 45); margin-top:60px;'> wrong user name or password !! </center>";
                }
            }
             ?>
          </div>
          <div class="nomember">
            <p class="text-center">Not a member? <a href="">Create an Account</a></p>
          </div>
        </div>
        <?php } else {
            echo "<h3 style='padding:250px;' > You Are Already Logged In! Go to <a href='index.php'> Dashboard </a> </h3>";
        }?>
      </div>
    </div>
  </div>
</div>

<?php require_once "adminTemplate/footer.php"; ?>
