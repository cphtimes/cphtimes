<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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

      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=UnifrakturMaguntia&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital@1&display=swap" rel="stylesheet">

      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@algolia/autocomplete-theme-classic"/>

      <script src="{{ asset('js/app.js') }}"></script>

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
      <title>{!! $article->headline !!} - The Copenhagen Gates</title>
    </head>
    <body class="antialiased">
      <main class="main">
        <nav class="d-none sticky-top navbar shadow-sm">
          <div class="d-flex justify-content-center container">
            <div class="text-center">
              <a class="navbar-brand" href="#">
                <span class="serif">
                  What we know thus far: Wuhan virus (Covid-19) |
                </span>
                <span style="font-family: 'UnifrakturMaguntia', cursive; font-size: 1.8rem;">The Copenhagen Gates</span>
              </a>
            </div>
          </div>
        </nav>

        <div class="d-none alert alert-primary rounded-0 border-0" role="alert">
          Live online, today at 9 AM CEST.
        </div>

        <nav class="sticky-top navbar navbar-stuck">
          <div class="d-flex justify-content-between container-fluid">
            <div class="d-block d-lg-none">
              <button class="btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <div class="d-flex align-items-center justify-content-center" style="font-size: 1.2em">
                  <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-list text-black" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                  </svg>
                </div>
              </button>
            </div>
            <div class="d-none d-lg-block dropdown">
              <a href="#" role="button" class="btn btn-link nav-link" id="dropdownShareMenu" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="d-flex align-items-center justify-content-center" style="font-size: 1.2em">
                  <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                  </svg>
                </div>
              </a>
              <ul class="dropdown-menu dropdown-menu-macos mx-0 shadow" aria-labelledby="dropdownShareMenu">
                <li>
                  <a class="dropdown-item" aria-current="page" href="/">Frontpage</a>
                </li>
                <li>
                  <a class="dropdown-item" aria-current="page" href="/section/world">World</a>
                </li>
                <li>
                  <a class="dropdown-item" aria-current="page" href="/section/world">Health</a>
                </li>
                <li>
                  <a class="dropdown-item" aria-current="page" href="/section/world">Media</a>
                </li>
                <li>
                  <a class="dropdown-item" aria-current="page" href="/section/world">Technology</a>
                </li>
                <li>
                  <a class="dropdown-item" aria-current="page" href="/section/world">Culture</a>
                </li>
                <li>
                  <a class="dropdown-item" aria-current="page" href="/section/world">Business</a>
                </li>
                <li>
                  <a class="dropdown-item" aria-current="page" href="/section/world">Politics</a>
                </li>
                <li>
                  <a class="dropdown-item" aria-current="page" href="/section/world">Oppinion</a>
                </li>
                <li>
                  <a class="dropdown-item" aria-current="page" href="/section/world">Science</a>
                </li>
                <li>
                  <a class="dropdown-item" aria-current="page" href="/section/world">National</a>
                </li>
                <li>
                  <a class="dropdown-item" aria-current="page" href="/section/world">Travel</a>
                </li>
                <li>
                  <a class="dropdown-item" aria-current="page" href="/section/world">Style</a>
                </li>
              </ul>
            </div>

            <div class="text-center">
              <a class="navbar-brand d-md-none" href="/">
                <span style="font-family: 'UnifrakturMaguntia', cursive; font-size: 1.5rem;">C</span>
              </a>
              <a class="navbar-brand d-none d-md-block" href="/">
                <span style="font-family: 'UnifrakturMaguntia', cursive; font-size: 1.5rem;"> The Copenhagen Gates</span>
              </a>
            </div>
            <div>
              <div id="autocomplete"></div>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="/">Frontpage</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="/section/world">World</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="/section/world">Health</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="/section/world">Media</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="/section/world">Technology</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="/section/world">Culture</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="/section/world">Business</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="/section/world">Politics</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="/section/world">Oppinion</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="/section/world">Science</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="/section/world">National</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="/section/world">Travel</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="/section/world">Style</a>
                </li>
              </ul>
              <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group me-2" role="group" aria-label="First group">
                  <a type="button btn-primary" role="button" href="/subscribe" class="btn btn-primary">Subscribe</a>
                </div>
                <div class="btn-group me-2" role="group" aria-label="Second group">
                  <a type="button btn-primary" role="button" href="/subscribe" class="btn btn-primary">Log in</a>
                </div>
              </div>
            </div>
          </div>
        </nav>

        <div class="container pb-5 my-md-2 my-lg-3 my-xl-4">
          <div class="row">
            <div class="col-lg-9 col-xl-8 pe-lg-4 pe-xl-0">
              <small class="text-uppercase mb-3">
                <strong>{!! $article->article_section !!}</strong>
              </small>
              <h1 class="my-3 serif fw-bold fst-italic">{!! $article->headline !!}</h1>
              <figure class="d-none">
                <audio class="w-100" controls="" src="https://firebasestorage.googleapis.com/v0/b/the-copenhagen-gates.appspot.com/o/why-the-worst-get-on-top.mp3?alt=media&token=40c18fff-fcdf-491d-a9fe-069570f6f399"></audio>
              </figure>
              <p class="fw-bold serif lh-lg mb-4">{!! $article->abstract !!}</p>
              <div class="d-flex flex-wrap align-items-center justify-content-between border-bottom mb-4">
                <div class="d-flex align-items-center mb-4 me-4"><span class="fs-sm me-2">By:</span><a class="nav-link position-relative fw-semibold p-0" href="#author" data-scroll="" data-scroll-offset="80">{!! $article->author!!}<span class="d-block position-absolute start-0 bottom-0 w-100" style="background-color: currentColor; height: 1px;"></span></a> <span class="d-none"> at {!! $article->date_published !!}</span></div>
              </div>
              <figure class="figure w-100">
                @if ($article->media_embed)
                  <div class="ratio ratio-16x9">
                    {!! $article->media_embed !!}
                  </div>
                @else
                  <img class="figure-img" style="object-fit: cover;" height="100%" width="100%" src="{!! $article->thumbnail_url !!}"/>
                  <figcaption class="figure-caption">A caption for the above image.</figcaption>
                @endif
              </figure>

              <!-- Check if article should be readable out loud? bool -->
              <div class="py-5 d-flex justify-content-start align-items-center">
                <div class="me-2">
                  <button id="article-listen-toggle-btn" style="width: 48px; height: 48px" class="btn rounded-circle btn-dark me-1">
                    <svg style="vertical-align: text-bottom" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16">
                      <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/>
                    </svg>
                  </button>
                </div>
                <div class="me-auto">
                  <p class="mb-0">Listen to the article</p>
                </div>
                <div>
                  <button id="article-listen-stop-btn" style="width: 48px; height: 48px" class="d-none btn rounded-circle btn-outline-dark">
                    <svg style="vertical-align: text-bottom" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                      <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                  </button>
                </div>
              </div>

              {!! $article->article_body !!}

              <div class="d-flex flex-wrap pt-3 pt-md-4 pt-xl-5 mt-xl-n2">
                <h3 class="h6 py-1 mb-0 me-4">Relevant tags:</h3><a class="nav-link fs-sm py-1 px-0 me-3" href="#"><span class="text-primary">#</span>Nature</a><a class="nav-link fs-sm py-1 px-0 me-3" href="#"><span class="text-primary">#</span>Books</a><a class="nav-link fs-sm py-1 px-0 me-3" href="#"><span class="text-primary">#</span>Travel</a>
              </div>

              <footer class="d-none pt-3">
                <div class="d-none d-mb-block">
                  <div class="d-flex justify-content-between py-4 my-4 border-top">
                    <p>© 2021 Copenhagen Gates. All rights reserved.</p>
                    <ul class="list-unstyled d-flex">
                      <li class=""><a class="link-dark" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
                          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/>
                        </svg>
                      </a></li>
                      <li class=""><a class="link-dark" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                          <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                        </svg>
                      </a></li>
                      <li class=""><a class="link-dark" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                          <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                        </svg>
                      </a></li>
                    </ul>
                  </div>
                </div>

                <div class="d-none">
                  <div class="d-flex flex-column align-items-center justify-content-center py-4 mt-4 border-top">
                    <p class="text-center">© 2021 Copenhagen Gates. All rights reserved.</p>
                    <ul class="list-unstyled d-flex">
                      <li class="ms-3"><a class="link-dark" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
                          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/>
                        </svg>
                      </a></li>
                      <li class="ms-3"><a class="link-dark" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                          <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                        </svg>
                      </a></li>
                      <li class="ms-3"><a class="link-dark" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                          <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                        </svg>
                      </a></li>
                    </ul>
                  </div>
                </div>
              </footer>
            </div>
            <aside class="col-lg-3 offset-xl-1 pt-4 pt-lg-0" style="margin-top: -7rem;">
            <div class="position-sticky top-0 mt-2 mt-md-3 mt-lg-0" style="padding-top: 7rem;">
              <!-- Sharing-->
              <h5 class="mb-2 serif fst-italic">Share this article:</h5>
              <div class="mb-lg-5 mb-4 pb-3 pb-lg-0">
                <a style="width: 34px; height: 34px" class="btn btn-outline-secondary btn-icon btn-sm btn-instagram rounded-circle mt-3" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                  </svg>
                </a>
                <a style="width: 34px; height: 34px" class="btn btn-outline-secondary btn-icon btn-sm btn-facebook rounded-circle mt-3 ms-3" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                  </svg>
                </a>
                <a style="width: 34px; height: 34px" class="btn btn-outline-secondary btn-icon btn-sm btn-telegram rounded-circle mt-3 ms-3" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/>
                  </svg>
                </a>
                <a style="width: 34px; height: 34px" class="btn btn-outline-secondary btn-icon btn-sm btn-twitter rounded-circle mt-3 ms-3" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                  </svg>
                </a>
              </div>
              <!-- Relevant topics-->
              <h5 class="pt-xl-1 mb-2 serif fst-italic">Relevant topics:</h5>
              <div class="d-flex flex-wrap mb-lg-5 mb-4 pb-3 pb-lg-0"><a class="btn btn-outline-secondary rounded-pill mt-3 ms-0" href="#">Nature</a><a class="btn btn-outline-secondary rounded-pill mt-3 ms-3" href="#">Inspiration</a><a class="btn btn-outline-secondary rounded-pill mt-3 ms-3" href="#">Travel</a><a class="btn btn-outline-secondary rounded-pill mt-3 ms-0" href="#">Psychology</a></div>
              <!-- Trending articles-->
              <h5 class="pt-xl-1 mb-2 serif fst-italic">Trending articles:</h5>
              <ul class="list-unstyled mb-0">
                @foreach (array_slice($world,0,5) as $update)
                  <li class="list-group-item py-3 px-4 px-md-0 border-0 border-dashed">
                    <a class="nav-link w-100" href="{{ url(sprintf("/%s/%s/%s/%s/%s", date('Y', strtotime($update['date_published'])), date('m', strtotime($update['date_published'])), date('d', strtotime($update['date_published'])), $update['article_section'], $update['headline_dashed'])) }}">
                      <div class="article-body w-50 flex-grow-1 ms-0 pe-3">
                        <div class="d-flex w-100 justify-content-between mb-2">
                          <small class="text-uppercase"><b>{{$update['article_section']}}</b></small>
                          <small class="text-uppercase opacity-50">{{ str_replace(' ', '', str_replace(['hours', 'minutes', 'seconds', 'days', 'weeks', 'months', 'years'], ['h', 'm', 's', 'd', 'w', 'm', 'y'], \Carbon\Carbon::parse($update['date_published'])->diffForHumans(null, true))) }}</small>
                        </div>
                        <div class="d-block">
                          <h6 class="article-title w-100 fw-light mb-0 crop-text-2">{{$update['headline']}}</h6>
                        </div>
                      </div>
                      <div class="w-25 flex-shrink-0 align-self-center">
                        <img id="latest-update-thumbnail" style="object-fit: cover; width: 75px; height: 75px" src="{!! $update['thumbnail_url'] !!}" alt="...">
                      </div>
                    </a>
                  </li>
                @endforeach
              </ul>
            </div>
          </aside>
          </div>
        </div>

        <!-- Comments -->
        <section class="container pt-xl-2 pb-5 mb-md-2 mb-lg-4 mb-xl-5" id="comments">
          <div class="border-top border-bottom">
            <!-- Comments collapse-->
            <div class="collapse" id="commentsCollapse" style="max-width: 54rem;">
              <!-- Comment-->
              <div class="border-bottom py-4 mt-2 mb-4">
                <div class="d-flex align-items-center pb-1 mb-3"><img class="rounded-circle" src="assets/img/avatar/08.jpg" width="48" alt="Comment author">
                  <div class="ps-3">
                    <h6 class="mb-0">Albert Flores</h6><span class="fs-sm text-muted">5 hours ago</span>
                  </div>
                </div>
                <p class="pb-2 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tellus lectus, tempus eu urna eu, imperdiet dignissim augue. Aliquam fermentum est a ligula bibendum, ac gravida ipsum dictum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur suscipit quam ut velit condimentum, nec mollis risus semper. Curabitur quis mauris eget ligula tincidunt venenatis. Sed congue pulvinar hendrerit.</p>
                <button class="btn btn-link fs-sm fw-semibold px-0 py-2" type="button">Reply<i class="ai-redo fs-xl ms-2"></i></button>
              </div>
              <!-- Comment-->
              <div class="border-bottom pt-2 pb-4">
                <div class="d-flex align-items-center pb-1 mb-3"><img class="rounded-circle" src="assets/img/avatar/11.jpg" width="48" alt="Comment author">
                  <div class="ps-3">
                    <h6 class="mb-0">Jenny Wilson</h6><span class="fs-sm text-muted">2 days ago at 9:20</span>
                  </div>
                </div>
                <p class="pb-2 mb-0">Pellentesque urna pharetra, quis maecenas. Sit dolor amet nulla aenean eu, ac. Nisl mi tempus, iaculis viverra vestibulum scelerisque imperdiet montes mauris massa elit pretium elementum eget tortor quis</p>
                <button class="btn btn-link fs-sm fw-semibold px-0 py-2" type="button">Reply<i class="ai-redo fs-xl ms-2"></i></button>
                <!-- Comment reply-->
                <div class="card card-body border-0 bg-secondary mt-4">
                  <div class="d-flex align-items-center pb-1 mb-3"><img class="rounded-circle" src="assets/img/avatar/10.jpg" width="48" alt="Comment author">
                    <div class="ps-3">
                      <h6 class="mb-0">Ralph Edwards</h6><span class="fs-sm text-muted">2 days ago at 11:45</span>
                    </div>
                  </div>
                  <p class="mb-0"><a class="fw-bold text-decoration-none" href="#">@Jenny Wilson</a> Massa morbi duis et ornare urna dictum vestibulum pulvinar nunc facilisis ornare id at at ut arcu integer tristique placerat non turpis nibh turpis ullamcorper est porttitor.</p>
                </div>
              </div>
              <!-- Comment-->
              <div class="pt-4 mt-2 mb-2">
                <div class="d-flex align-items-center pb-1 mb-3"><img class="rounded-circle" src="assets/img/avatar/07.jpg" width="48" alt="Comment author">
                  <div class="ps-3">
                    <h6 class="mb-0">Esther Howard</h6><span class="fs-sm text-muted">May 19, 2022</span>
                  </div>
                </div>
                <p class="pb-2 mb-0">Donec et sollicitudin tellus. Duis maximus, dui eget egestas mattis, purus ex tempor nulla, quis tempor sapien neque at nisl. Aliquam eu nisi ut nisl ultrices posuere. Praesent dignissim efficitur nisi, a hendrerit ipsum elementum sit amet. Vivamus non ante nisl. Nunc faucibus velit at eros mollis semper.</p>
                <button class="btn btn-link fs-sm fw-semibold px-0 py-2" type="button">Reply<i class="ai-redo fs-xl ms-2"></i></button>
              </div>
            </div>
            <!-- Comments toggle-->
            <div class="nav">
              <button class="btn btn-more w-100 justify-content-center p-3 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#commentsCollapse" aria-expanded="false" aria-controls="commentsCollapse" data-show-label="Show all comments" data-hide-label="Hide all comments"><span class="fw-normal opacity-70 ms-1">Show all comments (4)</span></button>
            </div>
          </div>
        </section>

        <!-- Related Articles -->
        <section class="container pt-2 pt-sm-3 pb-5 mb-md-3 mb-lg-4 mb-xl-5">
          <div class="d-flex align-items-center pb-3 mb-3 mb-lg-4">
            <h1 class="mb-0 me-4 fw-bold">Related articles</h1>
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
          <div class="swiper">
            <div class="swiper-wrapper">
              @foreach (array_slice($world,0,5) as $update)
                <div class="swiper-slide">
                  <a href="{{ url(sprintf("/%s/%s/%s/%s/%s", date('Y', strtotime($update['date_published'])), date('m', strtotime($update['date_published'])), date('d', strtotime($update['date_published'])), $update['article_section'], $update['headline_dashed'])) }}">
                    <article class="card border-0">
                      <img style="object-fit: cover;" width="100%" height="199px" src="{!! $update['thumbnail_url'] !!}" alt="..." class="">
                      <div class="article-body card-body px-0 pb-0">
                        <p><small class="text-uppercase text-dark"><b>{{$update['article_section']}}</b></small></p>
                        <h5 class="article-title card-title fw-light crop-text-2">{{$update['headline']}}</h5>
                        <p class="opacity-50 crop-text-4">{{$update['abstract']}}</p>
                      </div>
                    </article>
                  </a>
                </div>
              @endforeach
            </div>
          </div>
          <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
        </section>
      </main>

      <!-- Subscription -->
      <div class="text-white dark-mode container mb-2 mb-md-3 mb-xl-4 pb-2">
      <div class="position-relative bg-dark rounded rounded-5 overflow-hidden p-md-5 p-4">
        <div class="position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(255, 255, 255, .02);"></div>
        <div class="position-relative p-xl-5 p-md-4 py-4 px-sm-3">
          <h2 class="h1 pb-md-4 pb-3 mt-n2">Stay up to date with important news!</h2>
          <div class="row gy-md-5 gy-4 gx-xl-5">
            <div class="col-lg-7">
              <div class="row row-cols-sm-3 row-cols-2 gy-lg-4 gy-3 gx-xl-4 gx-sm-3 gx-2">
                <div class="col">
                  <div class="form-check mb-0">
                    <label class="form-check-label fs-base fw-medium" for="advert-updates">Advertising Updates</label>
                    <input class="form-check-input" id="advert-updates" type="checkbox" checked="">
                  </div>
                </div>
                <div class="col">
                  <div class="form-check mb-0">
                    <label class="form-check-label fs-base fw-medium" for="newsletter">Daily Newsletter</label>
                    <input class="form-check-input" id="newsletter" type="checkbox">
                  </div>
                </div>
                <div class="col">
                  <div class="form-check mb-0">
                    <label class="form-check-label fs-base fw-medium" for="week-in-review">Week in Review</label>
                    <input class="form-check-input" id="week-in-review" type="checkbox">
                  </div>
                </div>
                <div class="col">
                  <div class="form-check mb-0">
                    <label class="form-check-label fs-base fw-medium" for="inspiration">Inspiration</label>
                    <input class="form-check-input" id="inspiration" type="checkbox">
                  </div>
                </div>
                <div class="col">
                  <div class="form-check mb-0">
                    <label class="form-check-label fs-base fw-medium" for="psychology">Psychology</label>
                    <input class="form-check-input" id="psychology" type="checkbox">
                  </div>
                </div>
                <div class="col">
                  <div class="form-check mb-0">
                    <label class="form-check-label fs-base fw-medium" for="design">Design</label>
                    <input class="form-check-input" id="design" type="checkbox" checked="">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="input-group rounded-pill">
                <input class="form-control" type="text" placeholder="Your email">
                <button class="btn btn-primary" type="button">Subscribe</button>
              </div>
              <div class="form-text mt-3 fs-sm">* Yes, I agree to the <a href="#">terms</a> and <a href="#">privacy policy</a></div>
            </div>
          </div>
        </div>
      </div>

      <div class="pt-4 mt-md-5 pt-md-4 border-top border-2 container">
        <footer class="pt-3">
          <!-- <a style="font-family: 'UnifrakturMaguntia', cursive; font-size: 1.8rem;" class="navbar-brand" href="#">The Copenhagen Gates</a>-->
          <div class="row px-md-3">
            <div class="col-6 col-md-4 col-lg-2 px-4 px-md-0">
              <h5 class="serif fst-italic">News</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Homepage</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">World</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Health</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Media</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Technology</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Culture</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Business</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Politics</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Opinion</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Science</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">National</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Style</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Travel</a></li>
              </ul>
            </div>

            <div class="col-6 col-md-4 col-lg-2 px-4 px-md-0">
              <h5 class="serif fst-italic">Links</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a target="_blank" href="https://home.solari.com/" class="nav-link p-0 text-muted">Solari Report</a></li>
                <li class="nav-item mb-2"><a target="_blank" href="https://www.ukcolumn.org/" class="nav-link p-0 text-muted">UK Column</a></li>
                <li class="nav-item mb-2"><a target="_blank" href="https://www.oraclefilms.com/" class="nav-link p-0 text-muted">Oracle Films</a></li>
                <li class="nav-item mb-2"><a target="_blank" href="https://worldfreedomalliance.org/" class="nav-link p-0 text-muted">World Freedom Alliance</a></li>
                <li class="nav-item mb-2"><a target="_blank" href="https://doctors4covidethics.org/" class="nav-link p-0 text-muted">Doctors for Covid Ethics</a></li>
                <li class="nav-item mb-2"><a target="_blank" href="https://childrenshealthdefense.org/" class="nav-link p-0 text-muted">Childrens Health Defense</a></li>
                <li class="nav-item mb-2"><a target="_blank" href="https://americasfrontlinedoctors.org/" class="nav-link p-0 text-muted">American Frontline Doctors</a></li>
                <li class="nav-item mb-2"><a target="_blank" href="https://covid19criticalcare.com/" class="nav-link p-0 text-muted">FLCCC</a></li>
                <li class="nav-item mb-2"><a target="_blank" href="https://www.stopworldcontrol.com/" class="nav-link p-0 text-muted">Stop World Control</a></li>
                <li class="nav-item mb-2"><a target="_blank" href="https://perbraendgaard.dk/" class="nav-link p-0 text-muted">Per Brændgaard</a></li>
                <li class="nav-item mb-2"><a target="_blank" href="https://vernoncoleman.org/" class="nav-link p-0 text-muted">Dr. Vernon Coleman</a></li>
                <li class="nav-item mb-2"><a target="_blank" href="https://www.redvoicemedia.com/stew-peters-show/" class="nav-link p-0 text-muted">The Stew Peters Show</a></li>
                <li class="nav-item mb-2"><a target="_blank" href="https://planetlockdownfilm.com/" class="nav-link p-0 text-muted">Planet Lockdown</a></li>
                <li class="nav-item mb-2"><a target="_blank" href="https://thelightpaper.co.uk/" class="nav-link p-0 text-muted">The Light</a></li>
              </ul>
            </div>

            <!--
            <div class="col-2">
              <h5>Communities</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">World Freedom Alliance</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Doctors for Covid Ethics</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Childrens Health Defense</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">American Frontline Doctors</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FLCCC</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">StopWorldControl</a></li>
              </ul>
            </div>
            -->

            <div class="col-6 col-md-4 col-lg-2 px-4 px-md-0">
              <h5 class="serif fst-italic">More</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Tips</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Censorship</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Manage my account</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Funding</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
              </ul>
            </div>

            <div class="d-none d-lg-block col-12 col-md-8 col-lg-4 offset-0 offset-lg-1"> <!-- border-start ps-4 -->
              <form action="https://cphgates.us20.list-manage.com/subscribe/post?u=e71c47511b5e02967960e85f4&amp;id=e1415b6230" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="">
                <h5 class="serif fst-italic">Subscribe to our newsletter</h5>
                <p>Monthly digest of whats new and exciting from us.</p>
                <div class="d-flex w-100 gap-2">
                  <label for="newsletter1" class="visually-hidden">Email address</label>
                  <input type="email" value="" name="EMAIL" class="required email form-control" id="mce-EMAIL" placeholder="Email address" required="">
                  <button type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn btn-primary">Subscribe</button>
                </div>
              </form>

              <!-- <div>
                <iframe src="https://t.me/s/folkepartiet?embed=1"></iframe>
              </div> -->
            </div>
          </div>

          <div class="row d-none d-md-block px-md-3">
            <div class="d-flex justify-content-between py-4 my-4 border-top px-0">
              <p>© 2021 Copenhagen Gates. All rights reserved.</p>
              <ul class="list-unstyled d-flex">
                <li class="ms-3"><a class="nav-link" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"></path>
                  </svg>
                </a></li>
                <li class="ms-3"><a class="nav-link" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                  </svg>
                </a></li>
                <li class="ms-3"><a class="nav-link" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                  </svg>
                </a></li>
              </ul>
            </div>
          </div>

          <div class="row d-block d-md-none">
            <div class="d-flex flex-column align-items-center justify-content-center py-4 mt-4 border-top px-4">
              <p class="text-center">© 2021 Copenhagen Gates. All rights reserved.</p>
              <ul class="list-unstyled d-flex">
                <li class="ms-3"><a class="link-dark" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"></path>
                  </svg>
                </a></li>
                <li class="ms-3"><a class="link-dark" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                  </svg>
                </a></li>
                <li class="ms-3"><a class="link-dark" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                  </svg>
                </a></li>
              </ul>
            </div>
          </div>
        </footer>
      </div>
    </div>


      <!-- Optional JavaScript; choose one of the two! -->
      <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@algolia/autocomplete-js"></script>

      <script src="/js/autocomplete.js" defer></script>
      <script src="/js/darkMode.js" defer></script>

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

        const playIcon = '<svg style="vertical-align: text-bottom" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16"><path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/></svg>';
        const pauseIcon = '<svg style="vertical-align: text-bottom" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pause-fill" viewBox="0 0 16 16"><path d="M5.5 3.5A1.5 1.5 0 0 1 7 5v6a1.5 1.5 0 0 1-3 0V5a1.5 1.5 0 0 1 1.5-1.5zm5 0A1.5 1.5 0 0 1 12 5v6a1.5 1.5 0 0 1-3 0V5a1.5 1.5 0 0 1 1.5-1.5z"/></svg>';

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

      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

      <!-- Option 2: Separate Popper and Bootstrap JS -->
      <!--
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
      -->
    </body>
</html>
