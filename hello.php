<?php 
 define('ADDRESS','AC 151, KESTOPUR , KOLKATA: 101');
 $name="SUDIPTA";
 $age=23;
 $string1='good';
 $string2='morning';
 $indArr=array('sun','mon','fri');
 $Assoarr=["a"=>"Sudipta","b"=>"Shrobona"];
 $addArr=["z"=>"Gosling","k"=>"Sigmund"];
 $Assoarr["c"]="Ryan";
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>PHP TEST SCRIPT</title>
 </head>
 <body>
	<h1><?php echo "HELLO FROM PHP"; ?></h1>
	<p>I am <?php echo $name ?> <?php echo $age ?> years old</p>
	<p>ADDRESS <?php echo ADDRESS ?></p>
	<p><?php echo $string1.$string2; ?></p>
	<p><?php echo strtoupper($string2); echo str_replace("m", "r", $string2); echo strlen($string1.$string2);?></p>
	<p><?php print_r($indArr); print_r(array_merge($Assoarr,$addArr)); ?></p>
	<p><?php print_r($Assoarr) ?></p>
 </body>
 </html>
