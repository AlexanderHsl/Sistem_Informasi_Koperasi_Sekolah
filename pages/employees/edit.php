<?php 

$errors = [];
$old = [];
$data = [];

$pageTitle = "Edit Employee Information";
$pageSubtitle = "Perbarui Tabel Employee";
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
            <label for="name">Employee Number</label>
            <!-- TODO 7: value = $data['name'] -->
            <input type="text" id="employee_number" name="employee_number" value="">
            <!-- TODO: tampilkan $errors['name'] di <p class="error-text"> jika ada -->
          </div>
          <div class="form-group">
            <label for="description">Full Name</label>
            <!-- TODO 8: isi textarea dengan $data['description'] -->
            <input id="name" name="name" rows="3"></input>
            <!-- TODO: tampilkan $errors['description'] di <p class="error-text"> jika ada -->
          </div>
          <div class="radio">
            <label for="description">Gender</label>
            <input type="radio" id="gender" name="gender" >MALE
            <input type="radio" id="gender" name="gender" >FEMALE
            <!-- TODO: tampilkan $errors['description'] di <p class="error-text"> jika ada -->
          </div>
          <div class="form-group">
            <label for="description">Birth Date</label>
            <!-- TODO 8: isi textarea dengan $data['description'] -->
            <input type="date" id="birth_date" name="birth_date" rows="3"></input>
            <!-- TODO: tampilkan $errors['description'] di <p class="error-text"> jika ada -->
          </div>
          <div class="form-group">
            <label for="description">Position</label>
            <!-- TODO 8: isi textarea dengan $data['description'] -->
            <select id="position" name="position" rows="3"></select>
            <!-- TODO: tampilkan $errors['description'] di <p class="error-text"> jika ada -->
          </div>
          <div class="form-group">
            <label for="description">Salary</label>
            <!-- TODO 8: isi textarea dengan $data['description'] -->
            <input type="number" id="salary" name="salary" rows="3"></input>
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
