<!DOCTYPE html>
<html @class(['dark-mode'=> $darkMode]) lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="{{ asset('js/theme-switcher.js') }}" defer></script>

    <style>
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

        article:hover>div>.article-body>.article-title {
            text-decoration: underline !important;
        }

        article:hover>.article-body>.article-title {
            text-decoration: underline !important;
        }

        article:hover>a>.article-body>.article-title {
            text-decoration: underline !important;
        }

        article:hover>a>.article-body>div>.article-title {
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

        /*
        .border-md-end {
            border-right: none !important;
        }
        */
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

            /*
          .border-md-end {
              border-right: 1px solid #dee2e6 !important;
          }
          */
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

        .cell-compact {
            width: 100%;
        }

        .cell-flexible {
            width: 100%;
        }

        @media (min-width: 768px) {
            .cell-compact {
                width: 33.33%;
            }
        }

        @media (min-width: 992px) {
            .cell-compact {
                width: 16.66%;
            }

            .cell-flexible {
                width: 50%;
            }
        }

        .swiper-pagination {
            position: relative;
        }
    </style>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-W155VBDMQH"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-W155VBDMQH');
    </script>

    <title>{{ $activeSection }} - {{ env('APP_NAME') }}</title>
</head>

<body class="antialiased">
    @include('components.masthead', array(
    'darkMode' => $darkMode,
    'user' => $currentUser,
    'icon' => $icon,
    'temp' => $temp,
    'tempMin' => $tempMin,
    'tempMax' => $tempMax,
    'sections' => $sections
    ))
    <main class="main">
        <div class="d-block d-lg-none">
            @include('components.navbar', array(
            'user' => $currentUser,
            'sections' => $sections,
            'darkMode' => $darkMode
            ))
        </div>
        @include('components.masthead-mini-nav', array(
        'sections' => $sections,
        'darkMode' => $darkMode
        ))
        <div class="container pt-5 pb-4 pt-lg-4 px-md-0 px-lg-0">
            @if ($topArticles->count() == 0)
            <div class="py-5">
                <div class="container d-flex flex-column justify-content-center align-items-center h-100 text-center pb-2 py-sm-3 py-md-4 py-lg-5">
                    <h3 class="serif fst-italic fw-bolder text-dark">{{__('messages.no_articles_yet_headline')}}</h3>
                    <p class="mx-auto mb-5" style="max-width: 680px;">{{__('messages.no_articles_yet_text')}}</p>
                    <a href="{{route('home')}}" class="btn btn-secondary">{{__('messages.go_frontpage_btn')}}</a>
                </div>
            </div>
            @endif

            <div style="margin: auto" class="row pb-3 pb-md-5 px-md-0 px-lg-0">
                <!-- Above the fold -->
                <ul class="d-block d-md-none list-group list-group-flush col-xl-6 col-lg-8 col-md-12 col-12 pe-md-0 pt-4 pb-4 pb-md-0 pt-lg-0 px-0 px-lg-4 border-end-0 border-end-lg">
                    @if (count($topArticles) > 0)
                    <li class="list-group-item border-bottom">
                        @include('components.article-card', array(
                        'article' => $topArticles->first(),
                        'section' => $topArticles->first()->localizedSection($sections),
                        'style' => 'compact'
                        ))
                    </li>
                    @endif
                    @for ($i = 1; $i < min(count($topArticles), 3); $i++) @include('components.article-list-item', array( 'article'=> $topArticles[$i],
                        'section' => $topArticles[$i]->localizedSection($sections),
                        'style' => 'compact'
                        ))
                        @endfor
                </ul>

                @if (count($topArticles) > 0)
                <div class="d-none d-md-block col-xl-6 border-end-0 border-end-lg ps-0 pb-3 pt-3 pt-lg-0 pe-md-0 px-lg-2">
                    <a class="nav-link" href="{{ route('article', ['section' => $topArticles[0]->section_uri, 'article' => $topArticles[0]->headline_uri]) }}">
                        <article class="card border-0 px-3 px-md-3 px-lg-3">
                            <div class="row d-flex align-items-center">
                                <div class="col-6 article-body card-body px-3">
                                    <p><small class="text-uppercase text-dark"><b>{{ $topArticles->first()->localizedSection($sections) }}</b></small></p>
                                    <h3 class="article-title card-title fw-light crop-text-2">{{ $topArticles->first()->headline }}</h3>
                                </div>
                                <div class="col-6">
                                    <p class="card-text crop-text-4 text-dark opacity-50">{{ $topArticles->first()->abstract }}</p>
                                </div>
                            </div>
                            <div class="ratio ratio-4x3">
                                <img style="object-fit: cover;" src="{{$topArticles[0]->image_url}}" alt="..." />
                            </div>
                        </article>
                    </a>
                </div>
                @endif

                <ul class="d-none d-md-block list-group list-group-flush col-xl-6 col-lg-8 col-md-12 col-12 pe-0 px-md-3 px-lg-4 pb-md-4">
                    @for ($i = 1; $i < min(count($topArticles), 5); $i++) @include('components.article-list-item', array( 'article'=> $topArticles[$i],
                        'section' => $topArticles[$i]->localizedSection($sections),
                        'style' => 'expanded',
                        'class' => $i == 0 ? 'list-group-item py-3 pt-lg-0 pb-lg-3 border-bottom' : 'list-group-item py-3 border-bottom'
                        ))
                        @endfor
                </ul>
            </div>

            <!-- Grid of articles -->
            @if (count($topArticles) >= 5)
            <div class="px-0" hx-get="{{route('article_grid.show', ['section_uri' => $activeSection])}}" hx-swap="outerHTML" hx-trigger="load"> <!--   -->
                @include('components.article-grid', [
                'articles' => collect([]),
                'placeholder' => true,
                'n' => 20
                ])
            </div>
            @endif

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

    <script src="https://unpkg.com/htmx.org@1.9.5" integrity="sha384-xcuj3WpfgjlKF+FXhSQFQ0ZNr39ln+hwjN3npfM9VBnUskLolQAcN80McRIVOPuO" crossorigin="anonymous"></script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 10,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            }
        });
    </script>
</body>

</html>