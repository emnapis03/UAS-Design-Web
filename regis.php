<?php
include "koneksi.php";

if (isset($_POST["regis"])) {

    if (regis($_POST) > 0) {
        echo "
        <script>
        alert('Submit Berhasil');
        document.location.href='login.php';
        </script>
        ";
    } else {
        "Gagal";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Page</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="form-wrapper">
        <h2>Daftar Untuk Admin Dahsboard</h2>
        <form action="" method="POST">
            <div class="form-control">
                <input type="text" name="nama" required>
                <label>Nama</label>
            </div>
            <div class="form-control">
                <input type="text" name="username" required>
                <label>Username</label>
            </div>
            <div class="form-control">
                <input name="password" type="password" required>
                <label>Password</label>
            </div>
            <button type="submit" value="regis" name="regis">Daftar</button>

        </form>
    </div>
</body>

</html>