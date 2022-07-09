<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";
  
// connect the database with the server
$conn = new mysqli($servername,$username,$password,$dbname);

$sql = "DELETE FROM data WHERE id='" .$_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>