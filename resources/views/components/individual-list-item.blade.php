<li class="list-group-item py-4 px-0 border-dashed">
    <article class="d-flex align-items-center">
        <div class="flex-shrink-0">
            <img style="object-fit: cover;" width="65px" height="65px" class="rounded-circle" src="{{ $individual['avatar_url'] }}" alt="...">
        </div>
        <div class="article-body flex-grow-1 ms-3">
            <h6 class="article-title mb-0">{{ $individual['first_name'] }} {{ $individual['last_name'] }}</h6>
            <small>{{ $individual['short_description'] }}</small>
        </div>
    </article>
</li>