<?php
$pageTitle = "Manajemen Kategori";
$pageSubtitle = "Kelola data kategori buku";
?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employees</title>
</head>
<link rel="stylesheet" href="/styles/tableindex.css">
<body>
  <div class="layout">
    <?php require_once __DIR__ . "/../../components/admin/sidebar.php" ?>

    <main class="main">
      <?php require_once __DIR__ . "/../../components/admin/topbar.php" ?>

      <div class="content">
        <div class="toolbar">
          <a href="create.php" class="btn btn-primary">+ Tambah Kategori</a>
        </div>

        <div class="Employees table">
          <table>
            <thead>
              <tr>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </main>
  </div>
</body>

</html>
