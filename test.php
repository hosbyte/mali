<?php
include 'db.php';
session_start();

// ? create variable
$query_k = null;
$query_d = null;
$sql_k = null;
$sql_d = null;
$mounth = null;
$database = null;
$row_d = null;
$row_k = null;

// ! mounth select
// if(isset($_GET['mounth']))
// {
//   $mounth = $_GET['mounth'];
//   $_SESSION['mounth'] = $_GET['mounth'];

//   // ! فروردین
//   if($mounth == 'far')
//   {
//     // * kharj
//     $query_k = ("SELECT * FROM `kfar`");
//     $sql_k = mysqli_query($db , $query_k);
//     // * dakhl
//     $query_d = ("SELECT * FROM `dfar`");
//     $sql_d= mysqli_query($db , $query_d);
//   }
//   // ! اردیبهشت
//   else if($mounth == 'ord')
//   {
//     // * kharj
//     $query_k = ("SELECT * FROM `kord`");
//     $sql_k = mysqli_query($db , $query_k);
//     // * dakhl
//     $query_d = ("SELECT * FROM `dord`");
//     $sql_d = mysqli_query($db , $query_d);
//   }
//   // ! خرداد
//   else if($mounth == 'kho')
//   {
//     // * kharj
//     $query_k = ("SELECT * FROM `kkho`");
//     $sql_k = mysqli_query($db , $query_k);
//     // * dakhl
//     $query_d = ("SELECT * FROM `dkho`");
//     $sql_d = mysqli_query($db , $query_d);
//   }
//   // ! تیر
//   else if($mounth == 'tir')
//   {
//     // * kharj
//     $query_k = ("SELECT * FROM `ktir`");
//     $sql_k = mysqli_query($db , $query_k);
//     // * dakhl
//     $query_d = ("SELECT * FROM `dtir`");
//     $sql_d = mysqli_query($db , $query_d);
//   }
//   // ! مرداد
//   else if($mounth == 'mor')
//   {
//     // * kharj
//     $query_k = ("SELECT * FROM `kmor`");
//     $sql_k = mysqli_query($db , $query_k);
//     // * dakhl
//     $query_d = ("SELECT * FROM `dmor`");
//     $sql_d = mysqli_query($db , $query_d);
//   }
//   // ! شهریور
//   else if($mounth == 'sha')
//   {
//     // * kharj
//     $query_k = ("SELECT * FROM `ksha`");
//     $sql_k = mysqli_query($db , $query_k);
//     // * dakhl
//     $query_d = ("SELECT * FROM `dsha`");
//     $sql_d = mysqli_query($db , $query_d);
//   }
//   // ! مهر
//   else if($mounth == 'mehr')
//   {
//     // * kharj
//     $query_k = ("SELECT * FROM `kmehr`");
//     $sql_k = mysqli_query($db , $query_k);
//     // * dakhl
//     $query_d = ("SELECT * FROM `dmehr`");
//     $sql_d = mysqli_query($db , $query_d);
//   }
//   // ! آبان
//   else if($mounth == 'aban')
//   {
//     // * kharj
//     $query_k = ("SELECT * FROM `kaban`");
//     $sql_k = mysqli_query($db , $query_k);
//     // * dakhl
//     $query_d = ("SELECT * FROM `daban`");
//     $sql_d = mysqli_query($db , $query_d);
//   }
//   // ! آذر
//   else if($mounth == 'azar')
//   {
//     // * kharj
//     $query_k = ("SELECT * FROM `kazar`");
//     $sql_k = mysqli_query($db , $query_k);
//     // * dakhl
//     $query_d = ("SELECT * FROM `dazar`");
//     $sql_d = mysqli_query($db , $query_d);
//   }
//   // ! دی
//   else if($mounth == 'dey')
//   {
//     // * kharj
//     $query_k = ("SELECT * FROM `kday`");
//     $sql_k = mysqli_query($db , $query_k);
//     // * dakhl
//     $query_d = ("SELECT * FROM `dday`");
//     $sql_d = mysqli_query($db , $query_d);
//   }
//   // ! بهمن
//   else if($mounth == 'bah')
//   {
//     // * kharj
//     $query_k = ("SELECT * FROM `kbahman`");
//     $sql_k = mysqli_query($db , $query_k);
//     // * dakhl
//     $query_d = ("SELECT * FROM `dbahman`");
//     $sql_d = mysqli_query($db , $query_d);
//   }
//   // ! اسفند
//   else if($mounth == 'esf')
//   {
//     // * kharj
//     $query_k = ("SELECT * FROM `kesfand`");
//     $sql_k = mysqli_query($db , $query_k);
//     // * dakhl
//     $query_d = ("SELECT * FROM `desfand`");
//     $sql_d = mysqli_query($db , $query_d);
//   }

//   echo"1";
//   exit();
//   return;
// }

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
        <a class="navbar-brand" href="#">مدیریت مالی</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">خانه</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="dakhlsave.php">ثبت دخل</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="kharjsave.php">ثبت خرج</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="chart.php">نمودار</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- // FIXME: -->
    <!-- // ?select mounth -->
    <center>
      <div class="selectForm">
        <i class="fas fa-calendar-alt calendar-icon"></i>
        <h2>انتخاب ماه مورد نظر</h2>
        <form id="selectmounth" method="GET">
            <div class="form-group">
              <label for="monthSelect"><i class="fas fa-month"></i> ماه را انتخاب کنید</label>
              <select class="form-control" id="monthSelect" name="mounth">
                <option value="">لطفاً یک ماه انتخاب کنید</option>
                <option value="far">فروردین</option>
                <option value="ord">اردیبهشت</option>
                <option value="kho">خرداد</option>
                <option value="tir">تیر</option>
                <option value="mor">مرداد</option>
                <option value="sha">شهریور</option>
                <option value="mehr">مهر</option>
                <option value="aban">آبان</option>
                <option value="azar">آذر</option>
                <option value="dey">دی</option>
                <option value="bah">بهمن</option>
                <option value="esf">اسفند</option>
              </select>
            </div>
            <button type="submit" class="btn-submit">تأیید و ارسال</button>
        </form>
      </div>
    </center>

    <!-- // FIXME: -->
    <!-- // ? table -->
    <div class="row" style="margin-top: 30px;">
      <!-- // TODO: show data -->
      <!-- جدول خرج -->
      <div class="col-md-6">
        <div class="table-container">
          <h4 class="text-center">خرج</h4>
          <table class="back-color-k table table-striped table-hover">
            <thead class="table-primary">
              <tr>
                <th>ردیف</th>
                <th>عنوان</th>
                <th>مبلغ</th>
                <th>تاریخ</th>
                <th>ساعت</th>
                <th>توضیحات</th>
                <th>نام کارت</th>
              </tr>
            </thead>
            <tbody>
                <php
                  $num = 0;
                  echo"dakhl";
                  while($row_k = mysqli_fetch_assoc($sql_k))
                  {
                    echo"12345";
                    $num++;
                    $title = $row_k['title'];
                    $price = $row_k['price'];
                    $date = $row_k['date'];
                    $time = $row_k['time'];
                    $about = $row_k['about'];
                    $cart = $row_k['cart'];
                    echo "
                      <tr>
                        <td>$num</td>
                        <td>$title</td>
                        <td>$price</td>
                        <td>$date</td>
                        <td>$time</td>
                        <td>$about</td>
                        <td>$cart</td>
                      </tr>
                    ";
                  }
                ?>
            </tbody>
          </table>
        </div>
      </div>
           
      <!-- // FIXME: show data -->
      <!-- جدول دخل -->
      <div class="col-md-6">
        <div class="table-container">
          <h4 class="text-center">دخل</h4>
          <table class="back-color-d table table-striped table-hover">
            <thead class="table-success">
             <tr>
                <th>ردیف</th>
                <th>عنوان</th>
                <th>مبلغ</th>
                <th>تاریخ</th>
                <th>ساعت</th>
                <th>توضیحات</th>
                <th>نام کارت</th>
              </tr>
            </thead>
            <tbody>
              <php
                  $num = 0;
                  echo"kharj";
                  while($row_d = mysqli_fetch_assoc($sql_d))
                  {
                    echo"asdfg";
                    $num++;
                    $title = $row_d['title'];
                    $price = $row_d['price'];
                    $date = $row_d['date'];
                    $time = $row_d['time'];
                    $about = $row_d['about'];
                    $cart = $row_d['cart'];
                    echo "
                      <tr>
                        <td>$num</td>
                        <td>$title</td>
                        <td>$price</td>
                        <td>$date</td>
                        <td>$time</td>
                        <td>$about</td>
                        <td>$cart</td>
                      </tr>
                    ";
                  }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>