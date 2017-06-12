@if(!Auth::guest() && (Auth::User()->userProfile->getUserType() != 'general_audience'))
    <form class="form-horizontal align-center" role="form" method="POST" action="">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" value="PUT">

        <div class="form-group">
            <label for="author" class="col-md-2 control-label">{{ trans('strings.author') }}</label>
            <div class="col-md-8">
                <input id="author" type="text" class="form-control" name="author" value="" required>
            </div>
        </div>

        <div class="form-group">
            <label class="btn btn-black btn-sm">
                Seleccionar <input type="file" accept=".pdf" style="display: none;">
            </label><br>
            <label id="file-name"></label>
        </div>

        <div class="form-group">
            <div class="col-md-4 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    {{trans ('buttons.send')}}
                </button>
            </div>

        </div>

    </form>
@endif