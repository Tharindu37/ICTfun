<?php
    require "../db_connection.php";

    $cookie_name='user_id';
    $cookie_value="";
    $user_id=$_COOKIE['user_id'];
    $sql_query="DELETE FROM user WHERE user_id='$user_id'";
    if($database_connection->query($sql_query)===TRUE){
        setcookie($cookie_name,$cookie_value,time()+(-1),"/");
        header("location:dashboard_form.php");
    }
?>