<?php
    require "../db_connection.php";

    $user_id=$_COOKIE['admin_id'];
    
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
    }else if(isset($_POST['web_url'])){
        $web_url=$_POST['web_url'];
            $sql_query="UPDATE user SET web_url='$web_url' WHERE user_id='$user_id'";
            if($database_connection->query($sql_query)===TRUE){
                echo $web_url;    
        }
    }else if(isset($_POST['github_url'])){
        $github_url=$_POST['github_url'];
        $sql_query="UPDATE user SET github_url='$github_url' WHERE user_id='$user_id'";
        if($database_connection->query($sql_query)===TRUE){
            echo $github_url;    
        }
    }else if(isset($_POST['twitter_url'])){
        $twitter_url=$_POST['twitter_url'];
            $sql_query="UPDATE user SET twitter_url='$twitter_url' WHERE user_id='$user_id'";
            if($database_connection->query($sql_query)===TRUE){
                echo $twitter_url;    
        }
    }else if(isset($_POST['instagram_url'])){
        $instagram_url=$_POST['instagram_url'];
            $sql_query="UPDATE user SET instagram_url='$instagram_url' WHERE user_id='$user_id'";
            if($database_connection->query($sql_query)===TRUE){
                echo $instagram_url;    
        }
    }else if(isset($_POST['facebook_url'])){
        $facebook_url=$_POST['facebook_url'];
        $sql_query="UPDATE user SET facebook_url='$facebook_url' WHERE user_id='$user_id'";
        if($database_connection->query($sql_query)===TRUE){
            echo $facebook_url;    
        }
    }else if(isset($_FILES['profile_pic_url'])){
        $save_location="profile_pic/";
        $file_save=$save_location."pro_pic".$user_id.".jpg";
        move_uploaded_file($_FILES['profile_pic_url']['tmp_name'],$file_save);
        $sql_query="UPDATE user SET profile_pic_url='$file_save' WHERE user_id='$user_id'";
        if($database_connection->query($sql_query)===TRUE){
            header("location:admin_profile_form.php");
        }  
    }
?>