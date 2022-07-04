<?php
    require "../db_connection.php";

    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $birthday=$_POST['birthday'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $phone_number=$_POST['phone_number'];
    $description=$_POST['description'];
    $password=$_POST['password'];
    $comform_password=$_POST['comform_password'];
    
    // echo $first_name."<br>";
    // echo $last_name."<br>";
    // echo $birthday."<br>";
    // echo $gender."<br>";
    // echo $email."<br>";
    // echo $phone_number."<br>";
    // echo $description."<br>";
    // echo $password."<br>";
    // echo $encript_password."<br>";
    // echo $encript_password."<br>";
    

    if($first_name=="" or $last_name=="" or $birthday=="" or $gender=="" or $email=="" or $phone_number=="" or $description=="" or $password=="" or $comform_password==""){
        echo "All field are required";
    }else{
        if($password!=$comform_password){
            echo "Password & Comform Password are not match";
        }else{
            $sql="SELECT * FROM user WHERE email='$email'";
            $result=$database_connection->query($sql);
            if($result->num_rows >0){
                echo "Can not use this email";
            }else{
                $encript_password=md5($password);
                $sql_query="INSERT INTO user(first_name,last_name,birthday,gender,mobile_number,description,email,password,user_type) VALUE('$first_name','$last_name','$birthday','$gender','$phone_number','$description','$email','$encript_password','user')";
                if($database_connection->query($sql_query)===TRUE){
                    echo "Registration Successfully";
                }else{
                    echo "Registration Faild";
                }
            } 
        }
    }

?>