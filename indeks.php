<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location:login.php');
    exit();
}

require "koneksi.php";

$mahasiswa = query("SELECT * FROM data_mahasiswa ORDER by nama");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="indeks">
        <h1>Data Mahasiswa</h1>
        <a href="login.php"><button class="logout">Logout</button></a>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th style="width: 2%;">No.</th>
                <th style="width: 30%;">Nama</th>
                <th style="width: 15%;">NPM</th>
                <th style="width: 15%;">Prodi</th>
                <th style="width: 10%;">Semester</th>
                <th style="width: 10%;">Hobi</th>
                <th style="width: 10%;">UKM yang diminati</th>
                <th style="width: 8%">Aksi</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach ($mahasiswa as $row) : ?>
            <tr>
                <td style="text-align: center;"><?php echo $i; ?></td>
                <td><?php echo $row["nama"]; ?></td>
                <td style="text-align: center;"><?php echo $row["npm"]; ?></td>
                <td style="text-align: center;"><?php echo $row["prodi"] ?></td>
                <td style="text-align: center;"><?php echo $row["semester"]; ?></td>
                <td style="text-align: center;"><?php echo $row["hobi"] ?></td>
                <td style="text-align: center;"><?php echo $row["ukm_diminati"] ?></td>
                <td style="text-align: center;">
                    <a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a>
                    <a href="delete.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('yakin?');">Delete</a>
                </td>
            </tr>
            <?php $i++; ?>
            <?php endforeach ?>
        </table>
    </div>
</body>

</html>