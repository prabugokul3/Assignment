<?php
include_once 'connect.php';

$sql = "DELETE FROM data WHERE id='" .$_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>