<?php
include("koneksi.php");

$q = "";
if (isset($_GET['submit']) && !empty($_GET['q'])) {
    $q = $_GET['q'];
    $sql_where = "WHERE tanggal LIKE '%".$q."%' or toilet_id LIKE '%".$q."%' or kloset LIKE '%".$q."%' or wastafel LIKE '%".$q."%' or lantai LIKE '%".$q."%' or dinding LIKE '%".$q."%' or sabun LIKE '%".$q."%' or bau LIKE '%".$q."%' or users_id LIKE '%".$q."%'" ;


}
$title = 'Checklist Toilet';
$sql = 'SELECT * FROM checklist ';
if (isset($sql_where))
    $sql .= $sql_where;
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kelompok 6 Project UAS</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body style="margin-top: 30px; background-color: #ffff;">
    <div class="container" style="background-color: #ffff; width: 250%; padding: 10px; border-radius: 10px; box-shadow: 0 0 20px rgba(0,0,0,0.3);">
        <br><br>
        <div class="head">
        <h1 style="color: #00000;">Checklist Toilet</h1>
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
                <th style="color: #00000;">Tanggal</th>
                <th style="color: #00000; width: 5%;">Kode Toilet</th>
                <th style="color: #00000;">Kloset</th>
                <th style="color: #00000;">Wastafel</th>
                <th style="color: #00000;">Lantai</th>
                <th style="color: #00000;">Dinding</th>
                <th style="color: #00000;">Kaca</th>
                <th style="color: #00000;">Bau</th>
                <th style="color: #00000;">Sabun</th>
                <th style="color: #00000;">Petugas</th>
                <th style="color: #00000; width: 5%;">ID Barang</th>
                <th style="color: #00000;">Aksi</th>
            </tr>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
                <td style="color: #00000;"><?= $row['tanggal'];?></td>
                <td style="color: #00000;"><?= $row['toilet_id'];?></td>
                <td style="color: #00000;"><?= $row['kloset'];?></td>
                <td style="color: #00000;"><?= $row['wastafel'];?></td>
                <td style="color: #00000;"><?= $row['lantai'];?></td>
                <td style="color: #00000;"><?= $row['dinding'];?></td>
                <td style="color: #00000;"><?= $row['kaca'];?></td>
                <td style="color: #00000;"><?= $row['bau'];?></td>
                <td style="color: #00000;"><?= $row['sabun'];?></td>
                <td style="color: #00000;"><?= $row['users_id'];?></td>
                <td style="color: #00000;"><?= $row['id'];?></td>
                <td style="color: #00000;">
                    <button class="btn" type="button" style="background-color: #87cefa; width: 45%;"><a style="color: #FFFFFF;" href="ubah.php?id=<?= $row['id'];?>">Ubah Data</a></button> 
                    <button class="btn" type="button" style="background-color: #b0c4de; width: 50%;"><a style="color: #FFFFFF;" href="hapus.php?id=<?= $row['id'];?>">Hapus Data</a></button>
                </td>
            </tr>
            <?php endwhile; else: ?>
            <tr>
                <td style="color: #00000;" colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
            </table>
        </div><br><br><br>
        <div>
        <button class="btn" type="button" style="background-color: #778899;"><a style="color: #000000" href="tambah.php">Tambah Data Checklist</a></button>
        </div> <br>
        <div>
        <button class="btn" type="button" style="background-color: #778899;"><a style="color: #000000" href="home.php">Kembali</a></button>
        </div>
    </div>
</body>
</html>