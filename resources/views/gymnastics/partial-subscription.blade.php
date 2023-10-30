@extends('layouts.app')

@section('content')
    <div class="container" data-aos="fade-up">
        <div class="section-title  my-5 ">
            <h2>Exercises</h2>
            <p>Check our Exercises</p>
        </div>
        <div class="row" id="exercises">
            @foreach ($ex as $data)
                <div class="col-lg-3 col-md-4 col-sm-12  d-flex align-items-stretch">
                    <div class="card col-lg-3" style="width: 18rem;">
                        <img src="{{ asset("photos/$data->exercise_image") }}" class="card-img-top" alt="..."
                            style="height:16rem">
                        <div class="card-body">
                            <h5 class="card-title text-center">{{ $data->exercise_name }}</h5>
                            <p class="text-center"> {{ $data->exercise_category }} </p>
                            <a href="{{ route('exercises.show', $data->id) }}" class="btn btn-primary col-12">SHOW</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <section id="clients" class="clients">
            <div class="container" data-aos="zoom-in">

                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><img
                                src="{{ asset('assets/img/clients/426e7e87dc4f071d2cf97df59c582782.jpg') }}"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img
                                src="{{ asset('assets/img/clients/gym-fitness-center-video-logo-social-media-design-template-f9566537b0445b719d2c9ae5b4264d3c_screen.jpg') }}"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img
                                src="{{ asset('assets/img/clients/231-2314624_street-workout-logo-street-workout-logo-png.png') }}"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img
                                src="{{ asset('assets/img/clients/motivation-vector-icon-symbol-creative-sign-business-administration-icons-collection-filled-flat-illustration-computer-161846695.jpg') }}"
                                class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide"><img
                                src="{{ asset('assets/img/clients/064c0e9850fd1623e6b0ace7051ad2c5.webp') }}"
                                class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide"><img
                                src="{{ asset('assets/img/clients/aerobic-workout-logo-fitness-exercise-gym-vector-set-white-background-80760301.jpg') }}"
                                class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide"><img
                                src="{{ asset('assets/img/clients/360_F_466633750_GXJrAmqNqabcGfJnPj9ggY5o7NPfK7mW.jpg') }}"
                                class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide"><img
                                src="{{ asset('assets/img/clients/istockphoto-1169422269-170667a.jpg') }}"
                                class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide"><img
                                src="{{ asset('assets/img/clients/gym-logo-template-design-04d583c8ca3558ea0ea21763a57e7ba6_screen.jpg') }}"
                                class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide"><img
                                src="{{ asset('assets/img/clients/360_F_90639463_QyX0xORBHUKFoXoNkPrCephI9qVEsvc9.jpg') }}"
                                class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide"><img
                                src="{{ asset('assets/img/clients/de006a771f050d73c989a3c714ace026.jpg') }}"
                                class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Clients Section -->

        <section id="services" class="services">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Services</h2>
                    <p>Check our Services</p>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6 d-flex align-items-stretch">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4><a href="#exercises">Exercises</a></h4>
                            <h5> <span style=" color:#ffc107 ">NOW</span> You can watch videos about your exercise
                                and read more about it
                            </h5>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4><a>Calculate
                                    Calories</a></h4>
                            <h5> <span style=" color:#ffc107 ">NOW</span> Enter your wieght, hieght, age and select
                                your gen then we calculate your calories ..
                            </h5>
                            <h6><a class="btn btn-warning" href="#" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal3">Calculate</a></h6>
                        </div>
                    </div>
                </div>


            </div>
        </section><!-- End Services Section -->

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
                            <img src="{{ asset('assets/img/testimonials/Capture2.PNG') }}" class="testimonial-img"
                                alt="">
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

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
            
    <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 mx-auto">
                                <div class="card-body text-center">
                                    <h1 class="heading display-5 pb-3">Calorie Calculator</h1>
                                    <form id="calorie-form">

                                        <div class="form-group row mb-3">
                                            <label for="age" class="col-sm-2 col-form-label">Age</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" id="age"
                                                    placeholder="Ages 15-80">
                                            </div>
                                        </div>

                                        <fieldset class="form-group mb-3">
                                            <div class="row">
                                                <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                                                <div class="col-sm-10" id="form-radio">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="male" name="customRadioInline1"
                                                            class="custom-control-input" checked="checked">
                                                        <label class="custom-control-label" for="male">Male</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="female" name="customRadioInline1"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label" for="female">Female</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>

                                        <div class="form-group row mb-3 ">
                                            <label for="weight" class="col-sm-2 col-form-label">Weight</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" id="weight"
                                                    placeholder="In kilograms">
                                            </div>
                                        </div>

                                        <div class="form-group row mb-3">
                                            <label for="height" class="col-sm-2 col-form-label">Height</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" id="height"
                                                    placeholder="In centimeters">
                                            </div>
                                        </div>

                                        <div class="form-group row mb-3">
                                            <legend class="col-form-label col-sm-2 pt-0">Activity</legend>
                                            <select class="custom-select col-sm-10" id="list">
                                                <option selected value="1">Sedentary (little or no exercise)
                                                </option>
                                                <option value="2">Lightly active (light exercise/sports 1-3
                                                    days/week)</option>
                                                <option value="3">Moderately active (moderate exercise/sports 3-5
                                                    days/week)</option>
                                                <option value="4">Very active (hard exercise/sports 6-7 days a
                                                    week)</option>
                                            </select>
                                        </div>

                                        <div class="form-group mb-3">
                                            <input type="submit" value="Calculate" class="btn btn-dark btn-block">
                                        </div>

                                    </form>


                                    <div id="results">
                                        <h5>Total Calories</h5>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="number" class="form-control" id="total-calories" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('calories')
    <script src="{{ asset('assets/js/calorie.js') }}"></script>
@endsection
