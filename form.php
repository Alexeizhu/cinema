<?php include "db_connect.php";?>
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
  <body>

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
      <div class="row cust">
        <h1>Спасибо за покупку!</h1>
        <h3>Информация о заказе:</h3>
        <?php
          //Если переменная Name передана
          if (isset($_POST["email"])&&isset($_POST["phone"])) {
            //Вставляем данные, подставляя их в запрос
            $film = $_POST['movie'];
            $tic = $_POST['tic'];
            $pric = $_POST['price'];
            $places = $_POST['place'];
            $arr = mb_str_split($places);
            $perv = $pric / $tic;
            for($i = 0; $i < count($arr);) {
              $id = $i + 1;
              $sql = mysqli_query($link, "INSERT INTO `tickets` (`id`, `film`, `count_t`, `price_t`, `row`, `place`, `email`, `phone`) VALUES (NULL, '$film', '1', '$perv', '$arr[$i]', '$arr[$id]', '{$_POST['email']}', '{$_POST['phone']}')");
              $i = $i + 2;
            }
            //Если вставка прошла успешно
            if ($sql) {
              echo '<h4>Фильм: '.$film.'</h4>';
              echo '<h4>Билет(ы): '.$tic.'</h4>';
              echo '<h4>Стоиомсть: '.$pric.'р</h4>';
              //echo 'Чек отправлен на указанную почту!';

            } else {
              echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
            }
          }
        ?>
        <p><a type="button" class="" href="index.php">Вернуться назад</a></p>
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
