<section class="container py-5 mt-sm-2 my-md-4 my-xl-1">
    <div style="height: 550px;" class="card zoom-effect border-0 rounded-0 overflow-hidden">
        @if (isset($has_img_overlay) && $has_img_overlay == true)
        <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-10 z-2"></span>
        <div class="h-100 bg-dark zoom-effect-wrapper rounded-0">
            <img style="object-fit: cover;" class="w-100 h-100 opacity-60 zoom-effect-img" src="{{$article->image_url}}" alt="{{$article->image_caption}}">
        </div>
        <a class="card-body d-flex flex-column justify-content-center text-center align-items-center position-absolute top-0 start-0 w-100 h-100 text-decoration-none z-3 p-4 p-md-5" href="shop-catalog.html">
            <div class="row w-100">
                <div style="max-width: 576px;" @class([
                    "col-12 p-0 p-md-5",
                    "col-lg-6" => isset($text_position) == false || (isset($text_position) && $text_position == 'start'),
                    "col-lg-6 offset-lg-3" => isset($text_position) && $text_position == 'center',
                    "col-lg-6 offset-lg-6" => isset($text_position) && $text_position == 'end'
                ])>
                    <p class="text-uppercase text-danger fs-sm serif">{{$article->localizedSection($sections)}}</p>
                    <h3 class="article-title card-title fw-light text-light crop-text-4 serif">{{$article->headline}}</h2>
                    <div class="d-block">
                        <p class="text-secondary fw-light crop-text-3 serif">{{$article->abstract}}</p>
                    </div>
                </div>
            </div>
        </a>
        @else
        <div class="row g-0 h-100 bg-dark rounded-0">
            @if (isset($text_position) == false || (isset($text_position) && $text_position == 'start'))
                <div class="col-12 col-md-4 col-lg-6 zoom-effect-wrapper">
                    <img style="object-fit: cover;" src="{{$article->image_url}}" class="img-fluid zoom-effect-img h-100" alt="{{$article->image_caption}}">
                </div>
            @endif
          <div @class([
              "col-12 col-md-8 p-0 p-md-5 col-lg-6 align-self-center"
          ])>
            <div style="max-width: 576px;" class="card-body p-4 p-md-5 text-center">
                    <p class="text-uppercase text-danger fs-sm serif">{{$article->localizedSection($sections)}}</p>
                    <h3 class="article-title card-title fw-light text-light crop-text-4 serif">{{$article->headline}}</h2>
                    <div class="d-block">
                        <p class="text-secondary fw-light crop-text-3 serif">{{$article->abstract}}</p>
                    </div>
                </div>
            </div>

            @if (isset($text_position) && $text_position == 'end')
              <div class="col-12 col-md-4 col-lg-6 zoom-effect-wrapper">
                  <img style="object-fit: cover;" src="{{$article->image_url}}" class="img-fluid zoom-effect-img h-100" alt="{{$article->image_caption}}">
              </div>
            @endif
          </div>
        </div>
        @endif
    </div>
</section>
