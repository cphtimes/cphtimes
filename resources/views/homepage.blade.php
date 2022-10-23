<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Bootstrap CSS -->
      <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"> -->
      <!-- CSS only -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

      <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
      <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
      <link rel="manifest" href="/site.webmanifest">
      <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
      <meta name="msapplication-TileColor" content="#ffffff">
      <meta name="theme-color" content="#ffffff">

      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital@1&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=UnifrakturMaguntia&display=swap" rel="stylesheet">

      <script src="/js/app.js" defer></script>
      <link rel="stylesheet" href="/css/app.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@algolia/autocomplete-theme-classic"/>

      <style>
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
      <title>The Copenhagen Gates - Counter propaganda for the life movement</title>
    </head>
    <body class="antialiased">
      <nav class="sticky-top d-block d-lg-none navbar navbar-light bg-white shadow-sm"> <!-- border-bottom -->
        <div class="d-flex justify-content-between container-fluid">
          <button class="btn btn-link text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="d-flex align-items-center justify-content-center" style="font-size: 1.2em">
              <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-list text-black" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
              </svg>
            </div>
          </button>

          <div class="text-center">
            <a class="navbar-brand d-md-none" href="#">
              <span style="font-family: 'UnifrakturMaguntia', cursive; font-size: 1.5rem;">C</span>
            </a>
            <a class="navbar-brand d-none d-md-block" href="#">
              <span style="font-family: 'UnifrakturMaguntia', cursive; font-size: 1.5rem;">The Copenhagen Gates</span>
            </a>
          </div>
          <div>
            <div id="autocomplete-mobile"></div>
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
      <div class="d-none d-lg-block container pt-4">
        <div class="row">
          <div class="col-4 ps-0">
              <div style="width: 47px; height: 44px;" id="autocomplete"></div>
          </div>
          <div class="col-4 d-flex justify-content-center mb-2 px-0">
            <small class="text-center">Counter propaganda for the life movement</small>
          </div>

          <div class="col-4 d-flex justify-content-end">
            @if ($user != null)
              <div class="dropdown px-4">
                <a style="cursor: pointer" type="button" href="#" role="button" class="text-black" id="dropdownReadLaterMenu" data-bs-toggle="dropdown" aria-expanded="false">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark" viewBox="0 0 16 16">
                    <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
                  </svg>
                </a>
                <div class="dropdown-menu pt-0 mx-0 rounded-3 shadow overflow-hidden" aria-labelledby="dropdownReadLaterMenu" style="z-index: 100000; width: 280px;">
                  <form class="p-2 mb-2 bg-light border-bottom">
                    <input type="search" class="form-control" autocomplete="false" placeholder="Type to filter...">
                  </form>
                  <ul class="list-unstyled mb-0">
                    <li><a class="dropdown-item d-flex align-items-center gap-2 py-2" href="#">
                      <span class="d-inline-block bg-success rounded-circle" style="width: .5em; height: .5em;"></span>
                      Action
                    </a></li>
                    <li><a class="dropdown-item d-flex align-items-center gap-2 py-2" href="#">
                      <span class="d-inline-block bg-primary rounded-circle" style="width: .5em; height: .5em;"></span>
                      Another action
                    </a></li>
                    <li><a class="dropdown-item d-flex align-items-center gap-2 py-2" href="#">
                      <span class="d-inline-block bg-danger rounded-circle" style="width: .5em; height: .5em;"></span>
                      Something else here
                    </a></li>
                    <li><a class="dropdown-item d-flex align-items-center gap-2 py-2" href="#">
                      <span class="d-inline-block bg-info rounded-circle" style="width: .5em; height: .5em;"></span>
                      Separated link
                    </a></li>
                  </ul>
                </div>
              </div>

              <div class="dropdown">
                <a style="cursor: pointer" type="button" href="#" role="button" class="text-black" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"></path>
                  </svg>
                </a>
                <ul style="width: 220px; z-index: 100000;" class="dropdown-menu dropdown-menu-macos mx-0 shadow" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="#">Account details</a></li>
                  <li><a class="dropdown-item" href="/create-checkout-session">Upgrade to premium</a></li>
                  <li><a class="dropdown-item" href="/manage-subscription">Manage subscription</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item dropdown-item-danger" href="/auth/signout">Sign out</a></li>
                </ul>
              </div>
            @else
            <div class="px-2">
              <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalSignin">Subscribe</button>
            </div>
            <div>
              <a type="button btn-primary" role="button" href="/subscribe" class="btn btn-primary btn-sm">Log in</a>

              <div aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade modal-signin py-5" tabindex="-1" role="dialog" id="modalSignin">
                <div class="modal-dialog" role="document">
                  <div class="modal-content rounded-5 shadow">
                    <div class="modal-header p-5 pb-4 border-bottom-0">
                      <h2 class="fw-bold mb-0">Sign up for free</h2>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body p-5 pt-0">
                      <form id='sign-up-form' action="{{url('/auth/signin')}}" method="post" class="">
                        @csrf
                        <!-- <div class="alert alert-danger" role="alert">
                          A simple danger alert—check it out!
                        </div> -->
                        <div class="form-floating mb-3">
                          <input name="email" type="email" class="form-control rounded-4" id="floatingInput" placeholder="name@example.com">
                          <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating mb-3">
                          <input name="password" type="password" class="form-control rounded-4" id="floatingPassword" placeholder="Password">
                          <label for="floatingPassword">Password</label>
                        </div>
                        <button class="w-100 mb-2 btn btn-lg rounded-4 btn-dark" type="submit">Sign up</button>
                        <small class="text-muted">By clicking Sign up, you agree to the terms of use.</small>
                        <hr class="my-4">
                        <h2 class="fs-5 fw-bold mb-3">Or use a third-party</h2>
                        <button class="w-100 py-2 mb-2 btn btn-outline-dark rounded-4" type="submit">
                          <svg style="vertical-align: -0.125em" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                          </svg>
                          Sign up with Twitter
                        </button>
                        <button class="w-100 py-2 mb-2 btn btn-outline-dark rounded-4" type="submit">
                          <svg style="vertical-align: -0.125em" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                          </svg>
                          Sign up with Facebook
                        </button>
                        <button class="w-100 py-2 mb-2 btn btn-outline-dark rounded-4" type="submit">
                          <svg style="vertical-align: -0.125em" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-apple" viewBox="0 0 16 16">
                            <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282z"/>
                            <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282z"/>
                          </svg>
                          Sign up with Apple
                        </button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endif
          </div>
        </div>
      </div>
      <nav class="d-none d-lg-block navbar navbar-expand-lg navbar-light bg-white pb-0">
        <div class="container d-flex justify-content-between border-bottom">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <small class="text-black text-left">
                  {!! $dateFormatted !!}
                </small>
              </li>
            </ul>
          </div>
          <div class="text-center">
            <a style="font-family: 'UnifrakturMaguntia', cursive; font-size: 3.0rem;" class="navbar-brand" href="/">The Copenhagen Gates</a>
          </div>
          <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <img width="32" height="32" src="{{ sprintf("http://openweathermap.org/img/wn/%s@2x.png", $icon) }}"/>
                <strong>{!! number_format($temp, 0) !!}°C</strong> <small class="text-black text-right">
                  {!! number_format($tempMax, 0) !!}° <span class="text-muted">{!! number_format($tempMin, 0) !!}°</span>
                </small>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div style="height: 39px; top: -1px;" class="d-none d-lg-block nav-scroller py-2 mb-2 border-bottom border-dark border-2 container bg-white sticky-top">
        <nav id="nav-scroller-sections" class="nav d-flex justify-content-between">
          <small id="homepage-link"><a style="font-family: 'UnifrakturMaguntia', cursive; font-size: 1.2rem;" class="p-2 link-dark" href="/">C</a></small>
          <small><a class="p-2 link-secondary" href="/section/world">World</a></small>
          <small><a class="p-2 link-secondary" href="/section/health">Health</a></small>
          <small><a class="p-2 link-secondary" href="/section/media">Media</a></small>
          <small><a class="p-2 link-secondary" href="/section/technology">Technology</a></small>
          <small><a class="p-2 link-secondary" href="/section/culture">Culture</a></small>
          <small><a class="p-2 link-secondary" href="/section/business">Business</a></small>
          <small><a class="p-2 link-secondary" href="/section/politics">Politics</a></small>
          <small><a class="p-2 link-secondary" href="/section/opinion">Opinion</a></small>
          <small><a class="p-2 link-secondary" href="/section/science">Science</a></small>
          <small><a class="p-2 link-secondary" href="/section/national">National</a></small>
          <small><a class="p-2 link-secondary" href="/section/style">Style</a></small>
          <small><a class="p-2 link-secondary" href="/section/travel">Travel</a></small>
        </nav>
      </div>

      <main class="main pt-lg-4">

      <div class="container">

        <div class="row pb-3 pb-md-5 px-md-3 px-lg-0">
          <ul id="above-fold-list" class="list-group list-group-flush col-xl-6 col-lg-8 col-md-12 col-12 pe-0 px-lg-4">
            <li class="list-group-item px-4 px-md-0 pb-md-4 pt-4 pt-lg-0">
              <a href="{{ url(sprintf("/%s/%s/%s/%s/%s", date('Y', strtotime($topArticles[0]->date_published)), date('m', strtotime($topArticles[0]->date_published)), date('d', strtotime($topArticles[0]->date_published)), $topArticles[0]->article_section, $topArticles[0]->headline_dashed)) }}">
                <div class="d-block d-md-none">
                  <article class="border-0">
                    <img style="object-fit: cover;" width="100%" height="199px" src="{!! $topArticles[0]->thumbnail_url !!}" alt="..." class="">
                    <div class="article-body card-body px-0 pb-0">
                      <p><small class="text-uppercase text-dark"><b>{!! $topArticles[0]->article_section !!}</b></small></p>
                      <h5 class="article-title card-title fw-light crop-text-2">{!! $topArticles[0]->headline !!}</h5>
                      <p class="text-black-50 crop-text-4">{!! $topArticles[0]->abstract !!}</p>
                    </div>
                </article>
                </div>
                <div class="d-none d-md-block">
                  <article class="d-flex">
                    <div class="article-body flex-grow-1 ms-0 pe-3">
                      <p class="mb-2"><small class="text-uppercase"><b>{!! $topArticles[0]->article_section !!}</b></small></p>
                      <h2 class="article-title fw-light crop-text-1">{!! $topArticles[0]->headline !!}</h2>
                      <p class="text-black-50 crop-text-3">{!! $topArticles[0]->abstract !!}</p>
                    </div>
                    <div class="flex-shrink-0">
                      <img id="top-image" style="object-fit: cover;" width="250px" height="250px" src="{!! $topArticles[0]->thumbnail_url !!}" alt="...">
                    </div>
                  </article>
                </div>
              </a>
            </li>
            <li class="list-group-item px-4 px-md-0 py-4">
              <a href="{{ url(sprintf("/%s/%s/%s/%s/%s", date('Y', strtotime($topArticles[1]->date_published)), date('m', strtotime($topArticles[1]->date_published)), date('d', strtotime($topArticles[1]->date_published)), $topArticles[1]->article_section, $topArticles[1]->headline_dashed)) }}">
                <article class="d-flex">
                  <div class="article-body flex-grow-1 ms-0 pe-3">
                    <p class="mb-2"><small class="text-uppercase"><b>{!! $topArticles[1]->article_section !!}</b></small></p>
                    <div class="d-block d-md-none">
                      <h6 class="article-title w-100 fw-light mb-0 crop-text-2">{!! $topArticles[1]->headline !!}</h6>
                    </div>
                    <div class="d-none d-md-block">
                      <h5 class="fw-light article-title crop-text-1">{!! $topArticles[1]->headline !!}</h5>
                      <p class="text-black-50 crop-text-2">{!! $topArticles[1]->abstract !!}</p>
                    </div>
                  </div>
                  <div class="flex-shrink-0">
                    <img style="object-fit: cover;" id="latest-update-thumbnail" src="{!! $topArticles[1]->thumbnail_url !!}" alt="...">
                  </div>
                </article>
              </a>
            </li>
            <li class="list-group-item px-4 px-md-0 py-4">
              <a href="{{ url(sprintf("/%s/%s/%s/%s/%s", date('Y', strtotime($topArticles[2]->date_published)), date('m', strtotime($topArticles[2]->date_published)), date('d', strtotime($topArticles[2]->date_published)), $topArticles[2]->article_section, $topArticles[2]->headline_dashed)) }}">
                <article class="d-flex">
                  <div class="article-body flex-grow-1 ms-0 pe-3">
                    <p class="mb-2"><small class="text-uppercase"><b>{!! $topArticles[2]->article_section !!}</b></small></p>
                    <div class="d-block d-md-none">
                      <h6 class="article-title w-100 fw-light mb-0 crop-text-2">{!! $topArticles[2]->headline !!}</h6>
                    </div>
                    <div class="d-none d-md-block">
                      <h5 class="fw-light article-title crop-text-1">{!! $topArticles[2]->headline !!}</h5>
                      <p class="text-black-50 crop-text-2">{!! $topArticles[2]->abstract !!}</p>
                    </div>
                  </div>
                  <div class="flex-shrink-0">
                    <img style="object-fit: cover;" id="latest-update-thumbnail" src="{!! $topArticles[2]->thumbnail_url !!}" alt="...">
                  </div>
                </article>
              </a>
            </li>
          </ul>

          <!-- Mobile and Tablet -->
          <ul style="overflow-y: hidden;" class="d-block d-lg-none list-group list-group-flush py-3 col-12 px-lg-3 pe-0">
            <h5 class="w-100 pt-3 serif fst-italic px-4 px-md-0">Latest updates</h5> <!-- border-top border-1 border-dark -->
            @foreach (array_slice($latestUpdates,0,5) as $update)
              <li class="list-group-item py-3 px-4 px-md-0">
                <a href="{{ url(sprintf("/%s/%s/%s/%s/%s", date('Y', strtotime($update['date_published'])), date('m', strtotime($update['date_published'])), date('d', strtotime($update['date_published'])), $update['article_section'], $update['headline_dashed'])) }}">
                  <article class="d-flex">
                    <div class="article-body w-50 flex-grow-1 ms-0 pe-3">
                      <div class="d-flex w-100 justify-content-between mb-2">
                        <small class="text-uppercase"><b>{{$update['article_section']}}</b></small>
                        <small class="text-uppercase text-black-50">{{ str_replace(' ', '', str_replace(['hours', 'minutes', 'seconds', 'days', 'weeks', 'months', 'years'], ['h', 'm', 's', 'd', 'w', 'm', 'y'], \Carbon\Carbon::parse($update['date_published'])->diffForHumans(null, true))) }}</small>
                      </div>
                      <div class="d-block d-md-none">
                        <h6 class="article-title w-100 fw-light mb-0 crop-text-2">{{$update['headline']}}</h6>
                      </div>
                      <div class="d-none d-md-block">
                        <h5 class="article-title w-100 fw-light crop-text-2">{{$update['headline']}}</h5>
                        <p class="text-black-50 crop-text-2">{!! $update['abstract'] !!}</p>
                      </div>
                    </div>
                    <div class="flex-shrink-0 align-self-center">
                      <img id="latest-update-thumbnail" style="object-fit: cover;" src="{!! $update['thumbnail_url'] !!}" alt="..."> <!-- width="75px" height="75px" -->
                    </div>
                  </article>
                </a>
              </li>
            @endforeach
            <li class="list-group-item px-0 py-3">
              <div class="d-flex justify-content-center">
                <a href="/latest" role="button" class="btn btn-link text-dark fw-bold">Read More</a>
              </div>
            </li>
          </ul>

          <!-- Desktop -->
          <ul style="overflow-y: scroll; height:629px;" class="d-none d-lg-block list-group list-group-flush col-xl-3 col-lg-4 col-md-12 col-12 border-end px-4">
            <h5 class="w-100 serif fst-italic">Latest updates</h5>
            @foreach ($latestUpdates as $update)
              <li class="list-group-item px-0 py-3">
                <a href="{{ url(sprintf("/%s/%s/%s/%s/%s", date('Y', strtotime($update['date_published'])), date('m', strtotime($update['date_published'])), date('d', strtotime($update['date_published'])), $update['article_section'], $update['headline_dashed'])) }}">
                  <article class="d-flex">
                    <div class="article-body w-50 flex-grow-1 ms-0 pe-3">
                      <div class="d-flex w-100 justify-content-between mb-2">
                        <small class="text-uppercase"><b>{{$update['article_section']}}</b></small>
                        <small class="text-uppercase text-black-50">{{ str_replace(' ', '', str_replace(['hours', 'minutes', 'seconds', 'days', 'weeks', 'months', 'years'], ['h', 'm', 's', 'd', 'w', 'm', 'y'], \Carbon\Carbon::parse($update['date_published'])->diffForHumans(null, true))) }}</small>
                      </div>
                      <h6 class="article-title w-100 fw-light mb-0 crop-text-2">{{$update['headline']}}</h6>
                    </div>
                    <div class="flex-shrink-0 align-self-center">
                      <img style="object-fit: cover;" width="75px" height="75px" src="{!! $update['thumbnail_url'] !!}" alt="...">
                    </div>
                  </article>
                </a>
              </li>
            @endforeach
          </ul>

          <ul style="overflow-y: scroll; height:629px;" class="d-none d-lg-block list-group list-group-flush col-xl-3 col-lg-12 col-md-12 col-12 px-4">
            <h5 class="w-100 serif fst-italic"><i>Noteworthy Individuals</i></h5>
            @foreach ($individuals as $individual)
            <li class="list-group-item py-4 px-0">
              <article class="d-flex align-items-center">
                <div class="flex-shrink-0">
                  <img style="object-fit: cover;" width="65px" height="65px" class="rounded-circle" src="{{ $individual['avatar_url'] }}" alt="...">
                </div>
                <div class="article-body flex-grow-1 ms-3">
                  <h6 class="article-title mb-0">{!! $individual['first_name'] !!} {!! $individual['last_name'] !!}</h6>
                  <small>{!! $individual['short_description'] !!}</small>
                </div>
              </article>
            </li>
            @endforeach
          </ul>
        </div>

        @if (count($articles) >= 4)
        <!-- Tablet -->
        <div class="d-block d-lg-none">
          <div class="row pb-5"> <!-- d-block d-lg-none -->
            <div class="col-12 col-md-4 border-md-end py-3 py-md-0 px-4 px-md-3">
              <a href="{{ url(sprintf("/%s/%s/%s/%s/%s", date('Y', strtotime($articles[0]->date_published)), date('m', strtotime($articles[0]->date_published)), date('d', strtotime($articles[0]->date_published)), $articles[0]->article_section, $articles[0]->headline_dashed)) }}">
                <article class="border-0">
                  <img style="object-fit: cover;" width="100%" height="199px" src="{!! $articles[0]->thumbnail_url !!}" alt="..." class="">
                  <div class="article-body card-body px-0 pb-0">
                    <p><small class="text-uppercase text-dark"><b>{!! $articles[0]->article_section !!}</b></small></p>
                    <h5 class="article-title card-title fw-light crop-text-2">{!! $articles[0]->headline !!}</h5>
                    <p class="text-black-50 crop-text-4">{!! $articles[0]->abstract !!}</p>
                  </div>
                </article>
              </a>
            </div>

            <div class="col-12 col-md-4 border-md-end py-3 py-md-0 px-4 px-md-3">
              <a href="{{ url(sprintf("/%s/%s/%s/%s/%s", date('Y', strtotime($articles[1]->date_published)), date('m', strtotime($articles[1]->date_published)), date('d', strtotime($articles[1]->date_published)), $articles[1]->article_section, $articles[1]->headline_dashed)) }}">
                <article class="border-0">
                  <img style="object-fit: cover;" width="100%" height="199px" src="{!! $articles[1]->thumbnail_url !!}" alt="..." class="">
                  <div class="article-body card-body px-0 pb-0">
                    <p><small class="text-uppercase text-dark"><b>{!! $articles[1]->article_section !!}</b></small></p>
                    <h5 class="article-title card-title fw-light crop-text-2">{!! $articles[1]->headline !!}</h5>
                    <p class="text-black-50 crop-text-4">{!! $articles[1]->abstract !!}</p>
                  </div>
                </article>
              </a>
            </div>

            <div class="col-12 col-md-4 py-3 py-md-0 px-4 px-md-3">
              <a href="{{ url(sprintf("/%s/%s/%s/%s/%s", date('Y', strtotime($articles[2]->date_published)), date('m', strtotime($articles[2]->date_published)), date('d', strtotime($articles[2]->date_published)), $articles[2]->article_section, $articles[2]->headline_dashed)) }}">
                <article class="border-0">
                  <img style="object-fit: cover;" width="100%" height="199px" src="{!! $articles[2]->thumbnail_url !!}" alt="..." class="">
                  <div class="article-body card-body px-0 pb-0">
                    <p><small class="text-uppercase text-dark"><b>{!! $articles[2]->article_section !!}</b></small></p>
                    <h5 class="article-title card-title fw-light crop-text-2">{!! $articles[2]->headline !!}</h5>
                    <p class="text-black-50 crop-text-4">{!! $articles[2]->abstract !!}</p>
                  </div>
                </article>
              </a>
            </div>

            <div class="col-12 col-md-12 mt-md-4 py-3 py-md-0 px-4 px-md-3">
              <a href="{{ url(sprintf("/%s/%s/%s/%s/%s", date('Y', strtotime($articles[3]->date_published)), date('m', strtotime($articles[3]->date_published)), date('d', strtotime($articles[3]->date_published)), $articles[3]->article_section, $articles[3]->headline_dashed)) }}">
                <article class="border-0">
                  <img style="object-fit: cover;" width="100%" height="319px" src="{!! $articles[3]->thumbnail_url !!}" alt="..." class="">
                  <div class="article-body card-body px-0 pb-0">
                    <p><small class="text-uppercase text-dark"><b>{!! $articles[3]->article_section !!}</b></small></p>
                    <h5 class="article-title card-title fw-light crop-text-2">{!! $articles[3]->headline !!}</h5>
                    <p class="text-black-50 crop-text-3">{!! $articles[3]->abstract !!}</p>
                  </div>
                </article>
              </a>
            </div>
          </div>
        </div>

        <!-- Desktop -->
        <div class="d-none d-lg-block">
          <div class="row pb-5">
          <div class="col border-end">
            <a href="{{ url(sprintf("/%s/%s/%s/%s/%s", date('Y', strtotime($articles[0]->date_published)), date('m', strtotime($articles[0]->date_published)), date('d', strtotime($articles[0]->date_published)), $articles[0]->article_section, $articles[0]->headline_dashed)) }}">
              <article class="border-0 px-2">
                <img style="object-fit: cover;" width="190px" height="190px" src="{!! $articles[0]->thumbnail_url !!}" alt="..." class="">
                <div class="article-body card-body px-0 pb-0">
                  <p><small class="text-uppercase text-dark"><b>{!! $articles[0]->article_section !!}</b></small></p>
                  <h5 class="article-title card-title fw-light crop-text-2">{!! $articles[0]->headline !!}</h5>
                  <p class="text-black-50 crop-text-4">{!! $articles[0]->abstract !!}</p>
                </div>
              </article>
            </a>
          </div>

          <div class="col border-end">
            <a href="{{ url(sprintf("/%s/%s/%s/%s/%s", date('Y', strtotime($articles[1]->date_published)), date('m', strtotime($articles[1]->date_published)), date('d', strtotime($articles[1]->date_published)), $articles[1]->article_section, $articles[1]->headline_dashed)) }}">
              <article class="border-0 px-2">
                <img style="object-fit: cover;" width="190px" height="190px" src="{!! $articles[1]->thumbnail_url !!}" alt="..." class="">
                <div class="article-body card-body px-0 pb-0">
                  <p><small class="text-uppercase text-dark"><b>{!! $articles[1]->article_section !!}</b></small></p>
                  <h5 class="article-title card-title fw-light crop-text-2">{!! $articles[1]->headline !!}</h5>
                  <p class="text-black-50 crop-text-4">{!! $articles[1]->abstract !!}</p>
                </div>
              </article>
            </a>
          </div>

          <div class="col border-end">
            <a href="{{ url(sprintf("/%s/%s/%s/%s/%s", date('Y', strtotime($articles[2]->date_published)), date('m', strtotime($articles[2]->date_published)), date('d', strtotime($articles[2]->date_published)), $articles[2]->article_section, $articles[2]->headline_dashed)) }}">
              <article class="border-0 px-2">
                <img style="object-fit: cover;" width="600px" height="330px" src="{!! $articles[2]->thumbnail_url !!}" alt="..." class="">
                <div class="article-body card-body px-0 pb-0">
                  <p><small class="text-uppercase text-dark"><b>{!! $articles[2]->article_section !!}</b></small></p>
                  <h5 class="article-title card-title fw-light crop-text-1">{!! $articles[2]->headline !!}</h5>
                </div>
              </article>
            </a>
          </div>

          <div class="col pe-0">
            <a href="{{ url(sprintf("/%s/%s/%s/%s/%s", date('Y', strtotime($articles[3]->date_published)), date('m', strtotime($articles[3]->date_published)), date('d', strtotime($articles[3]->date_published)), $articles[3]->article_section, $articles[3]->headline_dashed)) }}">
              <article class="border-0 px-2">
                <img style="object-fit: cover;" width="100%" height="190px" src="{!! $articles[3]->thumbnail_url !!}" alt="..." class="">
                <div class="article-body card-body px-0 pb-0">
                  <p><small class="text-uppercase text-dark"><b>{!! $articles[3]->article_section !!}</b></small></p>
                  <h5 class="article-title card-title fw-light crop-text-2">{!! $articles[3]->headline !!}</h5>
                  <p class="text-black-50 crop-text-4">{!! $articles[3]->abstract !!}</p>
                </div>
              </article>
            </a>
          </div>
        </div>
        </div>
        @endif

        @if (count($articles) >= 8)
        <!-- Tablet -->
        <div class="d-block d-lg-none">
          <div class="row pb-5">
            <div class="col-12 col-md-4 border-md-end py-3 py-md-0 px-4 px-md-3">
              <a href="{{ url(sprintf("/%s/%s/%s/%s/%s", date('Y', strtotime($articles[4]->date_published)), date('m', strtotime($articles[4]->date_published)), date('d', strtotime($articles[4]->date_published)), $articles[4]->article_section, $articles[4]->headline_dashed)) }}">
                <article class="border-0">
                  <img style="object-fit: cover;" width="100%" height="199px" src="{!! $articles[4]->thumbnail_url !!}" alt="..." class="">
                  <div class="article-body card-body px-0 pb-0">
                    <p><small class="text-uppercase text-dark"><b>{!! $articles[4]->article_section !!}</b></small></p>
                    <h5 class="article-title card-title fw-light crop-text-2">{!! $articles[4]->headline !!}</h5>
                    <p class="text-black-50 crop-text-4">{!! $articles[5]->abstract !!}</p>
                  </div>
                </article>
              </a>
            </div>

            <div class="col-12 col-md-4 border-md-end py-3 py-md-0 px-4 px-md-3">
              <a href="{{ url(sprintf("/%s/%s/%s/%s/%s", date('Y', strtotime($articles[5]->date_published)), date('m', strtotime($articles[5]->date_published)), date('d', strtotime($articles[5]->date_published)), $articles[5]->article_section, $articles[5]->headline_dashed)) }}">
                <article class="border-0">
                  <img style="object-fit: cover;" width="100%" height="199px" src="{!! $articles[5]->thumbnail_url !!}" alt="..." class="">
                  <div class="article-body card-body px-0 pb-0">
                    <p><small class="text-uppercase text-dark"><b>{!! $articles[5]->article_section !!}</b></small></p>
                    <h5 class="article-title card-title fw-light crop-text-2">{!! $articles[5]->headline !!}</h5>
                    <p class="text-black-50 crop-text-4">{!! $articles[5]->abstract !!}</p>
                  </div>
                </article>
              </a>
            </div>

            <div class="col-12 col-md-4 py-3 py-md-0 px-4 px-md-3">
              <a href="{{ url(sprintf("/%s/%s/%s/%s/%s", date('Y', strtotime($articles[6]->date_published)), date('m', strtotime($articles[6]->date_published)), date('d', strtotime($articles[6]->date_published)), $articles[6]->article_section, $articles[6]->headline_dashed)) }}">
                <article class="border-0">
                  <img style="object-fit: cover;" width="100%" height="199px" src="{!! $articles[6]->thumbnail_url !!}" alt="..." class="">
                  <div class="article-body card-body px-0 pb-0">
                    <p><small class="text-uppercase text-dark"><b>{!! $articles[6]->article_section !!}</b></small></p>
                    <h5 class="article-title card-title fw-light crop-text-2">{!! $articles[6]->headline !!}</h5>
                    <p class="text-black-50 crop-text-4">{!! $articles[6]->abstract !!}</p>
                  </div>
                </article>
              </a>
            </div>

            <div class="col-12 col-md-12 mt-md-4 py-3 py-md-0 px-4 px-md-3">
              <a href="{{ url(sprintf("/%s/%s/%s/%s/%s", date('Y', strtotime($articles[7]->date_published)), date('m', strtotime($articles[7]->date_published)), date('d', strtotime($articles[7]->date_published)), $articles[7]->article_section, $articles[7]->headline_dashed)) }}">
                <article class="border-0">
                  <img style="object-fit: cover;" width="100%" height="319px" src="{!! $articles[7]->thumbnail_url !!}" alt="..." class="">
                  <div class="article-body card-body px-0 pb-0">
                    <p><small class="text-uppercase text-dark"><b>{!! $articles[7]->article_section !!}</b></small></p>
                    <h5 class="article-title card-title fw-light crop-text-2">{!! $articles[7]->headline !!}</h5>
                    <p class="text-black-50 crop-text-4">{!! $articles[7]->abstract !!}</p>
                  </div>
                </article>
              </a>
            </div>
          </div>
        </div>

        <!-- deskop-->
        <div class="d-none d-lg-block">
          <div class="row pb-5">
          <div class="col border-end">
            <a href="{{ url(sprintf("/%s/%s/%s/%s/%s", date('Y', strtotime($articles[4]->date_published)), date('m', strtotime($articles[4]->date_published)), date('d', strtotime($articles[4]->date_published)), $articles[4]->article_section, $articles[4]->headline_dashed)) }}">
              <article class="border-0 px-2">
                <img style="object-fit: cover;" width="600px" height="330px" src="{!! $articles[4]->thumbnail_url !!}" alt="..." class="">
                <div class="article-body card-body px-0 pb-0">
                  <p><small class="text-uppercase text-dark"><b>{!! $articles[4]->article_section !!}</b></small></p>
                  <h5 class="article-title card-title fw-light crop-text-1">{!! $articles[4]->headline !!}</h5>
                </div>
              </article>
            </a>
          </div>

          <div class="col border-end">
            <a href="{{ url(sprintf("/%s/%s/%s/%s/%s", date('Y', strtotime($articles[5]->date_published)), date('m', strtotime($articles[5]->date_published)), date('d', strtotime($articles[5]->date_published)), $articles[5]->article_section, $articles[5]->headline_dashed)) }}">
              <article class="border-0 px-2">
                <img style="object-fit: cover;" width="190px" height="190px" src="{!! $articles[5]->thumbnail_url !!}" alt="..." class="">
                <div class="article-body card-body px-0 pb-0">
                  <p><small class="text-uppercase text-dark"><b>{!! $articles[5]->article_section !!}</b></small></p>
                  <h5 class="article-title card-title fw-light crop-text-2">{!! $articles[5]->headline !!}</h5>
                  <p class="text-black-50 crop-text-4">{!! $articles[5]->abstract !!}</p>
                </div>
              </article>
            </a>
          </div>

          <div class="col border-end">
            <a href="{{ url(sprintf("/%s/%s/%s/%s/%s", date('Y', strtotime($articles[6]->date_published)), date('m', strtotime($articles[6]->date_published)), date('d', strtotime($articles[6]->date_published)), $articles[6]->article_section, $articles[6]->headline_dashed)) }}">
              <article class="border-0 px-2">
                <img style="object-fit: cover;" width="100%" height="190px" src="{!! $articles[6]->thumbnail_url !!}" alt="..." class="">
                <div class="article-body card-body px-0 pb-0">
                  <p><small class="text-uppercase text-dark"><b>{!! $articles[6]->article_section !!}</b></small></p>
                  <h5 class="article-title card-title fw-light crop-text-2">{!! $articles[6]->headline !!}</h5>
                  <p class="text-black-50 crop-text-4">{!! $articles[6]->abstract !!}</p>
                </div>
              </article>
            </a>
          </div>

          <div class="col pe-0">
            <a href="{{ url(sprintf("/%s/%s/%s/%s/%s", date('Y', strtotime($articles[7]->date_published)), date('m', strtotime($articles[7]->date_published)), date('d', strtotime($articles[7]->date_published)), $articles[7]->article_section, $articles[7]->headline_dashed)) }}">
              <article class="border-0 px-2">
                <img style="object-fit: cover;" width="190px" height="190px" src="{!! $articles[7]->thumbnail_url !!}" alt="..." class="">
                <div class="article-body card-body px-0 pb-0">
                  <p><small class="text-uppercase text-dark"><b>{!! $articles[7]->article_section !!}</b></small></p>
                  <h5 class="article-title card-title fw-light crop-text-2">{!! $articles[7]->headline !!}</h5>
                  <p class="text-black-50 crop-text-4">{!! $articles[7]->abstract !!}</p>
                </div>
              </article>
            </a>
          </div>
        </div>
        </div>
        @endif

        <div class="row d-block d-lg-none px-0 px-md-3">
          <ul style="overflow-y: hidden;" class="list-group list-group-flush py-3 col-12 pe-0">
            <h5 class="w-100 pt-3 serif fst-italic px-4 px-md-0"><i>Noteworthy Individuals</i></h5>
            @foreach (array_slice($individuals,0,5) as $individual)
            <li class="list-group-item py-3 px-4 px-md-0">
              <article class="d-flex align-items-center">
                <div class="flex-shrink-0">
                  <img style="object-fit: cover;" width="65px" height="65px" class="rounded-circle" src="{{ $individual['avatar_url'] }}" alt="...">
                </div>
                <div class="article-body flex-grow-1 ms-3">
                  <h6 class="article-title mb-0">{!! $individual['first_name'] !!} {!! $individual['last_name'] !!}</h6>
                  <small>{!! $individual['short_description'] !!}</small>
                </div>
              </article>
            </li>
            @endforeach
            <li class="list-group-item py-3">
              <div class="d-flex justify-content-center">
                <a href="/noteworthy" role="button" class="btn btn-link text-dark fw-bold">Read More</a>
              </div>
            </li>
          </ul>
        </div>

        <!-- Add one more mid row here. -->
        <div class="row d-block d-lg-none px-0 px-md-3">
          <ul style="overflow-y: hidden;" class="d-block d-lg-none list-group list-group-flush py-3 col-12 pe-0">
            <h5 class="w-100 pt-3 serif fst-italic px-4 px-md-0">World</h5> <!-- border-top border-1 border-dark -->
            @foreach (array_slice($world,0,5) as $update)
              <li class="list-group-item py-3 px-4 px-md-0">
                <a href="{{ url(sprintf("/%s/%s/%s/%s/%s", date('Y', strtotime($update['date_published'])), date('m', strtotime($update['date_published'])), date('d', strtotime($update['date_published'])), $update['article_section'], $update['headline_dashed'])) }}">
                  <article class="d-flex">
                    <div class="article-body w-50 flex-grow-1 ms-0 pe-3">
                      <div class="d-flex w-100 justify-content-between mb-2">
                        <small class="text-uppercase"><b>{{$update['article_section']}}</b></small>
                        <small class="text-uppercase text-black-50">{{ str_replace(' ', '', str_replace(['hours', 'minutes', 'seconds', 'days', 'weeks', 'months', 'years'], ['h', 'm', 's', 'd', 'w', 'm', 'y'], \Carbon\Carbon::parse($update['date_published'])->diffForHumans(null, true))) }}</small>
                      </div>
                      <div class="d-block d-md-none">
                        <h6 class="article-title w-100 fw-light mb-0 crop-text-2">{{$update['headline']}}</h6>
                      </div>
                      <div class="d-none d-md-block">
                        <h5 class="article-title w-100 fw-light crop-text-2">{{$update['headline']}}</h5>
                        <p class="text-black-50 crop-text-2">{!! $update['abstract'] !!}</p>
                      </div>
                    </div>
                    <div class="flex-shrink-0 align-self-center">
                      <img id="latest-update-thumbnail" style="object-fit: cover;" src="{!! $update['thumbnail_url'] !!}" alt="..."> <!-- width="75px" height="75px" -->
                    </div>
                  </article>
                </a>
              </li>
            @endforeach
            <li class="list-group-item py-3">
              <div class="d-flex justify-content-center">
                <a href="/latest" role="button" class="btn btn-link text-dark fw-bold">Read More</a>
              </div>
            </li>
          </ul>

          <ul style="overflow-y: hidden;" class="d-block d-lg-none list-group list-group-flush py-3 col-12 pe-0">
            <h5 class="w-100 pt-3 serif fst-italic px-4 px-md-0">Health</h5> <!-- border-top border-1 border-dark -->
            @foreach (array_slice($health,0,5) as $update)
              <li class="list-group-item py-4 px-4 px-md-0">
                <a href="{{ url(sprintf("/%s/%s/%s/%s/%s", date('Y', strtotime($update['date_published'])), date('m', strtotime($update['date_published'])), date('d', strtotime($update['date_published'])), $update['article_section'], $update['headline_dashed'])) }}">
                  <article class="d-flex">
                    <div class="article-body w-50 flex-grow-1 ms-0 pe-3">
                      <div class="d-flex w-100 justify-content-between mb-2">
                        <small class="text-uppercase"><b>{{$update['article_section']}}</b></small>
                        <small class="text-uppercase text-black-50">{{ str_replace(' ', '', str_replace(['hours', 'minutes', 'seconds', 'days', 'weeks', 'months', 'years'], ['h', 'm', 's', 'd', 'w', 'm', 'y'], \Carbon\Carbon::parse($update['date_published'])->diffForHumans(null, true))) }}</small>
                      </div>
                      <div class="d-block d-md-none">
                        <h6 class="article-title w-100 fw-light mb-0 crop-text-2">{{$update['headline']}}</h6>
                      </div>
                      <div class="d-none d-md-block">
                        <h5 class="article-title w-100 fw-light crop-text-2">{{$update['headline']}}</h5>
                        <p class="text-black-50 crop-text-2">{!! $update['abstract'] !!}</p>
                      </div>
                    </div>
                    <div class="flex-shrink-0 align-self-center">
                      <img id="latest-update-thumbnail" style="object-fit: cover;" src="{!! $update['thumbnail_url'] !!}" alt="..."> <!-- width="75px" height="75px" -->
                    </div>
                  </article>
                </a>
              </li>
            @endforeach
            <li class="list-group-item py-3">
              <div class="d-flex justify-content-center">
                <a href="/latest" role="button" class="btn btn-link text-dark fw-bold">Read More</a>
              </div>
            </li>
          </ul>

          <ul style="overflow-y: hidden;" class="d-block d-lg-none list-group list-group-flush py-3 col-12 pe-0">
            <h5 class="w-100 pt-3 serif fst-italic px-4 px-md-0">Technology</h5> <!-- border-top border-1 border-dark -->
            @foreach (array_slice($technology,0,5) as $update)
              <li class="list-group-item py-3 px-4 px-md-0">
                <a href="{{ url(sprintf("/%s/%s/%s/%s/%s", date('Y', strtotime($update['date_published'])), date('m', strtotime($update['date_published'])), date('d', strtotime($update['date_published'])), $update['article_section'], $update['headline_dashed'])) }}">
                  <article class="d-flex">
                    <div class="article-body w-50 flex-grow-1 ms-0 pe-3">
                      <div class="d-flex w-100 justify-content-between mb-2">
                        <small class="text-uppercase"><b>{{$update['article_section']}}</b></small>
                        <small class="text-uppercase text-black-50">{{ str_replace(' ', '', str_replace(['hours', 'minutes', 'seconds', 'days', 'weeks', 'months', 'years'], ['h', 'm', 's', 'd', 'w', 'm', 'y'], \Carbon\Carbon::parse($update['date_published'])->diffForHumans(null, true))) }}</small>
                      </div>
                      <div class="d-block d-md-none">
                        <h6 class="article-title w-100 fw-light mb-0 crop-text-2">{{$update['headline']}}</h6>
                      </div>
                      <div class="d-none d-md-block">
                        <h5 class="article-title w-100 fw-light crop-text-2">{{$update['headline']}}</h5>
                        <p class="text-black-50 crop-text-2">{!! $update['abstract'] !!}</p>
                      </div>
                    </div>
                    <div class="flex-shrink-0 align-self-center">
                      <img id="latest-update-thumbnail" style="object-fit: cover;" src="{!! $update['thumbnail_url'] !!}" alt="..."> <!-- width="75px" height="75px" -->
                    </div>
                  </article>
                </a>
              </li>
            @endforeach
            <li class="list-group-item py-3">
              <div class="d-flex justify-content-center">
                <a href="/latest" role="button" class="btn btn-link text-dark fw-bold">Read More</a>
              </div>
            </li>
          </ul>

          <ul style="overflow-y: hidden;" class="d-block d-lg-none list-group list-group-flush py-3 col-12 pe-0">
            <h5 class="w-100 pt-3 serif fst-italic px-4 px-md-0">Media</h5> <!-- border-top border-1 border-dark -->
            @foreach (array_slice($media,0,5) as $update)
              <li class="list-group-item py-3 px-4 px-md-0">
                <a href="{{ url(sprintf("/%s/%s/%s/%s/%s", date('Y', strtotime($update['date_published'])), date('m', strtotime($update['date_published'])), date('d', strtotime($update['date_published'])), $update['article_section'], $update['headline_dashed'])) }}">
                  <article class="d-flex">
                    <div class="article-body w-50 flex-grow-1 ms-0 pe-3">
                      <div class="d-flex w-100 justify-content-between mb-2">
                        <small class="text-uppercase"><b>{{$update['article_section']}}</b></small>
                        <small class="text-uppercase text-black-50">{{ str_replace(' ', '', str_replace(['hours', 'minutes', 'seconds', 'days', 'weeks', 'months', 'years'], ['h', 'm', 's', 'd', 'w', 'm', 'y'], \Carbon\Carbon::parse($update['date_published'])->diffForHumans(null, true))) }}</small>
                      </div>
                      <div class="d-block d-md-none">
                        <h6 class="article-title w-100 fw-light mb-0 crop-text-2">{{$update['headline']}}</h6>
                      </div>
                      <div class="d-none d-md-block">
                        <h5 class="article-title w-100 fw-light crop-text-2">{{$update['headline']}}</h5>
                        <p class="text-black-50 crop-text-2">{!! $update['abstract'] !!}</p>
                      </div>
                    </div>
                    <div class="flex-shrink-0 align-self-center">
                      <img id="latest-update-thumbnail" style="object-fit: cover;" src="{!! $update['thumbnail_url'] !!}" alt="..."> <!-- width="75px" height="75px" -->
                    </div>
                  </article>
                </a>
              </li>
            @endforeach
            <li class="list-group-item py-3">
              <div class="d-flex justify-content-center">
                <a href="/latest" role="button" class="btn btn-link text-dark fw-bold">Read More</a>
              </div>
            </li>
          </ul>
        </div>

        <!-- Desktop -->
        <div class="d-none d-lg-block">
          <div class="row">
            <ul style="overflow-y: scroll; height:629px;" class="list-group list-group-flush col-xl-3 col-lg-4 col-md-12 col-12 border-end px-4">
              <h5 class="serif fst-italic">World</h5>
              @foreach ($world as $update)
                <li class="list-group-item px-0 py-3">
                  <a href="{{ url(sprintf("/%s/%s/%s/%s/%s", date('Y', strtotime($update['date_published'])), date('m', strtotime($update['date_published'])), date('d', strtotime($update['date_published'])), $update['article_section'], $update['headline_dashed'])) }}">
                    <article class="d-flex">
                      <div class="article-body w-50 flex-grow-1 ms-0 pe-3">
                        <div class="d-flex w-100 justify-content-between mb-2">
                          <small class="text-uppercase"><b>{{$update['article_section']}}</b></small>
                          <small class="text-uppercase text-black-50">{{ str_replace(' ', '', str_replace(['hours', 'minutes'], ['h', 'mins'], \Carbon\Carbon::parse($update['date_published'])->diffForHumans(null, true))) }}</small>
                        </div>
                        <h6 class="article-title w-100 fw-light mb-0 crop-text-2">{{$update['headline']}}</h6>
                      </div>
                      <div class="flex-shrink-0 align-self-center">
                        <img style="object-fit: cover;" width="75px" height="75px" src="{!! $update['thumbnail_url'] !!}" alt="...">
                      </div>
                    </article>
                  </a>
                </li>
              @endforeach
            </ul>
            <ul style="overflow-y: scroll; height:629px;" class="list-group list-group-flush col-xl-3 col-lg-4 col-md-12 col-12 border-end px-4">
              <h5 class="serif fst-italic">Health</h5>
              @foreach ($health as $update)
                <li class="list-group-item px-0 py-3">
                  <a href="{{ url(sprintf("/%s/%s/%s/%s/%s", date('Y', strtotime($update['date_published'])), date('m', strtotime($update['date_published'])), date('d', strtotime($update['date_published'])), $update['article_section'], $update['headline_dashed'])) }}">
                    <article class="d-flex">
                      <div class="article-body w-50 flex-grow-1 ms-0 pe-3">
                        <div class="d-flex w-100 justify-content-between mb-2">
                          <small class="text-uppercase"><b>{{$update['article_section']}}</b></small>
                          <small class="text-uppercase text-black-50">{{ str_replace(' ', '', str_replace(['hours', 'minutes'], ['h', 'mins'], \Carbon\Carbon::parse($update['date_published'])->diffForHumans(null, true))) }}</small>
                        </div>
                        <h6 class="article-title w-100 fw-light mb-0 crop-text-2">{{$update['headline']}}</h6>
                      </div>
                      <div class="flex-shrink-0 align-self-center">
                        <img style="object-fit: cover;" width="75px" height="75px" src="{!! $update['thumbnail_url'] !!}" alt="...">
                      </div>
                    </article>
                  </a>
                </li>
              @endforeach
            </ul>
            <ul style="overflow-y: scroll; height:629px;" class="list-group list-group-flush col-xl-3 col-lg-4 border-end px-4">
              <h5 class="serif fst-italic">Technology</h5>
              @foreach ($technology as $update)
                <li class="list-group-item px-0 py-3">
                  <a href="{{ url(sprintf("/%s/%s/%s/%s/%s", date('Y', strtotime($update['date_published'])), date('m', strtotime($update['date_published'])), date('d', strtotime($update['date_published'])), $update['article_section'], $update['headline_dashed'])) }}">
                    <article class="d-flex">
                      <div class="article-body w-50 flex-grow-1 ms-0 pe-3">
                        <div class="d-flex w-100 justify-content-between mb-2">
                          <small class="text-uppercase"><b>{{$update['article_section']}}</b></small>
                          <small class="text-uppercase text-black-50">{{ str_replace(' ', '', str_replace(['hours', 'minutes'], ['h', 'mins'], \Carbon\Carbon::parse($update['date_published'])->diffForHumans(null, true))) }}</small>
                        </div>
                        <h6 class="article-title w-100 fw-light mb-0 crop-text-2">{{$update['headline']}}</h6>
                      </div>
                      <div class="flex-shrink-0 align-self-center">
                        <img style="object-fit: cover;" width="75px" height="75px" src="{!! $update['thumbnail_url'] !!}" alt="...">
                      </div>
                    </article>
                  </a>
                </li>
              @endforeach
            </ul>
            <ul style="overflow-y: scroll; height:629px;" class="list-group list-group-flush col-xl-3 d-xl-block d-lg-none px-4">
              <h5 class="serif fst-italic">Media</h5>
              @foreach ($media as $update)
                <li class="list-group-item px-0 py-3">
                  <a href="{{ url(sprintf("/%s/%s/%s/%s/%s", date('Y', strtotime($update['date_published'])), date('m', strtotime($update['date_published'])), date('d', strtotime($update['date_published'])), $update['article_section'], $update['headline_dashed'])) }}">
                    <article class="d-flex">
                      <div class="article-body w-50 flex-grow-1 ms-0 pe-3">
                        <div class="d-flex w-100 justify-content-between mb-2">
                          <small class="text-uppercase"><b>{{$update['article_section']}}</b></small>
                          <small class="text-uppercase text-black-50">{{ str_replace(' ', '', str_replace(['hours', 'minutes'], ['h', 'mins'], \Carbon\Carbon::parse($update['date_published'])->diffForHumans(null, true))) }}</small>
                        </div>
                        <h6 class="article-title w-100 fw-light mb-0 crop-text-2">{{$update['headline']}}</h6>
                      </div>
                      <div class="flex-shrink-0 align-self-center">
                        <img style="object-fit: cover;" width="75px" height="75px" src="{!! $update['thumbnail_url'] !!}" alt="...">
                      </div>
                    </article>
                  </a>
                </li>
              @endforeach
            </ul>
          </div>
        </div>

      </div>
      </div>
    </main>

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
            <form action="https://cphgates.us20.list-manage.com/subscribe/post?u=e71c47511b5e02967960e85f4&amp;id=e1415b6230" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
              <h5 class="serif fst-italic">Subscribe to our newsletter</h5>
              <p>Monthly digest of whats new and exciting from us.</p>
              <div class="d-flex w-100 gap-2">
                <label for="newsletter1" class="visually-hidden">Email address</label>
                <input type="email" value="" name="EMAIL" class="required email form-control" id="mce-EMAIL" placeholder="Email address" required>
                <button type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn btn-primary" type="button">Subscribe</button>
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

        <div class="row d-block d-md-none">
          <div class="d-flex flex-column align-items-center justify-content-center py-4 mt-4 border-top px-4">
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

      <script src="https://cdn.jsdelivr.net/npm/@algolia/autocomplete-js"></script>
      <script src="/js/autocomplete.js" defer></script>

      <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
      <script src="/js/auth.js"></script> -->
      <!-- Optional JavaScript; choose one of the two! -->

      <!-- Option 1: Bootstrap Bundle with Popper -->
      <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script> -->
      <!-- JavaScript Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

      <!-- Option 2: Separate Popper and Bootstrap JS -->
      <!--
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
      -->
    </body>
</html>
