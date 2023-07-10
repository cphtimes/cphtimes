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

      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=UnifrakturMaguntia&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital@1&display=swap" rel="stylesheet">

      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

      <script src="{{ asset('js/app.js') }}" defer></script>
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
        .list-group-item border-dash {
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

        .cal-month, .cal-days, .cal-weekdays {
          display: grid;
          grid-template-columns: repeat(7, 1fr);
          align-items: center;
        }
        .cal-btn:not([disabled]) {
          font-weight: 500;
        }
        [type="button"]:not(:disabled), [type="reset"]:not(:disabled), [type="submit"]:not(:disabled), button:not(:disabled) {
            cursor: pointer;
        }
        .cal-weekday, .cal-btn {
          display: flex;
          flex-shrink: 0;
          align-items: center;
          justify-content: center;
          height: 3rem;
          padding: 0;
        }
      </style>

      <!-- Google tag (gtag.js) -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-W155VBDMQH"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-W155VBDMQH');
      </script>

      <link rel="stylesheet" href="/css/app.css">
      <title>Now - The Copenhagen Gates</title>
    </head>
    <body class="antialiased">
      <main class="main">
        @include('components.navbar', array(
          'sections' => $sections
        ))
        
        <!-- Happening now // Live now. -->
        <div class="container pb-5 my-md-2 my-lg-3 my-xl-4">
          <div class="row">
            <div class="col-lg-9">   
              <!-- Livestreams carousel -->
                <div class="row text-center text-md-start pb-3 pt-1 pt-sm-3 pt-md-4 pt-xl-5 mt-lg-2 mt-xl-0 mb-3 mb-lg-4">
                  <div class="col-md-6">
                    <h2 class="h1 mb-md-0 serif fst-italic">Livestreams</h2>
                  </div>
                  <div class="col-md-6 pt-2">
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
                </div>
                @if (count($livestreams) > 0)
                  <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                      @foreach ($livestreams as $meeting)
                        <div class="swiper-slide">
                          <figure class="figure w-100">
                            <div class="ratio ratio-16x9">
                              <iframe width="1920" height="808" src="{{$meeting->livestream_url}}" title="{{$meeting->topic}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                            </div>
                          </figure>
                        </div>
                      @endforeach
                    </div>
                  </div>
                @else
                  <p>No livestreams have started yet.</p>
                @endif
              
              <!-- Happening now -->
              <h2 class="w-100 serif fst-italic">Happening now</h2>
              @if (count($started) > 0)
                <ul class="list-group list-group-flush">
                  @foreach ($started as $meeting)
                      <li class="list-group-item border-dashed d-flex justify-content-between align-items-center">
                        <div>
                          <h5 class="fw-bold">{{ $meeting->topic }} (password: {{ $meeting->password ?? '' }})</h5>
                          <p>{{ $meeting->start_time }} ({{ $meeting->timezone }}) - {{ $meeting->duration }} minutes</p>
                        </div>
                        <div>
                          <a target="_blank" href="https://us04web.zoom.us/j/{{$meeting->id}}" class="btn btn-primary">Join</a>
                        </div>
                      </li>
                    @endforeach
                </ul>
              @else
                <p>No meetings have started yet.</p>
              @endif
              

              <!-- Scheduled -->
              <h2 class="w-100 serif fst-italic">Scheduled</h2>
              @if (count($scheduled) > 0)
              <ul class="list-group list-group-flush">
                @foreach ($scheduled as $meeting)
                  <li class="list-group-item border-dashed d-flex justify-content-between align-items-center">
                    <div>
                      <h5 class="fw-bold">{{ $meeting->topic }} (password: {{ $meeting->password ?? '' }})</h5>
                      <p>{{ $meeting->start_time }} ({{ $meeting->timezone }}) - {{ $meeting->duration }} minutes</p>
                    </div>
                    <div>
                      <button class="btn btn-outline-secondary">Add to calendar</button>
                    </div>
                  </li>
                @endforeach
              </ul>
              @else
                <p>No meetings have scheduled yet.</p>
              @endif
            </div>
            <div class="col-lg-3">
              <button class="btn btn-lg btn-outline-secondary mb-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar3 me-3" viewBox="0 0 16 16">
                  <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
                  <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                </svg>
                Subscribe to calendar
              </button>
          </div>
        </div>

        <!-- Become a host? -->
        <div class="dark-mode container mb-2 mb-md-3 mb-xl-4 pb-2">
          <div class="position-relative bg-dark rounded-5 overflow-hidden p-md-5 p-4">
            <div class="position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(255, 255, 255, .02);"></div>
            <div class="row justify-content-center py-sm-2 py-lg-5">
              <div class="col-xl-6 col-lg-7 col-md-8 col-sm-10 text-center">
                  <h2 class="h1 mb-4">Become a host?</h2>
                  <p class="fs-lg text-light opacity-70 pb-4 mb-3">Sign up to become a host of your own meetings and get featured on this site. The meetings can be any topic you wish, without limit.</p>
                  <a class="btn btn-lg btn-light" href="/sign-up">Sign up</a>
              </div>
            </div>
          </div>
        </div>

      <!-- Footer -->
      @include('components.footer', array(
        'sections' => $sections
      ))
    </div>


      <!-- Optional JavaScript; choose one of the two! -->
      <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@algolia/autocomplete-js"></script>

      <!-- Initialize Swiper -->
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
            "576": { "slidesPerView": 1 },
            "1000": { "slidesPerView": 1 }
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
