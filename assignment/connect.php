<?php
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
//$address=$_POST['address'];
$mobilenumber=$_POST['mobilenumber'];

//database connection
$conn=new mysqli('localhost','root','','registration');
if($conn->connect_error){
die('connection failed:'.$conn->connect_error);
}else{
	$stmt=$conn->prepare("insert into data(firstname,lastname,email,mobilenumber) values(?,?,?,?)");
	$stmt->bind_param("sssi",$firstname,$lastname,$email,$mobilenumber);
	$stmt->execute();
	//echo '<script>alert("Registration successfully")</script>';
	header("Location:view.php");
	$stmt->close();
	//$conn->close();

}
?>

