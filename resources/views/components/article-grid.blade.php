@if ((isset($placeholder) && $placeholder==true) || (isset($articles) && $articles->count() > 0))

@for ($i = 0; $i < floor(isset($placeholder) && $placeholder==true ? $n/4 : count($articles)/4); $i++) <div style="margin: auto;" class="articles-grid row px-0 py-0 py-md-2 py-lg-5">
    <div class="d-flex flex-wrap px-0 px-lg-2">
        @for ($j = 0; $j < 4; $j++) @if (array(2, 0, 3, 1)[$i % 4]==$j) <div @class([ 'px-0 px-md-2 pb-3 py-md-4 py-lg-0' , sprintf('order-sm-%d', $j), sprintf('order-md-3', $j), sprintf('order-lg-%d', $j), 'border-end-0 border-end-lg'=> $j < 3, 'cell-flexible' ])>
                @include('components.article-card', array(
                'placeholder' => $placeholder ?? false,
                'article' => isset($articles) && $articles->count() > 0 ? $articles[$j+($i*4)] : null,
                'section' => isset($articles) && $articles->count() > 0 ? $articles[$j+($i*4)]->localizedSection($sections) : null,
                'style' => 'expanded'
                ))
    </div>
    @else
    <div @class([ 'pb-3 pb-lg-0 px-0' , 'px-md-2' , sprintf('order-sm-%d', $j), sprintf('order-md-%d', $j==3 ? 2 : $j), sprintf('order-lg-%d', $j), 'border-end-0 border-end-md'=> $j < 3, 'cell-compact' ])>
            @include('components.article-card', array(
            'placeholder' => $placeholder ?? false,
            'article' => isset($articles) && $articles->count() > 0 ? $articles[$j+($i*4)] : null,
            'section' => isset($articles) && $articles->count() > 0 ? $articles[$j+($i*4)]->localizedSection($sections) : null,
            'style' => 'compact'
            ))
    </div>
    @endif
    @endfor
    </div>
    </div>
    @endfor

    @if (isset($placeholder) == false || isset($placeholder) && $placeholder == false)
        @if ($articles->hasMorePages())
        <div id="replaceMe" class="d-flex justify-content-center py-5">
            <form hx-post="{{$articles->appends(['sql' => $sql, 'section_uri' => Request::get('section_uri', null)])->nextPageUrl()}}" hx-target="#replaceMe" hx-swap="outerHTML" hx-trigger="submit">
                @csrf
                <button class='btn btn-primary' type="submit">
                    {{__('messages.show_more_btn')}}
                </button>
            </form>
        </div>
        @endif
    @endif
    @endif
