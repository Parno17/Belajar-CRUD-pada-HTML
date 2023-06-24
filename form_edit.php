<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Edit Mahasiswa</title>
</head>

<body>

  <div class="container mx-auto">
    <h1 class="mt-4 mb-4">Edit Mahasiswa</h1>

    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM mahasiswa WHERE id='$id'";
    $result = mysqli_query($link, $sql);
    $data = mysqli_fetch_assoc($result);
    ?>

    <form method="POST" action="aksi_edit.php">
      <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
      <div class="mb-3">
        <label for="nim" class="form-label">NIM</label>
        <input type="text" class="form-control" id="nim" name="nim" value="<?= $data['nim']; ?>" required>
      </div>
      <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['nama']; ?>" required>
      </div>
      <div class="mb-3">
        <label for="no_hp" class="form-label">No HP</label>
        <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?= $data['no_hp']; ?>" required>
      </div>
      <div class="mb-3">
        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
        <br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki" value="Laki-laki" required>
          <label class="form-check-label" for="laki-laki">Laki-laki</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan" required>
          <label class="form-check-label" for="perempuan">Perempuan</label>
      </div>
      <div class="mb-3">
        <label for="jurusan" class="form-label">Jurusan</label>
        <select class="form-select" name="jurusan" id="jurusan">
          <option value="Informatika" <?php if ($data['jurusan'] == 'Informatika') echo 'selected' ?>>Informatika</option>
          <option value="Sistem Informasi" <?php if ($data['jurusan'] == 'Sistem Informasi') echo 'selected' ?>>Sistem Informasi</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <textarea name="alamat" id="alamat" class="form-control" rows="3" required><?= $data['alamat']; ?></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Simpan</button>
      <a href="tampil_data.php" class="btn btn-secondary">Kembali</a>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>