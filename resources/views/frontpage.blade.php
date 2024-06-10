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

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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

            <div class="container py-5 mt-sm-2 my-md-4 my-xl-0">
                @include('components.newsletter')
            </div>

            <!-- In 5 mins. or less -->
            <section class="container py-5 mt-sm-2 my-md-4 my-xl-1">
                <div class="d-flex align-items-center pb-3 mb-3 mb-lg-4">
                    <h1 class="serif fw-bolder fst-italic mb-0 me-4 fw-bold">In 5 mins.</h1>
                    <div class="d-flex ms-auto">
                        <button class="btn btn-prev btn-icon btn-sm btn-outline-primary rounded-circle me-3" type="button" id="prev-post" tabindex="0" aria-label="Previous slide" aria-controls="swiper-wrapper-ef03bba4ed6c9674">
                            <i class="ai-arrow-left"></i>
                        </button>
                        <button class="btn btn-next btn-icon btn-sm btn-outline-primary rounded-circle" type="button" id="next-post" tabindex="0" aria-label="Next slide" aria-controls="swiper-wrapper-ef03bba4ed6c9674">
                            <i class="ai-arrow-right"></i>
                        </button>
                    </div>
                </div>

                <div class="swiper 5-min-swiper">
                    <div class="swiper-wrapper">

                        <div style="width: 393.75px !important; height: 700px !important;" class="swiper-slide">
                            <article class="card rounded-0 h-100 border-0 position-relative overflow-hidden bg-size-cover bg-position-center" style="background-image: url(https://nqoqqqqwmhdrphlbuhql.supabase.co/storage/v1/object/public/articles/6/image.jpg); width: 393.75px !important; height: 700px !important;">
                                <div class="bg-dark position-absolute top-0 start-0 w-100 h-100 opacity-60"></div>
                                <div class="card-body d-flex flex-column position-relative z-2 mt-sm-5">
                                <h5 class="pt-5 mt-4 mt-sm-5 mt-lg-auto">
                                    <a class="stretched-link text-light" href="https://bedredanmark.dk/nyheder/6"><i class="ai-play-filled me-2"></i>Hvor ligger vi vores fokus?</a>
                                </h5>
                                <p class="fs-sm card-text text-light opacity-70 number-lines-3">Obs. Denne præsentation indeholder spoilers om Disney filmen Tomorrowland fra 2015.</p>
                                </div>
                            </article>
                        </div>

                        <div style="width: 393.75px !important; height: 700px !important;" class="swiper-slide">
                            <article class="card rounded-0 h-100 border-0 position-relative overflow-hidden bg-size-cover bg-position-center" style="background-image: url(https://nqoqqqqwmhdrphlbuhql.supabase.co/storage/v1/object/public/articles/6/image.jpg); width: 393.75px !important; height: 700px !important;">
                                <div class="bg-dark position-absolute top-0 start-0 w-100 h-100 opacity-60"></div>
                                <div class="card-body d-flex flex-column position-relative z-2 mt-sm-5">
                                <h5 class="pt-5 mt-4 mt-sm-5 mt-lg-auto">
                                    <a class="stretched-link text-light" href="https://bedredanmark.dk/nyheder/6"><i class="ai-play-filled me-2"></i>Hvor ligger vi vores fokus?</a>
                                </h5>
                                <p class="fs-sm card-text text-light opacity-70 number-lines-3">Obs. Denne præsentation indeholder spoilers om Disney filmen Tomorrowland fra 2015.</p>
                                </div>
                            </article>
                        </div>

                        <div style="width: 393.75px !important; height: 700px !important;" class="swiper-slide">
                            <article class="card rounded-0 h-100 border-0 position-relative overflow-hidden bg-size-cover bg-position-center" style="background-image: url(https://nqoqqqqwmhdrphlbuhql.supabase.co/storage/v1/object/public/articles/6/image.jpg); width: 393.75px !important; height: 700px !important;">
                                <div class="bg-dark position-absolute top-0 start-0 w-100 h-100 opacity-60"></div>
                                <div class="card-body d-flex flex-column position-relative z-2 mt-sm-5">
                                <h5 class="pt-5 mt-4 mt-sm-5 mt-lg-auto">
                                    <a class="stretched-link text-light" href="https://bedredanmark.dk/nyheder/6"><i class="ai-play-filled me-2"></i>Hvor ligger vi vores fokus?</a>
                                </h5>
                                <p class="fs-sm card-text text-light opacity-70 number-lines-3">Obs. Denne præsentation indeholder spoilers om Disney filmen Tomorrowland fra 2015.</p>
                                </div>
                            </article>
                        </div>

                        <div style="width: 393.75px !important; height: 700px !important;" class="swiper-slide">
                            <article class="card rounded-0 h-100 border-0 position-relative overflow-hidden bg-size-cover bg-position-center" style="background-image: url(https://nqoqqqqwmhdrphlbuhql.supabase.co/storage/v1/object/public/articles/6/image.jpg); width: 393.75px !important; height: 700px !important;">
                                <div class="bg-dark position-absolute top-0 start-0 w-100 h-100 opacity-60"></div>
                                <div class="card-body d-flex flex-column position-relative z-2 mt-sm-5">
                                <h5 class="pt-5 mt-4 mt-sm-5 mt-lg-auto">
                                    <a class="stretched-link text-light" href="https://bedredanmark.dk/nyheder/6"><i class="ai-play-filled me-2"></i>Hvor ligger vi vores fokus?</a>
                                </h5>
                                <p class="fs-sm card-text text-light opacity-70 number-lines-3">Obs. Denne præsentation indeholder spoilers om Disney filmen Tomorrowland fra 2015.</p>
                                </div>
                            </article>
                        </div>

                        <div style="width: 393.75px !important; height: 700px !important;" class="swiper-slide">
                            <article class="card rounded-0 h-100 border-0 position-relative overflow-hidden bg-size-cover bg-position-center" style="background-image: url(https://nqoqqqqwmhdrphlbuhql.supabase.co/storage/v1/object/public/articles/6/image.jpg); width: 393.75px !important; height: 700px !important;">
                                <div class="bg-dark position-absolute top-0 start-0 w-100 h-100 opacity-60"></div>
                                <div class="card-body d-flex flex-column position-relative z-2 mt-sm-5">
                                <h5 class="pt-5 mt-4 mt-sm-5 mt-lg-auto">
                                    <a class="stretched-link text-light" href="https://bedredanmark.dk/nyheder/6"><i class="ai-play-filled me-2"></i>Hvor ligger vi vores fokus?</a>
                                </h5>
                                <p class="fs-sm card-text text-light opacity-70 number-lines-3">Obs. Denne præsentation indeholder spoilers om Disney filmen Tomorrowland fra 2015.</p>
                                </div>
                            </article>
                        </div>

                        <div style="width: 393.75px !important; height: 700px !important;" class="swiper-slide">
                            <article class="card rounded-0 h-100 border-0 position-relative overflow-hidden bg-size-cover bg-position-center" style="background-image: url(https://nqoqqqqwmhdrphlbuhql.supabase.co/storage/v1/object/public/articles/6/image.jpg); width: 393.75px !important; height: 700px !important;">
                                <div class="bg-dark position-absolute top-0 start-0 w-100 h-100 opacity-60"></div>
                                <div class="card-body d-flex flex-column position-relative z-2 mt-sm-5">
                                <h5 class="pt-5 mt-4 mt-sm-5 mt-lg-auto serif">
                                    <a class="stretched-link text-light" href="https://bedredanmark.dk/nyheder/6"><i class="ai-play-filled me-2"></i>Hvor ligger vi vores fokus?</a>
                                </h5>
                                <p class="fs-sm card-text text-light opacity-70 number-lines-3 serif">Obs. Denne præsentation indeholder spoilers om Disney filmen Tomorrowland fra 2015.</p>
                                </div>
                            </article>
                        </div>

                    </div>
                </div>

                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </section>

            <!-- Grid of articles -->
            <section class="container">
                <div class="d-flex flex-column align-items-center pb-3 mb-3 mb-lg-4 justify-content-between">
                    <h1 class="serif fw-bolder fst-italic mb-0 fw-bold">Daily Digest</h1>
                    <p class="fst-italic fs-lg mb-0">Get an overview this morning.</p>
                </div>
            </section>

            <div class="px-0" hx-get="{{route('article_grid.show')}}" hx-swap="outerHTML" hx-trigger="load" id="article-grid">
                @include('components.article-grid', [
                'placeholder' => true,
                'n' => 20
                ])
            </div>

            @include('components.card', [
                'has_img_overlay' => false,
                'text_position' => 'end',
                'sections' => $sections,
                'article' => App\Models\Article::where('section_uri', 'mind-control')->first(),
            ])

            @include('components.section', [
                'text_position' => 'start',
                'sections' => $sections,
                'article' => App\Models\Article::where('section_uri', 'mind-control')->first(),
            ])

            <section class="container py-5 mt-sm-2 my-md-4 my-xl-1">
                <div class="d-flex flex-column align-items-center pb-3 mb-3 mb-lg-4 justify-content-between">
                    <h1 class="serif fw-bolder fst-italic mb-0 fw-bold">Ugens memes</h1>
                    <p class="fst-italic fs-lg mb-0">Det er vigtigt at grine og højne frekvensen, sit humør.</p>
                </div>
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <figure class="figure">
                              <img src="https://scontent-cph2-1.xx.fbcdn.net/v/t39.30808-6/436120540_2767920180039092_5744539943817400246_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=5f2048&_nc_ohc=TNC6z2aqd74Q7kNvgFmgxc9&_nc_ht=scontent-cph2-1.xx&oh=00_AYCPeKBuH2EULMKfZ8UTtfIxihXhb2KMCAlhIdjOV3G1fg&oe=665CCBAB" class="figure-img" alt="...">
                              <figcaption class="figure-caption serif">Den 'nødvendige' krig mod bad guy Putin.</figcaption>
                            </figure>
                        </div>
                        <div class="swiper-slide">
                            <figure class="figure">
                              <img src="https://scontent-cph2-1.xx.fbcdn.net/v/t39.30808-6/445175411_2779888098842300_7895429969575221702_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=5f2048&_nc_ohc=o3jx0gPqEZgQ7kNvgFenIYv&_nc_ht=scontent-cph2-1.xx&oh=00_AYA4l7jGrXiRdvZrnQxwKdU_GBfSwE1ab_BmA0SbGA9J0g&oe=665CE4AF" class="figure-img" alt="...">
                              <figcaption class="figure-caption serif">Den Sorte Svane på TV2 play. Af alle navne de kunne have brugt!</figcaption>
                            </figure>
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

        </div>
        </div>
    </main>

    <!-- Footer -->
    @include('components.footer-alt', array(
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

    <script>
        const swiper2 = new Swiper('.swiper', {
            direction: 'horizontal',
            spaceBetween: 4,
            loop: false,
            autoHeight: true,
            navigation: {
                "prevEl": "#prev-post",
                "nextEl": "#next-post"
            },
            breakpoints: {
                "576": {
                    "slidesPerView": 2
                },
                "1000": {
                    "slidesPerView": 3
                }
            }
        });
    </script>
</body>

</html>
