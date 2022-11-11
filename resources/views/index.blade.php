@extends('layout.master')
@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#header-carousel" data-slide-to="1"></li>
                <li data-target="#header-carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active" style="min-height: 300px;">
                    <img class="position-relative w-100" src="img/carousel-1.jpg"
                        style="min-height: 300px; object-fit: cover;">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-md-3"></h5>
                            <h1 class="display-3 text-white mb-md-4">The Best Way To Find Your Child's PASSION</h1>
                            <a href="/about" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Learn
                                More</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="min-height: 300px;">
                    <img class="position-relative w-100" src="img/panner1.jpg"
                        style="min-height: 300px; object-fit: cover;">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-md-3"></h5>
                            <h1 class="display-3 text-white mb-md-4"> OUR programs offers a way to pursue passions </h1>
                            <a href="/about" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Learn
                                More</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="min-height: 300px;">
                    <img class="position-relative w-100" src="img/carousel-3.jpg"
                        style="min-height: 300px; object-fit: cover;">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-md-3"></h5>
                            <h1 class="display-3 text-white mb-md-4">New Way To Discover Your Destination!</h1>
                            <a href="/about" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Learn
                                More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid rounded mb-4 mb-lg-0" src="img/homee.jpg" alt="">
                </div>
                <div class="col-lg-7">
                    <div class="text-left mb-4">
                        <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">A Brief Description</h5>
                        <h1>Innovative Way To Learn</h1>
                    </div>
                    <p><b>
                            We "First Step" Academy, tried to change the methodology of adabtive learning, we dedicated
                            ourselves
                            to draw the road map of the next generations, in order not to fall at the same previous mistakes
                    </p></b>
                    <a href="/about" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Category Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Subjects</h5>
                <h1>Our Subjects </h1>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/cat-1.jpg" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="">
                            <h4 class="text-white font-weight-medium">Web Design</h4>
                            <span></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/cat-2.jpg" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="">
                            <h4 class="text-white font-weight-medium">Math</h4>
                            <span> </span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/cat-3.jpg" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="">
                            <h4 class="text-white font-weight-medium">Graphic Design</h4>
                            <span></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/cat-4.jpg" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="">
                            <h4 class="text-white font-weight-medium">Apps Design</h4>
                            <span></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/cat-5.jpg" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="">
                            <h4 class="text-white font-weight-medium">Marketing</h4>
                            <span></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/cat-6.jpg" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="">
                            <h4 class="text-white font-weight-medium">Research</h4>
                            <span></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/cat-7.jpg" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="">
                            <h4 class="text-white font-weight-medium">Content Writing</h4>
                            <span></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/cat-8.jpg" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="">
                            <h4 class="text-white font-weight-medium">Germany Language</h4>
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Category Start -->


    <!-- Courses Start -->
    <!-- <div class="container-fluid py-5">
                                                                                                                                                                                                                                                                    <div class="container py-5">
                                                                                                                                                                                                                                                                        <div class="text-center mb-5">
                                                                                                                                                                                                                                                                            <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Courses</h5>
                                                                                                                                                                                                                                                                            <h1>Our Popular Courses</h1>
                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                        <div class="row">
                                                                                                                                                                                                                                                                            <div class="col-lg-4 col-md-6 mb-4">
                                                                                                                                                                                                                                                                                <div class="rounded overflow-hidden mb-2">
                                                                                                                                                                                                                                                                                    <img class="img-fluid" src="img/course-1.jpg" alt="">
                                                                                                                                                                                                                                                                                    <div class="bg-secondary p-4">
                                                                                                                                                                                                                                                                                        <div class="d-flex justify-content-between mb-3">
                                                                                                                                                                                                                                                                                            <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>25 Students</small>
                                                                                                                                                                                                                                                                                            <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>01h 30m</small>
                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                        <a class="h5" href="">Web design & development courses for beginner</a>
                                                                                                                                                                                                                                                                                        <div class="border-top mt-4 pt-4">
                                                                                                                                                                                                                                                                                            <div class="d-flex justify-content-between">
                                                                                                                                                                                                                                                                                                <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6>
                                                                                                                                                                                                                                                                                                <h5 class="m-0">$99</h5>
                                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                            <div class="col-lg-4 col-md-6 mb-4">
                                                                                                                                                                                                                                                                                <div class="rounded overflow-hidden mb-2">
                                                                                                                                                                                                                                                                                    <img class="img-fluid" src="img/course-2.jpg" alt="">
                                                                                                                                                                                                                                                                                    <div class="bg-secondary p-4">
                                                                                                                                                                                                                                                                                        <div class="d-flex justify-content-between mb-3">
                                                                                                                                                                                                                                                                                            <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>25 Students</small>
                                                                                                                                                                                                                                                                                            <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>01h 30m</small>
                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                        <a class="h5" href="">Web design & development courses for beginner</a>
                                                                                                                                                                                                                                                                                        <div class="border-top mt-4 pt-4">
                                                                                                                                                                                                                                                                                            <div class="d-flex justify-content-between">
                                                                                                                                                                                                                                                                                                <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6>
                                                                                                                                                                                                                                                                                                <h5 class="m-0">$99</h5>
                                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                            <div class="col-lg-4 col-md-6 mb-4">
                                                                                                                                                                                                                                                                                <div class="rounded overflow-hidden mb-2">
                                                                                                                                                                                                                                                                                    <img class="img-fluid" src="img/course-3.jpg" alt="">
                                                                                                                                                                                                                                                                                    <div class="bg-secondary p-4">
                                                                                                                                                                                                                                                                                        <div class="d-flex justify-content-between mb-3">
                                                                                                                                                                                                                                                                                            <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>25 Students</small>
                                                                                                                                                                                                                                                                                            <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>01h 30m</small>
                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                        <a class="h5" href="">Web design & development courses for beginner</a>
                                                                                                                                                                                                                                                                                        <div class="border-top mt-4 pt-4">
                                                                                                                                                                                                                                                                                            <div class="d-flex justify-content-between">
                                                                                                                                                                                                                                                                                                <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6>
                                                                                                                                                                                                                                                                                                <h5 class="m-0">$99</h5>
                                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                            <div class="col-lg-4 col-md-6 mb-4">
                                                                                                                                                                                                                                                                                <div class="rounded overflow-hidden mb-2">
                                                                                                                                                                                                                                                                                    <img class="img-fluid" src="img/course-4.jpg" alt="">
                                                                                                                                                                                                                                                                                    <div class="bg-secondary p-4">
                                                                                                                                                                                                                                                                                        <div class="d-flex justify-content-between mb-3">
                                                                                                                                                                                                                                                                                            <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>25 Students</small>
                                                                                                                                                                                                                                                                                            <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>01h 30m</small>
                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                        <a class="h5" href="">Web design & development courses for beginner</a>
                                                                                                                                                                                                                                                                                        <div class="border-top mt-4 pt-4">
                                                                                                                                                                                                                                                                                            <div class="d-flex justify-content-between">
                                                                                                                                                                                                                                                                                                <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6>
                                                                                                                                                                                                                                                                                                <h5 class="m-0">$99</h5>
                                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                            <div class="col-lg-4 col-md-6 mb-4">
                                                                                                                                                                                                                                                                                <div class="rounded overflow-hidden mb-2">
                                                                                                                                                                                                                                                                                    <img class="img-fluid" src="img/course-5.jpg" alt="">
                                                                                                                                                                                                                                                                                    <div class="bg-secondary p-4">
                                                                                                                                                                                                                                                                                        <div class="d-flex justify-content-between mb-3">
                                                                                                                                                                                                                                                                                            <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>25 Students</small>
                                                                                                                                                                                                                                                                                            <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>01h 30m</small>
                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                        <a class="h5" href="">Web design & development courses for beginner</a>
                                                                                                                                                                                                                                                                                        <div class="border-top mt-4 pt-4">
                                                                                                                                                                                                                                                                                            <div class="d-flex justify-content-between">
                                                                                                                                                                                                                                                                                                <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6>
                                                                                                                                                                                                                                                                                                <h5 class="m-0">$99</h5>
                                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                            <div class="col-lg-4 col-md-6 mb-4">
                                                                                                                                                                                                                                                                                <div class="rounded overflow-hidden mb-2">
                                                                                                                                                                                                                                                                                    <img class="img-fluid" src="img/course-6.jpg" alt="">
                                                                                                                                                                                                                                                                                    <div class="bg-secondary p-4">
                                                                                                                                                                                                                                                                                        <div class="d-flex justify-content-between mb-3">
                                                                                                                                                                                                                                                                                            <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>25 Students</small>
                                                                                                                                                                                                                                                                                            <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>01h 30m</small>
                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                        <a class="h5" href="">Web design & development courses for beginner</a>
                                                                                                                                                                                                                                                                                        <div class="border-top mt-4 pt-4">
                                                                                                                                                                                                                                                                                            <div class="d-flex justify-content-between">
                                                                                                                                                                                                                                                                                                <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6>
                                                                                                                                                                                                                                                                                                <h5 class="m-0">$99</h5>
                                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                </div> -->
    <!-- Courses End -->


    <!-- Registration Start -->
    <div class="container-fluid bg-registration py-5" style="margin: 90px 0;">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="mb-4">
                        <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Need Any Courses</h5>
                        <h1 class="text-white">30% Off For New Students</h1>
                        <a class="btn btn-primary py-2 px-4 ml-auto d-none d-lg-block" href="/signup">Sign Up NOW</a>
                    </div>
                    <p class="text-white">WE WILL BE VERY HAPPY TO INCREASE OUR FAMILY MEMBERS !!</p>

                </div>
                <div class="col-lg-4 text-white">
                    <p style="font-size: 50px"></p>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0">
                        <div class="card-header bg-light text-center p-4">
                            <h1 class="m-0">Log In NOW</h1>
                        </div>
                        <div class="card-body rounded-bottom bg-primary p-5">
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4" placeholder="Your name"
                                        required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control border-0 p-4" placeholder="Your email"
                                        required="required" />
                                </div>
                                <div>
                                    <button class="btn btn-dark btn-block border-0 py-3" type="submit">Log In</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Registration End -->


    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Teachers</h5>
                <h1>Keep In Touch With Our Teachers</h1>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 text-center team mb-4">
                    <div class="team-item rounded overflow-hidden mb-2">
                        <div class="team-img position-relative">
                            <img class="img-fluid" src="img/team-1.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="bg-secondary p-4">
                            <h5>Jhon Doe</h5>
                            <p class="m-0">Web Designer</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center team mb-4">
                    <div class="team-item rounded overflow-hidden mb-2">
                        <div class="team-img position-relative">
                            <img class="img-fluid" src="img/osama.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="bg-secondary p-4">
                            <h5>Osama Dasooki</h5>
                            <p class="m-0">Electrical Engineer</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center team mb-4">
                    <div class="team-item rounded overflow-hidden mb-2">
                        <div class="team-img position-relative">
                            <img class="img-fluid" src="img/team-3.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="bg-secondary p-4">
                            <h5>kati noe</h5>
                            <p class="m-0">Ai Specialist</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center team mb-4">
                    <div class="team-item rounded overflow-hidden mb-2">
                        <div class="team-img position-relative">
                            <img class="img-fluid" src="img/ibra.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="bg-secondary p-4">
                            <h5>Ibrahim Taqieddin</h5>
                            <p class="m-0">Data sience</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Testimonial</h5>
                <h1>What They Said about us</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-normal mb-4">They Motivates the children talents buired deep downs </h4>
                            <img class="img-fluid mx-auto mb-3" src="img/user.jpg" alt="">
                            <h5 class="m-0">Ahmad Alawneh</h5>

                        </div>
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-normal mb-4">perfect way to draw a brief and direct map for your child's
                                passion</h4>
                            <img class="img-fluid mx-auto mb-3" src="img/testimonial-2.jpg" alt="">
                            <h5 class="m-0">Rama Jaradat</h5>

                        </div>
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-normal mb-4">i discover with "first step" a new capabilities in my child
                                that i would'nt know about it before</h4>
                            <img class="img-fluid mx-auto mb-3" src="img/omar.jpg" alt="">
                            <h5 class="m-0">Omar Alomari</h5>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <!-- <div class="container-fluid py-5">
                                                                                                                                                                                                                                                                    <div class="container pt-5 pb-3">
                                                                                                                                                                                                                                                                        <div class="text-center mb-5">
                                                                                                                                                                                                                                                                            <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Our Blog</h5>
                                                                                                                                                                                                                                                                            <h1>Latest From Our Blog</h1>
                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                        <div class="row pb-3">
                                                                                                                                                                                                                                                                            <div class="col-lg-4 mb-4">
                                                                                                                                                                                                                                                                                <div class="blog-item position-relative overflow-hidden rounded mb-2">
                                                                                                                                                                                                                                                                                    <img class="img-fluid" src="img/blog-1.jpg" alt="">
                                                                                                                                                                                                                                                                                    <a class="blog-overlay text-decoration-none" href="">
                                                                                                                                                                                                                                                                                        <h5 class="text-white mb-3">Lorem elitr magna stet eirmod labore amet labore clita at ut clita</h5>
                                                                                                                                                                                                                                                                                        <p class="text-primary m-0">Jan 01, 2050</p>
                                                                                                                                                                                                                                                                                    </a>
                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                            <div class="col-lg-4 mb-4">
                                                                                                                                                                                                                                                                                <div class="blog-item position-relative overflow-hidden rounded mb-2">
                                                                                                                                                                                                                                                                                    <img class="img-fluid" src="img/blog-2.jpg" alt="">
                                                                                                                                                                                                                                                                                    <a class="blog-overlay text-decoration-none" href="">
                                                                                                                                                                                                                                                                                        <h5 class="text-white mb-3">Lorem elitr magna stet eirmod labore amet labore clita at ut clita</h5>
                                                                                                                                                                                                                                                                                        <p class="text-primary m-0">Jan 01, 2050</p>
                                                                                                                                                                                                                                                                                    </a>
                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                            <div class="col-lg-4 mb-4">
                                                                                                                                                                                                                                                                                <div class="blog-item position-relative overflow-hidden rounded mb-2">
                                                                                                                                                                                                                                                                                    <img class="img-fluid" src="img/blog-3.jpg" alt="">
                                                                                                                                                                                                                                                                                    <a class="blog-overlay text-decoration-none" href="">
                                                                                                                                                                                                                                                                                        <h5 class="text-white mb-3">Lorem elitr magna stet eirmod labore amet labore clita at ut clita</h5>
                                                                                                                                                                                                                                                                                        <p class="text-primary m-0">Jan 01, 2050</p>
                                                                                                                                                                                                                                                                                    </a>
                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                </div> -->
    <!-- Blog End -->
@endsection
