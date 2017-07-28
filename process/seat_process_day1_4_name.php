<?php
session_start();
require '../src/config.php';

if(isset($_POST["name_user_4_"], $_POST["nickname_4_"], $_POST["tel_4_"], $_POST["email_4_"])) {

$user_name = mysqli_real_escape_string($conn, $_POST["name_user_4_"]);
$nickname = mysqli_real_escape_string($conn, $_POST["nickname_4_"]);
$tel = mysqli_real_escape_string($conn, $_POST["tel_4_"]);
$email = mysqli_real_escape_string($conn, $_POST["email_4_"]);

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
mysqli_set_charset($conn, "utf8");
$sql = "INSERT INTO member(member_id, fullname, nickname, tel, email, ref_bill, status_bill, img_bill) VALUES (0, '$user_name', '$nickname', '$tel', '$email', 'none', 0, 'none')";

$query_sql = mysqli_query($conn, $sql);

//Zone A
if(isset($_POST["check_day2_a_a_1_4_"])) {
  $_SESSION["check_day1_a_a_1"] = $_POST["check_day2_a_a_1_4_"];
}
if(isset($_POST["check_day2_a_b_1_4_"])) {
  $_SESSION["check_day1_a_b_1"] = $_POST["check_day2_a_b_1_4_"];
}
if(isset($_POST["check_day2_a_c_1_4_"])) {
  $_SESSION["check_day1_a_c_1"] = $_POST["check_day2_a_c_1_4_"];
}
if(isset($_POST["check_day2_a_d_1_4_"])) {
  $_SESSION["check_day1_a_d_1"] = $_POST["check_day2_a_d_1_4_"];
}
if(isset($_POST["check_day2_a_e_1_4_"])) {
  $_SESSION["check_day1_a_e_1"] = $_POST["check_day2_a_e_1_4_"];
}
if(isset($_POST["check_day2_a_f_1_4_"])) {
  $_SESSION["check_day1_a_f_1"] = $_POST["check_day2_a_f_1_4_"];
}
if(isset($_POST["check_day2_a_g_1_4_"])) {
  $_SESSION["check_day1_a_g_1"] = $_POST["check_day2_a_g_1_4_"];
}
if(isset($_POST["check_day2_a_h_1_4_"])) {
  $_SESSION["check_day1_a_h_1"] = $_POST["check_day2_a_h_1_4_"];
}
if(isset($_POST["check_day2_a_i_1_4_"])) {
  $_SESSION["check_day1_a_i_1"] = $_POST["check_day2_a_i_1_4_"];
}

//Zone B
if(isset($_POST["check_day2_b_a_1_4_"])) {
  $_SESSION["check_day1_b_a_1"] = $_POST["check_day2_b_a_1_4_"];
}
if(isset($_POST["check_day2_b_b_1_4_"])) {
  $_SESSION["check_day1_b_b_1"] = $_POST["check_day2_b_b_1_4_"];
}
if(isset($_POST["check_day2_b_c_1_4_"])) {
  $_SESSION["check_day1_b_c_1"] = $_POST["check_day2_b_c_1_4_"];
}
if(isset($_POST["check_day2_b_d_1_4_"])) {
  $_SESSION["check_day1_b_d_1"] = $_POST["check_day2_b_d_1_4_"];
}
if(isset($_POST["check_day2_b_e_1_4_"])) {
  $_SESSION["check_day1_b_e_1"] = $_POST["check_day2_b_e_1_4_"];
}
if(isset($_POST["check_day2_b_f_1_4_"])) {
  $_SESSION["check_day1_b_f_1"] = $_POST["check_day2_b_f_1_4_"];
}
if(isset($_POST["check_day1_2_g_l_1_4_"])) {
  $_SESSION["check_day1_b_g_l_1"] = $_POST["check_day1_2_g_l_1_4_"];
}
if(isset($_POST["check_day1_2_g_r_1_4_"])) {
  $_SESSION["check_day1_b_g_r_1"] = $_POST["check_day1_2_g_r_1_4_"];
}
if(isset($_POST["check_day1_2_h_l_1_4_"])) {
  $_SESSION["check_day1_b_h_l_1"] = $_POST["check_day1_2_h_l_1_4_"];
}
if(isset($_POST["check_day1_2_h_r_1_4_"])) {
  $_SESSION["check_day1_b_h_r_1"] = $_POST["check_day1_2_h_r_1_4_"];
}

//Zone C
if(isset($_POST["check_day2_c_a_1_4_"])) {
  $_SESSION["check_day1_c_a_1"] = $_POST["check_day2_c_a_1_4_"];
}
if(isset($_POST["check_day2_c_b_1_4_"])) {
  $_SESSION["check_day1_c_b_1"] = $_POST["check_day2_c_b_1_4_"];
}
if(isset($_POST["check_day2_c_c_1_4_"])) {
  $_SESSION["check_day1_c_c_1"] = $_POST["check_day2_c_c_1_4_"];
}
if(isset($_POST["check_day2_c_d_1_4_"])) {
  $_SESSION["check_day1_c_d_1"] = $_POST["check_day2_c_d_1_4_"];
}
if(isset($_POST["check_day2_c_e_1_4_"])) {
  $_SESSION["check_day1_c_e_1"] = $_POST["check_day2_c_e_1_4_"];
}
if(isset($_POST["check_day2_c_f_1_4_"])) {
  $_SESSION["check_day1_c_f_1"] = $_POST["check_day2_c_f_1_4_"];
}
if(isset($_POST["check_day2_c_g_1_4_"])) {
  $_SESSION["check_day1_c_g_1"] = $_POST["check_day2_c_g_1_4_"];
}
if(isset($_POST["check_day2_c_h_1_4_"])) {
  $_SESSION["check_day1_c_h_1"] = $_POST["check_day2_c_h_1_4_"];
}
if(isset($_POST["check_day2_c_i_1_4_"])) {
  $_SESSION["check_day1_c_i_1"] = $_POST["check_day2_c_i_1_4_"];
}

$_SESSION["user_name"] = $user_name;
$_SESSION["nickname"] = $nickname;
$_SESSION["tel"] = $tel;
$_SESSION["email"] = $email;

date_default_timezone_set('Asia/Bangkok');
$times = time();
//Time
$date = date("Y");
$date2 = date("m");
$date3 = date("d");
$time1 = date("G");
$time2 = date("i");
$time3 = date("s");

$ref_name =  $date.$date2.$date3.$time1.$time2.$time3;
$_SESSION["ref_name"] = $ref_name;

mysqli_close($conn);

header('Location: seat_process_day1_4.php');
}
else {
  header('Location: ../error.php');
}

 ?>
