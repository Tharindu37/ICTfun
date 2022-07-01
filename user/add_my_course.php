<?php
    require "../db_connection.php";

    if(isset($_COOKIE['user_id'])){
        $user_id=$_COOKIE['user_id'];
        $course_id=$_POST['course_id'];

        if($course_id>0){
            $sql_quary="SELECT * FROM my_course WHERE user_id='$user_id' and course_id='$course_id'";
            $result=$database_connection->query($sql_quary);
            if($result->num_rows<=0){
                $sql="INSERT INTO my_course(user_id,course_id) VALUE ('$user_id','$course_id')";
                $database_connection->query($sql);
            }
            echo $course_id;
        }
    }
?>