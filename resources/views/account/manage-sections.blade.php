<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
    <!-- <link href="https://fonts.googleapis.com/css2?family=Vollkorn&display=swap" rel="stylesheet">-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;1,900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
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

    <script src="{{ asset('js/app.js') }}" defer></script>

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

        .list-group-item {
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

        .aa-DetachedSearchButton {
            border: 0 !important;
        }

        .aa-DetachedSearchButtonIcon {
            color: rgba(0, 0, 0, 1.0) !important;
        }

        .aa-DetachedSearchButtonPlaceholder {
            display: none !important;
        }

        @media screen {
            @media (min-width: 992px) {
                .offcanvas-lg .offcanvas-body {
                    display: flex;
                    flex-grow: 0;
                    padding: 0;
                    overflow-y: visible;
                    background-color: rgba(0, 0, 0, 0) !important;
                }
            }
        }

        @media screen {
            @media (min-width: 992px) {
                .position-lg-sticky {
                    position: -webkit-sticky !important;
                    position: sticky !important;
                }
            }
        }

        @media screen {
            .offcanvas-body {
                display: block !important;
            }
        }
    </style>


    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/theme-switcher.js') }}" defer></script>

    <title>{{$currentUser->display_name}} - The Copenhagen Gates</title>

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