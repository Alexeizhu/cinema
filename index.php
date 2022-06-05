<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Синема</title>
    <link rel="stylesheet" href="css/main.css">
    <script src="js/jquery-3.6.0.min.js"></script>
  </head>
  <body class="d-flex flex-column min-vh-100">
    <div class="customnav">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="index.php">Cinema</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Главная страница</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="schedule.php">Расписание</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="news.php">Новости</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="infocinema.php">О кинотеатре</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>

    <div class="container">
      <h1>Скоро в кино</h1>
      <div class="row cust">
        <div class="col text-center">
          <a class="text" href="koati.php"><img src="imgs/koati.jpg" class="rounded mx-auto d-block" alt="...">Коати. Легенда джунглей</a>
        </div>
        <div class="col text-center">
          <a class="text" href="thor3.php"><img src="imgs/thor.jpg" class="rounded mx-auto d-block" alt="...">Тор. Любовь и гром</a>
        </div>
        <div class="col text-center">
          <a class="text" href="trikotaimorepriklucheniya.php"><img src="imgs/trikota.jpg" class="rounded mx-auto d-block" alt="...">Три кота и море приключения</a>
        </div>
        <div class="col text-center">
          <a class="text" href="serdceparmi.php"><img src="imgs/parmi.jpeg" class="rounded mx-auto d-block" alt="...">Сердце Пармы</a>
        </div>
        <div class="col text-center">
          <a class="text" href="fly.php"><img src="imgs/fly.jpg" class="rounded mx-auto d-block" alt="...">Флай</a>
        </div>
      </div>
    </div>


    <div class="container-fluid">
      <footer class="py-5 my-5 mt-auto">
        <p class="text-center text-muted">&copy; 2022 Синема</p>
      </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
