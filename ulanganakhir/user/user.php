<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Siswa - Peminjaman</title>
  <link rel="stylesheet" href="user.css">
</head>
<body>
  <div class="container">
    <h1>Halo Siswa!</h1>
    <p>Silahkan Pinjam Alat Olahraga</p>

    <form id="pinjam-form">
      <input type="text" id="barang-nama" placeholder="Nama Barang" required>
      <select id="barang-status">
        <option value="Dipinjam">Dipinjam</option>
        <option value="Dikembalikan">Dikembalikan</option>
      </select>
      <button type="submit">Simpan</button>
    </form>

    <h2>Riwayat Peminjaman</h2>
    <div id="pinjam-list"></div>

    <h2>LocalStorage Data</h2>
    <pre id="storage-data">Memuat...</pre>
  </div>

  <script src="user.js"></script>
</body>
</html>
