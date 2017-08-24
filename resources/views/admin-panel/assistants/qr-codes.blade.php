<!doctype html>
<html lang="es-AR">
<head>
    @include('layouts.headers')
</head>

<body>

<div class="container">
    <div class="row">
        @foreach($assistants as $assistant)
            <div class="text-center" style="border: 1px solid black; width: 30%; display: inline-block; margin-bottom: 10px;">
                <img src="data:image/png;base64, {{ base64_encode(QrCode::format('png')->size(250)->generate($assistant->getJsonForQRCode())) }} ">
                <p style="margin-top:-18px; font-size:27px;"><b>{{ $assistant->firstname . " " . $assistant->lastname }}</b></p>
                <p style="margin-top: -10px; font-size: 22px;">{{ $assistant->getParsedType() }}</p>
            </div>
        @endforeach
    </div>
</div>

</body>
</html>