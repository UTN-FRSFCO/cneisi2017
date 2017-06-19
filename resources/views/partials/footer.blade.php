<section class="footer">

    <div class="footer-base">
        <div class="container">

            <div class="col-md-12 align-center">
                <ul class="socials-nav align-center" style="text-align: center;">
                    <li class="socials-nav-item"><a href="{{ config('constants.TWITTER_LINK') }}" target="_blank"><span class="fa fa-twitter"></span></a></li>
                    <li class="socials-nav-item"><a href="{{ config('constants.FACEBOOK_LINK') }}" target="_blank"><span class="fa fa-facebook"></span></a></li>
                </ul>

                <a href="{{ config('constants.SITE_LINK') }}"><p class="text-alt"><small>{{ trans('strings.signature_footer') }} </small></p></a>
            </div>

        </div>
    </div>

    @include('components.top-arrow')

</section>