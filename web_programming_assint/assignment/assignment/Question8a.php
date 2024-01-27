<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 8</title>
</head>
<body>
    <form name = "form1" method = "post">
        <b>LOGIN PAGE</b><br><br>
        <label for ="user">Username </label><input type="text" id = "user" name="user" placeholder="Enter Username"><br><br>
        <label for ="user">Password </label><input type="password" id = "pass" name="pass" placeholder="Enter Password"><br><br>
        <input type="submit" name = "submit" value = "Login"><br><br>
    </form>
</body>
</html>
<?php
if(isset($_POST['submit'])){
    $server = "localhost";
    $database = "webpro";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password, $database);

    if(!$con){
        die("connection to this database failed due to ".mysqli_connect_error());
    }
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $sql = "SELECT * FROM `question8` WHERE user = '$user'";
    $retval = mysqli_query($con, $sql);
    if(($con->query($sql))->num_rows > 0 ){
        $sql1 = "SELECT * FROM `question4` WHERE user = '$user' AND pass = '$pass';" ;
        if(($con->query($sql1))->num_rows > 0 ){
            $row = mysqli_fetch_assoc($retval);
            echo "Welcome {$row['full']}";
        }else{
            echo "Password Mismatch";
        }
    }else{
        header('Location: Question8b.php');
    }

    $con->close();
}
?>