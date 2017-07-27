<?php
session_start();
if(isset($_SESSION["pass"])) {
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
	<title>Success</title>
</head>
<style>
	table {
	    font-family: arial, sans-serif;
	    border-collapse: collapse;
	    width: 100%;
	    margin: 0 auto;
	}

	td, th {
	    border: 1px solid #dddddd;
	    text-align: left;
	    padding: 8px;
	}

	tr:nth-child(even) {
	    background-color: #dddddd;
	}
	.button{
		background: #ccc;
		padding: 10px 15px;
	}
	.button:hover{
		background: #666;
		color: #fff;
	}
	a{
		text-decoration: none;
		color: #000;
	}
	.active{
		background: #666;
		color: #fff;
	}
	#wrap_button{
		width: 518px;
		margin: 50px auto;
	}
</style>
<body>
	<article style="float: right: margin-right: 20px;">
		<a href="log_out.php"><button type="button" name="button">Logout</button></a>
	</article>
	<div id="wrap_button">
		<a class="button" href="rent.php">ผู้ใช้ที่จองแล้ว</a>
		<a class="button" href="buy.php">ผู้ใช้ที่ชำระเงินแล้ว</a>
		<a class="button active" href="success.php">ผู้ใช้ที่ตรวจสอบการชำระเงินแล้ว</a>
	</div>
	<table>
		<tr>
	    	<th>Fullname</th>
	    	<th>Tel</th>
		    <th>E-mail</th>
		    <th>Reference bill</th>
        <th>Seat</th>
        <th>Round</th>
		    <th>Img bill</th>
	  	</tr>
	  	<?php
		  	require "connect_db.php";
			$mysqli -> query("set names utf8");
			if (mysqli_connect_errno()) {
			    echo "Mysqli Connect was not estabished".mysqli_connect_errno();
			}

			// $get_customers = $mysqli -> query("SELECT member_id, fullname, tel, email, ref_bill, img_bill, status_bill FROM member WHERE status_bill = '2'  ");
      $get_data_as_1 = $mysqli -> query("SELECT * FROM `day1_zone_a` INNER JOIN member ON day1_zone_a.member_id_one_day1_zone_a = member.member_id WHERE `day1_zone_a_ref_bill1` != '' AND status_bill = 2");
      $get_data_as_2 = $mysqli -> query("SELECT * FROM `day1_zone_a` INNER JOIN member ON day1_zone_a.member_id_one_day1_zone_a = member.member_id WHERE `day1_zone_a_ref_bill2` != '' AND status_bill = 2");
      $get_data_as_3 = $mysqli -> query("SELECT * FROM `day1_zone_b` INNER JOIN member ON day1_zone_b.member_id_one_day1_zone_b = member.member_id WHERE `day1_zone_b_ref_bill1` != '' AND status_bill = 2");
      $get_data_as_4 = $mysqli -> query("SELECT * FROM `day1_zone_b` INNER JOIN member ON day1_zone_b.member_id_one_day1_zone_b = member.member_id WHERE `day1_zone_b_ref_bill2` != '' AND status_bill = 2");
      $get_data_as_5 = $mysqli -> query("SELECT * FROM `day1_zone_c` INNER JOIN member ON day1_zone_c.member_id_one_day1_zone_c = member.member_id WHERE `day1_zone_c_ref_bill1` != '' AND status_bill = 2");
      $get_data_as_6 = $mysqli -> query("SELECT * FROM `day1_zone_c` INNER JOIN member ON day1_zone_c.member_id_one_day1_zone_c = member.member_id WHERE `day1_zone_c_ref_bill2` != '' AND status_bill = 2");
			$get_data_bs_1 = $mysqli -> query("SELECT * FROM `day2_zone_a` INNER JOIN member ON day2_zone_a.member_id_one_day2_zone_a = member.member_id WHERE `day2_zone_a_ref_bill1` != '' AND status_bill = 2");
      $get_data_bs_2 = $mysqli -> query("SELECT * FROM `day2_zone_a` INNER JOIN member ON day2_zone_a.member_id_one_day2_zone_a = member.member_id WHERE `day2_zone_a_ref_bill2` != '' AND status_bill = 2");
      $get_data_bs_3 = $mysqli -> query("SELECT * FROM `day2_zone_b` INNER JOIN member ON day2_zone_b.member_id_one_day2_zone_b = member.member_id WHERE `day2_zone_b_ref_bill1` != '' AND status_bill = 2");
      $get_data_bs_4 = $mysqli -> query("SELECT * FROM `day2_zone_b` INNER JOIN member ON day2_zone_b.member_id_one_day2_zone_b = member.member_id WHERE `day2_zone_b_ref_bill2` != '' AND status_bill = 2");
      $get_data_bs_5 = $mysqli -> query("SELECT * FROM `day2_zone_c` INNER JOIN member ON day2_zone_c.member_id_one_day2_zone_c = member.member_id WHERE `day2_zone_c_ref_bill1` != '' AND status_bill = 2");
      $get_data_bs_6 = $mysqli -> query("SELECT * FROM `day2_zone_c` INNER JOIN member ON day2_zone_c.member_id_one_day2_zone_c = member.member_id WHERE `day2_zone_c_ref_bill2` != '' AND status_bill = 2");

      if (is_array($get_data_as_1) || is_object($get_data_as_1))
			{
				foreach ($get_data_as_1 as $get_data_a) {
					$member_id = $get_data_a['member_id'];
					$fullname = $get_data_a['fullname'];
					$tel = $get_data_a['tel'];
					$email = $get_data_a['email'];
					$ref_bill = $get_data_a['ref_bill'];
					$img_bill = $get_data_a['img_bill'];
					$status_bill = $get_data_a['status_bill'];
					$get_seat = $get_data_a['seat_day1_zone_a'];
					$get_num_seat = $get_data_a["seat_number_day1_zone_a"];
					?>
					<tr>
				    <td><?=$fullname?></td>
				    <td><?=$tel?></td>
				    <td><?=$email?></td>
				    <td><?=$ref_bill?></td>
						<td><?=$get_seat.$get_num_seat?></td>
            <td>วันเสาร์ 11.30</td>
            <td><a target="_blank" href="../uploads/<?php echo $img_bill; ?>"><img src="../uploads/<?php echo $img_bill; ?>" style="width: 80px;"></a></td>
			  	</tr>
					<?php
				}
			}
      if (is_array($get_data_as_3) || is_object($get_data_as_3))
			{
				foreach ($get_data_as_3 as $get_data_a) {
					$member_id = $get_data_a['member_id'];
					$fullname = $get_data_a['fullname'];
					$tel = $get_data_a['tel'];
					$email = $get_data_a['email'];
					$ref_bill = $get_data_a['ref_bill'];
					$img_bill = $get_data_a['img_bill'];
					$status_bill = $get_data_a['status_bill'];
					$get_seat = $get_data_a['seat_day1_zone_b'];
					$get_num_seat = $get_data_a["seat_number_day1_zone_b"];
          ?>
          <tr>
				    <td><?=$fullname?></td>
				    <td><?=$tel?></td>
				    <td><?=$email?></td>
				    <td><?=$ref_bill?></td>
						<td><?=$get_seat.$get_num_seat?></td>
            <td>วันเสาร์ 11.30</td>
            <td><a target="_blank" href="../uploads/<?php echo $img_bill; ?>"><img src="../uploads/<?php echo $img_bill; ?>" style="width: 80px;"></a></td>
			  	</tr>
          <?php
        }
      }
      if (is_array($get_data_as_5) || is_object($get_data_as_5))
			{
				foreach ($get_data_as_5 as $get_data_a) {
					$member_id = $get_data_a['member_id'];
					$fullname = $get_data_a['fullname'];
					$tel = $get_data_a['tel'];
					$email = $get_data_a['email'];
					$ref_bill = $get_data_a['ref_bill'];
					$img_bill = $get_data_a['img_bill'];
					$status_bill = $get_data_a['status_bill'];
					$get_seat = $get_data_a['seat_day1_zone_c'];
					$get_num_seat = $get_data_a["seat_number_day1_zone_c"];
          ?>
          <tr>
				    <td><?=$fullname?></td>
				    <td><?=$tel?></td>
				    <td><?=$email?></td>
				    <td><?=$ref_bill?></td>
						<td><?=$get_seat.$get_num_seat?></td>
            <td>วันเสาร์ 11.30</td>
            <td><a target="_blank" href="../uploads/<?php echo $img_bill; ?>"><img src="../uploads/<?php echo $img_bill; ?>" style="width: 80px;"></a></td>
			  	</tr>
          <?php
        }
      }
      if (is_array($get_data_as_2) || is_object($get_data_as_2))
			{
				foreach ($get_data_as_2 as $get_data_a) {
					$member_id = $get_data_a['member_id'];
					$fullname = $get_data_a['fullname'];
					$tel = $get_data_a['tel'];
					$email = $get_data_a['email'];
					$ref_bill = $get_data_a['ref_bill'];
					$img_bill = $get_data_a['img_bill'];
					$status_bill = $get_data_a['status_bill'];
					$get_seat = $get_data_a['seat_day1_zone_a'];
					$get_num_seat = $get_data_a["seat_number_day1_zone_a"];
          ?>
          <tr>
				    <td><?=$fullname?></td>
				    <td><?=$tel?></td>
				    <td><?=$email?></td>
				    <td><?=$ref_bill?></td>
						<td><?=$get_seat.$get_num_seat?></td>
            <td>วันเสาร์ 14.30</td>
            <td><a target="_blank" href="../uploads/<?php echo $img_bill; ?>"><img src="../uploads/<?php echo $img_bill; ?>" style="width: 80px;"></a></td>
			  	</tr>
          <?php
        }
      }
      if (is_array($get_data_as_4) || is_object($get_data_as_4))
      {
        foreach ($get_data_as_4 as $get_data_a) {
          $member_id = $get_data_a['member_id'];
          $fullname = $get_data_a['fullname'];
          $tel = $get_data_a['tel'];
          $email = $get_data_a['email'];
          $ref_bill = $get_data_a['ref_bill'];
          $img_bill = $get_data_a['img_bill'];
          $status_bill = $get_data_a['status_bill'];
          $get_seat = $get_data_a['seat_day1_zone_b'];
          $get_num_seat = $get_data_a["seat_number_day1_zone_b"];
          ?>
          <tr>
				    <td><?=$fullname?></td>
				    <td><?=$tel?></td>
				    <td><?=$email?></td>
				    <td><?=$ref_bill?></td>
						<td><?=$get_seat.$get_num_seat?></td>
            <td>วันเสาร์ 14.30</td>
            <td><a target="_blank" href="../uploads/<?php echo $img_bill; ?>"><img src="../uploads/<?php echo $img_bill; ?>" style="width: 80px;"></a></td>
			  	</tr>
          <?php
        }
      }
      if (is_array($get_data_as_6) || is_object($get_data_as_6))
      {
        foreach ($get_data_as_6 as $get_data_a) {
          $member_id = $get_data_a['member_id'];
          $fullname = $get_data_a['fullname'];
          $tel = $get_data_a['tel'];
          $email = $get_data_a['email'];
          $ref_bill = $get_data_a['ref_bill'];
          $img_bill = $get_data_a['img_bill'];
          $status_bill = $get_data_a['status_bill'];
          $get_seat = $get_data_a['seat_day1_zone_c'];
          $get_num_seat = $get_data_a["seat_number_day1_zone_c"];
          ?>
          <tr>
				    <td><?=$fullname?></td>
				    <td><?=$tel?></td>
				    <td><?=$email?></td>
				    <td><?=$ref_bill?></td>
						<td><?=$get_seat.$get_num_seat?></td>
            <td>วันเสาร์ 14.30</td>
            <td><a target="_blank" href="../uploads/<?php echo $img_bill; ?>"><img src="../uploads/<?php echo $img_bill; ?>" style="width: 80px;"></a></td>
			  	</tr>
          <?php
        }
      }
      if (is_array($get_data_bs_1) || is_object($get_data_bs_1))
      {
        foreach ($get_data_bs_1 as $get_data_a) {
          $member_id = $get_data_a['member_id'];
          $fullname = $get_data_a['fullname'];
          $tel = $get_data_a['tel'];
          $email = $get_data_a['email'];
          $ref_bill = $get_data_a['ref_bill'];
          $img_bill = $get_data_a['img_bill'];
          $status_bill = $get_data_a['status_bill'];
          $get_seat = $get_data_a['seat_day2_zone_a'];
          $get_num_seat = $get_data_a["seat_number_day2_zone_a"];
          ?>
          <tr>
				    <td><?=$fullname?></td>
				    <td><?=$tel?></td>
				    <td><?=$email?></td>
				    <td><?=$ref_bill?></td>
						<td><?=$get_seat.$get_num_seat?></td>
            <td>วันอาทิตย์ 11.30</td>
            <td><a target="_blank" href="../uploads/<?php echo $img_bill; ?>"><img src="../uploads/<?php echo $img_bill; ?>" style="width: 80px;"></a></td>
			  	</tr>
          <?php
        }
      }
      if (is_array($get_data_bs_3) || is_object($get_data_bs_3))
      {
        foreach ($get_data_bs_3 as $get_data_a) {
          $member_id = $get_data_a['member_id'];
          $fullname = $get_data_a['fullname'];
          $tel = $get_data_a['tel'];
          $email = $get_data_a['email'];
          $ref_bill = $get_data_a['ref_bill'];
          $img_bill = $get_data_a['img_bill'];
          $status_bill = $get_data_a['status_bill'];
          $get_seat = $get_data_a['seat_day2_zone_b'];
          $get_num_seat = $get_data_a["seat_number_day2_zone_b"];
          ?>
          <tr>
				    <td><?=$fullname?></td>
				    <td><?=$tel?></td>
				    <td><?=$email?></td>
				    <td><?=$ref_bill?></td>
						<td><?=$get_seat.$get_num_seat?></td>
            <td>วันอาทิตย์ 11.30</td>
            <td><a target="_blank" href="../uploads/<?php echo $img_bill; ?>"><img src="../uploads/<?php echo $img_bill; ?>" style="width: 80px;"></a></td>
			  	</tr>
          <?php
        }
      }
      if (is_array($get_data_bs_5) || is_object($get_data_bs_5))
      {
        foreach ($get_data_bs_5 as $get_data_a) {
          $member_id = $get_data_a['member_id'];
          $fullname = $get_data_a['fullname'];
          $tel = $get_data_a['tel'];
          $email = $get_data_a['email'];
          $ref_bill = $get_data_a['ref_bill'];
          $img_bill = $get_data_a['img_bill'];
          $status_bill = $get_data_a['status_bill'];
          $get_seat = $get_data_a['seat_day2_zone_c'];
          $get_num_seat = $get_data_a["seat_number_day2_zone_c"];
          ?>
          <tr>
				    <td><?=$fullname?></td>
				    <td><?=$tel?></td>
				    <td><?=$email?></td>
				    <td><?=$ref_bill?></td>
						<td><?=$get_seat.$get_num_seat?></td>
            <td>วันอาทิตย์ 11.30</td>
            <td><a target="_blank" href="../uploads/<?php echo $img_bill; ?>"><img src="../uploads/<?php echo $img_bill; ?>" style="width: 80px;"></a></td>
			  	</tr>
          <?php
        }
      }
      if (is_array($get_data_bs_2) || is_object($get_data_bs_2))
      {
        foreach ($get_data_bs_2 as $get_data_a) {
          $member_id = $get_data_a['member_id'];
          $fullname = $get_data_a['fullname'];
          $tel = $get_data_a['tel'];
          $email = $get_data_a['email'];
          $ref_bill = $get_data_a['ref_bill'];
          $img_bill = $get_data_a['img_bill'];
          $status_bill = $get_data_a['status_bill'];
          $get_seat = $get_data_a['seat_day2_zone_a'];
          $get_num_seat = $get_data_a["seat_number_day2_zone_a"];
          ?>
          <tr>
            <td><?=$fullname?></td>
            <td><?=$tel?></td>
            <td><?=$email?></td>
            <td><?=$ref_bill?></td>
            <td><?=$get_seat.$get_num_seat?></td>
            <td>วันอาทิตย์ 14.30</td>
            <td><a target="_blank" href="../uploads/<?php echo $img_bill; ?>"><img src="../uploads/<?php echo $img_bill; ?>" style="width: 80px;"></a></td>
          </tr>
          <?php
        }
      }
      if (is_array($get_data_bs_4) || is_object($get_data_bs_4))
      {
        foreach ($get_data_bs_4 as $get_data_a) {
          $member_id = $get_data_a['member_id'];
          $fullname = $get_data_a['fullname'];
          $tel = $get_data_a['tel'];
          $email = $get_data_a['email'];
          $ref_bill = $get_data_a['ref_bill'];
          $img_bill = $get_data_a['img_bill'];
          $status_bill = $get_data_a['status_bill'];
          $get_seat = $get_data_a['seat_day2_zone_b'];
          $get_num_seat = $get_data_a["seat_number_day2_zone_b"];
          ?>
          <tr>
            <td><?=$fullname?></td>
            <td><?=$tel?></td>
            <td><?=$email?></td>
            <td><?=$ref_bill?></td>
            <td><?=$get_seat.$get_num_seat?></td>
            <td>วันอาทิตย์ 14.30</td>
            <td><a target="_blank" href="../uploads/<?php echo $img_bill; ?>"><img src="../uploads/<?php echo $img_bill; ?>" style="width: 80px;"></a></td>
          </tr>
          <?php
        }
      }
      if (is_array($get_data_bs_6) || is_object($get_data_bs_6))
      {
        foreach ($get_data_bs_6 as $get_data_a) {
          $member_id = $get_data_a['member_id'];
          $fullname = $get_data_a['fullname'];
          $tel = $get_data_a['tel'];
          $email = $get_data_a['email'];
          $ref_bill = $get_data_a['ref_bill'];
          $img_bill = $get_data_a['img_bill'];
          $status_bill = $get_data_a['status_bill'];
          $get_seat = $get_data_a['seat_day2_zone_c'];
          $get_num_seat = $get_data_a["seat_number_day2_zone_c"];
          ?>
          <tr>
            <td><?=$fullname?></td>
            <td><?=$tel?></td>
            <td><?=$email?></td>
            <td><?=$ref_bill?></td>
            <td><?=$get_seat.$get_num_seat?></td>
            <td>วันอาทิตย์ 14.30</td>
            <td><a target="_blank" href="../uploads/<?php echo $img_bill; ?>"><img src="../uploads/<?php echo $img_bill; ?>" style="width: 80px;"></a></td>
          </tr>
          <?php
        }
      }
    ?>
	</table>
</body>
</html>
<?php
}
else {
	header('Location: ../error.php');
}
 ?>
