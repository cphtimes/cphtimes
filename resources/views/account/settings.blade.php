<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{__('messages.settings')}} - {{ __('messages.brand_name') }}</title>
    <meta name="description" content="">

    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="{{__('messages.settings')}} - {{ __('messages.brand_name') }}">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="{{app()->getLocale() == 'en' ? asset('CPHGates Open Graph Logo.png') : asset('KBHPorte Open Graph Logo.png')}}">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="{{url()->full()}}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{__('messages.settings')}} - {{ __('messages.brand_name') }}">
    <meta property="og:description" content="">
    <meta property="og:image" content="{{app()->getLocale() == 'en' ? asset('CPHGates Open Graph Logo.png') : asset('KBHPorte Open Graph Logo.png')}}">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{__('messages.settings')}} - {{ __('messages.brand_name') }}">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="{{app()->getLocale() == 'en' ? asset('CPHGates Open Graph Logo.png') : asset('KBHPorte Open Graph Logo.png')}}">

    <link href="{{ asset('icons/around-icons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/theme-switcher.js') }}" defer></script>

</head>

<body class="antialiased">

    <main class="page-wrapper">
        @include('components.navbar', array(
        'user' => $currentUser,
        'sections' => $sections
        ))
        <div class="container py-5 mt-4 mt-lg-5 mb-lg-4 my-xl-5">
            <div class="row pt-sm-2 pt-lg-0">
                <!-- Sidebar (offcanvas on sreens < 992px)-->
                @include('components.author-sidebar', array(
                'author' => new \App\Models\Author(['user_id' => $currentUser->id]),
                'currentUser' => $currentUser
                ))
                <!-- Page content-->
                <div class="col-lg-9 pt-4 pb-2 pb-sm-4">
                    <h1 class="serif fst-italic h2 mb-4">{{__('messages.settings')}}</h1>
                    <!-- Basic info-->
                    <section class="card border py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
                        <div class="card-body">
                            <div class="d-flex align-items-center mt-sm-n1 pb-4 mb-0 mb-lg-1 mb-xl-3"><i class="ai-user text-primary lead pe-1 me-2"></i>
                                <h2 class="h4 mb-0">{{__('messages.basic_info')}}</h2>
                            </div>
                            <form class="needs-validation" method="POST" action="{{ route('account_settings_basic_info') }}" enctype="multipart/form-data">
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
                                <div class="d-flex align-items-center">
                                    <div class="dropdown">
                                        <a class="d-flex flex-column justify-content-end position-relative overflow-hidden rounded-circle bg-size-cover bg-position-center flex-shrink-0" href="#" data-bs-toggle="dropdown" aria-expanded="false" style="background-position: center; background-size: cover; background-repeat: no-repeat; width: 80px; height: 80px; background-image: url({{$currentUser->photo_url}});">
                                            <span class="d-block text-light text-center lh-1 pb-1" style="background-color: rgba(0,0,0,.5)">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-fill" viewBox="0 0 16 16">
                                                    <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                                    <path d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2zm.5 2a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0z" />
                                                </svg>
                                            </span>
                                        </a>
                                        <div class="dropdown-menu my-1">
                                            <input id="photo" name="photo" type="file" multiple="" hidden>
                                            <a style="cursor: pointer;" class="dropdown-item fw-normal" onclick="document.getElementById('photo').click();">{{__('messages.upload_new_photo')}}</a>
                                            <a class="dropdown-item text-danger fw-normal" href="#">{{__('messages.delete_photo')}}</a>
                                        </div>
                                    </div>
                                    <div class="ps-3">
                                        <h3 class="h6 mb-1">{{__('messages.profile_picture')}}</h3>
                                        <p class="fs-sm text-muted mb-0">{{__('messages.profile_picture_description')}}</p>
                                    </div>
                                </div>
                                <div class="row g-3 g-sm-4 mt-0 mt-lg-2">
                                    <div class="col-sm-6">
                                        <label class="form-label" for="fn">{{__('messages.display_name')}}</label>
                                        <input name="display_name" class="form-control" type="text" value="{{$currentUser->display_name}}" id="fn" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="username">{{__('messages.username')}}</label>
                                        <input pattern="^(?=[a-zA-Z0-9._]{8,20}$)(?!.*[_.]{2})[^_.].*[^_.]$" name="username" class="form-control" type="text" value="{{$currentUser->username}}" id="username" disabled>
                                    </div>
                                    <div class="col-sm-12">
                                        <label class="form-label" for="email">{{__('messages.email_address')}}</label>
                                        <input name="email" class="form-control" type="email" value="{{$currentUser->email}}" id="email" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="country">{{__('messages.country')}}</label>
                                        <select selected="{{$currentUser->country_code}}" name="country_code" class="form-select" id="country">
                                            <option value="" disabled="">{{__('messages.choose')}}</option>
                                            @foreach ($countries as $country)
                                            @if ($country['alpha-2'] == $currentUser->country_code)
                                            <option value="{{$country['alpha-2']}}" selected>{{$country["name"]}}</option>
                                            @else
                                            <option value="{{$country['alpha-2']}}">{{$country["name"]}}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="language">{{__('messages.reads_languages')}}</label>
                                        <select name="reads_languages" class="form-select" id="reads_languages" required>
                                            <option value="" disabled="">{{__('messages.choose')}}</option>
                                            @foreach([
                                            "en" => __('messages.english'),
                                            "da" => __('messages.danish'),
                                            "da+en" => __('messages.danish_and_english')
                                            ] as $value=>$text)

                                            @if ($value == $currentUser->getReadsLanguagesStr())
                                            <option value="{{$value}}" selected>{{$text}}</option>
                                            @else
                                            <option value="{{$value}}">{{$text}}</option>
                                            @endif

                                            @endforeach
                                        </select>


                                    </div>
                                    <div class="col-12">
                                        <label class="form-label" for="bio">{{__('messages.bio')}}</label>
                                        <textarea name="bio" class="form-control" rows="5" placeholder="Add a bio" id="bio">{{$currentUser->bio}}</textarea>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end pt-3">
                                        <button class="btn btn-secondary" type="button">{{__('messages.cancel')}}</button>
                                        <button class="btn btn-primary ms-3" type="submit">{{__('messages.save_changes')}}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>
                    <!-- Password-->
                    <section class="card border py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
                        <div class="card-body">
                            <div class="d-flex align-items-center pb-4 mt-sm-n1 mb-0 mb-lg-1 mb-xl-3">
                                <i class="ai-lock-closed text-primary lead pe-1 me-2"></i>
                                <h2 class="h4 mb-0">{{__('messages.password_change')}}</h2>
                            </div>

                            <form class="needs-validation" method="POST" action="{{ route('account_settings_password_change') }}">
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
                                <div class="row align-items-center g-3 g-sm-4 pb-3">
                                    <div class="col-sm-6">
                                        <label class="form-label" for="current-pass">{{__('messages.current_password')}}</label>
                                        <input name="current_password" class="form-control" type="password" id="current-pass" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <a class="d-inline-block fs-sm fw-semibold text-decoration-none mt-sm-4" href="{{ route('forgot') }}">{{__('messages.forgot_password')}}</a>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="new-pass">{{__('messages.new_password')}}</label>
                                        <input name="new_password" class="form-control" type="password" id="new-pass" requred>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="confirm-pass">{{__('messages.confirm_new_password')}}</label>
                                        <input name="new_password_confirmation" class="form-control" type="password" id="confirm-pass" required>
                                    </div>
                                </div>
                                <div class="alert alert-info d-flex my-3 my-sm-4"><i class="ai-circle-info fs-xl me-2"></i>
                                    <p class="mb-0">{{__('messages.password_alert')}}</p>
                                </div>
                                <div class="d-flex justify-content-end pt-3">
                                    <button class="btn btn-secondary" type="button">{{__('messages.cancel')}}</button>
                                    <button class="btn btn-primary ms-3" type="submit">{{__('messages.save_changes')}}</button>
                                </div>
                            </form>
                        </div>
                    </section>
                    <!-- Notifications-->
                    <section class="card border py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
                        <div class="card-body">
                            <div class="d-flex align-items-center pb-4 mt-sm-n1 mb-0 mb-lg-1 mb-xl-3"><i class="ai-bell text-primary lead pe-1 me-2"></i>
                                <h2 class="h4 mb-0">{{__('messages.notifications')}}</h2>
                                <button class="btn btn-sm btn-outline-secondary ms-auto" type="button" data-bs-toggle="checkbox" data-bs-target="#checkboxList">Toggle all</button>
                            </div>
                            <form class="needs-validation" method="POST" action="{{ route('account_settings_notifications') }}">
                                @csrf
                                <div id="checkboxList">
                                    <div class="form-check form-switch d-flex pb-md-2 mb-4">
                                        <input onchange="this.form.submit()" name="article_comment_notifications" class="form-check-input flex-shrink-0" type="checkbox" {{$currentUser->notifications->article_comment_notifications ? 'checked' : ''}} id="article-comment">
                                        <label class="form-check-label ps-3 ps-sm-4" for="article-comment">
                                            <span class="h6 d-block mb-2">{{__('messages.article_comment_notifications')}}</span>
                                            <span class="fs-sm text-muted">{{__('messages.article_comment_notifications_text')}}</span>
                                        </label>
                                    </div>
                                    <div class="form-check form-switch d-flex pb-md-2 mb-4">
                                        <input onchange="this.form.submit()" name="reply_comment_notifications" class="form-check-input flex-shrink-0" type="checkbox" {{$currentUser->notifications->reply_comment_notifications ? 'checked' : ''}} id="reply-comment">
                                        <label class="form-check-label ps-3 ps-sm-4" for="reply-comment">
                                            <span class="h6 d-block mb-2">{{__('messages.reply_comment_notifications')}}</span>
                                            <span class="fs-sm text-muted">{{__('messages.reply_comment_notifications_text')}}</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-check form-switch d-flex">
                                    <input class="form-check-input flex-shrink-0" type="checkbox" disabled="" id="daily-summary">
                                    <label class="form-check-label opacity-100 ps-3 ps-sm-4" for="daily-summary">
                                        <span class="h6 text-muted d-block mb-2">{{__('messages.scheduled_meeting_notifications')}}<span class="badge bg-faded-danger text-danger ms-3">{{__('messages.coming_soon')}}</span></span><span class="fs-sm text-muted">{{__('messages.scheduled_meeting_notifications_text')}}</span></label>
                                </div>
                            </form>
                        </div>
                    </section>
                    <!-- Delete account-->
                    <section class="card border py-1 p-md-2 p-xl-3 p-xxl-4">
                        <div class="card-body">
                            <div class="d-flex align-items-center pb-4 mt-sm-n1 mb-0 mb-lg-1 mb-xl-3"><i class="ai-trash text-primary lead pe-1 me-2"></i>
                                <h2 class="h4 mb-0">{{__('messages.delete_account')}}</h2>
                            </div>
                            <form class="needs-validation" action="{{ route('account_settings_delete') }}" method="POST">
                                @csrf
                                <div class="alert alert-warning d-flex mb-4"><i class="ai-triangle-alert fs-xl me-2"></i>
                                    <p class="mb-0">{{__('messages.delete_account_text')}} <a href="#" class="alert-link">{{__('messages.learn_more')}}</a></p>
                                </div>
                                <div class="form-check">
                                    <input name="confirm" class="form-check-input" type="checkbox" id="confirm">
                                    <label class="form-check-label text-dark fw-medium" for="confirm">{{__('messages.delete_account_confirm')}}</label>
                                </div>
                                <div class="d-flex flex-column flex-sm-row justify-content-end pt-4 mt-sm-2 mt-md-3">
                                    <button class="btn btn-danger" type="submit"><i class="ai-trash ms-n1 me-2"></i>{{__('messages.delete_account')}}</button>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </div>


    </main>
    <!-- Footer -->
    @include('components.footer-alt', array(
    'sections' => $sections
    ))

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/theme.js') }}" defer></script>

</body>

</html>
