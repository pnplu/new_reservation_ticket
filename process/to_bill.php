<?php
session_start();
session_destroy();
header('Location: ../send_bill.php');

 ?>
