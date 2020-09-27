
<?php

$servername = "localhost";
$username = "id14570282_root";
$password = "PriyalThakkar@369";
$dbname = "id14570282_search_history";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM tags";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
  $yourURL="https://priyalassignment.000webhostapp.com/index.html";
echo ("<script>location.href='$yourURL'</script>");
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

?>