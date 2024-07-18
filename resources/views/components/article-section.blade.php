<div class="pt-3 pt-md-5 d-flex flex-column align-items-center justify-content-between">
    <h2 class="serif fw-bolder fst-italic mb-0 fw-bold h1 text-center pt-lg-3">{{$title}}</h2>
    <p class="fst-italic fs-lg pb-4 pb-md-4 mb-0 mb-sm-2 mb-lg-0 text-center">{{$text}}</p>
</div>
<div class="px-0" hx-get="{{route('article_grid.show', ['sql' => $sql ?? ''])}}" hx-swap="outerHTML" hx-trigger="load" id="article-grid-{{Str::slug($title)}}">
    @include('components.article-grid', [
        'placeholder' => true,
        'n' => 8
    ])
</div>
