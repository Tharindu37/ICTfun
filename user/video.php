<?php
    require "../db_connection.php";
    $course_id=$_GET['course_id'];
    if($course_id==""){
        header("location:dashboard_form.php");
    }

    $sql_query="SELECT * FROM video WHERE course_id='$course_id'";
    $result=$database_connection->query($sql_query);
?>