<section id="counters" class="section align-center overlay bg-cover bg5 light-text">
    <div class="container">

        <div class="row counters-wrapper">
            <div class="col-sm-3 hidden">
                <div class="counter-block counter-block-no-border">
                    <div class="counter-box">
                        <div class="counter-content">
                            <span class="count" data-from="0" data-to="{{ count($speakers) }}">0</span>

                            <p class="title">speakers</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="counter-block counter-block-no-border">
                    <div class="counter-box">
                        <div class="counter-content">
                            <span class="count" data-from="0" data-to="3">0</span>

                            <p class="title">dias</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="counter-block counter-block-no-border">
                    <div class="counter-box">
                        <div class="counter-content">
                            <span class="count" data-from="0" data-to="12">0</span>

                            <p class="title">Facultades regionales</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 hidden">
                <div class="counter-block counter-block-no-border">
                    <div class="counter-box">
                        <div class="counter-content">
                            <span class="count" data-from="0" data-to="25">0</span>

                            <p class="title">papers & posters</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 hidden">
                <div class="counter-block counter-block-no-border">
                    <div class="counter-box">
                        <div class="counter-content">
                            <span class="count" data-from="0" data-to="{{ $conferencesAmount }}">0</span>

                            <p class="title">charlas</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>