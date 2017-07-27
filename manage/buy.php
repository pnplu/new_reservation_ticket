<?php
session_start();
if(isset($_SESSION["pass"])) {
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
	<title>Buy</title>
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
	.button_approve{
		background: #666;
		color: #fff;
		padding: 10px 15px;
		text-align: center;
		cursor: pointer;
	}
	.button_approve:hover{
		background: #333;
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
		<a class="button active" href="buy.php">ผู้ใช้ที่ชำระเงินแล้ว</a>
		<a class="button" href="success.php">ผู้ใช้ที่ตรวจสอบการชำระเงินแล้ว</a>
	</div>
	<table>
		<tr>
	    	<th>Fullname</th>
	    	<th>Tel</th>
		    <th>E-mail</th>
		    <th>Reference bill</th>
        <th>Date</th>
        <th>Time</th>
        <th>Bank</th>
        <th>Money</th>
		    <th>Img bill</th>
		    <th>Approve</th>
        <th>Rejected</th>
	  	</tr>
	  	<?php
		  	require "connect_db.php";
			$mysqli -> query("set names utf8");
			if (mysqli_connect_errno()) {
			    echo "Mysqli Connect was not estabished".mysqli_connect_errno();
			}

			$get_customers = $mysqli -> query("SELECT * FROM confirm_bill INNER JOIN member ON confirm_bill.confirm_ref_bill = member.ref_bill  WHERE confirm_bill_id != '' AND member.status_bill != 2");
			if (is_array($get_customers) || is_object($get_customers))
			{
				foreach ($get_customers as $get_customer) {
					$member_id = $get_customer['member_id'];
					$fullname = $get_customer['fullname'];
					$tel = $get_customer['tel'];
					$email = $get_customer['email'];
					$ref_bill = $get_customer['ref_bill'];
					$img_bill = $get_customer['img_bill'];
					$status_bill = $get_customer['status_bill'];
          $user_date = $get_customer['user_date'];
          $user_time = $get_customer['user_time'];
          $bank = $get_customer['place'];
          $money = $get_customer['price'];
					?>
					<tr>
					    <td><?php echo $fullname; ?></td>
					    <td><?php echo $tel; ?></td>
					    <td><?php echo $email; ?></td>
					    <td><?php echo $ref_bill; ?></td>
              <td><?php echo $user_date; ?></td>
              <td><?php echo $user_time; ?></td>
              <td><?php echo $bank; ?></td>
              <td><?php echo $money; ?> Bath</td>
					    <td><a target="_blank" href="../uploads/<?php echo $img_bill;?>"><img src="../uploads/<?php echo $img_bill;?>" style="max-width: 40%;"></a></td>
					    <td><a href="change_status.php?ref=<?php echo $ref_bill;?>" class="button_approve">Approve</div></td>
              <td><a href="delete_buy.php?ref_bill=<?php echo $ref_bill; ?>"><button type="button" name="button">Rejected</button></a></td>
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
