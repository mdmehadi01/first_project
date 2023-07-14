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

        $Result=$Student->add($Data);
        if($Result)
        header('Location:../index.php?Page=student_add&add_status=1');
        else
        header('Location:../index.php?Page=student_add&add_status=0');

    }

    if($_POST['submit'] == 'Update Student')
    {
      $Data = [
        'name'    => $_POST['name'],
        'roll'    => $_POST['roll'],
        'email'   => $_POST['email'],
        'address' => $_POST['address'],
      ];
      $id=$_POST['id'];
      $Student = new student();

        $Result=$Student->update($Data,$id);
        if($Result)
        header('Location:../index.php?Page=student_list&edit_status=1');
        else
        header('Location:../index.php?Page=student_list&edit_status=0');

    }
  }

?>