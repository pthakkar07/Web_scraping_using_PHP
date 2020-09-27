<html>
<script>
function showResult(str) {
  if (str.length==0) {
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
		
      document.getElementById("livesearch").innerHTML=JSON.parse(this.responseText)[0].word+","+JSON.parse(this.responseText)[1].word+","+JSON.parse(this.responseText)[2].word;
	  
	  
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","https://api.datamuse.com/words?sp="+str+"*",true);
  xmlhttp.send();
}
</script>

<button onclick="window.location='http://localhost/gocomet/search_history.php'" class="Redirect" value="Click Here To Redirect">Search History </button>

<br>
<br>
<br>
<form action="http://localhost/gocomet/newproject.php" method="get">
  <label for="fname">Enter The tag for medium post:</label>
  <input type="text" id="fname" size="30" onkeyup="showResult(this.value)" name="fname"><br><br>
 <p >Suggestion for tag are:-</p>
  <div id="livesearch"></div>
  <br>
  <button type="submit" >Submit</button>
</form>

<?php
$a='https://api.datamuse.com/words?sp=';
$b=$_GET['langauge'];
//$b='molivation';
$c=$a.$b;
if($_GET['subject']=='notfind'){
echo "you can try with this similar words<br>";

$response = file_get_contents($c);
$response = json_decode($response);

if(sizeof($response)==0){
	
echo "your wording is wrong ";	

}
else 
{
for($i=0;$i<sizeof($response);$i++){
	echo $response[$i]->word;
	echo "<br>";
	
}

}


}
?>

</html>

