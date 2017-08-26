<!doctype html>
<html lang="es-AR" style="margin:0 0 0 0; padding: 0 0 0 0;">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body style="padding-bottom: 50px">

<br><br><br>

        @php
            $number = 1;
            $nonIndent = true;
        @endphp


        @foreach($assistants as $assistant)
            <div class="text-center" style="border: 1px solid black; width:265px; height: 265px; z-index: 999999; display: inline-block; {{ ($nonIndent ? 'margin-left: 4px': 'margin-left: -4px;') }}">
                <img src="data:image/png;base64, {{ base64_encode(QrCode::format('png')->size(220)->generate($assistant->getJsonForQRCode())) }}" style="margin-top: 0px;">
                <p style="margin-top:-28px; margin-bottom: -6px;"><b style="font-size: 22px;">{{ $assistant->getFullName() }}</b></p>
                <p style="font-size: 17px; margin-right: 1px; margin-left: 1px">{{ $assistant->getParsedType() }}</p>
            </div>

            @php
                $nonIndent = false;
                if($number%3 == 0) {
                   echo "<br/>";
                   $nonIndent = true;
                }

                if($number%9 == 0) {
                   echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>";
                }

                $number++;
            @endphp

        @endforeach


</body>
</html>