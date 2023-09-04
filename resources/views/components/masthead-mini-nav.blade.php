<div style="height: 39px; top: -1px;" @class([
    'd-none d-lg-block nav-scroller py-2 mb-2 border-bottom border-dark border-2 container sticky-top bg-body',
    'shadow-sm' => $darkMode == false
])>
    <nav id="nav-scroller-sections" class="nav d-flex justify-content-between align-items-top">
        <small id="homepage-link">
            <a style="font-size: 1.3em;" class="p-2 text-dark chomsky" href="/">{{__('messages.brand_name_letter')}}</a>
        </small>
        @foreach ($sections as $section)
            <small><a class="p-2 text-dark" href="{{ route('section', ['section' => $section->uri]) }}">{{$section->name}}</a></small>
        @endforeach
    </nav>
</div>