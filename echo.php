<?php

function php_func(){
  $namemov = $_GET['text'];
  include "db_connect.php";

  for ($k = 1; $k <= 6; $k++) {
    print "<div class='row' id='$k'>";
    for ($i = 1; $i <= 8; $i++){
      if(mysqli_num_rows(mysqli_query($link, "SELECT * FROM `tickets` WHERE `film` = '$namemov' AND `row` = '$k' AND `place` = '$i'"))>0){
          print "<div class='seat occupied' id='$i'></div>";
      }else{
          print "<div class='seat' id='$i'></div>";
      }
    }
  print "</div>";
}
}
php_func();
?>
<script type="text/javascript">
  updateSelectedCount();
</script>
