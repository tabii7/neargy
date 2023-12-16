<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Neargy - Energy Communities</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">


    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
          rel="stylesheet">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/7.0.2/css/flag-icons.min.css"
          integrity="sha512-bZBu2H0+FGFz/stDN/L0k8J0G8qVsAL0ht1qg5kTwtAheiXwiRKyCq1frwfbSFSJN3jooR5kauE0YjtPzhZtJQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>


    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap"
          rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('public/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/style.css') }}" rel="stylesheet">
    <script src="{{ asset('public/js/main.js') }}"></script>
</head>

<body>
<!-- Spinner Start -->
<div id="spinner"
     class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
    <a href="home" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">

        <img src="public/img/logo2.png" class="m-0 text-primary" width="27%">

    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="/" class="nav-item nav-link active">{{__('messages.home')}}</a>
            <a href="about" class="nav-item nav-link">{{__('messages.about')}}</a>
            <a href="service" class="nav-item nav-link">{{__('messages.service')}}</a>
            <a href="project" class="nav-item nav-link">{{__('messages.project')}}</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{__('messages.pages')}}</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="feature" class="dropdown-item">{{__('messages.feature')}}</a>
                    <a href="quote" class="dropdown-item">{{__('messages.free_quote')}}</a>
                    <a href="team" class="dropdown-item">{{__('messages.team')}}</a>
                    <a href="testimonial" class="dropdown-item">{{__('messages.testimonial')}}</a>
                    <a href="404" class="dropdown-item">{{__('messages.404_page')}}</a>
                </div>
            </div>
            <a href="contact" class="nav-item nav-link">{{__('messages.home')}}</a>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <img src="{{(Config::get('languages')[App::getLocale()]['flag-icon'])}}" alt=""
                         style="height: 30px; width: 30px;"/> {{(Config::get('languages')[App::getLocale()]['display'])}}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    @foreach (Config::get('languages') as $lang => $language)
                        @if ($lang != App::getLocale())
                            <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"><img
                                        src="{{($language['flag-icon'])}}" alt=""
                                        style="height: 30px; width: 30px;"/> {{$language['display']}}</a>
                        @endif
                    @endforeach
                </div>
            </li>
        </div>
        <a href="/register" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">{{__('messages.register')}}
            <i class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>
<!-- Navbar End -->


<!-- Carousel Start -->
<!--<div class="container-fluid p-0 pb-5 wow fadeIn" data-wow-delay="0.1s">-->
<!--    <div class="owl-carousel header-carousel position-relative">-->
<!--        <div class="owl-carousel-item position-relative" data-dot="<img src='public/img/carousel-1.jpg'>">-->
<!--            <img class="img-fluid" src="public/img/carousel-1.jpg" alt="">-->
<!--            <div class="owl-carousel-inner">-->
<!--                <div class="container">-->
<!--                    <div class="row justify-content-start">-->
<!--                        <div class="col-10 col-lg-8">-->
<!--                            <h1 class="display-2 text-white animated slideInDown">Pioneers Of Solar And Renewable Energy</h1>-->
<!--                            <p class="fs-5 fw-medium text-white mb-4 pb-3">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>-->
<!--                            <a href="" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Read More</a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="owl-carousel-item position-relative" data-dot="<img src='public/img/carousel-2.jpg'>">-->
<!--            <img class="img-fluid" src="public/img/carousel-2.jpg" alt="">-->
<!--            <div class="owl-carousel-inner">-->
<!--                <div class="container">-->
<!--                    <div class="row justify-content-start">-->
<!--                        <div class="col-10 col-lg-8">-->
<!--                            <h1 class="display-2 text-white animated slideInDown">Pioneers Of Solar And Renewable Energy</h1>-->
<!--                            <p class="fs-5 fw-medium text-white mb-4 pb-3">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>-->
<!--                            <a href="" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Read More</a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="owl-carousel-item position-relative" data-dot="<img src='public/img/carousel-3.jpg'>">-->
<!--            <img class="img-fluid" src="public/img/carousel-3.jpg" alt="">-->
<!--            <div class="owl-carousel-inner">-->
<!--                <div class="container">-->
<!--                    <div class="row justify-content-start">-->
<!--                        <div class="col-10 col-lg-8">-->
<!--                            <h1 class="display-2 text-white animated slideInDown">Pioneers Of Solar And Renewable Energy</h1>-->
<!--                            <p class="fs-5 fw-medium text-white mb-4 pb-3">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>-->
<!--                            <a href="" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Read More</a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!-- Carousel End -->
<div class="PageSimpleHero my-200 my-lg-450 container storyblok__outline" data-v-4ce262db="" data-blok-c="undefined"
     data-blok-uid="undefined">
    <div class="row" data-v-4ce262db="">
        <div class="my-auto text-center text-md-left col-md-6 col-12" data-v-4ce262db="">
            <h1 class="mb-50 mb-lg-100" data-v-4ce262db=""><span
                        data-v-4ce262db="">{{__('messages.get_your_solar')}}</span></h1>
            <div class="mb-200 font-size-md-300" data-v-4ce262db="">
                <div class="d-md-none" data-v-4ce262db="">
                    <div>
                        <p>Join the thousands of renters, homeowners, and businesses saving up to 15% with community
                            solar. - <b>no equipment required</b>.</p>
                    </div>
                </div>
                <div class="d-none d-md-block" data-v-4ce262db="">
                    <div>
                        <p>{{__('messages.join_the')}}</p>
                        <p><b>...{{__('messages.no_equipment')}}</b>.</p>
                    </div>
                </div>
            </div>
            <span class="d-block d-md-none mb-200"
                  style="display: inline-block; position: relative; width: 100%; padding-bottom: 41.3897%; overflow: hidden;"
                  data-v-0319fffb="" data-v-4ce262db=""><img
                        src="https://a-us.storyblok.com/f/1006156/331x137/1acf843a3e/community-solar-hero-mobile.svg"
                        alt="Line drawing of a person walking a dog past an array of ground-mounted solar panels."
                        class="image-content position-absolute w-100 height-100" data-v-0319fffb=""></span>
            <div data-blok-c="undefined" data-blok-uid="undefined" class="storyblok__outline" data-v-4ce262db="">
                <form action="{{ route('search') }}" novalidate="novalidate"
                      class="ZipCodeForm d-flex align-items-center align-items-lg-start flex-column" method="get">
                    @csrf
                    <div class="ZipCodeForm-form d-flex flex-column flex-lg-row mb-100 mb-lg-50 text-left"
                         data-v-78df053a="">
                        <div required=""
                             class="input-wrapper justify-content-end polite-mb-50 ZipCodeForm-input flex-grow-1 mb-100 mb-lg-0 text-gray"
                             data-v-e35a7ae4="" data-v-78df053a="">
                            <label for="df84878c-e6d0-4066-80ef-70a21a6138df"
                                   class="label font-weight-semibold justify-content-start sr-only" data-v-e35a7ae4="">
                                {{__('messages.zip_code')}}
                                <span class="text-danger" data-v-e35a7ae4="">
                     *
                     </span></label> <!---->
                            <div class="input-holder position-relative" data-v-e35a7ae4="">

                                <input style="height: 49px;" id="df84878c-e6d0-4066-80ef-70a21a6138df"
                                       name="map_location" placeholder="ZIP code" autocomplete="postal-code"
                                       inputmode="numeric" maxlength="5" pattern="\d*"
                                       class="es-form-input w-100 form-control has-prefix-icon" type="text">
                                <div class="invalid-feedback" data-v-e35a7ae4="">
                                    {{__('messages.enter_code')}}
                                </div>
                                <!---->
                            </div>
                        </div>
                        <button style="height: 49px; margin-left:10px;" type="submit"
                                class="btn justify-content-center ml-lg-50 text-nowrap btn-primary btn-md">
                            {{__('messages.search_projects')}}
                        </button>
                    </div>
                    <p class="ZipCodeForm-privacy text-center mb-0" data-v-78df053a="">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                             class="ZipCodeForm-privacyIcon flex-grow-0 mr-25 position-relative"
                             style="height:1.125rem;width:1.125rem;" data-v-78df053a="">
                            <path d="M2 12a3 3 0 0 1 3-3h14a3 3 0 0 1 3 3v8a3 3 0 0 1-3 3H5a3 3 0 0 1-3-3v-8Z"
                                  fill="none"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M5 11a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-8a1 1 0 0 0-1-1H5Zm-3 1a3 3 0 0 1 3-3h14a3 3 0 0 1 3 3v8a3 3 0 0 1-3 3H5a3 3 0 0 1-3-3v-8Z"></path>
                            <path d="M6.172 3.172A4 4 0 0 1 9 2h6a4 4 0 0 1 4 4v4a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V6a4 4 0 0 1 1.172-2.828Z"
                                  fill="none"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M9 4a2 2 0 0 0-2 2v3h10V6a2 2 0 0 0-2-2H9Zm-2.828-.828A4 4 0 0 1 9 2h6a4 4 0 0 1 4 4v4a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V6a4 4 0 0 1 1.172-2.828Z"></path>
                        </svg>
                        {{__('messages.secure_info')}}
                        <a href="https://www.energysage.com/privacy-policy" rel="noopener" target="_blank"
                           class="ZipCodeForm-privacyLink text-nowrap" data-v-78df053a="">
                            {{__('messages.privacy_policy')}}
                        </a>
                    </p>
                </form>
            </div>
        </div>
        <div class="my-auto d-none d-md-block col-md-6 col-12" data-v-4ce262db=""><span
                    style="display: inline-block; position: relative; width: 100%; padding-bottom: 60.1923%; overflow: hidden;"
                    data-v-0319fffb="" data-v-4ce262db=""><img
                        src="https://a-us.storyblok.com/f/1006156/520x313/ec11cef31e/community-solar-hero-desktop.svg"
                        alt="Line drawing of a person walking a dog past a collection of houses and apartment buildings and an array of ground-mounted solar panels."
                        class="image-content position-absolute w-100 height-100" data-v-0319fffb=""></span></div>
    </div>
</div>

<!-- Feature Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                <div class="d-flex align-items-center mb-4">
                    <div class="btn-lg-square bg-primary rounded-circle me-3">
                        <i class="fa fa-users text-white"></i>
                    </div>
                    <h1 class="mb-0" data-toggle="counter-up">3453</h1>
                </div>
                <h5 class="mb-3">{{__('messages.happy_customers')}}</h5>
                <span>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit</span>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                <div class="d-flex align-items-center mb-4">
                    <div class="btn-lg-square bg-primary rounded-circle me-3">
                        <i class="fa fa-check text-white"></i>
                    </div>
                    <h1 class="mb-0" data-toggle="counter-up">4234</h1>
                </div>
                <h5 class="mb-3">{{__('messages.project_done')}}</h5>
                <span>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit</span>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                <div class="d-flex align-items-center mb-4">
                    <div class="btn-lg-square bg-primary rounded-circle me-3">
                        <i class="fa fa-award text-white"></i>
                    </div>
                    <h1 class="mb-0" data-toggle="counter-up">3123</h1>
                </div>
                <h5 class="mb-3">{{__('messages.award_win')}}</h5>
                <span>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit</span>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                <div class="d-flex align-items-center mb-4">
                    <div class="btn-lg-square bg-primary rounded-circle me-3">
                        <i class="fa fa-users-cog text-white"></i>
                    </div>
                    <h1 class="mb-0" data-toggle="counter-up">1831</h1>
                </div>
                <h5 class="mb-3">{{__('messages.expert_workers')}}</h5>
                <span>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit</span>
            </div>
        </div>
    </div>
</div>
<!-- Feature Start -->


<!-- About Start -->
<div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
    <div class="container about px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 ps-lg-0 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="public/img/about.jpg"
                         style="object-fit: cover;" alt="">
                </div>
            </div>
            <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 pe-lg-0">
                    <h6 class="text-primary">{{__('messages.about_us')}}</h6>
                    <h1 class="mb-4">{{__('messages.years_of_experience')}}</h1>
                    <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita
                        erat ipsum et lorem et sit, sed stet lorem sit clita duo justo erat amet</p>
                    <p><i class="fa fa-check-circle text-primary me-3"></i>Diam dolor diam ipsum</p>
                    <p><i class="fa fa-check-circle text-primary me-3"></i>Aliqu diam amet diam et eos</p>
                    <p><i class="fa fa-check-circle text-primary me-3"></i>Tempor erat elitr rebum at clita</p>
                    <a href="" class="btn btn-primary rounded-pill py-3 px-5 mt-3">{{__('messages.explore_more')}}</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-------Cards------------>

<div class="checkout-cards">
    <div class="button12">

        <button class="btn btn-primary btn1">08029</button>
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" id="cars">C.De Provenza 90</a>
            <div class="dropdown-menu bg-light m-0">
                <a href="feature" class="dropdown-item">Saab</a>
                <a href="quote" class="dropdown-item">Free Swidish</a>
                <a href="team" class="dropdown-item">Our Team</a>
                <a href="testimonial" class="dropdown-item">Testimonial</a>
                <a href="404" class="dropdown-item">404 Page</a>
            </div>
        </div>
        <button class="btn btn-primary list">List</button>
        <button class="btn btn-primary list">Map</button>
        <button class="btn btn-primary list">More Options</button>

    </div>

    <script>
        $(document).ready(function () {
            var $animatedElement = $('#animated-element');
            $animatedElement.animate({left: '50px'}, 1000);
        });
    </script>

    <div class="cards">
        <!--@php-->
        <!--              $communities = DB::table('communities')-->
        <!--                  ->get()->all();-->
        <!--              @endphp-->
        @foreach ($communities as $community)
            <div class="box3">
                <div>
                    <p class="create1">{{ $community->title }}</p>
                    <p class="blockc">{{ $community->map_location }}</p>
                </div>
                <div class="Estimated">
                    <p class="create2">Nominal PW Power</p>
                    <p class="creator2">{{ $community->saving }}</p>
                </div>
                <div class="Estimated">
                    <p class="create2">Number of Members</p>
                    <p class="creator2">{{ $community->credit_score }}</p>
                </div>
                <div class="Estimated">
                    <p class="create2">Status</p>
                    <p class="creator2"><span
                                style="color:{{ $community->status === 'Active' ? 'green' : 'red' }}">{{ $community->status }}</span>
                    </p>
                </div>
                <div class="Estimated">
                    <img src="{{ asset('public/img/ckz7QyO33xHHnVBY5GcZ2lZuXo (1).png') }}"
                         style="width:50%; margin: auto;">
                </div>

                <div class="Estimated">
                    <button class="Details">{{__('messages.details')}}</button>
                    <button id="get_started" href="#" data-bs-toggle="modal" data-bs-target="#getStartedModal"
                            class="Started">{{__('messages.get_started')}}</button>
                </div>
            </div>
        @endforeach


    </div>
    <div class="modal fade" id="getStartedModal" tabindex="-1" aria-labelledby="getStartedModal-label" role="dialog"
         aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="registerLabel">Register</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-container">
                        <form action="" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Full Name:</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="email">Email address:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-----Cards End ---->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary">{{__('messages.our_services')}}</h6>
                <h1 class="mb-4">{{__('messages.we_r_pioneers')}}</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="public/img/img-600x400-1.jpg" alt="">
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="fa fa-solar-panel fa-3x"></i>
                            </div>
                            <h4 class="mb-3">{{__('messages.solar_panels')}}</h4>
                            <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                            <a class="small fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="public/img/img-600x400-2.jpg" alt="">
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="fa fa-wind fa-3x"></i>
                            </div>
                            <h4 class="mb-3">Wind Turbines</h4>
                            <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                            <a class="small fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="public/img/img-600x400-3.jpg" alt="">
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="fa fa-lightbulb fa-3x"></i>
                            </div>
                            <h4 class="mb-3">Hydropower Plants</h4>
                            <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                            <a class="small fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="public/img/img-600x400-4.jpg" alt="">
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="fa fa-solar-panel fa-3x"></i>
                            </div>
                            <h4 class="mb-3">Solar Panels</h4>
                            <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                            <a class="small fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="public/img/img-600x400-5.jpg" alt="">
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="fa fa-wind fa-3x"></i>
                            </div>
                            <h4 class="mb-3">Wind Turbines</h4>
                            <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                            <a class="small fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="img/img-600x400-6.jpg" alt="">
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="fa fa-lightbulb fa-3x"></i>
                            </div>
                            <h4 class="mb-3">Hydropower Plants</h4>
                            <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                            <a class="small fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Feature Start -->
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container feature px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="p-lg-5 ps-lg-0">
                        <h6 class="text-primary">{{__('messages.why_choose')}}</h6>
                        <h1 class="mb-4">{{__('messages.comp_commercial')}}</h1>
                        <p class="mb-4 pb-2">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam
                            amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo erat
                            amet</p>
                        <div class="row g-4">
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="btn-lg-square bg-primary rounded-circle">
                                        <i class="fa fa-check text-white"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="mb-0">{{__('messages.quality')}}</p>
                                        <h5 class="mb-0">{{__('messages.services')}}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="btn-lg-square bg-primary rounded-circle">
                                        <i class="fa fa-user-check text-white"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="mb-0">{{__('messages.expert')}}</p>
                                        <h5 class="mb-0">{{__('messages.workers')}}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="btn-lg-square bg-primary rounded-circle">
                                        <i class="fa fa-drafting-compass text-white"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="mb-0">{{__('messages.free')}}</p>
                                        <h5 class="mb-0">{{__('messages.consultation')}}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="btn-lg-square bg-primary rounded-circle">
                                        <i class="fa fa-headphones text-white"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="mb-0">{{__('messages.customer')}}</p>
                                        <h5 class="mb-0">{{__('messages.support')}}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="public/img/feature.jpg"
                             style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


    <!-- Projects Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary">{{__('messages.o_projects')}}</h6>
                <h1 class="mb-4">{{__('messages.visit_our_latest')}}</h1>
            </div>
            <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-12 text-center">
                    <ul class="list-inline mb-5" id="portfolio-flters">
                        <li class="mx-2 active" data-filter="*">{{__('messages.all')}}</li>
                        <li class="mx-2" data-filter=".first">{{__('messages.solar_panels')}}</li>
                        <li class="mx-2" data-filter=".second">{{__('messages.wind_turbines')}}</li>
                        <li class="mx-2" data-filter=".third">{{__('messages.hydro_power')}}</li>
                    </ul>
                </div>
            </div>
            <div class="row g-4 portfolio-container wow fadeInUp" data-wow-delay="0.5s">
                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="public/img/img-600x400-6.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1"
                               href="public/img/img-600x400-6.jpg" data-lightbox="portfolio"><i
                                        class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i
                                        class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="pt-3">
                        <p class="text-primary mb-0">{{__('messages.solar_panels')}}</p>
                        <hr class="text-primary w-25 my-2">
                        <h5 class="lh-base">{{__('messages.solar_pioneer')}}</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="public/img/img-600x400-5.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1"
                               href="public/img/img-600x400-5.jpg" data-lightbox="portfolio"><i
                                        class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i
                                        class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="pt-3">
                        <p class="text-primary mb-0">{{__('messages.wind_turbines')}}</p>
                        <hr class="text-primary w-25 my-2">
                        <h5 class="lh-base">{{__('messages.solar_pioneer')}}</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item third">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="public/img/img-600x400-4.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1"
                               href="img/img-600x400-4.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i
                                        class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="pt-3">
                        <p class="text-primary mb-0">{{__('messages.hydro_power')}}</p>
                        <hr class="text-primary w-25 my-2">
                        <h5 class="lh-base">{{__('messages.solar_pioneer')}}</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="public/img/img-600x400-3.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1"
                               href="public/img/img-600x400-3.jpg" data-lightbox="portfolio"><i
                                        class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i
                                        class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="pt-3">
                        <p class="text-primary mb-0">{{__('messages.solar_panels')}}</p>
                        <hr class="text-primary w-25 my-2">
                        <h5 class="lh-base">{{__('messages.solar_pioneer')}}</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="public/img/img-600x400-2.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1"
                               href="public/img/img-600x400-2.jpg" data-lightbox="portfolio"><i
                                        class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i
                                        class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="pt-3">
                        <p class="text-primary mb-0">{{__('messages.wind_turbines')}}</p>
                        <hr class="text-primary w-25 my-2">
                        <h5 class="lh-base">{{__('messages.solar_pioneer')}}</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item third">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="public/img/img-600x400-1.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1"
                               href="public/img/img-600x400-1.jpg" data-lightbox="portfolio"><i
                                        class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i
                                        class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="pt-3">
                        <p class="text-primary mb-0">{{__('messages.hydro_power')}}</p>
                        <hr class="text-primary w-25 my-2">
                        <h5 class="lh-base">{{__('messages.solar_pioneer')}}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Projects End -->


    <!-- Quote Start -->
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container quote px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 ps-lg-0 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="public/img/quote.jpg"
                             style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 quote-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <h6 class="text-primary">Free Quote</h6>
                        <h1 class="mb-4">Get A Free Quote</h1>
                        <p class="mb-4 pb-2">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam
                            amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo erat
                            amet</p>
                        <form>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Your Name"
                                           style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control border-0" placeholder="Your Email"
                                           style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Your Mobile"
                                           style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select border-0" style="height: 55px;">
                                        <option selected>Select A Service</option>
                                        <option value="1">Service 1</option>
                                        <option value="2">Service 2</option>
                                        <option value="3">Service 3</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-0" placeholder="Special Note"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary">Team Member</h6>
                <h1 class="mb-4">Experienced Team Members</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded overflow-hidden">
                        <div class="d-flex">
                            <img class="img-fluid w-75" src="img/team-1.jpg" alt="">
                            <div class="team-social w-25">
                                <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i
                                            class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i
                                            class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i
                                            class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="p-4">
                            <h5>Full Name</h5>
                            <span>Designation</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item rounded overflow-hidden">
                        <div class="d-flex">
                            <img class="img-fluid w-75" src="public/img/team-2.jpg" alt="">
                            <div class="team-social w-25">
                                <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i
                                            class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i
                                            class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i
                                            class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="p-4">
                            <h5>Full Name</h5>
                            <span>Designation</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item rounded overflow-hidden">
                        <div class="d-flex">
                            <img class="img-fluid w-75" src="public/img/team-3.jpg" alt="">
                            <div class="team-social w-25">
                                <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i
                                            class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i
                                            class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i
                                            class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="p-4">
                            <h5>Full Name</h5>
                            <span>Designation</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary">Testimonial</h6>
                <h1 class="mb-4">What Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="img/testimonial-1.jpg">
                        <div class="btn-square bg-primary rounded-circle">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                    </div>
                    <div class="testimonial-text text-center rounded p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna
                            ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea
                            clita.</p>
                        <h5 class="mb-1">Client Name</h5>
                        <span class="fst-italic">Profession</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="public/img/testimonial-2.jpg">
                        <div class="btn-square bg-primary rounded-circle">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                    </div>
                    <div class="testimonial-text text-center rounded p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna
                            ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea
                            clita.</p>
                        <h5 class="mb-1">Client Name</h5>
                        <span class="fst-italic">Profession</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="public/img/testimonial-3.jpg">
                        <div class="btn-square bg-primary rounded-circle">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                    </div>
                    <div class="testimonial-text text-center rounded p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna
                            ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea
                            clita.</p>
                        <h5 class="mb-1">Client Name</h5>
                        <span class="fst-italic">Profession</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <section class="last">
        <div>
            <p class="dots">...</p>
            <p class="connect"> They trust us</p>
        </div>
        <div class="brand-carousel section-padding owl-carousel">
            <div class="single-logo"><img alt="" src="public/img/ckz7QyO33xHHnVBY5GcZ2lZuXo (1).png"></div>
            <div class="single-logo"><img alt="" src="public/img/dq1TaO7kxtYei72Xu3o3WAkzcoI (1).png"></div>
            <div class="single-logo"><img alt="" src="public/img/DrHmbvS9Tg0qxleYtlnlLeGLEg (1).png"></div>
            <div class="single-logo"><img alt="" src="public/img/DrHmbvS9Tg0qxleYtlnlLeGLEg.png"></div>
            <div class="single-logo"><img alt="" src="public/img/jGIpjSCsV0iGXQK9tl3WlB5nzs.png"></div>
            <!-- <div class="single-logo"><img alt="" src="img/vy6uuFcTGyyS47ZfYyOGVzEIvno.png"></div> -->
        </div>
    </section>


    <script>
        $(document).ready(function () {
            var $animatedElement = $('#animated-element');

            // Create a Waypoint that triggers when the element is 50% visible
            $animatedElement.waypoint(function () {
                // Animate from left to right
                $animatedElement.animate({left: '50px'}, 1000); // Adjust the duration as needed
            }, {
                offset: '50%'
            });
        });
    </script>


    <!----------------------------------------------------------------------->


    <script>
        $('.brand-carousel').owlCarousel({
            loop: true,
            margin: 10,
            autoplay: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })

    </script>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-body footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Address</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light btn-social" href=""><i
                                    class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light btn-social" href=""><i
                                    class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-light btn-social" href=""><i
                                    class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Quick Links</h5>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Project Gallery</h5>
                    <div class="row g-2">
                        <div class="col-4">
                            <img class="img-fluid rounded" src="public/img/gallery-1.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded" src="public/img/gallery-2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded" src="public/img/gallery-3.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded" src="public/img/gallery-4.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded" src="public/img/gallery-5.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded" src="public/img/gallery-6.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Newsletter</h5>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">
                            SignUp
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="#">Your Site Name</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a href="https://htmlcodex.com">AlphaNuix Technologies</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="public/lib/wow/wow.min.js"></script>
<script src="public/lib/easing/easing.min.js"></script>
<script src="public/lib/waypoints/waypoints.min.js"></script>
<script src="public/lib/counterup/counterup.min.js"></script>
<script src="public/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="public/lib/isotope/isotope.pkgd.min.js"></script>
<script src="public/lib/lightbox/js/lightbox.min.js"></script>

<!-- Template Javascript -->
<script src="public/js/main.js"></script>

</body>

</html>