<?php
// include 'koneksi.php';

$host = "localhost";
$username = "root";
$password = "";
$database = "uasdesignweb";

// Create connection
$conn = mysqli_connect($host, $username, $password, $database);


$id = $_POST['id'];
$nama = $_POST['nama'];
$npm = $_POST['npm'];
$prodi = $_POST['prodi'];
$semester = $_POST['semester'];
$hobi = $_POST['hobi'];
$ukm = $_POST['ukm_diminati'];

$query = "UPDATE data_mahasiswa 
    SET nama = '$nama',
        npm = '$npm',
        prodi = '$prodi',
        semester = '$semester'
        hobi = '$hobi'
        ukm_diminati = '$ukm'
    WHERE id = $id";

$hasil = mysqli_query($conn, $query);
// var_dump(mysqli_error($db));
if ($hasil == true) {
    header('Location: indeks.php');
} else {
    header('Location: form.php');
}