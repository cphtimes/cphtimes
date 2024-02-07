@foreach ($comments as $comment)
<!-- Comment-->
<div class="border-bottom mt-4 pt-2 pb-4">
    <div class="d-flex align-items-center pb-1 mb-3">
        <img style="object-fit: cover;" class="rounded-circle" src="{{$comment->user->photo_url}}" width="48" height="48" alt="{{$comment->user->display_name}}">
        <div class="ps-3">
            <h6 class="mb-0">{{$comment->user->display_name}}</h6><span class="fs-sm text-muted">{{$comment->created_at}}</span>
        </div>
    </div>
    <p class="pb-2 mb-0">{{$comment->text}}</p>
    <div class="d-flex justify-content-start">
        <button data-bs-toggle="collapse" href="#showReplies{{$comment->id}}" class="nav-link fs-sm fw-semibold pe-3 py-2" type="button">
            {{trans_choice('messages.replies_format', count($comment->replies), ['n' => count($comment->replies)])}}
        </button>
        <button data-bs-toggle="collapse" href="#replyCommentForm{{$comment->id}}" class="nav-link fs-sm fw-semibold px-0 py-2" type="button">
            {{__('messages.reply')}}
            <i class="ai-redo fs-xl ms-2"></i>
        </button>
    </div>

    <div class="collapse" id="replyCommentForm{{$comment->id}}">
        @if ($currentUser != null)
        <div class="card card-body border-0 bg-secondary mt-4">
            @include('components.comment-form', array(
            'reply_comment_id' => $comment->id,
            'user' => $currentUser
            ))
        </div>
        @endif
    </div>

    <div class="collapse" id="showReplies{{$comment->id}}">
        @foreach ($comment->replies as $reply)
        <!-- Comment reply-->
        <div class="card card-body border-0 bg-secondary mt-4">
            <div class="d-flex align-items-center pb-1 mb-3"><img class="rounded-circle" src="{{$comment->user->photo_url}}" width="48" alt="Comment author">
                <div class="ps-3">
                    <h6 class="mb-0">{{$reply->user->display_name}}</h6><span class="fs-sm text-muted">{{$reply->user->created_at}}</span>
                </div>
            </div>
            <p class="mb-0"><a class="fw-bold text-decoration-none" href="{{ route('author', ['username' => $reply->user->username]) }}">{{"@" . $comment->user->username}}</a> {{$reply->text}}</p>
        </div>
        @endforeach
    </div>

</div>
@endforeach

@if ($comments->hasMorePages())
<div id="replaceMe" class="d-flex justify-content-center py-4">
    <form hx-post="{{$comments->appends(['articleId' => Request::get('articleId', null)])->nextPageUrl()}}" hx-target="#replaceMe" hx-swap="outerHTML" hx-trigger="submit">
        @csrf
        <button class='btn btn-primary' type="submit">
            {{__('messages.show_more_comments_btn')}}
        </button>
    </form>
</div>
@endif