<?php
  $students=array("Hamna","Farisa","Nahlath","Bismi","Akila","Aksa","Viveka","Krishnapriya");
  echo "The array is:";
  echo "<br>";
  print_r($students);
  echo "<br>";
  asort($students);
  echo "The elements in ascending order:";
  echo "<br>";
  print_r($students);
  echo "<br>";
  echo "The elements in descending order:";
  echo "<br>";
  arsort($students);
  print_r($students);
?>