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
 
$sql = "INSERT INTO `report`(`Location`, `Latitude`, `Longtitude`, `Type`, `Description`) VALUES ('$location','$lat','$lng','$type','$desc')";
$result=mysqli_query($conn, $sql);
 
if($result){
 echo "Data inserted successfully!";
}
else
{
 echo "Data not inserted";
}


/*else
{
	echo "Problem";
}*/
?>