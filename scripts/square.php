<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <title>Kwadrat</title>
    </head>

    <body>
        <h4>Kwadrat</h4>

        <form method="post">
            <input type="text" name="sideA" placeholder="Podaj długość boku a"><br><br>
            <input type="submit" value="Oblicz">
        </form>
        <?php
            if(!empty($_POST['sideA'])) {
                $sideA = $_POST['sideA'];
                $area = pow($sideA, 2);
                $circuit = 4*$sideA;
                echo <<< RESULT
                    <hr>
                    Pole kwadratu wynosi: $area cm<sup>2</sup><br>
                    Obwód kwadratu wynosi: $circuit cm 
                RESULT;
            }else{
                echo "<hr>Wpisz długość boku a";
            }

        ?>
    </body>
</html>