<!DOCTYPE html>
<html data-bs-theme="light" @class(['dark-mode'=> $darkMode]) lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

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

    <style>
        .serif {
            font-family: 'Merriweather', serif;
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
    </style>
    <link rel="stylesheet" href="/css/app.css">

    <script src="{{ asset('js/theme-switcher.js') }}" defer></script>

    <title>{{ $article->headline }} - {{ $section->name }} - {{env('APP_NAME')}}</title>
    <meta name="title" content="{{$article->headline}}">
    <meta name="description" content="{{$article->abstract}}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{url()->current()}}">
    <meta property="og:title" content="{{$article->headline}}">
    <meta property="og:description" content="{{$article->abstract}}">
    <meta property="og:image" content="{{$article->image_url}}">

    <!-- Twitter -->
    <meta property="twitter:card" content="{{$article->image_url}}">
    <meta property="twitter:url" content="{{url()->current()}}">
    <meta property="twitter:title" content="{{$article->headline}}">
    <meta property="twitter:description" content="{{$article->abstract}}">
    <meta property="twitter:image" content="{{$article->image_url}}">
</head>

<body class="antialiased">
    <main class="page-wrapper">
        @include('components.navbar', array(
        'sections' => $sections,
        'user' => $currentUser
        ))
        <!-- Page content-->
        <!-- Container-->
        <section class="container pt-5 pb-4">
            <!-- Breadcrumb-->
            <nav class="pt-5" aria-label="breadcrumb">
                <ol class="pt-lg-3 pb-lg-4 pb-2 breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">{{__('messages.frontpage')}}</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('section', ['section' => $section->uri]) }}">{{$section->name}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{__('messages.article')}}</li>
                </ol>
            </nav>
            <div class="row">
                <div class="col-lg-9 col-xl-8 pe-lg-4 pe-xl-0">
                    <!-- Post title + post meta-->
                    <h1 class="pb-2 pb-lg-3 serif fw-bolder fst-italic">{{$article->headline}}</h1>
                    <div class="d-flex flex-wrap align-items-center justify-content-between border-bottom mb-4">
                        <div class="d-flex align-items-center mb-4 me-4">
                            <span class="fs-sm me-2">{{__('messages.by')}}:</span>
                            <a class="nav-link position-relative fw-semibold p-0" href="{{route('author', ['username' => $article->author->getUsername()])}}" data-scroll="" data-scroll-offset="80">
                                {{ $article->author->getDisplayName() == null ? __('messages.anonymous') : $article->author->getDisplayName() }}
                                <span class="d-block position-absolute start-0 bottom-0 w-100" style="background-color: currentColor; height: 1px;"></span>
                            </a>
                        </div>
                        <div class="d-flex align-items-center mb-4"><span class="fs-sm me-2">Share article:</span>
                            <div class="d-flex">
                                <a class="nav-link p-2" href="mailto:?body={{URL::current()}}" target="_blank" rel="noopener noreferrer" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Email" data-bs-original-title="Email"><i class="ai ai-mail"></i></a> <!-- me-2 -->
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 serif" id="article-body">
                        {!! $body !!}
                    </div>

                    <!-- Author widget-->
                    <div class="border-top border-bottom py-4" id="author">
                        <div class="d-flex align-items-start py-2">
                            @if ($article->author->getPhotoURL())
                            <img style="object-fit: cover; width: 56px; height: 56px;" class="d-block rounded-circle mb-3" src="{{$article->author->getPhotoURL()}}" width="56" alt="{{ $article->author->getDisplayName() }}">
                            @else
                            <div class="d-flex align-items-center justify-content-center position-relative flex-shrink-0 rounded-circle text-primary fs-lg fw-semibold" style="object-fit: cover; width: 56px; height: 56px; background-color: rgba(var(--ar-primary-rgb), .15);">
                                {{ \App\Services\GetUserInitialsService::forName($article->author->getDisplayName() ?? 'Anon') }}
                            </div>
                            @endif

                            <div class="d-md-flex w-100 ps-4">
                                <div style="max-width: 26rem;">
                                    <h3 class="h5 mb-2">{{ $article->author->getDisplayName() == null ? __('messages.anonymous') : $article->author->getDisplayName() }}</h3>
                                    <p class="fs-sm mb-0">{{ $article->author->getBio() == null ? __('messages.empty_bio') : $article->author->getBio() }}</p>
                                </div>
                                <div class="pt-4 pt-md-0 ps-md-4 ms-md-auto">
                                    <h3 class="h5">Share article:</h3>
                                    <div class="d-flex">
                                        <a class="nav-link p-2" href="mailto:?body={{URL::current()}}" target="_blank" rel="noopener noreferrer" data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="Instagram" data-bs-original-title="Email">
                                            <i class="ai ai-mail"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Comments-->
                    <div class="pt-4 pt-xl-5 mt-4" id="comments">
                        @if ($article->comment_count >= 0)
                        <h2 class="fst-italic fw-bolder serif h1 py-lg-1 py-xl-3">{{trans_choice('messages.comments_format', $article->comment_count, ['n' => $article->comment_count])}}</h2>
                        @endif
                        @if ($currentUser != null)
                        <div class="pt-2 pb-4 border-bottom">
                            @include('components.comment-form', array(
                            'reply_comment_id' => null,
                            'user' => $currentUser
                            ))
                        </div>
                        @else
                        <p class="pb-3 mb-3 mb-lg-4">{{__('messages.sign_in_to_comment')}}&nbsp;&nbsp;<a href="/login">{{__('messages.sign_in_here')}}</a></p>
                        @endif
                        @foreach ($comments as $comment)
                        <!-- Comment-->
                        <div class="border-bottom mt-4 pt-2 pb-4">
                            <div class="d-flex align-items-center pb-1 mb-3">
                                <img style="object-fit: cover;" class="rounded-circle" src="{{$comment->user->photo_url}}" width="48" height="48" alt="{{$comment->user->display_name}}">
                                <div class="ps-3">
                                    <h6 class="mb-0">{{$comment->user->display_name}}</h6><span class="fs-sm text-muted">{{$comment->created_at}}</span>
                                </div>
                            </div>
                            <p class="pb-2 mb-0">{{$comment->text}}</p>
                            <div class="d-flex justify-content-start">
                                <button data-bs-toggle="collapse" href="#showReplies{{$comment->id}}" class="nav-link fs-sm fw-semibold pe-3 py-2" type="button">
                                    {{trans_choice('messages.replies_format', count($comment->replies), ['n' => count($comment->replies)])}}
                                </button>
                                <button data-bs-toggle="collapse" href="#replyCommentForm{{$comment->id}}" class="nav-link fs-sm fw-semibold px-0 py-2" type="button">
                                    {{__('messages.reply')}}
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="ms-2 ai ai-undo" viewBox="0 0 16 16">
                                        <path d="M6.598 5.013a.144.144 0 0 1 .202.134V6.3a.5.5 0 0 0 .5.5c.667 0 2.013.005 3.3.822.984.624 1.99 1.76 2.595 3.876-1.02-.983-2.185-1.516-3.205-1.799a8.74 8.74 0 0 0-1.921-.306 7.404 7.404 0 0 0-.798.008h-.013l-.005.001h-.001L7.3 9.9l-.05-.498a.5.5 0 0 0-.45.498v1.153c0 .108-.11.176-.202.134L2.614 8.254a.503.503 0 0 0-.042-.028.147.147 0 0 1 0-.252.499.499 0 0 0 .042-.028l3.984-2.933zM7.8 10.386c.068 0 .143.003.223.006.434.02 1.034.086 1.7.271 1.326.368 2.896 1.202 3.94 3.08a.5.5 0 0 0 .933-.305c-.464-3.71-1.886-5.662-3.46-6.66-1.245-.79-2.527-.942-3.336-.971v-.66a1.144 1.144 0 0 0-1.767-.96l-3.994 2.94a1.147 1.147 0 0 0 0 1.946l3.994 2.94a1.144 1.144 0 0 0 1.767-.96v-.667z" />
                                    </svg>
                                </button>
                            </div>

                            <div class="collapse" id="replyCommentForm{{$comment->id}}">
                                @if ($currentUser != null)
                                <div class="card card-body border-0 bg-secondary mt-4">
                                    @include('components.comment-form', array(
                                    'reply_comment_id' => $comment->id,
                                    'user' => $currentUser
                                    ))
                                </div>
                                @endif
                            </div>

                            <div class="collapse" id="showReplies{{$comment->id}}">
                                @foreach ($comment->replies as $reply)
                                <!-- Comment reply-->
                                <div class="card card-body border-0 bg-secondary mt-4">
                                    <div class="d-flex align-items-center pb-1 mb-3"><img class="rounded-circle" src="{{$comment->user->photo_url}}" width="48" alt="Comment author">
                                        <div class="ps-3">
                                            <h6 class="mb-0">{{$reply->user->display_name}}</h6><span class="fs-sm text-muted">{{$reply->user->created_at}}</span>
                                        </div>
                                    </div>
                                    <p class="mb-0"><a class="fw-bold text-decoration-none" href="{{ route('author', ['username' => $reply->user->username]) }}">@ {{$comment->user->username}}</a> {{$reply->text}}</p>
                                </div>
                                @endforeach
                            </div>

                        </div>
                        @endforeach

                        <!-- All comments button-->
                        <div @class([ "pb-5 mb-lg-1 mb-xl-3" , "d-flex justify-content-between"=> $comments->previousPageUrl() != null && $comments->nextPageUrl() != null,
                            "d-flex justify-content-start" => $comments->previousPageUrl() != null && $comments->nextPageUrl() == null,
                            "d-flex justify-content-end" => $comments->previousPageUrl() == null && $comments->nextPageUrl() != null
                            ])>
                            @if($comments->previousPageUrl() != null)
                            <a class="btn btn-link px-0" href="{{$comments->previousPageUrl()}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="fs-lg me-1 bi bi-chevron-left" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                                </svg>
                                Show newer comments
                            </a>
                            @endif
                            @if($comments->nextPageUrl() != null)
                            <a class="btn btn-link px-0" href="{{$comments->nextPageUrl()}}">
                                Show older comments
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="fs-lg ms-1 bi bi-chevron-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                </svg>
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
                <!-- Sidebar (offcanvas on sreens < 992px)-->
                <aside class="col-lg-3 offset-xl-1">
                    <div class="offcanvas-lg offcanvas-end" id="sidebar">
                        <div class="offcanvas-header">
                            <h4 class="offcanvas-title">{{__('messages.sidebar')}}</h4>
                            <button class="btn-close ms-auto" type="button" data-bs-dismiss="offcanvas" data-bs-target="#sidebar"></button>
                        </div>
                        <div class="offcanvas-body">

                            @if ($currentUser && $currentUser->canEdit($article))
                            <div class="mb-2 text-end">
                                <a href="{{route('edit') . '?section_uri=' . $article->section_uri . '&headline_uri=' . $article->headline_uri}}" class="btn btn-outline-secondary mb-3">{{__('messages.edit')}}</a>
                            </div>
                            @endif

                            <!-- Popular posts-->
                            <h4 class="pt-1 pt-lg-0 mt-lg-n2 serif fw-bolder fst-italic">{{__('messages.most_popular')}}</h4>
                            <div class="mb-lg-5 mb-4">
                                @foreach($trendingArticles->slice(0,3) as $article)
                                @include('components.article-list-item', array(
                                'article' => $article,
                                'section' => $article->localizedSection($section),
                                'style' => 'compact'
                                ))
                                @endforeach
                            </div>
                            <!-- Recent posts-->
                            <h4 class="pt-3 pt-lg-1 mb-4 serif fw-bolder fst-italic">{{__('messages.recent_articles')}}</h4>
                            <ul class="list-group list-group-flush list-unstyled mb-lg-5 mb-4">
                                @foreach ($recentArticles as $article)
                                @include('components.article-list-item', array(
                                'article' => $article,
                                'section' => $article->localizedSection($section),
                                'style' => 'compact'
                                ))
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </aside>
            </div>
        </section>
        <!-- Related articles (carousel) -->
        <section class="container py-5 mt-sm-2 my-md-4 my-xl-5">
            <div class="d-flex align-items-center pb-3 mb-3 mb-lg-4">
                <h1 class="serif fw-bolder fst-italic mb-0 me-4 fw-bold">{{__('messages.related_articles_header')}}</h1>
                <div class="d-flex ms-auto">
                    <button class="btn btn-prev btn-icon btn-sm btn-outline-primary rounded-circle me-3" type="button" id="prev-post" tabindex="0" aria-label="Previous slide" aria-controls="swiper-wrapper-ef03bba4ed6c9674">
                        <svg style="vertical-align: text-bottom" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                        </svg>
                    </button>
                    <button class="btn btn-next btn-icon btn-sm btn-outline-primary rounded-circle" type="button" id="next-post" tabindex="0" aria-label="Next slide" aria-controls="swiper-wrapper-ef03bba4ed6c9674">
                        <svg style="vertical-align: text-bottom" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                        </svg>
                    </button>
                </div>
            </div>
            @if (count($relatedArticles) === 0)
            <p>No related articles.</p>
            @else
            <div class="swiper">
                <div class="swiper-wrapper">
                    @foreach ($relatedArticles as $article)
                    <div class="swiper-slide">
                        @include('components.article-card', array(
                        'article' => $article,
                        'section' => $article->localizedSection($sections),
                        'style' => 'compact'
                        ))
                    </div>
                    @endforeach
                </div>
            </div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            @endif
        </section>
        <!-- Sidebar toggle button-->
        <button style="z-index: 1" class="d-lg-none btn btn-sm fs-sm btn-primary w-100 rounded-0 fixed-bottom" data-bs-toggle="offcanvas" data-bs-target="#sidebar">
            <i class="ai-layout-column me-2"></i>
            {{__('messages.sidebar')}}
        </button>
    </main>
    <!-- Footer -->
    @include('components.footer', array(
    'sections' => $sections
    ))

    <!-- Back to top button -->
    @include('components.back-top-btn')
    </div>

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