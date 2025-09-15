<?php
include 'db.php';
session_start();

?>

<!DOCTYPE html>
<html lang="en" dir="rtl">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://hosbyte.ir/files/bootstrap-5.3.7-dist/css/bootstrap.min.css" rel="stylesheet">    
    <link rel="stylesheet" href="https://hosbyte.ir/files/icon/icons-1.11.0/font/bootstrap-icons.min.css">
    <link href="style.css" rel="stylesheet">
    <script src="https://hosbyte.ir/files/bootstrap-5.3.7-dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://hosbyte.ir/files/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <!-- <script src="https://hosbyte.ir/files/chart.js"></script> -->
    <script src="jquery.js"></script>
    <title>mali</title>
  </head>
  <body>
    <!-- // ? navbar -->
    <nav class="navbar navbar-expand-lg navbar-light backg">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">نمودار ها</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">خانه</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="insertentry.php">ثبت دریافتی</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="insertspend.php">ثبت مخارج</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <h1>hello</h1>
    <center>
      <canvas id="myChart" style="width:100%;max-width:700px"></canvas>
    </center>
    <script>
      var xValues = ["پرداخت اقساط", "خرید", "خرید خوراکی", "تفریح"];
      var yValues = [55, 49, 44, 24];
      var barColors = [
        "#00aba9",
        "#ee0b0bff",
        "#08aaf5ff",
        "#e8c3b9"
      ];

      new Chart("myChart", {
        type: "pie",
        data: {
          labels: xValues,
          datasets: [{
            backgroundColor: barColors,
            data: yValues
          }]
        },
        options: {
          title: {
            display: true,
            text: "نمودار میزان مخارج ماه"
          }
        }
      });
    </script>

  </body>
</html>