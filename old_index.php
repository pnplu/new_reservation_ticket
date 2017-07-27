<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width= device-width,initial-scale=1">
    <meta charset="utf-8">
    <title>ปิรันพันธุ์กร | ICTSILPAKORN 2017</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap-theme.min.css">
    <script src="vendor/twbs/bootstrap/dist/js/jquery.min.js"></script>
    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Css -->
    <link rel="stylesheet" href="stylesheets/css/style_seat.css">
    <link rel="stylesheet" href="stylesheets/css/style_index.css">
    <!-- js script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/main_index.js"></script>
  </head>
  <body>
    <article class="col-xs-12 wrap_top_menu">
      <article class="col-xs-3 wrap_logo">
        <a href="index.php"><img src="image/logo/logo_ict.png" alt="ICTSILPAKORN"></a>
      </article>
      <article class="col-xs-9 wrap_r_top_menu">
        <a href="send_bill.php"><button type="button" name="button">ยืนยันการจ่ายเงิน</button></a>
      </article>
    </article> <!-- wrap_top_menu -->
    <article class="col-md-6 wrap_btn_round bg_wrap_btn_round">
      <h3>วันเสาร์ 26 สิงหาคม 2560</h3>
      <article class="wrap_in_btn">
        <button id="btn_ticket_1" class="btn" type="button" name="button">11.00 - 12.30</button>
        <button id="btn_ticket_2" class="btn" type="button" name="button">14.30 - 17.00</button>
      </article>
    </article>
    <article class="col-md-6 wrap_btn_round">
      <h3>วันอาทิตย์ 27 สิงหาคม 2560</h3>
      <article class="wrap_in_btn">
        <button id="btn_ticket_3" class="btn" type="button" name="button">11.00 - 12.30</button>
        <button id="btn_ticket_4" class="btn" type="button" name="button">14.30 - 17.00</button>
      </article>
    </article>

    <section class="container-fluid">
      <?php include("ticket_1.php"); ?>
      <?php include("ticket_2.php"); ?>
      <?php include("ticket_3.php"); ?>
      <?php include("ticket_4.php"); ?>
    </section> <!-- container-fluid -->
    <footer>
      <p>Copyright&copy; 2017 Made by ICTSilpakorn</p>
    </footer>

  </body>
</html>
