<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

$role = $_SESSION['role'];
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background: url('assets/background.jpg') no-repeat center center fixed;
      background-size: cover;
      min-height: 100vh;
      color: white;
      display: flex;
      flex-direction: column;
    }

    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px 40px;
    }

    .logo img {
      width: 60px;
      height: auto;
    }

    .logout-btn {
      padding: 10px 25px;
      background-color: #e74c3c;
      color: white;
      font-weight: bold;
      text-decoration: none;
      border-radius: 40px;
      transition: background 0.3s;
    }

    .logout-btn:hover {
      background-color: #c0392b;
    }

    main {
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      padding: 40px 20px;
      position: relative;
    }

    .content {
      position: relative;
      z-index: 1;
    }

    h1 {
      font-size: 60px;
      margin-bottom: 10px;
      text-shadow: 2px 2px 6px rgba(0,0,0,0.8);
    }

    p {
      font-size: 20px;
      margin-bottom: 30px;
      text-shadow: 2px 2px 6px rgba(0,0,0,0.8);
    }

    .btn {
      padding: 14px 30px;
      font-size: 16px;
      font-weight: bold;
      color: white;
      background-color: #2ecc71;
      text-decoration: none;
      border-radius: 30px;
      transition: background 0.3s ease;
      display: inline-block;
    }

    .btn:hover {
      background-color: #27ae60;
    }

    @media (max-width: 768px) {
      h1 {
        font-size: 28px;
      }

      p {
        font-size: 16px;
      }

      .btn {
        padding: 12px 24px;
      }
    }
  </style>
</head>
<body>

  <header>
    <div class="logo">
      <img src="assets/logo.png" alt="Logo">
    </div>
    <a href="logout.php" class="logout-btn">Logout</a>
  </header>

  <main>
    <div class="content">
      <h1>Selamat Datang</h1>
      <p>Anda login sebagai <strong><?= strtoupper($role); ?></strong></p>

      <?php if ($role === 'admin'): ?>
        <a href="admin/admin.php" class="btn">Lanjutkan Ke Administrasi</a>
      <?php elseif ($role === 'editor'): ?>
        <a href="editor/editor.php" class="btn">Kelola Peminjaman</a>
      <?php elseif ($role === 'user'): ?>
        <a href="user/user.php" class="btn">Lakukan Peminjaman</a>
      <?php endif; ?>
    </div>
  </main>

</body>
</html>
