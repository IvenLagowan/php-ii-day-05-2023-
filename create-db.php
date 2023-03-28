<?php

// integrasi Koneksi

require_once('connection.php');

// buat data base baru

$sql = "GREATE DATABASE nokensoft";

if ($conn->query($sql) === TRUE) {
  echo "Database berhasil di buatkan";
} else {
  echo "Database tidak di buatkan";
}


?>