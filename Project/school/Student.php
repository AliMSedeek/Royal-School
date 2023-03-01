
<?php
class Student
{
    public $student_name;
    public $student_image;
    public $student_status;
    public $courses;
    public $birth_date;
    public $status = true;

    public function notFound () {
        $this->status = false;
    }
}
?>