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


$loc =$_POST['location'];
//$type =$_POST['type'];
//$lng =substr($_POST['lng'],4);

 
$sql = "SELECT * FROM report ";
$result=mysqli_query($conn, $sql);
 
if($result){
 while($row = mysqli_fetch_assoc($result))
 {
 	if(checkRadious($row['Longtitude'], $row['Latitude']))
 		echo " <li>" . $row['Location'] . " " . $row['Type'] ." " . $row['rate'] . " ". $row['date'] . "</li>";
 
}
 
 
}
else
{
 echo "Data not inserted";
}


/*else
{
	echo "Problem";
}*/

function checkRadious($str1, $str2)
{
	$r = 0.002;

	$str3 = floatval($str1);
	$str4 = floatval($str2);
	$val1 = floatval($_POST['lng']);
	$val2 = floatval($_POST['lat']);

	


	if($r > sqrt(pow($val1-$str3,2)+ pow($val2-$str4,2)))
		return true;
	
	return false;

}

?>