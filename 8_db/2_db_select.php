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
        $connect = new mysqli("localhost", "root", "", "zsl_3gi2t_gr2");

        $sql = "SELECT * FROM `users`;";
        $result = $connect->query($sql);

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
                <td>$user[create_user]</td>
            </tr>
USER;
        }
        echo "</table>";
    ?>
</body>
</html>