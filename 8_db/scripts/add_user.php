<?php
    foreach ($_POST as $key => $value) {
        //echo "$key: $value<br>";
        if (empty($value)) {
            header('location: ../5_db_select_delete_insert_update.php?error=Wypełnij wszystkie pola!&addUser=');
            exit();
        }
    }

    require_once './connect.php';

    $sql="INSERT INTO `users` (`id`, `cityid`, `name`, `surname`, `birthday`, `create_user`) 
            VALUES (NULL, '$_POST[cityid]', '$_POST[name]', '$_POST[surname]', '$_POST[birthday]', current_timestamp());";
    $connect->query($sql);

    if($connect->affected_rows){
        header('location: ../5_db_select_delete_insert_update.php?error=Prawidłowo dodano użytkownika!&addUser=');
    }else{
        header('location: ../5_db_select_delete_insert_update.php?error=Wypełnij wszystkie pola!&addUser=');
    }

    $connect->close();

    header('location: ../5_db_select_delete_insert_update.php?error=Prawidłowo dodano użytkownika!&addUser=');
?>