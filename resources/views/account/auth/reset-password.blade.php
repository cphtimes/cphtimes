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
      <style>
@font-face {
    font-family: "Chomsky";
    src: url("{{url('Chomsky.otf')}}");
}

.chomsky {
    font-family: "Chomsky";
}
</style>
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

      <title>{{__('messages.reset_password_header')}} - {{env('APP_NAME')}}</title>

    </head>
    <body class="antialiased">

    <main class="page-wrapper">
      <!-- Page content-->
      <div class="d-flex flex-column align-items-center position-relative h-100 px-3 pt-5">
        <!-- Home button-->
        <a class="text-nav btn btn-icon bg-light border rounded-circle position-absolute top-0 end-0 zindex-2 p-0 mt-3 me-3 mt-sm-4 me-sm-4" href="/" data-bs-toggle="tooltip" data-bs-placement="left" aria-label="Back to home">
          <span class="text-dark align-self-end" style="font-family: 'UnifrakturMaguntia', cursive; font-size: 1.5rem;">C</span>
        </a>
        <!-- Content-->
        <div class="mt-auto" style="max-width: 700px;">
          <h1 class="serif fst-italic pt-3 pb-2 pb-lg-3">{{__('messages.reset_password_header')}}</h1>
          <p class="pb-2">{{__('messages.reset_password_text')}}</p>
          <div class="card dark-mode border-0 bg-primary">
            <form class="needs-validation card-body" method="POST" action="{{route('reset_password')}}">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    </div>
                @endif
              <div class="mb-4">
                <input type="hidden" name="token" value="{{ $token }}">
                <div class="position-relative">
                  <input name="email" class="form-control form-control-lg mb-3" type="email" placeholder="{{__('messages.email_address')}}" required autofocus>
                </div>
                <div class="position-relative">
                  <input name="password" class="form-control form-control-lg mb-3" type="password" placeholder="{{__('messages.password')}}" required>
                </div>
                <div class="position-relative">
                  <input name="password_confirmation" class="form-control form-control-lg" type="password" placeholder="{{__('messages.password_confirmation_placeholder')}}" required>
                </div>
              </div>
              <button class="btn btn-light" type="submit">{{__('messages.reset_password_btn')}}</button>
            </form>
          </div>
        </div>
        <!-- Copyright-->
        <p class="w-100 fs-sm pt-5 mt-auto mb-5" style="max-width: 700px;"><span class="text-muted">{{__('messages.all_rights_reserved', ['year' => now()->year, 'app' => env('APP_NAME')])}}</span></p>
      </div>
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
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </body>
</html>
