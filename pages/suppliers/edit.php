<?php 

$errors = [];
$old = [];
$data = [];

$pageTitle = "Edit Kategori";
$pageSubtitle = "Perbarui data kategori";
?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Kategori - BukuKita</title>
  <link rel="stylesheet" href="../../styles/employees/edit.css">
</head>

<body>
  <div class="layout">
    <?php require_once __DIR__ . "/../../components/admin/sidebar.php" ?>

    <main class="main">
      <?php require_once __DIR__ . "/../../components/admin/topbar.php" ?>

      <div class="content">
        <form method="POST" action="../../actions/categories/update.php" class="card">
          <!-- TODO 6: value = $category['id'] -->
          <input type="hidden" name="id" value="">

          <div class="form-group">
            <label for="name">Supplier Name</label>
            <!-- TODO 7: value = $data['name'] -->
            <input type="text" id="employee_number" name="employee_number" value="">
            <!-- TODO: tampilkan $errors['name'] di <p class="error-text"> jika ada -->
          </div>
          <div class="form-group">
              <div class="form-group">
                <label for="email">Email</label>
                <!-- TODO 8: isi textarea dengan $data['description'] -->
                <input type="email" id="email" name="email" rows="3"></input>
                <!-- TODO: tampilkan $errors['description'] di <p class="error-text"> jika ada -->
              </div>
            <label for="phone">Phone</label>
            <!-- TODO 8: isi textarea dengan $data['description'] -->
            <input type="email" id="phone" name="phone" rows="3"></input>
            <!-- TODO: tampilkan $errors['description'] di <p class="error-text"> jika ada -->
          </div>
          <div class="form-group">
            <label for="address">Address</label>
            <!-- TODO 8: isi textarea dengan $data['description'] -->
            <input id="address" name="address" rows="3"></input>
            <!-- TODO: tampilkan $errors['description'] di <p class="error-text"> jika ada -->
          </div>
          <div class="form-group">
            <label for="product_type">Product type</label>
            <!-- TODO 8: isi textarea dengan $data['description'] -->
            <select id="product_type" name="product_type" rows="3"></select>
            <!-- TODO: tampilkan $errors['description'] di <p class="error-text"> jika ada -->
          </div>
          <div class="form-group">
            <label for="partnership_date">Partnership_date</label>
            <!-- TODO 8: isi textarea dengan $data['description'] -->
            <input type="date" id="partnership_date" name="partnership_date" rows="3"></input>
            <!-- TODO: tampilkan $errors['description'] di <p class="error-text"> jika ada -->
          </div> 

          <div class="form-actions">
            <a href="index.php" class="btn btn-outline">Batal</a>
            <button type="submit" name="update" class="btn btn-primary">Simpan Perubahan</button>
          </div>
        </form>
      </div>
    </main>
  </div>
</body>

</html>
