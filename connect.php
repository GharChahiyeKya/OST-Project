<!DOCTYPE html>
<html>
<body>

<p>welcome!</p>

<?php
     $fname=$_POST["firstname"];
	 $lname=$_POST["lastname"];
     $mail=$_POST["emails"];
	 $pwd=$_POST["passwords"];
	 echo  "$fname "."$lname"."<br>";
	 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "onlinehouse";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " .mysqli_connect_error());
}
//$sql='select id from logindetils where username="$name" and password="$pwd" ';
$sql="insert into customerdetails (firstname,lastname,email,password) value('$fname','$lname','$mail','$pwd')";
$mysqlresult=mysqli_query($conn, $sql);

if($mysqlresult)
{
	header("Location:loginpage.html");
}


?>
</body>
</html>