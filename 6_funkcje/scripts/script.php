<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h3>Dane z formularza</h3>
    
    <?php
    
    require_once '../functions/function.php';
    show();
    echo "<hr>";
    $how_many = 2;

    if (!empty($_POST['name']) && !empty($_POST['color'])) {
        $color = $_POST['color'];
        echo "<div style=\"color:$color\">";

        echo "Imię bez poprawy: ".($_POST['name']).", długość: "
        .strlen($_POST['name'])."<br>";

        echo "Imię po poprawie: ".validateName($_POST['name'], $how_many).", długość: "
        .strlen(validateName($_POST['name'], $how_many))."<br>";
    }
    ?>
</body>
</html>