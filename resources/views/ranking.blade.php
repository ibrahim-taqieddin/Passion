@extends('layout.master')
@section('content')
    <!-- Header Start -->
    <div class="container-fluid page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">Ranking</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Ranking</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Blog Start -->
    <div class="container-fluid justify-content-center py-5">
        <div class="container py-5">
            <div class="col">
                <div class="col-lg-12 mb-4 pb-3">

                    <div class="row d-flex mt-5" style="justify-content: space-between">

                        <div class="col-5 blog-item position-relative overflow-hidden rounded  mb-2">

                            <img class="img-fluid" src="img/alll.jpg" alt="">
                            <a class="blog-overlay text-decoration-none" href="">
                                {{-- <p class="text-primary m-0">Silver</p> --}}
                            </a>
                        </div>
                        <div class="col-6 align-self-center">
                            <p class="text-primary m-0">First Step</p><br>
                            <h5 class="text mb-3">You Are About To Start Match! Focus On Your Goal, And Go On!!
                            </h5>

                        </div>

                    </div>
                    <div class="row d-flex mt-5" style="justify-content: space-between">

                        <div class="col-6 align-self-center">
                            <p class="text-primary m-0">Silver Stage</p><br>
                            <h5 class="text mb-3">You Are Doing Great SOLDIER, Keep Defending Your Region Intelligently!
                            </h5>

                        </div>
                        <div class="col-5 blog-item position-relative overflow-hidden rounded  mb-2">

                            <img class="img-fluid" src="img/jundii2.jpg" alt="">
                            <a class="blog-overlay text-decoration-none" href="">
                            </a>
                        </div>

                    </div>
                    <div class="row d-flex mt-5" style="justify-content: space-between">

                        <div class="col-5 blog-item position-relative overflow-hidden rounded  mb-2">

                            <img class="img-fluid" src="img/horse.jpg" alt="">
                            <a class="blog-overlay text-decoration-none" href="">
                            </a>
                        </div>
                        <div class="col-6 align-self-center">
                            <p class="text-primary m-0">Bronze Stage</p><br>
                            <h5 class="text mb-3">You Fight With Honor, The Horse Will Lead Your Step, Try Not To Lose It!!
                            </h5>
                        </div>

                    </div>
                    <div class="row d-flex mt-5" style="justify-content: space-between">

                        <div class="col-6 align-self-center">
                            <p class="text-primary m-0">Gold Stage</p><br>
                            <h5 class="text mb-3">Great Job, Its So Nice To Still Alive Your Fighters, Take Care Of The
                                Elephant, He Will Guid The Battle
                            </h5>
                        </div>
                        <div class="col-5 blog-item position-relative overflow-hidden rounded  mb-2">

                            <img class="img-fluid" src="img/elephantt.jpg" alt="">
                            <a class="blog-overlay text-decoration-none" href="">
                            </a>
                        </div>

                    </div>
                    <div class="row d-flex mt-5" style="justify-content: space-between">

                        <div class="col-5 blog-item position-relative overflow-hidden rounded  mb-2">

                            <img class="img-fluid" src="img/castle.jpg" alt="">
                            <a class="blog-overlay text-decoration-none" href="">
                            </a>
                        </div>
                        <div class="col-6 align-self-center">
                            <p class="text-primary m-0">Diamond Stage</p><br>
                            <h5 class="text mb-3">You Seem To Be Tierd,It's Okay With Alittle Rest, Let Your Castle
                                Monitoring The Sitiuation!
                            </h5>
                        </div>

                    </div>
                    <div class="row d-flex mt-5" style="justify-content: space-between">

                        <div class="col-6 align-self-center">
                            <p class="text-primary m-0">Platenioum Stage</p><br>
                            <h5 class="text mb-3">You Are Great! Your Steadfastness Untill This Moment Means THAT You Are
                                Brave!! Let The Minister Take His Step!
                            </h5>
                        </div>
                        <div class="col-5 blog-item position-relative overflow-hidden rounded  mb-2">

                            <img class="img-fluid" src="img/wazeer.jpg" alt="">
                            <a class="blog-overlay text-decoration-none" href="">
                            </a>
                        </div>

                    </div>

                    {{-- <div class="blog-item position-relative overflow-hidden rounded  mb-2">
                        <img class="img-fluid" src="img/jundii2.jpg" alt="">
                        <a class="blog-overlay text-decoration-none" href="">
                            <h5 class="text-white mb-3">Lorem elitr magna stet eirmod labore amet labore clita at ut
                                clita</h5>
                            <p class="text-primary m-0">Silver</p>
                        </a>
                    </div>
                    <div class="blog-item position-relative overflow-hidden rounded  mb-2">
                        <img class="img-fluid" src="img/horse.jpg" alt="">
                        <a class="blog-overlay text-decoration-none" href="">
                            <h5 class="text-white mb-3">Lorem elitr magna stet eirmod labore amet labore clita at ut
                                clita</h5>
                            <p class="text-primary m-0">Bronze </p>
                        </a>
                    </div>
                    <div class="blog-item position-relative overflow-hidden rounded  mb-2">
                        <img class="img-fluid" src="img/elephantt.jpg" alt="">
                        <a class="blog-overlay text-decoration-none" href="">
                            <h5 class="text-white mb-3">Lorem elitr magna stet eirmod labore amet labore clita at ut
                                clita</h5>
                            <p class="text-primary m-0">Gold</p>
                        </a>
                    </div>
                    <div class="blog-item position-relative overflow-hidden rounded  mb-2">
                        <img class="img-fluid" src="img/castle.jpg" alt="">
                        <a class="blog-overlay text-decoration-none" href="">
                            <h5 class="text-white mb-3">Lorem elitr magna stet eirmod labore amet labore clita at ut
                                clita</h5>
                            <p class="text-primary m-0">Diamonds </p>
                        </a>
                    </div>
                    <div class="blog-item position-relative overflow-hidden rounded  mb-2">
                        <img class="img-fluid" src="img/wazeer.jpg" alt="">
                        <a class="blog-overlay text-decoration-none" href="">
                            <h5 class="text-white mb-3">Lorem elitr magna stet eirmod labore amet labore clita at ut
                                clita</h5>
                            <p class="text-primary m-0">Platinum </p>
                        </a>
                    </div>
                    <div class="blog-item position-relative overflow-hidden rounded  mb-2">
                        <img class="img-fluid" src="img/king.jpg" alt="">
                        <a class="blog-overlay text-decoration-none" href="">
                            <h5 class="text-white mb-3">Lorem elitr magna stet eirmod labore amet labore clita at ut
                                clita</h5>
                            <p class="text-primary m-0">Master </p>
                        </a>
                     </div> --}}
                    <div class="row d-flex mt-5" style="justify-content: space-between">

                        <div class="col-5 blog-item position-relative overflow-hidden rounded  mb-2">

                            <img class="img-fluid" src="img/king.jpg" alt="">
                            <a class="blog-overlay text-decoration-none" href="">
                            </a>
                        </div>
                        <div class="col-6 align-self-center">
                            <p class="text-primary m-0">King Stage</p><br>
                            <h5 class="text mb-3">Your Way Of Fightng In All Previous Steps, Prove That You Deserve The
                                Title Of King!!
                            </h5>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
