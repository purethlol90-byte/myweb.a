<!DOCTYPE html>
<html lang="th" data-theme="light">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ระบบบันทึกข้อมูล</title>
    <!-- เรียกใช้ DaisyUI -->
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.2/dist/full.min.css" rel="stylesheet" type="text/css" />
  <!-- เรียกใช้ Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="bg-base-200 flex items-center justify-center min-h-screen">
  <!-- เริ่มต้นกล่อง Login -->
  <div class="card w-96 bg-base-100 shadow-xl">
    <div class="card-body">
      <h2 class="card-title justify-center text-2xl font-bold mb-4">เข้าสู่ระบบ</h2>

      <?php if (isset($_GET['error'])): ?>
  <div class="alert alert-error text-sm mb-4">
    ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง
  </div>
<?php endif; ?>
        
      <form action="login_action.php" method="POST">
 
  <!-- ช่องกรอกชื่อผู้ใช้ -->
  <div class="form-control w-full mb-4">
    <label class="label"><span class="label-text">ชื่อผู้ใช้งาน</span></label>
    <input type="text" name="username" placeholder="Username"
           class="input input-bordered w-full" required />
  </div>
 
  <!-- ช่องกรอกรหัสผ่าน -->
  <div class="form-control w-full mb-6">
    <label class="label"><span class="label-text">รหัสผ่าน</span></label>
    <input type="password" name="password" placeholder="Password"
           class="input input-bordered w-full" required />
  </div>
 
  <!-- ปุ่มเข้าสู่ระบบ -->
  <div class="form-control mt-2">
    <button type="submit" class="btn btn-neutral w-full">Login</button>
  </div>
 
</form>
 
    </div>
  </div>
</body>
</html>
