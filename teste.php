<?php
$myfile = fopen("newfile.txt", "rb") or die("Unable to open file!");
// $txt = "Mickey Mouse\n";
// fwrite($myfile, $txt);
$a = "newfile.txt";

echo fread($myfile, filesize($a));
// fwrite($myfile, $txt);
// fclose($myfile);

// $a = fopen("newfile.txt", "r");

// var_dump($a);
?> 