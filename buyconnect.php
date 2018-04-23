<html>

<body>
 
      <div class="topnav" id="myTopnav">
  <a  href="start1.html">Home</a>
  <!--<a href="about.html">About</a>-->
  <a href="sell.html">sell</a>
  <a href="buy.html">Buy</a>
  <div class="topnav-right"> <a href="start4.html">Logout</a></div>
  <!-- <a href="#contact">Contact Us</a>
     <a href="#sell">Renting/Selling</a>-->
</div> 
<style >
.topnav-right {
  float: right;
}
    .topnav {
    background-color: #333;
    overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
    float: left;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
    background-color: #ddd;
    color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
    background-color: #4CAF50;
    color: white;
}
<!--  .body
  {
     width:100%;
     margin-right:250px;
    //background-image:url("C:\Users\user\Desktop\house.jpg");
//background-size:cover;
  }


  .h1
  {
     text-align:left;
     color:cyan;
  }-->
</style>
<?php
$count=0;
if(isset($_POST["search"])){
$loc=$_POST["location"];
$connect=mysqli_connect("localhost","root","","onlinehouse");
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
$query="select * from sellh where location='$loc'";
$result=mysqli_query($connect,$query) or die(mysqli_error($connect));


while ($row=mysqli_fetch_array($result)) {
	$count=345;
    echo 
		"<img height='400' width='430' src='data:image;base64,".$row['image1']."'>;".
		"<img height='400' width='430' src='data:image;base64,".$row['image2']."'>;".
		"<img height='400' width='430' src='data:image;base64,".$row['image3']."'>;".
        "<table border=1>
        <tr>
        <th>Location</th>
        <th>Area</th>
		<th>Price</th>
		<th>Type</th>
		<th>Water</th>
		<th>Transport</th>
		<th>Playarea</th>
		<th>Parking</th>
		
		<th>Contact No.</th></tr>".	
		 
        "<td>{$row['location']}</td>".
		"<td>{$row['area']}</td>".
		"<td>{$row['price']}</td>".
		
        "<td>{$row['type']}</td>".
        "<td>{$row['water']}</td>".
		
        "<td>{$row['transport']}</td>".
        "<td>{$row['playarea']}</td> ".
        "<td>{$row['parking']}</td>".
		
		"<td>{$row['contactno']}</td>".
		
		"</table>".
        "---------------------------------------------------------------------------------------------
		----------------------------------------------------------------------------------------------
		--------------------------------------------------------------<br>";
}
if($count!= 345)
{
  echo" <font size='6'>sorry!....      No houses are posted in that area</font>";
}
mysqli_close($connect);
}
?>
</body>
</html>