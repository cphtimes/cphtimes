<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{__('messages.layout')}} - {{ __('messages.brand_name') }}</title>
    <meta name="description" content="">

    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="{{__('messages.layout')}} - {{ __('messages.brand_name') }}">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="{{app()->getLocale() == 'en' ? asset('CPHGates Open Graph Logo.png') : asset('KBHPorte Open Graph Logo.png')}}">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="{{url()->full()}}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{__('messages.layout')}} - {{ __('messages.brand_name') }}">
    <meta property="og:description" content="">
    <meta property="og:image" content="{{app()->getLocale() == 'en' ? asset('CPHGates Open Graph Logo.png') : asset('KBHPorte Open Graph Logo.png')}}">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{__('messages.layout')}} - {{ __('messages.brand_name') }}">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="{{app()->getLocale() == 'en' ? asset('CPHGates Open Graph Logo.png') : asset('KBHPorte Open Graph Logo.png')}}">

    <link href="{{ asset('icons/around-icons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/theme-switcher.js') }}" defer></script>

    <link rel="stylesheet" href="/css/app.css">

</head>

<body class="antialiased">

    <main class="page-wrapper">
        @include('components.navbar', array(
        'user' => $currentUser,
        'sections' => $sections
        ))
        <div class="container py-5 mt-4 mt-lg-5 mb-lg-4 my-xl-5">
            <div class="row pt-sm-2 pt-lg-0">
                <!-- Sidebar (offcanvas on sreens < 992px)-->
                @include('components.author-sidebar', array(
                'author' => new \App\Models\Author(['user_id' => $currentUser->id]),
                'currentUser' => $currentUser
                ))
                <!-- Page content-->
                <div class="col-lg-9 pt-4 pb-2 pb-sm-4">
                    <h1 class="serif fst-italic h2 mb-4">{{__('messages.layout')}}</h1>
                    <!-- Basic info-->
                    <section class="card border py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
                        <div class="card-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a href="#frontpage" class="nav-link active" data-bs-toggle="tab" role="tab">
                                        <i class="fi-home me-2"></i>
                                        {{__('messages.frontpage')}}
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button">{{ucfirst(trans_choice('messages.sections', 2))}}</a>
                                    <div class="dropdown-menu">
                                        @foreach ($sections as $section)
                                        <a href="#{{$section->uri}}" class="dropdown-item" data-bs-toggle="tab" role="tab">{{$section->name}}</a>
                                        @endforeach
                                    </div>
                                </li>
                            </ul>

                            <!-- Tabs content -->
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="frontpage" role="tabpanel">
                                    <form class="needs-validation" method="POST" action="{{route('manage_create_layout')}}" enctype="multipart/form-data">
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

                                        <div class="row g-3 g-sm-4 mt-0 mt-lg-2">
                                            @for ($i = 0; $i < 3; $i++) <div class="col-sm-12">
                                                <label class="form-label" for="article_{{$i+1}}">{{__('messages.article')}} {{$i + 1}}</label>
                                                <input placeholder="https://cphgates.com" name="article_{{$i+1}}" class="form-control" type="text" value="{{$layouts['frontpage']->get($i) != null ? route('article', [$layouts['frontpage']->get($i)->article->first()->section_uri, $layouts['frontpage']->get($i)->article->first()->headline_uri]) : ''}}" id="article_{{$i+1}}">
                                        </div>
                                        @endfor
                                </div>

                                <div class="d-flex justify-content-end pt-5">
                                    <button class="btn btn-secondary" type="button">{{__('messages.cancel')}}</button>
                                    <button type="submit" class="btn btn-primary ms-3">{{__('messages.save_changes')}}</button>
                                </div>
                                </form>
                            </div>
                            @foreach ($sections as $section)
                            <div class="tab-pane fade" id="{{$section->uri}}" role="tabpanel">
                                <form class="needs-validation" method="POST" action="{{route('manage_create_layout')}}?section={{$section->uri}}" enctype="multipart/form-data">
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

                                    <div class="row g-3 g-sm-4 mt-0 mt-lg-2">
                                        @for ($i = 0; $i < 5; $i++) <div class="col-sm-12">
                                            <label class="form-label" for="article_{{$i+1}}">{{__('messages.article')}} {{$i + 1}}</label>
                                            <input placeholder="https://cphgates.com" name="article_{{$i+1}}" class="form-control" type="text" value="{{$layouts[$section->uri]->get($i) != null ? route('article', [$layouts[$section->uri]->get($i)->article->first()->section_uri, $layouts[$section->uri]->get($i)->article->first()->headline_uri]) : ''}}" id="article_{{$i+1}}">
                                    </div>
                                    @endfor
                            </div>

                            <div class="d-flex justify-content-end pt-5">
                                <button class="btn btn-secondary" type="button">{{__('messages.cancel')}}</button>
                                <button type="submit" class="btn btn-primary ms-3">{{__('messages.save_changes')}}</button>
                            </div>
                            </form>
                        </div>
                        @endforeach
                </div>
            </div>
            </section>
        </div>
        </div>
        </div>
    </main>
    <!-- Footer -->
    @include('components.footer', array(
    'sections' => $sections
    ))


    <!-- Back to top button -->
    @include('components.back-top-btn')

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/theme.js') }}" defer></script>
</body>

</html>