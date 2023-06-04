<?php
    include('connection.php');

    if(isset($_POST['submit']))
    {
        $Name=$_POST['Name'];
        $Email=$_POST['Email'];
        $Password=$_POST['Password'];
        $Conform_Password=$_POST['Comform_Password'];
          $query= "INSERT INTO students (Name,Email,Password,Comform_Password) VALUES
          (' $Name','$Email','$Password'.'$Conform_Password)";
        $result = mysqli_query($connection, $query);
        if($result)
            echo "Data Submit successfully";  

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="Reg.css">
</head>
<body>

        <form action="reg.php" class="my-form" enctype="multipart/form-data" method="POST">
        <div class="title">Registration Page</div>
        <div class="form-group">
            <label for="">Name:</label>
            <input type="text"name="Name"id="" class="name">
        </div>
        <div class="form-group">
            <label for="">Email:</label>
            <input type="email"name="Email"id="" class="email">
        </div>
        <div class="form-group">
            <label for="">Password:</label>
            <input type="password"name="Password"id="" class="password">
        </div>
        <div class="form-group">
            <label for="">Conform_Password:</label>
            <input type="password"name="con_pass"id="" class="con_pass">
        </div>
        <button name="submit"class="signIn">Sing In</button>

    </form>


</body>
</html>