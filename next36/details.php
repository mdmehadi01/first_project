<?php
    include('connection.php');

    if(isset($_REQUEST['action'])){
        if($_REQUEST['action'] == 'details'){
            $id = $_REQUEST['id'];

            $query ="SELECT * FROM users WHERE id = $id LIMIT 1";
            $result = mysqli_query($connection,$query);
            $Data = mysqli_fetch_assoc($result);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
</head>
<body>

    <table>
        <thead>
            <tr>
                <th>Attribute</th>
                <th>Values</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Id : </td>
                <td><?php echo $Data['id']; ?></td>
            </tr>
            <tr>
                <td>FIrst_Name : </td>
                <td><?php echo $Data['First_Name']; ?></td>
            </tr>
            <tr>
                <td>Last_Name : </td>
                <td><?php echo $Data['Last_Name']; ?></td>
            </tr>
            <tr>
                <td>Email : </td>
                <td><?php echo $Data['Email']; ?></td>
            </tr>
            <tr>
                <td>Password : </td>
                <td><?php echo $Data['Password']; ?></td>
            </tr>
        </tbody>
    </table>
    
</body>
</html>
