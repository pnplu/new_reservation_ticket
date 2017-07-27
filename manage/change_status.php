<?php

		require '../vendor/phpmailer/phpmailer/PHPMailerAutoload.php';
		require "connect_db.php";
		$mysqli -> query("set names utf8");
		if (mysqli_connect_errno()) {
		    echo "Mysqli Connect was not estabished".mysqli_connect_errno();
		}

		$ref = mysqli_real_escape_string($mysqli, $_GET["ref"]);

		$get_customers = $mysqli -> query("UPDATE member SET status_bill = '2' WHERE ref_bill = '$ref' ");
		$get_up_seat1 = $mysqli -> query("UPDATE day1_zone_a SET status_one_day1_zone_a = 2 WHERE day1_zone_a_ref_bill1 = '$ref'");
		$get_up_seat2 = $mysqli -> query("UPDATE day1_zone_a SET status_two_day1_zone_a = 2 WHERE day1_zone_a_ref_bill2 = '$ref'");
		$get_up_seat3 = $mysqli -> query("UPDATE day1_zone_b SET status_one_day1_zone_b = 2 WHERE day1_zone_b_ref_bill1 = '$ref'");
		$get_up_seat4 = $mysqli -> query("UPDATE day1_zone_b SET status_two_day1_zone_b = 2 WHERE day1_zone_b_ref_bill2 = '$ref'");
		$get_up_seat5 = $mysqli -> query("UPDATE day1_zone_c SET status_one_day1_zone_c = 2 WHERE day1_zone_c_ref_bill1 = '$ref'");
		$get_up_seat6 = $mysqli -> query("UPDATE day1_zone_c SET status_two_day1_zone_c = 2 WHERE day1_zone_c_ref_bill2 = '$ref'");

		$get_up_seat7 = $mysqli -> query("UPDATE day2_zone_a SET status_one_day2_zone_a = 2 WHERE day2_zone_a_ref_bill1 = '$ref'");
		$get_up_seat8 = $mysqli -> query("UPDATE day2_zone_a SET status_two_day2_zone_a = 2 WHERE day2_zone_a_ref_bill2 = '$ref'");
		$get_up_seat9 = $mysqli -> query("UPDATE day2_zone_b SET status_one_day2_zone_b = 2 WHERE day2_zone_b_ref_bill1 = '$ref'");
		$get_up_seat10 = $mysqli -> query("UPDATE day2_zone_b SET status_two_day2_zone_b = 2 WHERE day2_zone_b_ref_bill2 = '$ref'");
		$get_up_seat11 = $mysqli -> query("UPDATE day2_zone_c SET status_one_day2_zone_c = 2 WHERE day2_zone_c_ref_bill1 = '$ref'");
		$get_up_seat12 = $mysqli -> query("UPDATE day2_zone_c SET status_two_day2_zone_c = 2 WHERE day2_zone_c_ref_bill2 = '$ref'");

		$find_user = $mysqli -> query("SELECT * FROM member WHERE ref_bill = '$ref'");

		foreach ($find_user as $value) {
			$email = $value["email"];
			$name_user = $value["fullname"];
      $tel = $value["tel"];

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

		$mail->Subject = '[ICTSILPAKORN 2017 ปิรันพันธุ์กร] แจ้งผลยืนยันการชำระเงิน';
		$mail->Body = 'เรียนคุณ '.$name_user.'<br>หมายเลขโทรศัพท์ '.$tel.'<br><br>ตามที่คุณหรือผู้ใช้อีเมล์ของคุณได้ทำการสำรองที่นั่ง ชำระเงิน และทำการยืนยันการชำระเงิน สำหรับการแสดงละครเวที เรื่อง ปิรันพันธุ์กร โดยคณะเทคโนโลยีสารสนเทศและการสื่อสาร มหาวิทยาลัยศิลปากรมาแล้วนั้น<br>ทางเราขอแจ้งให้ทราบว่า การชำระเงินของท่านได้ถูกตรวจสอบเรียบร้อยแล้ว และท่านสามารถใช้หมายเลขอ้างอิง ชื่อ อีเมล์ หรือเบอร์โทรศัพท์ของท่าน ในการรับบัตร และสูจิบัตร เพื่อเข้าชมการแสดงละครเวที ปิรันพันธุ์กร ในวันที่ (รอบการแสดง) เวลา (เวลาแสดง) ณ ห้องประชุม ดร.ถาวร พรประภา ออดิทอเรียม ชั้น 5 อาคารสยามกลการ ปทุมวัน โดยท่านสามารถมารับบัตรได้ก่อนเวลาแสดงจริง 1 ชั่วโมง<br>ทางนักแสดงและทีมงาน ปิรันพันธุ์กร ขอขอบคุณที่ให้ความสนใจในการแสดงละครเวทีครั้งนี้ หากท่านมีข้อสงสัยหรือได้รับปัญหาเกี่ยวกับการสำรองที่นั่ง สามารถติดต่อได้ที่ เจ้าหน้าที่ฝ่ายสำรองที่นั่ง โทรศัพท์ 093-3292370 (มิ้นโตะ) และติดตามข่าวสาร รวมทั้งความเคลื่อนไหวได้ที่ เฟสบุ๊ค ละครไอซีที ศิลปากร ( https://www.facebook.com/lakorn.ictsilpakorn/ )';
		$mail->AltBody = 'หมายเลขอ้างอิง : $ref_id ข้อมูลติดต่อเพิ่มเติม :ที่เบอร์ 093-3292370 (มิ้นโตะ) ขอบคุณค่ะ';

		if(!$mail->send()) {
		    echo 'Message could not be sent.';
		    echo 'Mailer Error: ' . $mail->ErrorInfo;
		}
	}

	header("Location:buy.php");
?>
