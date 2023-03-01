<table class="table" style="text-align:center;">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Student Name</th>
      <th scope="col">Student Status</th>
      <th scope="col">Birth Date</th>
      <th scope="col">Courses</th>
      <th scope="col">Remove</th>
      <th scope="col">Edit</th>
      <th scope="col">Show</th>
    </tr>
  </thead>
  <tbody>
  <?php require_once "crud/connection.php";
   require_once "../Student.php";
   $select = $connection->prepare('SELECT * FROM students');
   $select->execute();
   $students = $select->fetchAll(PDO::FETCH_CLASS, 'Student');
   foreach($students as $student){ 
  ?>
    <tr style="color:#4723D9; text-align:center;">
      <th scope="row"><?= $student->student_id ?></th>
      <td><?= $student->student_name ?></td>
      <td><?= $student->student_status ?></td>
      <td><?= $student->birth_date ?></td>
      <td><?= $student->courses ?></td>
      <td>
        <a href="crud/delete.php?student_id=<?= $student->student_id ?>">
            <i class="bx bxs-trash" style="color:#4723D9; font-size:25px;"></i>
        </a>
      </td>
      <td>  
        <a href="editStudent.php?student_id=<?= $student->student_id ?>">
            <i class="bx bxs-pen" style="color:#4723D9; font-size:25px;"></i>
        </a>
        </td>
      <td>
        <a href="showStudent.php?student_id=<?= $student->student_id ?>">
            <i class="fa-solid fa-eye" style="color:#4723D9; font-size:25px;"></i>
        </a>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>