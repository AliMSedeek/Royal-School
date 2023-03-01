<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="userTemplate/list.css">
</head>
<body>

<div class="mainContent" id="bigImage">

  <h4 class="indexTitle"> Our Students <span><i class="fa-regular fa-face-smile-beam"></i></span></h4>
  <div class="row" >
        
        <?php require_once "connection.php";
         require_once "Student.php";
         $select = $connection->prepare('SELECT * FROM students');
         $select->execute();
         $students = $select->fetchAll(PDO::FETCH_CLASS, 'Student');
         foreach($students as $student){
         ?>
        
        
        
        <div class="container col-4">
        <aside class="profile-card">

    <header>
  
      
      <a href="https://royalschool.com">
        <img src="admin/images/<?= $student->student_image ?>" class="card-img-top" alt="..." >
      </a>
  
      
      <h1><?= $student->student_name ?></h1>
  
      
  
    </header>
  
    
    <div class="profile-bio">
  
      <p><?= $student->birth_date ?></p>
      <p><?= $student->courses ?></p>
  
    </div>
  
    
    
  </aside>
  </div>
        <?php } ?>

 </div>
 </div>
</body>
</html>