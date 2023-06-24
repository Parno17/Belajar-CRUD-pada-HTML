<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Challenge10_21114035</title>
</head>

<body>

  <div class="container mx-auto">
    <h1 class="mt-4 mb-4">CRUD Mahasiswa</h1>
    <?php
    include 'koneksi.php';
    $sql = "SELECT * FROM mahasiswa";
    $result = mysqli_query($link, $sql);
    ?>

    <table class="table">
      <thead>
        <tr>
          <th>NIM</th>
          <th>Nama</th>
          <th>No HP</th>
          <th>Jenis kelamin</th>
          <th>Jurusan</th>
          <th>Alamat</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
          <tr>
            <td><?= $row['nim']; ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['no_hp']; ?></td>
            <td><?= $row['jenis_kelamin']; ?></td>
            <td><?= $row['jurusan']; ?></td>
            <td><?= $row['alamat']; ?></td>
            <td>
              <a href="form_edit.php?id=<?= $row['id']; ?>" class="btn btn-warning">Edit</a>
              <a href="delete.php?id=<?= $row['id']; ?>" class="btn btn-danger">Hapus</a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
    <a href="form_tambah.php" class="btn btn-success">Tambah Mahasiswa</a>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>