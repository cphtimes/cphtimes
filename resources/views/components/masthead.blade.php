<header class="d-none d-lg-block">
   <div class="container pt-lg-3">
        <!-- Top menu -->
        <div style="height: 60px;" class="row">
            <div class="col-4 ps-0">
                <div class="d-none" id="autocomplete"></div>
                <button onclick="window.autocomplete.openAutoComplete()" type="button" @class([
                'btn',
                'btn-link',
                'text-dark',
                'btn-sm'
                ])>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
                </button>
            </div>
            <div class="col-4 d-flex justify-content-center mb-2 px-0">
                <small class="text-center">{{__('messages.slogan')}}</small>
            </div>

            <div class="col-4 d-flex justify-content-end">
                <div class="px-2">
                    <a href="/meetings" @class([
                    'btn',
                    'btn-link',
                    'text-dark',
                    'btn-sm',
                    'd-none'
                    ])>
                        <i class="bi bi-plus-circle"></i>
                    </a>
                    <button id="header__moon" onclick="window.darkmode.toLightMode()" type="button" @class([
                    'd-none' => $darkMode == false,
                    'btn',
                    'btn-link',
                    'text-dark',
                    'btn-sm'
                    ])>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon" viewBox="0 0 16 16">
                        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z"/>
                    </svg>
                    </button>

                    <button id="header__sun" onclick="window.darkmode.toDarkMode()" type="button" @class([
                    'd-none' => $darkMode == true,
                    'btn',
                    'btn-link',
                    'text-dark',
                    'btn-sm'
                    ])>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-brightness-high" viewBox="0 0 16 16">
                        <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
                    </svg>
                    </button>
                </div>
                <div>
                    @auth
                        @include('components.auth-dropdown', ['user' => $user])
                    @endauth
                    @guest
                        <a type="button btn-primary" role="button" href="{{route('login')}}" class="btn btn-primary btn-sm">{{__('messages.log_in')}}</a>
                    @endguest
                </div>
            </div>
        </div>
    </div>

    <!-- Masterhead -->
    <div class="d-none d-lg-block navbar navbar-expand-lg navbar-light pb-0">
        <div class="container d-flex justify-content-between border-bottom w-100">
            <div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <small class="text-left">
                        <strong>{{ \Carbon\Carbon::now()->locale(App::currentLocale())->translatedFormat("l,") }}</strong><br/>
                        <span> {{ \Carbon\Carbon::now()->locale(App::currentLocale())->translatedFormat('d F Y') }} </span>
                    </small>
                    </li>
                </ul>
            </div>
            <div class="text-center">
                <a style="font-size: 4.0rem;" class="text-dark chomsky" href="/">{{__('messages.brand_name')}}</a>
            </div>
            <div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <img width="32" height="32" src="{{ sprintf("http://openweathermap.org/img/wn/%s@2x.png", $icon) }}"/>
                    <strong>{!! number_format($temp, 0) !!}°C</strong> <small class=" text-right">
                        {!! number_format($tempMax, 0) !!}° <span class="text-muted">{!! number_format($tempMin, 0) !!}°</span>
                    </small>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>