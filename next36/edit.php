<?php 
    include('connection.php');

    if(isset($_REQUEST['action'])){
        if($_REQUEST['action'] == 'edit'){
            $id = $_REQUEST['id'];

            $query = "SELECT * FROM users WHERE id = $id LIMIT 1";
            $result = mysqli_query($connection,$query);
            $Data = mysqli_fetch_assoc($result);
            //var_dump($Data);
        }
    }
    if(isset($_POST['submit'])){
         if($_POST['submit'] == 'Update'){
            $id =$_POST['id'];
            $Name = $_POST['First_Name'];
            $Last_Name = $_POST['Last_Name'];
            $Email = $_POST['Email'];
            $Password = $_POST['Password'];

             $query = "UPDATE users SET First_Name='$Name', Last_Name= '$Last_Name', Email= '$Email', Password = '$Password' WHERE id = $id ";

            $Result = mysqli_query($connection, $query);
            if($Result){
                echo "Data updated successfully";
            }else{
                echo "something went rong";
        
          }
       }
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Update Form</title>
    <link rel="stylesheet" href="Reg.css">
</head>
<body>

<form action="edit.php?action=edit&id=<?php echo $Data['id']; ?>" method="POST" enctype="multipart/form-data">
        <div class="title">UpDate Page</div>
        <div class="form-group">
            <label for="">First_Name:</label>
            <input type="text" name="First_Name" class="first_Name" value="<?php echo $Data['First_Name']; ?>">

        </div>
        <div class="form-group">
            <label for="">Last_Name:</label>
            <input type="text" name="Last_Name" class="last_Name " value="<?php echo $Data['Last_Name']; ?>"><br>

        </div>
        <div class="form-group">
            <label for="">Email:</label>
            <input type="email" name="Email" class="email" value="<?php echo $Data['Email']; ?>"><br>
        </div>
        <div class="form-group">
            <label for="">Password:</label>
            <input type="password" name="Password" class="passwprd" value="<?php echo $Data['Password']; ?>"><br>
        </div>
        <button name="submit" value='Update'class="signIn">Update Now</button>

    </form>


</body>
</html>
