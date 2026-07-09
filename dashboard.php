<?php
session_start();
 
// ด่านป้องกัน: ถ้ายังไม่ได้ล็อกอิน ให้เด้งกลับหน้า Login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="th" data-theme="light">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.2/dist/full.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-base-200 min-h-screen p-8">
 
  <!-- แถบหัวเรื่อง -->
  <div class="navbar bg-base-100 shadow rounded-box mb-6">
    <div class="flex-1 px-4 text-xl font-bold">แดชบอร์ดระบบ</div>
    <div class="flex-none px-4">
      สวัสดี, <?php echo $_SESSION['username']; ?>
      <a href="logout.php" class="btn btn-sm btn-error ml-3">ออกจากระบบ</a>
    </div>
  </div>
 
  <!-- กล่องสรุปข้อมูล 3 ใบ -->
  <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
    <div class="card bg-base-100 shadow p-6">
      <div class="text-gray-500">ผู้ใช้ทั้งหมด</div>
      <div class="text-3xl font-bold">1</div>
    </div>
    <div class="card bg-base-100 shadow p-6">
      <div class="text-gray-500">เข้าระบบวันนี้</div>
      <div class="text-3xl font-bold">1</div>
    </div>
    <div class="card bg-base-100 shadow p-6">
      <div class="text-gray-500">สถานะระบบ</div>
      <div class="text-3xl font-bold text-success">ปกติ</div>
    </div>
  </div>
 
</body>
</html>
