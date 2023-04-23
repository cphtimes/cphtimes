<li class="{{ !empty($class) ? $class : 'list-group-item px-0 py-3 border-dashed' }}">
    <article>
        <a class="nav-link" href="{{ url(sprintf("/section/%s/%s", $article->section_uri, $article->headline_uri)) }}">
            <div class="article-body w-50 flex-grow-1 ms-0 pe-3">
                <div class="d-flex justify-content-between w-100 mb-2">
                    <small class="text-uppercase"><b>{{$article->section_uri}}</b></small>
                    @if ($style == 'compact')
                        <small class="text-uppercase opacity-50">{{ str_replace(' ', '', str_replace(['hours', 'minutes', 'seconds', 'days', 'weeks', 'months', 'years'], ['h', 'm', 's', 'd', 'w', 'm', 'y'], \Carbon\Carbon::parse($article->published_at)->diffForHumans(null, true))) }}</small>
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
                    <img style="object-fit: cover;" src="{{$article->image_url}}" width="75px" height="75px" alt="..">
                    @isset($editable)
                        @if ($editable == true)
                        <form id="deleteArticleForm" action="/account/settings/articles/{{$article->headline_uri}}/delete" method="POST">@csrf</form>
                            <button form="deleteArticleForm" type="submit" class="btn btn-icon btn-sm btn-light bg-light border rounded-circle position-absolute top-0 zindex-5 mt-0" style="right: 0px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3 fs-xl text-danger" viewBox="0 0 16 16">
                                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"></path>
                                </svg>
                            </button>
                            </form>
                        @endif    
                    @endisset
                </div>
                <div class="d-none d-md-block">
                    <img style="object-fit: cover;"
                        src="{{$article->image_url}}"
                        width="@if ($style == 'large') 225px @elseif ($style == 'expanded') 125px @else 75px @endif"
                        height="@if ($style == 'large') 225px @elseif ($style == 'expanded') 125px @else 75px @endif"
                        alt="..">
                    @isset($editable)
                        @if ($editable == true)
                            <form id="deleteArticleForm2" action="/account/settings/articles/{{$article->headline_uri}}/delete" method="POST">@csrf</form>
                            <button form="deleteArticleForm2" class="btn btn-icon btn-sm btn-light bg-light border rounded-circle position-absolute opacity-0 top-0 zindex-5 mt-2" type="submit" style="right: -16px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3 fs-xl text-danger" viewBox="0 0 16 16">
                                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"></path>
                                </svg>
                            </button>
                        @endif
                    @endisset
                </div>
            </div>
        </a>
    </article>
</li>