<?php
    require "../db_connection.php";
    $video_id=$_POST['video_id'];
    

    $sql_query="SELECT * FROM video WHERE video_id='$video_id'";
    $result=$database_connection->query($sql_query);
    if($result->num_rows>0){
        $data_row=$result->fetch_assoc();

        $myObj = new stdClass();
        $myObj->video_name = $data_row['video_name'];
        $myObj->video_url = $data_row['video_url'];
        $myJSON = json_encode($myObj);

        echo $myJSON;
    }
?>