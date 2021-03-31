<?php
$_output="";
$_pointer = fopen('test1.txt', 'rb')
	or 
	die("error");
$_output= (fread($_pointer,255));
fclose($_pointer);

echo $_output;
	
?>