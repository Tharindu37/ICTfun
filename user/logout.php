<?php
    $cookie_name='user_id';
    $cookie_value="";
    setcookie($cookie_name,$cookie_value,time()+(-1),"/");
    header("location:dashboard_form.php?msg=You are Logout");
?>