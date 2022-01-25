<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
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
      </style>
      <link rel="stylesheet" href="/css/app.css">
      <title>{!! $article->headline !!} - The Copenhagen Gates</title>
    </head>
    <body class="antialiased">
      <main class="main">
        <nav class="d-none sticky-top navbar navbar-light bg-white shadow-sm">
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

        <nav class="sticky-top navbar navbar-light bg-white shadow-sm"> <!-- border-bottom -->
          <div class="d-flex justify-content-between container-fluid">
            <div class="d-block d-lg-none">
              <button class="btn btn-link text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <div class="d-flex align-items-center justify-content-center" style="font-size: 1.2em">
                  <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-list text-black" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                  </svg>
                </div>
              </button>
            </div>
            <div class="d-none d-lg-block dropdown">
              <a href="#" role="button" class="btn btn-link text-dark" id="dropdownShareMenu" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="d-flex align-items-center justify-content-center" style="font-size: 1.2em">
                  <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-list text-black" viewBox="0 0 16 16">
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
              <a class="navbar-brand d-md-none" href="#">
                <span style="font-family: 'UnifrakturMaguntia', cursive; font-size: 1.5rem;">C</span>
              </a>
              <a class="navbar-brand d-none d-md-block" href="#">
                <span style="font-family: 'UnifrakturMaguntia', cursive; font-size: 1.5rem;">The Copenhagen Gates</span>
              </a>
            </div>
            <div>
              <a role="button" class="btn btn-link text-dark" href="/search">
                <div class="d-flex align-items-center justify-content-center" style="font-size: 1.2em">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                  </svg>
                </div>
              </a>
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
        <div class="d-flex justify-content-center">
          <div class="article-container pt-4">
            <small class="text-uppercase mb-3"><strong>{!! $article->article_section !!}</strong></small>
            <h1 class="my-3 serif fw-bold fst-italic">{!! $article->headline !!}</h1>
            <figure>
              <audio class="w-100" controls="" src="https://firebasestorage.googleapis.com/v0/b/the-copenhagen-gates.appspot.com/o/why-the-worst-get-on-top.mp3?alt=media&token=40c18fff-fcdf-491d-a9fe-069570f6f399"></audio>
            </figure>
            <p class="text-black-50 serif lh-lg mb-4 lead">{!! $article->abstract !!}</p>
            <div class="d-flex w-100 justify-content-between mb-4">
              <div class="d-flex align-items-center">
                <img src="https://avatars.githubusercontent.com/u/12796845?s=400&amp;u=fe3e51c86888d52675a3ac16dc470b705d0723cb&amp;v=4" width="45" height="45" class="rounded-circle border">
                <p class="text-black-50 me-auto ms-2 mb-0">
                  <a href="/daniel.r.lehmann" class="text-decoration-underline fw-bold">{!! $article->author !!}</a>
                  <br/>
                  <small class="text-muted font-monospace">{!! $article->date_published !!}</small>
                </p>
              </div>
              <div class="d-flex align-items-center">

                <div class="dropdown">
                  <a href="#" role="button" class="p-2 align-text-top text-decoration-none px-2" id="dropdownShareMenu" data-bs-toggle="dropdown" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-box-arrow-up align-text-top me-1" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M3.5 6a.5.5 0 0 0-.5.5v8a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5v-8a.5.5 0 0 0-.5-.5h-2a.5.5 0 0 1 0-1h2A1.5 1.5 0 0 1 14 6.5v8a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 14.5v-8A1.5 1.5 0 0 1 3.5 5h2a.5.5 0 0 1 0 1h-2z"/>
                      <path fill-rule="evenodd" d="M7.646.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 1.707V10.5a.5.5 0 0 1-1 0V1.707L5.354 3.854a.5.5 0 1 1-.708-.708l3-3z"/>
                    </svg>
                    Share
                  </a>
                  <ul class="dropdown-menu dropdown-menu-macos mx-0 shadow" aria-labelledby="dropdownShareMenu">
                    <li><a class="dropdown-item" href="#">Copy Link</a></li>
                    <li><a class="dropdown-item" href="#">Email</a></li>
                    <li><a class="dropdown-item" href="#">Facebook</a></li>
                    <li><a class="dropdown-item" href="#">Twitter</a></li>
                    <li><a class="dropdown-item" href="#">Telegram</a></li>
                  </ul>
                </div>

                <div>
                  <a href="#" class="p-2 align-text-top text-decoration-none px-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-bookmark-plus align-text-top me-1" viewBox="0 0 16 16">
                      <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
                      <path d="M8 4a.5.5 0 0 1 .5.5V6H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V7H6a.5.5 0 0 1 0-1h1.5V4.5A.5.5 0 0 1 8 4z"/>
                    </svg>
                     Read Later
                  </a>
                </div>

                <div class="dropdown">
                  <a href="#" role="button" class="p-2 align-text-top text-decoration-none px-2" id="dropdownMoreMenu" data-bs-toggle="dropdown" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-three-dots align-text-top me-1" viewBox="0 0 16 16">
                      <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                    </svg> More
                  </a>
                  <ul class="dropdown-menu dropdown-menu-macos mx-0 shadow" aria-labelledby="dropdownMoreMenu">
                    <li><a class="dropdown-item" href="#">Report Mistake</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <figure class="figure">
              <img class="figure-img" style="object-fit: cover;" height="400px" width="100%" src="{!! $article->thumbnail_url !!}"/>
              <figcaption class="figure-caption">A caption for the above image.</figcaption>
            </figure>

            <!-- <figure class="wp-block-audio">
              <audio class="w-100" controls="" src="Thu-Jan-13-2022.mp3"></audio>
            </figure> -->

            {!! $article->article_body !!}

            <footer class="pt-3">
              <div class="d-none d-md-block">
                <div class="d-flex justify-content-between py-4 my-4 border-top">
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

              <div class="d-block d-md-none">
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
        </div>
      </main>


      <!-- Optional JavaScript; choose one of the two! -->

      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

      <!-- Option 2: Separate Popper and Bootstrap JS -->
      <!--
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
      -->
    </body>
</html>
