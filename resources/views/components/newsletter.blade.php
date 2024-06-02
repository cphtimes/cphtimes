<div class="border-top py-5 border-bottom">
    <form action="/api/subscribe" method="post" id="subscribe-form" name="mc-embedded-subscribe-form" class="validate">
        <div class="d-flex justify-content-center align-items-center">
            <h5 class="serif fw-bolder fst-italic me-3 mb-0">Subscribe to our newsletter</h5>
            <p class="text-dark me-5 mb-0">Weekly digest of what's new and exciting from us.</p>
            <div class="d-flex gap-2">
                <div class="input-group input-group">
                    <input type="email" value="" name="email" class="form-control"placeholder="Your email" required>
                    <button class="btn btn-dark" type="submit" value="Subscribe" name="subscribe" id="subscribe">{{__('messages.subscribe')}}</button>
                </div>
            </div>
        </div>
    </form>
</div>
