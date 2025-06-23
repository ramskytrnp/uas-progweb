<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admin Panel</title>
  <link rel="stylesheet" href="admin.css" />
</head>
<body>
  <div class="container">
    <h1>Halo Admin!</h1>
    <p>Kelola user yang bisa mengakses sistem.</p>

    <form id="user-form">
      <input type="text" id="username" placeholder="Username" required />
      <select id="role">
        <option value="admin">Admin</option>
        <option value="editor">Editor</option>
        <option value="user">User</option>
      </select>
      <button type="submit">Tambah User</button>
    </form>

    <div id="user-list"></div>
  </div>

    <div id="storage-demo">
      <h2>LocalStorage Data</h2>
      <pre id="storage-data"></pre>
    </div>
  </div>

  <script src="admin.js"></script>
</body>
</html>
