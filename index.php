<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beranda - Sistem Informasi Koperasi Sekolah</title>
  <link rel="stylesheet" href="styles/index.css">
</head>
<body>
  <?php require_once __DIR__ . "/components/landing/header.php" ?>

  <section class="hero">
    <h1>Kelola Informasi Koperasi Sekolah</h1>
  </section>

  <section class="features">
    <a href="pages/products/index.php" class="feature-card">
      <h3>Tabel Products</h3>
      <p>products dapat menambah, mengubah, dan menghapus kategori.</p>
    </a>
    <a href="pages/suppliers/index.php" class="feature-card">
      <h3>Tabel Suppliers</h3>
      <p>Setiap suppliers dikelompokkan ke dalam satu kategori.</p>
    </a>
    <a href="pages/employees/index.php" class="feature-card">
      <h3>Tabel employees</h3>
      <p>Setiap employees di Sekolah</p>
    </a>
  </section>
  <?php require_once __DIR__ . "/components/landing/footer.php" ?>
</body>

</html>
