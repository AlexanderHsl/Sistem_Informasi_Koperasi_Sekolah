<?php 

$errors = [];
$old = [];
$data = [];

$pageTitle = "Edit Product Information";
$pageSubtitle = "Perbarui Tabel Information";
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
            <label for="name">Product Code</label>
            <!-- TODO 7: value = $data['name'] -->
            <input type="text" id="product_code" name="product_code" value="">
            <!-- TODO: tampilkan $errors['name'] di <p class="error-text"> jika ada -->
          </div>
          <div class="form-group">
            <label for="description">Product Name</label>
            <!-- TODO 8: isi textarea dengan $data['description'] -->
            <input type="text" id="product_name" name="product_name" rows="3"></input>
            <!-- TODO: tampilkan $errors['description'] di <p class="error-text"> jika ada -->
          </div>
          <div class="radio">
            <label for="description">Category</label>
            <select id="category" name="category"></select>
            <!-- TODO: tampilkan $errors['description'] di <p class="error-text"> jika ada -->
          </div>
          <div class="radio">
            <label for="description">Unit</label>
            <!-- TODO 8: isi textarea dengan $data['description'] -->
            <input type="radio" id="unit" name="unit" >Pcs
            <input type="radio" id="unit" name="unit" >Pack
            <input type="radio" id="unit" name="unit" >Bottle
          </div>
          <div class="form-group">
            <label for="description">Price</label>
            <!-- TODO 8: isi textarea dengan $data['description'] -->
            <input type="number" id="price" name="price" rows="3"></input>
            <!-- TODO: tampilkan $errors['description'] di <p class="error-text"> jika ada -->
          </div>
          <div class="form-group">
            <label for="description">stock</label>
            <!-- TODO 8: isi textarea dengan $data['description'] -->
            <input type="number" id="stock" name="stock" rows="3"></input>
            <!-- TODO: tampilkan $errors['description'] di <p class="error-text"> jika ada -->
          </div> 
            <div class="form-group">
            <label for="description">Entry date</label>
            <!-- TODO 8: isi textarea dengan $data['description'] -->
            <input type="date" id="entry_date" name="entry_date" rows="3"></input>
            <!-- TODO: tampilkan $errors['description'] di <p class="error-text"> jika ada -->
          </div> 
          <div class="form-group">
            <label for="description">description</label>
            <!-- TODO 8: isi textarea dengan $data['description'] -->
            <textarea type="number" id="description" name="description" rows="3"></textarea>
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
