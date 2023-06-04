
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form in php</title>
</head>
<body>

    <form action="f_Connect.php" method="POST">
        <label for="">User_Name</label><br>
        <input type="text" name='User_Name'><br>
        <label for="">E_mail</label><br>
        <input type="email" name="email"><br>
        <label for="">Password</label><br>
        <input type="password" name="password"><br>
        <br>
        <input type="submit"value="Submit data"name="btn">
    </form>
</body>
</html>