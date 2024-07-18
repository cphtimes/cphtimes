<section class="container py-5 my-lg-3 my-xl-4 my-xxl-5 position-relative">
    <div class="row align-items-xl-center py-2 py-sm-3 my-md-3 mb-lg-4 mb-xl-5">
        @if (isset($text_position) == false || (isset($text_position) && $text_position == 'end'))
        <div class="zoom-effect col-md-6 pb-4 pb-md-0 mb-3 mb-md-0">
            <div style="max-height: 522px;" class="ratio ratio-1x1 zoom-effect-wrapper">
                <img style="object-fit: cover;" class="rounded-0 zoom-effect-img" src="{{$article->image_url}}" alt="{{$article->image_caption}}}">
            </div>
        </div>
        @endif
        <div @class(["article-body card-body align-self-center col-md-6 col-xl-5", "offset-xl-1" => isset($text_position) == false || (isset($text_position) && $text_position == 'end')])>
            <a href="{{ route('article', ['section' => $article->section_uri, 'article' => $article->headline_uri]) }}" class="d-flex flex-column ps-md-4 ps-xl-0 text-center nav-link stretched-link">
                <p class="text-uppercase text-danger fs-sm serif">{{$article->localizedSection($sections)}}</p>
                <h3 class="article-title fw-light text-dark crop-text-4 serif mb-3">
                    {{$article->headline}}
                </h3>
                <div class="d-block">
                    <p class="text-dark opacity-50 fw-light crop-text-3 serif">{{$article->abstract}}</p>
                </div>
            </a>
        </div>

        @if (isset($text_position) && $text_position == 'start')
        <div class="col-md-6 offset-xl-1 pb-4 pb-md-0 mb-3 mb-md-0 zoom-effect">
            <div style="max-height: 522px;" class="ratio ratio-1x1 zoom-effect-wrapper">
                <img style="object-fit: cover;" class="rounded-0 zoom-effect-img" src="{{$article->image_url}}" alt="{{$article->image_caption}}}">
            </div>
        </div>
        @endif
    </div>
</section>
