<?php
  require "../db_connection.php";
    
    if(isset($_COOKIE['admin_id'])){
        $admin_id=$_COOKIE['admin_id'];
        if($admin_id==""){
            header("location:admin_login_form.php");
        }
    }else{
        header("location:admin_login_form.php");
    }

    
    $user_type="";
    if(isset($_COOKIE['admin_id'])){
        $admin_id=$_COOKIE['admin_id'];
        $sql_query="SELECT * FROM user WHERE user_id='$admin_id'";
        $result=$database_connection->query($sql_query);
        $row=$result->fetch_assoc();
        
        $user_type=$row['user_type'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
<body class="text-center">
    <?php
        require "admin_header_from.php";
    ?>

    <section class="vh-150 gradient-custom" style="background-color: #eee;">
        <div class="container py-5 h-100">

            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="admin_dashboard_form.php">Admin Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Admin Register</li>
                    </ol>
                    </nav>
                </div>
            </div>

            <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
                <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                <div class="card-body p-4 p-md-5">
                    <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Admin Registration Form</h3>
                    <div id="form_response" class="alert alert-danger" role="alert">
                        </div>
                    
                    <form id="register_form">

                    <div class="row">
                        <div class="col-md-6 mb-4">

                            <div class="form-floating">
                                <input name="first_name" placeholder="First Name" type="text" id="firstName" class="form-control form-control-lg" />
                                <label class="form-label" for="firstName">First Name</label>
                            </div>

                        </div>
                        <div class="col-md-6 mb-4">

                            <div class="form-floating">
                                <input name="last_name" placeholder="Last Name" type="text" id="lastName" class="form-control form-control-lg" />
                                <label class="form-label" for="lastName">Last Name</label>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-4 d-flex align-items-center">

                            <div class="form-floating datepicker w-100">
                                <input name="birthday" placeholder="Birthday" type="date" class="form-control form-control-lg" id="birthdayDate" />
                                <label for="birthdayDate" class="form-label">Birthday</label>
                            </div>

                        </div>
                        <div class="col-md-6 mb-4">

                            <h6 class="mb-2 pb-1">Gender: </h6>

                            <div class="form-check form-check-inline">
                                <input name="gender" class="form-check-input" type="radio" value="female" id="femaleGender"
                                value="option1" checked />
                                <label class="form-check-label" for="femaleGender">Female</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input name="gender" class="form-check-input" type="radio" value="male" id="maleGender"
                                value="option2" />
                                <label class="form-check-label" for="maleGender">Male</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input name="gender" class="form-check-input" type="radio" value="other" id="otherGender"
                                value="option3" />
                                <label class="form-check-label" for="otherGender">Other</label>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-4 pb-2">

                            <div class="form-floating">
                                <input name="email" placeholder="Email" type="email" id="emailAddress" class="form-control form-control-lg" />
                                <label class="form-label" for="emailAddress">Email</label>
                            </div>

                        </div>
                        <div class="col-md-6 mb-4 pb-2">

                            <div class="form-floating">
                                <input name="phone_number" placeholder="Phone Number" type="tel" id="phoneNumber" class="form-control form-control-lg" />
                                <label class="form-label" for="phoneNumber">Phone Number</label>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-4 pb-2">

                            <div class="form-floating">
                                <input name="password" placeholder="Password" type="password" id="password" class="form-control form-control-lg" />
                                <label class="form-label" for="password">Password</label>
                            </div>

                        </div>
                        <div class="col-md-6 mb-4 pb-2">

                            <div class="form-floating">
                                <input name="comform_password" placeholder="Comform Password" type="password" id="Comformpassword" class="form-control form-control-lg" />
                                <label class="form-label" for="Comformpassword">Comform Password</label>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">

                        <div class="form-floating">
                                <textarea name="description" placeholder="Description" id="description" class="form-control form-control-lg" rows="3"></textarea>
                                <label class="form-label" for="description">Description</label>
                            </div>

                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">

                        <div class="form-floating">
                                <!-- <label class="form-label" for="user_type">Select User Type</label> -->
                                <select id="user_type" name="user_type" class="form-select form-select-sm" aria-label=".form-select-sm example" <?php if($user_type=="admin") echo "disabled"; ?>>
                                    <option class="" value="admin" selected>Super Admin</option>
                                    <option value="super_admin">Admin</option>    
                                </select>
                            </div>

                        </div>
                    </div>

                    <div class="mt-4 pt-2">
                        <input id="register_btn" class="btn btn-primary btn-lg" type="submit" value="Submit" style="width:100%"/>
                    </div>
                    <hr class="my-4">
                    <a href="admin_login_form.php" class="btn btn-secondary btn-lg" style="width:100%">
                            Log in
                     </a>

                    </form>
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