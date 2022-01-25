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
      </style>
      <title>The Copenhagen Gates</title>
    </head>
    <body class="antialiased">
      <div class="container pt-4">
        <div class="row">
          <div class="col-4">
            <!-- Intentionally left empty. -->
          </div>
          <div class="col-4 d-flex justify-content-center mb-2">
            <div>
              <small class="font-weight-bold text-uppercase m-3">
                <strong>
                  <a href="#">English</a>
                </strong>
              </small>
            </div>
            <div>
              <small class="text-uppercase m-3">
                <a href="#">Dansk</a>
              </small>
            </div>
            <div class="">
              <small class="text-uppercase m-3">
                <a href="#">Arabic</a>
              </small>
            </div>
          </div>

          <div class="col-4 d-flex justify-content-end">
            <div class="px-2">
              <a type="button" role="button" href="subscription" class="btn btn-primary btn-sm">Subscribe</a>
            </div>
            <div>
              <button type="button" class="btn btn-primary btn-sm">Log in</button>
            </div>
          </div>
        </div>
      </div>
      <nav class="navbar navbar-expand-lg navbar-light bg-white pb-0">
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
      <div style="height: 39px; top: -1px;" class="nav-scroller py-2 mb-2 border-bottom border-dark border-2 container bg-white sticky-top">
        <nav id="nav-scroller-sections" class="nav d-flex justify-content-between">
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

      <main class="main pt-4">

      <div class="container">

        <div class="row pb-5">
          <ul class="list-group list-group-flush col-lg-6 col-md-9 col-12 border-end pe-4 px-4">
            <li class="list-group-item px-0 pt-0 pb-4">
              <a href="{{ url(sprintf("/%s/%s/%s/%s/%s", date('Y', strtotime($topArticles[0]->date_published)), date('m', strtotime($topArticles[0]->date_published)), date('d', strtotime($topArticles[0]->date_published)), $topArticles[0]->article_section, $topArticles[0]->headline_dashed)) }}">
                <article class="d-flex">
                  <div class="article-body flex-grow-1 ms-0 pe-3">
                    <p class="mb-2"><small class="text-uppercase"><b>{!! $topArticles[0]->article_section !!}</b></small></p>
                    <h2 class="article-title fw-light crop-text-1">{!! $topArticles[0]->headline !!}</h2>
                    <p class="text-black-50 crop-text-3">{!! $topArticles[0]->abstract !!}</p>
                  </div>
                  <div class="flex-shrink-0">
                    <img style="object-fit: cover;" width="250px" height="250px" src="{!! $topArticles[0]->thumbnail_url !!}" alt="...">
                  </div>
                </article>
              </a>
            </li>
            <li class="list-group-item px-0 py-4">
              <a href="{{ url(sprintf("/%s/%s/%s/%s/%s", date('Y', strtotime($topArticles[1]->date_published)), date('m', strtotime($topArticles[1]->date_published)), date('d', strtotime($topArticles[1]->date_published)), $topArticles[1]->article_section, $topArticles[1]->headline_dashed)) }}">
                <article class="d-flex">
                  <div class="article-body flex-grow-1 ms-0 pe-3">
                    <p class="mb-2"><small class="text-uppercase"><b>{!! $topArticles[1]->article_section !!}</b></small></p>
                    <h5 class="fw-light article-title crop-text-1">{!! $topArticles[1]->headline !!}</h5>
                    <p class="text-black-50 crop-text-2">{!! $topArticles[1]->abstract !!}</p>
                  </div>
                  <div class="flex-shrink-0">
                    <img style="object-fit: cover;" width="125px" height="125px" src="{!! $topArticles[1]->thumbnail_url !!}" alt="...">
                  </div>
                </article>
              </a>
            </li>
            <li class="list-group-item px-0 py-4">
              <a href="{{ url(sprintf("/%s/%s/%s/%s/%s", date('Y', strtotime($topArticles[2]->date_published)), date('m', strtotime($topArticles[2]->date_published)), date('d', strtotime($topArticles[2]->date_published)), $topArticles[2]->article_section, $topArticles[2]->headline_dashed)) }}">
                <article class="d-flex">
                  <div class="article-body flex-grow-1 ms-0 pe-3">
                    <p class="mb-2"><small class="text-uppercase"><b>{!! $topArticles[2]->article_section !!}</b></small></p>
                    <h5 class="fw-light article-title crop-text-1">{!! $topArticles[2]->headline !!}</h5>
                    <p class="text-black-50 crop-text-2">{!! $topArticles[2]->abstract !!}</p>
                  </div>
                  <div class="flex-shrink-0">
                    <img style="object-fit: cover;" width="125px" height="125px" src="{!! $topArticles[2]->thumbnail_url !!}" alt="...">
                  </div>
                </article>
              </a>
            </li>
          </ul>

          <ul style="overflow-y: scroll; height:629px;" class="list-group list-group-flush col-lg-3 col-md-3 col-12 border-end px-4">
            <h5 class="serif fst-italic">Latest updates</h5>
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

          <ul style="overflow-y: scroll; height:629px;" class="list-group list-group-flush col-lg-3 col-md-3 col-12 px-4">
            <h5 class="serif"><i>Noteworthy Individuals</i></h5>
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
        @endif

        @if (count($articles) >= 8)
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
        @endif

        <!-- Add one more mid row here. -->

      </div>
      </div>
    </main>
    <footer class="pt-4 my-md-5 pt-md-4 border-top border-2 container">
      <div class="mb-4" style="max-width: 300px">
        <a style="font-family: 'UnifrakturMaguntia', cursive; font-size: 1.8rem;" class="navbar-brand" href="#">The Copenhagen Gates</a>
        <br/>
        <p class="mt-3">
          The Copenhagen Gates was founded the year 2021. The world was in the midst of a pandemic and our media (in Denmark and the western world) had become corrupted to a point where it no longer reported to make sense in the interest of it's people. A new sensemaking aparatus was thought to be needed and that is the beginning and the end of this short story.
        </p>
        <!-- <small class="d-block mb-3 text-muted">© 2021-2022</small> -->
      </div>
       <!-- <div class="row">
        <div class="col-12 col-md-8">
          <div class="row">
            <div class="col-4 col-md-3">
              <p class="mb-2"><strong>NEWS</strong></p>
              <ul class="list-unstyled text-small">
                <li><a class="text-black" href="#">Cool stuff</a></li>
                <li><a class="text-black" href="#">Random feature</a></li>
                <li><a class="text-black" href="#">Team feature</a></li>
                <li><a class="text-black" href="#">Stuff for developers</a></li>
                <li><a class="text-black" href="#">Another one</a></li>
                <li><a class="text-black" href="#">Last time</a></li>
              </ul>
            </div>
            <div class="col-4 col-md-3">
              <p class="mb-2"><strong>WORLD</strong></p>
              <ul class="list-unstyled text-small">
                <li><a class="text-black" href="#">Resource</a></li>
                <li><a class="text-black" href="#">Resource name</a></li>
                <li><a class="text-black" href="#">Another resource</a></li>
                <li><a class="text-black" href="#">Final resource</a></li>
              </ul>
            </div>
            <div class="col-4 col-md-3">
              <p class="mb-2"><strong>HEALTH</strong></p>
              <ul class="list-unstyled text-small">
                <li><a class="text-black" href="#">Team</a></li>
                <li><a class="text-black" href="#">Locations</a></li>
                <li><a class="text-black" href="#">Privacy</a></li>
                <li><a class="text-black" href="#">Terms</a></li>
              </ul>
            </div>
            <div class="col-4 col-md-3">
              <p class="mb-2"><strong>USA</strong></p>
              <ul class="list-unstyled text-small">
                <li><a class="text-black" href="#">Cool stuff</a></li>
                <li><a class="text-black" href="#">Random feature</a></li>
                <li><a class="text-black" href="#">Team feature</a></li>
                <li><a class="text-black" href="#">Stuff for developers</a></li>
                <li><a class="text-black" href="#">Another one</a></li>
                <li><a class="text-black" href="#">Last time</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div> -->
    </footer>

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
