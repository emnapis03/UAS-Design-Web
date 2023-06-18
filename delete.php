<?php
require 'koneksi.php';
$id = $_GET["id"];

if (hapus($id) > 0) {
    echo "
    <script>
    alert('Gagal Menghapus Data');
    document.location.href='form.php';
    </script>
    ";
} else {
    echo "
    <script>
    alert('Data Berhasil dihapus');
    document.location.href='form.php';
    </script>
    ";
}