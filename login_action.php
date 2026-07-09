<?php
// เริ่มต้นระบบ Session เพื่อจดจำการล็อกอิน
session_start();
 
// เรียกใช้ไฟล์ตั้งค่าการเชื่อมต่อฐานข้อมูล
require 'config.php';
 
// รับค่าจากฟอร์มที่ส่งมาแบบ POST
$username = $_POST['username'];
$password = $_POST['password'];
 
// ค้นหาผู้ใช้จากฐานข้อมูล (ใช้ ? เพื่อความปลอดภัยจากการโจมตี)
$sql  = "SELECT * FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$username]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);
 
// ตรวจสอบว่าเจอผู้ใช้ และรหัสผ่านตรงกันหรือไม่
if ($user && $password == $user['password']) {
    // ถูกต้อง: บันทึกสถานะและส่งไปหน้า Dashboard
    $_SESSION['username'] = $user['username'];
    header("Location: dashboard.php");
    exit();
} else {
    // ไม่ถูกต้อง: ส่งกลับหน้า Login พร้อมสัญญาณ error
    header("Location: login.php?error=1");
    exit();
}
?>
