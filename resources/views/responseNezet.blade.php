<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Balogh Bíborka</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="css/ingatlan.css">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>


    <script src="js/ajax.js"></script>
    <script src="js/ingatlanClass.js"></script>
    <script src="js/ingatlan.js"></script>

    <script src="js/kategoria.js"></script>
    <script src="js/kategoriaClass.js"></script>


    <script src="js/ujHirdetesKuldes.js"></script>
    <script src="js/datum.js"></script>
</head>

<body>
    <div class="grid-container text-center divElem">
        @foreach ($kategoriakNev as $kategoriaNev)
            @foreach ($ingatlanok as $ingatlan)
                @if ($kategoriaNev->id === $ingatlan->kategoria)
                    <div class="grid-item">
                        <div class="cimke">
                            <p style="float: left">{{ $kategoriaNev->nev }}
                            <p style="float: right">{{ $ingatlan->ar }}</p>
                            </p>
                        </div>
                        <div><img src="{{ $ingatlan->kepURL }}"></div>
                        <div class="erdekelGomb">
                            <button id="erdekelGomb">Érdekel</button>
                        </div>
                    </div>
                @endif
            @endforeach
        @endforeach
    </div>
</body>

</html>
