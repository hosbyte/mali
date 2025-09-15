<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://hosbyte.ir/files/bootstrap-5.3.7-dist/css/bootstrap.min.css" rel="stylesheet">    
  <link rel="stylesheet" href="https://hosbyte.ir/files/icon/icons-1.11.0/font/bootstrap-icons.min.css">
  <link href="style.css" rel="stylesheet">
  <script src="https://hosbyte.ir/files/bootstrap-5.3.7-dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://hosbyte.ir/files/jquery-3.7.1.min.js"></script>
  <script src="jquery.js"></script>
  <title>مدیریت مالی</title>
</head>
<body>
  <!-- // ? navbar -->
  <nav class="navbar navbar-expand-lg navbar-light shadow-sm backg">
    <div class="container-fluid">
      <a class="navbar-brand fw-bold" href="#">مدیریت مالی</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto text-end">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">خانه</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="insertentry.php">ثبت دخل</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="insertspend.php">ثبت مخارج</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="chart.php">نمودار</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>



  <!-- // ? انتخاب ماه -->
  <center>
    <div class="selectForm">
      <h2>انتخاب ماه مورد نظر</h2>
      <form id="selectmounth">
        <div class="form-group">
          <label for="monthSelect">ماه را انتخاب کنید</label>
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

  <!-- // ? جدول‌ها -->
  <div class="row" style="margin-top: 30px;">
    <!-- // ? خرج -->
    <div class="col-12 col-lg-6 mb-4">
      <div class="table-container">
        <h4 class="text-center">خرج</h4>
        <div class="table-responsive">
          <table class="back-color-k table-size table table-striped table-hover">
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
            <tbody></tbody>
          </table>
        </div>
        <div class="text-end fw-bold mt-2" id="sum-k">جمع خرج: 0 تومان</div>
      </div>
    </div>

    <!-- // ? دخل -->
    <div class="col-12 col-lg-6 mb-4">
      <div class="table-container">
        <h4 class="text-center">دخل</h4>
        <div class="table-responsive">
          <table class="back-color-d table-size table table-striped table-hover">
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
            <tbody></tbody>
          </table>
        </div>
        <div class="text-end fw-bold mt-2" id="sum-d">جمع دخل: 0 تومان</div>
      </div>
    </div>
  </div>

</body>
</html>
