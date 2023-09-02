<nav @class(!empty($class) ? $class : [
    'sticky-top navbar navbar-stuck',
    'shadow-sm' => $darkMode == false
])>
    <div class="d-flex justify-content-between container-fluid">
        <!-- Mobile left hand side -->
        <div class="d-block d-lg-none">
            <button class="btn btn-link text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <div class="d-flex align-items-center justify-content-center" style="font-size: 1.2em">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-list text-black" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                </div>
            </button>
        </div>
        <!-- Desktop left hand side -->
        <div class="d-none d-lg-block">
            <div class="d-flex justify-content-start">
                <div class="dropdown pe-2">
                    <button type="button" class="btn btn-link text-dark" id="dropdownShareMenu" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="d-flex align-items-center justify-content-center" style="font-size: 1.2em">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                            </svg>
                        </div>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-macos mx-0 shadow" aria-labelledby="dropdownShareMenu">
                        <li>
                            <a class="dropdown-item" aria-current="page" href="/">{{__('messages.frontpage')}}</a>
                        </li>
                        @foreach($sections as $section)
                            <li>
                                <a class="dropdown-item" aria-current="page" href="/section/{{$section->uri}}">{{$section->name}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
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
        </div>

        <!-- Logo -->
        <div class="text-center">
            <a class="navbar-brand fw-normal chomsky" href="/">
                <span class="d-md-none" style="font-size: 1.5rem;">{{__('messages.brand_name_letter')}}</span>
                <span class="d-none d-md-block" style="font-size: 1.5rem;">{{__('messages.brand_name')}}</span>
            </a>
        </div>

        <!-- Right hand side -->
        <div class="d-flex justify-content-end align-items-center">
            <div class="px-2">
                <div class="d-none d-lg-block">
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
            </div>
            <div>
                <!-- Desktop -->
                <div class="d-none d-lg-block">
                    @auth
                        <div class="dropdown d-none">
                            <a style="width: 35px; height: 35px; cursor: pointer" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <img class="rounded-circle" src="{{$user->photo_url}}" width="35" height="35" style="object-fit: cover;" alt="{{$user->display_name}}">
                            </a>
                            <ul style="width: 220px; z-index: 100000;" class="dropdown-menu dropdown-menu-macos mx-0 shadow" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="/by/{{$user->username}}">{{__('messages.your_account')}}</a></li>
                                <li><a class="dropdown-item" href="/account/settings">{{__('messages.settings')}}</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item dropdown-item-danger" href="/logout">{{__('messages.sign_out')}}</a></li>
                            </ul>
                        </div>

                        <div class="dropdown nav d-none d-sm-block order-lg-3"><a class="nav-link d-flex align-items-center p-0" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                            <img style="object-fit: cover;" class="border rounded-circle" src="{{$user->photo_url}}" width="36" height="36" alt="{{$user->display_name}}">
                            <div class="ps-2">
                                <div class="fs-xs lh-1 opacity-60">Hej,</div>
                                <div class="fs-sm dropdown-toggle">{{explode(" ", $user->display_name)[0]}}</div>
                            </div></a>
                            <div class="dropdown-menu dropdown-menu-end my-1">
                            <h6 class="dropdown-header fs-xs fw-medium text-muted text-uppercase pb-1">Account</h6>
                                <a class="dropdown-item" href="/by/{{$user->username}}"><i class="ai-user-check fs-lg opacity-70 me-2"></i>Overview</a>
                                <a class="dropdown-item" href="/account/settings"><i class="ai-settings fs-lg opacity-70 me-2"></i>Settings</a>
                            <div class="dropdown-divider"></div>
                            <h6 class="dropdown-header fs-xs fw-medium text-muted text-uppercase pb-1">Manage</h6>
                                <a class="dropdown-item" href="/write"><i class="ai-cart fs-lg opacity-70 me-2"></i>Orders</a>
                                <a class="dropdown-item" href="account-earnings.html"><i class="ai-activity fs-lg opacity-70 me-2"></i>Earnings</a>
                                <a class="dropdown-item d-flex align-items-center" href="account-chat.html"><i class="ai-messages fs-lg opacity-70 me-2"></i>Chat<span class="badge bg-danger ms-auto">4</span></a>
                                <a class="dropdown-item" href="account-favorites.html"><i class="ai-heart fs-lg opacity-70 me-2"></i>Favorites</a>
                            <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/logout"><i class="ai-logout fs-lg opacity-70 me-2"></i>{{__('messages.sign_out')}}</a>
                            </div>
                        </div>
                    @endauth
                    @guest
                        <a type="button btn-primary" role="button" href="/login" class="btn btn-primary btn-sm">Log in</a>
                    @endguest
                </div>

                <!-- Mobile and tablet -->
                <div class="d-block d-lg-none">
                    <div class="d-none" id="autocomplete"></div>
                    <button class="btn btn-link text-dark" onclick="window.autocomplete.openAutoComplete()" type="button" @class([
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
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Frontpage</a>
                </li>
                @foreach($sections as $section)
                    <li class="nav-item">
                        <a class="dropdown-item" aria-current="page" href="/section/{{$section->uri}}">{{$section->name}}</a>
                    </li>
                @endforeach
            </ul>
            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
            <div class="btn-group me-2" role="group" aria-label="Second group">
                <a type="button btn-primary" role="button" href="/login" class="btn btn-primary">{{__('messages.log_in')}}</a>
            </div>
            </div>
        </div>
    </div>
</nav>