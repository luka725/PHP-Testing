<?php
//$myFile = fopen( "rockyou.txt", "r+" ) or die ( "Cannot Read file content!" );
//while(!feof($myFile)) {
//	 echo fgets($myFile) . "<br>";
//}
//fclose($myFile);

$myfile = fopen( "newFile.txt", "w+" );
$txt = "Lukas Sheklashvili\n";
fwrite( $myfile, $txt );
$txt = "luka sheklashvili\n";
fwrite( $myfile, $txt );
fclose($myfile);
?>Î
