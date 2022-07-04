<?php
    require "../db_connection.php";

        $sql="SELECT * FROM course";
        $result=$database_connection->query($sql);
?>