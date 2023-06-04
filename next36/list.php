<?php
    include('connection.php');
    if(isset($_REQUEST['action'])){
        $id = $_REQUEST['id'];

        $query = "DELETE FROM users WHERE id = $id";
        $result = mysqli_query($connection,$query);

        if($result){
            echo "Data Deleted successfully";
        }else{
            echo "something went rong";
        }
    }

    $query = "SELECT * FROM users";
    $result = mysqli_query($connection,$query);


    // while($data = mysqli_fetch_assoc($result)){
    //     echo $data['name']. "<br>";
    // }
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
</head>
<body>

        <a href="index.php">Home</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>First_Name</th>
                    <th>Last_Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                 <?php while($Data = mysqli_fetch_assoc($result)){ ?>
                        <tr>
                            <td><?php echo $Data['id'] ?></td>
                            <td><?php echo $Data['First_Name']; ?></td>
                            <td><?php echo $Data['Last_Name']; ?></td>
                            <td><?php echo $Data['Email']; ?></td>
                            <td><?php echo $Data['Password']; ?></td>
                            <td>
                            <a href="details.php?action=details&id=<?php echo $Data['id'] ?>">View Details</a>
                            <a href="edit.php?action=edit&id=<?php echo $Data['id'] ?>">Edit</a>
                            <a href="list.php?action=delete&id=<?php echo $Data['id'] ?>">Delete</a>
                        </tr>
                    <?php } ?>
            </tbody>
        </table>
    
</body>
</html>