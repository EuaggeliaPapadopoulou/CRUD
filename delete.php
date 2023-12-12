<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "newbase";
$con = mysqli_connect ($dbhost, $dbuser, $dbpass, $db) or die($con);



$sql= "DELETE FROM emploee WHERE id=6";


if (mysqli_query($con, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);
?>




