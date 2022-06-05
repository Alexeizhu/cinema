<?php include "db_connect.php" ?>

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
  <?php if(isset($_POST['film'])){

  } else {
    $new_url = 'index.php';
    header('Location: '.$new_url);
  }?>
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

    <div class="movie-container">
      <label>Выберите фильм:</label>
      <select id="movie">
        <option value="300" data-name="Соник 2">Соник 2 (300р)</option>
        <option value="250" data-name="Фантастические твари 3">Фантастические твари 3 (250р)</option>
        <option value="320" data-name="Всё везде и сразу">Всё везде и сразу (320р)</option>
        <option value="350" data-name="Морбиус">Морбиус (350р)</option>
        <option value="310" data-name="Варяг">Варяг (310р)</option>
        <option value="280" data-name="Плохие парни">Плохие парни (280р)</option>
      </select>
    </div>
    <div class="container">
      <div class="row">
        <div class="col">
          <h2>Фильм: <span id="filmcur"><?php $film = $_POST['film']; echo "$film"; ?></span><input id="currPrice" class="form-control" type="hidden" value="<?php $price = $_POST['price']; echo "$price"; ?>"></h2>
        </div>
      </div>

    </div>

    <ul class="showcase">
      <li>
        <div class="seat"></div>
        <small>Незанятные</small>
      </li>

      <li>
        <div class="seat selected"></div>
        <small>Выбрано</small>
      </li>

      <li>
        <div class="seat occupied"></div>
        <small>Занятные</small>
      </li>
    </ul>

    <div class="containercus">
      <div class="screen"></div>
      <div class="cont">
        <div class="row" id="1">
          <div class="seat" id="1"></div>
          <div class="seat" id="2"></div>
          <div class="seat" id="3"></div>
          <div class="seat" id="4"></div>
          <div class="seat" id="5"></div>
          <div class="seat" id="6"></div>
          <div class="seat" id="7"></div>
          <div class="seat" id="8"></div>
        </div>
        <div class="row" id="2">
          <div class="seat" id="1"></div>
          <div class="seat" id="2"></div>
          <div class="seat" id="3"></div>
          <div class="seat" id="4"></div>
          <div class="seat" id="5"></div>
          <div class="seat" id="6"></div>
          <div class="seat" id="7"></div>
          <div class="seat" id="8"></div>
        </div>

        <div class="row" id="3">
          <div class="seat" id="1"></div>
          <div class="seat" id="2"></div>
          <div class="seat" id="3"></div>
          <div class="seat" id="4"></div>
          <div class="seat" id="5"></div>
          <div class="seat" id="6"></div>
          <div class="seat" id="7"></div>
          <div class="seat" id="8"></div>
        </div>

        <div class="row" id="4">
          <div class="seat" id="1"></div>
          <div class="seat" id="2"></div>
          <div class="seat" id="3"></div>
          <div class="seat" id="4"></div>
          <div class="seat" id="5"></div>
          <div class="seat" id="6"></div>
          <div class="seat" id="7"></div>
          <div class="seat" id="8"></div>
        </div>

        <div class="row" id="5">
          <div class="seat" id="1"></div>
          <div class="seat" id="2"></div>
          <div class="seat" id="3"></div>
          <div class="seat" id="4"></div>
          <div class="seat" id="5"></div>
          <div class="seat" id="6"></div>
          <div class="seat" id="7"></div>
          <div class="seat" id="8"></div>
        </div>

        <div class="row" id="6">
          <div class="seat" id="1"></div>
          <div class="seat" id="2"></div>
          <div class="seat" id="3"></div>
          <div class="seat" id="4"></div>
          <div class="seat" id="5"></div>
          <div class="seat" id="6"></div>
          <div class="seat" id="7"></div>
          <div class="seat" id="8"></div>
        </div>
      </div>
    </div>

    <p class="text">
      Вы выбрали <span id="count">0</span> мест за <span id="total">0</span>р.
    </p>
    <button type="button" id="subm" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Купить</button>

    <div class="modal fade textcolor" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Информация о заказе</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form method="post" action="form.php">
              <div class="mb-3">
                Вы выбрали фильм: <span id="curMovie"></span> <input id="val" type="hidden" name="movie" value=""> <br>
                Билет(ы): <span id="curTic"></span><input id="valbil" type="hidden" name="tic" value=""> <br>
                Стоимость: <span id="curPrice"></span>р <input id="valprice" type="hidden" name="price" value=""><br>
                Место(а): <span id="place"></span><input id="valplace" type="hidden" name="place" value=""><br>
                <label for="exampleInputEmail1" class="form-label">E-mail</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Телефон</label>
                <input name="phone" type="tel" class="form-control bfh-phone" data-format="+7 (ddd) ddd-dddd" Value="+7">
              </div>
              <button type="submit" id="btn" class="btn btn-primary">Купить</button>
            </form>

          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <footer class="py-5 my-5 mt-auto">
        <p class="text-center text-muted">&copy; 2022 Синема</p>
      </footer>
    </div>

    <script src="js/main.js"></script>

    <script>
      var namemov = document.getElementById('filmcur').innerText;
      $.ajax({url:"echo.php", method: "get", data: {text: namemov}, success:function(result){
        $("div.cont").html(result);
      }})
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
