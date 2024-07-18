<footer class="footer bg-dark py-5" data-bs-theme="dark">
      <div class="container pt-md-2 pt-lg-3 pt-xl-4">
        <div class="row pb-5 pt-sm-2 mb-lg-2">
          <div class="col-sm-5 col-md-4 col-xl-3 pb-2 pb-sm-0 mb-4 mb-sm-0">
            <a class="navbar-brand py-0 mb-3 mb-md-4 fw-normal" href="{{route('frontpage')}}">
              <span class="text-light opacity-90 chomsky">{{__('messages.brand_name')}}</span>
            </a>
            <p class="text-body fs-sm pb-2 pb-md-3 mb-3">{{__('messages.about_body_short')}}</p>
            <div class="d-flex">
              <a class="btn btn-icon btn-sm btn-secondary btn-telegram rounded-circle me-3" target="_blank" href="https://t.me/+YT0mKiW94YIzMDE0" aria-label="Telegram">
                <i class="ai-telegram"></i>
              </a>
              <a class="btn btn-icon btn-sm btn-secondary btn-x rounded-circle me-3" target="_blank" href="https://twitter.com/bedredanmark" aria-label="Twitter">
                <i class="ai-x"></i>
              </a>
              <a class="btn btn-icon btn-sm btn-secondary btn-facebook rounded-circle" target="_blank" href="https://www.facebook.com/groups/bedredanmark" aria-label="Facebook">
                <i class="ai-facebook"></i>
              </a>
            </div>
          </div>
          <div class="col-sm-6 offset-sm-1 offset-md-2 offset-xl-3">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3">
              <div class="col mb-4 mb-md-0">
                  <h3 class="h6 text-uppercase d-none d-md-block">{{__('messages.links_header')}}</h3>
                  <a class="btn-more h6 mb-1 text-uppercase text-decoration-none d-flex align-items-center collapsed d-md-none" href="#links" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="links" data-show-label="Links" data-hide-label="Links" aria-label="Links"></a>
                  <div class="collapse d-md-block" id="links" data-bs-parent="#links">
                      <ul class="nav flex-column pb-2 pb-md-0">
                          <li class="nav-item">
                              <a class="nav-link fw-normal py-1 px-0" href="/about">About</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link fw-normal py-1 px-0" href="/contact">Contact</a>
                          </li>
                      </ul>
                  </div>
              </div>

              <div class="col">
                <h3 class="h6 text-uppercase d-none d-md-block">{{__('messages.other_header')}}</h3>
                <a class="btn-more h6 mb-1 text-uppercase text-decoration-none d-flex align-items-center collapsed d-md-none" href="#other" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="other" data-show-label="Other" data-hide-label="Other" aria-label="Other"></a>
                <div class="collapse d-md-block" id="other" data-bs-parent="#links">
                    <ul class="nav flex-column pb-2 pb-md-0">
                        <li class="nav-item">
                            <a class="nav-link fw-normal px-0 py-1" href="https://elenadanaan.org" target="_blank">Elena Danaan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-normal px-0 py-1" href="https://marinajacobi.com" target="_blank">Marina Jacobi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-normal px-0 py-1" href="https://thewebmatrix.net" target="_blank">Dan Willis</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-normal px-0 py-1" href="https://endritualabuse.org" target="_blank">Ellen Lacter</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-normal px-0 py-1" href="https://www.bitchute.com/channel/fk3aw7qbnyUs" target="_blank">AboveIsBelow</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-normal px-0 py-1" href="https://susann-niclas.se" target="_blank">Susann Björklund</a>
                        </li>
                    </ul>
                </div>
            </div>

            </div>
          </div>
        </div>

        <div class="d-flex justify-content-between align-items-center border-top pt-4">
            <div>
                <p class="nav fs-sm mb-0">
                    <span class="text-body-secondary">{{__('messages.all_rights_reserved_alt')}}</span>
                    <a class="nav-link fw-normal p-0 ms-1" href="https://app.aria5.co/me/danielrlehmann" target="_blank" rel="noopener">Daniel Lehmann</a>
                </p>
            </div>

            <div>
                <button class="btn btn-outline-secondary dropdown-toggle px-4" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                    @if (LaravelLocalization::getCurrentLocale() == 'en')
                    <img class="me-2" src="/assets/img/flags/en.png" width="18" alt="{{__('messages.english')}}">{{__('messages.english')}}
                    @elseif (LaravelLocalization::getCurrentLocale() == 'da')
                    <img class="me-2" src="/assets/img/flags/da.png" width="18" alt="{{__('messages.danish')}}">{{__('messages.danish')}}
                    @endif
                </button>

                <div class="dropdown-menu dropdown-menu-end my-1">
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <li>
                            <a class="dropdown-item pb-1" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                <img class="me-2" src="/assets/img/flags/{{$localeCode}}.png" width="18" alt="{{ ucfirst($properties['native']) }}">
                                {{ ucfirst($properties['native']) }}
                            </a>
                        </li>
                    @endforeach
                </div>
            </div>

        </div>
      </div>
    </footer>
