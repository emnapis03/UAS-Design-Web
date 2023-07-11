<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "uasdesignweb";

// Create connection
$conn = mysqli_connect($host, $username, $password, $database);

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function submit($data)
{
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $npm = htmlspecialchars($data["npm"]);
    $prodi = htmlspecialchars($data["prodi"]);
    $semester = htmlspecialchars($data["semester"]);
    $hobi = htmlspecialchars($data["hobi"]);
    $ukm = htmlspecialchars($data["ukm_diminati"]);

    $query = ("INSERT INTO data_mahasiswa VALUES('', '$nama', '$npm', '$prodi', '$semester', '$hobi', '$ukm') ");
    mysqli_query($conn, $query);


    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM data_mahasiswa WHERE id=$id") or die(mysqli_error($conn));
    header("Location: indeks.php");

    return mysqli_affected_rows($conn);
}

function edit($data)
{
    global $conn;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $npm = htmlspecialchars($data["npm"]);
    $prodi = htmlspecialchars($data["prodi"]);
    $semester = htmlspecialchars($data["semester"]);
    $hobi = htmlspecialchars($data["hobi"]);
    $ukm = htmlspecialchars($data["ukm_diminati"]);

    $query = "UPDATE data_mahasiswa SET 
    nama = '$nama',
    npm = '$npm',
    prodi = '$prodi',
    semester = '$semester',
    hobi = '$hobi',
    ukm_diminati = '$ukm'
    WHERE id = $id";
    mysqli_query($conn, $query);


    return mysqli_affected_rows($conn);
}

function regis($data)
{
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $username = htmlspecialchars($data["username"]);
    $password = htmlspecialchars($data["password"]);

    $query = ("INSERT INTO user VALUES('', '$nama', '$username', '$password') ");
    mysqli_query($conn, $query);


    return mysqli_affected_rows($conn);
}