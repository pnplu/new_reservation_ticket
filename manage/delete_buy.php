<?php
require '../src/config.php';
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
mysqli_set_charset($conn, "utf8");

// $member_id = mysqli_real_escape_string($conn, $_GET["member_id"]);
// $seat = mysqli_real_escape_string($conn, $_GET["seat"]);
// $position = mysqli_real_escape_string($conn, $_GET["position"]);
$ref_bill = mysqli_real_escape_string($conn, $_GET["ref_bill"]);

// $sql_delete = "UPDATE member SET status_bill = 0 WHERE member_id = $member_id";
$update_day1_a1 = "UPDATE day1_zone_a SET member_id_one_day1_zone_a = 0, status_one_day1_zone_a = 0 WHERE day1_zone_a_ref_bill1 = '$ref_bill'";
$update_day1_a2 = "UPDATE day1_zone_a SET member_id_two_day1_zone_a = 0, status_two_day1_zone_a = 0 WHERE day1_zone_a_ref_bill2 = '$ref_bill'";
$update_day1_b1 = "UPDATE day1_zone_b SET member_id_one_day1_zone_b = 0, status_one_day1_zone_b = 0 WHERE day1_zone_b_ref_bill1 = '$ref_bill'";
$update_day1_b2 = "UPDATE day1_zone_b SET member_id_two_day1_zone_b = 0, status_two_day1_zone_b = 0 WHERE day1_zone_b_ref_bill2 = '$ref_bill'";
$update_day1_c1 = "UPDATE day1_zone_c SET member_id_one_day1_zone_c = 0, status_one_day1_zone_c = 0 WHERE day1_zone_c_ref_bill1 = '$ref_bill'";
$update_day1_c2 = "UPDATE day1_zone_c SET member_id_two_day1_zone_c = 0, status_two_day1_zone_c = 0 WHERE day1_zone_c_ref_bill2 = '$ref_bill'";
$update_day2_a1 = "UPDATE day2_zone_a SET member_id_one_day2_zone_a = 0, status_one_day2_zone_a = 0 WHERE day2_zone_a_ref_bill1 = '$ref_bill'";
$update_day2_a2 = "UPDATE day2_zone_a SET member_id_two_day2_zone_a = 0, status_two_day2_zone_a = 0 WHERE day2_zone_a_ref_bill2 = '$ref_bill'";
$update_day2_b1 = "UPDATE day2_zone_b SET member_id_one_day2_zone_b = 0, status_one_day2_zone_b = 0 WHERE day2_zone_b_ref_bill1 = '$ref_bill'";
$update_day2_b2 = "UPDATE day2_zone_b SET member_id_two_day2_zone_b = 0, status_two_day2_zone_b = 0 WHERE day2_zone_b_ref_bill2 = '$ref_bill'";
$update_day2_c1 = "UPDATE day2_zone_c SET member_id_one_day2_zone_c = 0, status_one_day2_zone_c = 0 WHERE day2_zone_c_ref_bill1 = '$ref_bill'";
$update_day2_c2 = "UPDATE day2_zone_c SET member_id_two_day2_zone_c = 0, status_two_day2_zone_c = 0 WHERE day2_zone_c_ref_bill2 = '$ref_bill'";
$update_member = "UPDATE member SET ref_bill = '', status_bill = 0  WHERE ref_bill = '$ref_bill'";

$query_day1_a1 = mysqli_query($conn, $update_day1_a1);
$query_day1_b1 = mysqli_query($conn, $update_day1_b1);
$query_day1_c1 = mysqli_query($conn, $update_day1_c1);
$query_day2_a1 = mysqli_query($conn, $update_day2_a1);
$query_day2_a1 = mysqli_query($conn, $update_day2_b1);
$query_day2_a1 = mysqli_query($conn, $update_day2_c1);
$query_day1_a2 = mysqli_query($conn, $update_day1_a2);
$query_day1_b2 = mysqli_query($conn, $update_day1_b2);
$query_day1_c2 = mysqli_query($conn, $update_day1_c2);
$query_day2_a2 = mysqli_query($conn, $update_day2_a2);
$query_day2_a2 = mysqli_query($conn, $update_day2_b2);
$query_day2_a2 = mysqli_query($conn, $update_day2_c2);
$query_update_member = mysqli_query($conn, $update_member);

mysqli_close($conn);
// $delete_query = mysqli_query($conn, $sql_delete);

header('Location: buy.php');
 ?>
