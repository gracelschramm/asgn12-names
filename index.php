<!DOCTYPE html>


<html>
<head>
	<title>Names</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>
  <?php
  $file="names-short.txt";
  
$namesFile = fopen($file, "r") or die("Unable to open file!"); 
$aString = fgets($namesFile);
  
  while (!feof($namesFile)) {
    $name = substr($aString, 0, strpos($aString, "--"));
   print "$name<br>"; 
    $aString = fgets($namesFile);
  }
fclose($namesFile);
?>

</body>
  
</html>

<?php
// Commented this out to get the other chunk working
// $array = file($file);
//   $array=explode(",", $array);
//$uniqueArray=array_unique($array);
//  print_r($array);
?>