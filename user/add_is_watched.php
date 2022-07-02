<?php
    require "../db_connection.php";
    
    $course_id=$_POST['course_id'];
    $video_id=$_POST['video_id'];
    
    
    if(isset($_COOKIE['user_id'])){
        $user_id=$_COOKIE['user_id'];

        $sql="SELECT * FROM video_is_end WHERE user_id='$user_id' and course_id='$course_id' and video_id='$video_id'";
        $result=$database_connection->query($sql);
        if($result->num_rows >0){
            echo "All reddy watch";
        }else{
            $sql_query="INSERT INTO video_is_end (user_id,course_id,video_id,is_end) VALUE ('$user_id','$course_id','$video_id','1')";
            $database_connection->query($sql_query);
            $sql1="SELECT * FROM video_is_end WHERE user_id='$user_id' and course_id='$course_id'";
            $sql2="SELECT * FROM video WHERE course_id='$course_id'";
           
            $result1=$database_connection->query($sql1);
            $result2=$database_connection->query($sql2);
            $course_video_count=$result2->num_rows;
            $done_video_count=$result1->num_rows;
            if($course_video_count>0){
                $done_percentage=($done_video_count/$course_video_count)*100;
                $sql3="UPDATE my_course SET done_percentage='$done_percentage' WHERE user_id='$user_id' and course_id='$course_id'";
                $database_connection->query($sql3);
                echo "done ".$done_percentage;
            }
            
        }
    }else{
        header("location:dashboard_form.php");
    }

?>