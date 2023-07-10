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
    <title>Admin</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body class="bg-secondary bg-gradient">
    <div style="margin: 10px;">
        <h1 class="text-center">Data Mahasiswa</h1>
        <a href="logout.php"><button class="btn btn-danger p-2 g-col-6">Logout</button></a><br>
        <table style="margin-top: 20px;" class="table" border="1" cellpadding="10" cellspacing="0">
            <thead class="table-light">
                <!-- <tr> -->
                <th style="width: 2%;">No.</th>
                <th style="width: 30%;">Nama</th>
                <th style="text-align: center; width: 15%;">NPM</th>
                <th style="text-align: center;width: 15%;">Prodi</th>
                <th style="text-align: center;width: 10%;">Semester</th>
                <th style="text-align: center; width: 10%;">Hobi</th>
                <th style="text-align: center;width: 10%;">UKM yang diminati</th>
                <th style="text-align: center;width: 8%">Aksi</th>
                <!-- </tr> -->
            </thead>
            <?php $i = 1; ?>
            <?php foreach ($mahasiswa as $row) : ?>
            <tbody class="table-dark">
                <!-- <tr> -->
                <td style="text-align: center;"><?php echo $i; ?></td>
                <td><?php echo $row["nama"]; ?></td>
                <td style="text-align: center;"><?php echo $row["npm"]; ?></td>
                <td style="text-align: center;"><?php echo $row["prodi"] ?></td>
                <td style="text-align: center;"><?php echo $row["semester"]; ?></td>
                <td style="text-align: center;"><?php echo $row["hobi"] ?></td>
                <td style="text-align: center; text-transform:capitalize;"><?php echo $row["ukm_diminati"] ?></td>
                <td style="text-align: center;">
                    <a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a>
                    <a href="delete.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('yakin?');">Delete</a>
                </td>
                <!-- </tr> -->
            </tbody>
            <?php $i++; ?>
            <?php endforeach ?>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous">
    </script>
</body>

</html>