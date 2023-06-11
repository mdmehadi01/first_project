<?php
error_reporting(0);

$Host   =  'localhost';
$Name   =  'root';
$pass   =  '';
$DB     =  'titumir';

$db = mysqli_connect($Host,$Name,$pass,$DB);
if(!$db)
    echo "Connection Faield !";




$id=$_GET['student_id'];
$sql="SELECT * FROM users WHERE id='$id'";

$result=mysqli_query($db,$sql);
$info=$result->fetch_assoc();


if(isset($_POST['update']))
{

    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];
    $query="UPDATE users SET username='$name', email='$email',phone='$phone',password='$password' WHERE id='$id'";
    $result2=mysqli_query($db,$query);

    if($result2)

{
    echo"Data Update Successfully done";
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
        label
        {
            display:  inline-block;
            width: 100px;
            text-align: right;
            padding-top: 10px;
            padding-bottom: 10px;

        }

        .div_deg
        {
            background-color:  skyblue;
            width: 400px;
            padding-bottom: 70px;
            padding-top: 70px;
        }
    </style>



</head>
<body> 
    
    <div class="content">
        <center>

        <h1>Update Student</h1>

        <div class="div_deg">

            <form action="#" method="POST">
                <div>
                    <label>Username</label>
                    <input type="text" name="name"value="<?php echo"{$info['username']}"?>">
                </div>

                <div>
                    <label>Email</label>
                    <input type="email" name="email" value="<?php echo"{$info['email']}"?>">
                </div>

                <div>
                    <label>Phone</label>
                    <input type="number" name="phone" value="<?php echo"{$info['phone']}"?>">
                </div>

                <div>
                    <label>Password</label>
                    <input type="text" name="password" value="<?php echo"{$info['password']}"?>">
                </div>

                <div>
                  
                    <input class="btn btn-success" type="submit" name="update" value="Update">
                </div>


            </form>
        </div>

        </center>

   
    </div>

    
</body>
</html>