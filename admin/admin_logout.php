<?php
    $cookie_value="";
    setcookie('super_admin_id',$cookie_value,time()+(-1),"/");
    setcookie('admin_id',$cookie_value,time()+(-1),"/");
    header("location:admin_dashboard_form.php?msg=You are Logout");
?>