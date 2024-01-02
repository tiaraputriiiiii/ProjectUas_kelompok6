<?php
include("koneksi.php");

$q = "";
if (isset($_GET['submit']) && !empty($_GET['q'])) {
    $q = $_GET['q'];
    $sql_where = "WHERE keterangan LIKE '%".$q."%' or lokasi LIKE '%".$q."%'";
}
$title = 'Toilet';
$sql = 'SELECT * FROM toilet ';
if (isset($sql_where))
    $sql .= $sql_where;
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>KELOMPOK 6 PROJECT UAS</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body style="margin-top: 30px; background-color: #fffff; ">
    <div class="container" class="container" style="background-color: #fffff; width: 50%; padding: 30px;  width: 250%; border-radius: 10px; box-shadow: 0 0 20px rgba(0,0,0,0.3);">
        <br><br>
        <div class="head">
        <h1 style="color: #00000;">Data Toilet</h1>
        <form>
            <div class="form-group" action="index.php" method="get" >
                <label for="q" style="color: #FFFFFF;">Cari Data Toilet</label>
                <input type="text" placeholder="Masukkan Pencarian"  id="q" name="q" class="input-q" value="<?php echo $q ?>">
                <button type="submit" name="submit" class="btn btn-primary">Cari</button>
            </div>
        </form>
        </div>
        <div class="main">
            <table class="table table-striped table-hover">
            <tr>
                <th style="color: #00000;">Kode Toilet</th>
                <th style="color: #00000;">Lokasi Toilet</th>
                <th style="color: #00000;">Keterangan</th>
                <th style="color: #00000;">Aksi</th>
            </tr>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
                <td style="color: #00000;"><?= $row['id'];?></td>
                <td style="color: #00000;"><?= $row['lokasi'];?></td>
                <td style="color: #00000;"><?= $row['keterangan'];?></td>
                <td style="color: #00000;">
                    <button class="btn" type="button" style="background-color: #87cefa; width: 45%;"><a style="color: #FFFFFF;" href="ubah.php?id=<?= $row['id'];?>">Ubah Data</a></button> 
                    <button class="btn" type="button" style="background-color: #b0c4de; width: 50%;"><a style="color: #FFFFFF;" href="hapus.php?id=<?= $row['id'];?>">Hapus Data</a></button>
                </td>
            </tr>
            <?php endwhile; else: ?>
            <tr>
                <td style="color: #FFFFFF;" colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
            </table>
        </div><br><br><br>
        <div>
        <button class="btn" type="button" style="background-color: #778899;"><a style="color: #FFFFFF" href="tam_toilet.php">Tambah Data Toilet</a></button>
        </div> <br>
        <div>
        <button class="btn" type="button" style="background-color: #778899;"><a style="color: #FFFFFF" href="home.php">Kembali</a></button>
        </div>
    </div>
</body>
</html>