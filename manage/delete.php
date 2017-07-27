<?php
require '../src/config.php';
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
mysqli_set_charset($conn, "utf8");

$member_id = mysqli_real_escape_string($conn, $_GET["member_id"]);
$seat = mysqli_real_escape_string($conn, $_GET["seat"]);
$position = mysqli_real_escape_string($conn, $_GET["position"]);

// $sql_delete = "UPDATE member SET status_bill = 0 WHERE member_id = $member_id";
$update_day1_a = "UPDATE day1_zone_a SET member_id_one_day1_zone_a = 0, status_one_day1_zone_a = 0 WHERE member_id_one_day1_zone_a = $member_id AND seat_day1_zone_a = '$seat' AND seat_number_day1_zone_a = $position";
$update_day1_b = "UPDATE day1_zone_b SET member_id_one_day1_zone_b = 0, status_one_day1_zone_b = 0 WHERE member_id_one_day1_zone_b = $member_id AND seat_day1_zone_b = '$seat' AND seat_number_day1_zone_b = $position";
$update_day1_c = "UPDATE day1_zone_c SET member_id_one_day1_zone_c = 0, status_one_day1_zone_c = 0 WHERE member_id_one_day1_zone_c = $member_id AND seat_day1_zone_c = '$seat' AND seat_number_day1_zone_c = $position";
$update_day2_a = "UPDATE day2_zone_a SET member_id_one_day2_zone_a = 0, status_one_day2_zone_a = 0 WHERE member_id_one_day2_zone_a = $member_id AND seat_day2_zone_a = '$seat' AND seat_number_day2_zone_a = $position";
$update_day2_b = "UPDATE day2_zone_b SET member_id_one_day2_zone_b = 0, status_one_day2_zone_b = 0 WHERE member_id_one_day2_zone_b = $member_id AND seat_day2_zone_b = '$seat' AND seat_number_day2_zone_b = $position";
$update_day2_c = "UPDATE day2_zone_c SET member_id_one_day2_zone_c = 0, status_one_day2_zone_c = 0 WHERE member_id_one_day2_zone_c = $member_id AND seat_day2_zone_c = '$seat' AND seat_number_day2_zone_c = $position";

$query_day1_a = mysqli_query($conn, $update_day1_a);
$query_day1_b = mysqli_query($conn, $update_day1_b);
$query_day1_c = mysqli_query($conn, $update_day1_c);
$query_day2_a = mysqli_query($conn, $update_day2_a);
$query_day2_a = mysqli_query($conn, $update_day2_b);
$query_day2_a = mysqli_query($conn, $update_day2_c);
// $delete_query = mysqli_query($conn, $sql_delete);

header('Location: rent.php');
 ?>
