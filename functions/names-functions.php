<?php

function load_full_names($fileName) {
  
  $line = 0;

  $namesFile = fopen($fileName, "r") or die("Unable to open file!"); 
  $nextName = fgets($namesFile);

  while(!feof($namesFile)) {
    if($line % 2 == 0) {
      $fullNames[] = trim(substr($nextName, 0, strpos($nextName, " --")));
    }
    $line++;
    $nextName = fgets($namesFile);
  }
  return $fullNames;
}

function load_first_names($fullNames){
  //get all first names
  foreach($fullNames as $fullName) {
    $startHere = strpos($fullName, ",") + 1;
    $firstNames[] = trim(substr($fullName, $startHere));
  }
  return $firstNames;
}

function load_last_names($fullNames){
    //get all last names
  foreach($fullNames as $fullName) {
    $stopHere = strpos($fullName, ",");
    $lastNames[] = substr($fullName, 0, $stopHere);
  }
  return $lastNames;
}