<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    <h4>Użytkownicy</h4>
    <?php

        require_once './scripts/connect.php';

        $sql = "SELECT * FROM `users`;";
        $result = $connect->query($sql);

        if (isset($_GET['deleteUser'])) {
            //echo "Usunieto: ".$_GET['deleteUser'];
            if ($_GET['deleteUser']==0) {
                echo "<h4>Nie usunięto użytkownika</h4>";
            }else {
                echo "<h4>Usunięto użytkownika</h4>";
            }
        }

        echo <<< TABLE
            <table>
                <tr>
                    <th>ID</th>
                    <th>Imię</th>
                    <th>Nazwisko</th>
                    <th>Data urodzenia</th>
                    <th>Data utworzenia użytkownika</th>
                </tr>
TABLE;

        while ($user = $result->fetch_assoc()) {
            echo <<< USER
            <tr>
                <td>$user[id]</td>
                <td>$user[name]</td>
                <td>$user[surname]</td>
                <td>$user[birthday]</td>
                <td><a href="./scripts/delete_user.php?deleteUser=$user[id]">Usuń</a></td>
            </tr>
USER;
        }
        echo "</table>";
        $connect->close();
    ?>
</body>
</html>