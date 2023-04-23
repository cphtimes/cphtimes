<a class="nav-link" href="{{ url(sprintf("/section/%s/%s", $article->section_uri, $article->headline_uri)) }}">
    <article class="w-100 card border-0 px-2">
        <div class="d-block d-md-none">
            <div class="ratio ratio-4x3">
                <img style="object-fit: cover;" src="{{$article->image_url}}" alt="..." class="">
            </div>
        </div>
        <div class="d-none d-md-block">
            <div @class([
                'ratio ratio-1x1' => $style == 'compact',
                'ratio ratio-16x9' => $style == 'expanded',
            ])>
                <img style="object-fit: cover;" src="{{$article->image_url}}" alt="..." class="">
            </div>
        </div>
        <div class="article-body card-body px-0 pb-0">
            <p><small class="text-uppercase text-dark"><b>{{ $article->section_uri }}</b></small></p>
            <h5 class="article-title card-title fw-light crop-text-2">{{ $article->headline }}</h5>
            <div @class([
                'd-block',
                'd-md-none' => $style == 'expanded'
            ])>
                <p class="opacity-50 crop-text-4">{{ $article->abstract }}</p>
            </div>
        </div>
    </article>
</a>