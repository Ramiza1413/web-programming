<!DOCTYPE html>
<html lang="en">
<body>
    <form name = "form1" method = "post">
        <b>SIGNUP PAGE</b><br><br>
        <label for ="user">Username </label><input type="text" id = "user" name="user" placeholder="Enter Username"><br><br>
        <label for ="user">Password </label><input type="password" id = "pass" name="pass" placeholder="Enter Password"><br><br>
        <label for ="user">Full Name </label><input type="text" id = "name" name="name" placeholder="Enter Full Name"><br><br>
        <input type="submit" name = "submit" value = "Signup"><br><br>
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
    $name = $_POST['name'];

    $sql = "INSERT INTO `question8` (`user`, `pass`, `full`) VALUES ('$user', '$pass', '$name');";

    if($con->query($sql)){
        echo "Signup successful.";
    }

    $con->close();
}
?>