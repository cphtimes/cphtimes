<!DOCTYPE html>
<html @class(['dark-mode'=> $darkMode]) lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/theme-switcher.js') }}" defer></script>

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
            border-radius: 0.0rem !important; // 1.25rem!important;
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
            border-radius: 0.0rem !important; // 1.25rem!important;
        }

        .card-header {
            border-bottom: none;
        }

        .list-group-item {
            border-bottom: 1px dotted rgba(0, 0, 0, .125) !important;
        }

        .solid-last-line {
            border-bottom: 1px solid rgba(0, 0, 0, 1.0) !important;
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
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-box-orient: vertical;
        }

        .crop-text-2 {
            -webkit-line-clamp: 2;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-box-orient: vertical;
        }

        .crop-text-3 {
            -webkit-line-clamp: 3;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-box-orient: vertical;
        }

        .crop-text-4 {
            -webkit-line-clamp: 4;
            overflow: hidden;
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

        @media (min-width: 1200px) {}

        @media (min-width: 1400px) {}

        .aa-DetachedSearchButton {
            border: 0 !important;
        }

        .aa-DetachedSearchButtonIcon {
            color: rgba(0, 0, 0, 1.0) !important;
        }

        .aa-DetachedSearchButtonPlaceholder {
            display: none !important;
        }

        @media screen {
            @media (min-width: 992px) {
                .offcanvas-lg .offcanvas-body {
                    display: flex;
                    flex-grow: 0;
                    padding: 0;
                    overflow-y: visible;
                    background-color: rgba(0, 0, 0, 0) !important;
                }
            }
        }

        @media screen {
            @media (min-width: 992px) {
                .position-lg-sticky {
                    position: -webkit-sticky !important;
                    position: sticky !important;
                }
            }
        }

        @media screen {
            .offcanvas-body {
                display: block !important;
            }
        }
    </style>
    <link rel="stylesheet" href="/css/app.css">

    <title>{{$currentUser->display_name}} - The Copenhagen Gates</title>

</head>

<body class="antialiased">

    <main class="page-wrapper">
        @include('components.navbar', array(
        'user' => $currentUser,
        'darkMode' => $darkMode,
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
                    <h1 class="serif fst-italic h2 mb-4">{{__('messages.layout')}}</h1>
                    <!-- Basic info-->
                    <section class="card border py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
                        <div class="card-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a href="#frontpage" class="nav-link active" data-bs-toggle="tab" role="tab">
                                        <i class="fi-home me-2"></i>
                                        {{__('messages.frontpage')}}
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button">{{ucfirst(trans_choice('messages.sections', 2))}}</a>
                                    <div class="dropdown-menu">
                                        @foreach ($sections as $section)
                                        <a href="#{{$section->uri}}" class="dropdown-item" data-bs-toggle="tab" role="tab">{{$section->name}}</a>
                                        @endforeach
                                    </div>
                                </li>
                            </ul>

                            <!-- Tabs content -->
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="frontpage" role="tabpanel">
                                    <form class="needs-validation" method="POST" action="{{route('manage_create_layout')}}" enctype="multipart/form-data">
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
                                            @for ($i = 0; $i < 3; $i++) <div class="col-sm-12">
                                                <label class="form-label" for="article_{{$i+1}}">{{__('messages.article')}} {{$i + 1}}</label>
                                                <input placeholder="https://cphgates.com" name="article_{{$i+1}}" class="form-control" type="text" value="{{$layouts['frontpage']->get($i) != null ? route('article', [$layouts['frontpage']->get($i)->article->first()->section_uri, $layouts['frontpage']->get($i)->article->first()->headline_uri]) : ''}}" id="article_{{$i+1}}">
                                        </div>
                                        @endfor
                                </div>

                                <div class="d-flex justify-content-end pt-5">
                                    <button class="btn btn-secondary" type="button">{{__('messages.cancel')}}</button>
                                    <button type="submit" class="btn btn-primary ms-3">{{__('messages.save_changes')}}</button>
                                </div>
                                </form>
                            </div>
                            @foreach ($sections as $section)
                            <div class="tab-pane fade" id="{{$section->uri}}" role="tabpanel">
                                <form class="needs-validation" method="POST" action="{{route('manage_create_layout')}}?section={{$section->uri}}" enctype="multipart/form-data">
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
                                        @for ($i = 0; $i < 5; $i++) <div class="col-sm-12">
                                            <label class="form-label" for="article_{{$i+1}}">{{__('messages.article')}} {{$i + 1}}</label>
                                            <input placeholder="https://cphgates.com" name="article_{{$i+1}}" class="form-control" type="text" value="{{$layouts[$section->uri]->get($i) != null ? route('article', [$layouts[$section->uri]->get($i)->article->first()->section_uri, $layouts[$section->uri]->get($i)->article->first()->headline_uri]) : ''}}" id="article_{{$i+1}}">
                                    </div>
                                    @endfor
                            </div>

                            <div class="d-flex justify-content-end pt-5">
                                <button class="btn btn-secondary" type="button">{{__('messages.cancel')}}</button>
                                <button type="submit" class="btn btn-primary ms-3">{{__('messages.save_changes')}}</button>
                            </div>
                            </form>
                        </div>
                        @endforeach
                </div>
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

    <script src="https://cdn.jsdelivr.net/npm/@editorjs/header@latest"></script><!-- Header -->
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/simple-image@latest"></script><!-- Image -->
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/delimiter@latest"></script><!-- Delimiter -->
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/list@latest"></script><!-- List -->
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/checklist@latest"></script><!-- Checklist -->
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/quote@latest"></script><!-- Quote -->
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/code@latest"></script><!-- Code -->
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/embed@latest"></script><!-- Embed -->
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/table@latest"></script><!-- Table -->
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/link@latest"></script><!-- Link -->
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/warning@latest"></script><!-- Warning -->

    <script src="https://cdn.jsdelivr.net/npm/@editorjs/marker@latest"></script><!-- Marker -->
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/inline-code@latest"></script><!-- Inline Code -->

    <!-- Load Editor.js's Core -->
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/editorjs-html@3.4.0/build/edjsHTML.js"></script>

    <!-- Initialization -->
    <script>
        /**
         * To initialize the Editor, create a new instance with configuration object
         * @see docs/installation.md for mode details
         */
        var editor = new EditorJS({
            /**
             * Enable/Disable the read only mode
             */
            readOnly: false,

            /**
             * Wrapper of Editor
             */
            holder: 'editorjs',

            /**
             * Common Inline Toolbar settings
             * - if true (or not specified), the order from 'tool' property will be used
             * - if an array of tool names, this order will be used
             */
            // inlineToolbar: ['link', 'marker', 'bold', 'italic'],
            // inlineToolbar: true,

            /**
             * Tools list
             */
            tools: {
                /**
                 * Each Tool is a Plugin. Pass them via 'class' option with necessary settings {@link docs/tools.md}
                 */
                header: {
                    class: Header,
                    inlineToolbar: ['marker', 'link'],
                    config: {
                        placeholder: 'Header'
                    },
                    shortcut: 'CMD+SHIFT+H'
                },

                /**
                 * Or pass class directly without any configuration
                 */
                image: SimpleImage,

                list: {
                    class: List,
                    inlineToolbar: true,
                    shortcut: 'CMD+SHIFT+L'
                },

                checklist: {
                    class: Checklist,
                    inlineToolbar: true,
                },

                quote: {
                    class: Quote,
                    inlineToolbar: true,
                    config: {
                        quotePlaceholder: 'Enter a quote',
                        captionPlaceholder: 'Quote\'s author',
                    },
                    shortcut: 'CMD+SHIFT+O'
                },

                warning: Warning,

                marker: {
                    class: Marker,
                    shortcut: 'CMD+SHIFT+M'
                },

                code: {
                    class: CodeTool,
                    shortcut: 'CMD+SHIFT+C'
                },

                delimiter: Delimiter,

                inlineCode: {
                    class: InlineCode,
                    shortcut: 'CMD+SHIFT+C'
                },

                linkTool: LinkTool,

                embed: Embed,

                table: {
                    class: Table,
                    inlineToolbar: true,
                    shortcut: 'CMD+ALT+T'
                },

            },

            /**
             * This Tool will be used as default
             */
            // defaultBlock: 'paragraph',

            /**
             * Initial Editor data
             */
            data: {
                blocks: [{
                        type: "header",
                        data: {
                            text: "Editor.js",
                            level: 2
                        }
                    },
                    {
                        type: 'paragraph',
                        data: {
                            text: 'Hey. Meet the new Editor. On this page you can see it in action — try to edit this text. Source code of the page contains the example of connection and configuration.'
                        }
                    },
                    {
                        type: "header",
                        data: {
                            text: "Key features",
                            level: 3
                        }
                    },
                    {
                        type: 'list',
                        data: {
                            items: [
                                'It is a block-styled editor',
                                'It returns clean data output in JSON',
                                'Designed to be extendable and pluggable with a simple API',
                            ],
                            style: 'unordered'
                        }
                    },
                    {
                        type: "header",
                        data: {
                            text: "What does it mean «block-styled editor»",
                            level: 3
                        }
                    },
                    {
                        type: 'paragraph',
                        data: {
                            text: 'Workspace in classic editors is made of a single contenteditable element, used to create different HTML markups. Editor.js <mark class=\"cdx-marker\">workspace consists of separate Blocks: paragraphs, headings, images, lists, quotes, etc</mark>. Each of them is an independent contenteditable element (or more complex structure) provided by Plugin and united by Editor\'s Core.'
                        }
                    },
                    {
                        type: 'paragraph',
                        data: {
                            text: `There are dozens of <a href="https://github.com/editor-js">ready-to-use Blocks</a> and the <a href="https://editorjs.io/creating-a-block-tool">simple API</a> for creation any Block you need. For example, you can implement Blocks for Tweets, Instagram posts, surveys and polls, CTA-buttons and even games.`
                        }
                    },
                    {
                        type: "header",
                        data: {
                            text: "What does it mean clean data output",
                            level: 3
                        }
                    },
                    {
                        type: 'paragraph',
                        data: {
                            text: 'Classic WYSIWYG-editors produce raw HTML-markup with both content data and content appearance. On the contrary, Editor.js outputs JSON object with data of each Block. You can see an example below'
                        }
                    },
                    {
                        type: 'paragraph',
                        data: {
                            text: `Given data can be used as you want: render with HTML for <code class="inline-code">Web clients</code>, render natively for <code class="inline-code">mobile apps</code>, create markup for <code class="inline-code">Facebook Instant Articles</code> or <code class="inline-code">Google AMP</code>, generate an <code class="inline-code">audio version</code> and so on.`
                        }
                    },
                    {
                        type: 'paragraph',
                        data: {
                            text: 'Clean data is useful to sanitize, validate and process on the backend.'
                        }
                    },
                    {
                        type: 'delimiter',
                        data: {}
                    },
                    {
                        type: 'paragraph',
                        data: {
                            text: 'We have been working on this project more than three years. Several large media projects help us to test and debug the Editor, to make its core more stable. At the same time we significantly improved the API. Now, it can be used to create any plugin for any task. Hope you enjoy. 😏'
                        }
                    },
                    {
                        type: 'image',
                        data: {
                            url: 'https://i3.ytimg.com/vi/Is1YUQVYkvY/maxresdefault.jpg',
                            caption: '',
                            stretched: false,
                            withBorder: true,
                            withBackground: false,
                        }
                    },
                ]
            },
            onChange: function(api, event) {
                console.log('something changed', event);
                editor.save()
                    .then((savedData) => {
                        const edjsParser = edjsHTML({
                            image: imageParser
                        });
                        let html = edjsParser.parse(savedData);
                        document.getElementById("body_html").value = html.join('')
                    })
                    .catch((error) => {
                        console.error('Saving error', error);
                    });
            }
        });

        function imageParser({
            data
        }) {
            return `<figure class="figure"><img class="figure-img img-fluid" src="${data.url}" alt="${data.caption}"/><figcaption class="figure-caption text-end">${data.caption}</figcaption></figure>`
        }

        /**
         * Saving button
         */
        const saveButton = document.getElementById('saveButton');

        /**
         * Saving example
         */
        /*
        saveButton.addEventListener('click', function () {
          editor.save()
            .then((savedData) => {
              console.log("savedData =>", savedData)
              let html = edjsParser.parse(savedData);
              console.log("html => ", html)
              debugger;
            })
            .catch((error) => {
              console.error('Saving error', error);
            });
        });
        */
    </script>
</body>

</html>