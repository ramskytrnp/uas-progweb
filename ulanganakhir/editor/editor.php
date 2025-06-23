<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editor - Kelola Stok</title>
  <link rel="stylesheet" href="editor.css">
</head>
<body>
  <div class="container">
    <h1>Halo Editor!</h1>
    <p>Kelola stok alat olahraga dari file JSON</p>

    <form id="stok-form">
      <input type="text" id="item-name" placeholder="Nama Barang" required>
      <input type="number" id="item-jumlah" placeholder="Jumlah" required min="1">
      <button type="submit">Tambah Alat</button>
    </form>

    <h2>Stok Tersedia</h2>
    <div id="stok-list"></div>

    <h2>LocalStorage Data</h2>
    <pre id="storage-data">Memuat...</pre>
  </div>

  <script src="editor.js"></script>
</body>
</html>
