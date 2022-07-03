<?php
    require "../db_connection.php";
    if(isset($_COOKIE['user_id'])){
        $user_id=$_COOKIE['user_id'];

        $sql="SELECT * FROM course";
        $result=$database_connection->query($sql);
    }else
?>