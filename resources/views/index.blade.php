<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <h1 class="text-info bg-danger">Oggi al Cinema</h1>
    <ul>
        <li class="text-danger"><a href="{{route('index.series')}}">TV Series</a></li>
        <li><a href="{{route('index.films')}}">Film</a></li>

        
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="https://www.amica.it/wp-content/uploads/2021/09/film-in-uscita-slider.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS3LNVA1v_4prcz9sBKFtLn6_N7KCpKXxd0YBoMx8y6Ggy96kk-QfWO8Zz9vEq3aaQzojw&usqp=CAU" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://i1.wp.com/masedomani.com/wp-content/uploads/2023/07/BBC-5-lug.jpg?fit=800%2C450&ssl=1" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>