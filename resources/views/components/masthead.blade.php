<header class="d-none d-lg-block">
    <div class="container pt-lg-3">
        <!-- Top menu -->
        <div style="height: 60px;" class="row">
            <div class="col-4 px-2">
                <a role="button" @class([ 'btn' , 'btn-link' , 'text-dark' , 'btn-sm' , 'ps-0' ]) disabled>
                    <i class="ai-search"></i>
                </a>
            </div>
            <div class="col-4 d-flex justify-content-center mt-1 mb-2 px-0">
                <small class="text-center">{{__('messages.slogan')}}</small>
            </div>

            <div class="col-4 d-flex justify-content-end">
                <div class="px-2">
                    <div class="mt-1 me-3 me-lg-4 ms-auto">
                        <div class="form-check form-switch mode-switch" data-bs-toggle="mode">
                            <input class="form-check-input" type="checkbox" id="theme-mode">
                            <label class="form-check-label" for="theme-mode">
                                <i class="ai-sun fs-lg"></i>
                            </label>
                            <label class="form-check-label" for="theme-mode">
                                <i class="ai-moon fs-lg"></i>
                            </label>
                        </div>
                    </div>
                </div>
                <div>
                    @auth
                    @include('components.auth-dropdown', ['user' => $user])
                    @endauth
                    @guest
                    <a role="button" href="{{route('login', ['redirect' => \Request::getRequestUri()])}}" class="btn btn-link btn-sm">
                        <i class="ai-login me-2"></i>
                        {{__('messages.log_in')}}
                    </a>
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
                            <strong>{{ \Carbon\Carbon::now()->locale(App::currentLocale())->translatedFormat("l,") }}</strong><br />
                            <span> {{ \Carbon\Carbon::now()->locale(App::currentLocale())->translatedFormat('d F Y') }} </span>
                        </small>
                    </li>
                </ul>
            </div>
            <div class="text-center">
                <a style="font-size: 4.0rem;" class="text-dark chomsky" href="{{route('frontpage')}}">{{__('messages.brand_name')}}</a>
            </div>
            <div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <img width="32" height="32" src="{{ sprintf("http://openweathermap.org/img/wn/%s@2x.png", $icon) }}" />
                        <strong>{!! number_format($temp, 0) !!}°C</strong> <small class=" text-right">
                            {!! number_format($tempMax, 0) !!}° <span class="text-muted">{!! number_format($tempMin, 0) !!}°</span>
                        </small>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
