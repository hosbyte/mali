<?php
include 'db.php';
session_start();

// ? insert spend
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['mounth']))
{
  $mounth = $_GET['mounth'];
  $title = $_GET['title'];
  $about = $_GET['about'];
  $price = $_GET['price'];
  $date = $_GET['date'];
  $time = $_GET['time'];
  $cart = $_GET['cart'];

  $query = ("INSERT INTO `$mounth` (`title`,`price`,`date`,`time`,`about`,`cart`) 
    VALUES ('$title' , '$price' , '$date' , '$time' , '$about' ,'$cart')");
  $sql = mysqli_query($db , $query);

  echo"1";
  exit();
  return;
}

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
    <script src="jquery.js"></script>
    <title>mali</title>
  </head>
  <body>
    <!-- // ? navbar -->
    <nav class="navbar navbar-expand-lg navbar-light backg">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">ثبت مخارج</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">خانه</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="insertentry.php">ثبت دخل</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="chart.php">نمودار</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- // ? فرم دریافت داده ها -->
    <center>
      <div class="selectForm">
        <h3>ثبت داده ها</h3>
        <form id="spend" method="get">
          <div class="form-group">
            <label for="monthSelect">ماه را انتخاب کنید</label>
            <select class="form-control" id="monthSelect" name="mounth">
              <option value="">لطفاً یک ماه انتخاب کنید</option>
              <option value="kfar">فروردین</option>
              <option value="kord">اردیبهشت</option>
              <option value="kkho">خرداد</option>
              <option value="ktir">تیر</option>
              <option value="kmor">مرداد</option>
              <option value="ksha">شهریور</option>
              <option value="kmehr">مهر</option>
              <option value="kaban">آبان</option>
              <option value="kazar">آذر</option>
              <option value="kday">دی</option>
              <option value="kbahman">بهمن</option>
              <option value="kesfand">اسفند</option>
            </select>
            <label for="titleselect">عنوان</label>
            <select id="titleselect" class="form-control">
              <option value="">یکی را انتخاب کنید</option>
              <option value="پرداخت اقساط">پرداخت اقساط</option>
              <option value="خرید اقلام ضروری">خرید اقلام ضروری</option>
              <option value="خرید اقلام غیر ضروری">خرید اقلام غیر ضروری</option>
              <option value="خرید خوراکی">خرید خوراکی</option>
              <option value="تفریح">تفریح</option>
            </select>
            <label for="about">توضیحات</label>
            <input id="about" class="input">
            <label for="price">مبلغ</label>
            <input id="price" class="input">
            <label for="date">تاریخ</label>
            <input id="date" class="input">
            <label for="time">ساعت</label>
            <input id="time" class="input">
            <!-- // ? انتخاب کارت -->
            <label for="cartselect">انتخاب کارت</label>
            <select id="cartselect" class="form-control">
              <option value="">یکی را انتخاب کنید</option>
              <option value="بلو">بلو</option>
              <option value="ملی">ملی</option>
              <option value="تجارت">تجارت</option>
              <option value="رسالت">رسالت</option>
              <option value="نقدی">نقدی</option>
            </select>
          </div>
          <button type="submit" class="btn-submit">ثبت</button>
        </form>
      </div>
    </center>

    <!-- // ? empty div -->
    <div style="height: 30px;"></div>

  </body>
</html>