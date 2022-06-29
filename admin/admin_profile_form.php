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
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                </ol>
                </nav>
            </div>
            </div>

            <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4">
                <div class="card-body text-center">
                    <img src="https://media.istockphoto.com/vectors/default-profile-picture-avatar-photo-placeholder-vector-illustration-vector-id1223671392?k=20&m=1223671392&s=612x612&w=0&h=lGpj2vWAI3WUT1JeJWm1PRoHT3V15_1pdcTn2szdwQ0=" alt="avatar"
                    class="rounded-circle img-fluid" style="width: 150px;">
                    <h5 class="my-3">John Smith</h5>
                    <p class="text-muted mb-1">Full Stack Developer</p>
                    <p class="text-muted mb-4">Bay Area, San Francisco, CA</p>
                </div>
                </div>
                <div class="card mb-4 mb-lg-0">
                <div class="card-body p-0">
                    <ul class="list-group list-group-flush rounded-3">
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <i class="fas fa-globe fa-lg text-warning"></i>
                        <input style="border:none" class="mb-0" type="text" class="form-control" placeholder="https://mdbootstrap.com" disabled>
                        <i class="fas fa-edit"></i>
                        <i class="fas fa-save"></i>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <i class="fab fa-github fa-lg" style="color: #333333;"></i>
                        <input style="border:none" class="mb-0" type="text" class="form-control" placeholder="mdbootstrap" disabled>
                        <i class="fas fa-edit"></i>
                        <i class="fas fa-save"></i>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                        <input style="border:none" class="mb-0" type="text" class="form-control" placeholder="@mdbootstrap" disabled>
                        <i class="fas fa-edit"></i>
                        <i class="fas fa-save"></i>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                        <input style="border:none" class="mb-0" type="text" class="form-control" placeholder="mdbootstrap" disabled>
                        <i class="fas fa-edit"></i>
                        <i class="fas fa-save"></i>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                        <input style="border:none" class="mb-0" type="text" class="form-control" placeholder="https://mdbootstrap.com" disabled>
                        <i class="fas fa-edit"></i>
                        <i class="fas fa-save"></i>
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
                        <div class="col-sm-9">
                            <!-- <p class="text-muted mb-0">Johnatan Smith</p> -->
                            <input style="border:none" class="mb-0" type="text" class="form-control" placeholder="Johnatan Smith" disabled>
                            <i class="fas fa-edit"></i>&emsp;&emsp;
                            <i class="fas fa-save"></i>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Last Name</p>
                        </div>
                        <div class="col-sm-9">
                            <!-- <p class="text-muted mb-0">Johnatan Smith</p> -->
                            <input style="border:none" class="mb-0" type="text" class="form-control" placeholder="Johnatan Smith" disabled>
                            <i class="fas fa-edit"></i>&emsp;&emsp;
                            <i class="fas fa-save"></i>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">First Name</p>
                        </div>
                        <div class="col-sm-9">
                            <!-- <p class="text-muted mb-0">Johnatan Smith</p> -->
                            <input style="border:none" class="mb-0" type="text" class="form-control" placeholder="Johnatan Smith" disabled>
                            <i class="fas fa-edit"></i>&emsp;&emsp;
                            <i class="fas fa-save"></i>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Birthday</p>
                        </div>
                        <div class="col-sm-9">
                            <!-- <p class="text-muted mb-0">Johnatan Smith</p> -->
                            <input style="border:none" class="mb-0" type="text" class="form-control" placeholder="Johnatan Smith" disabled>
                            <i class="fas fa-edit"></i>&emsp;&emsp;
                            <i class="fas fa-save"></i>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Gender</p>
                        </div>
                        <div class="col-sm-9">
                            <!-- <p class="text-muted mb-0">Johnatan Smith</p> -->
                            <div class="form-check">
                                <input type="radio" class="form-check-input" disabled>Male
                                <label class="form-check-label"></label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" disabled>Female
                                <label class="form-check-label"></label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" disabled>other
                                <label class="form-check-label"></label>
                            </div>
                            <i class="fas fa-edit"></i>&emsp;&emsp;
                            <i class="fas fa-save"></i>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Mobile Number</p>
                        </div>
                        <div class="col-sm-9">
                            <!-- <p class="text-muted mb-0">Johnatan Smith</p> -->
                            <input style="border:none" class="mb-0" type="text" class="form-control" placeholder="Johnatan Smith" disabled>
                            <i class="fas fa-edit"></i>&emsp;&emsp;
                            <i class="fas fa-save"></i>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Description</p>
                        </div>
                        <div class="col-sm-9">
                            <!-- <p class="text-muted mb-0">Johnatan Smith</p> -->
                            <input style="border:none" class="mb-0" type="text" class="form-control" placeholder="Johnatan Smith" disabled>
                            <i class="fas fa-edit"></i>&emsp;&emsp;
                            <i class="fas fa-save"></i>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Email</p>
                        </div>
                        <div class="col-sm-9">
                            <!-- <p class="text-muted mb-0">Johnatan Smith</p> -->
                            <input style="border:none" class="mb-0" type="text" class="form-control" placeholder="Johnatan Smith" disabled>
                            <i class="fas fa-edit"></i>&emsp;&emsp;
                            <i class="fas fa-save"></i>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Old Password</p>
                        </div>
                        <div class="col-sm-9">
                            <!-- <p class="text-muted mb-0">Johnatan Smith</p> -->
                            <input style="border:none" class="mb-0" type="password" class="form-control" placeholder="Johnatan Smith" disabled>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">New Password</p>
                        </div>
                        <div class="col-sm-9">
                            <!-- <p class="text-muted mb-0">Johnatan Smith</p> -->
                            <input style="border:none" class="mb-0" type="Password" class="form-control" placeholder="Johnatan Smith" disabled>
                            <i class="fas fa-edit"></i>&emsp;&emsp;
                            <i class="fas fa-save"></i>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>