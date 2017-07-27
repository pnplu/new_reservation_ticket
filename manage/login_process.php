<?php
session_start();

require '../src/config.php';
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
mysqli_set_charset($conn, "utf8");

if(isset($_POST["password"])){
  $password = mysqli_real_escape_string($conn, $_POST["password"]);

  if($password === "okja") {
    $_SESSION["pass"] = "okja";
    header('Location: rent.php');
  }
  else {
    echo "Password ผิด กรุณา Login อีกครั้ง<br>";
    echo "<a href='index.php'><button>กลับสู่หน้าแรก</button></a>";
  }
} else {
  header('Location: index.php');
}

 ?>
