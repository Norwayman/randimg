<?php
if (!defined('e107_INIT')) { exit; }

define("RIMID", e_PLUGIN."randimg_menu/images/");

$height = "150px";
$width = "150px";

$images = array();
foreach(glob("{".RIMID."*.jpg,".RIMID."*.gif,".RIMID."*.png}", GLOB_BRACE) as $image_file){
	array_push($images, str_replace(RIMID, "", $image_file));
}

if(!empty($images[array_rand($images)])){
	$text = "<a href='".RIMID.$images[array_rand($images)]."'><img src='".RIMID.$images[array_rand($images)]."' style='width:".$width."; height:".$height."; border:0;'></a>";
}else{
	$text = "No images found. Add some to the images directory!";
}

$ns->tablerender("Random Image", "<div style='text-align:center;'>".$text."</div>", 'randimg_menu');
?>