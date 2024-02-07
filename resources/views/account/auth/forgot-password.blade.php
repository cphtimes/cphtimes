<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{__('messages.forgot_password_header')}} - {{ __('messages.brand_name') }}</title>
    <meta name="description" content="">

    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="{{__('messages.forgot_password_header')}} - {{ __('messages.brand_name') }}">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="{{app()->getLocale() == 'en' ? asset('CPHGates Open Graph Logo.png') : asset('KBHPorte Open Graph Logo.png')}}">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="{{url()->full()}}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{__('messages.forgot_password_header')}} - {{ __('messages.brand_name') }}">
    <meta property="og:description" content="">
    <meta property="og:image" content="{{app()->getLocale() == 'en' ? asset('CPHGates Open Graph Logo.png') : asset('KBHPorte Open Graph Logo.png')}}">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{__('messages.forgot_password_header')}} - {{ __('messages.brand_name') }}">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="{{app()->getLocale() == 'en' ? asset('CPHGates Open Graph Logo.png') : asset('KBHPorte Open Graph Logo.png')}}">

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
        <div class="d-flex flex-column align-items-center position-relative h-100 px-3 pt-5">
            <!-- Home button-->
            <a class="text-nav btn btn-icon bg-light border rounded-circle position-absolute top-0 end-0 p-0 mt-3 me-3 mt-sm-4 me-sm-4" href="{{route('frontpage')}}" data-bs-toggle="tooltip" data-bs-placement="left" aria-label="Back to home" data-bs-original-title="{{__('messages.back_to_frontpage')}}">
                <i class="ai-home"></i>
            </a>
            <!-- Content-->
            <div class="mt-auto" style="max-width: 700px;">
                <h1 class="serif fw-bolder fst-italic pt-3 pb-2 pb-lg-3">{{__('messages.forgot_password_header')}}</h1>
                <p class="pb-2">{{__('messages.forgot_password_text')}}</p>
                <ul class="list-unstyled pb-2 pb-lg-0 mb-4 mb-lg-5">
                    <li class="d-flex mb-2"><span class="text-primary fw-semibold me-2">1.</span>{{__('messages.forgot_password_step_1')}}</li>
                    <li class="d-flex mb-2"><span class="text-primary fw-semibold me-2">2.</span>{{__('messages.forgot_password_step_2')}}</li>
                    <li class="d-flex mb-2"><span class="text-primary fw-semibold me-2">3.</span>{{__('messages.forgot_password_step_3')}}</li>
                </ul>
                <div class="card dark-mode border-0 bg-primary">
                    @isset($status)
                    <p>$status</p>
                    @endisset
                    <form class="needs-validation card-body" method="POST" action="{{ route('forgot_send') }}">
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
                        <div class="mb-4">
                            <div class="position-relative">
                                <input name="email" class="form-control form-control-lg" type="email" placeholder="{{__('messages.email_address')}}" required autofocus>
                            </div>
                        </div>
                        <button class="btn btn-light" type="submit">{{__('messages.get_new_password_btn')}}</button>
                    </form>
                </div>
            </div>
            <!-- Copyright-->
            <p class="w-100 fs-sm pt-5 mt-auto mb-5" style="max-width: 700px;"><span class="text-muted">{{__('messages.all_rights_reserved', ['year' => now()->year, 'app' => env('APP_NAME')])}}</span></p>
        </div>
    </main>

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/theme.js') }}" defer></script>
</body>

</html>