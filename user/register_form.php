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
</head>
<body class="text-center">
    <?php
        require "header_from.php";
    ?>

    <section class="vh-150 gradient-custom" style="background-color: #eee;">
        <div class="container py-5 h-100">

            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Register</li>
                    </ol>
                    </nav>
                </div>
            </div>

            <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
                <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                <div class="card-body p-4 p-md-5">
                    <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
                    <form>

                    <div class="row">
                        <div class="col-md-6 mb-4">

                            <div class="form-floating">
                                <input placeholder="First Name" type="text" id="firstName" class="form-control form-control-lg" />
                                <label class="form-label" for="firstName">First Name</label>
                            </div>

                        </div>
                        <div class="col-md-6 mb-4">

                            <div class="form-floating">
                                <input placeholder="Last Name" type="text" id="lastName" class="form-control form-control-lg" />
                                <label class="form-label" for="lastName">Last Name</label>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-4 d-flex align-items-center">

                            <div class="form-floating datepicker w-100">
                                <input placeholder="Birthday" type="text" class="form-control form-control-lg" id="birthdayDate" />
                                <label for="birthdayDate" class="form-label">Birthday</label>
                            </div>

                        </div>
                        <div class="col-md-6 mb-4">

                            <h6 class="mb-2 pb-1">Gender: </h6>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender"
                                value="option1" checked />
                                <label class="form-check-label" for="femaleGender">Female</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender"
                                value="option2" />
                                <label class="form-check-label" for="maleGender">Male</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="otherGender"
                                value="option3" />
                                <label class="form-check-label" for="otherGender">Other</label>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-4 pb-2">

                            <div class="form-floating">
                                <input placeholder="Email" type="email" id="emailAddress" class="form-control form-control-lg" />
                                <label class="form-label" for="emailAddress">Email</label>
                            </div>

                        </div>
                        <div class="col-md-6 mb-4 pb-2">

                            <div class="form-floating">
                                <input placeholder="Phone Number" type="tel" id="phoneNumber" class="form-control form-control-lg" />
                                <label class="form-label" for="phoneNumber">Phone Number</label>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-4 pb-2">

                            <div class="form-floating">
                                <input placeholder="Password" type="password" id="password" class="form-control form-control-lg" />
                                <label class="form-label" for="password">Password</label>
                            </div>

                        </div>
                        <div class="col-md-6 mb-4 pb-2">

                            <div class="form-floating">
                                <input placeholder="Comform Password" type="password" id="Comformpassword" class="form-control form-control-lg" />
                                <label class="form-label" for="Comformpassword">Comform Password</label>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">

                        <div class="form-floating">
                                <textarea placeholder="Description" id="description" class="form-control form-control-lg" rows="3"></textarea>
                                <label class="form-label" for="description">Description</label>
                            </div>

                        </div>
                    </div>

                    <div class="mt-4 pt-2">
                        <input class="btn btn-primary btn-lg" type="submit" value="Submit" style="width:100%"/>
                    </div>
                    <hr class="my-4">
                    <a href="login_form.php" class="btn btn-secondary btn-lg" style="width:100%">
                            Log in
                     </a>

                    </form>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>