<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try {
  $mysqli = new mysqli ("localhost" , "root" , "" , "zz_mares");
  $mysqli->set_charset("utf8mb4");
} catch (Exception $e) {
  error_log($e->getMessage());
  exit('Error connecting to database');

}


 ?>
