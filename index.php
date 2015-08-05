<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['text']; 
	$file = $_POST['file'];
	echo $name."<br />".$file."<br />";
$info = new SplFileInfo($file);
var_dump($info->getExtension());
    if ($info="jpg" ) {
	  echo '1';
	}
}

?>