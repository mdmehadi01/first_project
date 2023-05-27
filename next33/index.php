<?php
    include('connection.php');

    if(isset($_POST['submit']))
    {
        $Name=$_POST['First_Name'];
        $Last_Name=$_POST['Last_Name'];
        $Email=$_POST['Email'];
        $Password=$_POST['Password'];
          $query= "INSERT INTO users (First_Name,Last_Name,Email,Password) VALUES
          (' $Name',' $Last_Name','$Email','$Password')";

        $result = mysqli_query($connection, $query);
        if(!$result)
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

        <form action="index.php" class="my-form" enctype="multipart/form-data" method="POST">
        <div class="title">Registration Page</div>
             <a href="list.php">Student list</a>
        <div class="form-group">
            <label for="">First_Name:</label>
            <input type="First_Name"name="First_Name"id="" class="first_Name">
        </div>
        <div class="form-group">
            <label for="">Last_Name:</label>
            <input type="Last_Name"name="Last_Name"id="" class="last_Name">
        </div>
        <div class="form-group">
            <label for="">Email:</label>
            <input type="email"name="Email"id="" class="email">
        </div>
        <div class="form-group">
            <label for="">Password:</label>
            <input type="password"name="Password"id="" class="password">
        </div>
        <button name="submit"class="signIn">Sing In</button>

    </form>


</body>
</html>