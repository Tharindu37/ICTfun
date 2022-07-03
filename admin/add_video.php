<?php
    require "../db_connection.php";
        $course_id=$_POST['course_id'];
        $video_name=$_POST['video_name'];
        $video_number=$_POST['vidoe_number'];
        $video_url=$_POST['video_url'];

        if($video_url=="" or $video_name=="" or $video_number=="" or $course_id==""){
            echo "All field are required";
        }else{
            
                $sql="SELECT * FROM video WHERE video_number='$video_number' and course_id='$course_id'";
                $result=$database_connection->query($sql);
                if($result->num_rows >0){
                    echo "Can not use this video number";
                }else{
                    $sql_query="INSERT INTO video(course_id,video_name,video_number,video_url) VALUE('$course_id','$video_name','$video_number','$video_url')";
                    if($database_connection->query($sql_query)===TRUE){
                        echo "Video Added Successfully";
                    }else{
                        echo "Video Added Faild";
                    }
            }
        }
?>