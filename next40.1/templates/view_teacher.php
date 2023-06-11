<?php

session_start();

$Host   =  'localhost';
$Name   =  'root';
$pass   =  '';
$DB     =  'titumir';

$db = mysqli_connect($Host,$Name,$pass,$DB);
if(!$db)
    echo "Connection Faield !";


$sql="SELECT * FROM teachers";

$result=mysqli_query($db,$sql);
if(!$result){
    echo"Successfully done";
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
    .table_th
    {
        padding: 20px;
        font-size: 20px;

    }
    .table_td
    {
        padding: 20px;
        background-color: skyblue;
    }
</style>



</head>
<body>


    <div class="content">
    <center>
        <h1>View All Teacher Data</h1>
        <table border="1px">
            <tr>
                <th class="table_th">Teacher Name</th>
                <th class="table_th">Teacher Address</th>
                <th class="table_th">Teacher Email</th>
                <th class="table_th">Teacher Age</th>
                <th class="table_th">About Teacher</th>
                <th class="table_th">Image</th>
                <th class="table_th">Delete</th>   
            </tr>
            <?php
            while($info=$result->fetch_assoc())
            {
            ?>
           <tr>
                <td class="table_td"><?php echo"{$info['Teacher_Name']}"?></td>
                <td class="table_td"><?php echo"{$info['Teacher_Address']}"?></td>
                <td class="table_td"><?php echo"{$info['Teacher_Email']}"?></td>
                <td class="table_td"><?php echo"{$info['Teacher_Age']}"?></td>
                <td class="table_td"><?php echo"{$info['Description']}" ?></td>
                <td class="table_td">
      <img height="100px" width="100px" src="<?php echo"{$info['Image']}" ?>">
                </td>
                <td class="table_td">

                <?php

                echo "
                    <a onClick=\"javascript:return confirm('Are You Sure TO Delete This');\" class='btn btn-danger'
                    href='delete.php?teacher_id={$info['id']}'>
                    Delete
                    </a>";

                    ?>
                </td>

        



            
            </tr>


            <?php

             }

            ?>


        </table>

        </center>

   
    </div>

    
</body>
</html>