<div class="pt-4 mt-md-5 pt-md-4 border-top border-2 container">
      <footer class="pt-3">
        <!-- <a style="font-family: 'UnifrakturMaguntia', cursive; font-size: 1.8rem;" class="navbar-brand" href="#">The Copenhagen Gates</a>-->
        <div class="row px-md-3">
          <div class="col-6 col-md-4 col-lg-2 px-4 px-md-0">
            <h5 class="serif fst-italic">{{ucfirst(trans_choice('messages.sections', 2))}}</h5>
            <ul class="nav flex-column">
              @foreach ($sections as $section)
                <li class="nav-item mb-2">
                  <a href="/section/{{$section->uri}}" class="nav-link p-0 text-muted">{{$section->name}}</a>
                </li>
              @endforeach
            </ul>
          </div>

          <div class="col-6 col-md-4 col-lg-2 px-4 px-md-0">
            <h5 class="serif fst-italic">{{ucfirst(trans_choice('messages.links', 2))}}</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a target="_blank" href="https://marinajacobi.com" class="nav-link p-0 text-muted">Marina Jacobi</a></li>
              <li class="nav-item mb-2"><a target="_blank" href="https://www.bitchute.com/channel/fk3aw7qbnyUs/" class="nav-link p-0 text-muted">AboveIsBelow</a></li>
              <li class="nav-item mb-2"><a target="_blank" href="https://www.youtube.com/@lightatthecentre2691" class="nav-link p-0 text-muted">Light at the Center</a></li>
              <li class="nav-item mb-2"><a target="_blank" href="https://www.youtube.com/@ElenaDanaan" class="nav-link p-0 text-muted">Elena Danaan</a></li>
              <li class="nav-item mb-2"><a target="_blank" href="https://doctors4covidethics.org/" class="nav-link p-0 text-muted">Doctors for Covid Ethics</a></li>
              <li class="nav-item mb-2"><a target="_blank" href="https://www.youtube.com/@AlexCollierOfficial" class="nav-link p-0 text-muted">Alex Collier</a></li>
              <li class="nav-item mb-2"><a target="_blank" href="https://vigilantcitizen.com" class="nav-link p-0 text-muted">Vigilant Citizen</a></li>
              <li class="nav-item mb-2"><a target="_blank" href="https://vigilantlinks.com" class="nav-link p-0 text-muted">Vigilant Links</a></li>
            </ul>
          </div>

          <div class="col-6 col-md-4 col-lg-2 px-4 px-md-0">
            <h5 class="serif fst-italic">{{ucfirst(__('messages.more'))}}</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="/about" class="nav-link p-0 text-muted">About</a></li>
              <li class="nav-item mb-2"><a href="https://app.aria5.co" class="nav-link p-0 text-muted">Aria5.co</a></li>
              <li class="nav-item mb-2"><a href="https://resonantlinks.com" class="nav-link p-0 text-muted">Resonantlinks.com</a></li>
              <li class="nav-item mb-2"><a href="/donate" class="nav-link p-0 text-muted">Donate</a></li>
              <li class="nav-item mb-2"><a href="/privacy" class="nav-link p-0 text-muted">Privacy</a></li>
              <li class="nav-item mb-2"><a href="/policy" class="nav-link p-0 text-muted">Policy</a></li>
            </ul>
          </div>

          <div class="d-none d-lg-block col-12 col-md-8 col-lg-4 offset-0 offset-lg-1"> <!-- border-start ps-4 -->
            <form action="/api/subscribe" method="post" id="subscribe-form" name="mc-embedded-subscribe-form" class="validate">
              <h5 class="serif fst-italic">{{__('messages.subscribe_newsletter_header')}}</h5>
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
              <li class="ms-3"><a class="nav-link" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
                  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/>
                </svg>
              </a></li>
              <li class="ms-3"><a class="nav-link" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                  <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                </svg>
              </a></li>
              <li class="ms-3"><a class="nav-link" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                </svg>
              </a></li>
            </ul>
          </div>
        </div>

        <div class="row d-block d-md-none">
          <div class="d-flex flex-column align-items-center justify-content-center py-4 mt-4 border-top px-4">
            <p class="text-center text-dark">{{__('messages.all_rights_reserved', ['year' => now()->year, 'app' => __('messages.brand_name')])}}</p>
            <ul class="list-unstyled d-flex">
              <li class="ms-3"><a class="link-dark" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
                  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/>
                </svg>
              </a></li>
              <li class="ms-3"><a class="link-dark" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                  <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                </svg>
              </a></li>
              <li class="ms-3"><a class="link-dark" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                </svg>
              </a></li>
            </ul>
          </div>
        </div>
      </footer>
    </div>