<!DOCTYPE html>
<html @class(['dark-mode' => $darkMode]) lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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

      <link rel="preconnect" href="https://fonts.gstatic.com">
      <!-- <link href="https://fonts.googleapis.com/css2?family=Vollkorn&display=swap" rel="stylesheet">-->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;1,900&display=swap" rel="stylesheet">

      <style>
      @font-face {
          font-family: "Chomsky";
          src: url("{{url('Chomsky.otf')}}");
      }

      .chomsky {
          font-family: "Chomsky";
      }
      </style>
      <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital@1&display=swap" rel="stylesheet">

      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

      <script src="{{ asset('js/app.js') }}" defer></script>

      <!-- Google tag (gtag.js) -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-W155VBDMQH"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-W155VBDMQH');
      </script>

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
          border-radius: 0.0rem !important;  // 1.25rem!important;
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
          border-radius: 0.0rem !important;  // 1.25rem!important;
        }
        .card-header {
          border-bottom: none;
        }
        .serif {
          font-family: 'Merriweather', serif;
        }
        .list-group-item {
          border-bottom: 1px dotted rgba(0,0,0,.125) !important;
        }
        .solid-last-line {
          border-bottom: 1px solid rgba(0,0,0,1.0) !important;
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
          overflow : hidden;
          text-overflow: ellipsis;
          display: -webkit-box;
          -webkit-box-orient: vertical;
        }
        .crop-text-2 {
          -webkit-line-clamp: 2;
          overflow : hidden;
          text-overflow: ellipsis;
          display: -webkit-box;
          -webkit-box-orient: vertical;
        }
        .crop-text-3 {
          -webkit-line-clamp: 3;
          overflow : hidden;
          text-overflow: ellipsis;
          display: -webkit-box;
          -webkit-box-orient: vertical;
        }
        .crop-text-4 {
          -webkit-line-clamp: 4;
          overflow : hidden;
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

        @media (min-width: 1200px) {

        }

        @media (min-width: 1400px) {

        }

        .aa-DetachedSearchButton {
          border: 0 !important;
        }

        .aa-DetachedSearchButtonIcon {
          color: rgba(0,0,0,1.0) !important;
        }

        .aa-DetachedSearchButtonPlaceholder {
          display: none !important;
        }
      </style>
      <link rel="stylesheet" href="/css/app.css">

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
        <section class="container pt-3 mt-2">
          <!-- Breadcrumb-->
          <nav aria-label="breadcrumb">
            <ol class="pt-lg-3 pb-lg-4 pb-2 breadcrumb">
              <li class="breadcrumb-item"><a href="/">Frontpage</a></li>
              <li class="breadcrumb-item"><a href="{{ route('section', ['section' => $section->uri]) }}">{{$section->name}}</a></li>
              <li class="breadcrumb-item active" aria-current="page">Article</li>
            </ol>
          </nav>
          <div class="row">
            <div class="col-lg-9 col-xl-8 pe-lg-4 pe-xl-0">
              <!-- Post title + post meta-->
              <h1 class="pb-2 pb-lg-3 serif fw-bold fst-italic">{{$article->headline}}</h1>
              <div class="d-flex flex-wrap align-items-center justify-content-between border-bottom mb-4">
                <div class="d-flex align-items-center mb-4 me-4">
                  <span class="fs-sm me-2">By:</span>
                  <a class="nav-link position-relative fw-semibold p-0" href="#author" data-scroll="" data-scroll-offset="80">{{$article->author->display_name}}
                    <span class="d-block position-absolute start-0 bottom-0 w-100" style="background-color: currentColor; height: 1px;"></span>
                  </a>
                </div>
                <div class="d-flex align-items-center mb-4"><span class="fs-sm me-2">Share article:</span>
                  <div class="d-flex"><a class="nav-link p-2 me-2" href="#" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Instagram" data-bs-original-title="Instagram"><i class="ai-instagram"></i></a><a class="nav-link p-2 me-2" href="#" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Facebook" data-bs-original-title="Facebook"><i class="ai-facebook"></i></a><a class="nav-link p-2 me-2" href="#" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Telegram" data-bs-original-title="Telegram"><i class="ai-telegram fs-sm"></i></a><a class="nav-link p-2" href="#" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Twitter" data-bs-original-title="Twitter"><i class="ai-twitter"></i></a></div>
                </div>
              </div>
              <!-- Post content-->
              @if ($article->video_embed)
              <figure class="figure w-100">
                <div class="ratio ratio-{{$article->video_ratio}}">
                  {!! $article->video_embed !!}
                </div>
              </figure>
              @endif

              <div id="article-body" class="serif">
                {!! $body !!}
              </div>
              <!-- Author widget-->
              <div class="border-top border-bottom py-4" id="author">
                <div class="d-flex align-items-start py-2">
                  <img style="object-fit: cover; width: 56px; height: 56px;" class="d-block rounded-circle mb-3" src="{{$article->author->photo_url}}" width="56" alt="Author image">
                  <div class="d-md-flex w-100 ps-4">
                    <div style="max-width: 26rem;">
                      <h3 class="h5 mb-2">{{$article->author->display_name}}</h3>
                      <p class="fs-sm mb-0">{{$article->author->bio ?? 'No bio.'}}</p>
                    </div>
                    <div class="pt-4 pt-md-0 ps-md-4 ms-md-auto">
                      <h3 class="h5">Share article:</h3>
                      <div class="d-flex"><a class="nav-link p-2 me-2" href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="Instagram" data-bs-original-title="Instagram"><i class="ai-instagram"></i></a><a class="nav-link p-2 me-2" href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="Facebook" data-bs-original-title="Facebook"><i class="ai-facebook"></i></a><a class="nav-link p-2 me-2" href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="Telegram" data-bs-original-title="Telegram"><i class="ai-telegram fs-sm"></i></a><a class="nav-link p-2" href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="Twitter" data-bs-original-title="Twitter"><i class="ai-twitter"></i></a></div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Comments-->
              <div class="pt-4 pt-xl-5 mt-4" id="comments">
              @if ($article->comment_count >= 0)
                <h2 class="fst-italic serif h1 py-lg-1 py-xl-3">{{trans_choice('messages.comments_format', $article->comment_count, ['n' => $article->comment_count])}}</h2>
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
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="ms-2 bi bi-reply" viewBox="0 0 16 16">
                        <path d="M6.598 5.013a.144.144 0 0 1 .202.134V6.3a.5.5 0 0 0 .5.5c.667 0 2.013.005 3.3.822.984.624 1.99 1.76 2.595 3.876-1.02-.983-2.185-1.516-3.205-1.799a8.74 8.74 0 0 0-1.921-.306 7.404 7.404 0 0 0-.798.008h-.013l-.005.001h-.001L7.3 9.9l-.05-.498a.5.5 0 0 0-.45.498v1.153c0 .108-.11.176-.202.134L2.614 8.254a.503.503 0 0 0-.042-.028.147.147 0 0 1 0-.252.499.499 0 0 0 .042-.028l3.984-2.933zM7.8 10.386c.068 0 .143.003.223.006.434.02 1.034.086 1.7.271 1.326.368 2.896 1.202 3.94 3.08a.5.5 0 0 0 .933-.305c-.464-3.71-1.886-5.662-3.46-6.66-1.245-.79-2.527-.942-3.336-.971v-.66a1.144 1.144 0 0 0-1.767-.96l-3.994 2.94a1.147 1.147 0 0 0 0 1.946l3.994 2.94a1.144 1.144 0 0 0 1.767-.96v-.667z"/>
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
              <div @class([
                "pb-5 mb-lg-1 mb-xl-3",
                "d-flex justify-content-between" => $comments->previousPageUrl() != null && $comments->nextPageUrl() != null,
                "d-flex justify-content-start" => $comments->previousPageUrl() != null && $comments->nextPageUrl() == null,
                "d-flex justify-content-end" => $comments->previousPageUrl() == null && $comments->nextPageUrl() != null
              ])>
                @if($comments->previousPageUrl() != null)
                  <a class="btn btn-link px-0" href="{{$comments->previousPageUrl()}}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="fs-lg me-1 bi bi-chevron-left" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                    </svg>
                    Show newer comments
                  </a>
                @endif
                @if($comments->nextPageUrl() != null)
                  <a class="btn btn-link px-0" href="{{$comments->nextPageUrl()}}">
                    Show older comments 
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="fs-lg ms-1 bi bi-chevron-right" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
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
                  <h4 class="offcanvas-title">Sidebar</h4>
                  <button class="btn-close ms-auto" type="button" data-bs-dismiss="offcanvas" data-bs-target="#sidebar"></button>
                </div>
                <div class="offcanvas-body">
                  <!-- Popular posts-->
                  <h4 class="pt-1 pt-lg-0 mt-lg-n2 serif fst-italic">{{__('messages.most_popular')}}</h4>
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
                  <h4 class="pt-3 pt-lg-1 mb-4 serif fst-italic">{{__('messages.recent_articles')}}</h4>
                  <ul class="list-group list-group-flush list-unstyled mb-lg-5 mb-4">
                    @foreach ($recentArticles as $article)
                      @include('components.article-list-item', array(
                        'article' => $article,
                        'section' => $article->localizedSection($section),
                        'style' => 'compact'
                      ))
                    @endforeach
                  </ul>
                  <!-- Relevant topics-->
                  <h4 class="pt-3 pt-lg-1 mb-4 serif fst-italic">{{__('messages.relevant_topics')}}</h4>
                  <div class="d-flex flex-wrap mt-n3 ms-n3 mb-lg-5 mb-4 pb-3 pb-lg-0">
                      @foreach(explode(",", $article->keywords) as $index => $keyword)
                        <a @class([
                          'btn btn-outline-secondary rounded-pill mt-3',
                          'ms-3' => $index > 0
                        ]) href="/topic/{{$keyword}}">
                          {{$keyword}}
                        </a>
                      @endforeach
                  </div>
                </div>
              </div>
            </aside>
          </div>
        </section>
        <!-- Related articles (carousel) -->
        <section class="container py-5 mt-sm-2 my-md-4 my-xl-5">
          <div class="d-flex align-items-center pb-3 mb-3 mb-lg-4">
              <h1 class="serif fst-italic mb-0 me-4 fw-bold">{{__('messages.related_articles_header')}}</h1>
              <div class="d-flex ms-auto">
                <button class="btn btn-prev btn-icon btn-sm btn-outline-primary rounded-circle me-3" type="button" id="prev-post" tabindex="0" aria-label="Previous slide" aria-controls="swiper-wrapper-ef03bba4ed6c9674">
                  <svg style="vertical-align: text-bottom" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                  </svg>
                </button>
                <button class="btn btn-next btn-icon btn-sm btn-outline-primary rounded-circle" type="button" id="next-post" tabindex="0" aria-label="Next slide" aria-controls="swiper-wrapper-ef03bba4ed6c9674">
                  <svg style="vertical-align: text-bottom" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
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
        <button class="d-lg-none btn btn-sm fs-sm btn-primary w-100 rounded-0 fixed-bottom" data-bs-toggle="offcanvas" data-bs-target="#sidebar"><i class="ai-layout-column me-2"></i>Sidebar</button>
      </main>
      <!-- Footer -->
      @include('components.footer', array(
        'sections' => $sections
      ))
    </div>

      <!-- Optional JavaScript; choose one of the two! -->
      <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@algolia/autocomplete-js"></script>

      <script src="/js/darkmode.js" defer></script>

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
            "576": { "slidesPerView": 2 },
            "1000": { "slidesPerView": 4 }
          }
        });
        let speech = new SpeechSynthesisUtterance();
        speech.lang = "en";
        speech.volume = 1.0;
        speech.pitch = 1.0;
        speech.rate = 1.0;
        speech.text = "This is a point in the evolution of the planet that brings to the forefront of each individual’s thoughts the question of why me, why now and what is really going on in the reality that is right now in the time we are experiencing.";
        let voices = [];
        window.speechSynthesis.onvoiceschanged = () => {
          voices = window.speechSynthesis.getVoices();
          let voiceSelect = document.querySelector("#voices");
          voices.forEach((voice, i) => (voiceSelect.options[i] = new Option(voice.name, i)));
        };
        const articleListenToggleBtn = document.getElementById('article-listen-toggle-btn');
        const articleListenStopBtn = document.getElementById('article-listen-stop-btn');

        const playIcon = '<svg style="vertical-align: text-bottom" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="ai-play-fill" viewBox="0 0 16 16"><path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/></svg>';
        const pauseIcon = '<svg style="vertical-align: text-bottom" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="ai-pause-fill" viewBox="0 0 16 16"><path d="M5.5 3.5A1.5 1.5 0 0 1 7 5v6a1.5 1.5 0 0 1-3 0V5a1.5 1.5 0 0 1 1.5-1.5zm5 0A1.5 1.5 0 0 1 12 5v6a1.5 1.5 0 0 1-3 0V5a1.5 1.5 0 0 1 1.5-1.5z"/></svg>';

        articleListenToggleBtn.addEventListener("click", () => {
          if (window.speechSynthesis.speaking == false) {
            window.speechSynthesis.speak(speech);
            articleListenToggleBtn.innerHTML = pauseIcon;
          } else {
            if (window.speechSynthesis.paused == false) {
              articleListenToggleBtn.innerHTML = playIcon;
              window.speechSynthesis.pause();
            } else {
              articleListenToggleBtn.innerHTML = pauseIcon;
              window.speechSynthesis.resume();
            }
          }
        });

        articleListenStopBtn.addEventListener("click", () => {
          articleListenToggleBtn.innerHTML = playIcon;
          window.speechSynthesis.stop();
        })
      </script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </body>
</html>
