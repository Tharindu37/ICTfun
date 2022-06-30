<?php
    require "../db_connection.php";

    $user_id=$_COOKIE['user_id'];
    
    if(isset($_POST['first_name'])){
        $first_name=$_POST['first_name'];
        if($first_name!=""){
            $sql_query="UPDATE user SET first_name='$first_name' WHERE user_id='$user_id'";
            if($database_connection->query($sql_query)===TRUE){
                echo $first_name;    
            }
        }
    }else if(isset($_POST['last_name'])){
        $last_name=$_POST['last_name'];
        if($last_name!=""){
            $sql_query="UPDATE user SET last_name='$last_name' WHERE user_id='$user_id'";
            if($database_connection->query($sql_query)===TRUE){
                echo $last_name;    
            }
        }
    }else if(isset($_POST['birthday'])){
        $birthday=$_POST['birthday'];
        if($birthday!=""){
            $sql_query="UPDATE user SET birthday='$birthday' WHERE user_id='$user_id'";
            if($database_connection->query($sql_query)===TRUE){
                echo $birthday;    
            }
        }
    }else if(isset($_POST['gender'])){
        $gender=$_POST['gender'];
        if($gender!=""){
            $sql_query="UPDATE user SET gender='$gender' WHERE user_id='$user_id'";
            if($database_connection->query($sql_query)===TRUE){
                echo $gender;    
            }
        }
    }else if(isset($_POST['phone_number'])){
        $phone_number=$_POST['phone_number'];
        if($phone_number!=""){
            $sql_query="UPDATE user SET mobile_number='$phone_number' WHERE user_id='$user_id'";
            if($database_connection->query($sql_query)===TRUE){
                echo $phone_number;    
            }
        }
    }else if(isset($_POST['description'])){
        $description=$_POST['description'];
        if($description!=""){
            $sql_query="UPDATE user SET description='$description' WHERE user_id='$user_id'";
            if($database_connection->query($sql_query)===TRUE){
                echo $description
                ;    
            }
        }
    }else if(isset($_POST['old_password']) and isset($_POST['new_password'])){
        $old_password=$_POST['old_password'];
        $new_password=$_POST['new_password'];
        if($old_password!="" and $new_password!=""){
            $encript_password=md5($old_password);
            $new_encript_password=md5($new_password);
            $sql_query="SELECT * FROM user WHERE user_id='$user_id' AND password='$encript_password'";
            $result=$database_connection->query($sql_query);
            if($result->num_rows>0){
                $sql_query="UPDATE user SET password='$new_encript_password' WHERE user_id='$user_id'";
                if($database_connection->query($sql_query)===TRUE){
                    echo "Password changed";
                }else{
                    echo "Password not changed";
                }
            }else{
                echo "Old password is wrang";
            }
        }else{
            echo "All field are requred";
        }
    }
?>