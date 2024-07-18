<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ __('messages.brand_name') }} - {{ __('messages.slogan') }}</title>
    <meta name="description" content="">

    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="{{ __('messages.brand_name') }} - {{ __('messages.slogan')}}">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="{{app()->getLocale() == 'en' ? asset('CPHGates Open Graph Logo.png') : asset('KBHPorte Open Graph Logo.png')}}">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="{{url()->full()}}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ __('messages.brand_name') }} - {{ __('messages.slogan')}}">
    <meta property="og:description" content="">
    <meta property="og:image" content="{{app()->getLocale() == 'en' ? asset('CPHGates Open Graph Logo.png') : asset('KBHPorte Open Graph Logo.png')}}">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ __('messages.brand_name') }} - {{ __('messages.slogan') }}">
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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/css/lightgallery-bundle.min.css" integrity="sha512-nUqPe0+ak577sKSMThGcKJauRI7ENhKC2FQAOOmdyCYSrUh0GnwLsZNYqwilpMmplN+3nO3zso8CWUgu33BDag==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="{{ asset('js/theme-switcher.js') }}" defer></script>

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
</head>

<body class="antialiased">
    @include('components.masthead', array(
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
            'sections' => $sections
            ))
        </div>
        @include('components.masthead-mini-nav', array(
        'sections' => $sections,
        ))
        <div class="container pt-5 pb-0 pt-lg-4 px-md-0 px-lg-0">
            <div style="margin: auto" class="row pt-4 pt-lg-0 pb-3 pb-md-5 px-md-3 px-lg-0">
                <!-- Above the fold -->
                <ul class="d-block d-md-none list-group list-group-flush col-xl-6 col-lg-8 col-md-12 col-12 pe-0 px-lg-4 border-end-0 border-end-lg">
                    @if (count($aboveFoldArticles) > 0)
                    <li class="list-group-item border-bottom">
                        @include('components.article-card', array(
                        'article' => $aboveFoldArticles->first(),
                        'section' => $aboveFoldArticles->first()->localizedSection($sections),
                        'style' => 'compact'
                        ))
                    </li>
                    @endif
                    @for ($i = 1; $i < min(count($aboveFoldArticles), 3); $i++) @include('components.article-list-item', array( 'article'=> $aboveFoldArticles[$i],
                        'section' => $aboveFoldArticles[$i]->localizedSection($sections),
                        'style' => 'compact'
                        ))
                        @endfor
                </ul>
                <ul class="d-none d-md-block list-group list-group-flush col-xl-6 col-lg-8 col-md-12 col-12 pe-0 px-lg-4 border-end-0 border-end-lg">
                    @for ($i = 0; $i < min(count($aboveFoldArticles), 3); $i++) @include('components.article-list-item', array( 'article'=> $aboveFoldArticles[$i],
                        'section' => $aboveFoldArticles[$i]->localizedSection($sections),
                        'style' => $i == 0 ? 'large' : 'expanded',
                        'class' => $i == 0 ? 'list-group-item py-3 pt-lg-0 pb-lg-3 border-bottom' : 'list-group-item py-3 border-bottom'
                        ))
                        @endfor
                </ul>

                <!-- Latest updates -->
                <div class="d-block d-lg-none pb-4 pb-md-0 px-0">
                    <h5 class="w-100 pt-3 serif fw-bolder fst-italic px-0 px-md-0">{{__('messages.latest_updates')}}</h5>
                    <div>
                        <ul style="overflow-y: hidden;" class="list-group list-group-flush py-3 col-12 px-lg-3 pe-0">
                            @foreach ($latestUpdates->slice(0, 4) as $article)
                            @include('components.article-list-item', array(
                            'article' => $article,
                            'section' => $article->localizedSection($sections),
                            'style' => 'expanded'
                            ))
                            @endforeach
                        </ul>
                    </div>
                </div>

                <ul style="overflow-y: scroll; height:566px;" class="d-none d-lg-block col-xl-3 col-lg-4 col-md-12 col-12 border-end-xl px-4 mb-0">
                    <h5 class="w-100 serif fw-bolder fst-italic">{{__('messages.latest_updates')}}</h5>
                    @foreach ($latestUpdates as $update)
                    @include('components.article-list-item', array(
                    'article' => $update,
                    'section' => $update->localizedSection($sections),
                    'style' => 'compact'
                    ))
                    @endforeach
                </ul>

                <ul style="overflow-y: scroll; height:566px;" class="d-none d-xl-block list-group list-group-flush col-xl-3 col-lg-12 col-md-12 col-12 px-4 mb-0">
                    <h5 class="w-100 serif fw-bolder fst-italic">{{__('messages.popular_articles')}}</h5>
                    @foreach ($popular as $article)
                    @include('components.article-list-item', array(
                    'article' => $article,
                    'section' => $article->localizedSection($sections),
                    'style' => 'compact'
                    ))
                    @endforeach
                </ul>
            </div>

            <!-- Shorts -->
            @include('components.shorts', [
                "title" => "In 5 mins.",
                "items" => [
                    [
                        "image_url" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXg0KJa8NlJ-l26d12hNmZR4AQc67DiFOacg&s",
                        "title" => "15 minute cities",
                        "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
                        "embed_url" => "https://rumble.com/embed/v4r275o/?pub=4&autoplay=2"
                    ],
                    [
                        "image_url" => "https://www.europarl.europa.eu/resources/library/images/20230131PHT70403/20230131PHT70403-ml.jpeg",
                        "title" => "Agenda 2030",
                        "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
                        "embed_url" => "https://rumble.com/embed/v4r275o/?pub=4&autoplay=2"
                    ],
                    [
                        "image_url" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT5-B-Hyrcw5bUyEW4ISYFQSoc16euf9eLHiA&s",
                        "title" => "Neobiological revolution",
                        "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
                        "embed_url" => "https://rumble.com/embed/v4r275o/?pub=4&autoplay=2"
                    ],
                    [
                        "image_url" => "https://paytmblogcdn.paytm.com/wp-content/uploads/2022/12/Blog_Paytm_What-is-Central-Bank-Digital-Currency-CBDC-800x500.jpg",
                        "title" => "CBDC",
                        "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
                        "embed_url" => "https://rumble.com/embed/v4r275o/?pub=4&autoplay=2"
                    ],
                    [
                        "image_url" => "https://assets.ltkcontent.com/images/102789/french-revolution-battle_85b8069bc6.jpg",
                        "title" => "Revolutions and secret societies",
                        "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
                        "embed_url" => "https://rumble.com/embed/v4yg3h2/?pub=jic71&autoplay=2"
                    ],
                ]
            ])

            @foreach ($layout as $item)
                @if ($item["type"] == "section")
                    @include('components.article-section', [
                        "title" => $item["data"]["title"] ?? null,
                        "text" => $item["data"]["text"] ?? null,
                        "sql" => $item["data"]["sql"]
                    ])

                @elseif ($item["type"] == "fullbleed" && \App\Specs\ArticleRawSQLSpec::isSatisfiedBy($item["data"]["sql"]))
                    @include('components.article-fullbleed', [
                        'has_img_overlay' => $item["data"]["has_img_overlay"] ?? false,
                        'text_position' => $item["data"]["text_position"] ?? 'start',
                        'sections' => $sections,
                        'article' =>  \App\Models\Article::whereRaw(\App\Services\ArticleRawSQLService::whereRaw($item["data"]["sql"]))->whereIn('in_language', \App\Services\SupportedLangsService::get())->first(),
                    ])

                @elseif ($item["type"] == "block" && \App\Specs\ArticleRawSQLSpec::isSatisfiedBy($item["data"]["sql"]))
                    @include('components.article-block', [
                        'text_position' => $item["data"]["text_position"] ?? 'start',
                        'sections' => $sections,
                        'article' => \App\Models\Article::whereRaw(\App\Services\ArticleRawSQLService::whereRaw($item["data"]["sql"]))->whereIn('in_language', \App\Services\SupportedLangsService::get())->first(),
                    ])
                @endif
            @endforeach

            <section class="container py-5 mt-sm-2 my-md-4 my-xl-1">
                <div class="d-flex flex-column align-items-center pb-3 mb-3 mb-lg-4 justify-content-between">
                    <h1 class="serif fw-bolder fst-italic mb-0 fw-bold">Memes</h1>
                    <p class="fst-italic fs-lg mb-0">It's important to have a laugh during difficult times.</p>
                </div>
                <div class="swiper" data-swiper-options='{
                    "slidesPerView": 1,
                    "spaceBetween": 16,
                    "loop": true,
                    "pagination": {
                      "el": ".swiper-pagination",
                      "clickable": true
                    },
                    "navigation": {
                      "prevEl": "#prev",
                      "nextEl": "#next"
                    },
                    "breakpoints": {
                      "600": {
                        "slidesPerView": 2
                      },
                      "1000": {
                        "slidesPerView": 3
                      }
                    }
                  }'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <!-- Image gallery with zooming hover effect -->
                            <div class="gallery">
                              <a href="https://scontent-cph2-1.xx.fbcdn.net/v/t39.30808-6/445175411_2779888098842300_7895429969575221702_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=5f2048&_nc_ohc=o3jx0gPqEZgQ7kNvgFenIYv&_nc_ht=scontent-cph2-1.xx&oh=00_AYA4l7jGrXiRdvZrnQxwKdU_GBfSwE1ab_BmA0SbGA9J0g&oe=665CE4AF" class="gallery-item d-block card-hover zoom-effect">
                                <div class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-0 overflow-hidden z-2 opacity-0">
                                  <i class="ai-zoom-in fs-2 text-white position-relative z-2"></i>
                                  <div class="position-absolute bottom-0 start-0 w-100 text-center text-white fs-sm fw-medium z-2 pb-3">
                                    Den Sort Svane
                                  </div>
                                  <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-40"></div>
                                </div>
                                <div class="zoom-effect-wrapper rounded-0">
                                  <img src="https://scontent-cph2-1.xx.fbcdn.net/v/t39.30808-6/445175411_2779888098842300_7895429969575221702_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=5f2048&_nc_ohc=o3jx0gPqEZgQ7kNvgFenIYv&_nc_ht=scontent-cph2-1.xx&oh=00_AYA4l7jGrXiRdvZrnQxwKdU_GBfSwE1ab_BmA0SbGA9J0g&oe=665CE4AF" class="zoom-effect-img" alt="Den Sorte Svane">
                                </div>
                              </a>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="gallery">
                              <a href="https://scontent-cph2-1.xx.fbcdn.net/v/t39.30808-6/436120540_2767920180039092_5744539943817400246_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=5f2048&_nc_ohc=TNC6z2aqd74Q7kNvgFmgxc9&_nc_ht=scontent-cph2-1.xx&oh=00_AYCPeKBuH2EULMKfZ8UTtfIxihXhb2KMCAlhIdjOV3G1fg&oe=665CCBAB" class="gallery-item d-block card-hover zoom-effect">
                                <div class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-0 overflow-hidden z-2 opacity-0">
                                  <i class="ai-zoom-in fs-2 text-white position-relative z-2"></i>
                                  <div class="position-absolute bottom-0 start-0 w-100 text-center text-white fs-sm fw-medium z-2 pb-3">
                                    Bad guy 'Putin'
                                  </div>
                                  <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-40"></div>
                                </div>
                                <div class="zoom-effect-wrapper rounded-0">
                                  <img src="https://scontent-cph2-1.xx.fbcdn.net/v/t39.30808-6/436120540_2767920180039092_5744539943817400246_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=5f2048&_nc_ohc=TNC6z2aqd74Q7kNvgFmgxc9&_nc_ht=scontent-cph2-1.xx&oh=00_AYCPeKBuH2EULMKfZ8UTtfIxihXhb2KMCAlhIdjOV3G1fg&oe=665CCBAB" class="zoom-effect-img" alt="Bad guy 'Putin'">
                                </div>
                              </a>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="gallery">
                              <a href="https://pbs.twimg.com/media/GPsbTdjXMAAqVme?format=jpg&name=small" class="gallery-item d-block card-hover zoom-effect">
                                <div class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-0 overflow-hidden z-2 opacity-0">
                                  <i class="ai-zoom-in fs-2 text-white position-relative z-2"></i>
                                  <div class="position-absolute bottom-0 start-0 w-100 text-center text-white fs-sm fw-medium z-2 pb-3">
                                    The neobiological revolution
                                  </div>
                                  <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-40"></div>
                                </div>
                                <div class="zoom-effect-wrapper rounded-0">
                                  <img src="https://pbs.twimg.com/media/GPsbTdjXMAAqVme?format=jpg&name=small" class="zoom-effect-img" alt="The neobiological revolution">
                                </div>
                              </a>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="gallery">
                              <a href="https://pbs.twimg.com/media/GPsZI8BWoAAp8rb?format=jpg&name=small" class="gallery-item d-block card-hover zoom-effect">
                                <div class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-0 overflow-hidden z-2 opacity-0">
                                  <i class="ai-zoom-in fs-2 text-white position-relative z-2"></i>
                                  <div class="position-absolute bottom-0 start-0 w-100 text-center text-white fs-sm fw-medium z-2 pb-3">
                                    "I'm the Captain now!"
                                  </div>
                                  <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-40"></div>
                                </div>
                                <div class="zoom-effect-wrapper rounded-0">
                                  <img src="https://pbs.twimg.com/media/GPsZI8BWoAAp8rb?format=jpg&name=small" class="zoom-effect-img" alt="I'm the Captain now!">
                                </div>
                              </a>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="gallery">
                              <a href="https://pbs.twimg.com/media/GPseGcNW4AAHOT5?format=jpg&name=small" class="gallery-item d-block card-hover zoom-effect">
                                <div class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-0 overflow-hidden z-2 opacity-0">
                                  <i class="ai-zoom-in fs-2 text-white position-relative z-2"></i>
                                  <div class="position-absolute bottom-0 start-0 w-100 text-center text-white fs-sm fw-medium z-2 pb-3">
                                    The next generation
                                  </div>
                                  <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-40"></div>
                                </div>
                                <div class="zoom-effect-wrapper rounded-0">
                                  <img src="https://pbs.twimg.com/media/GPseGcNW4AAHOT5?format=jpg&name=small" class="zoom-effect-img" alt="The next generation">
                                </div>
                              </a>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="gallery">
                              <a href="https://pbs.twimg.com/media/GPsd4toXAAEHsNW?format=jpg&name=small" class="gallery-item d-block card-hover zoom-effect">
                                <div class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-0 overflow-hidden z-2 opacity-0">
                                  <i class="ai-zoom-in fs-2 text-white position-relative z-2"></i>
                                  <div class="position-absolute bottom-0 start-0 w-100 text-center text-white fs-sm fw-medium z-2 pb-3">
                                    Breaking news
                                  </div>
                                  <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-40"></div>
                                </div>
                                <div class="zoom-effect-wrapper rounded-0">
                                  <img src="https://pbs.twimg.com/media/GPsd4toXAAEHsNW?format=jpg&name=small" class="zoom-effect-img" alt="Breaking news">
                                </div>
                              </a>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="gallery">
                              <a href="https://pbs.twimg.com/media/GPscs8BWAAAAnW9?format=jpg&name=small" class="gallery-item d-block card-hover zoom-effect">
                                <div class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-0 overflow-hidden z-2 opacity-0">
                                  <i class="ai-zoom-in fs-2 text-white position-relative z-2"></i>
                                  <div class="position-absolute bottom-0 start-0 w-100 text-center text-white fs-sm fw-medium z-2 pb-3">
                                    Me trying to explain...
                                  </div>
                                  <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-40"></div>
                                </div>
                                <div class="zoom-effect-wrapper rounded-0">
                                  <img src="https://pbs.twimg.com/media/GPscs8BWAAAAnW9?format=jpg&name=small" class="zoom-effect-img" alt="Me trying to explain...">
                                </div>
                              </a>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="gallery">
                              <a href="https://pbs.twimg.com/media/GPsZMzYXoAA8vfY?format=jpg&name=small" class="gallery-item d-block card-hover zoom-effect">
                                <div class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-0 overflow-hidden z-2 opacity-0">
                                  <i class="ai-zoom-in fs-2 text-white position-relative z-2"></i>
                                  <div class="position-absolute bottom-0 start-0 w-100 text-center text-white fs-sm fw-medium z-2 pb-3">
                                    New virus no problem
                                  </div>
                                  <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-40"></div>
                                </div>
                                <div class="zoom-effect-wrapper rounded-0">
                                  <img src="https://pbs.twimg.com/media/GPsZMzYXoAA8vfY?format=jpg&name=small" class="zoom-effect-img" alt="New virus no problem">
                                </div>
                              </a>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="gallery">
                              <a href="https://pbs.twimg.com/media/GPsZGSVX0AAJET4?format=jpg&name=small" class="gallery-item d-block card-hover zoom-effect">
                                <div class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-0 overflow-hidden z-2 opacity-0">
                                  <i class="ai-zoom-in fs-2 text-white position-relative z-2"></i>
                                  <div class="position-absolute bottom-0 start-0 w-100 text-center text-white fs-sm fw-medium z-2 pb-3">
                                    Why?
                                  </div>
                                  <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-40"></div>
                                </div>
                                <div class="zoom-effect-wrapper rounded-0">
                                  <img src="https://pbs.twimg.com/media/GPsZGSVX0AAJET4?format=jpg&name=small" class="zoom-effect-img" alt="Why?">
                                </div>
                              </a>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <div class="row d-block d-lg-none px-0 px-md-3">
                @foreach ($highlightedSections as $section_uri => $section)
                <div>
                    <h5 class="w-100 pt-3 serif fw-bolder fst-italic px-0">{{ $sections->where('uri', $section_uri)->where('language_code', App::currentLocale())->first()->name }}</h5>
                    @if ($section->count() == 0)
                    <p class="pb-5">{{__('messages.no_articles_yet_text')}}</p>
                    @else
                    <div>
                        <ul style="overflow-y: hidden;" class="list-group list-group-flush py-3 col-12 px-lg-3 pe-0">
                            @foreach ($section->slice(0, 4) as $article)
                            @include('components.article-list-item', array(
                            'article' => $article,
                            'section' => $article->localizedSection($sections),
                            'style' => 'expanded'
                            ))
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </div>
                @endforeach
            </div>

            <div class="d-none d-lg-block py-lg-5">
                <div style="margin: auto" class="row">
                    @foreach ($highlightedSections as $section_uri => $section)
                    <ul style="overflow-y: scroll; height:566px;" @class(['list-group list-group-flush col-xl-3 col-lg-4 col-md-12 col-12 px-4', 'border-end'=> $loop->iteration < count($highlightedSections)])>
                            <h5 class="serif fw-bolder fst-italic">{{ $sections->where('uri', $section_uri)->where('language_code', App::currentLocale())->first()->name }}</h5>
                            @if (count($section) == 0)
                            <p>{{__('messages.no_articles_yet_text')}}</p>
                            @else
                            @foreach ($section as $article)
                            @include('components.article-list-item', array(
                            'article' => $article,
                            'section' => $article->localizedSection($sections),
                            'style' => 'compact'
                            ))
                            @endforeach
                            @endif
                    </ul>
                    @endforeach
                </div>
            </div>

            <div class="py-5 mt-sm-2 my-md-4 my-xl-0">
                @include('components.newsletter-card')
            </div>

        </div>
        </div>
    </main>

    <!-- Footer -->
    @include('components.footer-alt', array(
    'sections' => $sections
    ))

    <!-- Back to top button -->
    @include('components.back-top-btn')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/lightgallery.min.js" integrity="sha512-jEJ0OA9fwz5wUn6rVfGhAXiiCSGrjYCwtQRUwI/wRGEuWRZxrnxoeDoNc+Pnhx8qwKVHs2BRQrVR9RE6T4UHBg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/plugins/fullscreen/lg-fullscreen.min.js" integrity="sha512-11B0rPDzvnSOYzAT37QdnYgt0z9Xg+wX5tckB1QKl5Znl8RPvrB5npo38K2jCt+Ad44udCfBiKt9D4jRdkSE1A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/plugins/zoom/lg-zoom.min.js" integrity="sha512-BLW2Jrofiqm6m7JhkQDIh2olT0EBI58+hIL/AXWvo8gOXKmsNlU6myJyEkTy6rOAAZjn0032FRk8sl9RgXPYIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/plugins/video/lg-video.min.js" integrity="sha512-Eo7d/1I/2Yywxw/unjfX06Q+owD82+3ign70yHtNTajId+C3CcHeqb+XP/a+uq/Fhrrkf8MeBcBiZqoMASFiiw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/plugins/thumbnail/lg-thumbnail.min.js" integrity="sha512-VBbe8aA3uiK90EUKJnZ4iEs0lKXRhzaAXL8CIHWYReUwULzxkOSxlNixn41OLdX0R1KNP23/s76YPyeRhE6P+Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://unpkg.com/htmx.org@1.9.5" integrity="sha384-xcuj3WpfgjlKF+FXhSQFQ0ZNr39ln+hwjN3npfM9VBnUskLolQAcN80McRIVOPuO" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/theme.js') }}"></script>
</body>

</html>
