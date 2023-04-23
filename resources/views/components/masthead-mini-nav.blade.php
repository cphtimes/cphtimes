<div style="height: 39px; top: -1px;" @class([
    'd-none d-lg-block nav-scroller py-2 mb-2 border-bottom border-dark border-2 container sticky-top bg-body',
    'shadow-sm' => $darkMode == false
])>
    <nav id="nav-scroller-sections" class="nav d-flex justify-content-between">
        <small id="homepage-link">
            <a style="font-family: 'UnifrakturMaguntia', cursive; font-size: 1.2rem;" class="p-2 text-dark" href="/">C</a>
        </small>
        @foreach ($sections as $section)
            <small><a class="p-2 text-dark" href="/section/{{$section->uri}}">{{$section->name}}</a></small>
        @endforeach
    </nav>
</div>