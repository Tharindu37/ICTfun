<?php
    require "../db_connection.php";
        $course_name=$_POST['course_name'];
        // echo $course_name;
        // die();
        

        if($course_name=="" and isset($_FILES['course_image_url'])){
            header("location:add_course_form.php?msg=All field are required"); 
            echo "All field are required"; 
        }else{      
                $sql="SELECT * FROM course WHERE course_name='$course_name'";
                $result=$database_connection->query($sql);
                if($result->num_rows >0){
                    header("location:add_course_form.php?msg=Can not use this course name");
                    // echo "Can not use this course name";
                }else{
                    $course_image_url=$_FILES['course_image_url'];
                    $save_location="../user/course_pic/";
                    $file_save=$save_location.$course_name.".jpg";
                    move_uploaded_file($_FILES['course_image_url']['tmp_name'],$file_save);
                    $image_path="course_pic/".$course_name.".jpg";
                    $sql_query="INSERT INTO course(course_name,course_image_url) VALUE('$course_name','$image_path')";
                    if($database_connection->query($sql_query)===TRUE){
                       header("location:add_course_form.php?msg=Course Added Successfully");
                       echo "Course Added Successfully";
                    }else{
                        header("location:add_course_form.php?msg=Course Added Faild");
                        echo "Course Added Faild";
                    }
            }
        }
?>