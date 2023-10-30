<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">


    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->

    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top ">
            <div class="container d-flex align-items-center justify-content-lg-between">
                <h1 id="fh5co-logo"><a href="index.html">Fit<span>ness</span></a></h1>
                <nav id="navbar" class="navbar order-last order-lg-0">
                    <ul>
                        <li><a class="nav-link scrollto active" href="#">HOME</a></li>
                        <li><a class="nav-link scrollto" href="#testimonials">ABOUT</a></li>
                        <li><a class="nav-link scrollto" href="#counts">SERVICES</a></li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav><!-- .navbar -->


                @guest
                    <a href="#" class="get-started-btn scrollto" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">Get Started</a>
                @else
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"
                        class="get-started-btn scrollto"> LOGOUT </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @endguest



            </div>
        </header><!-- End Header -->

        <!-- ======= Hero Section ======= -->
        <section id="hero" class="d-flex align-items-left justify-content-left">
            <div class="container" data-aos="fade-up">
                <div class="row justify-content-left" data-aos="fade-up" data-aos-delay="150">
                    <div class="col-xl-6 col-lg-8">
                        <h2 class="my-5">Stop <span>Wishing</span> Start <span>Doing</span></h2>
                        <h3 class="my-3">We are team of talented digital marketers</h3>
                        <span><a data-bs-toggle="modal" data-bs-target="#exampleModal4" class="get-started-btn my-4"
                                href="#">Add New Exercise</a></span>
                    </div>
                </div>

            </div>
        </section><!-- End Hero -->

        <div class="section-title my-5">
            <p>Add New Trainer</p>
        </div>

        <div class="container col-6 my-5">

            <!-- Create  Form -->
            <div class="card">
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('trainers.store') }}" method="POST">
                        @csrf
                        <div class="form-group my-2">
                            <label for=""> Trainer Name </label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="form-group my-2">
                            <label for=""> Trainer Email </label>
                            <input type="text" class="form-control" name="email">
                        </div>
                        <div class="form-group my-2">
                            <label for=""> Trainer Phone </label>
                            <input type="text" class="form-control" name="phone">
                        </div>
                        <div class="form-group my-2">
                            <label for=""> Trainer Feedback </label>
                            <input type="text" class="form-control" name="feedback">
                        </div>
                        <button type="submit" class="btn btn-primary col-12"> ADD </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- ======= Counts Section ======= -->
        <div class="section-title">
            <h2>About Us</h2>
            <p>About Us</p>
        </div>
        <section id="counts" class="counts">
            <div class="container" data-aos="fade-up">

                <div class="row no-gutters">
                    <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start"
                        data-aos="fade-right" data-aos-delay="100"></div>
                    <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch" data-aos="fade-left"
                        data-aos-delay="100">
                        <div class="content d-flex flex-column justify-content-center">
                            <h3>Good news to new clients</h3>
                            <p>
                                This statistics tells you that you are in the right place
                            </p>
                            <div class="row">
                                <div class="col-md-6 d-md-flex align-items-md-stretch">
                                    <div class="count-box">
                                        <i class="bi bi-emoji-smile"></i>
                                        <span data-purecounter-start="0" data-purecounter-end="80"
                                            data-purecounter-duration="2" class="purecounter"></span>
                                        <p><strong>Happy Clients</strong> who believe in changing their lives for
                                            the
                                            better</p>
                                    </div>
                                </div>

                                <div class="col-md-6 d-md-flex align-items-md-stretch">
                                    <div class="count-box">
                                        <i class="bi bi-journal-richtext"></i>
                                        <span data-purecounter-start="0" data-purecounter-end="85"
                                            data-purecounter-duration="2" class="purecounter"></span>
                                        <p><strong>Projects</strong> in the last 3 months due to special clients</p>
                                    </div>
                                </div>

                                <div class="col-md-6 d-md-flex align-items-md-stretch">
                                    <div class="count-box">
                                        <i class="bi bi-clock"></i>
                                        <span data-purecounter-start="0" data-purecounter-end="35"
                                            data-purecounter-duration="4" class="purecounter"></span>
                                        <p><strong>Years of experience</strong> in the field of gyms and trainers at
                                            the
                                            highest level</p>
                                    </div>
                                </div>

                                <div class="col-md-6 d-md-flex align-items-md-stretch">
                                    <div class="count-box">
                                        <i class="bi bi-award"></i>
                                        <span data-purecounter-start="0" data-purecounter-end="20"
                                            data-purecounter-duration="4" class="purecounter"></span>
                                        <p><strong>Awards</strong> return to special coaches and special clients</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End .content-->
                    </div>
                </div>

            </div>
        </section><!-- End Counts Section -->

        <!-- ======= Testimonials Section ======= -->
        <div class="section-title">
            <h2>Motivational quotes</h2>
            <p>Fresh your mind</p>
        </div>
        <section id="testimonials" class="testimonials">
            <div class="container" data-aos="zoom-in">
                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('assets/img/testimonials/muhammad_ali_photo_by_stanley_weston_archive_photos_getty_482857506.jpg') }}"
                                    class="testimonial-img" alt="">
                                <h3>Muhammed Ali</h3>
                                <h4>American &amp; professional boxer</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Impossible is just a word thrown around by small men who find it easier to live
                                    in the world they've been given than to explore the power they have to change
                                    it. Impossible is not a fact. It's an opinion. Impossible is potential.
                                    Impossible is temporary. Impossible is nothing.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('assets/img/testimonials/Capture.PNG') }}" class="testimonial-img"
                                    alt="">
                                <h3>Mike Tyson</h3>
                                <h4>Professional boxer</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    I'm a dreamer. I have to dream and reach for the stars, and if I miss a star
                                    then I grab a handful of clouds.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('assets/img/testimonials/Cristiano_Ronaldo_2018.jpg') }}"
                                    class="testimonial-img" alt="">
                                <h3>Cristiano Ronaldo</h3>
                                <h4>Portuguese professional footballer </h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Dreams are not what you see when you sleep,
                                    dreams are things which don't let you sleep.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('assets/img/testimonials/Capture2.PNG') }}"
                                    class="testimonial-img" alt="">
                                <h3>Usain Bolt</h3>
                                <h4>Jamaican retired sprinter</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    A lot of legends, a lot of people, have come before me. But this is my time.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('assets/img/testimonials/Lionel_Messi_20180626.jpg') }}"
                                    class="testimonial-img" alt="">
                                <h3>Lionel Messi</h3>
                                <h4> Argentine professional footballer</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    You have to fight to reach your dream. You have to sacrifice and work hard for
                                    it
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->
    </div>
    </div>
    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-3">
                        <div class="footer-info">
                            <h3>Fit<span>ness</span></h3>
                            <p>
                                A108 Adam Street <br>
                                NY 535022, USA<br><br>
                                <strong>Phone:</strong> ************<br>
                                <strong>Email:</strong> info@example.com<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="https://www.facebook.com/" class="facebook"><i
                                        class="bx bxl-facebook"></i></a>
                                <a href="https://twitter.com/" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="https://www.instagram.com/" class="instagram"><i
                                        class="bx bxl-instagram"></i></a>
                                <a href="https://www.linkedin.com/" class="linkedin"><i
                                        class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-3 footer-links">
                        <h4>USEFUL LINKS</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#testimonials">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#counts">Services</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-3 footer-links">
                        <h4>OUR SERVICES</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i><a disabled>Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i><a disabled>Watch Exrcises</a></li>
                            <li><i class="bx bx-chevron-right"></i><a disabled>Calculate Calories</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>FITNESS</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer><!-- End Footer -->

    </div>
    <div class="modal " id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ADD EXERCISES</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="POST" action="{{ route('exercises.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for=""> Exercise Name </label>
                            <input type="text" class="form-control" name="exercise_name">
                        </div>
                        <div class="form-group">
                            <label for=""> Exercise Category </label>
                            <input type="text" class="form-control" name="exercise_category">
                        </div>
                        <div class="form-group">
                            <label for=""> Exercise Description </label>
                            <input type="text" class="form-control" name="exercise_description">
                        </div>
                        <div class="form-group">
                            <label for=""> Exercise Image</label>
                            <input type="file" class="form-control" name="exercise_image">
                        </div>
                        <div class="form-group">
                            <label for=""> Exercies Video </label>
                            <input type="text" class="form-control" name="exercise_video">
                        </div>
                        <button type="submit" class="btn btn-primary col-12">SEND</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>


    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
