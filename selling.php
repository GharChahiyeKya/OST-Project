<html>
<body>
<?php

  $rooms=$_POST["bedrooms"];
  $loc=$_POST["location"];
  $price=$_POST["price"];
  $type=$_POST["type"];
  $water=$_POST["type1"];
  $transport=$_POST["type2"];
  $playarea=$_POST["type3"];
  //$pool=$_POST["type5"];
  //$furnished=$_POST["type6"];
  //$garden=$_POST["type7"];   
  $parking=$_POST["type4"];
  $construction=$_POST["construction"];
  $area=$_POST["area"];
  $contactno=$_POST["phoneno"];
  $target="wampfiles/".basename($_FILES["image1"]["name"]);
    if(getimagesize($_FILES["image1"]["tmp_name"])==FALSE){
		echo "select an image";
	}
	else {
		$image=addslashes($_FILES['image1']['tmp_name']);
		$name=addslashes($_FILES['image1']['name']);
		$image=file_get_contents($image);
		$image=base64_encode($image);
	}
  $target="wampfiles/".basename($_FILES["image2"]["name"]);
    if(getimagesize($_FILES["image2"]["tmp_name"])==FALSE){
    echo "select an image";
  }
  else {
    $image3=addslashes($_FILES['image2']['tmp_name']);
    $name=addslashes($_FILES['image2']['name']);
    $image3=file_get_contents($image3);
    $image3=base64_encode($image3);
  }
  $target="wampfiles/".basename($_FILES["image3"]["name"]);
    if(getimagesize($_FILES["image3"]["tmp_name"])==FALSE){
    echo "select an image";
  }
  else {
    $image2=addslashes($_FILES['image3']['tmp_name']);
    $name=addslashes($_FILES['image3']['name']);
    $image2=file_get_contents($image2);
    $image2=base64_encode($image2);
  }
$connect=mysqli_connect("localhost","root","","onlinehouse");
 if (!$connect) {
  die("Connection failed: " . mysqli_connect_error());
 }
  $sql="INSERT INTO sellh(userid,location,price,type,water,transport,playarea,parking,area,contactno,image1,image2,image3) VALUES('1','$loc','$price','$type','$water','$transport','$playarea','$parking','$area','$contactno','$image','$image2','$image3')";
  $result=mysqli_query($connect,$sql);
  echo "$result";
 if($result)
 {echo 'details entered succesfully';
   header("Location:start1.html");
 }
 else{echo"sorry!.. please insert again";}
  ?>
  </body>
  </html>