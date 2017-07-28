<?php
session_start();
require '../src/config.php';
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
mysqli_set_charset($conn, "utf8");

"STAGE 2";
$user_name = $_SESSION["user_name"];
$nick_name = $_SESSION["nickname"];
$tel = $_SESSION["tel"];
$email = $_SESSION["email"];
$ref_name = $_SESSION["ref_name"];

$sql_find_user = "SELECT member.member_id FROM member WHERE member.email = '$email' AND member.tel = '$tel' ";
$query_user = mysqli_query($conn, $sql_find_user);

while($rows = mysqli_fetch_assoc($query_user)) {
  $member_id = $rows["member_id"];
}

$ref_true = $ref_name.$member_id;

//Zone A
if(isset($_SESSION["check_day1_a_a_1"])) {
  $check_day1_a_a_1 = $_SESSION["check_day1_a_a_1"];
  foreach ($check_day1_a_a_1 as $key => $value) {
    $val_seat = substr($value, 1);
    $update_sql = "UPDATE day1_zone_a SET member_id_two_day1_zone_a = $member_id, datetime_two_day1_zone_a = NOW(), status_two_day1_zone_a = 1, day1_zone_a_ref_bill2 = '$ref_true' WHERE seat_day1_zone_a = 'A' AND seat_number_day1_zone_a = $val_seat";
    $val_seat_posi = $value;
    echo $update_sql."<br>";
    $query_up = mysqli_query($conn, $update_sql);
  }
}
if(isset($_SESSION["check_day1_a_b_1"])) {
  $check_day1_a_b_1 = $_SESSION["check_day1_a_b_1"];
  foreach ($check_day1_a_b_1 as $key => $value) {
    $val_seat = substr($value, 1);
    $update_sql = "UPDATE day1_zone_a SET member_id_two_day1_zone_a = $member_id, datetime_two_day1_zone_a = NOW(), status_two_day1_zone_a = 1, day1_zone_a_ref_bill2 = '$ref_true' WHERE seat_day1_zone_a = 'B' AND seat_number_day1_zone_a = $val_seat";
    $val_seat_posi = $value;
    echo $update_sql."<br>";
    $query_up = mysqli_query($conn, $update_sql);
  }
}
if(isset($_SESSION["check_day1_a_c_1"])) {
  $check_day1_a_c_1 = $_SESSION["check_day1_a_c_1"];
  foreach ($check_day1_a_c_1 as $key => $value) {
    $val_seat = substr($value, 1);
    $update_sql = "UPDATE day1_zone_a SET member_id_two_day1_zone_a = $member_id, datetime_two_day1_zone_a = NOW(), status_two_day1_zone_a = 1, day1_zone_a_ref_bill2 = '$ref_true' WHERE seat_day1_zone_a = 'C' AND seat_number_day1_zone_a = $val_seat";
    $val_seat_posi = $value;
    echo $update_sql."<br>";
    $query_up = mysqli_query($conn, $update_sql);
  }
}
if(isset($_SESSION["check_day1_a_d_1"])) {
  $check_day1_a_d_1 = $_SESSION["check_day1_a_d_1"];
  foreach ($check_day1_a_d_1 as $key => $value) {
    $val_seat = substr($value, 1);
    $update_sql = "UPDATE day1_zone_a SET member_id_two_day1_zone_a = $member_id, datetime_two_day1_zone_a = NOW(), status_two_day1_zone_a = 1, day1_zone_a_ref_bill2 = '$ref_true' WHERE seat_day1_zone_a = 'D' AND seat_number_day1_zone_a = $val_seat";
    $val_seat_posi = $value;
    echo $update_sql."<br>";
    $query_up = mysqli_query($conn, $update_sql);
  }
}
if(isset($_SESSION["check_day1_a_e_1"])) {
  $check_day1_a_e_1 = $_SESSION["check_day1_a_e_1"];
  foreach ($check_day1_a_e_1 as $key => $value) {
    $val_seat = substr($value, 1);
    $update_sql = "UPDATE day1_zone_a SET member_id_two_day1_zone_a = $member_id, datetime_two_day1_zone_a = NOW(), status_two_day1_zone_a = 1, day1_zone_a_ref_bill2 = '$ref_true' WHERE seat_day1_zone_a = 'E' AND seat_number_day1_zone_a = $val_seat";
    $val_seat_posi = $value;
    echo $update_sql."<br>";
    $query_up = mysqli_query($conn, $update_sql);
  }
}
if(isset($_SESSION["check_day1_a_f_1"])) {
  $check_day1_a_f_1 = $_SESSION["check_day1_a_f_1"];
  foreach ($check_day1_a_f_1 as $key => $value) {
    $val_seat = substr($value, 1);
    $update_sql = "UPDATE day1_zone_a SET member_id_two_day1_zone_a = $member_id, datetime_two_day1_zone_a = NOW(), status_two_day1_zone_a = 1, day1_zone_a_ref_bill2 = '$ref_true' WHERE seat_day1_zone_a = 'F' AND seat_number_day1_zone_a = $val_seat";
    $val_seat_posi = $value;
    echo $update_sql."<br>";
    $query_up = mysqli_query($conn, $update_sql);
  }
}
if(isset($_SESSION["check_day1_a_g_1"])) {
  $check_day1_a_g_1 = $_SESSION["check_day1_a_g_1"];
  foreach ($check_day1_a_g_1 as $key => $value) {
    $val_seat = substr($value, 1);
    $update_sql = "UPDATE day1_zone_a SET member_id_two_day1_zone_a = $member_id, datetime_two_day1_zone_a = NOW(), status_two_day1_zone_a = 1, day1_zone_a_ref_bill2 = '$ref_true' WHERE seat_day1_zone_a = 'G' AND seat_number_day1_zone_a = $val_seat";
    $val_seat_posi = $value;
    echo $update_sql."<br>";
    $query_up = mysqli_query($conn, $update_sql);
  }
}
if(isset($_SESSION["check_day1_a_h_1"])) {
  $check_day1_a_h_1 = $_SESSION["check_day1_a_h_1"];
  foreach ($check_day1_a_h_1 as $key => $value) {
    $val_seat = substr($value, 1);
    $update_sql = "UPDATE day1_zone_a SET member_id_two_day1_zone_a = $member_id, datetime_two_day1_zone_a = NOW(), status_two_day1_zone_a = 1, day1_zone_a_ref_bill2 = '$ref_true' WHERE seat_day1_zone_a = 'H' AND seat_number_day1_zone_a = $val_seat";
    $val_seat_posi = $value;
    echo $update_sql."<br>";
    $query_up = mysqli_query($conn, $update_sql);
  }
}
if(isset($_SESSION["check_day1_a_i_1"])) {
  $check_day1_a_i_1 = $_SESSION["check_day1_a_i_1"];
  foreach ($check_day1_a_i_1 as $key => $value) {
    $val_seat = substr($value, 1);
    $update_sql = "UPDATE day1_zone_a SET member_id_two_day1_zone_a = $member_id, datetime_two_day1_zone_a = NOW(), status_two_day1_zone_a = 1, day1_zone_a_ref_bill2 = '$ref_true' WHERE seat_day1_zone_a = 'I' AND seat_number_day1_zone_a = $val_seat";
    $val_seat_posi = $value;
    echo $update_sql."<br>";
    $query_up = mysqli_query($conn, $update_sql);
  }
}

//Zone B
if(isset($_SESSION["check_day1_b_a_1"])) {
  $check_day1_b_a_1 = $_SESSION["check_day1_b_a_1"];
  foreach ($check_day1_b_a_1 as $key => $value) {
    $val_seat = substr($value, 1);
    $update_sql = "UPDATE day1_zone_b SET member_id_two_day1_zone_b = $member_id, datetime_two_day1_zone_b = NOW(), status_two_day1_zone_b = 1, day1_zone_b_ref_bill2 = '$ref_true' WHERE seat_day1_zone_b = 'A' AND seat_number_day1_zone_b = $val_seat";
    $val_seat_posi = $value;
    echo $update_sql."<br>";
    $query_up = mysqli_query($conn, $update_sql);
  }
}
if(isset($_SESSION["check_day1_b_b_1"])) {
  $check_day1_b_b_1 = $_SESSION["check_day1_b_b_1"];
  foreach ($check_day1_b_b_1 as $key => $value) {
    $val_seat = substr($value, 1);
    $update_sql = "UPDATE day1_zone_b SET member_id_two_day1_zone_b = $member_id, datetime_two_day1_zone_b = NOW(), status_two_day1_zone_b = 1, day1_zone_b_ref_bill2 = '$ref_true' WHERE seat_day1_zone_b = 'B' AND seat_number_day1_zone_b = $val_seat";
    $val_seat_posi = $value;
    echo $update_sql."<br>";
    $query_up = mysqli_query($conn, $update_sql);
  }
}
if(isset($_SESSION["check_day1_b_c_1"])) {
  $check_day1_b_c_1 = $_SESSION["check_day1_b_c_1"];
  foreach ($check_day1_b_c_1 as $key => $value) {
    $val_seat = substr($value, 1);
    $update_sql = "UPDATE day1_zone_b SET member_id_two_day1_zone_b = $member_id, datetime_two_day1_zone_b = NOW(), status_two_day1_zone_b = 1, day1_zone_b_ref_bill2 = '$ref_true' WHERE seat_day1_zone_b = 'C' AND seat_number_day1_zone_b = $val_seat";
    $val_seat_posi = $value;
    echo $update_sql."<br>";
    $query_up = mysqli_query($conn, $update_sql);
  }
}
if(isset($_SESSION["check_day1_b_d_1"])) {
  $check_day1_b_d_1 = $_SESSION["check_day1_b_d_1"];
  foreach ($check_day1_b_d_1 as $key => $value) {
    $val_seat = substr($value, 1);
    $update_sql = "UPDATE day1_zone_b SET member_id_two_day1_zone_b = $member_id, datetime_two_day1_zone_b = NOW(), status_two_day1_zone_b = 1, day1_zone_b_ref_bill2 = '$ref_true' WHERE seat_day1_zone_b = 'D' AND seat_number_day1_zone_b = $val_seat";
    $val_seat_posi = $value;
    echo $update_sql."<br>";
    $query_up = mysqli_query($conn, $update_sql);
  }
}
if(isset($_SESSION["check_day1_b_e_1"])) {
  $check_day1_b_e_1 = $_SESSION["check_day1_b_e_1"];
  foreach ($check_day1_b_e_1 as $key => $value) {
    $val_seat = substr($value, 1);
    $update_sql = "UPDATE day1_zone_b SET member_id_two_day1_zone_b = $member_id, datetime_two_day1_zone_b = NOW(), status_two_day1_zone_b = 1, day1_zone_b_ref_bill2 = '$ref_true' WHERE seat_day1_zone_b = 'E' AND seat_number_day1_zone_b = $val_seat";
    $val_seat_posi = $value;
    echo $update_sql."<br>";
    $query_up = mysqli_query($conn, $update_sql);
  }
}
if(isset($_SESSION["check_day1_b_f_1"])) {
  $check_day1_b_f_1 = $_SESSION["check_day1_b_f_1"];
  foreach ($check_day1_b_f_1 as $key => $value) {
    $val_seat = substr($value, 1);
    $update_sql = "UPDATE day1_zone_b SET member_id_two_day1_zone_b = $member_id, datetime_two_day1_zone_b = NOW(), status_two_day1_zone_b = 1, day1_zone_b_ref_bill2 = '$ref_true' WHERE seat_day1_zone_b = 'F' AND seat_number_day1_zone_b = $val_seat";
    $val_seat_posi = $value;
    echo $update_sql."<br>";
    $query_up = mysqli_query($conn, $update_sql);
  }
}
if(isset($_SESSION["check_day1_b_g_l_1"])) {
  $check_day1_b_g_l_1 = $_SESSION["check_day1_b_g_l_1"];
  foreach ($check_day1_b_g_l_1 as $key => $value) {
    $val_seat = substr($value, 1);
    $update_sql = "UPDATE day1_zone_b SET member_id_two_day1_zone_b = $member_id, datetime_two_day1_zone_b = NOW(), status_two_day1_zone_b = 1, day1_zone_b_ref_bill2 = '$ref_true' WHERE seat_day1_zone_b = 'G' AND seat_number_day1_zone_b = $val_seat";
    $val_seat_posi = $value;
    echo $update_sql."<br>";
    $query_up = mysqli_query($conn, $update_sql);
  }
}
if(isset($_SESSION["check_day1_b_g_r_1"])) {
  $check_day1_b_g_r_1 = $_SESSION["check_day1_b_g_r_1"];
  foreach ($check_day1_b_g_r_1 as $key => $value) {
    $val_seat = substr($value, 1);
    $update_sql = "UPDATE day1_zone_b SET member_id_two_day1_zone_b = $member_id, datetime_two_day1_zone_b = NOW(), status_two_day1_zone_b = 1, day1_zone_b_ref_bill2 = '$ref_true' WHERE seat_day1_zone_b = 'G' AND seat_number_day1_zone_b = $val_seat";
    $val_seat_posi = $value;
    echo $update_sql."<br>";
    $query_up = mysqli_query($conn, $update_sql);
  }
}
if(isset($_SESSION["check_day1_b_h_l_1"])) {
  $check_day1_b_h_l_1 = $_SESSION["check_day1_b_h_l_1"];
  foreach ($check_day1_b_h_l_1 as $key => $value) {
    $val_seat = substr($value, 1);
    $update_sql = "UPDATE day1_zone_b SET member_id_two_day1_zone_b = $member_id, datetime_two_day1_zone_b = NOW(), status_two_day1_zone_b = 1, day1_zone_b_ref_bill2 = '$ref_true' WHERE seat_day1_zone_b = 'H' AND seat_number_day1_zone_b = $val_seat";
    $val_seat_posi = $value;
    echo $update_sql."<br>";
    $query_up = mysqli_query($conn, $update_sql);
  }
}
if(isset($_SESSION["check_day1_b_h_r_1"])) {
  $check_day1_b_h_r_1 = $_SESSION["check_day1_b_h_r_1"];
  foreach ($check_day1_b_h_r_1 as $key => $value) {
    $val_seat = substr($value, 1);
    $update_sql = "UPDATE day1_zone_b SET member_id_two_day1_zone_b = $member_id, datetime_two_day1_zone_b = NOW(), status_two_day1_zone_b = 1, day1_zone_b_ref_bill2 = '$ref_true' WHERE seat_day1_zone_b = 'H' AND seat_number_day1_zone_b = $val_seat";
    $val_seat_posi = $value;
    echo $update_sql."<br>";
    $query_up = mysqli_query($conn, $update_sql);
  }
}

//Zone C
if(isset($_SESSION["check_day1_c_a_1"])) {
  $check_day1_c_a_1 = $_SESSION["check_day1_c_a_1"];
  foreach ($check_day1_c_a_1 as $key => $value) {
    $val_seat = substr($value, 1);
    $update_sql = "UPDATE day1_zone_c SET member_id_two_day1_zone_c = $member_id, datetime_two_day1_zone_c = NOW(), status_two_day1_zone_c = 1, day1_zone_c_ref_bill2 = '$ref_true' WHERE seat_day1_zone_c = 'A' AND seat_number_day1_zone_c = $val_seat";
    $val_seat_posi = $value;
    echo $update_sql."<br>";
    $query_up = mysqli_query($conn, $update_sql);
  }
}
if(isset($_SESSION["check_day1_c_b_1"])) {
  $check_day1_c_b_1 = $_SESSION["check_day1_c_b_1"];
  foreach ($check_day1_c_b_1 as $key => $value) {
    $val_seat = substr($value, 1);
    $update_sql = "UPDATE day1_zone_c SET member_id_two_day1_zone_c = $member_id, datetime_two_day1_zone_c = NOW(), status_two_day1_zone_c = 1, day1_zone_c_ref_bill2 = '$ref_true' WHERE seat_day1_zone_c = 'B' AND seat_number_day1_zone_c = $val_seat";
    $val_seat_posi = $value;
    echo $update_sql."<br>";
    $query_up = mysqli_query($conn, $update_sql);
  }
}
if(isset($_SESSION["check_day1_c_c_1"])) {
  $check_day1_c_c_1 = $_SESSION["check_day1_c_c_1"];
  foreach ($check_day1_c_c_1 as $key => $value) {
    $val_seat = substr($value, 1);
    $update_sql = "UPDATE day1_zone_c SET member_id_two_day1_zone_c = $member_id, datetime_two_day1_zone_c = NOW(), status_two_day1_zone_c = 1, day1_zone_c_ref_bill2 = '$ref_true' WHERE seat_day1_zone_c = 'C' AND seat_number_day1_zone_c = $val_seat";
    $val_seat_posi = $value;
    echo $update_sql."<br>";
    $query_up = mysqli_query($conn, $update_sql);
  }
}
if(isset($_SESSION["check_day1_c_d_1"])) {
  $check_day1_c_d_1 = $_SESSION["check_day1_c_d_1"];
  foreach ($check_day1_c_d_1 as $key => $value) {
    $val_seat = substr($value, 1);
    $update_sql = "UPDATE day1_zone_c SET member_id_two_day1_zone_c = $member_id, datetime_two_day1_zone_c = NOW(), status_two_day1_zone_c = 1, day1_zone_c_ref_bill2 = '$ref_true' WHERE seat_day1_zone_c = 'D' AND seat_number_day1_zone_c = $val_seat";
    $val_seat_posi = $value;
    echo $update_sql."<br>";
    $query_up = mysqli_query($conn, $update_sql);
  }
}
if(isset($_SESSION["check_day1_c_e_1"])) {
  $check_day1_c_e_1 = $_SESSION["check_day1_c_e_1"];
  foreach ($check_day1_c_e_1 as $key => $value) {
    $val_seat = substr($value, 1);
    $update_sql = "UPDATE day1_zone_c SET member_id_two_day1_zone_c = $member_id, datetime_two_day1_zone_c = NOW(), status_two_day1_zone_c = 1, day1_zone_c_ref_bill2 = '$ref_true' WHERE seat_day1_zone_c = 'E' AND seat_number_day1_zone_c = $val_seat";
    $val_seat_posi = $value;
    echo $update_sql."<br>";
    $query_up = mysqli_query($conn, $update_sql);
  }
}
if(isset($_SESSION["check_day1_c_f_1"])) {
  $check_day1_c_f_1 = $_SESSION["check_day1_c_f_1"];
  foreach ($check_day1_c_f_1 as $key => $value) {
    $val_seat = substr($value, 1);
    $update_sql = "UPDATE day1_zone_c SET member_id_two_day1_zone_c = $member_id, datetime_two_day1_zone_c = NOW(), status_two_day1_zone_c = 1, day1_zone_c_ref_bill2 = '$ref_true' WHERE seat_day1_zone_c = 'F' AND seat_number_day1_zone_c = $val_seat";
    $val_seat_posi = $value;
    echo $update_sql."<br>";
    $query_up = mysqli_query($conn, $update_sql);
  }
}
if(isset($_SESSION["check_day1_c_g_1"])) {
  $check_day1_c_g_1 = $_SESSION["check_day1_c_g_1"];
  foreach ($check_day1_c_g_1 as $key => $value) {
    $val_seat = substr($value, 1);
    $update_sql = "UPDATE day1_zone_c SET member_id_two_day1_zone_c = $member_id, datetime_two_day1_zone_c = NOW(), status_two_day1_zone_c = 1, day1_zone_c_ref_bill2 = '$ref_true' WHERE seat_day1_zone_c = 'G' AND seat_number_day1_zone_c = $val_seat";
    $val_seat_posi = $value;
    echo $update_sql."<br>";
    $query_up = mysqli_query($conn, $update_sql);
  }
}
if(isset($_SESSION["check_day1_c_h_1"])) {
  $check_day1_c_h_1 = $_SESSION["check_day1_c_h_1"];
  foreach ($check_day1_c_h_1 as $key => $value) {
    $val_seat = substr($value, 1);
    $update_sql = "UPDATE day1_zone_c SET member_id_two_day1_zone_c = $member_id, datetime_two_day1_zone_c = NOW(), status_two_day1_zone_c = 1, day1_zone_c_ref_bill2 = '$ref_true' WHERE seat_day1_zone_c = 'H' AND seat_number_day1_zone_c = $val_seat";
    $val_seat_posi = $value;
    echo $update_sql."<br>";
    $query_up = mysqli_query($conn, $update_sql);
  }
}
if(isset($_SESSION["check_day1_c_i_1"])) {
  $check_day1_c_i_1 = $_SESSION["check_day1_c_i_1"];
  foreach ($check_day1_c_i_1 as $key => $value) {
    $val_seat = substr($value, 1);
    $update_sql = "UPDATE day1_zone_c SET member_id_two_day1_zone_c = $member_id, datetime_two_day1_zone_c = NOW(), status_two_day1_zone_c = 1, day1_zone_c_ref_bill2 = '$ref_true' WHERE seat_day1_zone_c = 'I' AND seat_number_day1_zone_c = $val_seat";
    $val_seat_posi = $value;
    echo $update_sql."<br>";
    $query_up = mysqli_query($conn, $update_sql);
  }
}

$_SESSION["member_id"] = $member_id;
$_SESSION["stage"] = "STAGE 2";

// $ref_name =  $date.$date2.$date3.$time1.$time2.$time3.$val_seat_posi;
// echo $ref_name;
$_SESSION["ref_id"] = $ref_true;

$update_ref = "UPDATE member SET ref_bill = '$ref_true' WHERE member_id = $member_id";
$query_up_ref = mysqli_query($conn, $update_ref);

mysqli_close($conn);

header('Location: ../confirm_seat.php');

 ?>
