<?php
session_start();
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role'];
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Login gagal. Coba lagi.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    * {
        box-sizing: border-box;
        padding: 0;
        margin: 0;
    }

    body {
        font-family: Arial, sans-serif;
        height: 100vh;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .container-box {
        display: flex;
        width: 100%;
        height: 100vh;
    }

    .login-form {
        flex: 1;
        padding: 60px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        background-color: #fff;
    }

    .login-form h2 {
        color: #2ecc71;
        margin-bottom: 30px;
        font-weight: 700;
        font-size: 28px;
    }

    .form-control {
        width: 100%;
        padding: 14px 16px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 8px;
        font-size: 16px;
    }

    .btn-primary {
        background-color: #2ecc71;
        color: white;
        border: none;
        padding: 14px;
        border-radius: 8px;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
    }

    .btn-primary:hover {
        background-color: #27ae60;
    }

    .info-panel {
        flex: 1;
        background: linear-gradient(to right, #2ecc71, #27ae60);
        color: white;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 60px;
        text-align: center;
    }

    .info-panel h2 {
        font-size: 32px;
        font-weight: bold;
        margin-bottom: 15px;
    }

    .info-panel p {
        font-size: 16px;
        line-height: 1.6;
    }

    .error-message {
        color: red;
        text-align: center;
        margin-bottom: 15px;
    }

    @media (max-width: 768px) {
        .container-box {
            flex-direction: column;
            height: auto;
            width: 100%;
        }

        .login-form,
        .info-panel {
            flex: none;
            width: 100%;
            padding: 30px;
        }
    }
  </style>
</head>
<body>

  <div class="container-box">
    <div class="login-form">
      <h2>Login</h2>
      <?php if (isset($error)) : ?>
          <div class="error-message"><?= $error ?></div>
      <?php endif; ?>

      <form method="POST" action="">
        <input type="text" class="form-control" name="username" placeholder="Username" required>
        <input type="password" class="form-control" name="password" placeholder="Password" required>
        <button type="submit" class="btn-primary">Login</button>
      </form>
    </div>

    <div class="info-panel">
      <h2>Halo!</h2>
      <p>Selamat datang di sistem peminjaman alat olahraga sekolah.<br>
        Silakan login menggunakan akun Anda untuk mulai meminjam alat olahraga seperti bola voli, bola kaki, dan lain sebagainya.
      </p>
      <p><strong>Peraturan Peminjaman:</strong><br>
        1. Peminjaman hanya bisa dilakukan oleh siswa yang terdaftar.<br>
        2. Barang harus dikembalikan maksimal 1 hari setelah dipinjam.<br>
        3. Kerusakan atau kehilangan alat menjadi tanggung jawab peminjam.<br>
        4. Cek ketersediaan stok sebelum meminjam.</p>
    </div>
  </div>

</body>
</html>
