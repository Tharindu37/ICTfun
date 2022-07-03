<?php
    $course_id=$_GET['course_id'];
?>
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
    <style>
        #form_response{
            display:none;
        }
    </style>
</head>
<body>
    <input type="number" value="<?php echo $course_id; ?>" id="course_id_tag" style="display:none">
    <?php
        require "admin_header_from.php";
    ?>
    <section  style="background-color: #eee;">
        <div class="container py-5">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Settings</li>
                    </ol>
                    </nav>
                </div>
            </div>

            <div class="card text-center">
                <div class="card-header">
                    Edit
                </div>
                <div class="card-body">
                    <div style="overflow-x:auto;">
                        <table class="table table-hover">
                        <tr>
                            <td>Video Title</td>
                            <td>Video Number</td>
                            <td>Video ID</td>
                            <td>Edit</td>
                            <td>Save</td>
                            <td>Delete</td>
                        </tr>
                        <?php
                            require "../user/video.php";
                            if($result->num_rows>0){
                                while($data_row=$result->fetch_assoc()){
                                    // $course_id=$data_row['course_id'];
                        ?>
                        <tr>
                            <td><input disabled type="text" placeholder="<?php echo $data_row['video_name']; ?>"></td>
                            <td><input disabled type="text" placeholder="<?php echo $data_row['video_number'] ?>"></td>
                            <td><input disabled type="text" placeholder="<?php echo $data_row['video_url']; ?>"></td>
                            <td>
                                <i class="fas fa-edit"></i>
                            </td>
                            <td>
                                <i class="fas fa-save"></i> 
                            </td>
                            <td>
                                <i class="fas fa-minus-circle"></i>
                            </td>
                        </tr>
                        <?php
                                }
                            }
                        ?>
                        
                        </table>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    <form id="add_video_form" action="">
                        <div id="form_response" class="alert alert-danger" role="alert">
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <span  class="input-group-text" id="">Video Title</span>
                            <input id="video_title" name="video_title" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="">Video Number</span>
                            <input id="video_number" name="video_number" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="">Video ID</span>
                            <input id="video_id" name="video_id" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>
                        <button id="add_video_btn" type="button" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="../script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>