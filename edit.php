<?php
// include 'koneksi.php';

$host = "localhost";
$username = "root";
$password = "";
$database = "uasdesignweb";

// Create connection
$conn = mysqli_connect($host, $username, $password, $database);


$id = $_GET['id'];
$query = "SELECT * FROM data_mahasiswa WHERE id=$id";
$hasil = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($hasil);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link rel="stylesheet" href="style.css" /> -->

    <title>Form Survey</title>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1><b>Form Survey</b></h1>
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
                <form action="proses-edit.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                    <label for="nama">Nama</label> <br />
                    <input type="text" name="nama" value="<?php echo $data['nama']; ?>" id="nama" /> <br />
                    <label for="npm">NPM</label> <br />
                    <input type="number" name="npm" value="<?php echo $data['npm']; ?>" id="npm" /> <br />
                    <label for="prodi">Prodi</label> <br />
                    <input type="text" name="prodi" value="<?php echo $data['prodi']; ?>" id="prodi" /> <br />
                    <label for="semester">Semester</label><br />
                    <input type="number" name="semester" value="<?php echo $data['semester']; ?>" id="semester" />
                    <br />
                    <label for="hobi">Hobi</label> <br />
                    <input type="text" name="hobi" value="<?php echo $data['hobi']; ?>" id="hobi" /> <br />
                    <select name="ukm_diminati" id="">
                        <?php if ($data['ukm_diminati'] == "olahraga") : ?>
                        <option value="olahraga" selected>Olahraga</option>
                        <option value="beladiri">Bela Diri</option>
                        <option value="robotik">Robotik</option>
                        <?php elseif ($data['ukm_diminati'] == "beladiri") : ?>
                        <option value="olahraga">Olahraga</option>
                        <option value="beladiri" selected>Bela Diri</option>
                        <option value="robotik">Robotik</option>
                        <?php elseif ($data['ukm_diminati'] == "robotik") : ?>
                        <option value="olahraga">Olahraga</option>
                        <option value="beladiri">Bela Diri</option>
                        <option value="robotik" selected>Robotik</option>
                        <?php endif ?>
                    </select>
                    <br />
                    <button type="submit" name="submit" value="Simpan">Save</button>
                    <button type="reset" value="Batal" onclick="self.history.back();">Batal</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>