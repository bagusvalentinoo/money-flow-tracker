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

        .line {
            height: 1px;
            background-color: #E5E5E5;
        }

        @media (max-width: 767px) {
            #sign-in-right {
                display: none !important;
            }
        }

        @media (max-width: 576px) {
            #sign-in-right {
                display: none !important;
            }
        }
    </style>
</head>

<body>
    <div class="row w-100 vh-100">
        <div id="sign-in-left"
            class="col-lg-5 col-md-6 col-sm-12 d-flex justify-content-center align-items-center pe-0">
            <div class="w-80 px-5 py-3">
                <form action="#" method="POST">
                    @csrf
                    @method('POST')
                    <div class="mt-3 mb-5 text-center">
                        <h1 class="font-extrabold">MoneyFlow Tracker</h1>
                    </div>
                    <div class="my-3">
                        <label for="name">
                            Name
                            <span class="text-danger">*</span>
                        </label>
                        <x-base.input.input id="name" type="text" name="name" placeholder="Enter your name"
                            :required=true />
                    </div>
                    <div class="my-3">
                        <label for="email">
                            Email
                            <span class="text-danger">*</span>
                        </label>
                        <x-base.input.input id="email" type="email" name="email" placeholder="Enter your email"
                            :required=true />
                    </div>
                    <div class="my-3">
                        <label for="password">
                            Password
                            <span class="text-danger">*</span>
                        </label>
                        <x-base.input.input id="password" type="password" name="password"
                            placeholder="Enter your password" :required=true />
                    </div>
                    <div class="my-3">
                        <label for="password_confirmation">
                            Confirm Password
                            <span class="text-danger">*</span>
                        </label>
                        <x-base.input.input id="password_confirmation" type="password" name="password_confirmation"
                            placeholder="Enter your password confirmation" :required=true />
                    </div>
                    <div class="mt-1 mb-3 d-flex">
                        <x-base.checkbox.checkbox id="show-password" />
                        <label for="show-password">Show Password</label>
                    </div>
                    <div class="my-3">
                        <x-base.button.button className="btn-primary rounded-5 w-100 font-bold py-2" type="submit"
                            text="Sign Up" />
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
                            text="Sign Up with Google"
                            iconTagImg="{{ asset('assets/images/page/auth/google_logo.svg') }}"
                            iconTagImgAlt="Google Logo" iconTagImgClass="w-5" :iconMargin=true />
                    </div>
                </form>
                <div class="my-3 text-center">
                    <span>
                        Already have an account?
                        <a href="{{ route('web.auth.sign_in.sign_in_page') }}">
                            Sign In
                        </a>
                    </span>
                </div>
            </div>
        </div>
        <div id="sign-in-right" class="col-lg-7 col-md-6 d-flex justify-content-center align-items-center">
            <img class="w-70" src="{{ asset('assets/images/page/auth/sign-up/1.svg') }}" alt="Sign Up Illustration">
        </div>
    </div>

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>

    <script type="application/javascript">
        $('#show-password').on('change', function() {
            const passwordFields = $('#password, #password_confirmation');
            const isCheckboxChecked = $(this).is(':checked');

            passwordFields.attr('type', isCheckboxChecked ? 'text' : 'password');
        });
    </script>
</body>

</html>
