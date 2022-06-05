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
                <a class="nav-link" aria-current="page" href="index.php">Главная страница</a>
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
<div class="d-flex position-relative">
  <img class="img-size" src="imgs/morb.jpg" class="flex-shrink-0 me-3" alt="...">
  <div class="mrn-left">
    <h4 class="mt-0"><strong>Морбиус</strong></p>
    <p class="textfont"><small>Жанр: ужасы, фантастика, боевик</small></p>
    <form method="post" action="broni.php">
      <input class="form-control" type="hidden" name="film" value="Морбиус">
      <input class="form-control" type="hidden" name="price" value="350">
      <button type="sumbit" href="broni.php" class="btn btn-primary">Купить билет</button>
    </form>
  </div>
</div>
<p class="h1">О фильме</p>
  <p class="textfont"><em>Майкл Морбиус с детства страдает от редкого заболевания крови и всю свою сознательную жизнь посвятил поискам лекарства. В какой-то момент Майкл видит возможное спасение в крови летучих мышей и решается на рискованный эксперимент. Опыт вызывает неожиданную реакцию — он меняет тело Морбиуса, превращая его в кровожадного монстра.</em></p>
</div>


    <div class="container-fluid">
      <footer class="py-5 my-5 mt-auto">
        <p class="text-center text-muted">&copy; 2022 Синема</p>
      </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
