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

        @media screen {
            @media (min-width: 992px) {
                .offcanvas-lg .offcanvas-body {
                    display: flex;
                    flex-grow: 0;
                    padding: 0;
                    overflow-y: visible;
                    background-color: rgba(0,0,0,0) !important;
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
              'author' => $currentUser,
              'currentUser' => $currentUser
            ))
            <!-- Page content-->
            <div class="col-lg-9 pt-4 pb-2 pb-sm-4">
                <h1 class="serif fst-italic h2 mb-4">{{__('messages.edit_article')}}</h1>
                <!-- Basic info-->
                <section class="card border py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
                <div class="card-body">
                    <form class="needs-validation" method="POST" action="{{route('manage_edit_article')}}?section_uri={{$article->section_uri}}&headline_uri={{$article->headline_uri}}" enctype="multipart/form-data">
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
                            <label class="form-label" for="fn">{{ucfirst(trans_choice('sections', 1))}}</label>
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
                              <label class="form-label" for="video_embed">{{__('messages.video_embed')}}</label>
                              <textarea name="video_embed" class="form-control" rows="5" placeholder="" id="video_embed">{{$article->video_embed}}</textarea>
                          </div>

                          <div class="col-sm-6">
                              <label class="form-label" for="video_provider">{{__('messages.video_provider')}}</label>
                              <input placeholder="" name="video_provider" class="form-control" type="text" value="{{$article->video_provider}}" id="video_provider">
                          </div>

                          <div class="col-sm-6">
                              <label class="form-label" for="image_caption">{{__('messages.video_ratio')}}</label>
                              <select name="video_ratio" class="form-select" id="video_ratio">
                                <option value="" disabled="">{{__('messages.choose')}}</option>
                                <option @if ($article->video_ratio == '16x9') selected="selected" @endif value="16x9">16x9</option>
                                <option @if ($article->video_ratio == '4x3') selected="selected" @endif value="4x3">4x3</option>
                                <option @if ($article->video_ratio == '1x1') selected="selected" @endif value="1x1">1x1</option>
                            </select>
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

                          <div class="col-12">
                            <div class="form-check form-switch">
                              <input name="author_is_anonymous" type="checkbox" class="form-check-input" id="author_is_anonymous" @if ($article->author->is_anonymous) checked @endif>
                              <label class="form-check-label" for="author_is_anonymous">{{__('messages.author_is_anonymous')}}</label>
                            </div>
                          </div>

                          <div class="col-sm-6">
                              <label class="form-label" for="author_display_name">{{__('messages.alternative_author')}}</label>
                              <input placeholder="Søren Kirkegaard" name="author_display_name" class="form-control" type="text" value="{{ $article->author->display_name ?? '' }}" id="author_display_name">
                              <div class="form-text">{{__('messages.alternative_author_text')}}</div>
                          </div>
                          <div class="col-sm-6">
                            <label class="form-label" for="author_username">{{__('messages.alternative_username')}}</label>
                            <input placeholder="soren.kirkegaard" name="author_username" class="form-control" type="text" value="{{ $article->author->username ?? '' }}" id="author_username">
                          </div>

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

      <!-- Optional JavaScript; choose one of the two! -->
      <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@algolia/autocomplete-js"></script>

      <script src="/js/darkmode.js" defer></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
      
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
        var blocks = JSON.parse(document.getElementById('body_blocks').value);

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
              class:  Marker,
              shortcut: 'CMD+SHIFT+M'
            },

            code: {
              class:  CodeTool,
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
            blocks: blocks
          },
          onChange: function(api, event) {
            console.log('something changed', event);
            editor.save()
            .then((savedData) => {
              const edjsParser = edjsHTML({image: imageParser});
              let html = edjsParser.parse(savedData);
              
              document.getElementById("body_html").value = html.join('')
              document.getElementById("body_blocks").value = JSON.stringify(savedData.blocks);

            })
            .catch((error) => {
              console.error('Saving error', error);
            });
          }
        });

        function imageParser({data}) {
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
