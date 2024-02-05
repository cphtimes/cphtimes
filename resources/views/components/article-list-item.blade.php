<li class="{{ !empty($class) ? $class : 'list-group-item px-0 py-3 border-bottom' }}">
    <article>
        <a class="nav-link" href="{{ route('article', ['section' => $article->section_uri, 'article' => $article->headline_uri]) }}">
            <div class="article-body w-50 flex-grow-1 ms-0 pe-3">
                <div class="d-flex justify-content-between w-100 mb-2">
                    <small class="text-uppercase crop-text-1">
                        <b>{{ $section ?? $article->section_uri }}</b>
                    </small>
                    @if ($style == 'compact')
                    <small class="text-uppercase opacity-50">{{ str_replace(' ', '', \Carbon\Carbon::parse($article->published_at)->isoFormat('M/D/YY')) }}</small>
                    @endif
                </div>
                @if ($style == 'compact')
                <h6 class="article-title w-100 fw-light mb-0 crop-text-2 mb-2">{{$article->headline}}</h6>
                @else
                <div class="d-block d-md-none">
                    <h6 class="article-title w-100 fw-light mb-0 crop-text-1 mb-2">{{$article->headline}}</h6>
                </div>
                <div class="d-none d-md-block">
                    @if ($style == 'large')
                    <h3 class="article-title fw-light crop-text-2 mb-2">{{ $article->headline }}</h3>
                    <p class="opacity-50 crop-text-3 mb-2">{{$article->abstract}}</p>
                    @else
                    <h5 class="article-title fw-light crop-text-1 mb-2">{{$article->headline}}</h5>
                    <p class="opacity-50 crop-text-2 mb-2">{{$article->abstract}}</p>
                    @endif
                </div>
                @endif
            </div>
            <div class="flex-shrink-0 align-self-center">
                <div class="d-block d-md-none">
                    <img style="object-fit: cover; width: 75px; height: 75px;" src="{{$article->image_url}}" alt="{{$article->image_caption}}">
                    @isset($editable)
                    @if ($editable == true)
                    <form id="deleteArticleForm" onSubmit="return confirm('{{__('messages.are_you_sure_confirmation')}}');" action="{{route('delete_article', [$article->headline_uri])}}" method="POST">@csrf</form>
                    <button form="deleteArticleForm" type="submit" class="btn btn-icon btn-sm btn-light bg-light border rounded-circle position-absolute top-0 zindex-5 mt-0" style="right: 0px;">
                        <i class="text-danger ai-trash"></i>
                    </button>
                    </form>
                    @endif
                    @endisset
                </div>
                <div class="d-none d-md-block">
                    @if ($style == 'large')
                    <img style="object-fit: cover; width: 225px; height: 225px;" src="{{$article->image_url}}" alt="{{$article->image_caption}}">
                    @elseif ($style == 'expanded')
                    <img style="object-fit: cover; width: 125px; height: 125px;" src="{{$article->image_url}}" alt="{{$article->image_caption}}">
                    @else
                    <img style="object-fit: cover; width: 75px; height: 75px;" src="{{$article->image_url}}" alt="{{$article->image_caption}}">
                    @endif
                    @isset($editable)
                    @if ($editable == true)
                    <form id="deleteArticleForm2" onSubmit="return confirm('{{__('messages.are_you_sure_confirmation')}}');" action="{{route('delete_article', [$article->headline_uri])}}" method="POST">@csrf</form>
                    <button form="deleteArticleForm2" class="btn btn-icon btn-sm btn-light bg-light border rounded-circle position-absolute opacity-0 top-0 zindex-5 mt-2" type="submit" style="right: -16px;">
                        <i class="text-danger ai-trash"></i>
                    </button>
                    @endif
                    @endisset
                </div>
            </div>
        </a>
    </article>
</li>