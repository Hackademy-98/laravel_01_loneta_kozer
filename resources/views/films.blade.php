<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Progetto di Loneta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-danger">Film Interessanti da Vedere!</h1>
    <h2 class="text-danger">ATENTTI suscita emozioni POSITIVI</h2>
    <ul>
        <li><a href="{{route('home')}}">Homepage</a></li>
        <li><a href="{{route('index.series')}}">Serie TV</a></li>
    </ul>

<div class="container">
  <div class="row">
  @foreach($film as $film)
   <div class="col-12 col-md-4 my-3">
    <div class="card" style="width: 18rem;">
  <img src="{{$film["img"]}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$film["name"]}}</h5>
    <p class="card-text">{{$film["descripsion"]}}</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div>
    @endforeach
  </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
