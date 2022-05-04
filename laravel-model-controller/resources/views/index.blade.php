<!-- FILE INDEX LEGATO AL CONTROLLER!-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <header>
        <h1>I film più belli di sempre</h1>
    </header>

    <main>
        <div class="container-all-cards">


            @foreach ($movies as $movie)
                <div class="single-card">
                    <ul>
                        <li> <h3> Titolo: {{ $movie->title }} </h3> </li>
                        <li> <h4> Titolo originale: {{ $movie->original_title }} </h4> </li>
                        <li> Nazionalità: {{ $movie->nationality }}</li>
                        <li> Data creazione: {{ $movie->date }}</li>
                        <li> Voto: {{ $movie->vote }}</li>
                    </ul>
                </div>
            @endforeach

        </div>
    </main>
 
    






</body>
</html>