// ! jquery test
$(document).ready(function () {
  console.log("jQuery loaded"); 
});

// ! انتخاب ماه صفحه خانه
$(document).ready(function(){
  $("#selectmounth").on("submit", function(e){
    e.preventDefault(); // جلوگیری از رفرش شدن صفحه

    let mounth = $("#monthSelect").val();
    if(mounth === ""){
      alert("لطفاً یک ماه انتخاب کنید");
      return;
    }

    $.ajax({
      url: "getData.php",
      type: "GET",
      data: { mounth: mounth },
      dataType: "json", // می‌گیم که انتظار JSON داریم
      success: function(response){
        // پاک کردن قبلی‌ها
        $(".back-color-k tbody").empty();
        $(".back-color-d tbody").empty();
        $(".back-color-k tfoot").empty();
        $(".back-color-d tfoot").empty();

        // خرج
        let num = 0;
        response.kharj.forEach(function(item){
          num++;
          $(".back-color-k tbody").append(`
            <tr>
              <td>${num}</td>
              <td>${item.title}</td>
              <td>${item.price}</td>
              <td>${item.date}</td>
              <td>${item.time}</td>
              <td>${item.about}</td>
              <td>${item.cart}</td>
            </tr>
          `);
        });
        $("#sum-k").text(`مجموع خرج: ${response.kharj_sum} تومان`);

        // دخل
        num = 0;
        response.dakhl.forEach(function(item){
          num++;
          $(".back-color-d tbody").append(`
            <tr>
              <td>${num}</td>
              <td>${item.title}</td>
              <td>${item.price}</td>
              <td>${item.date}</td>
              <td>${item.time}</td>
              <td>${item.about}</td>
              <td>${item.cart}</td>
            </tr>
          `);
        });
        $("#sum-d").text(`مجموع دخل: ${response.dakhl_sum} تومان`);
      },

      error: function(xhr, status, error){
        console.error(error);
        alert("خطا در دریافت اطلاعات");
      }
    });
  });
});

// ! ثبت اطلاعات صفحه مخارج
$(document).ready(function(){
  $("#spend").on("submit", function(e){
    e.preventDefault(); // جلوگیری از رفرش شدن صفحه

    let mounth = $("#monthSelect").val();
    let title = $("#titleselect").val();
    let about = $("#about").val();
    let price = $("#price").val();
    let date = $("#date").val();
    let time = $("#time").val();
    let cart = $("#cartselect").val();
    if(mounth === ""){
      alert("لطفاً یک ماه انتخاب کنید");
      return;
    }

    $.ajax({
      url: "insertspend.php",
      type: "GET",
      data: { 
        mounth: mounth,
        title : title,
        about : about,
        price : price,
        date : date,
        time : time,
        cart : cart 
      },
      success: function(response){
        response = response.trim();
        console.log(response);
        if(response == '1')
        {
          $("#spend")[0].reset();
        }
        else
        {
          alert("داده ذخیره نشد");
        }
      },
      error : function(){
        alert("به دیتابیس وصل نشد");
      }   
    });
  });
});

// ! ثبت اطلاعات صفحه دریافتی
$(document).ready(function(){
  $("#entry").on("submit", function(e){
    e.preventDefault(); // جلوگیری از رفرش شدن صفحه

    let mounth = $("#monthSelect").val();
    let title = $("#titleselect").val();
    let about = $("#about").val();
    let price = $("#price").val();
    let date = $("#date").val();
    let time = $("#time").val();
    let cart = $("#cartselect").val();
    if(mounth === ""){
      alert("لطفاً یک ماه انتخاب کنید");
      return;
    }

    $.ajax({
      url: "insertentry.php",
      type: "GET",
      data: { 
        mounth: mounth,
        title : title,
        about : about,
        price : price,
        date : date,
        time : time,
        cart : cart 
      },
      success: function(response){
        response = response.trim();
        console.log(response);
        if(response == '1')
        {
          $("#entry")[0].reset();
        }
        else
        {
          alert("داده ذخیره نشد");
        }
      },
      error : function(){
        alert("به دیتابیس وصل نشد");
      }   
    });
  });
});

// // ! انتخاب ماه برای نمودار 
// $(document).ready(function(){
//   $("#month").on("submit", function(e){
//     e.preventDefault(); // جلوگیری از رفرش شدن صفحه

//     let mounth = $("#monthSelect").val();
//     if(mounth === ""){
//       alert("لطفاً یک ماه انتخاب کنید");
//       return;
//     }

//     let kharjchart;
//     $.ajax({
//       url: "getchartdata.php",
//       type: "GET",
//       data: { mounth: mounth },
//       dataType: "json", // می‌گیم که انتظار JSON داریم
//       success: function(response){
//         if(response.length === 0){
//         alert("هیچ خرجی برای این ماه ثبت نشده!");
//         return;
//         }

//         let lables = response.map(item => item.title);
//         let values = response.map(item => item.total);

//       },

//       error: function(xhr, status, error){
//         console.error(error);
//         alert("خطا در دریافت اطلاعات");
//       }
//     });
//   });
// });