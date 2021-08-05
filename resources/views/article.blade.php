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
      <title>The Copenhagen Gates</title>
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

        <nav class="navbar navbar-light bg-white border-bottom"> <!-- shadow-sm -->
          <div class="d-flex justify-content-between container">
            <div>
              <div class="dropdown">
                <a class="" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  <div class="d-flex align-items-center justify-content-center" style="font-size: 1.2em">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                  </div>
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="#">Frontpage</a></li>
                  <li><a class="dropdown-item" href="#">World</a></li>
                  <li><a class="dropdown-item" href="#">U.S.</a></li>
                  <li><a class="dropdown-item" href="#">Technology</a></li>
                  <li><a class="dropdown-item" href="#">Design</a></li>
                  <li><a class="dropdown-item" href="#">Culture</a></li>
                  <li><a class="dropdown-item" href="#">Business</a></li>
                  <li><a class="dropdown-item" href="#">Politics</a></li>
                  <li><a class="dropdown-item" href="#">Opinion</a></li>
                </ul>
              </div>
            </div>
            <div class="text-center">
              <a class="navbar-brand d-lg-none" href="#">
                <span style="font-family: 'UnifrakturMaguntia', cursive; font-size: 1.5rem;">C</span>
              </a>
              <a class="navbar-brand d-none d-lg-block" href="#">
                <span style="font-family: 'UnifrakturMaguntia', cursive; font-size: 1.5rem;">The Copenhagen Gates</span>
              </a>
            </div>
            <div>
              <a>
                <div class="d-flex align-items-center justify-content-center" style="font-size: 1.2em">
                  <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                  </svg>
                </div>
              </a>
            </div>
          </div>
        </nav>
        <div class="d-flex justify-content-center">
          <div class="article-container pt-4">
            <small class="text-uppercase mb-3"><strong>{!! $article->article_section !!}</strong></small>
            <h1 class="my-3 serif fw-bold fst-italic">{!! $article->headline !!}</h1>
            <p class="text-black-50 serif lh-lg mb-4">{!! $article->abstract !!}</p>
            <img class="mb-4" style="object-fit: cover;" height="400px" width="100%" src="{!! $article->thumbnail_url !!}"/>
            <div class="d-flex w-100 justify-content-between">
              <div class="d-flex align-items-center">
                <img src="https://avatars.githubusercontent.com/u/12796845?s=400&amp;u=fe3e51c86888d52675a3ac16dc470b705d0723cb&amp;v=4" width="35" height="35" class="rounded-circle border">
                <p class="text-black-50 me-auto ms-2 mb-0">
                  By <a href="/daniel.r.lehmann" class="text-decoration-underline fw-bold">{!! $article->author !!}</a>
                </p>
              </div>
              <div class="d-flex align-items-center">
                <a href="#" class="align-text-top text-decoration-none px-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-envelope align-text-top me-1" viewBox="0 0 16 16">
                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"></path>
                  </svg> Email
                </a>
                <a href="#" class="align-text-top text-decoration-none px-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-link align-text-top me-1" viewBox="0 0 16 16">
                    <path d="M6.354 5.5H4a3 3 0 0 0 0 6h3a3 3 0 0 0 2.83-4H9c-.086 0-.17.01-.25.031A2 2 0 0 1 7 10.5H4a2 2 0 1 1 0-4h1.535c.218-.376.495-.714.82-1z"/>
                    <path d="M9 5.5a3 3 0 0 0-2.83 4h1.098A2 2 0 0 1 9 6.5h3a2 2 0 1 1 0 4h-1.535a4.02 4.02 0 0 1-.82 1H12a3 3 0 1 0 0-6H9z"/>
                  </svg> Link
                </a>
                <a href="#" class="align-text-top text-decoration-none px-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-three-dots align-text-top me-1" viewBox="0 0 16 16">
                    <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                  </svg> More
                </a>
              </div>
            </div>
            <hr/>
            {!! $article->article_body !!}
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
