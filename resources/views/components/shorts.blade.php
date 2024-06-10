<section class="container py-5 mt-sm-2 my-md-4 my-xl-1">
    <div class="d-flex align-items-center pb-3 mb-3 mb-lg-4">
        <h1 class="serif fw-bolder fst-italic mb-0 me-4 fw-bold">{{$title}}</h1>
        <div class="d-flex ms-auto">
            <button class="btn btn-prev btn-icon btn-sm btn-outline-primary rounded-circle me-3" type="button" id="prev-short" aria-label="Previous slide">
                <i class="ai-arrow-left"></i>
            </button>
            <button class="btn btn-next btn-icon btn-sm btn-outline-primary rounded-circle" type="button" id="next-short" aria-label="Next slide">
                <i class="ai-arrow-right"></i>
            </button>
        </div>
    </div>

    <div class="swiper" data-swiper-options='{"direction":"horizontal","spaceBetween":4,"loop":false,"autoHeight":true,"navigation":{"prevEl":"#prev-short","nextEl":"#next-short"},"breakpoints":{"576":{"slidesPerView":2},"1000":{"slidesPerView":3}}}'>
        <div class="swiper-wrapper">
            @foreach ($items as $item)
                <div style="width: 393.75px !important; height: 700px !important;" class="swiper-slide">
                    <article class="card rounded-0 h-100 border-0 position-relative overflow-hidden bg-size-cover bg-position-center" style="background-image: url({{$item["image_url"]}}); width: 393.75px !important; height: 700px !important;">
                        <div class="bg-dark position-absolute top-0 start-0 w-100 h-100 opacity-60"></div>
                        <div class="card-body d-flex flex-column position-relative z-2 mt-sm-5">
                        <h5 class="pt-5 mt-4 mt-sm-5 mt-lg-auto">
                            <a style="cursor: pointer;" class="stretched-link text-light serif" data-src="{{$item['embed_url']}}" data-iframe="true" data-bs-toggle="video"><i class="ai-play-filled me-2"></i>{{$item["title"]}}</a>
                        </h5>
                        <p class="fs-sm card-text text-light opacity-70 number-lines-3 serif">{{$item["text"]}}</p>
                        </div>
                    </article>
                </div>
            @endforeach
        </div>
    </div>

    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
</section>
