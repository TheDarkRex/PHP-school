<?php
    function show(){
        echo "Funckja SHOW<br>";
    }

    function show1(){
        echo "Funckja SHOW1<br>";
    }

    function validateName($name, $how_many){
        return substr(ucfirst(strtolower(trim($name))), $how_many);
    }
?>