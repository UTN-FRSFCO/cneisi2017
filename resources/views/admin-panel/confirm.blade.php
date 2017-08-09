<div class="modal-window" data-modal="{{$id}}" style="background-color: rgba(2, 2, 2, 0.85);">
    <div class="modal-box small animated" data-animation="zoomIn" data-duration="700">
        <span class="close-btn icon icon-office-52"></span>

        <h5 class="align-center"><span class="highlight">{{ $title }}</span></h5>
            <span class="col-sm-12 confirmation-body">
                {{ $question }}
            </span>

            <span class="col-sm-6 align-center">
                <button type="submit" class="btn btn-danger" style="display: inline-block !important;">
                    Si
                </button>
            </span>

            <span class="col-sm-6 align-center">
                <button type="button" class="btn close-btn" data-dismiss="modal">
                    No
                </button>
            </span>


    </div>
</div>