<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width= device-width,initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/css;">
    <title>ปิรันพันธุ์กร | ICTSILPAKORN 2017</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap-theme.min.css">
    <script src="vendor/twbs/bootstrap/dist/js/jquery.min.js"></script>
    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="stylesheets/css/style_new_index.css">
    <link rel="stylesheet" href="stylesheets/css/style_seat.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Kanit:200,400,600" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/fontawesome-webfont.ttf">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/fontawesome-webfont.svg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/fontawesome-webfont.woff">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/fontawesome-webfont.woff2">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/fontawesome-webfont.eot">
    <!-- JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- <script src="js/main_index.js"></script> -->
    <script type="text/javascript">
      $(document).ready(function() {
        $("#reserved_seat").click(function() {
          if($('input:checkbox:checked').length <= 0) {
            alert("ท่านยังไม่ได้เลือกที่นั่ง");
            return false;
          }
        });
      });
    </script>

  </head>
  <body>
    <section class="container-fluid">
      <section class="row">
        <header class="col-xs-12 wrap_header">
          <article class="col-xs-4">
            <a href="index.php"><img src="image/logo/logo_ict.png" alt="ICTSILPAKORN"></a>
          </article>
          <article class="col-xs-8">
            <a href="send_bill.php"><button type="button" class="btn btn_post_bill" name="button">แจ้งชำระเงิน</button></a>
          </article>
        </header>
      </section> <!-- row wrap_header -->
      <section class="row">
        <article class="col-xs-12 wrap_head_round">
          <h4>เลือกรอบการแสดง</h4>
        </article>
      </section> <!-- row wrap_head_round -->
      <section class="row">
        <article class="col-xs-12 wrap_btn_round">
          <article class="col-xs-12 col-sm-6 wrap_btn_l">
            <article class="col-xs-12">
              <h3>วันเสาร์ 26 สิงหาคม 2560</h3>
            </article>
            <a href="index.php?stage=stage_1"><button class="btn col-xs-12 col-sm-offset-1 col-sm-4 <?php if($_GET["stage"] === "stage_1" || basename($_SERVER[REQUEST_URI]) === "index.php") { echo "btn_active"; } ?>" type="button" name="button">11.00 - 12.30</button></a>
            <a href="index.php?stage=stage_2"><button class="btn col-xs-12 col-sm-offset-1 col-sm-4 <?php if($_GET["stage"] === "stage_2") { echo "btn_active"; } ?>" type="button" name="button">14.30 - 17.00</button></a>
          </article>
          <article class="col-xs-12 col-sm-6 wrap_btn_l wrap_btn_l_black">
            <article class="col-xs-12">
              <h3>วันอาทิตย์ 27 สิงหาคม 2560</h3>
            </article>
            <a href="index.php?stage=stage_3"><button class="btn col-xs-12 col-sm-offset-1 col-sm-4 <?php if($_GET["stage"] === "stage_3") { echo "btn_active"; } ?>" type="button" name="button">11.00 - 12.30</button></a>
            <a href="index.php?stage=stage_4"><button class="btn col-xs-12 col-sm-offset-1 col-sm-4 <?php if($_GET["stage"] === "stage_4") { echo "btn_active"; } ?>" type="button" name="button">14.30 - 17.00</button></a>
          </article>
        </article>
      </section> <!-- row wrap_btn_round -->
      <section class="row">
        <article class="col-xs-12 wrap_sec_seat">
          <?php
          if(isset($_GET["stage"])) {
            if($_GET["stage"] === "stage_1") {
              include("new_ticket1.php");
            }
            if($_GET["stage"] === "stage_2") {
              include("new_ticket2.php");
            }
            if($_GET["stage"] === "stage_3") {
              include("new_ticket3.php");
            }
            if($_GET["stage"] === "stage_4") {
              include("new_ticket4.php");
            }
          }
          else {
            include("new_ticket1.php");
          }
           ?>
        </article>
      </section> <!-- row wrap_sec_seat -->
      <section class="row" style="margin: 0px;">
        <article class="col-xs-12 wrap_descript_etc">
          <article class="col-md-offset-3 col-md-6">
            <article class="col-xs-12">
              <h3>สอบถามข้อมูลเพิ่มเติม</h3>
              <p>
                สถานที่การแสดง
              </p>
              <p>
                "ห้องประชุม ดร.ถาวร พรประภา ออดิทอเรียม ชั้น 5 อาคารสยามกลการ ปทุมวัน"
              </p>
              <p>
                ติดต่อสอบถามเพิ่มเติมที่เบอร์ 093-3292370 (มิ้นโตะ เจ้าหน้าที่ฝ่ายสำรองที่นั่ง)
              </p>
              <p>
                หรือ
              </p>
              <p>
                 <a href="https://www.facebook.com/lakorn.ictsilpakorn/"><i class="fa fa-facebook-f"></i>  ละครไอซีที ศิลปากร </a>
              </p>
            </article>
          </article>
        </article>
      </section>
      <footer>
        <p>Copyright&copy; 2017 Made by ICTSilpakorn</p>
      </footer>
    </section> <!-- container-fluid -->
  </body>
</html>
