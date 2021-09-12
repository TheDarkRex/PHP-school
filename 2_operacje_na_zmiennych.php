<?php
  echo PHP_VERSION; //8.0.10
  echo 2**10,'<br>';

  $x=1000;
  $y=100;

  echo $x<=>$y;

// równe / identyczne
  $x=1;
  $y=1.0;

  if ($x==$y) {
    echo "równe";
  }else{
    echo "Różne";
  }

// dodatkowo sprawdzenie typu danych
  if ($x===$y) {
    echo "identyczne";
  }else{
    echo "Różne";
  }

 ?>
