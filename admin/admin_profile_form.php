<?php
  require "../db_connection.php";
    
    if(isset($_COOKIE['admin_id'])){
        $admin_id=$_COOKIE['admin_id'];
        if($admin_id==""){
            header("location:admin_dashboard_form.php");
        }
    }else{
        header("location:admin_dashboard_form.php");
    }

    $first_name="";
    $last_name="";
    $birthday="";
    $gender="";
    $email="";
    $phone_number="";
    $description="";
    $profile_pic_url="";

    $web_url="";
    $facebook_url="";
    $instagram_url="";
    $twitter_url="";
    $github_url="";

    $user_type="";
    if(isset($_COOKIE['admin_id'])){
        $admin_id=$_COOKIE['admin_id'];
        $sql_query="SELECT * FROM user WHERE user_id='$admin_id'";
        $result=$database_connection->query($sql_query);
        $row=$result->fetch_assoc();
        $first_name=$row['first_name'];
        $last_name=$row['last_name'];
        $birthday=$row['birthday'];
        $gender=$row['gender'];
        $email=$row['email'];
        $phone_number=$row['mobile_number'];
        $description=$row['description'];
        $profile_pic_url=$row['profile_pic_url'];

        $web_url=$row['web_url'];
        $facebook_url=$row['facebook_url'];
        $instagram_url=$row['instagram_url'];
        $twitter_url=$row['twitter_url'];
        $github_url=$row['github_url'];

        $user_type=$row['user_type'];
    }
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
    <?php
        require "admin_header_from.php";
    ?>
    
    <section style="background-color: #eee;">
        <div class="container py-5">
            <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="admin_dashboard_form.php">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                </ol>
                </nav>
            </div>
            </div>

            <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4">
                <div class="card-body text-center">
                    <div>
                    
                    <form action="admin_update_profile.php" method="post" enctype="multipart/form-data">
                    <label for="profile_pic_url">
                            <img id="profile_img" src="<?php if($profile_pic_url=="") echo "profile_pic/pro_pic.jpg"; else echo $profile_pic_url; ?>" alt="avatar" class="rounded-circle img-fluid" style="width: 150px; height: 150px">
                        </label>
                        <input name="profile_pic_url" id="profile_pic_url" style="display:none" type="file" />
                        <input id="pro_pic_submit" type="submit" style="display:none">
                    </div>
                    </form>
                    
                    <h5 id="profile_name" class="my-3"><?php echo $first_name." ".$last_name; ?></h5>
                    <p class="text-muted mb-1"><?php echo $email; ?></p>
                    <p id="profile_description" class="text-muted mb-4"><?php echo $description; ?></p>
                </div>
                </div>
                <div class="card mb-4 mb-lg-0">
                <div class="card-body p-0">
                    <ul class="list-group list-group-flush rounded-3">
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <i class="fas fa-globe fa-lg text-warning"></i>
                        <input id="admin_web_url" style="border:none" class="mb-0" type="text" class="form-control" placeholder="<?php echo $web_url; ?>" disabled>
                        <i id="admin_web_url_edit" class="fas fa-edit"></i>
                        <i id="admin_web_url_save" class="fas fa-save"></i>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <i class="fab fa-github fa-lg" style="color: #333333;"></i>
                        <input id="admin_github_url" style="border:none" class="mb-0" type="text" class="form-control" placeholder="<?php echo $github_url; ?>" disabled>
                        <i id="admin_github_url_edit" class="fas fa-edit"></i>
                        <i id="admin_github_url_save" class="fas fa-save"></i>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                        <input id="admin_twitter_url" style="border:none" class="mb-0" type="text" class="form-control" placeholder="<?php echo $twitter_url; ?>" disabled>
                        <i id="admin_twitter_url_edit" class="fas fa-edit"></i>
                        <i id="admin_twitter_url_save" class="fas fa-save"></i>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                        <input id="admin_instagram_url" style="border:none" class="mb-0" type="text" class="form-control" placeholder="<?php echo $instagram_url; ?>" disabled>
                        <i id="admin_instagram_url_edit" class="fas fa-edit"></i>
                        <i id="admin_instagram_url_save" class="fas fa-save"></i>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                        <input id="admin_facebook_url" style="border:none" class="mb-0" type="text" class="form-control" placeholder="<?php echo $facebook_url; ?>" disabled>
                        <i id="admin_facebook_url_edit" class="fas fa-edit"></i>
                        <i id="admin_facebook_url_save" class="fas fa-save"></i>
                    </li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">First Name</p>
                        </div>
                        <div class="col-sm-9 d-flex justify-content-between">
                            <!-- <p class="text-muted mb-0">Johnatan Smith</p> -->
                            <input id="admin_first_name" style="border:none" class="mb-0" type="text" class="form-control" placeholder="<?php echo $first_name; ?>" disabled>
                            <i id="admin_first_name_edit" class="fas fa-edit" style="<?php if($user_type=='admin') echo "display:none;"; ?>"></i>
                            <i id="admin_first_name_save" class="fas fa-save" style="<?php if($user_type=='admin') echo "display:none;"; ?>"></i>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Last Name</p>
                        </div>
                        <div class="col-sm-9 d-flex justify-content-between">
                            <!-- <p class="text-muted mb-0">Johnatan Smith</p> -->
                            <input id="admin_last_name" style="border:none" class="mb-0" type="text" class="form-control" placeholder="<?php echo $last_name; ?>" disabled>
                            <i id="admin_last_name_edit" class="fas fa-edit" style="<?php if($user_type=='admin') echo "display:none;"; ?>"></i>
                            <i id="admin_last_name_save" class="fas fa-save" style="<?php if($user_type=='admin') echo "display:none;"; ?>"></i>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Birthday</p>
                        </div>
                        <div class="col-sm-9 d-flex justify-content-between">
                            <!-- <p class="text-muted mb-0">Johnatan Smith</p> -->
                            <input id="admin_birthday" style="border:none" class="mb-0" type="text" class="form-control" placeholder="<?php echo $birthday; ?>" disabled>
                            <i id="admin_birthday_edit" class="fas fa-edit" style="<?php if($user_type=='admin') echo "display:none;"; ?>"></i>
                            <i id="admin_birthday_save" class="fas fa-save" style="<?php if($user_type=='admin') echo "display:none;"; ?>"></i>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Gender</p>
                        </div>
                        <div class="col-sm-9 d-flex justify-content-between">
                            <!-- <p class="text-muted mb-0">Johnatan Smith</p> -->
                            <div class="form-check">
                                <input type="radio" class="form-check-input" disabled <?php if($gender=='male') echo "checked"; ?>>Male
                                <label class="form-check-label"></label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" disabled <?php if($gender=='female') echo "checked"; ?>>Female
                                <label class="form-check-label"></label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" disabled <?php if($gender=='other') echo "checked"; ?>>other
                                <label class="form-check-label"></label>
                            </div>
                            <!-- <i class="fas fa-edit"></i>&emsp;&emsp;
                            <i class="fas fa-save"></i> -->
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Mobile Number</p>
                        </div>
                        <div class="col-sm-9 d-flex justify-content-between">
                            <!-- <p class="text-muted mb-0">Johnatan Smith</p> -->
                            <input id="admin_mobile_number" style="border:none" class="mb-0" type="text" class="form-control" placeholder="<?php echo $phone_number; ?>" disabled>
                            <i id="admin_mobile_number_edit" class="fas fa-edit" style="<?php if($user_type=='admin') echo "display:none;"; ?>"></i>
                            <i id="admin_mobile_number_save" class="fas fa-save" style="<?php if($user_type=='admin') echo "display:none;"; ?>"></i>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Description</p>
                        </div>
                        <div class="col-sm-9 d-flex justify-content-between">
                            <!-- <p class="text-muted mb-0">Johnatan Smith</p> -->
                            <input id="admin_description" style="border:none" class="mb-0" type="text" class="form-control" placeholder="<?php echo $description; ?>" disabled>
                            <i id="admin_description_edit" class="fas fa-edit" style="<?php if($user_type=='admin') echo "display:none;"; ?>"></i>
                            <i id="admin_description_save" class="fas fa-save" style="<?php if($user_type=='admin') echo "display:none;"; ?>"></i>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3 d-flex justify-content-between">
                            <p class="mb-0">Email</p>
                        </div>
                        <div class="col-sm-9 d-flex justify-content-between">
                            <!-- <p class="text-muted mb-0">Johnatan Smith</p> -->
                            <input style="border:none" class="mb-0" type="text" class="form-control" placeholder="<?php echo $email; ?>" disabled>
                            <!-- <i class="fas fa-edit"></i>&emsp;&emsp;
                            <i class="fas fa-save"></i> -->
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div id="form_response" class="alert alert-danger" role="alert">
                        </div>
                        <div class="col-sm-3">
                            <p class="mb-0">Change Passward</p>
                        </div>
                        <div class="col-sm-9 d-flex justify-content-between">
                            <!-- <p class="text-muted mb-0">Johnatan Smith</p> -->
                            <input id="admin_old_password" style="border:none" class="mb-0" type="password" class="form-control" placeholder="Old Password">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <!-- <p class="mb-0">New Password</p> -->
                        </div>
                        <div class="col-sm-9 d-flex justify-content-between">
                            <!-- <p class="text-muted mb-0">Johnatan Smith</p> -->
                            <input id="admin_new_password" style="border:none" class="mb-0" type="Password" class="form-control" placeholder="New Password">
                            <!-- <i class="fas fa-edit"></i>&emsp;&emsp; -->
                            <i id="admin_new_password_save" class="fas fa-save"></i>
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