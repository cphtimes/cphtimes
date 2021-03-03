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
      </style>
      <title>The Copenhagen Times</title>
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
                <a href="#">Danish</a>
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
            <a style="font-family: 'UnifrakturMaguntia', cursive; font-size: 3.0rem;" class="navbar-brand" href="#">The Copenhagen Times</a>
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
      <div class="nav-scroller py-2 mb-2 border-bottom border-dark border-2 container bg-white sticky-top">
        <nav class="nav d-flex justify-content-between">
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

        <div class="row">
          <div class="col-md-3 col-lg-3 col-12">

            <article class="card mb-4 border-0">
              <header class="card-header bg-white">
                <div class="card-meta">
                  <a href="#"><time class="timeago" datetime="2019-10-26 20:00" timeago-id="1">1 year ago</time></a> in <a href="page-category.html">World</a>
                </div>
                <a href="post-image.html">
                  <h5 class="card-title">The Great Reset</h5>
                </a>
              </header>
              <a href="post-image.html">
                <img class="card-img rounded" src="https://assets.weforum.org/editor/large_axT9b6hlR7JO_aOObTKpVETUBy_dhO4ycdTO8yedo8o.JPG" alt="">
              </a>
              <div class="card-body">
                <p class="card-text">The World Economic Forum (WEF) and their role in covid-19.</p>
              </div>
            </article><!-- /.card -->

            <article class="card mb-4 border-0">
              <header class="card-header bg-white">
                <div class="card-meta">
                  <a href="#"><time class="timeago" datetime="2019-10-03 20:00" timeago-id="2">1 year ago</time></a> in <a href="page-category.html">Climate</a>
                </div>
                <a href="post-image.html">
                  <h5 class="card-title">Bjørn Lomborg</h5>
                </a>
              </header>
              <a href="post-image.html">
                <img class="card-img rounded" src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bf/Bj%C3%B8rn_Lomborg_1.jpg/800px-Bj%C3%B8rn_Lomborg_1.jpg" alt="">
              </a>
              <div class="card-body">
                <p class="card-text">Bjørn Lomborg sits at the UN climate comitee and is a leading figure in the climate change debate.</p>
              </div>
            </article><!-- /.card -->
          </div>
          <div class="col-md-3 col-lg-3 col-12">
            <article class="card mb-4 border-0">
              <header class="card-header bg-white">
                <div class="card-meta">
                  <a href="#"><time class="timeago" datetime="2019-07-16 20:00" timeago-id="3">1 year ago</time></a> in <a href="page-category.html">Works</a>
                </div>
                <a href="post-image.html">
                  <h5 class="card-title">Thomas Sowell</h5>
                </a>
              </header>
              <a href="post-image.html">
                <img class="card-img rounded" src="https://world.wng.org/sites/default/files/styles/article_hero/public/field/image/Thomas-Sowell.jpg?itok=rhPe48k_" alt="">
              </a>
              <div class="card-body">
                <p class="card-text">Thomas Sowell writes about intellectuals, defined as people whose end product is ideas, and the role they play in society.</p>
              </div>
            </article><!-- /.card -->

            <article class="card mb-4 border-0">
              <header class="card-header bg-white">
                <div class="card-meta">
                  <a href="#"><time class="timeago" datetime="2019-10-15 20:00" timeago-id="4">1 year ago</time></a> in <a href="page-category.html">Works</a>
                </div>
                <a href="post-image.html">
                  <h5 class="card-title">Soshana Zuboff</h5>
                </a>
              </header>
              <a href="post-image.html">
                <img class="card-img rounded" src="https://d1okx4gh513q4s.cloudfront.net/files/614045292286805741-speaker-shoshana-zuboff-profile.two-thirds.jpg" alt="">
              </a>
              <div class="card-body">
                <p class="card-text">Shoshana Zuboff is the author of 'The Age of Surveillance Capitalism - The Fight for a human future at the new frontier of power'.</p>
              </div>
            </article><!-- /.card -->
          </div>
          <div class="col-md-3 col-lg-3 col-12">
            <article class="card mb-4 border-0">
              <header class="card-header bg-white">
                <div class="card-meta">
                  <a href="#"><time class="timeago" datetime="2019-08-24 20:00" timeago-id="5">1 year ago</time></a> in <a href="page-category.html">Health</a>
                </div>
                <a href="post-image.html">
                  <h5 class="card-title">Sucharit Bhakdi</h5>
                </a>
              </header>
              <a href="post-image.html">
                <img class="card-img rounded" src="https://static6.suedkurier.de/storage/image/8/4/8/5/12895848_shift-966x593_1vPW8G_OCg9VG.jpg" alt="">
              </a>
              <div class="card-body">
                <p class="card-text">Renowned microbiologist, Sucharit Bhakdi wrote the book 'Corona False Alarm?'.</p>
              </div>
            </article><!-- /.card -->

            <article class="card mb-4 border-0">
              <header class="card-header bg-white">
                <div class="card-meta">
                  <a href="#"><time class="timeago" datetime="2019-05-08 20:00" timeago-id="6">1 year ago</time></a> in <a href="page-category.html">Journey</a>
                </div>
                <a href="post-image.html">
                  <h5 class="card-title">Daniel Schmachtenberger</h5>
                </a>
              </header>
              <a href="post-image.html">
                <img class="card-img rounded" src="https://civilizationemerging.com/wp-content/uploads/2019/10/Daniel-Schmachtenberger.jpg" alt="">
              </a>
              <div class="card-body">
                <p class="card-text">Daniel Schmachtenberger is concerned with critical system thinking.</p>
              </div>
            </article><!-- /.card -->

          </div>
          <div class="col-md-3 col-lg-3 col-12">
            <article class="card mb-4 border-0">
              <header class="card-header bg-white">
                <div class="card-meta">
                  <a href="#"><time class="timeago" datetime="2019-08-24 20:00" timeago-id="5">1 year ago</time></a> in <a href="page-category.html">Health</a>
                </div>
                <a href="post-image.html">
                  <h5 class="card-title">Bret Weinstein</h5>
                </a>
              </header>
              <a href="post-image.html">
                <img class="card-img rounded" src="https://media1.fdncms.com/stranger/imager/u/original/26476915/image_one_small.jpg" alt="">
              </a>
              <div class="card-body">
                <p class="card-text">Bret Weinstein presents the lack leak hypothesis as it pertains to Covid-19.</p>
              </div>
            </article><!-- /.card -->

            <article class="card mb-4 border-0">
              <header class="card-header bg-white">
                <div class="card-meta">
                  <a href="#"><time class="timeago" datetime="2019-05-08 20:00" timeago-id="6">1 year ago</time></a> in <a href="page-category.html">USA</a>
                </div>
                <a href="post-image.html">
                  <h5 class="card-title">The 2020 Election</h5>
                </a>
              </header>
              <a href="post-image.html">
                <img class="card-img rounded" src="https://api.time.com/wp-content/uploads/2021/02/donald-trump-joe-biden-election.jpg?w=800&quality=85" alt="">
              </a>
              <div class="card-body">
                <p class="card-text">Time Magazine wrote the article title 'The Secret History of the Shadow Campaign That Saved the 2020 Election' which made postulations that the US in 2020 was rigged in favor of the democratic party.</p>
              </div>
            </article><!-- /.card -->

          </div>
        </div>
      </div>

    </main>
    <footer class="pt-4 my-md-5 pt-md-4 border-top border-2 container">
      <div class="mb-4">
        <a style="font-family: 'UnifrakturMaguntia', cursive; font-size: 1.8rem;" class="navbar-brand" href="#">The Copenhagen Times</a>
        <!-- <small class="d-block mb-3 text-muted">© 2021-2022</small> -->
      </div>
      <div class="row">
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
      </div>
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
