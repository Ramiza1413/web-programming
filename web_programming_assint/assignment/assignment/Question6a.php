<html>
    <head>
        <title>Question 6</title>
    </head>
    <body>
        <form name="form1" method="post">
        <label for ="uname">Name </label><input type="text" id = "uname" name="uname" placeholder="Enter Name"><br><br>
            <input type="submit" name="Submit" value="SUBMIT"></td>
        </form>
<?php 
if(isset($_POST['Submit']))
{ 
date_default_timezone_set('Asia/Kolkata');
$currentTime = date( 'h:i:s A', time () );
$uname=$_POST["uname"];
session_start();
$_SESSION["name"] = $_POST["uname"];
$_SESSION["stime"] = $currentTime;
header('Location: Question6b.php'); 
}
?> 
</body>
</html>