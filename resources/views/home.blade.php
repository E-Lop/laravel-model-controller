<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>I miei film</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <main>
        <h1>I miei 10 film</h1>
        <div class="movie-wrapper">
            @foreach ($movies as $movie)
            
            <div class="movie-card">
                <div class="title"><span>Titolo:</span> {{$movie->title}}</div>
                <div class="original-title"><span>Titolo originale:</span> {{$movie->original_title}}</div>
                <div class="country"><span>Origine:</span> {{$movie->nationality}}</div>
                <div class="date"><span>Uscita nelle sale:</span>{{$movie->date}}</div>
                <div class="vote"><span>Voto:</span> {{$movie->vote}}</div>
            </div>
          
        @endforeach
        </div>
    </main>
</body>
</html>