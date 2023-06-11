<?php
$Host   =  'localhost';
$Name   =  'root';
$pass   =  '';
$DB     =  'titumir';

$db = mysqli_connect($Host,$Name,$pass,$DB);
if(!$db)
    echo "Connection Faield !";

    
        $sql="SELECT * FROM users WHERE usertype='student'";
        $result = mysqli_query($db,$sql);
    
    
    
    
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
                background-color: violet;
            }
    
        </style>
    
    
    
    </head>
    <body>
        
        <div class="content">
            <center>
    
    
            <h1>Student Data</h1>
            <br><br>
    
            <table border="1px">
                <tr>
                    <th class="table_th">Username</th>
                    <th class="table_th">Email</th>
                    <th class="table_th">Phone</th>
                    <th class="table_th">Password</th>
                    <th class="table_th">Delete</th>
                    <th class="table_th">Update</th>
                </tr>
    
    
                <?php
    
                while($info=$result->fetch_assoc())
    
                {
    
              
                ?>
    
                <tr>
                    <td class="table_td">
                        <?php echo "{$info['username']}";?>
                    </td>
                    <td class="table_td">
                    <?php echo "{$info['email']}";?>
                    </td>
                    <td class="table_td">
                    <?php echo "{$info['phone']}";?>
                    </td>
                    <td class="table_td">
                    <?php echo "{$info['password']}";?>
                    </td>
                    <td class="table_td">
                    <?php 
               echo "<a onClick=\"javascript:return confirm('Are You Sure to Delete this');\" class='btn btn-danger' href='delete.php?student_id={$info['id']}'> Delete </a>";
                    
                    ?>
                    </td>
    
    
                    <td class="table_td">
                    <?php
                     echo "<a class='btn btn-success' href='update_student.php?student_id={$info['id']}'>Update</a>";
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