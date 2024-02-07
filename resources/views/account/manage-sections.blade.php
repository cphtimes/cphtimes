<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ucfirst(trans_choice('messages.sections', 2))}} - {{ __('messages.brand_name') }}</title>
    <meta name="description" content="">

    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="{{ucfirst(trans_choice('messages.sections', 2))}} - {{ __('messages.brand_name') }}">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="{{app()->getLocale() == 'en' ? asset('CPHGates Open Graph Logo.png') : asset('KBHPorte Open Graph Logo.png')}}">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="{{url()->full()}}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ucfirst(trans_choice('messages.sections', 2))}} - {{ __('messages.brand_name') }}">
    <meta property="og:description" content="">
    <meta property="og:image" content="{{app()->getLocale() == 'en' ? asset('CPHGates Open Graph Logo.png') : asset('KBHPorte Open Graph Logo.png')}}">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ucfirst(trans_choice('messages.sections', 2))}} - {{ __('messages.brand_name') }}">
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
                    <h1 class="serif fst-italic h2 mb-4">{{ucfirst(trans_choice('messages.sections', 2))}}</h1>
                    <!-- Basic info-->
                    <section class="card border py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
                        <div class="card-body">
                            <form class="needs-validation" method="POST" action="{{ route('manage_update_sections') }}" enctype="multipart/form-data">
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
                                    @foreach ($all_sections->filter(function ($value, $key) {
                                    return $value->language_code == 'da';
                                    }) as $position=>$section)
                                    <div class="col-sm-4">
                                        <label class="form-label" for="">Dansk (Danish)</label>
                                        <input placeholder="" name="" class="form-control" type="text" value="{{$section->name}}" id="">
                                    </div>
                                    <div class="col-sm-4">
                                        <label class="form-label" for="">English</label>
                                        <input placeholder="" name="" class="form-control" type="text" value="{{ $all_sections->first(function ($value, $key) use ($section) { return $value->language_code == 'en' && $value->uri == $section->uri; })->name }}" id="">
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="h-100 d-flex justify-content-between align-items-end">
                                            <a href="{{ route('manage_sections') }}?action=up&uri={{$section->uri}}" class="btn btn-icon btn-secondary me-2"><i class="ai-arrow-up"></i></a>
                                            <a href="{{ route('manage_sections') }}?action=down&uri={{$section->uri}}" class="btn btn-icon btn-secondary me-2"><i class="ai-arrow-down"></i></a>
                                            <a href="{{ route('manage_sections') }}?action=delete&uri={{$section->uri}}" class="btn btn-icon btn-danger"><i class="ai-trash"></i></a>
                                        </div>
                                    </div>
                                    @endforeach

                                    <div class="col-sm-4">
                                        <label class="form-label" for="">Dansk (Danish)</label>
                                        <input placeholder="Navn" name="name_da" class="form-control" type="text" value="" id="">
                                    </div>
                                    <div class="col-sm-4">
                                        <label class="form-label" for="">English</label>
                                        <input placeholder="Name" name="name_en" class="form-control" type="text" value="" id="">
                                    </div>
                                    <div class="col-sm-4">
                                        <label class="form-label" for="">Position</label>
                                        <select name="position" class="form-select" id="country">
                                            @for ($i = 0; $i < (count($all_sections) / 2) + 1; $i++) @if ($i < (count($all_sections) / 2) + 1) <option value="{{$i}}">{{$i + 1}}</option>
                                                @else
                                                <option value="{{$i}}" selected="">{{$i + 1}}</option>
                                                @endif
                                                @endfor
                                        </select>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-end pt-5">
                                    <button class="btn btn-secondary" type="button">{{__('messages.cancel')}}</button>
                                    <button type="submit" class="btn btn-primary ms-3">{{__('messages.save_changes')}}</button>
                                </div>
                            </form>
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