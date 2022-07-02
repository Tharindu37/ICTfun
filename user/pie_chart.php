<?php
    require "../db_connection.php";
    $data=array(array("Course","Video"));
    $sql_query="SELECT * FROM course";
    $result=$database_connection->query($sql_query);
    if($result->num_rows>0){
        while($data_row=$result->fetch_assoc()){
            $course_id=$data_row['course_id'];
            $sql_query1="SELECT * FROM video WHERE course_id='$course_id'";
            $result1=$database_connection->query($sql_query1);
            $video_count=$result1->num_rows;
            array_push($data,array($data_row['course_name'],$video_count));
        }
    }
    echo json_encode($data);
?>