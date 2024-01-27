<?php
if(isset($_POST['user']) && isset($_POST['pass'])){
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

    $sql = "SELECT * FROM `question4` WHERE user = '$user' AND pass = '$pass';" ;

    if(($con->query($sql))->num_rows > 0 ){
        echo "You have logged in.";
    }else{
        echo "Incorrect username or password.";
    }

    $con->close();
}
?>