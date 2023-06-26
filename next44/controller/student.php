<?php 
  include('../model/class.db.php');
  include('../model/class.student.php');

  if (isset($_POST['submit'])) {
    if ($_POST['submit'] == 'Insert Student') {
        $Data = [
          'name'    => $_POST['name'],
          'roll'    => $_POST['roll'],
          'email'   => $_POST['email'],
          'address' => $_POST['address'],
        ];
        
        $Student = new student();

        $Student->add($Data);

        header('Location:../index.php?Page=student_add&status=1');
    }
  }

?>