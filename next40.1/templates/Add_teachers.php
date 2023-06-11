<?php
error_reporting(0);
session_start();

    $Host   =  'localhost';
    $Name   =  'root';
    $pass   =  '';
    $DB     =  'titumir';

    $db = mysqli_connect($Host,$Name,$pass,$DB);
    if(!$db)
        echo "Connection Faield !";

if(isset($_POST['submit']))
{
  $t_name=$_POST['Teacher_Name'];
  $t_address=$_POST['Teacher_Address'];
  $t_email=$_POST['Teacher_Email'];
  $t_age=$_POST['Teacher_Age'];
  $t_description=$_POST['Description'];

  $image=$_FILES['Image']['name'];
  $tmpname=$_FILES['Image']['tmp_name'];
  $uplod='Image/'.$image;


  $query="INSERT INTO teachers (Teacher_Name,Teacher_Address,Teacher_Email,Teacher_Age,Description,Image) VALUES ('$t_name',' $t_address',
  '$t_email','$t_age','$t_description','$image')";


  $result = mysqli_query($db, $query);
 
  if($result)
  {
    move_uploaded_file($tmpname,$uplod);
      echo"Successfully_data Inserted";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashbord</title>
    <style type="text/css">
        .div_deg
        {
            background-color: yellowgreen;
            text-align: center;
            padding-top: 70px;
            padding-bottom: 70px;
            width: 500px;
        }
    </style>
</head>
<body>
    <div class="content">
    <center>
        <h1>Add Teacher</h1>
        <br><br>
        <div class="div_deg">
            <form action="Add_teachers.php" method="POST" enctype="multipart/form-data">
                <div>
                    <label>Teacher Name :</label>
                    <input type="text" name="Teacher_Name">
                </div>
                <br>
                <div>
                    <label>Teacher Address :</label>
                    <input type="text" name="Teacher_Address">
                </div>
                <br>
                <div>
                    <label>Teacher Email :</label>
                    <input type="text" name="Teacher_Email">
                </div>
                <br>
                <div>
                    <label>Teacher Age :</label>
                    <input type="text" name="Teacher_Age">
                </div>
                <br>

                <div>
                    <label>Description :</label>
                    <textarea name="Description"></textarea>
                    
                </div>
                <br>

                <div>
                    <label>Image :</label>
                    <input type="file" name="Image">
                </div>
                <br>


                <div>
                    
                    <input type="submit" name="submit" class="btn btn-primary"value="ADD_Teacher">
                </div>
            </form>
        </div>



        </center>

    </div>

    
</body>
</html>