<?php
include "koneksi.php";

if (isset($_POST["submit"])) {

    if (submit($_POST) > 0) {
        echo "
        <script>
        alert('Submit Berhasil');
        document.location.href='form.php';
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
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="stylee.css">

    <title>Form Survey</title>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1><b>Form Survey</b></h1>
            <p>Form Survey Pengembangan Minat dan Bakat Mahasiswa</p>
            <div style="border: solid black 1px; width:fit-content; padding: 3px; background-color:lightgray; border-radius:5px"
                class="clock" id="DisplayClock" onload="showTime()">
                <script type="text/javascript" src="jquery.js"></script>
            </div>
            <hr style="color: black; background-color: black" />
        </div>
        <div class="content">
            <p>Isi data berikut untuk database kampus</p>
            <div class="form">
                <form action="" method="POST">
                    <label for="nama">Nama</label> <br />
                    <input type="text" name="nama" placeholder="Masukkan Nama" id="nama" /> <br />
                    <label for="npm">NPM</label> <br />
                    <input type="number" name="npm" placeholder="Masukan NPM" id="npm" /> <br />
                    <label for="prodi">Prodi</label> <br />
                    <input type="text" name="prodi" placeholder="Masukkan Prodi" id="prodi" /> <br />
                    <label for="semester">Semester</label><br />
                    <input type="number" name="semester" placeholder="Masukkan Semester Sekarang" id="semester" />
                    <br />
                    <label for="hobi">Hobi</label> <br />
                    <input type="text" name="hobi" placeholder="Masukkan Hobi" id="hobi" /> <br />
                    <select name="ukm_diminati" id="">
                        <option value="seni">Pilih UKM yang diminati</option>
                        <hr />
                        <option value="olahraga">Olahraga</option>
                        <option value="beladiri">Bela Diri</option>
                        <option value="robotik">Robotik</option>
                    </select>
                    <br />
                    <button class="button" type="submit" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>