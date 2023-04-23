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

      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital@1&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=UnifrakturMaguntia&display=swap" rel="stylesheet">
      <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
      />

      <script src="{{ asset('js/app.js') }}" defer></script>
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">

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

        @media (min-width: 1200px) {

        }

        @media (min-width: 1400px) {

        }

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
      <title>{{ $activeSection }} - {{ env('APP_NAME') }}</title>
    </head>
    <body class="antialiased">
      @include('components.masthead', array(
          'darkMode' => $darkMode,
          'user' => $user,
          'icon' => $icon,
          'temp' => $temp,
          'tempMin' => $tempMin,
          'tempMax' => $tempMax,
          'dateFormatted' => $dateFormatted,
          'sections' => $sections
      ))
      <main class="main">
        @include('components.navbar', array(
          'class' => 'sticky-top navbar navbar-stuck d-block d-lg-none',
          'user' => $user,
          'sections' => $sections,
          'darkMode' => $darkMode
        ))
        @include('components.masthead-mini-nav', array(
          'sections' => $sections,
          'darkMode' => $darkMode
        ))
        <div class="container pt-lg-4">
          <div class="row pb-3 pb-md-5 px-md-3 px-lg-0">
            <!-- Above the fold -->
            <ul class="d-block d-md-none list-group list-group-flush col-xl-6 col-lg-8 col-md-12 col-12 pe-0 px-lg-4 border-end-0 border-end-lg">
                @if (count($topArticles) > 0)
                  <li class="list-group-item border-dashed">
                    @include('components.article-card', array(
                      'article' => (object) $topArticles[0],
                      'style' => 'compact'
                    ))
                  </li>
                @endif
                @for ($i = 1; $i < min(count($topArticles), 3); $i++)
                  @include('components.article-list-item', array(
                    'article' => (object) $topArticles[$i],
                    'style' => 'compact'
                  ))
                @endfor
            </ul>
            
            @if (count($topArticles) > 0)
              <div class="d-none d-md-block col-xl-6 border-end-0 border-end-lg">
                <a class="nav-link" href="{{ url(sprintf("/section/%s/%s", $topArticles[0]->section_uri, $topArticles[0]->headline_uri)) }}">
                  <article class="card border-0 px-3">
                      <div class="row d-flex align-items-center">
                          <div class="col-6 article-body card-body px-3">
                            <p><small class="text-uppercase text-dark"><b>{{ $topArticles[0]->section_uri }}</b></small></p>
                            <h3 class="article-title card-title fw-light crop-text-2">{{ $topArticles[0]->headline }}</h3>
                          </div>
                          <div class="col-6">
                            <p class="card-text crop-text-4 text-dark opacity-50">{{ $topArticles[0]->abstract }}</p>
                          </div>
                      </div>
                      <div class="ratio ratio-4x3">
                        <img style="object-fit: cover;" src="{{$topArticles[0]->image_url}}" alt="..."/>
                      </div>
                  </article>
                </a>
              </div>
            @endif

            <ul class="d-none d-md-block list-group list-group-flush col-xl-6 col-lg-8 col-md-12 col-12 pe-0 px-lg-4">
                @for ($i = 1; $i < min(count($topArticles), 5); $i++)
                  @include('components.article-list-item', array(
                    'article' => (object) $topArticles[$i],
                    'style' => 'expanded',
                    'class' => $i == 0 ? 'list-group-item py-3 pt-lg-0 pb-lg-3 border-dashed' : 'list-group-item py-3 border-dashed'
                  ))
                @endfor
            </ul>

          <!-- Grid of articles -->
          @for ($i = 0; $i < floor(count($articles)/4); $i++)
          <div>
            <div class="d-flex flex-wrap py-5">
              @for ($j = 0; $j < 4; $j++)
                @if (array(2, 0, 3, 1)[$i % 4] == $j)
                    <div @class([
                        'py-2 py-lg-0 px-2',
                        sprintf('order-sm-%d', $j),
                        sprintf('order-md-3', $j),
                        sprintf('order-lg-%d', $j),
                        'border-end-0 border-end-lg' => $j < 3,
                        'cell-flexible'
                    ])>
                      @include('components.article-card', array(
                        'article' => (object) $articles[$j+($i*4)],
                        'style' => 'expanded'
                      ))
                    </div>
                  @else
                    <div @class([
                        'px-2',
                        sprintf('order-sm-%d', $j),
                        sprintf('order-md-%d', $j == 3 ? 2 : $j),
                        sprintf('order-lg-%d', $j),
                        'border-end-0 border-end-md' => $j < 3,
                        'cell-compact'
                    ])>
                      @include('components.article-card', array(
                        'article' => (object) $articles[$j+($i*4)],
                        'style' => 'compact'
                      ))
                    </div>
                  @endif
              @endfor
            </div>
          </div>
          @endfor
         </div>
        </div>
      </main>
      
      <!-- Footer -->
      @include('components.footer', array(
        'sections' => $sections
      ))

      <script src="https://cdn.jsdelivr.net/npm/@algolia/autocomplete-js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      
      <script src="{{ asset('js/darkmode.js') }}" defer></script>
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
