@foreach($assistants as $assistant)
    <div class="visible-print text-center">
        {!! QrCode::size(200)->generate($assistant->getJsonForQRCode()); !!}
        <p><b>{{ $assistant->firstname . " " . $assistant->lastname }}</b></p>
        <p>{{ $assistant->type }}</p>
    </div>

    <hr>
    <br>
@endforeach