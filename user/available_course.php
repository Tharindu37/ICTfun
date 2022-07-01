<?php
    require "../db_connection.php";

    $sql_query="SELECT * FROM course";
    $result=$database_connection->query($sql_query);

?>