<div class="pt-lg-3 pt-4 pb-5 pb-lg-0 border-top border-2 container">
    <footer class="pt-3 border-1">
        <div class="row px-md-3">
            <div class="col-6 col-md-4 col-lg-2 px-4 px-md-0">
                <h5 class="serif fw-bolder fst-italic">{{ucfirst(trans_choice('messages.sections', 2))}}</h5>
                <ul class="nav flex-column">
                    @foreach ($sections->slice(0, 12) as $section)
                    <li class="nav-item mb-2">
                        <a href="{{ route('section', ['section' => $section->uri]) }}" class="nav-link p-0 text-muted">{{$section->name}}</a>
                    </li>
                    @endforeach

                    @if ($sections->slice(12)->count() > 0)
                    <li class="dropdown nav-item">
                        <a class="nav-link p-0 text-muted d-flex align-items-center" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="dropdown-toggle">{{ ucfirst(__('messages.more')) }}</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end my-1">
                            @foreach ($sections->slice(12) as $section)
                            <a class="dropdown-item" href="{{ route('section', ['section' => $section->uri]) }}">{{$section->name}}</a>
                            @endforeach
                        </div>
                    </li>
                    @endif
                </ul>
            </div>

            <div class="col-6 col-md-4 col-lg-2 px-4 px-md-0">
                <h5 class="serif fw-bolder fst-italic">{{ucfirst(trans_choice('messages.links', 2))}}</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a target="_blank" href="https://artofdestruction.dk" class="nav-link p-0 text-muted">Art of destruction</a></li>
                    <li class="nav-item mb-2"><a target="_blank" href="https://marinajacobi.com" class="nav-link p-0 text-muted">Marina Jacobi</a></li>
                    <li class="nav-item mb-2"><a target="_blank" href="https://www.bitchute.com/channel/fk3aw7qbnyUs/" class="nav-link p-0 text-muted">AboveIsBelow</a></li>
                    <li class="nav-item mb-2"><a target="_blank" href="https://www.youtube.com/@lightatthecentre2691" class="nav-link p-0 text-muted">Light at the Center</a></li>
                    <li class="nav-item mb-2"><a target="_blank" href="https://www.youtube.com/@ElenaDanaan" class="nav-link p-0 text-muted">Elena Danaan</a></li>
                    <li class="nav-item mb-2"><a target="_blank" href="https://doctors4covidethics.org/" class="nav-link p-0 text-muted">Doctors for Covid Ethics</a></li>
                    <li class="nav-item mb-2"><a target="_blank" href="https://www.youtube.com/@AlexCollierOfficial" class="nav-link p-0 text-muted">Alex Collier</a></li>
                    <li class="nav-item mb-2"><a target="_blank" href="https://vigilantcitizen.com" class="nav-link p-0 text-muted">Vigilant Citizen</a></li>
                    <li class="nav-item mb-2"><a target="_blank" href="https://vigilantlinks.com" class="nav-link p-0 text-muted">Vigilant Links</a></li>
                    <li class="nav-item mb-2"><a target="_blank" href="https://kidsrescue.dk" class="nav-link p-0 text-muted">Kids Rescue</a></li>
                </ul>
            </div>

            <div class="col-6 col-md-4 col-lg-2 px-4 px-md-0">
                <h5 class="serif fw-bolder fst-italic">{{ ucfirst(__('messages.more')) }}</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a target="_blank" href="https://bedredanmark.dk" class="nav-link p-0 text-muted">Bedre Danmark</a></li>
                    <li class="nav-item mb-2"><a target="_blank" href="https://app.aria5.co" class="nav-link p-0 text-muted">Aria5</a></li>
                    <li class="nav-item mb-2"><a target="_blank" href="https://moodylinks.com" class="nav-link p-0 text-muted">MoodyLinks</a></li>
                    <!--
              <li class="nav-item mb-2"><a href="/donate" class="nav-link p-0 text-muted">Donate</a></li>
              <li class="nav-item mb-2"><a href="/privacy" class="nav-link p-0 text-muted">Privacy</a></li>
              <li class="nav-item mb-2"><a href="/policy" class="nav-link p-0 text-muted">Policy</a></li>
              -->
                </ul>
            </div>

            <div class="d-none d-lg-block col-12 col-md-8 col-lg-4 offset-0 offset-lg-1"> <!-- border-start ps-4 -->
                <form action="/api/subscribe" method="post" id="subscribe-form" name="mc-embedded-subscribe-form" class="validate">
                    <h5 class="serif fw-bolder fst-italic">{{__('messages.subscribe_newsletter_header')}}</h5>
                    <p class="text-dark">{{__('messages.subscribe_newsletter_text')}}</p>
                    <div class="d-flex w-100 gap-2">
                        <label for="newsletter1" class="visually-hidden">{{__('messages.email_address')}}</label>
                        <input type="email" value="" name="email" class="required email form-control" id="email" placeholder="{{__('messages.email_address')}}" required>
                        <button type="submit" value="Subscribe" name="subscribe" id="subscribe" class="btn btn-primary" type="button">{{__('messages.subscribe')}}</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="row d-none d-md-block px-md-3">
            <div class="d-flex justify-content-between py-4 my-4 border-top px-0">
                <p class="text-dark">{{__('messages.all_rights_reserved', ['year' => now()->year, 'app' => __('messages.brand_name')])}}</p>
                <ul class="list-unstyled d-flex">
                    <li class="ms-3">
                        <a target="_blank" href="https://t.me/+YT0mKiW94YIzMDE0" class="btn btn-secondary btn-icon btn-sm btn-telegram rounded-circle" aria-label="Telegram">
                            <i class="ai-telegram"></i>
                        </a>
                    </li>
                    <li class="ms-3">
                        <a target="_blank" href="https://twitter.com/bedredanmark" class="btn btn-secondary btn-icon btn-sm btn-x rounded-circle" aria-label="X">
                            <i class="ai-x"></i>
                        </a>
                    </li>
                    <li class="ms-3">
                        <a target="_blank" href="https://www.facebook.com/groups/bedredanmark" class="btn btn-secondary btn-icon btn-sm btn-facebook rounded-circle" aria-label="Facebook">
                            <i class="ai-facebook"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row d-block d-md-none">
            <div class="d-flex flex-column align-items-center justify-content-center py-4 mt-4 border-top px-4">
                <p class="text-center text-dark">{{__('messages.all_rights_reserved', ['year' => now()->year, 'app' => __('messages.brand_name')])}}</p>
                <ul class="list-unstyled d-flex">
                    <li class="ms-3">
                        <a target="_blank" href="https://t.me/+YT0mKiW94YIzMDE0" class="btn btn-secondary btn-icon btn-sm btn-telegram rounded-circle" aria-label="Telegram">
                            <i class="ai-telegram"></i>
                        </a>
                    </li>
                    <li class="ms-3">
                        <a target="_blank" href="https://twitter.com/bedredanmark" class="btn btn-secondary btn-icon btn-sm btn-x rounded-circle" aria-label="X">
                            <i class="ai-x"></i>
                        </a>
                    </li>
                    <li class="ms-3">
                        <a target="_blank" href="https://www.facebook.com/groups/bedredanmark" class="btn btn-secondary btn-icon btn-sm btn-facebook rounded-circle" aria-label="Facebook">
                            <i class="ai-facebook"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</div>