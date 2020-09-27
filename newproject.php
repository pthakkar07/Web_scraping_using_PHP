

<html>

</script>
<?php
$b=$_GET['fname'];
$servername = "localhost";
$username = "root";
$password = "PriyalThakkar@369";
$dbname = "search_history";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO tags (searchtag)
VALUES ('".$b."')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);



	
include ('simple_html_dom.php');
//$totn_string = 'https://medium.com/';
// First String 
$a = 'https://medium.com/search?q='; 

// Second String 
//$b = 'motivation'; 

// Concatenation Of String 
$c = $a.$b; 

// print Concatenate String 
//echo " $c \n"; 

$executionStartTime = microtime(true);
$html = file_get_html($c) ;

echo $html->find('title',0)->plaintext;

$list = $html -> find('div[class="js-postListHandle"]',0);
if($list == ""){
	 header("Location: http://localhost/gocomet/index1.php?subject=notfind&langauge=".$b);

}
$list_array=$list ->find('div[class="postArticle postArticle--short js-postArticle js-trackPostPresentation"]');

$direct2=" myFunction(";
$direct3=")";
$redirect="http://localhost/gocomet/final.php";	
$direct1="window.location='".$redirect."'";
echo "<br>";
for($i=0;$i< sizeof($list_array);$i++){
	$author= $list_array[$i]->find('a[class="ds-link ds-link--styleSubtle link link--darken link--accent u-accentColor--textNormal u-accentColor--textDarken"]',0);
	$title=$list_array[$i]->find('h3',0);
	$time= $list_array[$i]->find('span[class="readingTime"]',0)->title;
	$content=$list_array[$i]->find('div[class="postArticle-content"]',0)->find('a',0)->href;
	$comment=$list_array[$i]->find('a[class="button button--chromeless u-baseColor--buttonNormal"]',0);
	$clap=$list_array[$i]->find('button[class="button button--chromeless u-baseColor--buttonNormal js-multirecommendCountButton u-disablePointerEvents"]',0);
	$detail=$list_array[$i]->find('time',0);
	//echo "<tr>";
	
	//cho "<td>" . $author->plaintext . "</td>";
	$direct="window.location='".$content."'";
	$value="'".$content."'";
	$dev="http://localhost/gocomet/final.php?subject=".$content;
//	<input type="button" onclick="window.location='http://google.com'" class="Redirect" value="Click Here To Redirect"/>
	//echo "<td><button><a href =".$dev.">" . $content . "</a></td></button>";
	//echo "<td>" . $clap->plaintext . "</td>";
	//cho "<td>" . $comment->plaintext . "</td>";
	//echo "author is ",$author;
	//echo "<td>" . $content . "</td>";
	//echo '<br>';
	$j=$i+1;
	echo $j."<br>"  ;
	echo "Creator :- ".$author->plaintext."<br>";
	echo  "Title :- ".$title->plaintext."<br>";
	echo  "Details :- ".$detail->plaintext."<br>";
	echo  "clap :- ".$clap->plaintext." comment ".$comment->plaintext."<br>";
	$pas="click here to view post";
	echo  "<button><a href =".$dev.">" . $pas . "</a></td></button><br>";
	
	echo "<br><br>";
	
	
	
	
}
$executionEndTime = microtime(true);

$seconds = $executionEndTime - $executionStartTime;
echo "total response time is ".($seconds)." Microseconds";
echo "</table>";


$demo="demo";
echo "<p id=".$demo."></p>";



?>

<html>