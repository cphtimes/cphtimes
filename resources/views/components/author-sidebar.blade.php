<aside class="col-lg-3 pe-lg-4 pe-xl-5 mt-n3">
    <div class="position-lg-sticky top-0">
        <div class="d-none d-lg-block" style="padding-top: 105px;"></div>
        <div class="offcanvas-lg offcanvas-start" id="sidebarAccount">
            <button class="btn-close position-absolute top-0 end-0 mt-3 me-3 d-lg-none" type="button" data-bs-dismiss="offcanvas" data-bs-target="#sidebarAccount"></button>
            <div class="offcanvas-body">
                <div class="pb-2 pb-lg-0 mb-4 mb-lg-5">
                    @if ($author->getPhotoURL())
                    <img style="object-fit: cover;" class="d-block rounded-circle mb-2" src="{{$author->getPhotoURL()}}" width="80" height="80" alt="{{$author->getDisplayName()}}">
                    @else
                    <div class="mb-2 d-flex align-items-center justify-content-center position-relative flex-shrink-0 rounded-circle text-primary fs-lg fw-semibold" style="object-fit: cover; width: 80px; height: 80px; background-color: rgba(var(--ar-primary-rgb), .15);">
                        {{ \App\Services\GetUserInitialsService::forName($author->getDisplayName()) }}
                    </div>
                    @endif
                    <h3 class="h5 mb-1">{{ $author->getDisplayName() == null ? __('messages.anonymous') : $author->getDisplayName() }}</h3>
                    <p class="fs-sm text-muted"><span>@</span>{{$author->getUsername()}}</p>
                    <p class="fs-sm text-muted mb-0">{{$author->getBio() ?? __('messages.no_description_bio')}}</p>
                </div>
                @if (($author == null && $currentUser) || ($author->user != null && $author->user->is($currentUser)))
                <nav class="nav flex-column pb-2 pb-lg-4 mb-3">
                    <h4 class="fs-xs fw-medium text-muted text-uppercase pb-1 mb-2">{{__('messages.account')}}</h4>
                    <a class="nav-link fw-semibold py-2 px-0" href="{{ route('author', ['username' => $currentUser->username]) }}"><i class="ai-user-check fs-5 opacity-60 me-2"></i>{{__('messages.overview')}}</a>
                    <a class="nav-link fw-semibold py-2 px-0" href="{{ route('account_settings') }}"><i class="ai-settings fs-5 opacity-60 me-2"></i>{{__('messages.settings')}}</a> <!-- active -->
                    <!-- <a class="nav-link fw-semibold py-2 px-0" href="/by/{{$currentUser->username}}/comments">{{__('messages.comments')}}</a> -->
                </nav>

                @if ($currentUser->role->role == 'author' || $currentUser->role->role == 'editor')
                <nav class="nav flex-column pb-2 pb-lg-4 mb-1">
                    <h4 class="fs-xs fw-medium text-muted text-uppercase pb-1 mb-2">{{__('messages.manage')}}</h4>
                    @if ($currentUser->role->role == 'author' || $currentUser->role->role == 'editor')
                    <a class="nav-link fw-semibold py-2 px-0" href="{{route('write')}}"><i class="ai-pencil fs-5 opacity-60 me-2"></i>{{__('messages.write')}}</a>
                    @endif
                    @if ($currentUser->role->role == 'editor')
                    <a class="nav-link fw-semibold py-2 px-0" href=" {{route('manage_sections')}}"><i class="ai-list fs-5 opacity-60 me-2"></i>{{ucfirst(trans_choice('messages.sections', 2))}}</a>
                    <a class="nav-link fw-semibold py-2 px-0" href="{{route('manage_layout')}}"><i class="ai-layout-side fs-5 opacity-60 me-2"></i>{{__('messages.layout')}}</a>
                    @endif
                </nav>
                @endif

                <nav class="nav flex-column">
                    <a class="nav-link fw-semibold py-2 px-0" href="{{route('logout')}}"><i class="ai-logout fs-5 opacity-60 me-2"></i>{{__('messages.sign_out')}}</a>
                </nav>
                @endif
            </div>
        </div>
    </div>
</aside>