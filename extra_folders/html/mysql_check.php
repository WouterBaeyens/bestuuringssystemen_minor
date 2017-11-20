<?php
//error_reporting(E_ALL);
//ini_set('display_errors','On');
 
 
$servername = "localhost";
$username = "root";
$username2 = "check";
$pass = "rDEetGxq82DCE";
 
// create connection
$conn = mysqli_connect($servername, $username2, $pass);
// //check connection
if ($conn->connect_error){
         die("Connection failed: " . $conn->connect_error);
         }
	 
	 //$sql="SELECT * from check.log";
	 $sql="SELECT text from check.log order by id desc limit 1";
	 $result = mysqli_query($conn,$sql);
 	 if(mysqli_num_rows($result)>0){	 
		 $resultfinal = mysqli_fetch_assoc($result);
	 	echo $resultfinal['text'];
	 }
	 //$mysqli->query("select text from check.log order by id limit 1")->fetch_object()->name;
	 //$result = mysqli_fetch_assoc(mysqli_query($conn,$sql));
	 //	 	$result = $conn->query($sql);
	 //	if ($result->num_rows > 0){
	 		//output data of each row
	 //			while($row = $result->fe)
//	 		echo "result = $result"; 
//	 		}
//	 		$conn->close();*/
	 //echo mysqli_fetch_assoc($result);
	 $conn->close();
?>
