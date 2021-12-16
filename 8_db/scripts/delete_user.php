<?php
    if (isset($_GET['deleteUser'])) {
        require_once './connect.php';
        //echo $_GET['deleteUser'];
        //$sql="DELETE FROM `users` WHERE `users`.`id` = 111111";
        //$sql="DELETE FROM `users` WHERE `users`.`id` = $_GET[deleteUser]";
        //$sql="DELETE FROM `users` WHERE `users`.`surname` = 'Nowak'";
        $sql="DELETE FROM `users` WHERE `users`.`id` = $_GET[deleteUser]";
        $connect->query($sql);
        //echo $connect -> affected_rows;

        if ($connect -> affected_rows) {
            //header('location: ../2_db_select_delete.php?deleteUser=1');
            header('location: ../4_db_select_delete_insert.php?deleteUser=1');
        }else {
            //header('location: ../2_db_select_delete.php?deleteUser=0');
            header('location: ../4_db_select_delete_insert.php?deleteUser=0');
        }
    }
?>