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
        require "header_from.php";
    ?>
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
            <img src="../3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
            <img src="../1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="../2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
            </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container" style="margin-top: 40px;">
        <div class="row">

        <div class="text-center col-lg-4">
        <img src="../online_learning.jpg" alt="" style="width: 140px;height: 140px;border-radius: 50%;">
            <h2>E-learning</h2>
            <p>E-learning theory describes the cognitive science principles of effective multimedia learning using electronic educational technology.</p>
            <p><a class="btn btn-secondary" href="https://en.wikipedia.org/wiki/E-learning_(theory)">View details »</a></p>
        </div><!-- /.col-lg-4 -->
    
        <div class="text-center col-lg-4">
        <img src="../programming.jpg" alt="" style="width: 140px;height: 140px;border-radius: 50%;">
            <h2>Computer programming</h2>
            <p>Computer programming is the process of performing a particular computation (or more generally, accomplishing a specific computing result), usually by designing and building an executable computer program</p>
            <p><a class="btn btn-secondary" href="https://en.wikipedia.org/wiki/Computer_programming">View details »</a></p>
        </div><!-- /.col-lg-4 -->
        

        <div class="text-center col-lg-4">
            <img src="../youtube.jpg" alt="" style="width: 140px;height: 140px;border-radius: 50%;">
            <h2>YouTube</h2>
            <p>YouTube is an American online video sharing and social media platform headquartered in San Bruno, California</p>
            <p><a class="btn btn-secondary" href="https://en.wikipedia.org/wiki/YouTube">View details »</a></p>
        </div><!-- /.col-lg-4 -->

        </div>
    </div>

        <!-- Footer -->
    <footer class="text-center text-lg-start bg-light text-muted" style="margin-top: 40px;">
    <!-- Section: Social media -->
    <section
        class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
    >
        <!-- Left -->
        <div class="me-5 d-none d-lg-block">
        <span>Get connected with us on social networks:</span>
        </div>
        <!-- Left -->

        <!-- Right -->
        <div>
        <a href="" class="me-4 text-reset">
            <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="me-4 text-reset">
            <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="me-4 text-reset">
            <i class="fab fa-google"></i>
        </a>
        <a href="" class="me-4 text-reset">
            <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 text-reset">
            <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="me-4 text-reset">
            <i class="fab fa-github"></i>
        </a>
        </div>
        <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
        <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
                <i class="fas fa-gem me-3"></i>ICTfun
            </h6>
            <p>
                ICTfun is a youtube channel.
            </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
                Products
            </h6>
            <p>
                <a href="#!" class="text-reset">HTML</a>
            </p>
            <p>
                <a href="#!" class="text-reset">CSS</a>
            </p>
            <p>
                <a href="#!" class="text-reset">Javascript</a>
            </p>
            <p>
                <a href="#!" class="text-reset">PHP</a>
            </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
                Useful links
            </h6>
            <p>
                <a href="#!" class="text-reset">WWW.ICTfun.tk</a>
            </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
                Contact
            </h6>
            <p><i class="fas fa-home me-3"></i> Kurunegala</p>
            <p>
                <i class="fas fa-envelope me-3"></i>
                ictfunedu@gmail.com
            </p>
            <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
            <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
            </div>
            <!-- Grid column -->
        </div>
        <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2021 Copyright:
        <a class="text-reset fw-bold" href="www.ictfun.tk">www.ICTfun.tk</a>
    </div>
    <!-- Copyright -->
    </footer>
    <!-- Footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>