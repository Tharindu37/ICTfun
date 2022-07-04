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
<body onload="displayRespons()">
    <?php
        require "admin_header_from.php";
    ?>
    <section  style="background-color: #eee;">
        <div class="container py-5">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="admin_dashboard_form.php">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add Course</li>
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
                            <td scope="col">#</td>
                            <td scope="col">Course Title</td>
                            <td scope="col">Edit</td>
                            <td scope="col">Save</td>
                            <td scope="col">Delete</td>
                        </tr>
                        <?php
                            require "course.php";
                            if($result->num_rows>0){
                                while($data_row=$result->fetch_assoc()){
                        ?>
                            <tr>
                                <th scope="row"><?php echo $data_row['course_id'] ?></th>
                                <td><input disabled type="text" placeholder="<?php echo $data_row['course_name']; ?>"></td>
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
                        <div id="form_response" class="alert alert-danger" role="alert">
                            <?php
                                $msg="";
                                if(isset($_GET['msg'])){
                                    $msg=$_GET['msg'];
                                    echo $msg;
                                }
                            ?>
                        </div>
                        <input type="text" value="<?php echo $msg; ?>" style="display:none;" id="msg">
                    <form method="POST" id="add_course_form" action="add_course.php" enctype="multipart/form-data">
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Course Title</span>
                            <input name="course_name" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>
                        <div class="mb-3">
                            <label for="formFileSm" class="form-label">Select course image</label>
                            <input name="course_image_url" class="form-control form-control-sm" id="formFileSm" type="file">
                        </div>
                        <button id="add_course_btn" type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="../script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>