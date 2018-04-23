<!DOCTYPE html>
<html>
<body>


<?php
     $emailname=$_POST["email"];
	 $paswrd=$_POST["pwd"];
	 
	 
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

//$query1='select * from customerdetails where (email="$emailname") and (password="$paswrd") ';
$query1=" select * from customerdetails where email='".$emailname."' and password='".$paswrd."' ";
$row=mysqli_query($conn, $query1);
//print $result;
   
    $p=mysqli_fetch_array($row);

	if($p['email']==$emailname && $p['password']=$paswrd )
    {
		session_start();
		$session['id']=$p['id'];
        header("Location:start1.html");
    } 
	else{
		echo"<script>alert('please enter valid email and password')</script>";
		//header("Location:loginpage.html");
		}
	
?>

</body>
</html>
