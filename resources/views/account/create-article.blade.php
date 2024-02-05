<!DOCTYPE html>
<html @class(['dark-mode'=> $darkMode]) lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/theme-switcher.js') }}" defer></script>

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

        .serif {
            font-family: 'Merriweather', serif;
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
    <link rel="stylesheet" href="/css/app.css">

    <title>{{$currentUser->display_name}} - The Copenhagen Gates</title>

</head>

<body class="antialiased">

    <main class="page-wrapper">
        @include('components.navbar', array(
        'user' => $currentUser,
        'darkMode' => $darkMode,
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
                    <h1 class="serif fst-italic h2 mb-4">{{__('messages.new_article')}}</h1>
                    <!-- Basic info-->
                    <section class="card border py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
                        <div class="card-body">
                            <form class="needs-validation" method="POST" action="{{ route('store_article') }}" enctype="multipart/form-data">
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
                                    <div class="col-sm-6">
                                        <label class="form-label" for="headline">{{__('messages.headline')}}</label>
                                        <input name="headline" class="form-control" type="text" value="" id="headline" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="fn">{{ucfirst(trans_choice('messages.sections', 1))}}</label>
                                        <select name="section_uri" class="form-select" id="section" required>
                                            <option value="" disabled="">{{__('messages.choose')}}</option>
                                            @foreach ($sections as $section)
                                            <option value="{{$section->uri}}">{{$section->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-sm-6">
                                        <label class="form-label" for="fn">{{__('messages.in_language')}}</label>
                                        <select name="in_language" class="form-select" id="language" required>
                                            <option value="" disabled="">{{__('messages.choose')}}</option>
                                            <option value="en" selected="{{$currentUser->language_code == 'en' ? 'selected' : ''}}">English</option>
                                            <option value="da" selected="{{$currentUser->language_code == 'da' ? 'selected' : ''}}">Dansk (Danish)</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="fn">{{__('messages.work_status')}}</label>
                                        <select name="work_status" class="form-select" id="work_status" required>
                                            <option value="" disabled="">{{__('messages.choose')}}</option>
                                            @if ($currentUser->role->role == 'author')
                                            <option value="Archived">{{__('messages.work_status_submitted')}}</option>
                                            @elseif ($currentUser->role->role == 'editor')
                                            <option value="published">{{__('messages.work_status_published')}}</option>
                                            <option value="draft">{{__('messages.work_status_draft')}}</option>
                                            @endif
                                        </select>
                                    </div>

                                    <div class="col-12">
                                        <label for="image" class="form-label">{{__('messages.image')}}</label>
                                        <input name="image" class="form-control" type="file" id="image" accept="image/*" required>
                                    </div>

                                    <div class="col-12">
                                        <label class="form-label" for="image_caption">{{__('messages.image_caption')}}</label>
                                        <input placeholder="" name="image_caption" class="form-control" type="text" value="" id="image_caption">
                                    </div>

                                    <div class="col-12">
                                        <label class="form-label" for="bio">{{__('messages.abstract')}}</label>
                                        <textarea name="abstract" class="form-control" rows="5" placeholder="" id="abstract" required></textarea>
                                    </div>

                                    <div class="col-12">
                                        <label class="form-label" for="body_html">{{__('messages.body')}}</label>
                                        <div class="p-3 rounded-3 border" id="editorjs"></div>
                                        <textarea readonly name="body_html" class="d-none form-control" rows="5" placeholder="" id="body_html"></textarea>
                                        <textarea readonly name="body_blocks" class="d-none form-control" rows="5" placeholder="" id="body_blocks"></textarea>
                                    </div>

                                    @if ($currentUser->role->role == 'editor')
                                    <div class="col-12">
                                        <div class="form-check form-switch">
                                            <input name="author_is_anonymous" type="checkbox" class="form-check-input" id="author_is_anonymous">
                                            <label class="form-check-label" for="author_is_anonymous">{{__('messages.author_is_anonymous')}}</label>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <label class="form-label" for="author_display_name">{{__('messages.alternative_author')}}</label>
                                        <input placeholder="" name="author_display_name" class="form-control" type="text" value="" id="author_display_name">
                                        <div class="form-text">{{__('messages.alternative_author_text')}}</div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="author_username">{{__('messages.alternative_username')}}</label>
                                        <input pattern="^(?=[a-zA-Z0-9._]{8,20}$)(?!.*[_.]{2})[^_.].*[^_.]$" placeholder="" name="author_username" class="form-control" type="text" value="" id="author_username">
                                    </div>
                                    @endif

                                    <div class="d-flex justify-content-end pt-3">
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

    <script src="/js/editor.js" defer></script>

</body>

</html>