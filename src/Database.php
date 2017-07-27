<?php

namespace ictslipakorn;
require_once "config.php";

Class Database {

  private $conn;

  public function __construct() {
    $this->conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) OR DIE("Connected Error!");
    mysqli_set_charset($this->conn, "utf8");
  }

// Day 1 zone A
  public function day1_zone_a_seat_a() {
    $sql = "SELECT * FROM day1_zone_a WHERE seat_day1_zone_a = 'A' ";
    $query_day1_zone_a_seat_a = mysqli_query($this->conn, $sql);

    return $query_day1_zone_a_seat_a;
  }
  public function day1_zone_a_seat_b() {
    $sql = "SELECT * FROM day1_zone_a WHERE seat_day1_zone_a = 'B' ";
    $query_day1_zone_a_seat_b = mysqli_query($this->conn, $sql);

    return $query_day1_zone_a_seat_b;
  }
  public function day1_zone_a_seat_c() {
    $sql = "SELECT * FROM day1_zone_a WHERE seat_day1_zone_a = 'C' ";
    $query_day1_zone_a_seat_c = mysqli_query($this->conn, $sql);

    return $query_day1_zone_a_seat_c;
  }
  public function day1_zone_a_seat_d() {
    $sql = "SELECT * FROM day1_zone_a WHERE seat_day1_zone_a = 'D' ";
    $query_day1_zone_a_seat_d = mysqli_query($this->conn, $sql);

    return $query_day1_zone_a_seat_d;
  }
  public function day1_zone_a_seat_e() {
    $sql = "SELECT * FROM day1_zone_a WHERE seat_day1_zone_a = 'E' ";
    $query_day1_zone_a_seat_e = mysqli_query($this->conn, $sql);

    return $query_day1_zone_a_seat_e;
  }
  public function day1_zone_a_seat_f() {
    $sql = "SELECT * FROM day1_zone_a WHERE seat_day1_zone_a = 'F' ";
    $query_day1_zone_a_seat_f = mysqli_query($this->conn, $sql);

    return $query_day1_zone_a_seat_f;
  }
  public function day1_zone_a_seat_g() {
    $sql = "SELECT * FROM day1_zone_a WHERE seat_day1_zone_a = 'G' ";
    $query_day1_zone_a_seat_g = mysqli_query($this->conn, $sql);

    return $query_day1_zone_a_seat_g;
  }
  public function day1_zone_a_seat_h() {
    $sql = "SELECT * FROM day1_zone_a WHERE seat_day1_zone_a = 'H' ";
    $query_day1_zone_a_seat_h = mysqli_query($this->conn, $sql);

    return $query_day1_zone_a_seat_h;
  }
  public function day1_zone_a_seat_i() {
    $sql = "SELECT * FROM day1_zone_a WHERE seat_day1_zone_a = 'I' ";
    $query_day1_zone_a_seat_i = mysqli_query($this->conn, $sql);

    return $query_day1_zone_a_seat_i;
  }

  // Day 1 zone B
  public function day1_zone_b_seat_a() {
    $sql = "SELECT * FROM day1_zone_b WHERE seat_day1_zone_b = 'A' ";
    $query_day1_zone_b_seat_a = mysqli_query($this->conn, $sql);

    return $query_day1_zone_b_seat_a;
  }
  public function day1_zone_b_seat_b() {
    $sql = "SELECT * FROM day1_zone_b WHERE seat_day1_zone_b = 'B' ";
    $query_day1_zone_b_seat_b = mysqli_query($this->conn, $sql);

    return $query_day1_zone_b_seat_b;
  }
  public function day1_zone_b_seat_c() {
    $sql = "SELECT * FROM day1_zone_b WHERE seat_day1_zone_b = 'C' ";
    $query_day1_zone_b_seat_c = mysqli_query($this->conn, $sql);

    return $query_day1_zone_b_seat_c;
  }
  public function day1_zone_b_seat_d() {
    $sql = "SELECT * FROM day1_zone_b WHERE seat_day1_zone_b = 'D' ";
    $query_day1_zone_b_seat_d = mysqli_query($this->conn, $sql);

    return $query_day1_zone_b_seat_d;
  }
  public function day1_zone_b_seat_e() {
    $sql = "SELECT * FROM day1_zone_b WHERE seat_day1_zone_b = 'E' ";
    $query_day1_zone_b_seat_e = mysqli_query($this->conn, $sql);

    return $query_day1_zone_b_seat_e;
  }
  public function day1_zone_b_seat_f() {
    $sql = "SELECT * FROM day1_zone_b WHERE seat_day1_zone_b = 'F' ";
    $query_day1_zone_b_seat_f = mysqli_query($this->conn, $sql);

    return $query_day1_zone_b_seat_f;
  }
  public function day1_zone_b_seat_g_l() {
    $sql = "SELECT * FROM day1_zone_b WHERE seat_day1_zone_b = 'G' LIMIT 5";
    $query_day1_zone_b_seat_g = mysqli_query($this->conn, $sql);

    return $query_day1_zone_b_seat_g;
  }
  public function day1_zone_b_seat_g_r() {
    $sql = "SELECT * FROM day1_zone_b WHERE seat_day1_zone_b = 'G' AND seat_number_day1_zone_b >= 18 LIMIT 4";
    $query_day1_zone_b_seat_g = mysqli_query($this->conn, $sql);

    return $query_day1_zone_b_seat_g;
  }
  public function day1_zone_b_seat_h_l() {
    $sql = "SELECT * FROM day1_zone_b WHERE seat_day1_zone_b = 'H' LIMIT 5";
    $query_day1_zone_b_seat_h_l = mysqli_query($this->conn, $sql);

    return $query_day1_zone_b_seat_h_l;
  }
  public function day1_zone_b_seat_h_r() {
    $sql = "SELECT * FROM day1_zone_b WHERE seat_day1_zone_b = 'H' AND seat_number_day1_zone_b >= 18 LIMIT 4";
    $query_day1_zone_b_seat_h_r = mysqli_query($this->conn, $sql);

    return $query_day1_zone_b_seat_h_r;
  }
// Zone C
public function day1_zone_c_seat_a() {
  $sql = "SELECT * FROM day1_zone_c WHERE seat_day1_zone_c = 'A' ";
  $query_day1_zone_c_seat_a = mysqli_query($this->conn, $sql);

  return $query_day1_zone_c_seat_a;
}
public function day1_zone_c_seat_b() {
  $sql = "SELECT * FROM day1_zone_c WHERE seat_day1_zone_c = 'B' ";
  $query_day1_zone_c_seat_b = mysqli_query($this->conn, $sql);

  return $query_day1_zone_c_seat_b;
}
public function day1_zone_c_seat_c() {
  $sql = "SELECT * FROM day1_zone_c WHERE seat_day1_zone_c = 'C' ";
  $query_day1_zone_c_seat_c = mysqli_query($this->conn, $sql);

  return $query_day1_zone_c_seat_c;
}
public function day1_zone_c_seat_d() {
  $sql = "SELECT * FROM day1_zone_c WHERE seat_day1_zone_c = 'D' ";
  $query_day1_zone_c_seat_d = mysqli_query($this->conn, $sql);

  return $query_day1_zone_c_seat_d;
}
public function day1_zone_c_seat_e() {
  $sql = "SELECT * FROM day1_zone_c WHERE seat_day1_zone_c = 'E' ";
  $query_day1_zone_c_seat_e = mysqli_query($this->conn, $sql);

  return $query_day1_zone_c_seat_e;
}
public function day1_zone_c_seat_f() {
  $sql = "SELECT * FROM day1_zone_c WHERE seat_day1_zone_c = 'F' ";
  $query_day1_zone_c_seat_f = mysqli_query($this->conn, $sql);

  return $query_day1_zone_c_seat_f;
}
public function day1_zone_c_seat_g() {
  $sql = "SELECT * FROM day1_zone_c WHERE seat_day1_zone_c = 'G' ";
  $query_day1_zone_c_seat_g = mysqli_query($this->conn, $sql);

  return $query_day1_zone_c_seat_g;
}
public function day1_zone_c_seat_h() {
  $sql = "SELECT * FROM day1_zone_c WHERE seat_day1_zone_c = 'H' ";
  $query_day1_zone_c_seat_h = mysqli_query($this->conn, $sql);

  return $query_day1_zone_c_seat_h;
}
public function day1_zone_c_seat_i() {
  $sql = "SELECT * FROM day1_zone_c WHERE seat_day1_zone_c = 'I' ";
  $query_day1_zone_c_seat_i = mysqli_query($this->conn, $sql);

  return $query_day1_zone_c_seat_i;
}

}

 ?>
