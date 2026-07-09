<?php
session_start();
session_unset();    // ล้างข้อมูลใน Session ทั้งหมด
session_destroy();  // ทำลาย Session (ลืมว่าเคยล็อกอิน)
header("Location: login.php");
exit();
?>
