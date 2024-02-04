<header @class(!empty($class) ? $class : [ 'navbar navbar-expand-lg navbar-stuck fixed-top bg-dark' ])>
    <div class="d-flex justify-content-between container-fluid">
        <div>
            <div class="d-none d-lg-block navbar-dark">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                            <div class="d-flex align-items-center justify-content-center" style="font-size: 1.2em">
                                <i class="ai ai-menu"></i>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" aria-current="page" href="{{route('home')}}">{{__('messages.frontpage')}}</a>
                            </li>
                            @foreach($sections->slice(0,9) as $section)
                            <li>
                                <a class="dropdown-item" aria-current="page" href="{{ route('section', ['section' => $section->uri]) }}">{{$section->name}}</a>
                            </li>
                            @endforeach

                            @if ($sections->slice(9)->count() > 0)
                            <li class="dropdown">
                                <a class="dropdown-item dropdown-toggle" data-bs-auto-close="outside" aria-expanded="true" href="#" data-bs-toggle="dropdown">{{ ucfirst(__('messages.more')) }}</a>
                                <ul class="dropdown-menu">
                                    @foreach ($sections->slice(9) as $section)
                                    <li><a class="dropdown-item" href="{{ route('section', ['section' => $section->uri]) }}">{{$section->name}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            @endif
                        </ul>
                    </li>
                    <li class="d-none d-lg-block nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">
                            <div class="d-flex align-items-center justify-content-center" style="font-size: 1.2em">
                                <i class="ai ai-search"></i>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- off canvas mobile -->
            <div class="d-lg-none">
                <button type="button" class="navbar-toggler navbar-dark me-2" data-bs-toggle="offcanvas" data-bs-target="#primaryMenu" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-start" id="primaryMenu">
                    <div class="offcanvas-header">
                        <h5 class="mt-1 mb-0">Menu</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body pt-0">
                        <ul class="navbar-nav p-0">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('home')}}">{{__('messages.frontpage')}}</a>
                            </li>
                            @foreach ($sections->slice(0,9) as $section)
                            <li class="nav-item">
                                <a href="{{ route('section', ['section' => $section->uri]) }}" class="nav-link">{{$section->name}}</a>
                            </li>
                            @endforeach

                            @if ($sections->slice(9)->count() > 0)
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside">{{ ucfirst(__('messages.more')) }}</a>
                                <ul class="dropdown-menu">
                                    @foreach ($sections->slice(9) as $section)
                                    <li><a href="{{ route('section', ['section' => $section->uri]) }}" class="dropdown-item">{{$section->name}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            @endif
                        </ul>
                    </div>

                    <div class="offcanvas-header d-flex border-top">
                        @auth
                        @include('components.auth-dropdown', ['user' => $user])
                        @endauth

                        @guest
                        <a href="{{route('home')}}" class="btn btn-outline-primary w-100">
                            <i class="ai-login me-1"></i>
                            {{__('messages.log_in')}}
                        </a>
                        @endguest
                    </div>

                </div>
            </div>
        </div>

        <div class="text-center navbar-dark">
            <a class="navbar-brand fw-normal chomsky" href="/">
                <span class="d-md-none" style="font-size: 1.5rem;">{{__('messages.brand_name')}}</span>
                <span class="d-none d-md-block" style="font-size: 1.5rem;">{{__('messages.brand_name')}}</span>
            </a>
        </div>

        <div class="navbar-dark">
            <div class="d-lg-none">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">
                    <div class="d-flex align-items-center justify-content-center" style="font-size: 1.2em">
                        <i class="ai ai-search"></i>
                    </div>
                </a>
            </div>
            <div class="d-none d-lg-block">
                @auth
                @include('components.auth-dropdown', ['user' => $user])
                @endauth

                @guest
                <a type="button btn-primary" role="button" href="{{route('login')}}" class="btn btn-primary btn-sm">
                    <i class="ai-login me-2 ms-n1"></i>
                    {{__('messages.log_in')}}
                </a>
                @endguest
            </div>
        </div>

    </div>
</header>