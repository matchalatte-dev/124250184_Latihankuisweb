<?php
$nama = $_POST['nama'];
$kucing = $_POST['kucing'];
$alamat = $_POST['alamat'];
$pembayaran = $_POST['pembayaran'];

list($namaKucing, $hargaKucing) = explode("-", $kucing);

$totalTambahan = 0;
$tambahanList = [];

if(isset($_POST['tambahan'])){
    foreach($_POST['tambahan'] as $t){
        list($namaT, $hargaT) = explode("-", $t);
        $totalTambahan += $hargaT;
        $tambahanList[] = $namaT;
    }
   }

$total = $hargaKucing + $totalTambahan;

$gambar = "";
if($namaKucing == "Joko") $gambar = "1.jpeg";
elseif($namaKucing == "Juminten") $gambar = "2.jpeg";
elseif($namaKucing == "Iput") $gambar = "3.jpeg";
elseif($namaKucing == "Nyimeng") $gambar = "4.jpeg";
elseif($namaKucing == "Sukijat") $gambar = "5.jpeg";
elseif($namaKucing == "Kurniawan") $gambar = "6.jpeg";
?>

<!DOCTYPE html>
<html>
<head>
<title>Hasil</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body {
    background-color: #d8c7a8;
    font-weight: bold;
}

.hasil-box {
    max-width: 420px;
    margin: 60px auto;
    background: #f3e5d0;
    padding: 20px;
    border-radius: 12px;
}

img {
    width: 100%;
    border-radius: 10px;
    margin-bottom: 10px;
}

.btn-warning {
    background-color: #e6a84a;
    border: none;
    font-weight: bold;
}
</style>
</head>

<body>

<div class="hasil-box">

<div class="alert" style="background:#f0b429;">
Mantap! <?php echo $nama; ?> berhasil mengadopsi <?php echo $namaKucing; ?>
</div>

<img src="<?php echo $gambar; ?>">

<h5 class="text-center fw-bold">Detail Adopsi</h5>

<p>Nama: <?php echo $nama; ?></p>
<p>Kucing: <?php echo $namaKucing; ?></p>
<p>Alamat: <?php echo $alamat; ?></p>
<p>Pembayaran: <?php echo $pembayaran; ?></p>

<p>Tambahan:</p>
<ul>
<?php
foreach($tambahanList as $t){
    echo "<li>$t</li>";
}
?>
</ul>

<hr>

<p>Harga Kucing: Rp <?php echo $hargaKucing; ?></p>
<p>Total Tambahan: Rp <?php echo $totalTambahan; ?></p>
<p>Total Akhir: Rp <?php echo $total; ?></p>

<a href="index.html" class="btn btn-warning w-100">Kembali</a>

</div>

</body>
</html>