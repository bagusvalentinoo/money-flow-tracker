<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}
        @if (isset($title) && !empty($title))
            | {{ $title }}
        @endif
    </title>

    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.svg') }}" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('assets/css/main/app.css') }}">

    <style type="text/css">
        body {
            background-color: #FFFFFF !important;
            overflow: hidden !important;
        }

        .top-5px {
            top: 5px !important;
        }

        .end-10px {
            right: 10px !important;
        }

        .line {
            height: 1px;
            background-color: #E5E5E5;
        }

        @media (max-width: 767px) {
            #sign-in-left {
                display: none !important;
            }
        }

        @media (max-width: 576px) {
            #sign-in-left {
                display: none !important;
            }
        }
    </style>
</head>

<body>
    <div class="row w-100 vh-100">
        <div id="sign-in-left" class="col-lg-7 col-md-6 d-flex justify-content-center align-items-center">
            <img class="w-80" src="{{ asset('assets/images/page/auth/sign-in/1.svg') }}" alt="Sign In Illustration">
        </div>
        <div id="sign-in-right"
            class="col-lg-5 col-md-6 col-sm-12 d-flex justify-content-center align-items-center pe-0">
            <div class="w-80 px-5 py-3">
                <form action="{{ route('web.auth.sign_in') }}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="mt-3 mb-5 text-center">
                        <h1 class="font-extrabold">MoneyFlow Tracker</h1>
                    </div>
                    <div class="my-3">
                        <label for="email">Email</label>
                        <x-base.input.input id="email" type="email" name="email" placeholder="Enter your email"
                            :required=true />
                    </div>
                    <div class="my-3">
                        <label for="password">Password</label>
                        <div class="position-relative">
                            <x-base.input.input id="password" type="password" name="password"
                                placeholder="Enter your password" :required=true />
                            <div id="show-password" class="position-absolute top-5px end-10px pointer">
                                <i class="bi bi-eye-slash"></i>
                            </div>
                        </div>
                    </div>
                    <div class="mt-1 mb-3 text-end">
                        <a href="{{ route('web.auth.forgot_password.forgot_password_page') }}">
                            Forgot Password?
                        </a>
                    </div>
                    <div class="my-3 d-flex">
                        <x-base.checkbox.checkbox id="remember_me" name="remember_me" />
                        <label for="remember_me">Remember Me</label>
                    </div>
                    @if (Session::has('error'))
                        <div class="my-3">
                            <span class="text-danger">
                                {{ Session::get('error') }}
                            </span>
                        </div>
                    @endif
                    <div class="my-3">
                        <x-base.button.button className="btn-primary rounded-5 w-100 font-bold py-2" type="submit"
                            text="Sign In" />
                    </div>
                </form>
                <div class="position-relative my-4">
                    <div class="position-absolute start-50 end-50 translate-middle top-0">
                        <span class="bg-white z-1">OR</span>
                    </div>
                    <div class="line position-relative z-minus-1"></div>
                </div>
                <form action="#" method="POST">
                    @csrf
                    @method('POST')
                    <div class="my-3">
                        <x-base.button.button className="btn-secondary rounded-5 w-100 font-bold py-2" type="submit"
                            text="Sign In with Google"
                            iconTagImg="{{ asset('assets/images/page/auth/google_logo.svg') }}"
                            iconTagImgAlt="Google Logo" iconTagImgClass="w-5" :iconMargin=true />
                    </div>
                </form>
                <div class="my-3 text-center">
                    <span>
                        Don't have an account?
                        <a href="{{ route('web.auth.sign_up.sign_up_page') }}">
                            Sign Up
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>

    <script type="application/javascript">
        $('#show-password').click(function() {
            const passwordField = $('#password');
            const eyeIcon = $('#show-password i');

            const isPasswordVisible = (passwordField.attr('type') === 'password');

            passwordField.attr('type', isPasswordVisible ? 'text' : 'password');
            eyeIcon.toggleClass('bi-eye-slash', isPasswordVisible).toggleClass('bi-eye', !isPasswordVisible);
        });
    </script>
</body>

</html>
