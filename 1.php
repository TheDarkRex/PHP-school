<?php
  echo "text<br>";
  echo 'text<br>';
  $name="Krystyna";
  echo 'Imię: $name<br>'; //Imię: $name
  echo "Imię: $name<br>"; //Imię: $name

// typy danych
// całkowite
  $calkowita=10;
  $bin=0b1010; //10
  $oct=011; //9
  $hex=0x11; //17
  echo $hex;

// zmiennoprzecinkowy
  $x=10.5;
  echo gettype($x); //double

// logiczna
  $prawda=true;
  $fałsz=false; //nie zapisujemy nazw zmiennych polskimi znakami

  echo $prawda; //1
  echo $fałsz; //nic nie wyświetli

// składnia heredoc
  echo <<< E
    <hr>Imię: $name<br>
    ZSŁ
    <hr>
E;

  $text = <<< E
    <hr>Imię: $name<br>
    ZSŁ
    <hr>
E;

echo $text;

// nowdoc
echo <<< 'E'
  <hr>Imię: $name<br>
  ZSŁ
  <hr>
E;

// konkatenacja
  echo "text1"."text2";

echo "Imię: \$name"; //Imię: $name

  ?>
