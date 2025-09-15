
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
    <script src="https://hosbyte.ir/files/Chart.js"></script>
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

    <!-- // ? انتخاب ماه -->
    <center>
      <div class="selectForm">
        <h2>انتخاب ماه مورد نظر</h2>
        <form id="month">
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

    <br>
    <br>

    <!-- // ?  نمودار -->
    <center>
      <canvas id="kharjpie" style="width:100%;max-width:700px"></canvas>
    </center>
   
    <!-- // ? نمودار -->
    <script>
      $(document).ready(function(){
        $("#month").on("submit", function(e){
          e.preventDefault();

          let mounth = $("#monthSelect").val();
          if(mounth === ""){
            alert("لطفاً یک ماه انتخاب کنید");
            return;
          }

          if(window.kharjchart){ window.kharjchart.destroy(); }

          $.ajax({
            url: "getchartdata.php",
            type: "GET",
            data: { month: mounth }, // 👈 دقت کن اسمش month باشه نه mounth
            dataType: "json",
            success: function(response){
              if(response.length === 0){
                alert("هیچ خرجی برای این ماه ثبت نشده!");
                return;
              }

              let labels = response.map(item => item.title);
              let values = response.map(item => item.total);

              let ctx = document.getElementById("kharjpie").getContext("2d");
              window.kharjchart = new Chart(ctx, {
                type: 'pie',
                data: {
                  labels: labels,
                  datasets:[{
                    data: values,
                    backgroundColor: ["#00aba9","#ee0b0b","#08aaf5","#e8c3b9","#c45850"]
                  }]
                },
                options: {
                  plugins: {
                    title: {
                      display: true,
                      text: "نمودار میزان مخارج ماه"
                    }
                  }
                }
              });
            },
            error: function(xhr, status, error){
              console.error(error);
              alert("خطا در دریافت اطلاعات");
            }
          });
        });
      });
    </script>


  </body>
</html>