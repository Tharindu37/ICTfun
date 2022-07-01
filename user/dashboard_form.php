<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles.css">
    <script src="https://kit.fontawesome.com/e9c5aeacfd.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- chart -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work',     11],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 2],
          ['Sleep',    7]
        ]);

        var options = {
          title: 'My Daily Activities',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>

    <!--  -->
</head>
<body>
    <?php
        require "header_from.php";
    ?>
    
    <section style="background-color: #eee;">
        <div class="container py-5">
            <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
                </nav>
            </div>
            </div>

            <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4">
                <div class="card-body text-center">
                    <div class="col-12 col-md-4 chart-wrap" id="piechart_3d" style="overflow: hidden; width: auto; height: 300px;"></div>
                </div>
                </div>
                <div class="card mb-4 mb-lg-0">
                <div class="card-body p-0">
                        <div class="card mb-4 mb-md-0">
                        <div class="card-body">
                            <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project Status
                            </p>
                            <p class="mb-1" style="font-size: .77rem;">HTML</p>
                            <div class="progress rounded" style="height: 5px;">
                            <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="mt-4 mb-1" style="font-size: .77rem;">CSS</p>
                            <div class="progress rounded" style="height: 5px;">
                            <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="mt-4 mb-1" style="font-size: .77rem;">Javascript</p>
                            <div class="progress rounded" style="height: 5px;">
                            <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="mt-4 mb-1" style="font-size: .77rem;">PHP</p>
                            <div class="progress rounded" style="height: 5px;">
                            <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        </div>
                </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card mb-4">
                <div class="card-body">
                    <div class="row">
                        <h4 class="menu-title">Available Course</h4>
                            <div class="available-course-wrap">

                                <div class="scrollmenu">
                                    <?php             
                                        require "available_course.php";
                                        if($result->num_rows>0){
                                            while($data_row=$result->fetch_assoc()){
                                                $course_id=$data_row['course_id'];
                                    ?>
                                        <div class="course-div">
                                            <div class="card" style="width: auto;">
                                                <input id="couser_id_class" type="number" value="" style="display:none">
                                                <img onclick="getCourseId(<?php echo $course_id; ?>)" style="width:200px ; height:200px ;" src="<?php echo $data_row['course_image_url']; ?>" class="course_image card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title"><?php echo $data_row['course_name']; ?></h5>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                            }
                                        }
                                    ?>
                                </div>
                            </div>

                        <hr>
                        <h4 class="menu-title">Your Course</h4>
                        <div class="your-course-wrap">
                            <div class="scrollmenu">
                                <?php
                                    require "my_course.php";
                                    if($result->num_rows>0){
                                        while($data_row=$result->fetch_assoc()){
                                            $course_id=$data_row['course_id'];
                                            $sql_query="SELECT * FROM course WHERE course_id=$course_id";
                                            $my_course_result=$database_connection->query($sql_query);
                                            $my_course=$my_course_result->fetch_assoc();
                                ?>
                                    <div class="course-div">
                                        <div class="card" style="width: auto;">
                                            <a href="video_form.php?course_id=<?php echo $course_id; ?>"><img style="width:200px ; height:200px ;" src="<?php echo $my_course['course_image_url']; ?>" class="cursor-pointer card-img-top" alt="..."></a>
                                            <div class="card-body">
                                                <h5 class="card-title"><?php echo $my_course['course_name']; ?></h5>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                        }
                                    }
                                ?>
                            </div>
                        </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <script src="../script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>