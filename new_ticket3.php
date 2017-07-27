<?php
require_once __DIR__."/app/autoload.php";

use ictslipakorn\Database2;

$conn = new Database2();
//Day 1 Zone A
$seat_a_day2_1 = $conn->day2_zone_a_seat_a();
$seat_b_day2_1 = $conn->day2_zone_a_seat_b();
$seat_c_day2_1 = $conn->day2_zone_a_seat_c();
$seat_d_day2_1 = $conn->day2_zone_a_seat_d();
$seat_e_day2_1 = $conn->day2_zone_a_seat_e();
$seat_f_day2_1 = $conn->day2_zone_a_seat_f();
$seat_g_day2_1 = $conn->day2_zone_a_seat_g();
$seat_h_day2_1 = $conn->day2_zone_a_seat_h();
$seat_i_day2_1 = $conn->day2_zone_a_seat_i();
//Day 1 Zone B
$seat_a_day2_2 = $conn->day2_zone_b_seat_a();
$seat_b_day2_2 = $conn->day2_zone_b_seat_b();
$seat_c_day2_2 = $conn->day2_zone_b_seat_c();
$seat_d_day2_2 = $conn->day2_zone_b_seat_d();
$seat_e_day2_2 = $conn->day2_zone_b_seat_e();
$seat_f_day2_2 = $conn->day2_zone_b_seat_f();
$seat_g_day2_2_l = $conn->day2_zone_b_seat_g_l();
$seat_g_day2_2_r = $conn->day2_zone_b_seat_g_r();
$seat_h_day2_2_l = $conn->day2_zone_b_seat_h_l();
$seat_h_day2_2_r = $conn->day2_zone_b_seat_h_r();
//Day 1 Zone A
$seat_a_day2_3 = $conn->day2_zone_c_seat_a();
$seat_b_day2_3 = $conn->day2_zone_c_seat_b();
$seat_c_day2_3 = $conn->day2_zone_c_seat_c();
$seat_d_day2_3 = $conn->day2_zone_c_seat_d();
$seat_e_day2_3 = $conn->day2_zone_c_seat_e();
$seat_f_day2_3 = $conn->day2_zone_c_seat_f();
$seat_g_day2_3 = $conn->day2_zone_c_seat_g();
$seat_h_day2_3 = $conn->day2_zone_c_seat_h();
$seat_i_day2_3 = $conn->day2_zone_c_seat_i();

 ?>
<form action="process/seat_process_day1_3_name.php" method="post">
<ul>
  <article class="col-xs-12 wrap_stage" style="margin-top: -30px;">
    <p class="stage" style="font-family: 'Kanit', sans-serif;">วันอาทิตย์ 27 สิงหาคม 2560 เวลา 11.30 - 12.30</p>
  </article>
  <article class="col-xs-12">
    <p style="text-align: center;">STAGE</p>
  </article>

<section class="row col-xs-12">

  <li class="col-xs-3">
    <article class="col-xs-12 wrap_sec_a">
      <article class="col-xs-12">
        <article class="row wrap_in_sec_a">
          <?php
            foreach ($seat_a_day2_1 as $key => $value) {
              $seat_row = $value["seat_day2_zone_a"];
              $seat_num = $value["seat_number_day2_zone_a"];
              $status_seat_round1 = $value["status_one_day2_zone_a"];
              if($status_seat_round1 === '0') {
              ?>
              <input class="check_day2_a_a_1 check_a_a" type="checkbox" name="check_day2_a_a_1_3[]" value="<?php echo $seat_row.$seat_num;?>" id="in_check_a_a_3_<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
              <label class="in_check_a_a" for="in_check_a_a_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
          <?php
            }
            if($status_seat_round1 === '1') {
              ?>
              <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_a_3_<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
              <label class="in_check_a_reserved" for="in_check_a_a_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
              <?php
              }
            if($status_seat_round1 === '2') {
              ?>
              <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_a_3_<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
              <label class="in_check_a_paid" for="in_check_a_a_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
              <?php
              }
            }
           ?>
        </article>
      </article> <!-- row a a -->
      <article class="col-xs-12">
        <article class="row wrap_in_sec_a">
          <?php
            foreach ($seat_b_day2_1 as $key => $value) {
              $seat_row = $value["seat_day2_zone_a"];
              $seat_num = $value["seat_number_day2_zone_a"];
              $status_seat_round1 = $value["status_one_day2_zone_a"];
              if($status_seat_round1 === '0') {
              ?>
              <input class="check_a_a" type="checkbox" name="check_day2_a_b_1_3[]" value="<?php echo $seat_row.$seat_num;?>" id="in_check_a_b_3_<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
              <label class="in_check_a_b" for="in_check_a_b_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
          <?php
              }
              if($status_seat_round1 === '1') {
                ?>
                <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_b_3_<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                <label class="in_check_a_reserved" for="in_check_a_b_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                <?php
              }
              if($status_seat_round1 === '2') {
              ?>
              <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_b_3_<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
              <label class="in_check_a_paid" for="in_check_a_b_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
              <?php
              }
            }
           ?>
        </article>
      </article> <!-- row a b -->
      <article class="col-xs-12">
        <article class="row wrap_in_sec_a">
          <?php
            foreach ($seat_c_day2_1 as $key => $value) {
              $seat_row = $value["seat_day2_zone_a"];
              $seat_num = $value["seat_number_day2_zone_a"];
              $status_seat_round1 = $value["status_one_day2_zone_a"];
              if($status_seat_round1 === '0') {
              ?>
              <input class="check_a_a" type="checkbox" name="check_day2_a_c_1_3[]" value="<?php echo $seat_row.$seat_num;?>" id="in_check_a_c_3_<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
              <label class="in_check_a_c" for="in_check_a_c_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
          <?php
              }
              if($status_seat_round1 === '1') {
              ?>
              <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_c_3_<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
              <label class="in_check_a_reserved" for="in_check_a_c_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
              <?php
              }
              if($status_seat_round1 === '2') {
                ?>
                <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_c_3_<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                <label class="in_check_a_paid" for="in_check_a_c_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                <?php
              }
            }
           ?>
        </article>
      </article> <!-- row a c -->
      <article class="col-xs-12">
        <article class="row wrap_in_sec_a">
          <?php
            foreach ($seat_d_day2_1 as $key => $value) {
              $seat_row = $value["seat_day2_zone_a"];
              $seat_num = $value["seat_number_day2_zone_a"];
              $status_seat_round1 = $value["status_one_day2_zone_a"];
              if($status_seat_round1 === '0') {
              ?>
              <input class="check_a_a" type="checkbox" name="check_day2_a_d_1_3[]" value="<?php echo $seat_row.$seat_num;?>" id="in_check_a_d_3_<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
              <label class="in_check_a_d" for="in_check_a_d_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
          <?php
              }
              if($status_seat_round1 === '1') {
                ?>
                <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_d_3_<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                <label class="in_check_a_reserved" for="in_check_a_d_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                <?php
              }
              if($status_seat_round1 === '2') {
                ?>
                <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_d_3_<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                <label class="in_check_a_paid" for="in_check_a_d_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                <?php
              }
            }
           ?>
        </article>
      </article> <!-- row a d -->
      <article class="col-xs-12">
        <article class="row wrap_in_sec_a">
          <?php
            foreach ($seat_e_day2_1 as $key => $value) {
              $seat_row = $value["seat_day2_zone_a"];
              $seat_num = $value["seat_number_day2_zone_a"];
              $status_seat_round1 = $value["status_one_day2_zone_a"];
              if($status_seat_round1 === '0') {
              ?>
              <input class="check_a_a" type="checkbox" name="check_day2_a_e_1_3[]" value="<?php echo $seat_row.$seat_num;?>" id="in_check_a_e_3_<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
              <label class="in_check_a_e" for="in_check_a_e_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
          <?php
              }
              if($status_seat_round1 === '1') {
              ?>
              <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_e_3_<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
              <label class="in_check_a_reserved" for="in_check_a_e_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
              <?php
              }
              if($status_seat_round1 === '2') {
              ?>
              <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_e_3_<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
              <label class="in_check_a_paid" for="in_check_a_e_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
              <?php
              }
            }
           ?>
        </article>
      </article> <!-- row a e -->
      <article class="col-xs-12">
        <article class="row wrap_in_sec_a">
          <?php
            foreach ($seat_f_day2_1 as $key => $value) {
              $seat_row = $value["seat_day2_zone_a"];
              $seat_num = $value["seat_number_day2_zone_a"];
              $status_seat_round1 = $value["status_one_day2_zone_a"];
              if($status_seat_round1 === '0') {
              ?>
              <input class="check_a_a" type="checkbox" name="check_day2_a_f_1_3[]" value="<?php echo $seat_row.$seat_num;?>" id="in_check_a_f_3_<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
              <label class="in_check_a_f" for="in_check_a_f_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
          <?php
              }
              if($status_seat_round1 === '1') {
                ?>
              <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_f_3_<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
              <label class="in_check_a_reserved" for="in_check_a_f_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                <?php
              }
              if($status_seat_round1 === '2') {
                ?>
                <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_f_3_<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                <label class="in_check_a_paid" for="in_check_a_f_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                <?php
              }
            }
           ?>
        </article>
      </article> <!-- row a f -->
      <article class="col-xs-12">
        <article class="row wrap_in_sec_a">
          <?php
            foreach ($seat_g_day2_1 as $key => $value) {
              $seat_row = $value["seat_day2_zone_a"];
              $seat_num = $value["seat_number_day2_zone_a"];
              $status_seat_round1 = $value["status_one_day2_zone_a"];
              if($status_seat_round1 === '0') {
              ?>
              <input class="check_a_a" type="checkbox" name="check_day2_a_g_1_3[]" value="<?php echo $seat_row.$seat_num;?>" id="in_check_a_g_3_<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
              <label class="in_check_a_g" for="in_check_a_g_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
          <?php
              }
              if($status_seat_round1 === '1') {
                ?>
                <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_g_3_<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                <label class="in_check_a_reserved" for="in_check_a_g_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                <?php
              }
              if($status_seat_round1 === '2') {
                ?>
                <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_g_3_<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                <label class="in_check_a_paid" for="in_check_a_g_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                <?php
              }
            }
           ?>
        </article>
      </article> <!-- row a g -->
      <article class="col-xs-12">
        <article class="row wrap_in_sec_a">
          <?php
            foreach ($seat_h_day2_1 as $key => $value) {
              $seat_row = $value["seat_day2_zone_a"];
              $seat_num = $value["seat_number_day2_zone_a"];
              $status_seat_round1 = $value["status_one_day2_zone_a"];
              if($status_seat_round1 === '0') {
              ?>
              <input class="check_a_a" type="checkbox" name="check_day2_a_h_1_3[]" value="<?php echo $seat_row.$seat_num;?>" id="in_check_a_h_3_<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
              <label class="in_check_a_h" for="in_check_a_h_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
          <?php
              }
              if($status_seat_round1 === '1') {
                ?>
                <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_h_3_<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                <label class="in_check_a_reserved" for="in_check_a_h_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                <?php
              }
              if($status_seat_round1 === '2') {
                ?>
                <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_h_3_<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                <label class="in_check_a_paid" for="in_check_a_h_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                <?php
              }
            }
           ?>
        </article>
      </article> <!-- row a h -->
      <article class="col-xs-12">
        <article class="row wrap_in_sec_a">
          <?php
            foreach ($seat_i_day2_1 as $key => $value) {
              $seat_row = $value["seat_day2_zone_a"];
              $seat_num = $value["seat_number_day2_zone_a"];
              $status_seat_round1 = $value["status_one_day2_zone_a"];
              if($status_seat_round1 === '0') {
              ?>
              <input class="check_a_a" type="checkbox" name="check_day2_a_i_1_3[]" value="<?php echo $seat_row.$seat_num;?>" id="in_check_a_i_3_<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
              <label class="in_check_a_i" for="in_check_a_i_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
          <?php
              }
              if($status_seat_round1 === '1') {
                ?>
                <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_i_3_<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                <label class="in_check_a_reserved" for="in_check_a_i_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                <?php
              }
              if($status_seat_round1 === '2') {
                ?>
                <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_i_3_<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                <label class="in_check_a_paid" for="in_check_a_i_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                <?php
              }
            }
           ?>
        </article>
      </article> <!-- row a i -->
    </article>
  </li>
  <li class="col-xs-6">
    <article class="col-xs-12 wrap_sec_b">
      <article class="col-xs-12">
        <article class="wrap_in_sec_b">
            <?php
              foreach ($seat_a_day2_2 as $key => $value) {
                $seat_row = $value["seat_day2_zone_b"];
                $seat_num = $value["seat_number_day2_zone_b"];
                $status_seat_round1 = $value["status_one_day2_zone_b"];
                if($status_seat_round1 === '0') {
                ?>
                <input class="check_a_a" type="checkbox" name="check_day2_b_a_1_3[]" value="<?php echo $seat_row.$seat_num;?>" id="in_check_b_a_3_<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
                <label class="in_check_a_a" for="in_check_b_a_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
            <?php
                }
                if($status_seat_round1 === '1') {
                  ?>
                  <input class="check_a_a" type="checkbox" name="" value="" id="in_check_b_a_3_<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                  <label class="in_check_a_reserved" for="in_check_b_a_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                  <?php
                }
                if($status_seat_round1 === '2') {
                  ?>
                  <input class="check_a_a" type="checkbox" name="" value="" id="in_check_b_a_3_<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                  <label class="in_check_a_paid" for="in_check_b_a_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                  <?php
                }
              }
             ?>
        </article>
      </article> <!-- row b a -->
      <article class="col-xs-12">
        <article class="wrap_in_sec_b">
            <?php
              foreach ($seat_b_day2_2 as $key => $value) {
                $seat_row = $value["seat_day2_zone_b"];
                $seat_num = $value["seat_number_day2_zone_b"];
                $status_seat_round1 = $value["status_one_day2_zone_b"];
                if($status_seat_round1 === '0') {
                ?>
                <input class="check_a_a" type="checkbox" name="check_day2_b_b_1_3[]" value="<?php echo $seat_row.$seat_num;?>" id="in_check_b_b_3_<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
                <label class="in_check_a_b" for="in_check_b_b_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                <?php
                    }
                    if($status_seat_round1 === '1') {
                      ?>
                      <input class="check_a_a" type="checkbox" name="" value="" id="in_check_b_b_3_<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                      <label class="in_check_a_reserved" for="in_check_b_b_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                      <?php
                    }
                    if($status_seat_round1 === '2') {
                      ?>
                      <input class="check_a_a" type="checkbox" name="" value="" id="in_check_b_b_3_<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                      <label class="in_check_a_paid" for="in_check_b_b_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                      <?php
                    }
                  }
                 ?>
        </article>
      </article> <!-- row b b -->
      <article class="col-xs-12">
        <article class="wrap_in_sec_b">
            <?php
              foreach ($seat_c_day2_2 as $key => $value) {
                $seat_row = $value["seat_day2_zone_b"];
                $seat_num = $value["seat_number_day2_zone_b"];
                $status_seat_round1 = $value["status_one_day2_zone_b"];
                if($status_seat_round1 === '0') {
                ?>
                <input class="check_a_a" type="checkbox" name="check_day2_b_c_1_3[]" value="<?php echo $seat_row.$seat_num;?>" id="in_check_b_c_3_<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
                <label class="in_check_a_c" for="in_check_b_c_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                <?php
                    }
                    if($status_seat_round1 === '1') {
                      ?>
                      <input class="check_a_a" type="checkbox" name="" value="" id="in_check_b_c_3_<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                      <label class="in_check_a_reserved" for="in_check_b_c_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                      <?php
                    }
                    if($status_seat_round1 === '2') {
                      ?>
                      <input class="check_a_a" type="checkbox" name="" value="" id="in_check_b_c_3_<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                      <label class="in_check_a_paid" for="in_check_b_c_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                      <?php
                    }
                  }
                 ?>
        </article>
      </article> <!-- row b c -->
      <article class="col-xs-12">
        <article class="wrap_in_sec_b">
            <?php
              foreach ($seat_d_day2_2 as $key => $value) {
                $seat_row = $value["seat_day2_zone_b"];
                $seat_num = $value["seat_number_day2_zone_b"];
                $status_seat_round1 = $value["status_one_day2_zone_b"];
                if($status_seat_round1 === '0') {
                ?>
                <input class="check_a_a" type="checkbox" name="check_day2_b_d_1_3[]" value="<?php echo $seat_row.$seat_num;?>" id="in_check_b_d_3_<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
                <label class="in_check_a_d" for="in_check_b_d_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                <?php
                    }
                    if($status_seat_round1 === '1') {
                      ?>
                      <input class="check_a_a" type="checkbox" name="" value="" id="in_check_b_d_3_<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                      <label class="in_check_a_reserved" for="in_check_b_d_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                      <?php
                    }
                    if($status_seat_round1 === '2') {
                      ?>
                      <input class="check_a_a" type="checkbox" name="" value="" id="in_check_b_d_3_<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                      <label class="in_check_a_paid" for="in_check_b_d_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                      <?php
                    }
                  }
                 ?>
        </article>
      </article> <!-- row b d -->
      <article class="col-xs-12">
        <article class="wrap_in_sec_b">
            <?php
              foreach ($seat_e_day2_2 as $key => $value) {
                $seat_row = $value["seat_day2_zone_b"];
                $seat_num = $value["seat_number_day2_zone_b"];
                $status_seat_round1 = $value["status_one_day2_zone_b"];
                if($status_seat_round1 === '0') {
                ?>
                <input class="check_a_a" type="checkbox" name="check_day2_b_e_1_3[]" value="<?php echo $seat_row.$seat_num;?>" id="in_check_b_e_3_<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
                <label class="in_check_a_e" for="in_check_b_e_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                <?php
                    }
                    if($status_seat_round1 === '1') {
                      ?>
                      <input class="check_a_a" type="checkbox" name="" value="" id="in_check_b_e_3_<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                      <label class="in_check_a_reserved" for="in_check_b_e_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                      <?php
                    }
                    if($status_seat_round1 === '2') {
                      ?>
                      <input class="check_a_a" type="checkbox" name="" value="" id="in_check_b_e_3_<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                      <label class="in_check_a_paid" for="in_check_b_e_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                      <?php
                    }
                  }
                 ?>
        </article>
      </article> <!-- row b e -->
      <article class="col-xs-12">
        <article class="wrap_in_sec_b">
            <?php
              foreach ($seat_f_day2_2 as $key => $value) {
                $seat_row = $value["seat_day2_zone_b"];
                $seat_num = $value["seat_number_day2_zone_b"];
                $status_seat_round1 = $value["status_one_day2_zone_b"];
                if($status_seat_round1 === '0') {
                ?>
                <input class="check_a_a" type="checkbox" name="check_day2_b_f_1_3[]" value="<?php echo $seat_row.$seat_num;?>" id="in_check_b_f_3_<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
                <label class="in_check_a_f" for="in_check_b_f_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                <?php
                    }
                    if($status_seat_round1 === '1') {
                      ?>
                      <input class="check_a_a" type="checkbox" name="" value="" id="in_check_b_f_3_<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                      <label class="in_check_a_reserved" for="in_check_b_f_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                      <?php
                    }
                    if($status_seat_round1 === '2') {
                      ?>
                      <input class="check_a_a" type="checkbox" name="" value="" id="in_check_b_f_3_<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                      <label class="in_check_a_paid" for="in_check_b_f_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                      <?php
                    }
                  }
                 ?>
        </article>
      </article> <!-- row b f -->
      <article class="col-xs-12">
        <article class="col-xs-4">
          <article class="wrap_in_sec_b">
              <?php
                foreach ($seat_g_day2_2_l as $key => $value) {
                  $seat_row = $value["seat_day2_zone_b"];
                  $seat_num = $value["seat_number_day2_zone_b"];
                  $status_seat_round1 = $value["status_one_day2_zone_b"];
                  if($status_seat_round1 === '0') {
                  ?>
                  <input class="check_a_a" type="checkbox" name="check_day2_b_g_l_1_3[]" value="<?php echo $seat_row.$seat_num;?>" id="in_check_b_g_l_3_<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
                  <label class="in_check_a_g" for="in_check_b_g_l_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                  <?php
                      }
                      if($status_seat_round1 === '1') {
                        ?>
                        <input class="check_a_a" type="checkbox" name="" value="" id="in_check_b_g_l_3_<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                        <label class="in_check_a_reserved" for="in_check_b_g_l_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                        <?php
                      }
                      if($status_seat_round1 === '2') {
                        ?>
                        <input class="check_a_a" type="checkbox" name="" value="" id="in_check_b_g_l_3_<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                        <label class="in_check_a_paid" for="in_check_b_g_l_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                        <?php
                      }
                    }
                   ?>
          </article>
        </article> <!-- row b g_l -->
        <article class="col-xs-4">
          <p class="p_in_sec_b">Control</p>
        </article> <!-- control room -->
        <article class="col-xs-4">
          <article class="wrap_in_sec_b">
              <?php
                foreach ($seat_g_day2_2_r as $key => $value) {
                  $seat_row = $value["seat_day2_zone_b"];
                  $seat_num = $value["seat_number_day2_zone_b"];
                  $status_seat_round1 = $value["status_one_day2_zone_b"];
                  if($status_seat_round1 === '0') {
                  ?>
                  <input class="check_a_a" type="checkbox" name="check_day2_b_g_r_1_3[]" value="<?php echo $seat_row.$seat_num;?>" id="in_check_b_g_r_3_<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
                  <label class="in_check_a_g" for="in_check_b_g_r_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                  <?php
                      }
                      if($status_seat_round1 === '1') {
                        ?>
                        <input class="check_a_a" type="checkbox" name="" value="" id="in_check_b_g_r_3_<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                        <label class="in_check_a_reserved" for="in_check_b_g_r_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                        <?php
                      }
                      if($status_seat_round1 === '2') {
                        ?>
                        <input class="check_a_a" type="checkbox" name="" value="" id="in_check_b_g_r_3_<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                        <label class="in_check_a_paid" for="in_check_b_g_r_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                        <?php
                      }
                    }
                   ?>
          </article>
        </article> <!-- row b g_r -->
      </article><!-- wrap row b g -->
      <article class="col-xs-12">
        <article class="col-xs-4">
          <article class="wrap_in_sec_b">
              <?php
                foreach ($seat_h_day2_2_l as $key => $value) {
                  $seat_row = $value["seat_day2_zone_b"];
                  $seat_num = $value["seat_number_day2_zone_b"];
                  $status_seat_round1 = $value["status_one_day2_zone_b"];
                  if($status_seat_round1 === '0') {
                  ?>
                  <input class="check_a_a" type="checkbox" name="check_day2_b_h_l_1_3[]" value="<?php echo $seat_row.$seat_num;?>" id="in_check_b_h_l_3_<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
                  <label class="in_check_a_h" for="in_check_b_h_l_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                  <?php
                      }
                      if($status_seat_round1 === '1') {
                        ?>
                        <input class="check_a_a" type="checkbox" name="" value="" id="in_check_b_h_l_3_<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                        <label class="in_check_a_reserved" for="in_check_b_h_l_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                        <?php
                      }
                      if($status_seat_round1 === '2') {
                        ?>
                        <input class="check_a_a" type="checkbox" name="" value="" id="in_check_b_h_l_3_<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                        <label class="in_check_a_paid" for="in_check_b_h_l_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                        <?php
                      }
                    }
                   ?>
          </article>
        </article> <!-- row b h_l -->
        <article class="col-xs-4">
          <p class="p_in_sec_b">Room</p>
        </article> <!-- control room -->
        <article class="col-xs-4">
          <article class="wrap_in_sec_b">
              <?php
                foreach ($seat_h_day2_2_r as $key => $value) {
                  $seat_row = $value["seat_day2_zone_b"];
                  $seat_num = $value["seat_number_day2_zone_b"];
                  $status_seat_round1 = $value["status_one_day2_zone_b"];
                  if($status_seat_round1 === '0') {
                  ?>
                  <input class="check_a_a" type="checkbox" name="check_day2_b_h_r_1_3[]" value="<?php echo $seat_row.$seat_num;?>" id="in_check_b_h_r_3_<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
                  <label class="in_check_a_h" for="in_check_b_h_r_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                  <?php
                      }
                      if($status_seat_round1 === '1') {
                        ?>
                        <input class="check_a_a" type="checkbox" name="" value="" id="in_check_b_h_r_3_<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                        <label class="in_check_a_reserved" for="in_check_b_h_r_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                        <?php
                      }
                      if($status_seat_round1 === '2') {
                        ?>
                        <input class="check_a_a" type="checkbox" name="" value="" id="in_check_b_h_r_3_<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                        <label class="in_check_a_paid" for="in_check_b_h_r_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                        <?php
                      }
                    }
                   ?>
          </article>
        </article> <!-- row b h_r -->
      </article> <!-- wrap row b h -->

    </article> <!-- wrap_sec_b -->
  </li>
  <li class="col-xs-3">
    <article class="col-xs-12 wrap_sec_c">
      <article class="col-xs-12">
        <article class="row wrap_in_sec_a">
          <?php
            foreach ($seat_a_day2_3 as $key => $value) {
              $seat_row = $value["seat_day2_zone_c"];
              $seat_num = $value["seat_number_day2_zone_c"];
              $status_seat_round1 = $value["status_one_day2_zone_c"];
              if($status_seat_round1 === '0') {
              ?>
              <input class="check_a_a" type="checkbox" name="check_day2_c_a_1_3[]" value="<?php echo $seat_row.$seat_num;?>" id="in_check_c_a_3_<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
              <label class="in_check_a_a" for="in_check_c_a_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
              <?php
                  }
                  if($status_seat_round1 === '1') {
                    ?>
                    <input class="check_a_a" type="checkbox" name="" value="" id="in_check_c_a_3_<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                    <label class="in_check_a_reserved" for="in_check_c_a_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                    <?php
                  }
                  if($status_seat_round1 === '2') {
                    ?>
                    <input class="check_a_a" type="checkbox" name="" value="" id="in_check_c_a_3_<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                    <label class="in_check_a_paid" for="in_check_c_a_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                    <?php
                  }
                }
               ?>
        </article>
      </article> <!-- row c a -->
      <article class="col-xs-12">
        <article class="row wrap_in_sec_a">
          <?php
            foreach ($seat_b_day2_3 as $key => $value) {
              $seat_row = $value["seat_day2_zone_c"];
              $seat_num = $value["seat_number_day2_zone_c"];
              $status_seat_round1 = $value["status_one_day2_zone_c"];
              if($status_seat_round1 === '0') {
              ?>
              <input class="check_a_a" type="checkbox" name="check_day2_c_b_1_3[]" value="<?php echo $seat_row.$seat_num;?>" id="in_check_c_b_3_<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
              <label class="in_check_a_b" for="in_check_c_b_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
              <?php
                  }
                  if($status_seat_round1 === '1') {
                    ?>
                    <input class="check_a_a" type="checkbox" name="" value="" id="in_check_c_b_3_<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                    <label class="in_check_a_reserved" for="in_check_c_b_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                    <?php
                  }
                  if($status_seat_round1 === '2') {
                    ?>
                    <input class="check_a_a" type="checkbox" name="" value="" id="in_check_c_b_3_<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                    <label class="in_check_a_paid" for="in_check_c_b_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                    <?php
                  }
                }
               ?>
        </article>
      </article> <!-- row c b -->
      <article class="col-xs-12">
        <article class="row wrap_in_sec_a">
          <?php
            foreach ($seat_c_day2_3 as $key => $value) {
              $seat_row = $value["seat_day2_zone_c"];
              $seat_num = $value["seat_number_day2_zone_c"];
              $status_seat_round1 = $value["status_one_day2_zone_c"];
              if($status_seat_round1 === '0') {
              ?>
              <input class="check_a_a" type="checkbox" name="check_day2_c_c_1_3[]" value="<?php echo $seat_row.$seat_num;?>" id="in_check_c_c_3_<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
              <label class="in_check_a_c" for="in_check_c_c_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
              <?php
                  }
                  if($status_seat_round1 === '1') {
                    ?>
                    <input class="check_a_a" type="checkbox" name="" value="" id="in_check_c_c_3_<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                    <label class="in_check_a_reserved" for="in_check_c_c_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                    <?php
                  }
                  if($status_seat_round1 === '2') {
                    ?>
                    <input class="check_a_a" type="checkbox" name="" value="" id="in_check_c_c_3_<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                    <label class="in_check_a_paid" for="in_check_c_c_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                    <?php
                  }
                }
               ?>
        </article>
      </article> <!-- row c c -->
      <article class="col-xs-12">
        <article class="row wrap_in_sec_a">
          <?php
            foreach ($seat_d_day2_3 as $key => $value) {
              $seat_row = $value["seat_day2_zone_c"];
              $seat_num = $value["seat_number_day2_zone_c"];
              $status_seat_round1 = $value["status_one_day2_zone_c"];
              if($status_seat_round1 === '0') {
              ?>
              <input class="check_a_a" type="checkbox" name="check_day2_c_d_1_3[]" value="<?php echo $seat_row.$seat_num;?>" id="in_check_c_d_3_<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
              <label class="in_check_a_d" for="in_check_c_d_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
              <?php
                  }
                  if($status_seat_round1 === '1') {
                    ?>
                    <input class="check_a_a" type="checkbox" name="" value="" id="in_check_c_d_3_<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                    <label class="in_check_a_reserved" for="in_check_c_d_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                    <?php
                  }
                  if($status_seat_round1 === '2') {
                    ?>
                    <input class="check_a_a" type="checkbox" name="" value="" id="in_check_c_d_3_<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                    <label class="in_check_a_paid" for="in_check_c_d_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                    <?php
                  }
                }
               ?>
        </article>
      </article> <!-- row c d -->
      <article class="col-xs-12">
        <article class="row wrap_in_sec_a">
          <?php
            foreach ($seat_e_day2_3 as $key => $value) {
              $seat_row = $value["seat_day2_zone_c"];
              $seat_num = $value["seat_number_day2_zone_c"];
              $status_seat_round1 = $value["status_one_day2_zone_c"];
              if($status_seat_round1 === '0') {
              ?>
              <input class="check_a_a" type="checkbox" name="check_day2_c_e_1_3[]" value="<?php echo $seat_row.$seat_num;?>" id="in_check_c_e_3_<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
              <label class="in_check_a_e" for="in_check_c_e_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
              <?php
                  }
                  if($status_seat_round1 === '1') {
                    ?>
                    <input class="check_a_a" type="checkbox" name="" value="" id="in_check_c_e_3_<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                    <label class="in_check_a_reserved" for="in_check_c_e_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                    <?php
                  }
                  if($status_seat_round1 === '2') {
                    ?>
                    <input class="check_a_a" type="checkbox" name="" value="" id="in_check_c_e_3_<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                    <label class="in_check_a_paid" for="in_check_c_e_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                    <?php
                  }
                }
               ?>
        </article>
      </article> <!-- row c e -->
      <article class="col-xs-12">
        <article class="row wrap_in_sec_a">
          <?php
            foreach ($seat_f_day2_3 as $key => $value) {
              $seat_row = $value["seat_day2_zone_c"];
              $seat_num = $value["seat_number_day2_zone_c"];
              $status_seat_round1 = $value["status_one_day2_zone_c"];
              if($status_seat_round1 === '0') {
              ?>
              <input class="check_a_a" type="checkbox" name="check_day2_c_f_1_3[]" value="<?php echo $seat_row.$seat_num;?>" id="in_check_c_f_3_<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
              <label class="in_check_a_f" for="in_check_c_f_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
              <?php
                  }
                  if($status_seat_round1 === '1') {
                    ?>
                    <input class="check_a_a" type="checkbox" name="" value="" id="in_check_c_f_3_<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                    <label class="in_check_a_reserved" for="in_check_c_f_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                    <?php
                  }
                  if($status_seat_round1 === '2') {
                    ?>
                    <input class="check_a_a" type="checkbox" name="" value="" id="in_check_c_f_3_<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                    <label class="in_check_a_paid" for="in_check_c_f_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                    <?php
                  }
                }
               ?>
        </article>
      </article> <!-- row a f -->
      <article class="col-xs-12">
        <article class="row wrap_in_sec_a">
          <?php
            foreach ($seat_g_day2_3 as $key => $value) {
              $seat_row = $value["seat_day2_zone_c"];
              $seat_num = $value["seat_number_day2_zone_c"];
              $status_seat_round1 = $value["status_one_day2_zone_c"];
              if($status_seat_round1 === '0') {
              ?>
              <input class="check_a_a" type="checkbox" name="check_day2_c_g_1_3[]" value="<?php echo $seat_row.$seat_num;?>" id="in_check_c_g_3_<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
              <label class="in_check_a_g" for="in_check_c_g_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
              <?php
                  }
                  if($status_seat_round1 === '1') {
                    ?>
                    <input class="check_a_a" type="checkbox" name="" value="" id="in_check_c_g_3_<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                    <label class="in_check_a_reserved" for="in_check_c_g_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                    <?php
                  }
                  if($status_seat_round1 === '2') {
                    ?>
                    <input class="check_a_a" type="checkbox" name="" value="" id="in_check_c_g_3_<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                    <label class="in_check_a_paid" for="in_check_c_g_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                    <?php
                  }
                }
               ?>
        </article>
      </article> <!-- row c g -->
      <article class="col-xs-12">
        <article class="row wrap_in_sec_a">
          <?php
            foreach ($seat_h_day2_3 as $key => $value) {
              $seat_row = $value["seat_day2_zone_c"];
              $seat_num = $value["seat_number_day2_zone_c"];
              $status_seat_round1 = $value["status_one_day2_zone_c"];
              if($status_seat_round1 === '0') {
              ?>
              <input class="check_a_a" type="checkbox" name="check_day2_c_h_1_3[]" value="<?php echo $seat_row.$seat_num;?>" id="in_check_c_h_3_<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
              <label class="in_check_a_h" for="in_check_c_h_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
              <?php
                  }
                  if($status_seat_round1 === '1') {
                    ?>
                    <input class="check_a_a" type="checkbox" name="" value="" id="in_check_c_h_3_<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                    <label class="in_check_a_reserved" for="in_check_c_h_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                    <?php
                  }
                  if($status_seat_round1 === '2') {
                    ?>
                    <input class="check_a_a" type="checkbox" name="" value="" id="in_check_c_h_3_<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                    <label class="in_check_a_paid" for="in_check_c_h_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                    <?php
                  }
                }
               ?>
        </article>
      </article> <!-- row c h -->
      <article class="col-xs-12">
        <article class="row wrap_in_sec_a">
          <?php
            foreach ($seat_i_day2_3 as $key => $value) {
              $seat_row = $value["seat_day2_zone_c"];
              $seat_num = $value["seat_number_day2_zone_c"];
              $status_seat_round1 = $value["status_one_day2_zone_c"];
              if($status_seat_round1 === '0') {
              ?>
              <input class="check_a_a" type="checkbox" name="check_day2_c_i_1_3[]" value="<?php echo $seat_row.$seat_num;?>" id="in_check_c_i_3_<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
              <label class="in_check_a_i" for="in_check_c_i_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
              <?php
                  }
                  if($status_seat_round1 === '1') {
                    ?>
                    <input class="check_a_a" type="checkbox" name="" value="" id="in_check_c_i_3_<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                    <label class="in_check_a_reserved" for="in_check_c_i_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                    <?php
                  }
                  if($status_seat_round1 === '2') {
                    ?>
                    <input class="check_a_a" type="checkbox" name="" value="" id="in_check_c_i_3_<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                    <label class="in_check_a_paid" for="in_check_c_i_3_<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                    <?php
                  }
                }
               ?>
        </article>
      </article> <!-- row c i -->
    </article>
  </li>
</ul>
</section> <!-- row col-xs-12 -->
<article class="col-xs-12 wrap_bank_sec">
  <article class="col-md-offset-4 col-md-4" style="text-align: center;">
    <h2 style="text-align: center; font-family: 'Kanit', sans-serif;">ชำระเงินได้ที่</h2>
    <h3>ธนาคารไทยพาณิชย์</h3>
    <h4>สาขา : สยามพารากอน</h4>
    <h4>ชื่อบัญชี : น.ส.ชิชญุ เสรีสิริรักษ์ หรือ น.ส.จารุกุล สงวนไทร์</h4>
    <h4>หมายเลขบัญชี : 218-259290-9</h4>
    <p>**กรุณาชำระเงินภายใน 2 วันหลังจากวันจอง</p>
  </article>
</article>
<section class="row">
  <article class="col-xs-12 wrap_personal">
    <h2>ข้อมูลผู้ใช้งาน</h2>
    <article class="col-xs-12 col-md-offset-4 col-md-4 wrap_box_user">
      <span class="col-xs-12 col-md-4 mar_text"><p>ชื่อ - นามสกุล</p></span>
      <input class="col-xs-12 col-md-8 input_box_name" id="name_user" type="text" name="name_user_3_" value="">
      <br>
      <span class="col-xs-12 col-md-4 mar_text"><p>ชืื่อเล่น</p></span>
      <input class="col-xs-12 col-md-8 input_box_nick" type="text" id="nickname_user" name="nickname_3_" value="">
      <br>
      <span class="col-xs-12 col-md-4 mar_text"><p>เบอร์ติดต่อ</p></span>
      <input class="col-xs-12 col-md-8 input_box_tel" type="text" maxlength="10" name="tel_3_" value="">
      <br>
      <span class="col-xs-12 col-md-4 mar_text"><p>Email</p></span>
      <input class="col-xs-12 col-md-8 input_box_mail" type="email" name="email_3_" value="">
    </article>
    <article class="col-xs-12">
      <button id="reserved_seat" class="col-xs-12 col-md-offset-4 col-md-4 btn_reserved" type="submit" name="button">Reserved</button>
    </article>
  </article>
</section>
</form>
