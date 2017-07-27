<?php
session_start();
$in_ref = $_SESSION["in_ref"];
$money_in = $_SESSION["money_in"];
$bank_name = $_SESSION["bank_name"];
$date_n = $_SESSION["date_n"];
$time_n = $_SESSION["time_n"];
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Confirm Bill | ปิรันพันธุ์กร | ICTSILPAKORN 2017</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap-theme.min.css">
    <script src="vendor/twbs/bootstrap/dist/js/jquery.min.js"></script>
    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Css -->
    <link rel="stylesheet" href="stylesheets/css/style_seat.css">
    <link rel="stylesheet" href="stylesheets/css/style_index.css">
  </head>
  <body>
    <article class="col-xs-12 wrap_top_menu">
      <article class="col-xs-3 wrap_logo">
        <a href="index.php"><img src="image/logo/logo_ict.png" alt="ICTSILPAKORN"></a>
      </article>
      <article class="col-xs-9 wrap_r_top_menu">
      </article>
    </article> <!-- wrap_top_menu -->
    <article class="col-xs-12">
      <article class="col-md-offset-4 col-md-4">
        <h1>ยืนยันสำเร็จ</h1>
        <h3>หมายเลขอ้างอิง : <?php echo $in_ref; ?></h3>
        <p>จำนวนเงิน : <?php echo $money_in; ?></p>
        <p>ธนาคารที่ทำการ : <?php echo $bank_name; ?></p>
        <p>วันที่โอน : <?php echo $date_n; ?></p>
        <p>เวลา : <?php echo $time_n; ?></p>
        <p>*หมายเหตุ : รอการตรวจสอบจากเจ้าหน้าที่</p>
      </article>
      <article class="col-md-offset-4 col-md-4" style="margin-bottom: 30px;">
                <a href="process/success.php"><button style="height: 40px; font-family: 'Kanit', sans-serif;" class="col-xs-12" type="button" name="button">กลับสู่หน้าแรก</button></a>
      </article>
    </article>
  </body>
</html>
