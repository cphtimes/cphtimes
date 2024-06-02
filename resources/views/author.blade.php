<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $author->display_name }} ({{'@' . $author->username}}) - {{ __('messages.brand_name') }}</title>
    <meta name="description" content="{{$author->bio}}">

    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="{{ $author->display_name }} ({{'@' . $author->username}}) - {{ __('messages.brand_name') }}">
    <meta itemprop="description" content="{{$author->bio}}">
    <meta itemprop="image" content="{{$author->photo_url}}">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="{{url()->full()}}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $author->display_name }} ({{'@' . $author->username}}) - {{ __('messages.brand_name') }}">
    <meta property="og:description" content="{{$author->bio}}">
    <meta property="og:image" content="{{$author->photo_url}}">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $author->display_name }} ({{'@' . $author->username}}) - {{ __('messages.brand_name') }}">
    <meta name="twitter:description" content="{{$author->bio}}">
    <meta name="twitter:image" content="{{$author->photo_url}}">

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
                'author' => $author,
                'currentUser' => $currentUser
                ))
                <!-- Page content-->
                <div class="col-lg-9 pt-4 pb-2 pb-sm-4">
                    <div class="d-flex align-items-center mb-4">
                        <h1 class="serif fw-bolder fst-italic h2 mb-0">{{__('messages.articles')}}</h1>
                        <form class="ms-auto" action="{{url()->current()}}" method="POST">
                            @csrf
                            <select onchange="this.form.submit()" name="sort" class="form-select" style="max-width: 200px;">
                                <option {{Request::get('sort', 'newest') == 'newest' ? 'selected' : ''}} value="newest">{{__('messages.newest')}}</option>
                                <option {{Request::get('sort', 'newest') == 'oldest' ? 'selected' : ''}} value="oldest">{{__('messages.oldest')}}</option>
                            </select>
                        </form>
                    </div>
                    <div class="card border py-1 p-md-2 p-xl-3 p-xxl-4">
                        <div class="card-body pb-4">
                            <!-- Articles-->
                            @if (count($articles) > 0)
                            @foreach($articles as $article)
                            @include('components.article-list-item', array(
                            'article' => $article,
                            'section' => $article->localizedSection($sections),
                            'show_work_status' => true,
                            'style' => 'expanded',
                            'editable' => $article->hasAuthored($currentUser)
                            ))
                            @endforeach
                            @else
                            <p class="text-center">{{__('messages.author_no_articles', ['author' => $author->display_name])}}</p>
                            @endif

                            <!-- Pagination-->
                            @if ($articles->previousPageUrl() || $articles->nextPageUrl())
                            <div class="d-sm-flex align-items-center justify-content-center pt-4 pt-sm-5">
                                <nav class="mb-4" aria-label="Page navigation example">
                                    <ul class="pagination">
                                        @if ($articles->previousPageUrl())
                                        <li class="page-item">
                                            <a class="page-link" href="{{request()->fullUrlWithQuery(['page' => (int) Request::get('page', 1) - 1])}}">{{__('pagination.previous')}}</a>
                                        </li>
                                        @endif
                                        @for ($i = 0; $i < $articles->lastPage(); $i++)
                                            <li @class([ 'page-item d-none d-sm-block' , 'active'=> ($i+1) == (int)Request::get('page', 1)
                                                ]) aria-current="page">
                                                <a class="page-link" href="{{request()->fullUrlWithQuery(['page' => $i+1])}}">{{$i+1}}</a>
                                            </li>
                                            @endfor
                                            @if ($articles->nextPageUrl())
                                            <li class="page-item">
                                                <a class="page-link" href="{{request()->fullUrlWithQuery(['page' => (int) Request::get('page', 1) + 1])}}">{{__('pagination.next')}}</a>
                                            </li>
                                            @endif
                                    </ul>
                                </nav>
                            </div>
                            @endif

                        </div>
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

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@algolia/autocomplete-js"></script>

    <script>
        const swiper = new Swiper('.swiper', {
            // Optional parameters
            direction: 'horizontal',
            /*
            scrollbar: {
              el: '.swiper-scrollbar',
            },
            */
            spaceBetween: 24,
            loop: true,
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
                    "slidesPerView": 4
                }
            }
        });
    </script>
</body>

</html>
