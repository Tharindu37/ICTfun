<?php
    if(isset($_COOKIE['user_id'])){
        $user_id=$_COOKIE['user_id'];
        if($user_id==""){
            header("location:dashboard_form.php");
        }
    }else{
        header("location:dashboard_form.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles.css">
    <script src="https://kit.fontawesome.com/e9c5aeacfd.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
                        <li class="breadcrumb-item"><a href="dashboard_form.php">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">HTML</li>
                    </ol>
                    </nav>
                </div>
            </div>

            <div class="row">
            <div class="col-md-12">

                <div class="card" id="chat3" style="border-radius: 15px;">
                <div class="card-body">

                    <div class="row">
                    <div class="col-md-6 col-lg-5 col-xl-4 mb-4 mb-md-0">

                        <div class="p-3 playlist-wrap">

                        <div class="input-group rounded mb-3">
                            <h3>Playlist</h3>
                        </div>

                            <div style="overflow: scroll; position: relative; height: 400px">
                                <div class="list-group">
                                    <?php
                                        require "video.php";
                                        if($result->num_rows>0){
                                            
                                            while($data_row=$result->fetch_assoc()){
                                    ?>
                                    <a onclick="playVideo(<?php echo $data_row['video_id'] ?>)" class="list-group-item list-group-item-action"><i class="fas fa-video"></i> <?php echo $data_row['video_name']; ?></a>
                                    <?php
                                            }
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="video-wrap col-md-6 col-lg-7 col-xl-8">

                        <div class="pt-3" data-mdb-perfect-scrollbar="true" style="position: relative; height: auto;">
                            <div id="video_player" class="ratio ratio-16x9" style="width:auto; height:auto">    
                                        
                                        <div id="player"></div>
                                        
                            <!-- <iframe id="video_player"
                                src="https://youtu.be/hT9Lgf2_dbw"
                                title="YouTube video"
                                allowfullscreen
                            ></iframe> -->
                            </div>
                        </div>

                        <div class="text-muted justify-content-start align-items-center pe-3 pt-3 mt-2">
                            <h5 id="video_title">
                            Welcome Our Course, Select and Watch video
                            </h5>
                        </div>

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