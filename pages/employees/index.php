<?php
$pageTitle = "Manajemen Pekerja";
$pageSubtitle = "Kelola tabel pekerja";
?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/styles/pages/management.css">
  <title>Employees</title>
</head>

<body>
  <div class="layout">
    <?php require_once __DIR__ . "/../../components/admin/sidebar.php" ?>

    <div class="main">
      <?php require_once __DIR__ . "/../../components/admin/topbar.php" ?>

      <div class="bodyemployed">
        <?php require_once __DIR__ . "/../../components/table.php" ?>
      </div>
    </div>
  </div>
</body>

</html>
