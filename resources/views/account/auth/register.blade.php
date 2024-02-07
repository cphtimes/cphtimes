<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{__('messages.register')}} - {{ __('messages.brand_name') }}</title>
    <meta name="description" content="">

    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="{{__('messages.register')}} - {{ __('messages.brand_name') }}">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="{{app()->getLocale() == 'en' ? asset('CPHGates Open Graph Logo.png') : asset('KBHPorte Open Graph Logo.png')}}">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="{{url()->full()}}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{__('messages.register')}} - {{ __('messages.brand_name') }}">
    <meta property="og:description" content="">
    <meta property="og:image" content="{{app()->getLocale() == 'en' ? asset('CPHGates Open Graph Logo.png') : asset('KBHPorte Open Graph Logo.png')}}">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{__('messages.register')}} - {{ __('messages.brand_name') }}">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="{{app()->getLocale() == 'en' ? asset('CPHGates Open Graph Logo.png') : asset('KBHPorte Open Graph Logo.png')}}">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <link rel="stylesheet" href="/css/app.css">
</head>

<body class="antialiased">
    <main class="page-wrapper">
        <!-- Page content-->
        <div class="d-lg-flex position-relative h-100">
            <!-- Home button-->
            <a class="text-nav btn btn-icon bg-light border rounded-circle position-absolute top-0 end-0 p-0 mt-3 me-3 mt-sm-4 me-sm-4" href="{{route('frontpage')}}" data-bs-toggle="tooltip" data-bs-placement="left" aria-label="Back to home" data-bs-original-title="{{__('messages.back_to_frontpage')}}">
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

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/theme.js') }}" defer></script>
</body>

</html>