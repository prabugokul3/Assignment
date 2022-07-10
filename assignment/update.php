<?php

include_once 'connect.php';
   if(count($_POST)>0) {
mysqli_query($conn,"UPDATE data set id='" . $_POST['id'] . "', firstname='" . $_POST['firstname'] . "', lastname='" . $_POST['lastname'] . "',email='" . $_POST['email'] . "',mobilenumber='".$_POST['mobilenumber']."' WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
}
$result=mysqli_query($conn,"SELECT * FROM  data WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
</head>
<body>
<form method="post" action="">
<div><?php if(isset($message)) { echo '<script>alert("updated successfully")</script>'; } ?>
</div>

<input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
<br>
First Name: <br>
<input type="text" name="firstname" class="txtField" value="<?php echo $row['firstname']; ?>">
<br>
Last Name :<br>
<input type="text" name="lastname" class="txtField" value="<?php echo $row['lastname']; ?>">
<br>
mobile number:<br>
<input type="text" name="mobilenumber" class="txtField" value="<?php echo $row['mobilenumber']; ?>">
<br>
Email:<br>
<input type="text" name="email" class="txtField" value="<?php echo $row['email']; ?>">
<br><br>
<input type="submit" name="submit" value="Submit">
<a href="view.php">Back</a>

</form>
</body>
</html>
  