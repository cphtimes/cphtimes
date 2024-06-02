<style>
    [data-bs-theme=dark] .navbar-blur {
        background-color: rgba(var(--ar-dark-rgb), 0.8) !important;
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
    }
    [data-bs-theme=light] .navbar-blur {
        background-color: rgba(var(--ar-light-rgb), 0.8) !important;
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
    }
</style>

<header @class(!empty($class) ? $class : [ 'navbar navbar-expand-lg navbar-stuck fixed-top border-bottom navbar-blur' ])>
    <div class="d-flex justify-content-between container-fluid">
        <div>
            <div class="d-none d-lg-block navbar-light">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown d-none">
                        <a class="nav-link" href="{{route('frontpage')}}">
                            <div class="d-flex align-items-center justify-content-center" style="font-size: 1.2em">
                                <i class="ai ai-home"></i>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" data-bs-toggle="offcanvas" data-bs-target="#primaryMenu">
                            <div class="d-flex align-items-center justify-content-center" style="font-size: 1.2em">
                                <i class="ai ai-menu"></i>
                            </div>
                        </a>
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
                <button type="button" class="navbar-toggler navbar-light me-2" data-bs-toggle="offcanvas" data-bs-target="#primaryMenu" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>

        <div class="text-center navbar-light">
            <a class="navbar-brand fw-normal chomsky" href="{{route('frontpage')}}">
                <span class="d-md-none" style="font-size: 1.5rem;">{{__('messages.brand_name')}}</span>
                <span class="d-none d-md-block" style="font-size: 1.5rem;">{{__('messages.brand_name')}}</span>
            </a>
        </div>

        <div class="navbar-light">
            <div class="d-lg-none">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">
                    <div class="d-flex align-items-center justify-content-center" style="font-size: 1.2em">
                        <i class="ai ai-search"></i>
                    </div>
                </a>
            </div>
            <div class="d-none d-lg-block">

                <div class="d-flex justify-content-end align-items-center">
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
                        @include('components.auth-dropdown', ['user' => $user, 'text_white' => true])
                        @endauth

                        @guest
                        <a type="button btn-primary" role="button" href="{{route('login', ['redirect' => \Request::getRequestUri()])}}" class="btn btn-link">
                            <i class="ai-login me-2 ms-n1"></i>
                            {{__('messages.log_in')}}
                        </a>
                        @endguest
                    </div>
                </div>

            </div>
        </div>

    </div>
</header>

<div class="offcanvas offcanvas-start" id="primaryMenu" tabindex="-1">
    <div class="offcanvas-header">
        <h5 class="mt-1 mb-0">Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body pt-0">
        <ul class="navbar-nav p-0">
            <li class="nav-item">
                <a class="nav-link" href="{{route('frontpage')}}">{{__('messages.frontpage')}}</a>
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

    <div class="d-block d-lg-none offcanvas-header d-flex border-top">
        @auth
        @include('components.auth-dropdown', ['user' => $user, 'direction' => 'dropup', 'menu_alignment' => 'dropdown-menu-start'])
        @endauth

        @guest
        <a href="{{route('login', ['redirect' => \Request::getRequestUri()])}}" class="btn btn-outline-primary w-100">
            <i class="ai-login me-1"></i>
            {{__('messages.log_in')}}
        </a>
        @endguest
    </div>

</div>
