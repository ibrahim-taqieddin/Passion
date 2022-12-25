<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>THE FIRST STEP</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!-- aos animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid d-none d-lg-block">
        <div class="row align-items-center py-4 px-xl-5">
            <div class="col-lg-3">
                <a href="/" class="text-decoration-none">
                    <img src="./img/passion.png" height=70px>
                    <!-- <h1 class="m-0"><span class="text-primary">FIRST</span>Steps</h1> -->
                </a>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <!-- <h1 class="m-0"><span class="text-primary">FIRST</span>Steps</h1> -->
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav py-0">
                            <a href="/" class="nav-item nav-link active">Home</a>
                            <a href="/about" class="nav-item nav-link">About</a>
                            <a href="/ranking" class="nav-item nav-link">Ranking</a>
                            <a href="/courses" class="nav-item nav-link">Courses</a>
                            <a href="/profile" class="nav-item nav-link">Profile</a>
                            <a href="/contact" class="nav-item nav-link">Contact</a>
                        </div>
                        <a class="btn btn-primary py-2 px-4 ml-auto d-none d-lg-block" href="/login">LOG IN</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    </div>
    </div>

    @yield('content')


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-12 col-md-12">
                <div class="row">
                    <div class="col-md-6 mb-5 text-center">
                        <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">keep In Touch</h5>
                        <p><i class="fa fa-map-marker-alt mr-2"></i>Zarqa, 36 street , building No.35 , 2nd floor</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>+962-798469907</p>
                        <p><i class="fa fa-envelope mr-2"></i>info@firststep.com</p>

                    </div>

                    <div class="col-lg-4 col-md-6 mb-5">
                        <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;"></h5>
                        <div class="w-100">
                            <div class="input-group">
                                <input type="text" class="form-control border-light" style="padding: 30px;"
                                    placeholder="Your Email Address">
                                <div class="input-group-append">
                                    <button class="btn btn-primary px-4">Subsicribe</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5"
                style="border-color: rgba(256, 256, 256, .1) !important;">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center text-md-center mb-3 mb-md-0">
                        <p class="m-0 text-white text-center">&copy; <a href="/">First Step</a>. All Rights
                            Reserved.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Footer End -->


            <!-- Back to Top -->
            <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i
                    class="fa fa-angle-double-up"></i></a>


            <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
            <!-- JavaScript Libraries -->
            <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
            <script src="lib/easing/easing.min.js"></script>
            <script src="lib/owlcarousel/owl.carousel.min.js"></script>

            <!-- Contact Javascript File -->
            <script src="mail/jqBootstrapValidation.min.js"></script>
            <script src="mail/contact.js"></script>

            <!-- Template Javascript -->
            <script src="js/main.js"></script>
            <script>
                AOS.init();
            </script>
</body>

</html>
