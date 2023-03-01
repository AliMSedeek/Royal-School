<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="adminTemplate/card.css">
</head>
<body>

<aside class="profile-card">

    <?php require_once "../connection.php";
        require_once "../Student.php";
        if($_SERVER['REQUEST_METHOD']=='GET'&&!empty($_GET['student_id'])){
        $select = $connection->prepare('SELECT * FROM students where student_id=?');
        $select->execute([$_GET['student_id']]);
        $select->setFetchMode(PDO::FETCH_CLASS, 'Student');
        $student = $select->fetch();
        ?>


    <header>
        
        
            <img src="images/<?= $student->student_image ?>" class="card-img-top" alt="pic">
        
        
        
        <h1><?= $student->student_name ?></h1>
        
        
    
    </header>

    
    <div class="profile-bio">
    
        <h4><?= $student->birth_date ?></h4>
        <h4><?= $student->courses ?></h4>
    
    </div>

   
    <?php } ?>
</aside>

</body>
</html>