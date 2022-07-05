<?php
    require "../db_connection.php";

    $email=$_POST['email'];
    $password=$_POST['password'];
    $encript_password=md5($password);

    if($email=="" or $password==""){
        echo "User name & Passward required";
    }else{
        $sql_query="SELECT * FROM user WHERE email='$email' AND password='$encript_password' And (user_type='admin' OR user_type='super_admin')";
        $result=$database_connection->query($sql_query);
        if($result->num_rows>0){
            $row=$result->fetch_assoc();
            $user_id=$row['user_id'];
            $user_type=$row['user_type'];

                $cookie_name="admin_id";
                $cookie_value=$user_id;
                setcookie($cookie_name,$cookie_value,time()+(3600*24),"/");
            
            echo "Login Successfully";
        }else{
            echo "User name or Password wrong";
        }
    }

?>