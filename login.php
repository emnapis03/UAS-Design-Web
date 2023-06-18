<?php
include 'koneksi.php';

// session_start();
// if (isset($_SESSION['username'])) {
//     header("Location: indeks.php");
// }
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: indeks.php");
    } else {
        echo "<script>alert('Email atau password yang anda masukkan salah')</script>";
    }
}

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

<body class="login">
    <div class="form">
        <h1>Login Dulu Ngab!!!</h1>
        <form method="POST" action="" class="input">
            <label for="username">Username</label><br>
            <input type="text" name="username" id="username"><br>
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password"><br>
            <button class="button-login" type="submit" name="login" value="login">Login</button>
        </form>
    </div>
</body>

</html>