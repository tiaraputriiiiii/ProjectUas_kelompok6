<?php
session_start();
$title ='Login';
include_once 'koneksi.php';

if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $pass = $_POST['pass'];

    $sql = "SELECT * FROM users WHERE username = '{$username}' AND pass = '{$pass}'";

    $result = mysqli_query($conn, $sql);
    if ($result && mysqli_affected_rows($conn) !=0){
        $_SESSION['login'] = true;
        $_SESSION['username'] = mysqli_fetch_array($result);

        header('location: home.php');
    }else
    $errorMsg = "<p style=\"color:red;\">Gagal Login,
    silakan ulangi lagi.</p>";
}
if (isset($errorMsg)) echo $errorMsg;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>UAS Pem. Web 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body style="margin-top: 30px; background-color: #FFFF;">
<div class="container" style=" background-color: #FFFF; width: 70%; padding: 20px;   border-radius: 10px;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
" >
<h1 style="color: #black; text-align: center;">DATA CHECKLIST KEBERSIHAN TOILET</h1><br>
<h2 style="color: #balck; text-align: center;">LOGIN</h2><br>
    <form method="POST">
        <div class="mb-3 row" style="background-color: #778899;">
            <label for="staticEmail" class="col-sm-2 col-form-label" style="color: #FFFFFF;">Username</label>
            <div class="col-sm-10">
                <input style="color: #000000;" type="text" class="form-control" id="staticEmail" placeholder="Username" name="username">
            </div>
        </div>
        <br>
        <div class="mb-3 row " style="background-color: #778899;">
            <label for="inputPassword" class="col-sm-2 col-form-label" style="color: #FFFFFF;">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword" placeholder="Password" accept=""name="pass">
            </div>
        </div>
        <br>
        <div class="submit">
            <button type="submit" name="submit" class="btn" style="background-color: #778899; color: #FFFFFF n ;">Login</button>
        </div>
        <div><br><br>
            <p style="color: #FF4500;">Belum memiliki akun??</p>
            <a href="tam_login.php" style="color: #778899;">Buat Akun Baru</a>
        </div>
    </form>
</div>
</body>