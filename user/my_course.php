<?php
    require "../db_connection.php";
    if(isset($_COOKIE['user_id'])){
        $user_id=$_COOKIE['user_id'];

        $sql="SELECT course_id FROM my_course WHERE user_id=$user_id";
        $result=$database_connection->query($sql);
    }else
?>