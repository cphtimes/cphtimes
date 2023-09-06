
@if ($reply_comment_id == null)
<form class="row needs-validation g-4" method="POST" action="{{ route('store_comment', ['section' => $article->section_uri, 'article' => $article->headline_uri]) }}">
@else
<form class="row needs-validation g-4" method="POST" action="{{ route('store_comment', ['section' => $article->section_uri, 'article' => $article->headline_uri, 'comment' => $reply_comment_id]) }} ">
@endif
    @csrf
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
    @endif
    <div class="col-12">
        <label class="d-flex align-items-center form-label mb-4" for="c-comment">
            <img class="rounded-circle me-2" style="object-fit: cover;" src="{{$user->photo_url}}" width="30" height="30"/>
            <span>{{$user->display_name}}</span>
        </label>
        <textarea name="text" class="form-control" rows="4" placeholder="{{__('messages.comment_placeholder')}}" required="" id="c-comment"></textarea>
    </div>
    <div class="text-end col-12">
        <button class="btn btn-primary" type="submit">
            @if ($reply_comment_id == null)
                {{__('messages.comment')}}
            @else
                {{__('messages.reply')}}
            @endif
        </button>
    </div>
</form>