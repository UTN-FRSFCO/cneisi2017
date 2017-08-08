<section id="speakers" class="section align-center">
    <div class="container">
        <span class="icon section-icon icon-faces-users-04"></span>
        <h3>Disertantes</h3>
        <p class="text-alt">Conocé a los principales <span class="highlight">disertantes</span> del congreso</p>
        <br />

        @foreach ($speakers as $speaker)
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xs-offset-0 col-sm-offset-0 col-md-offset-2 col-lg-offset-2 toppad" >
                    <div class="panel panel-info">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-3 col-lg-3 " align="center">
                                    <img alt="User Pic" src="{{ $speaker->getPicture() }}" class="img-speaker img-circle img-responsive" style="">
                                </div>
                                <div class=" col-md-9 col-lg-9 align-left">
                                    <div class="speaker">
                                        <h3 class="name speaker-name"><a>{{ $speaker->getName() }}</a></h3>
                                        <p class="text-alt speaker-tagline"><small>{{ $speaker->getTagline() }}</small></p>
                                        <p class="about speaker-desc">{{ $speaker->getDescription() }}</p>
                                        <ul class="speaker-social">
                                            @if($speaker->getFacebookLink())
                                                <li><a target="_blank" href="https://{{ $speaker->getFacebookLink() }}"><span class="fa fa-facebook"></span></a></li>
                                            @endif

                                            @if($speaker->getTwitterLink())
                                                <li><a target="_blank" href="https://{{ $speaker->getTwitterLink() }}"><span class="fa fa-twitter"></span></a></li>
                                            @endif

                                            @if($speaker->getGoogleLink())
                                                <li><a target="_blank" href="https://{{ $speaker->getGoogleLink() }}"><span class="fa fa-google-plus"></span></a></li>
                                            @endif
                                        </ul>
                                        <div class="see-more">
                                            <a href="{{ route('speaker.show', $speaker->getSlug()) }}" id="continue">
                                                <h6>Ver más <i class="fa fa-chevron-right" style="vertical-align: middle;"></i></h6>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <a href="{{ route('speakers') }}" class="btn btn-outline-clr btn-sm">Ver la lista completa <span class="fa fa-chevron-right"></span></a>
    </div>
</section>