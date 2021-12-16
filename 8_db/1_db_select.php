<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h4>Użytkownicy</h4>
    <?php
        $connect = new mysqli("localhost", "root", "", "zsl_3gi2t_gr2");
        $sql = "SELECT * FROM `users`;";
        $result = $connect->query($sql);

        //$user = $result->fetch_assoc();
        //echo $user['name'];

        while ($user = $result->fetch_assoc()) {
            echo <<< USER
                Id: $user[id]<br>
                Imię: $user[name]<br>
                Nazwisko: $user[surname]<br>
                Data urodzenia: $user[birthday]<br>
                Data utworzenia użytkownika: $user[create_user]
                <br><br>
USER;
        }
    ?>
</body>
</html>