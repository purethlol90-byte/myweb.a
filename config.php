<?php
// 1. กำหนดค่าการเชื่อมต่อฐานข้อมูล
$host   = "localhost";     // ที่อยู่ของเซิร์ฟเวอร์ฐานข้อมูล
$user   = "root";          // ชื่อผู้ใช้เริ่มต้นของ XAMPP คือ root
$pass   = "";              // รหัสผ่านเริ่มต้นของ XAMPP ไม่มี (เว้นว่าง)
$dbname = "db_system";     // ชื่อฐานข้อมูลที่สร้างในใบงานที่ 4
 
// 2. ใช้ Try-Catch เพื่อดักจับข้อผิดพลาด
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
 
    // ตั้งค่าให้แจ้งเตือนเมื่อเกิด Error
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
    // ทดสอบการเชื่อมต่อ (เมื่อใช้งานจริงให้ลบบรรทัดนี้ออก)
    echo "เชื่อมต่อฐานข้อมูลสำเร็จ";
 
} catch (PDOException $e) {
    echo "การเชื่อมต่อล้มเหลว: " . $e->getMessage();
}
?>
