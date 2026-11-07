<?php
$title = "Beranda - Sistem Informasi Koperasi Sekolah";
?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title ?></title>
  <link rel="stylesheet" href="styles/index.css">
</head>

<body>
  <?php require_once __DIR__ . "/components/landing/header.php" ?>

  <section class="hero">
    <h1>Kelola Koleksi Buku Lebih Rapi</h1>
    <p>BukuKita membantu mencatat kategori dan koleksi buku perpustakaan sekolah secara sederhana.</p>
    <div class="hero-cta">
      <a href="pages/auth/login.php" class="btn btn-primary">Masuk ke Akun</a>
      <a href="pages/categories/index.php" class="btn btn-outline">Lihat Kategori</a>
    </div>
  </section>

  <section class="features">
    <div class="feature-card">
      <h3>Manajemen Kategori</h3>
      <p>Admin dapat menambah, mengubah, dan menghapus kategori.</p>
    </div>
    <div class="feature-card">
      <h3>Manajemen Buku</h3>
      <p>Setiap buku dikelompokkan ke dalam satu kategori.</p>
    </div>
    <div class="feature-card">
      <h3>Hak Akses</h3>
      <p>Admin mengelola data, member hanya dapat melihat.</p>
    </div>
  </section>

  <?php require_once __DIR__ . "/components/landing/footer.php" ?>
</body>

</html>
