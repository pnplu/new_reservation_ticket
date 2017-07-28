<?php
session_start();
require '../src/config.php';
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
mysqli_set_charset($conn, "utf8");

if(isset($_POST["in_ref"], $_POST["money_in"], $_POST["bank_name"], $_POST["date_n"], $_POST["time_n"])) {
  $img_file = $_FILES["img_file"]["name"];
  $in_ref = mysqli_real_escape_string($conn, $_POST["in_ref"]);
  $money_in = mysqli_real_escape_string($conn, $_POST["money_in"]);
  $bank_name = mysqli_real_escape_string($conn, $_POST["bank_name"]);
  $date_n = mysqli_real_escape_string($conn, $_POST["date_n"]);
  $time_n = mysqli_real_escape_string($conn, $_POST["time_n"]);

  // echo $img_file;
  // echo $in_ref;

  $sql_find_ref = "SELECT ref_bill FROM member WHERE ref_bill = '$in_ref' AND status_bill = 0";
  $query_find_ref = mysqli_query($conn, $sql_find_ref);
  $num_check = mysqli_num_rows($query_find_ref);


  if($num_check > 0) {
    $target_dir = "../uploads/";
    $target_file = $target_dir . basename($_FILES["img_file"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image

        $check = getimagesize($_FILES["img_file"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
            header('Location: to_bill.php');
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
          header('Location: to_bill.php');
          $uploadOk = 0;
        }

        if($uploadOk === 0) {
          header('Location: to_bill.php');
        }
        else {
          // $target_dir = "uploads/";
          // $target_file = $target_dir . basename($_FILES["img_file"]["name"]);
          $temp = explode(".", $_FILES["img_file"]["name"]);
          $newfilename =  $in_ref. '.' . end($temp);
          move_uploaded_file($_FILES["img_file"]["tmp_name"], $target_dir.$newfilename);
            $ref_find = "SELECT member.member_id FROM member WHERE member.ref_bill = '$in_ref'";
            $query_ref_find = mysqli_query($conn, $ref_find);
            while($rows = mysqli_fetch_assoc($query_ref_find)) {
              $member_id = $rows["member_id"];
            }
            $insert_bill_sql = "INSERT INTO confirm_bill (confirm_bill_id, confirm_ref_bill, price, place, user_date, user_time) VALUES (0, '$in_ref', $money_in, '$bank_name', '$date_n', '$time_n')";
            $query_insert = mysqli_query($conn, $insert_bill_sql);
            $sql_update = "UPDATE member SET status_bill = 1, img_bill = '$newfilename' WHERE ref_bill = '$in_ref'";
            // echo $sql_update;
            $query_up_ref = mysqli_query($conn, $sql_update);
            $_SESSION["in_ref"] = $in_ref;
            $_SESSION["money_in"] = $money_in;
            $_SESSION["bank_name"] = $bank_name;
            $_SESSION["date_n"] = $date_n;
            $_SESSION["time_n"] = $time_n;
            header('Location: ../confirm_bill.php');
        }
  }
  else {
    header('Location: ../error_ref.php');
  }
      mysqli_close($conn);

}
else {
  header('Location: ../error.php');
}

 ?>
