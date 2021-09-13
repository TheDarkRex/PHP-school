<?php

echo PHP_VERSION, '<br>'; // 8.0.10

echo 2**10, '<br>'; //1024

$x=10;
$y=100;
echo $x<=>$y, '<br>';

//równe / identyczne

$x=1;
$y=1.0;

echo gettype($x), '<br>'; //integer
echo gettype($y), '<br>'; //double

if ($x==$y) {
  echo "równe<br>";
}else {
  echo "różne<br>";
}


if ($x===$y) {
  echo "identyczne<br>";
}else {
  echo "różne<br>";
}

/*
  postinkrementacja $x++
  preinkrementacja ++$x
  postdekrementacja $x--
  predekrementacja --$x
*/

$x=1;

echo $x, '<br>'; //1
echo ++$x, '<br>'; //2
echo $x++, '<br>'; //2
echo ++$x, '<br>'; //4

$x=$x++;

echo $x, '<br>';

$y=$x++;

echo $y, '<br>';
echo $x, '<br>';


//zadanie

echo "zadanie<hr>";

$x=1;
echo $x, '<br>'; // 1

$x=$x++;
echo $x, '<br>'; // 1

$x=++$x;
echo $x, '<br>'; // 2

$y=++$x;
echo $x, '<br>'; // 3
echo $y, '<br>'; // 3

$y=$x++;
echo $x, '<br>'; // 4
echo $y, '<br>'; // 3

?>
