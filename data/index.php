<?php

// ตรวจสอบค่าที่ส่งมาจากฟอร์ม
if ($_POST) {
  // รับค่าเวลาจากฟอร์ม
  $hour = $_POST["hour"];
  $minute = $_POST["minute"];
  $second = $_POST["second"];

  // แสดงค่าเวลา
  echo "ชั่วโมง: $hour\n";
  echo "นาที: $minute\n";
  echo "วินาที: $second\n";
}

?>