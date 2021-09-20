<?php
  $text = <<< L
  ZSŁ - Zespół
  Szkół
  Łączności<br>
L;

echo $text;
echo nl2br($text);

$name = "jAnuSz";

//zamiana na małe litery
echo strtolower($name), '<br>';
//zamiana na duże litery
echo strtoupper($name), '<br>';


$text='janUSz koWalski';
//zamiana pierwszej litery na dużą
echo ucfirst($text), '<br>';
//zamiana wszystkich pierwszych liter na duże
echo ucwords($text), '<br>';


$lorem="<hr>Lorem ipsum dolor sit amet,
consectetur adipisicing elit,
sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris
nisi ut aliquip ex ea commodo consequat.
Duis aute irure dolor in reprehenderit in voluptate velit
esse cillum dolore eu fugiat nulla pariatur.
Excepteur sint occaecat cupidatat non proident,
sunt in culpa qui officia deserunt mollit anim id est laborum.<br>";

echo $lorem, '<br>';

echo wordwrap($lorem, 30, "<br>");

//wyczyszczenie bufora
ob_clean();


//usuwanie białych znaków

$name= "Janusz";
$name1= "  Janusz ";

echo "Ilość znaków zmiennej \$name: ".strlen($name)."<br>";
echo "Ilość znaków zmiennej \$name1: ".strlen($name1)."<br>";


echo strlen(ltrim($name1)); // 7
echo strlen(rtrim($name1)); // 8
echo strlen(trim($name1))."<br>"; //6


//przeszukiwanie ciągów znakówarning

echo strstr("janusz@gmail.com","@")."<br>"; //@gmail.com
echo strstr("janusz@gmail.com", "G")."<br>"; //
echo stristr("janusz@gmail.com", "G")."<br>"; //gmail.com


//substr
$name="Janusz";

echo substr($name, 3)."<br>"; //usz
echo substr($name, 2, 3)."<br>"; //nus
echo substr($name, -1)."<br>"; //z

echo substr(strstr("janusz@gmail.com", "@"), 1)."<br>";
  ?>
