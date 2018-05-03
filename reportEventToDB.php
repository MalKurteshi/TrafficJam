<?php
/*if (isset($_POST['raporto']))
{*/
	
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "trafficDb";
 
//Creating connection for mysqli
 
$conn = new mysqli($server, $user, $pass, $dbname);

 /*
if($conn->connect_error){
 die("Connection failed:" . mysqli_error);
}
echo "Connection estabilished";*/
/*if (isset($_POST['raporto']))
{*/


$lat =$_POST['lat'];
$lng =$_POST['lng'];
$location =$_POST['location'];
$type =$_POST['type'];
$desc =$_POST['desc'];
$rate =$_POST['rate'];
$date =$_POST['date'];
$time =$_POST['time'];
$date = $date . " ". $time;
//$date = date("d-m-Y H:i:s",$date);
/**echo $date;
echo "   ";
echo $time;
 **/
// $target_dir = "images/";
// $target_file = $target_dir . basename($_FILES['FUCKMEBOY']['name']);
// $uploadOk = 1;
// $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

if(isset($_POST['submit']))
{

	$target_dir = "images/";
	$target_file = $target_dir . basename($_FILES['image']['name']);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

  $image = $_FILES['image']['name'];

  if (move_uploaded_file($_FILES['image']['tmp_name'],$target_file)) {
    echo "The file has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }

	$sql = "INSERT INTO `report`(`Location`, `Latitude`, `Longtitude`, `Type`,`rate`,`date`, `Description`,`image`) VALUES ('$location','$lat','$lng','$type','$rate','$date','$desc','$image')";
	$result=mysqli_query($conn, $sql);
	 
	if($result){
	 echo "Data inserted successfully!";
	}
	else
	{
	 echo "Data not inserted";
	}

}

/*else
{
	echo "Problem";
}*/
?>