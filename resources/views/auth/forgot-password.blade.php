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
                        <label for="email">Email</label>
                        <div class="form-group position-relative has-icon-left">
                            <x-base.input.input id="email" className="form-control-lg" type="email" name="email"
                                placeholder="Enter your email" :required=true />
                            <div class="form-control-icon">
                                <i class="bi bi-envelope"></i>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5">
                        <x-base.button.button className="btn-primary rounded-5 w-100 font-bold py-2" type="submit"
                            text="Send" />
                    </div>
                </form>
            </div>
        </div>
        <div id="sign-in-right" class="col-lg-7 col-md-6 d-flex justify-content-center align-items-center">
            <img class="w-70" src="{{ asset('assets/images/page/auth/forgot-password/1.svg') }}"
                alt="Forgot Password Illustration">
        </div>
    </div>
</body>

</html>
