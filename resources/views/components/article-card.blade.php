@if (isset($article))
<a class="nav-link" href="{{ route('article', ['section' => $article->section_uri, 'article' => $article->headline_uri]) }}">
    @else
    <a class="nav-link" href="#">
        @endif

        <article class="w-100 card border-0 px-0 px-md-2 px-lg-2 pb-0 pb-md-0 pb-lg-0">
            <div class="d-block d-md-none">
                @if (isset($placeholder) && $placeholder == true)
                <div class="position-relative placeholder-wave">
                    <div class="placeholder ratio ratio-1x1"></div>
                    <i class="ai-image position-absolute top-50 start-50 translate-middle fs-1 opacity-50"></i>
                </div>
                @else
                <div class="ratio ratio-1x1">
                    <img class="rounded-0" style="object-fit: cover;" src="{{$article->image_url}}" alt="{{$article->image_caption}}">
                </div>
                @endif
            </div>
            <div class="d-none d-md-block">
                @if (isset($placeholder) && $placeholder == true)
                <div class="position-relative placeholder-wave">
                    <div @class([ 'placeholder'=> true, 'ratio ratio-1x1' ])></div>
                    <i class="ai-image position-absolute top-50 start-50 translate-middle fs-1 opacity-50"></i>
                </div>
                @else
                <div @class([ 'ratio ratio-1x1' ])>
                    <img style="object-fit: cover;" src="{{$article->image_url}}" alt="{{$article->image_caption}}" class="rounded-0">
                </div>
                @endif
            </div>
            <div class="article-body card-body px-0 pb-0">
                @if (isset($placeholder) == false || isset($placeholder) && $placeholder == false)
                <p class="text-uppercase text-danger fs-sm serif">{{ $section ?? $article->section_uri }}</p>
                <h5 class="article-title card-title fw-light crop-text-2 serif">{{ $article->headline }}</h5>
                <div @class([ 'd-block' ])>
                    <p class="opacity-50 crop-text-4 serif">{{ $article->abstract }}</p>
                </div>
                @else
                <p>
                    <small class="placeholder-glow">
                        <span class="placeholder col-3"></span>
                    </small>
                </p>
                <h5 class="article-title card-title fw-light crop-text-2 placeholder-glow">
                    <span class="placeholder col-9"></span>
                    <span class="placeholder col-12"></span>
                </h5>
                <div @class([ 'd-block'
                    ])>
                    <p class="opacity-50 crop-text-4">
                        <span class="placeholder col-12"></span>
                        <span class="placeholder col-12"></span>
                        <span class="placeholder col-12"></span>
                    </p>
                </div>
                @endif
            </div>
        </article>
    </a>
