<?php
include ('simple_html_dom.php');

$link=$_GET['subject'];
//echo $_GET['subject'];

$html = file_get_html($link) ;

//$html->find('figure',0)->height = '40px';

$link=$html->find('article',0);

$imgs = $link->getElementsByTagName('img');
for($i=1;$i<sizeof($imgs);$i++){

$imgs[$i]->height='100';
$imgs[$i]->width='100';
$imgs[$i]->alt='';
//echo "source is ".$imgs[$i]->src;

if(($imgs[$i]->src=="")){
	 $imgs[$i]->display='none';
	$imgs[$i]->size='0';
	$imgs[$i]->height='0';
$imgs[$i]->width='0';
	
}
}


echo $link;


?>
