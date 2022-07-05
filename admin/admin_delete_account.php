<?php
    require "../db_connection.php";

    $cookie_name='admin_id';
    $cookie_value="";
    $admin_id=$_COOKIE['admin_id'];
    $sql_query="DELETE FROM user WHERE user_id='$admin_id'";
    if($database_connection->query($sql_query)===TRUE){
        setcookie($cookie_name,$cookie_value,time()+(-1),"/");
        header("location:admin_register_form.php");
    }
?>