<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Średni Wiek</title>
</head>
<body>
    

    <?php
    
    if(!isset($_POST['person']) && !isset($_GET['buttonAVG'])) {

        echo <<< FORMCOUNTPERSON
            <h3>Ilość osób w rodzinie</h3>
            <form method="post">
                <input type="number" name="person" placeholder="Ilość osób"><br><br>
                <input type="submit" value="Zatwierdź">
            </form>
FORMCOUNTPERSON;
    }

    if(!empty($_POST['person'])) {
        echo <<< FORMAGEPERSON
            <h3>Ilość osób w rodzinie: $_POST[person]</h3>
            <form method="GET">
    FORMAGEPERSON;

        for ($i=1; $i <= $_POST['person']; $i++) { 


        echo <<< FORMAGEPERSON
            <input type="number" name="person$i" placeholder="Wiek osoby: $i"><br><br>
            

FORMAGEPERSON;
        }
        echo '<input type="submit" name="buttonAVG" value="Oblicz średni wiek"></form><br><br>';
    }

    if(isset($_GET['buttonAVG'])){

        $ageAVG = 0;
        $countPerson = 0;
        foreach ($_GET as $key => $value) {
            //echo "$key : $value<br>";
            if ($key != 'buttonAVG'){
                $ageAVG += $value;
                $countPerson++;
            }
        }
        //echo $ageAVG;
        //echo "ilość osób: $countPerson";
        echo "Średni wiek: ".number_format($ageAVG/$countPerson, 2, ',', ' ')." lat<hr>";
        echo '<a href="./index.php">Strona startowa</a>';
    }

    ?>

    
</body>
</html>