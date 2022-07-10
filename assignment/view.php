<?php
include_once 'connect.php';s
  
  
$result=mysqli_query($conn,"SELECT * FROM  data");
?>

<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>

<body>
    <?php
    if (mysqli_num_rows($result) > 0){
    ?>
  
  <table> 

    <tr>
      <th> id </th>
      <th> firstname </th>
      <th> lastname </th>
      <th> Email </th>
      <th> mobilenumber </th>
      <th> options </th>

    </tr>
    <?php
    
    $i=0;
    while ($rows=mysqli_fetch_array($result))
    {
    ?>
      <tr>
      
      <td><?php echo $rows['id']; ?></td> 
      <td><?php echo $rows['firstname']; ?></td>
      <td><?php echo $rows['lastname']; ?></td>
      <td><?php echo $rows['email']; ?></td>
      <td><?php echo $rows['mobilenumber']; ?></td>
      <td><a href="update.php?id=<?php echo $rows['id']; ?>">Update</a>
      <a href="delete.php?id=<?php echo $rows['id']; ?>">Delete</a></td>
    </tr>
    <?php
    $i++;
    }
    ?>
</table>
    <?php
    }
else
{
  echo "no result found";
}
    ?>
</body>
</html>


