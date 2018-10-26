<?php
$x1=$_POST["x1"];
$x2=$_POST["x2"];
$x3=$_POST["x3"];
$x4=$_POST["x4"];


$a1=$_POST["a1"];
$a2=$_POST["a2"];
$a3=$_POST["a3"];
$a4=$_POST["a4"];


	if($a1=="l")
		{echo "<font color='blue'>$x1</font>";}
		else
		{echo "<font color='red'>$x1</font>";}

		echo "<br>";

	if($a2=="l")
		{echo "<font color='blue'>$x2</font>";}
		else
		{echo "<font color='red'>$x2</font>";}

		echo "<br>";

	if($a3=="l")
		{echo "<font color='blue'>$x3</font>";}
		else
		{echo "<font color='red'>$x3</font>";}

		echo "<br>";

	if($a4=="l")
		{echo "<font color='blue'>$x4</font>";}
		else
		{echo "<font color='red'>$x4</font>";}
	
		echo "<br>";



?>