<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>I miei film</title>
</head>
<body>
    <main>
        <h1>I miei 10 film</h1>
        @foreach ($movies as $movie)
            <div class="movie-wrapper">
                <div class="movie-card">
                    <div class="title">{{$movie->title}}</div>
                    <div class="original-title">{{$movie->original_title}}</div>
                    <div class="country">{{$movie->nationality}}</div>
                    <div class="date">{{$movie->date}}</div>
                    <div class="vote">{{$movie->vote}}</div>
                </div>
            </div>
        @endforeach
    </main>
</body>
</html>