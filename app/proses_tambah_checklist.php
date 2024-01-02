<?php
include("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tanggal = $_POST["tanggal"];
    $toilet_id = $_POST["toilet_id"];
    $kloset = $_POST["kloset"];
    $wastafel = $_POST["wastafel"];
    $lantai = $_POST["lantai"];
    $dinding = $_POST["dinding"];
    $kaca = $_POST["kaca"];
    $bau = $_POST["bau"];
    $sabun = $_POST["sabun"];
    $users_id = $_POST["users_id"];

    // Tambahkan validasi atau pembersihan data jika diperlukan

    $sql = "INSERT INTO checklist (tanggal, toilet_id, kloset, wastafel, lantai, dinding, kaca, bau, sabun, users_id) ";
    $sql .= "VALUES ('$tanggal', '$toilet_id', '$kloset', '$wastafel', '$lantai', '$dinding', '$kaca', '$bau', '$sabun', '$users_id')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("location: index.php");
    } else {
        echo "Gagal menyimpan data.";
    }
}
?>
