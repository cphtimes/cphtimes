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
      <link href="https://fonts.googleapis.com/css2?family=UnifrakturMaguntia&display=swap" rel="stylesheet">

      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital@1&display=swap" rel="stylesheet">

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
        article:hover>.article-body>.article-title {
          text-decoration: underline !important;
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
              <button type="button" class="btn btn-primary btn-sm">Subscribe</button>
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
            <a style="font-family: 'UnifrakturMaguntia', cursive; font-size: 3.0rem;" class="navbar-brand" href="#">The Copenhagen Gates</a>
          </div>
          <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
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
          <small><a class="p-2 link-secondary" href="#">World</a></small>
          <small><a class="p-2 link-secondary" href="#">U.S.</a></small>
          <small><a class="p-2 link-secondary" href="#">Technology</a></small>
          <small><a class="p-2 link-secondary" href="#">Design</a></small>
          <small><a class="p-2 link-secondary" href="#">Culture</a></small>
          <small><a class="p-2 link-secondary" href="#">Business</a></small>
          <small><a class="p-2 link-secondary" href="#">Politics</a></small>
          <small><a class="p-2 link-secondary" href="#">Opinion</a></small>
          <small><a class="p-2 link-secondary" href="#">Science</a></small>
          <small><a class="p-2 link-secondary" href="#">Health</a></small>
          <small><a class="p-2 link-secondary" href="#">Style</a></small>
          <small><a class="p-2 link-secondary" href="#">Travel</a></small>
        </nav>
      </div>

      <main class="main pt-4">

      <div class="container">

        <div class="row pb-5">
          <ul class="list-group list-group-flush col-lg-6 col-md-9 col-12 border-end pe-4 px-4">
            <li class="list-group-item px-0 pt-0 pb-4">
              <a href="/2021/07/31/world/covid-19-symposium">
                <article class="d-flex">
                  <div class="article-body flex-grow-1 ms-0 pe-3">
                    <p class="mb-2"><small class="text-uppercase"><b>World</b></small></p>
                    <h2 class="article-title fw-light">Covid-19 Symposium</h2>
                    <p class="text-black-50">An hours long symposium was held yesterday, Friday, with some of the worlds leading doctors and more, discussing Covid-19.</p>
                  </div>
                  <div class="flex-shrink-0">
                    <img style="object-fit: cover;" width="250px" height="250px" src="https://images.unsplash.com/photo-1583324113626-70df0f4deaab?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTV8fGNvdmlkJTIwMTl8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="...">
                  </div>
                </article>
              </a>
            </li>
            <li class="list-group-item px-0 py-4">
              <a href="/2021/07/31/health/masks-are-toxic-if-worn-in-prolonged-periods-of-time">
                <article class="d-flex">
                  <div class="article-body flex-grow-1 ms-0 pe-3">
                    <p class="mb-2"><small class="text-uppercase"><b>Health</b></small></p>
                    <h5 class="fw-light article-title">Masks are toxic if worn in prolonged periods of time</h5>
                    <p class="text-black-50">I will attempt to encapsulate, search and seek out all the people...</p>
                  </div>
                  <div class="flex-shrink-0">
                    <img style="object-fit: cover;" width="125px" height="125px" src="https://images.unsplash.com/photo-1602542165989-999c53234fdd?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NTV8fGNvdmlkJTIwMTl8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="...">
                  </div>
                </article>
              </a>
            </li>
            <li class="list-group-item px-0 py-4">
              <!-- Been sold a bill of goods -->
              <a href="/2021/07/31/world/covid-19-vaccines-are-dangerous-and-potentially-lethal">
                <article class="d-flex">
                  <div class="article-body flex-grow-1 ms-0 pe-3">
                    <p class="mb-2"><small class="text-uppercase"><b>World</b></small></p>
                    <h5 class="fw-light article-title">Covid-19 Vaccines are dangerous and potentially lethal</h5>
                    <p class="text-black-50">I will attempt to encapsulate, search and seek out all the people...</p>
                  </div>
                  <div class="flex-shrink-0">
                    <img style="object-fit: cover;" width="125px" height="125px" src="https://images.unsplash.com/photo-1605377347958-e8bd4c00ba1d?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mjl8fGNvdmlkJTIwMTl8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="...">
                  </div>
                </article>
              </a>
            </li>
            <!-- <li class="list-group-item pt-4 pb-4 px-0">
              <article class="d-flex">
                <div class="flex-grow-1 ms-0 pe-2">
                  <small class="text-uppercase"><b>World</b></small>
                  <h5 class="fw-light">Vaccine Passports and the perils of mass surveillance</h5>
                  <p class="text-muted">I will attempt to encapsulate, search and seek out all the people...</p>
                </div>
                <div class="flex-shrink-0">
                  <img style="object-fit: cover;" width="125px" height="125px" src="https://images.unsplash.com/photo-1613388395752-a4f8730271e2?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8dmFjY2luZSUyMHBhc3Nwb3J0fGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="...">
                </div>
              </article>
            </li> -->
          </ul>

          <ul style="overflow-y: scroll; height:677px;" class="list-group list-group-flush col-lg-3 col-md-3 col-12 border-end px-4">
            <h5 class="serif"><i>Latest updates</i></h5>
            @foreach ($latestUpdates as $update)
              <li class="list-group-item px-0 py-4">
                <a href="/2021/07/31/world/test">
                  <article class="d-flex">
                    <div class="article-body w-100 flex-grow-1 ms-0 pe-2">
                      <div class="d-flex w-100 justify-content-start">
                        <small class="text-uppercase"><b>{{$update['topic']}}</b></small>
                        <small class="text-uppercase text-black-50">{{$update['date']}}</small>
                      </div>
                      <h5 class="article-title w-100 fw-light d-inline-block text-truncate">{{$update['title']}}</h5>
                    </div>
                  </article>
                </a>
              </li>
            @endforeach
          </ul>

          <ul class="list-group list-group-flush col-lg-3 col-md-3 col-12 px-4">
            <h5 class="serif"><i>Noteworthy Individuals</i></h5>
            <li class="list-group-item py-4 px-0">
              <article class="d-flex align-items-center">
                <div class="flex-shrink-0">
                  <img style="object-fit: cover;" width="65px" height="65px" class="rounded-circle" src="https://www.chelseagreen.com/wp-content/uploads/Sucharit-Bhakdi-300x443.jpeg" alt="...">
                </div>
                <div class="article-body flex-grow-1 ms-3">
                  <b class="article-title">Sucharit Bhakdi</b><br/>
                  <span>Germany's most cited microbiologist</span>
                </div>
              </article>
            </li>
            <li class="list-group-item py-4 px-0">
              <article class="d-flex align-items-center">
                <div class="flex-shrink-0">
                  <img style="object-fit: cover;" width="65px" height="65px" class="rounded-circle" src="https://biotech-atelier.com/wp-content/uploads/2020/07/dcahill.jpg" alt="...">
                </div>
                <div class="article-body flex-grow-1 ms-3">
                  <b class="article-title">Dolores Cahill</b><br/>
                  <span>A professor at University College Dublin</span>
                </div>
              </article>
            </li>
            <li class="list-group-item py-4 px-0">
              <article class="d-flex align-items-center">
                <div class="flex-shrink-0">
                  <img style="object-fit: cover;" width="65px" height="65px" class="rounded-circle" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fpcrclaims.co.uk%2Fimg%2Fpeople%2FDr-Mike-Yeadon.jpg&f=1&nofb=1" alt="...">
                </div>
                <div class="article-body flex-grow-1 ms-3">
                  <b class="article-title">Dr. Mike Yeadon</b><br/>
                  <span>Former VP of Pfizer Pharmaceuticals</span>
                </div>
              </article>
            </li>
            <li class="list-group-item py-4 px-0">
              <article class="d-flex align-items-center">
                <div class="flex-shrink-0">
                  <img style="object-fit: cover;" width="65px" height="65px" class="rounded-circle" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.spd-geschichtswerkstatt.de%2Fimages%2Fthumb%2F2%2F27%2FWolfgang_Wodarg.jpg%2F952px-Wolfgang_Wodarg.jpg&f=1&nofb=1" alt="...">
                </div>
                <div class="article-body flex-grow-1 ms-3">
                  <b class="article-title">Wolfgang Wodarg</b><br/>
                  <span>A German physician and politician</span>
                </div>
              </article>
            </li>
          </ul>
        </div>

        <div class="row pb-5">
          <div class="col border-end">
            <a href="/2021/07/31/world/the-story-israel-and-the-experimental-vaccines">
              <article class="border-0 px-2">
                <img style="object-fit: cover;" width="190px" height="190px" src="https://images.unsplash.com/photo-1599340695274-f8a2f344174d?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTh8fGlzcmFlbHxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="..." class="">
                <div class="article-body card-body px-0 pb-0">
                  <p><small class="text-uppercase text-dark"><b>World</b></small></p>
                  <h5 class="article-title card-title fw-light">The story of Israel and the experimental vaccines</h5>
                  <p class="text-black-50">I will attempt to encapsulate, search and seek out all the people...</p>
                </div>
              </article>
            </a>
          </div>

          <div class="col border-end">
            <a href="/2021/07/31/world/who-making-a-case-for-institutional-capture">
              <article class="border-0 px-2">
                <img style="object-fit: cover;" width="190px" height="190px" src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e9/WHO_flag.png/1920px-WHO_flag.png" alt="..." class="">
                <div class="article-body card-body px-0 pb-0">
                  <p><small class="text-uppercase text-dark"><b>World</b></small></p>
                  <h5 class="article-title card-title fw-light">WHO - Making a case for institutional capture</h5>
                  <p class="text-black-50">I will attempt to encapsulate, search and seek out all the people...</p>
                </div>
              </article>
            </a>
          </div>

          <div class="col border-end">
            <a href="/2021/07/31/health/fearmongering-the-mainstream-medias-favorite-tool">
              <article class="border-0 px-2">
                <img style="object-fit: cover;" width="600px" height="330px" src="https://images.unsplash.com/photo-1584359983106-ef9366f27454?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjV8fG5ld3N8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="..." class="">
                <div class="article-body card-body px-0 pb-0">
                  <p><small class="text-uppercase text-dark"><b>World</b></small></p>
                  <h5 class="article-title card-title fw-light">Fearmongering. The mainstream media's favorite tool.</h5>
                </div>
              </article>
            </a>
          </div>

          <div class="col pe-0">
            <a href="/2021/07/31/world/reading-up-on-your-inalienable-human-rights">
              <article class="border-0 px-2">
                <img style="object-fit: cover;" width="100%" height="190px" src="https://images.unsplash.com/photo-1589578527966-fdac0f44566c?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8cmlnaHRzfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="..." class="">
                <div class="article-body card-body px-0 pb-0">
                  <p><small class="text-uppercase text-dark"><b>World</b></small></p>
                  <h5 class="article-title card-title fw-light">Reading up on your inalienable human rights</h5>
                  <p class="text-black-50">I will attempt to encapsulate, search and seek out all the people...</p>
                </div>
              </article>
            </a>
          </div>
        </div>

        <div class="row pb-5">
          <div class="col border-end">
            <article class="border-0 px-2">
              <img style="object-fit: cover;" width="600px" height="330px" src="https://images.unsplash.com/photo-1601319759324-f311bd99ebb9?ixid=MnwxMjA3fDB8MHxzZWFyY2h8ODl8fHRydW1wJTIwZG9sbHxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="..." class="">
              <div class="article-body card-body px-0 pb-0">
                <p><small class="text-uppercase text-dark"><b>Oppinion</b></small></p>
                <h5 class="article-title card-title fw-light">The vision of the annointed and the creation of carricurates.</h5>
              </div>
            </article>
          </div>

          <div class="col border-end">
            <article class="border-0 px-2">
              <img style="object-fit: cover;" width="190px" height="190px" src="https://images.unsplash.com/photo-1581358316909-6d4035624967?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8bXVkfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="..." class="">
              <div class="article-body card-body px-0 pb-0">
                <p><small class="text-uppercase text-dark"><b>World</b></small></p>
                <h5 class="article-title card-title fw-light">Throwing mud and hoping that it sticks</h5>
                <p class="text-black-50">I will attempt to encapsulate, search and seek out all the people...</p>
              </div>
            </article>
          </div>

          <div class="col border-end">
            <article class="border-0 px-2">
              <img style="object-fit: cover;" width="100%" height="190px" src="https://images.unsplash.com/photo-1613388395752-a4f8730271e2?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTJ8fHBhc3Nwb3J0fGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="..." class="">
              <div class="article-body card-body px-0 pb-0">
                <p><small class="text-uppercase text-dark"><b>World</b></small></p>
                <h5 class="article-title card-title fw-light">'Standing at the gates of hell': State of the Covid-19 Passports</h5>
                <p class="text-black-50">I will attempt to encapsulate, search and seek out all the people...</p>
              </div>
            </article>
          </div>

          <div class="col pe-0">
            <article class="border-0 px-2">
              <img style="object-fit: cover;" width="190px" height="190px" src="https://images.unsplash.com/photo-1490349708435-19d432984978?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjIyfHx0YWxraW5nfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="..." class="">
              <div class="article-body card-body px-0 pb-0">
                <p><small class="text-uppercase text-dark"><b>World</b></small></p>
                <h5 class="article-title card-title fw-light">Civil discourse collapse</h5>
                <p class="text-black-50">I will attempt to encapsulate, search and seek out all the people...</p>
              </div>
            </article>
          </div>
        </div>

        <div class="row">
          <ul style="overflow-y: scroll; height:677px;" class="list-group list-group-flush col-lg-3 col-md-3 col-12 border-end px-4">
            <h5 class="serif"><i>World</i></h5>
            @foreach ($latestUpdates as $update)
              <li class="list-group-item px-0 py-4">
                <article class="d-flex">
                  <div class="article-body w-100 flex-grow-1 ms-0 pe-2">
                    <div class="d-flex w-100 justify-content-start">
                      <small class="text-uppercase"><b>{{$update['topic']}}</b></small>
                      <small class="text-uppercase text-black-50">{{$update['date']}}</small>
                    </div>
                    <h5 class="article-title w-100 fw-light d-inline-block text-truncate">{{$update['title']}}</h5>
                  </div>
                </article>
              </li>
            @endforeach
          </ul>
          <ul style="overflow-y: scroll; height:677px;" class="list-group list-group-flush col-lg-3 col-md-3 col-12 border-end px-4">
            <h5 class="serif"><i>Health</i></h5>
            @foreach ($latestUpdates as $update)
              <li class="list-group-item px-0 py-4">
                <article class="d-flex">
                  <div class="article-body w-100 flex-grow-1 ms-0 pe-2">
                    <div class="d-flex w-100 justify-content-start">
                      <small class="text-uppercase"><b>{{$update['topic']}}</b></small>
                      <small class="text-uppercase text-black-50">{{$update['date']}}</small>
                    </div>
                    <h5 class="article-title w-100 fw-light d-inline-block text-truncate">{{$update['title']}}</h5>
                  </div>
                </article>
              </li>
            @endforeach
          </ul>
          <ul style="overflow-y: scroll; height:677px;" class="list-group list-group-flush col-lg-3 col-md-3 col-12 border-end px-4">
            <h5 class="serif"><i>Technology</i></h5>
            @foreach ($latestUpdates as $update)
              <li class="list-group-item px-0 py-4">
                <article class="d-flex">
                  <div class="article-body w-100 flex-grow-1 ms-0 pe-2">
                    <div class="d-flex w-100 justify-content-start">
                      <small class="text-uppercase"><b>{{$update['topic']}}</b></small>
                      <small class="text-uppercase text-black-50">{{$update['date']}}</small>
                    </div>
                    <h5 class="article-title w-100 fw-light d-inline-block text-truncate">{{$update['title']}}</h5>
                  </div>
                </article>
              </li>
            @endforeach
          </ul>
          <ul style="overflow-y: scroll; height:677px;" class="list-group list-group-flush col-lg-3 col-md-3 col-12 px-4">
            <h5 class="serif"><i>Design</i></h5>
            @foreach ($latestUpdates as $update)
              <li class="list-group-item px-0 py-4">
                <article class="d-flex">
                  <div class="article-body w-100 flex-grow-1 ms-0 pe-2">
                    <div class="d-flex w-100 justify-content-start">
                      <small class="text-uppercase"><b>{{$update['topic']}}</b></small>
                      <small class="text-uppercase text-black-50">{{$update['date']}}</small>
                    </div>
                    <h5 class="article-title w-100 fw-light d-inline-block text-truncate">{{$update['title']}}</h5>
                  </div>
                </article>
              </li>
            @endforeach
          </ul>
        </div>

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
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

      <!-- Option 2: Separate Popper and Bootstrap JS -->
      <!--
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
      -->
    </body>
</html>
