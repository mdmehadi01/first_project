<?php
if(isset($_POST['btn'])){
    $User_Name=$_POST['User_Name'];
    $email=$_POST['email'];
    $password=$_POST['password'];

}
?>
 <h2>User_Name:<?php if(isset($User_Name)){
        echo $User_Name;}?></h2>
    <h2>Email:<?php if(isset($email)){
        echo $email;}?></h2>

    <h2>Password:<?php if(isset($password)){
        echo $password;}?></h2>