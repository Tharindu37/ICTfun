<?php
    require "../db_connection.php";
    if(isset($_COOKIE['user_id'])){
        $user_id=$_COOKIE['user_id'];
        $course_id=$_GET['course_id'];

        $sql="SELECT * FROM course WHERE course_id=$course_id";
        $result=$database_connection->query($sql);
    }else
?>