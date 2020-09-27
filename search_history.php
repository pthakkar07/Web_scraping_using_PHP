<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "search_history";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Search history is <br>";
$sql = "SELECT searchtag FROM tags";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo " ".$row["searchtag"]."<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>

<html>
<br><br><br><br><br>
<button onclick="window.location='http://localhost/gocomet/index.html'" class="Redirect" value="Click Here To Redirect">Back to main page </button>
<br><br><br><br><br>
</html>