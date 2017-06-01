<section class="footer">

    <div class="footer-base">
        <div class="container">

            <div class="col-md-12 align-center">
                <ul class="socials-nav align-center">
                    <li class="socials-nav-item"><a href="{{ config('constants.TWITTER_LINK') }}"><span class="fa fa-twitter"></span></a></li>
                    <li class="socials-nav-item"><a href="{{ config('constants.FACEBOOK_LINK') }}"><span class="fa fa-facebook"></span></a></li>
                </ul>

                <p class="text-alt"><small>{{ trans('strings.signature_footer') }} </small></p>
            </div>

        </div>
    </div>

    @include('components.top-arrow')

</section>