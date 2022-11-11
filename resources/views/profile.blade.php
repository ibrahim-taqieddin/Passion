<!DOCTYPE html>
<html lang="en">

<head>

    <!--TITLE-->
    <title>Profile</title>

    <!--ICON-->
    <link rel="shortcut icon" href="/DevanagariBrahmi/logo.png">

    <!--META TAGS-->
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="author" content="Team Bboysdreamsfell">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta property="og:locale" content="en_US" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="Profiler Name || Krishivalahs" />

    <!--EXTERNAL CSS-->
    <link rel="stylesheet" href="css/style.css">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!--PLUGIN-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <!--FONT AWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Odibee+Sans&family=Oswald:wght@300;400&family=Ubuntu:wght@700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet">

<body>

    <div class="container-fluid d-none d-lg-block">
        <div class="row align-items-center py-4 px-xl-5">
            <div class="col-lg-3">
                <a href="" class="text-decoration-none">
                    <img src="./img/logo2.png" width=150px height=100px>
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
                            <a href="/index" class="nav-item nav-link active">Home</a>
                            <a href="/about" class="nav-item nav-link">About</a>
                            <a href="/ranking" class="nav-item nav-link">Ranking</a>
                            <a href="/courses" class="nav-item nav-link">Courses</a>
                            <a href="/profile" class="nav-item nav-link">Profile</a>
                            <a href="/contact" class="nav-item nav-link">Contact</a>
                        </div>
                        <a class="btn btn-primary py-2 px-4 ml-auto d-none d-lg-block" href="/">Home page</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    </div>
    </div>

    <div class="container">
        <div class="row">
        </div>
        <table>
            <tr>
                <td>
                    <section>
                        <label for="fileToUpload">
                            <i class="fa fa-camera"></i>
                            <input type="file" id="fileToUpload" style="visibility:hidden;"
                                accept=".png,.jpg,jpeg,.PNG,.JPEG" name="fileToUpload"
                                onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                        </label>
                        <img src="https://i.ibb.co/yNGW4gg/avatar.png" id="blah" alt="Avatar">
                    </section>
                    <h1 style="color: #fff">IBRAHIM TAQIEDDIN</h1>
                    <h3 style="color: #ff5601">Diamond Stage</h3>
                </td>
        </table>
    </div>

    <!--Courses Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Courses</h5>
                <h1>Extra Available Courses</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="img/math.jpg" alt="">
                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                {{-- <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>25 Students</small>
                            <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>01h 30m</small> --}}
                            </div>
                            <a class="h5" href="">Intensive Math and Sience Course</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    {{-- <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5
                                        <small>(250)</small> --}}
                                    </h6>
                                    <h5 class="m-0">$45</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="img/html.jpg" alt="">
                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                {{-- <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>25 Students</small>
                            <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>01h 30m</small>  --}}
                            </div>
                            <a class="h5" href="">HTML5 basics</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    {{-- <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5
                                        <small>(250)</small> --}}
                                    </h6>
                                    <h5 class="m-0">$45</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="img/css.jpg" alt="">
                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>25 Students</small>
                                <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>01h 30m</small>
                            </div>
                            <a class="h5" href="">CSS3 basics</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    {{-- <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5
                                        <small>(250)</small> --}}
                                    </h6>
                                    <h5 class="m-0">$45</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="img/bootstrap.png" alt="">
                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                {{-- <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>25 Students</small>
                                <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>01h 30m</small> --}}
                            </div>
                            <a class="h5" href="">Bootstrap basics</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    {{-- h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5
                                    <small>(250)</small></h6> --}}
                                    <h5 class="m-0">$45</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="img/html5css3.jpg" alt="">
                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                {{-- <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>25 Students</small>
                                <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>01h 30m</small> --}}
                            </div>
                            <a class="h5" href="">HTML, CSS, BOOTSTRAP intensive Course</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    {{-- <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5
                                        <small>(250)</small> --}}
                                    </h6>
                                    <h5 class="m-0">$99</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="img/js.jpg" alt="">
                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                {{-- <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>25 Students</small>
                                <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>01h 30m</small> --}}
                            </div>
                            <a class="h5" href="">JAVASCRIPT course for beginners</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    {{-- <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5
                                        <small>(250)</small> --}}
                                    </h6>
                                    <h5 class="m-0">$45</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <style>
        * {
            margin: 0;
        }

        html {
            scroll-behavior: smooth;
        }

        :root {
            /* scrollbar-color: rgb(210,210,210) rgb(46,54,69) !important;
scrollbar-width: thin !important; */
        }

        /* ::-webkit-scrollbar {
height: 12px;
width: 8px;
background: rgb(255, 255, 255);
} */
        /* ::-webkit-scrollbar-thumb {
background: rgb(255, 255, 255);
-webkit-box-shadow: 0px 1px 2px rgba(252, 252, 252, 0.75);
}
::-webkit-scrollbar-corner {
background: rgb(255, 255, 255);
}


 */







        /* a,li,em,button,input,textarea,select{
text-decoration:none;
list-style:none;
font-style:normal;
outline:none !important;
transition:0.5s;
resize: horizontal;
} */
        /*
ul{
position:relative;
left:-20px;
} */

        ul li {
            padding: 20px 0;
            color: gray;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        /* b{
color:#fff;
} */

        .btn {
            background: #ff5601;
            /* padding:10px; */
            border: 0;
            /* outline:none; */
            color: rgb(255, 255, 255);
            display: block;
            /* width:60px; */
            /* margin:10px 0; */
            text-align: Center;
            /* border-radius:5px; */
            cursor: pointer;
        }


        .fa {
            color: #ff5601;
            cursor: pointer;
        }

        .container {
            width: 90%;
            margin: 10vh auto;
        }

        .container table {
            width: 100%;
        }

        .container table td {
            margin: 30px;
            border-radius: 5px;
            box-shadow: 0px 6px 16px -6px rgba(172, 23, 23, 0.5);
            padding: 30px;
            background-color: #44425A;
            color: #fff;
            vertical-align: top;
        }

        .container table td:nth-child(1) {
            text-align: Center;
        }

        .container table td:nth-child(2) .fa {
            float: right;
        }

        .container table td:nth-child(2) input {
            background: none;
            outline: none;
            border: 0;
            color: gray;
            width: 60%;
            pointer-events: none;
        }

        .container table td:nth-child(1) section {
            position: relative;
            width: 200px;
            height: 200px;
            margin: 5vh auto;
        }


        .container table td:nth-child(1) .fa {
            position: absolute;
            right: 25px;
            top: 25px;
            font-size: 2em;
        }

        .container table td img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
        }

        .container table td h3 {
            color: gray;
            /* font-weight:normal; */
        }

        .container table .section2 {
            text-align: left;
        }





        .container .inframe .card img {
            width: 100%;
            height: 40vh;
            border-radius: 0;
        }



        .card_content ul li {
            padding: 5px;
            /* font-size:13px;/ */
        }

        .card_content h3 {
            text-align: Center;
            color: #fff;
        }

        .inframe .card:hover>.card_content {
            height: 40vh;
        }





        @media (max-width:820px) {
            .container {
                width: 100%;
            }

            .container table td {
                display: block;
                width: 90%;
                margin: 0px;
            }

            .container table .section2 .quantityselector section {
                width: 41%;
                margin: 0px 10px;
            }

            .container table .section2 ul {
                position: relative;
                left: -40px;
            }

        }
    </style>


    <div class="container-fluid bg-dark text-white py-5 px-sm-3 px-lg-5">
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


            <a href="#" class="btn btn-lg btn-primary text-light btn-lg-square back-to-top"><i
                    class="fa fa-angle-double-up"></i></a>

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
</body>

</html>
