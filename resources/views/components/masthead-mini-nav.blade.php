<div style="height: 39px; top: -1px;" @class([
    'd-none d-lg-block nav-scroller py-2 mb-2 border-bottom border-dark border-2 container sticky-top bg-body',
    'shadow-sm' => $darkMode == false
])>
    <nav id="nav-scroller-sections" class="nav d-flex justify-content-between align-items-top">
        <div id="homepage-link" class="nav">
            <a class="nav-link d-flex align-items-center p-0 chomsky" href="/">
                {{__('messages.brand_name_letter')}}
            </a>
        </div>
        @foreach ($sections->slice(0, 9) as $section)
            <div class="nav d-none d-sm-block order-lg-3">
                <a class="nav-link d-flex align-items-center p-0" href="{{ route('section', ['section' => $section->uri]) }}">
                    <div class="fs-sm">{{$section->name}}</div>
                </a>
            </div>
        @endforeach

        @if ($sections->slice(9)->count() > 0)
            <div class="dropdown nav d-none d-sm-block order-lg-3">
                <a class="nav-link d-flex align-items-center p-0" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="fs-sm dropdown-toggle">{{ ucfirst(__('messages.more')) }}</div>
                </a>
                <div class="dropdown-menu dropdown-menu-end my-1">
                @foreach ($sections->slice(9) as $section)
                    <a class="dropdown-item" href="{{ route('section', ['section' => $section->uri]) }}">{{$section->name}}</a>
                @endforeach
                </div>
            </div>
        @endif
    </nav>
</div>