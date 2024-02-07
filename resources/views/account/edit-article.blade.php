<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{__('messages.edit_article')}} - {{ __('messages.brand_name') }}</title>
    <meta name="description" content="">

    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="{{__('messages.edit_article')}} - {{ __('messages.brand_name') }}">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="{{app()->getLocale() == 'en' ? asset('CPHGates Open Graph Logo.png') : asset('KBHPorte Open Graph Logo.png')}}">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="{{url()->full()}}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{__('messages.edit_article')}} - {{ __('messages.brand_name') }}">
    <meta property="og:description" content="">
    <meta property="og:image" content="{{app()->getLocale() == 'en' ? asset('CPHGates Open Graph Logo.png') : asset('KBHPorte Open Graph Logo.png')}}">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{__('messages.edit_article')}} - {{ __('messages.brand_name') }}">
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
    <!-- <link href="https://fonts.googleapis.com/css2?family=Vollkorn&display=swap" rel="stylesheet">-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/theme-switcher.js') }}" defer></script>

    <link rel="stylesheet" href="/css/app.css">

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
                    <h1 class="serif fst-italic h2 mb-4">{{__('messages.edit_article')}}</h1>
                    <!-- Basic info-->
                    <section class="card border py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
                        <div class="card-body">
                            <form class="needs-validation" method="POST" action="{{route('edit_article')}}?section_uri={{$article->section_uri}}&headline_uri={{$article->headline_uri}}" enctype="multipart/form-data">
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

                                <div class="row g-3 g-sm-4 mt-0 mt-lg-2">
                                    <div class="col-sm-6">
                                        <label class="form-label" for="headline">{{__('messages.headline')}}</label>
                                        <input name="headline" class="form-control" type="text" value="{{$article->headline}}" id="headline" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="fn">{{ucfirst(trans_choice('messages.sections', 1))}}</label>
                                        <select name="section_uri" class="form-select" id="section" required>
                                            <option value="" disabled="">{{__('messages.choose')}}</option>
                                            @foreach ($sections as $section)
                                            @if ($article->section_uri == $section->uri)
                                            <option selected value="{{$section->uri}}">{{$section->name}}</option>
                                            @else
                                            <option value="{{$section->uri}}">{{$section->name}}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-sm-6">
                                        <label class="form-label" for="fn">{{__('messages.in_language')}}</label>
                                        <select name="in_language" class="form-select" id="language" required>
                                            <option value="" disabled="">{{__('messages.choose')}}</option>
                                            <option @if ($article->language_code == 'en') selected="selected" @endif value="en">English</option>
                                            <option @if ($article->language_code == 'da') selected="selected" @endif value="da">Dansk (Danish)</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="fn">{{__('messages.work_status')}}</label>
                                        <select name="work_status" class="form-select" id="work_status" required>
                                            <option value="" disabled="">{{__('messages.choose')}}</option>
                                            <option @if ($article->work_status == 'published') selected="selected" @endif value="published">Published</option>
                                            <option @if ($article->work_status == 'draft') selected="selected" @endif value="draft">Draft</option>
                                            <option @if ($article->work_status == 'archived') selected="selected" @endif value="archived">Archived</option>
                                        </select>
                                    </div>

                                    <div class="col-12">
                                        <label for="image" class="form-label">{{__('messages.image')}}</label>
                                        <input name="image" class="form-control" type="file" id="image" accept="image/*">
                                    </div>

                                    <div class="col-12">
                                        <label class="form-label" for="image_caption">{{__('messages.image_caption')}}</label>
                                        <input placeholder="" name="image_caption" class="form-control" type="text" value="{{$article->image_caption}}" id="image_caption">
                                    </div>

                                    <div class="col-12">
                                        <label class="form-label" for="bio">{{__('messages.abstract')}}</label>
                                        <textarea name="abstract" class="form-control" rows="5" placeholder="" id="abstract">{{$article->abstract}}</textarea>
                                    </div>

                                    <div class="col-12">
                                        <label class="form-label" for="body_html">{{__('messages.body')}}</label>
                                        <div class="p-3 rounded-3 border" id="editorjs"></div>
                                        <textarea readonly name="body_html" class="d-none form-control" rows="5" placeholder="" id="body_html">{{$body_html}}</textarea>
                                        <textarea readonly name="body_blocks" class="d-none form-control" rows="5" placeholder="" id="body_blocks">{{$blocks}}</textarea>
                                    </div>

                                    @if ($currentUser->role->role == 'editor')
                                    <div class="col-12">
                                        <div class="form-check form-switch">
                                            <input name="author_is_anonymous" type="checkbox" class="form-check-input" id="author_is_anonymous" @if ($article->author->is_anonymous) checked @endif>
                                            <label class="form-check-label" for="author_is_anonymous">{{__('messages.author_is_anonymous')}}</label>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <label class="form-label" for="author_display_name">{{__('messages.alternative_author')}}</label>
                                        <input placeholder="" name="author_display_name" class="form-control" type="text" value="{{ $article->author->display_name ?? '' }}" id="author_display_name">
                                        <div class="form-text">{{__('messages.alternative_author_text')}}</div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="author_username">{{__('messages.alternative_username')}}</label>
                                        <input placeholder="" name="author_username" class="form-control" type="text" value="{{ $article->author->username ?? '' }}" id="author_username">
                                    </div>
                                    @endif

                                    <div class="d-flex justify-content-end pt-3">
                                        <button class="btn btn-secondary" type="button">{{__('messages.cancel')}}</button>
                                        <button type="submit" class="btn btn-primary ms-3">{{__('messages.save_changes')}}</button>
                                    </div>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>
    <!-- Footer -->
    @include('components.footer', array(
    'sections' => $sections
    ))

    <!-- Back to top button -->
    @include('components.back-top-btn')

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/theme.js') }}" defer></script>

    <script src="/js/editor.js" defer></script>
</body>

</html>