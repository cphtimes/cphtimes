<!DOCTYPE html>
<html @class(['dark-mode'=> $darkMode]) lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <link href="{{ asset('icons/around-icons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

    <style>
        @font-face {
            font-family: "Chomsky";
            src: url("{{url('Chomsky.otf')}}");
        }

        .chomsky {
            font-family: "Chomsky";
        }
    </style>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <script src="{{ asset('js/app.js') }}"></script>
    <style>
        .serif {
            font-family: 'Merriweather', serif;
        }

        p: {
            font-size: 17px;
        }

        .start::first-letter {
            -webkit-initial-letter: 3 3;
            initial-letter: 3 3;
            color: #6610f2;
            font-weight: bold;
            margin-right: .25em;


            font-size: 6rem;
            float: left;
            line-height: 1;
        }

        a {
            color: #000000;
            text-decoration: none;
        }

        .full-width {
            width: 100vw;
            position: relative;
            left: 50%;
            right: 50%;
            margin-left: -50vw;
            margin-right: -50vw;
        }

        .rounded {
            border-radius: 0.0rem !important; // 1.25rem!important;
        }

        .card-header {
            border-bottom: none;
        }

        @media (min-width: 768px) {
            .article-container {
                max-width: 600px;
                min-width: 600px;
            }
        }

        @media (max-width: 767px) {
            .article-container {
                max-width: 100%;
                min-width: 100%;
                padding: 1.5rem;
            }
        }

        a {
            color: #000000;
            text-decoration: none;
        }

        .rounded {
            border-radius: 0.0rem !important; // 1.25rem!important;
        }

        .card-header {
            border-bottom: none;
        }

        .list-group-item border-dash {
            border-bottom: 1px dotted rgba(0, 0, 0, .125) !important;
        }

        .solid-last-line {
            border-bottom: 1px solid rgba(0, 0, 0, 1.0) !important;
        }

        article {
            cursor: -webkit-pointer;
            cursor: pointer;
        }

        article:hover {
            color: #000;
        }

        article:hover>.article-body>.article-title {
            text-decoration: underline !important;
        }

        .crop-text-1 {
            -webkit-line-clamp: 1;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-box-orient: vertical;
        }

        .crop-text-2 {
            -webkit-line-clamp: 2;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-box-orient: vertical;
        }

        .crop-text-3 {
            -webkit-line-clamp: 3;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-box-orient: vertical;
        }

        .crop-text-4 {
            -webkit-line-clamp: 4;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-box-orient: vertical;
        }

        .nav-scroller-mobile {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller-mobile .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        #latest-update-thumbnail {
            width: 75px;
            height: 75px;
        }

        .border-md-end {
            border-right: none !important;
        }

        @media (min-width: 768px) {
            #above-fold-list {
                border-right: none !important;
            }

            #top-image {
                width: 199px;
                height: 199px;
            }

            #latest-update-thumbnail {
                width: 125px;
                height: 125px;
            }

            .border-md-end {
                border-right: 1px solid #dee2e6 !important;
            }
        }

        @media (min-width: 992px) {
            #above-fold-list {
                border-right: 1px solid #dee2e6 !important;
            }

            #top-image {
                width: 250px;
                height: 250px;
            }
        }

        @media (min-width: 1200px) {}

        @media (min-width: 1400px) {}

        .page-wrapper {
            flex: 1 0 auto;
        }

        @media screen {
            .bg-repeat-0 {
                background-repeat: no-repeat !important;
            }
        }

        @media screen {
            .bg-position-center {
                background-position: center !important;
            }
        }

        @media screen {
            .bg-size-cover {
                background-size: cover !important;
            }
        }

        @media screen {
            @media (min-width: 992px) {
                .w-lg-50 {
                    width: 50% !important;
                }
            }
        }
    </style>
    <link rel="stylesheet" href="/css/app.css">
    <title>{{__('messages.register')}} - {{env('APP_NAME')}}</title>
</head>

<body class="antialiased">
    <main class="page-wrapper">
        <!-- Page content-->
        <div class="d-lg-flex position-relative h-100">
            <!-- Home button-->
            <a class="text-nav btn btn-icon bg-light border rounded-circle position-absolute top-0 end-0 p-0 mt-3 me-3 mt-sm-4 me-sm-4" href="{{route('home')}}" data-bs-toggle="tooltip" data-bs-placement="left" aria-label="Back to home" data-bs-original-title="{{__('messages.back_to_frontpage')}}">
                <i class="ai-home"></i>
            </a>
            <!-- Sign in form-->
            <div class="d-flex flex-column align-items-center w-lg-50 h-100 px-3 px-lg-5 pt-5">
                <div class="w-100 mt-auto" style="max-width: 526px;">
                    <h1 class="serif fw-bolder fst-italic">{{__('messages.register_header')}}</h1>
                    <p class="pb-3 mb-3 mb-lg-4">{{__('messages.register_text')}}&nbsp;&nbsp;<a href="{{route('login')}}">{{__('messages.login_here')}}</a></p>
                    <form method="POST" action="{{ route('register_store') }}" class="needs-validation">
                        @csrf
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <div class="row row-cols-1 row-cols-sm-2">
                            <div class="col mb-4">
                                <input name="display_name" class="form-control form-control-lg" type="text" placeholder="{{__('messages.display_name_placeholder')}}" required autofocus>
                            </div>
                            <div class="col mb-4">
                                <!-- See: https://stackoverflow.com/questions/12018245/regular-expression-to-validate-username -->
                                <input pattern="^(?=[a-zA-Z0-9._]{8,20}$)(?!.*[_.]{2})[^_.].*[^_.]$" name="username" class="form-control form-control-lg" type="text" placeholder="{{__('messages.username_placeholder')}}" required>
                                <div class="d-none form-text">Eksempel soren.kirkegaard</div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <input name="email" class="form-control form-control-lg" type="email" placeholder="{{__('messages.email_address')}}" required>
                        </div>
                        <div class="password-toggle mb-4">
                            <input name="password" class="form-control form-control-lg" type="password" placeholder="{{__('messages.password')}}" required>
                        </div>
                        <div class="password-toggle mb-4">
                            <input name="password_confirmation" class="form-control form-control-lg" type="password" placeholder="{{__('messages.password_confirmation_placeholder')}}" required>
                        </div>
                        <div class="pb-4">
                            <div class="form-check my-2">
                                <input name="agreed_toc" class="form-check-input" type="checkbox" id="terms" required>
                                <label class="form-check-label ms-1" for="terms">{{__('messages.i_agree')}} <a href="/terms">{{__('messages.toc_link')}}</a></label>
                            </div>
                        </div>
                        <button class="btn btn-lg btn-primary w-100 mb-4" type="submit">{{__('messages.sign_up_btn')}}</button>
                    </form>
                </div>
                <!-- Copyright-->
                <p class="w-100 fs-sm pt-5 mt-auto mb-5" style="max-width: 526px;"><span class="text-muted">{{__('messages.all_rights_reserved', ['year' => now()->year, 'app' => env('APP_NAME')])}}</span></p>
            </div>
            <!-- Cover image-->
            <div class="w-50 bg-size-cover bg-repeat-0 bg-position-center" style="background-image: url('http://www.hovedstadshistorie.dk/wp-content/uploads/2016/03/Nørreport-akvarel-Beyer-1850erne-RES.jpg');"></div>
        </div>
    </main>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
      -->
</body>

</html>