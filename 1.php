<?php
  echo "ZSŁ<br>";
  echo "ZSŁ<hr>";
  $name="Eryk";
  echo 'Imię: $name<br>'; //Wyświetli Imię: $name
  echo "Imię: $name<br>"; //Wyświetli Imię: Janusz


  //typy danych

  //całkowity

  $całkowita=10; //nie robić tego: Nazwa zmiennej
                //w języku polskim
  $bin=0b1011;  //11(2)
  $oct=01011;   //521(8)
  $hex=0x1011;  //4113(16)

  //konkatenacja .  interpolacja ,

  echo $bin,'<br>';
  echo $oct,'<br>';
  echo $hex,'<br>';


  //zmiennoprzecinkowe

  $x = 10.5;

  //logiczny

  $prawda = true;//1
  $fałsz = false;//nic nie wyświetli

  echo $prawda;

  //składnia heredoc

  echo <<< ETYKIETA
  <hr>Imię: $name<br>
  ZSŁ<br>
  Poznań<br>
  ETYKIETA;

  $text = <<< ETYKIETA
  <hr>Imię: $name<br>
  ZSŁ<br>
  Poznań<br>
  ETYKIETA;

  echo $text;

  //składnia nowdoc

  echo <<< 'ETYKIETA'
  <hr>Imię: $name<br>
  ZSŁ<br>
  Poznań<br>
  ETYKIETA;


  echo "Nazwa zmiennej imie: \$name";

?>
