<?php
include 'koneksi.php';

$id = $_GET['id'];

$sql = "DELETE FROM mahasiswa WHERE id='$id'";

if (mysqli_query($link, $sql)) {
  header("location: tampil_data.php");
}
