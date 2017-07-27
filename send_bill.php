<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ยืนยันการจ่ายเงิน | ปิรันพันธุ์กร | ICTSILPAKORN 2017</title>
  </head>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap-theme.min.css">
  <script src="vendor/twbs/bootstrap/dist/js/jquery.min.js"></script>
  <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- Css -->
  <link rel="stylesheet" href="stylesheets/css/style_new_index.css">
  <!-- <link rel="stylesheet" href="stylesheets/css/style_index.css"> -->
  <link rel="stylesheet" href="stylesheets/css/style_bill.css">
  <!-- preview image -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript">

  function readURL(input) {

  if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
          $('#pre_img').attr('src', e.target.result);
      }

      reader.readAsDataURL(input.files[0]);
  }
}

$("#pre_img_input").change(function(){
  readURL(this);
});
  </script>
  <body>
    <section class="container-fluid">
      <section class="row">
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
        <article class="col-xs-12">
          <h1 style="font-family: 'Kanit', sans-serif; text-align: center;">แนบหลักฐานการชำระเงิน</h1>
          <form action="process/bill_process.php" method="post" enctype="multipart/form-data">
            <article class="col-md-offset-4 col-md-4 wrap_img">
              <img src="image/bg_img/bg_white_s.png" id="pre_img" style="display: block; margin-left: auto; margin-right: auto;">
              <input type="file" name="img_file" id="pre_img_input" onchange="readURL(this)" style="display: block; margin-left: auto; margin-right: auto; margin-top: 30px;">
              <p class="p_ref">หมายเลขอ้างอิง</p>
              <input class="col-xs-12 in_ref" type="text" name="in_ref" required>
              <p class="p_ref">จำนวนเงินที่โอน</p>
              <input class="col-xs-12 in_ref" type="text" name="money_in" required>
              <p class="p_ref">ธนาคาร</p>
              <!-- <input class="col-xs-12 in_ref" type="text" name="bank_name"> -->
              <select class="col-xs-12 in_ref" name="bank_name">
                <option value="ธนาคารกรุงเทพ">ธนาคารกรุงเทพ</option>
                <option value="ธนาคารกสิกรไทย">ธนาคารกสิกรไทย</option>
                <option value="ธนาคารกรุงไทย">ธนาคารกรุงไทย</option>
                <option value="ธนาคารทหารไทย (TMB)">ธนาคารทหารไทย (TMB)</option>
                <option value="ธนาคารไทยพาณิชย์">ธนาคารไทยพาณิชย์</option>
                <option value="ธนาคารกรุงศรีอยุธยา">ธนาคารกรุงศรีอยุธยา</option>
                <option value="ธนาคารเกียรตินาคิน">ธนาคารเกียรตินาคิน</option>
                <option value="ธนาคารซีไอเอ็มบีไทย">ธนาคารซีไอเอ็มบีไทย</option>
                <option value="ธนาคารทิสโก้">ธนาคารทิสโก้</option>
                <option value="ธนาคารธนชาต">ธนาคารธนชาต</option>
                <option value="ธนาคารยูโอบี">ธนาคารยูโอบี</option>
                <option value="ธนาคารสแตนดาร์ดชาร์เตอร์ด (ไทย)">ธนาคารสแตนดาร์ดชาร์เตอร์ด (ไทย)</option>
                <option value="ธนาคารแลนด์ แอนด์ เฮาส์">ธนาคารแลนด์ แอนด์ เฮาส์</option>
                <option value="ธนาคารเพื่อการเกษตรและสหกรณ์การเกษตร">ธนาคารเพื่อการเกษตรและสหกรณ์การเกษตร</option>
                <option value="ธนาคารออมสิน">ธนาคารออมสิน</option>
                <option value="ธนาคารอาคารสงเคราะห์">ธนาคารอาคารสงเคราะห์</option>
                <option value="ธนาคารอิสลามแห่งประเทศไทย">ธนาคารอิสลามแห่งประเทศไทย</option>
              </select>
              <p class="p_ref">วัน/เดือน/ปี ที่โอน</p>
              <input class="col-xs-12 in_ref" type="date" name="date_n" required>
              <p class="p_ref">เวลา</p>
              <input class="col-xs-12 in_ref" type="text" pattern="([01]?[0-9]{1}|2[0-3]{1}):[0-5]{1}[0-9]{1}" name="time_n" required>

              <button class="col-xs-12 btn_subm" type="submit" name="submit">ยืนยันการซื้อ</button>
            </article>
          </form>
        </article>
      </section><!-- row -->
    </section> <!-- container-fluid -->
  </body>
</html>
