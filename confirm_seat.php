<?php
session_start();
require 'src/config.php';
require 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
mysqli_set_charset($conn, "utf8");

$member_id = $_SESSION["member_id"];
$ref_id = $_SESSION["ref_id"];
$user_name = $_SESSION["user_name"];
$nick_name = $_SESSION["nickname"];
$tel = $_SESSION["tel"];
$email = $_SESSION["email"];
$stage = $_SESSION["stage"];

if($stage === 'STAGE 1') {
  $round = "วันเสาร์ 26 สิงหาคม 2560 รอบ 11.30 - 12.30";
}
if($stage === 'STAGE 2') {
  $round = "วันเสาร์ 26 สิงหาคม 2560 รอบ 14.30 - 17.00";
}
if($stage === 'STAGE 3') {
  $round = "วันอาทิตย์ 27 สิงหาคม 2560 รอบ 11.30 - 12.30";
}
if($stage === 'STAGE 4') {
  $round = "วันอาทิตย์ 27 สิงหาคม 2560 รอบ 14.30 - 17.00";
}

$sql = "SELECT * FROM member INNER JOIN day1_zone_a ON day1_zone_a.member_id_one_day1_zone_a = member.member_id OR day1_zone_a.member_id_two_day1_zone_a = member.member_id INNER JOIN day1_zone_b ON day1_zone_b.member_id_one_day1_zone_b = member.member_id OR day1_zone_b.member_id_two_day1_zone_b = member.member_id INNER JOIN day1_zone_c ON day1_zone_c.member_id_one_day1_zone_c = member.member_id OR day1_zone_c.member_id_two_day1_zone_c = member.member_id INNER JOIN day2_zone_a ON day2_zone_a.member_id_one_day2_zone_a = member.member_id OR day2_zone_a.member_id_two_day2_zone_a = member.member_id INNER JOIN day2_zone_b ON day2_zone_b.member_id_one_day2_zone_b = member.member_id OR day2_zone_b.member_id_two_day2_zone_b = member.member_id INNER JOIN day2_zone_c ON day2_zone_c.member_id_one_day2_zone_c = member.member_id OR day2_zone_c.member_id_two_day2_zone_c = member.member_id WHERE member_id = $member_id";
// $query_sql = mysqli_query($conn, $sql);

$sql_find_chair_day1_a_1 = "SELECT * FROM day1_zone_a WHERE day1_zone_a_ref_bill1 = $ref_id";
$sql_find_chair_day1_b_1 = "SELECT * FROM day1_zone_b WHERE day1_zone_b_ref_bill1 = $ref_id";
$sql_find_chair_day1_c_1 = "SELECT * FROM day1_zone_c WHERE day1_zone_c_ref_bill1 = $ref_id";
$sql_find_chair_day1_a_2 = "SELECT * FROM day1_zone_a WHERE day1_zone_a_ref_bill2 = $ref_id";
$sql_find_chair_day1_b_2 = "SELECT * FROM day1_zone_b WHERE day1_zone_b_ref_bill2 = $ref_id";
$sql_find_chair_day1_c_2 = "SELECT * FROM day1_zone_c WHERE day1_zone_c_ref_bill2 = $ref_id";
// day 2
$sql_find_chair_day2_a_1 = "SELECT * FROM day2_zone_a WHERE day2_zone_a_ref_bill1 = $ref_id";
$sql_find_chair_day2_b_1 = "SELECT * FROM day2_zone_b WHERE day2_zone_b_ref_bill1 = $ref_id";
$sql_find_chair_day2_c_1 = "SELECT * FROM day2_zone_c WHERE day2_zone_c_ref_bill1 = $ref_id";
$sql_find_chair_day2_a_2 = "SELECT * FROM day2_zone_a WHERE day2_zone_a_ref_bill2 = $ref_id";
$sql_find_chair_day2_b_2 = "SELECT * FROM day2_zone_b WHERE day2_zone_b_ref_bill2 = $ref_id";
$sql_find_chair_day2_c_2 = "SELECT * FROM day2_zone_c WHERE day2_zone_c_ref_bill2 = $ref_id";

$query_sql_find_chair_day1_a_1 = mysqli_query($conn, $sql_find_chair_day1_a_1);
$query_sql_find_chair_day1_b_1 = mysqli_query($conn, $sql_find_chair_day1_b_1);
$query_sql_find_chair_day1_c_1 = mysqli_query($conn, $sql_find_chair_day1_c_1);
$query_sql_find_chair_day1_a_2 = mysqli_query($conn, $sql_find_chair_day1_a_2);
$query_sql_find_chair_day1_b_2 = mysqli_query($conn, $sql_find_chair_day1_b_2);
$query_sql_find_chair_day1_c_2 = mysqli_query($conn, $sql_find_chair_day1_c_2);

$query_sql_find_chair_day2_a_1 = mysqli_query($conn, $sql_find_chair_day2_a_1);
$query_sql_find_chair_day2_b_1 = mysqli_query($conn, $sql_find_chair_day2_b_1);
$query_sql_find_chair_day2_c_1 = mysqli_query($conn, $sql_find_chair_day2_c_1);
$query_sql_find_chair_day2_a_2 = mysqli_query($conn, $sql_find_chair_day2_a_2);
$query_sql_find_chair_day2_b_2 = mysqli_query($conn, $sql_find_chair_day2_b_2);
$query_sql_find_chair_day2_c_2 = mysqli_query($conn, $sql_find_chair_day2_c_2);

$data_seat = array();
$count = 0;
$price = 0;
$seat = "";

foreach ($query_sql_find_chair_day1_a_1 as $key => $value) {
  $seat_position = $value["seat_day1_zone_a"].$value["seat_number_day1_zone_a"];
  array_push($data_seat, $seat_position);
}
foreach ($query_sql_find_chair_day1_b_1 as $key => $value) {
  $seat_position = $value["seat_day1_zone_b"].$value["seat_number_day1_zone_b"];
  array_push($data_seat, $seat_position);
}
foreach ($query_sql_find_chair_day1_c_1 as $key => $value) {
  $seat_position = $value["seat_day1_zone_c"].$value["seat_number_day1_zone_c"];
  array_push($data_seat, $seat_position);
}
foreach ($query_sql_find_chair_day1_a_2 as $key => $value) {
  $seat_position = $value["seat_day1_zone_a"].$value["seat_number_day1_zone_a"];
  array_push($data_seat, $seat_position);
}
foreach ($query_sql_find_chair_day1_b_2 as $key => $value) {
  $seat_position = $value["seat_day1_zone_b"].$value["seat_number_day1_zone_b"];
  array_push($data_seat, $seat_position);
}
foreach ($query_sql_find_chair_day1_c_2 as $key => $value) {
  $seat_position = $value["seat_day1_zone_c"].$value["seat_number_day1_zone_c"];
  array_push($data_seat, $seat_position);
}

foreach ($query_sql_find_chair_day2_a_1 as $key => $value) {
  $seat_position = $value["seat_day2_zone_a"].$value["seat_number_day2_zone_a"];
  array_push($data_seat, $seat_position);
}
foreach ($query_sql_find_chair_day2_b_1 as $key => $value) {
  $seat_position = $value["seat_day2_zone_b"].$value["seat_number_day2_zone_b"];
  array_push($data_seat, $seat_position);
}
foreach ($query_sql_find_chair_day2_c_1 as $key => $value) {
  $seat_position = $value["seat_day2_zone_c"].$value["seat_number_day2_zone_c"];
  array_push($data_seat, $seat_position);
}
foreach ($query_sql_find_chair_day2_a_2 as $key => $value) {
  $seat_position = $value["seat_day2_zone_a"].$value["seat_number_day2_zone_a"];
  array_push($data_seat, $seat_position);
}
foreach ($query_sql_find_chair_day2_b_2 as $key => $value) {
  $seat_position = $value["seat_day2_zone_b"].$value["seat_number_day2_zone_b"];
  array_push($data_seat, $seat_position);
}
foreach ($query_sql_find_chair_day2_c_2 as $key => $value) {
  $seat_position = $value["seat_day2_zone_c"].$value["seat_number_day2_zone_c"];
  array_push($data_seat, $seat_position);
}

foreach ($data_seat as $key => $value) {
  $count ++;
}

$new_date = new DateTime();
$new_date->format('d-m-Y');

$date = new DateTime();
$date->setDate(2017, 7, 31);
$date->format('d-m-Y');
if($date >= $new_date){
  $price = $count * 250;
}
if($date < $new_date){
  $price = $count * 300;
}
foreach ($data_seat as $key => $value) {
  $seat .=  $value." ";
}


//send email
$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'ictsilpakorn.lakorn2017@gmail.com';                 // SMTP username
$mail->Password = 'Ictsulakorn2017#';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;
$mail->CharSet = 'UTF-8';                                // TCP port to connect to

$mail->setFrom('ictsilpakorn.lakorn2017@gmail.com', 'ICTSILPAKORN LAKORN');
$mail->addAddress($email);     // Add a recipient

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = '[ICTSILPAKORN 2017 ปิรันพันธุ์กร] แจ้งผลการสำรองที่นั่ง';
// $mail->Body    = 'หมายเลขอ้างอิง : '.$ref_id.'<br>ที่นั่ง : '.$seat.'<br>รอบ : '.$round.'<br>ราคา: '. $price .'<br>ข้อมูลติดต่อเพิ่มเติม :ที่เบอร์ 093-3292370 (มิ้นโตะ)<br>ขอบคุณค่ะ';
$mail->Body = 'เรียนคุณ'.$user_name.'<br> หมายเลขโทรศัพท์ '.$tel.'<br><br> ตามที่คุณหรือผู้ใช้อีเมล์ของคุณได้ทำการสำรองที่นั่งสำหรับการแสดงละครเวที เรื่อง ปิรันพันธุ์กร โดยคณะเทคโนโลยีสารสนเทศและการสื่อสาร มหาวิทยาลัยศิลปากร มีรายละเอียดดังนี้<br><br> ที่นั่ง '.$seat.'<br>รอบการแสดง '.$round.'<br>สถานที่แสดง ห้องประชุม ดร.ถาวร พรประภา ออดิทอเรียม ชั้น 5 อาคารสยามกลการ ปทุมวัน<br><br> หมายเลขอ้างอิง '.$ref_id.'<br>จำนวนเงินรวม '.$price.'<br>โดยหลังจากชำระเงินแล้ว กรุณาเก็บหลักฐานการโอนเงินไว้ และทำการยืนยันการชำระเงินที่นี่ (https://www.ictsilpakorn.com/lakorn/booking/send_bill.php) โดยแนบภาพหลักฐานการโอนเงิน กรอกหมายเลขอ้างอิงให้ถูกต้อง รวมทั้งรายละเอียดการโอนเงิน ทั้งนี้เพื่อความสะดวกรวดเร็วในการตรวจสอบการชำระเงินของท่าน<br><br>หากท่านทำการยืนยันการชำระเงินแล้ว ทางทีมงานจะทำการตรวจสอบการชำระเงินภายในสองวัน เพื่อยืนยันผลการสำรองที่นั่งผ่านทางอีเมล์อีกครั้ง<br><br>ทางนักแสดงและทีมงาน ปิรันพันธุ์กร ขอขอบคุณที่ให้ความสนใจในการแสดงละครเวทีครั้งนี้<br>หากท่านมีข้อสงสัยหรือได้รับปัญหาในการสำรองที่นั่ง<br>สามารถติดต่อได้ที่ เจ้าหน้าที่ฝ่ายสำรองที่นั่ง โทรศัพท์ 093-3292370 (มิ้นโตะ)';
$mail->AltBody = 'หมายเลขอ้างอิง : $ref_id ข้อมูลติดต่อเพิ่มเติม :ที่เบอร์ 093-3292370 (มิ้นโตะ) ขอบคุณค่ะ';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Confirm | ปิรันพันธุ์กร | ICTSILPAKORN 2017</title>
  </head>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap-theme.min.css">
  <script src="vendor/twbs/bootstrap/dist/js/jquery.min.js"></script>
  <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- Css -->
  <link rel="stylesheet" href="stylesheets/css/style_index.css">
  <body>
    <article class="col-xs-12 wrap_top_menu">
      <article class="col-xs-3 wrap_logo">
        <a href="process/success.php"><img src="image/logo/logo_ict.png" alt="ICTSILPAKORN"></a>
      </article>
      <article class="col-xs-9 wrap_r_top_menu">

      </article>
      <article class="col-xs-12" style="margin-top: 30px;">
        <article class="col-md-offset-4 col-md-4">
          <h1 style="font-family: 'Kanit', sans-serif; text-align: center;">จองที่นั่งสำเร็จ</h1>
          <h2>หมายเลขอ้างอิง : <?php echo $ref_id; ?></h2>
          <p style="color: red;">*หมายเหตุ : กรุณาจดหมายเลขอ้างอิงนี้ไว้สำหรับการแจ้งชำระเงิน</p>
          <h3>รอบ : <?php echo $round; ?></h3>
          <p>ที่นั่ง : <?php echo $seat; ?></p>
          <p>ชื่อ : <?php echo $user_name; ?></p>
          <p>ชื่อเล่น : <?php echo $nick_name; ?></p>
          <p>ชื่อเบอร์โทรศัพท์ : <?php echo $tel; ?></p>
          <p>Email : <?php echo $email; ?></p>
        </article>
      </article>
      <article class="col-xs-12 wrap_bank_sec">
        <article class="col-md-offset-4 col-md-4">
          <h2 style="text-align: center; font-family: 'Kanit', sans-serif;">ชำระเงินได้ที่</h2>
          <h3>ธนาคารไทยพาณิชย์</h3>
          <h4>สาขา : สยามพารากอน</h4>
          <h4>ชื่อบัญชี : น.ส.ชิชญุ เสรีสิริรักษ์ หรือ น.ส.จารุกุล สงวนไทร </h4>
          <h4>หมายเลขบัญชี : 218-259290-9</h4>
          <p>**กรุณาชำระเงินภายใน 2 วันหลังจากวันสมัคร</p>
          <p>ราคาบัตรรวมทั้งสิ้น : <?php echo $price; ?> BATH</p>
        </article>
      </article>
      <article class="col-md-offset-4 col-md-4" style="margin-bottom: 30px;">
                <a href="process/to_bill.php"><button style="height: 40px; font-family: 'Kanit', sans-serif;" class="col-xs-12" type="button" name="button">แจ้งชำระเงิน</button></a>
      </article>
    </article> <!-- wrap_top_menu -->
  </body>
</html>
