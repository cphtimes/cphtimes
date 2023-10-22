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
      <style>
      @font-face {
          font-family: "Chomsky";
          src: url("{{url('Chomsky.otf')}}");
      }

      .chomsky {
          font-family: "Chomsky";
      }
      </style>
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

      <style>
            img, figure {
            max-width: 100%;
            height: auto;
            vertical-align: middle;
            }
            .swiper-slide {
                width: 481px;
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

      <title>En ny vision for lyset - {{ env('APP_NAME') }}</title>
    </head>
    <body class="antialiased">
    <main class="page-wrapper">
      <!-- Page content-->
      <!-- Page header-->
      <section class="container pt-5 mt-5 mb-md-2 mb-lg-3 mb-xl-4">
        <!-- Breadcrumb-->
        <!-- Post title + post meta-->
        <h1 class="fw-bold display-4 text-center pb-2 pb-lg-3">En ny vision for lyset</h1>
        <div class="d-flex flex-wrap align-items-center justify-content-center mt-n2">
          <span class="text-muted fs-sm fw-normal p-0 mt-2 me-3">Daniel Lehmann <span class="fs-xs opacity-20 mt-2 mx-3">|</span> 21. oktober, 2023</span>
        </div>
      </section>
      <!-- Post content-->
      <section class="container pt-5 mt-md-2 mt-lg-3 mt-xl-4 pb-5 mb-md-2 mb-lg-4 mb-xl-5">
        <div class="row justify-content-center pt-xxl-2">
          <div class="col-lg-9 col-xl-8">
            <p class="fs-lg mb-3">Jeg vil gerne starte et projekt op, jeg først fik kendskab til da jeg læste bogen, <i>Handbook for the New Paradigm</i>. Den er nedskrevet, <u>men ikke forfattet</u>, af George Green, hvilket man kan høre mere om i disse interview, <a target="_blank" href="https://www.bitchute.com/video/gKJiRxRtg6PK/">del 1</a> og <a target="_blank" href="https://www.bitchute.com/video/DGAaJDd15a8M/">del 2</a>. Selve bogen gjorde et enormt indtryk på mig og jeg har brugt den som en inspirationskilde lige siden.</p>
            <p class="fs-lg pb-4 pb-xl-5">I starten af bogen bliver der beskrevet en ide til hvordan man kan hjælpe det vi som planet, som menneskehed, lige nu står overfor. Vi er alle sammen på forskellige bevidstheds såvel som erkendelses niveauer. Nogen ved at der er noget galt og at vi har behov for at komme sammen og finde løsninger og skabe visioner for fremtiden, mens andre stadigvæk “sover” for at bruge et velkendt begreb i manges øre. Nedstående video forklarer nærmere hvad det hele drejer sig om:</p>
            <figure class="figure">
                <div class="position-relative">
                    <img src="https://iafvhzqnbhomdrhaayob.supabase.co/storage/v1/object/public/images/2023/10/21/5.png" class="d-block rounded-5" alt="Video cover">
                    <div class="d-nline-flex position-absolute top-50 start-50 translate-middle zindex-2 p-4">
                        <a target="_blank" href="https://rumble.com/v3qxu4j-en-ny-vision-for-lyset.html" class="btn btn-icon btn-xl btn-primary rounded-circle stretched-link" data-bs-toggle="video">
                            <i class="bi bi-play-fill"></i>
                        </a>
                    </div>
                </div>
            </figure>

            <h2 class="h4 mb-lg-4 pt-3 pt-md-4 pt-xl-5">Projektet</h2>
            <p class="fs-lg pb-2 pb-lg-0 mb-4 mb-lg-5">Projektet er bedst forstået ved at læse beskederne fra bogen, <i>Handbook for the New Paradigm</i>, men overstående video giver en dybdegående introduktion. Det går ud på at danne grupper, der vil arbejde med den beskrevede opgave, og til det bliver der fortalt hvordan det skal forløbe sig:</p>
            <div class="mb-lg-4 pt-3 pt-md-4 pt-xl-5 card border-0 bg-secondary">
              <div class="card-body">
                <figure>
                  <blockquote class="blockquote">
                    <p>Projektopgaven er, at hver ny celle fortsætter med at dele sig. Hvordan skal det helt præcist fungere? Den første mødes med to. Så mødes hver igen med to andre, så mødes hver igen igen med to andre, indtil der er 7. (3 plus 2 er lig med 5 plus 2 er lig med 7.) Så mødes den gruppe, og de 4 tilføjelser opdeles og skaber deres egne 7. Nu kan originalerne på det tidspunkt igen begynde en ny cyklus eller droppe ud. Jo flere gange hver enkelt gentager processen, jo mere accelererer vækstcyklussen.</p>
                  </blockquote>
                  <figcaption class="blockquote-footer">Handbook for the New Paradigm</figcaption>
                </figure>
              </div>
            </div>

            <h2 class="h4 mb-lg-4 pt-3 pt-md-4 pt-xl-5">Har du lyst til at være med?</h2>
            <p class="fs-lg pb-2 pb-lg-0 mb-4 mb-lg-5">Jeg bor i hovedstadsområdet og du er mere en velkommen til at deltage i projektet (beskrevet i overstående video) her hos mig. Jeg leder derfor efter to mennesker som kunne have lyst til at danne en gruppe, men tænker også at flere kan træde til. Ved nærmere interesse kan du skrive til mig på: <a href="mailto:danielran11@gmail.com">danielran11@gmail.com</a>.</p>
            <p class="fs-lg pb-2 pb-lg-0 mb-4 mb-lg-5">Du kan læse dansk oversættelsen af de 4 første beskeder fra bogen <a target="_blank" href="https://iafvhzqnbhomdrhaayob.supabase.co/storage/v1/object/public/the-project/en-ny-vision-for-lyset.pdf">her</a>.</p>
          </div>
        </div>
      </section>
    </main>

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
