<a href="#" id="showError" data-modal-link="error" style="display:none;"></a>
<div class="modal-window" data-modal="error" style="background-color: rgba(2, 2, 2, 0.85);">
    <div class="modal-box small animated" data-animation="zoomIn" data-duration="700">
        <span class="close-btn icon icon-office-52"></span>

        <h5 class="align-center"><span class="highlight">{{ trans('strings.error') }}</span></h5>

        <label>{{ Session::get( 'warning' ) }}</label>

    </div>
</div>