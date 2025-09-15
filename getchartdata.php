<?php
  include "db.php";

  if(isset($_GET['month']))
  {
    $table = [
      "far" => "kfar", "ord" => "kord", "kho" => "kkho", "tir" => "ktir", "mor" => "kmor", "sha" => "ksha",
      "mehr" => "kmehr", "aban" => "kaban", "azar" => "kazar", "dey" => "kday", "bah" => "kbahman", "esf" => "esfand"
    ];
    $month = $_GET['month'];
    
    if(isset($table[$month]))
    {
      $table = $table[$month];

      $query = "SELECT title , SUM(price) as total FROM `$table` GROUP BY title";
      $sql = mysqli_query($db , $query);

      $data = mysqli_fetch_all($sql , MYSQLI_ASSOC);
      header('Content-type : application/json; Charset=utf-8');
      echo json_encode($data , JSON_UNESCAPED_UNICODE);
      exit();
    }
  }
?>