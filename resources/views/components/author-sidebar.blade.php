<aside class="col-lg-3 pe-lg-4 pe-xl-5 mt-n3">
    <div class="position-lg-sticky top-0">
        <div class="d-none d-lg-block" style="padding-top: 105px;"></div>
        <div class="offcanvas-lg offcanvas-start" id="sidebarAccount">
            <button class="btn-close position-absolute top-0 end-0 mt-3 me-3 d-lg-none" type="button" data-bs-dismiss="offcanvas" data-bs-target="#sidebarAccount"></button>
            <div class="offcanvas-body">
            <div class="pb-2 pb-lg-0 mb-4 mb-lg-5">
                <img style="object-fit: cover;" class="d-block rounded-circle mb-2" src="{{$author->photo_url}}" width="80" height="80" alt="{{$author->display_name}}">
                <h3 class="h5 mb-1">{{$author->display_name}}</h3>
                <p class="fs-sm text-muted"><span>@</span>{{$author->username}}</p>
                <p class="fs-sm text-muted mb-0">{{$author->bio ?? __('messages.no_description_bio')}}</p>
            </div>
            @if ($author->is($currentUser))
                <nav class="nav flex-column pb-2 pb-lg-4 mb-3">
                    <h4 class="fs-xs fw-medium text-muted text-uppercase pb-1 mb-2">{{__('messages.account')}}</h4>
                    <a class="nav-link fw-semibold py-2 px-0" href="/account/settings">{{__('messages.settings')}}</a>
                    <a class="nav-link fw-semibold py-2 px-0" href="/by/{{$currentUser->username}}">{{__('messages.articles')}}</a>
                    <!-- <a class="nav-link fw-semibold py-2 px-0" href="/by/{{$currentUser->username}}/comments">{{__('messages.comments')}}</a> -->
                    <a class="nav-link fw-semibold py-2 px-0" href="/manage/layout">Layout</a>
                    <a class="nav-link fw-semibold py-2 px-0" href="/manage/sections">Sections</a>
                    <a class="nav-link fw-semibold py-2 px-0" href="/logout">{{__('messages.sign_out')}}</a>
                </nav>
            @endif
            </div>
        </div>
    </div>
</aside>