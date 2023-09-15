<div class="dropdown nav d-none d-sm-block order-lg-3">
    <a class="nav-link d-flex align-items-center p-0" href="#" data-bs-toggle="dropdown" aria-expanded="false">
        <img style="object-fit: cover;" class="border rounded-circle" src="{{$user->photo_url}}" width="36" height="36" alt="{{$user->display_name}}">
        <div class="ps-2">
            <div class="fs-xs lh-1 opacity-60">{{__('messages.greeting')}},</div>
            <div class="fs-sm dropdown-toggle">{{explode(" ", $user->display_name)[0]}}</div>
        </div>
    </a>
    <div class="dropdown-menu dropdown-menu-end my-1">
    <h6 class="dropdown-header fs-xs fw-medium text-muted text-uppercase pb-1">{{__('messages.account')}}</h6>
        <a class="dropdown-item" href="{{route('author', ['username' => $user->username])}}"><i class="ai-user-check fs-lg opacity-70 me-2"></i>{{__('messages.overview')}}</a>
        <a class="dropdown-item" href="{{route('account_settings')}}"><i class="ai-settings fs-lg opacity-70 me-2"></i>{{__('messages.settings')}}</a>
    <div class="dropdown-divider"></div>
    @if ($user->role->role != 'reader')
    <h6 class="dropdown-header fs-xs fw-medium text-muted text-uppercase pb-1">{{ __('messages.manage') }}</h6>
        @if ($user->role->role == 'author' || $user->role->role == 'editor')
            <a class="dropdown-item" href="{{route('write')}}"><i class="ai-pencil fs-lg opacity-70 me-2"></i>{{__('messages.write')}}</a>
        @endif

        @if ($user->role->role == 'editor')
            <a class="dropdown-item" href="{{route('manage_sections')}}"><i class="ai-list fs-lg opacity-70 me-2"></i>{{ucfirst(trans_choice('messages.sections', 2))}}</a>
            <a class="dropdown-item d-flex align-items-center" href="{{route('manage_layout')}}"><i class="bi bi-grid-1x2 fs-lg opacity-70 me-2"></i>{{__('messages.layout')}}</a>
        @endif
    <div class="dropdown-divider"></div>
    @endif
    <a class="dropdown-item" href="{{route('logout')}}"><i class="ai-logout fs-lg opacity-70 me-2"></i>{{__('messages.sign_out')}}</a>
    </div>
</div>