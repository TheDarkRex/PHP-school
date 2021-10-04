<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <title>Prostokąt</title>
    </head>

    <body>
        <h4>Prostokąt</h4>

        <form method="post">
            <input type="text" name="sideA" placeholder="Podaj długość boku a"><br><br>
            <input type="text" name="sideB" placeholder="Podaj długość boku b"><br><br>
            <input type="submit" value="Oblicz">
        </form>
        <?php
            if(!empty($_POST['sideA'])) {
                $sideA = $_POST['sideA'];
                $sideB = $_POST['sideB'];
                $area = $sideA*$sideB;
                $circuit = 2*$sideA+2*$sideB;
                echo <<< RESULT
                    <hr>
                    Pole prostokątu wynosi: $area cm<sup>2</sup><br>
                    Obwód prostokątu wynosi: $circuit cm 
                RESULT;
            }else{
                echo "<hr>Wpisz długość boku a i b";
            }

        ?>
    </body>
</html>