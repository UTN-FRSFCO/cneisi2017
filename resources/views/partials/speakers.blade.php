<section id="speakers" class="section align-center">
    <div class="container">
        <span class="icon section-icon icon-faces-users-04"></span>
        <h3>Speakers</h3>
        <p class="text-alt">Conocé a los principales <span class="highlight">speakers</span> del congreso</p>
        <br />
        <br />

        @foreach ($speakers as $speaker)

            <div class="col-sm-4">
                <div class="speaker">
                    <div class="{{ $speaker->getSlug() }}">
                        <input type="hidden" id="video-speaker-link-{{ $speaker->getSlug() }}" value="{{ $speaker->getVideo() }}" />
                        @if($speaker->hasVideo())
                            <div class="vid-speaker photo-wrapper rounded"><img src="{{ $speaker->getPicture() }}" alt="{{ $speaker->getName() }}" class="img-responsive" style="width: 140px; height: 140px;"></div>
                            <h3 class="vid-speaker name"><a>{{ $speaker->getName() }}</a></h3>
                        @else
                            <div class="photo-wrapper rounded"><img src="{{ $speaker->getPicture() }}" alt="{{ $speaker->getName() }}" class="img-responsive" style="width: 140px; height: 140px;"></div>
                            <h3 class="name"><a>{{ $speaker->getName() }}</a></h3>
                        @endif

                        <p class="text-alt"><small>{{ $speaker->getTagline() }}</small></p>
                        <p class="about">{{ $speaker->getDescription() }}</p>
                        <ul class="speaker-socials">
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
                    </div>
                </div>
            </div>

        @endforeach

        @include('components.modal-video-speaker')
    </div>
</section>