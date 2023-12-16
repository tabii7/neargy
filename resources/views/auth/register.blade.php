{{--
<html>

<head>

    <title>Register</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('public/css/login.css') }}">

<body>
    <section class="login">
        <div class="login_box">
            <div class="left">
                <div class="top_link"><a href="login"><img
                            src="https://drive.google.com/u/0/uc?id=16U__U5dJdaTfNGobB_OpwAJ73vM50rPV&export=download"
                            alt="">Return login</a></div>
                <div class="contact">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <h3>SIGN IN</h3>
                        <input id="name" class="block mt-1 w-full" type="text" name="name"
                            :value="old('name')" required autofocus autocomplete="name" />

                        <input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email')" required autocomplete="username" />

                        <input id="password" class="block mt-1 w-full" type="password" name="password" required
                            autocomplete="new-password" />

                        <input id="password_confirmation" class="block mt-1 w-full" type="password"
                            name="password_confirmation" required autocomplete="new-password" />
                        <button class="submit">Register</button>
                        <div class="flex items-center justify-end mt-4">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a>

                        </div>
                    </form>
                </div>
            </div>
            <div class="right">
                <div class="right-text">
                </div>
                <div class="right-inductor"><img
                        src="https://lh3.googleusercontent.com/fife/ABSRlIoGiXn2r0SBm7bjFHea6iCUOyY0N2SrvhNUT-orJfyGNRSMO2vfqar3R-xs5Z4xbeqYwrEMq2FXKGXm-l_H6QAlwCBk9uceKBfG-FjacfftM0WM_aoUC_oxRSXXYspQE3tCMHGvMBlb2K1NAdU6qWv3VAQAPdCo8VwTgdnyWv08CmeZ8hX_6Ty8FzetXYKnfXb0CTEFQOVF4p3R58LksVUd73FU6564OsrJt918LPEwqIPAPQ4dMgiH73sgLXnDndUDCdLSDHMSirr4uUaqbiWQq-X1SNdkh-3jzjhW4keeNt1TgQHSrzW3maYO3ryueQzYoMEhts8MP8HH5gs2NkCar9cr_guunglU7Zqaede4cLFhsCZWBLVHY4cKHgk8SzfH_0Rn3St2AQen9MaiT38L5QXsaq6zFMuGiT8M2Md50eS0JdRTdlWLJApbgAUqI3zltUXce-MaCrDtp_UiI6x3IR4fEZiCo0XDyoAesFjXZg9cIuSsLTiKkSAGzzledJU3crgSHjAIycQN2PH2_dBIa3ibAJLphqq6zLh0qiQn_dHh83ru2y7MgxRU85ithgjdIk3PgplREbW9_PLv5j9juYc1WXFNW9ML80UlTaC9D2rP3i80zESJJY56faKsA5GVCIFiUtc3EewSM_C0bkJSMiobIWiXFz7pMcadgZlweUdjBcjvaepHBe8wou0ZtDM9TKom0hs_nx_AKy0dnXGNWI1qftTjAg=w1920-h979-ft"
                        alt=""></div>
            </div>
        </div>
    </section>
</body>

</html>
--}}

        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Register</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>


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
        <a href="/register"
           class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">{{__('messages.register')}}<i
                    class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2 class="text-center">Register</h2>
            <form action="{{ route('register')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Full Name:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="password">Confirm Password:</label>
                    <input type="password" class="form-control" id="password" name="password_confirmation" required>
                </div>
                <div class="form-check mb-3">
                    <label class="form-check-label" for="terms">By joining, I agree to the Terms of Use</label>
                </div>
                <button type="submit" class="btn btn-primary">Sign Up</button>
                {{--<p class="text-center mt-3">
                    <a href="#">Back to login</a>
                </p>--}}
            </form>
        </div>
    </div>
</div>

<!-- Link to Bootstrap JS and its dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

