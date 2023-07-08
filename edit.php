<?php
require "koneksi.php";

$id = $_GET["id"];

$data = query("SELECT * FROM data_mahasiswa WHERE id = $id")[0];

if (isset($_POST["submit"])) {

    if (edit($_POST) > 0) {
        echo "
        <script>
        alert('Berhasil Diubah');
        document.location.href='indeks.php';
        </script>
        ";
    } else {
        "Gagal diubah";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link rel="stylesheet" href="style.css" /> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <title>Ubah Data</title>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1><b>Ubah Data </b></h1>
            <p>Form Survey Pengembangan Minat dan Bakat Mahasiswa</p>
            <div style="border: solid black 1px; width:fit-content; padding:2px; background-color:lightgray; border-radius:5px"
                class="clock" id="DisplayClock" onload="showTime()">
                <script type="text/javascript" src="jquery.js"></script>
            </div>
            <hr style="color: black; background-color: black" />
        </div>
        <div class="content">
            <p>Isi data berikut untuk database kampus</p>
            <div class="form">
                <form action="" method="POST">
                    <input class="form-label" type="hidden" name="id" value="<?= $data["id"]; ?>">
                    <label for="nama">Nama</label> <br />
                    <input class="form-control" type="text" name="nama" placeholder="Masukkan Nama" required
                        value="<?= $data["nama"]; ?>" id="nama" /> <br />
                    <label class="form-label" for="npm">NPM</label> <br />
                    <input class="form-control" type="number" name="npm" placeholder="Masukan NPM" id="npm" required
                        value="<?= $data["npm"]; ?>" /> <br />
                    <label class="form-label" for="prodi">Prodi</label> <br />
                    <input class="form-control" type="text" name="prodi" placeholder="Masukkan Prodi" id="prodi"
                        required value="<?= $data["prodi"]; ?>" /> <br />
                    <label class="form-label" for="semester">Semester</label><br />
                    <input class="form-control" type="number" name="semester" placeholder="Masukkan Semester Sekarang"
                        id="semester" required value="<?= $data["semester"]; ?>" />
                    <br />
                    <label class="form-label" for="hobi">Hobi</label> <br />
                    <input class="form-control" type="text" name="hobi" placeholder="Masukkan Hobi" id="hobi" required
                        value="<?= $data["hobi"]; ?>" /> <br />
                    <select name="ukm_diminati" id="" required value="<?= $data["ukm_diminati"]; ?>">
                        <option value="seni">Pilih UKM yang diminati</option>
                        <hr />
                        <option value="olahraga">Olahraga</option>
                        <option value="beladiri">Bela Diri</option>
                        <option value="robotik">Robotik</option>
                    </select>
                    <br />
                    <button style="margin-top: 10px;" class="btn btn-primary" type="submit" name="submit">Ubah
                        Data</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>