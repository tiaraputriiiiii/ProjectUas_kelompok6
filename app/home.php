<?php
session_start();
$title = 'Home';
include_once 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KELOMPOK 6</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        body {
            margin-top: 30px;
            background-color: #ffffff;
            color: #000000 ;
        }

        h1 {
            text-align: center;
        }

        .container {
            width: 50%;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);;
            margin: 0 auto;
        }

        .list-group-item.active {
        background-color: #87cefa; /* Adjust the color as needed */
        border-color: #6C757D;
        font-weight: bold;
        }

        .list-group-item {
            background-color: #ffffff;
            color: #000000;
            border: none;
        }

        .list-group-item a {
            color: #000000;
            text-decoration: none;
        }

        .btn-logout {
        background-color: #778899;
        color: #ffffff; /* Set text color to white */
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .btn-logout:hover {
        background-color: #627180; /* Adjust the color as needed */
    }
    </style>
</head>
<body>
    <h1>SELAMAT DATANG DI APLIKASI CHECKLIST TOILET</h1>
    <div class="container" >
        <ul class="list-group">
            <li class="list-group-item active" aria-current="true">Menu</li>
            <li class="list-group-item"><a href="index.php">Checklist Toilet</a></li>
            <li class="list-group-item"><a href="ind_toilet.php">Data Toilet</a></li>
        </ul>
    </div>
    <div class="container mt-3">
        <button class="btn btn-logout" type="button"><a href="login.php" style="color: #ffffff">Logout</a></button>
    </div>
</body>
</html>