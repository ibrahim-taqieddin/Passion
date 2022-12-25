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
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid d-none d-lg-block">
        <div class="row align-items-center py-4 px-xl-5">
            <div class="col-lg-3">
                <a href="/" class="text-decoration-none">
                    <img src="./img/logo2.png" width=150px height=100px>
                    <!-- <h1 class="m-0"><span class="text-primary">FIRST</span>Steps</h1> -->
                </a>
            </div>
        </div>
    </div>


    <section class="vh-100" style="background-color: #44425A ;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="img/login.jpg" alt="login form" class="img-fluid"
                                    style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">

                                    <form action='/login-user' method="POST">
                                        @csrf
                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">We Are So Proud Of
                                            You, Sign IN Please!</h5>

                                        @error('email')
                                            <p style="font-size:medium" class="text-danger mb-0 right">{{ $message }}
                                            </p>
                                        @enderror
                                        <div class="form-outline mb-4">
                                            <label class="form-label text-dark" for="form2Example17">Email
                                                address</label>
                                            <input name="email" type="email" id="form2Example17"
                                                class="form-control text-dark form-control-lg" />
                                        </div>

                                        @error('password')
                                            <p style="font-size:medium" class="text-danger mb-0 right">{{ $message }}
                                            </p>
                                        @enderror
                                        <div class="form-outline mb-4">
                                            <label class="form-label text-dark" for="form2Example27">Password</label>
                                            <input name="password" type="password " id="form2Example27"
                                                class="form-control text-dark form-control-lg" />
                                        </div>

                                        <div class="pt-1 mb-4">
                                            <button class="btn btn-dark btn-lg btn-block" type="submit">Login</button>
                                        </div>
                                        {{-- #FF6600 --}}
                                        <a class="small text-muted" href="#!">Forgot password? </a>
                                        <p class="mb-5 pb-lg-2" style="color: #2d3048;">Don't have an account? <a
                                                href="/signup" style="color: #1c2a95;">Register here</a></p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
