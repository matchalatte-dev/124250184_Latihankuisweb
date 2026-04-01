<!DOCTYPE html>
<html>
<head>
<title>Form Adopsi</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body {
    background-color: #d8c7a8;
    font-weight: bold;
}

.form-box {
    max-width: 520px;
    margin: 60px auto;
    background: #f3e5d0;
    padding: 25px;
    border-radius: 12px;
}

.btn-warning {
    background-color: #e6a84a;
    border: none;
    font-weight: bold;
}
</style>
</head>

<body>

<div class="form-box">

<h4 class="text-center fw-bold">Adopsi Meng</h4>
<p class="text-center">Saatnya membawa anak bulu untuk menghiburmu!</p>

<form action="hasil.php" method="POST">

<label>Nama Lengkap</label>
<input type="text" name="nama" class="form-control mb-2" placeholder="Masukkan nama lengkap anda">

<label>Kucing Pilihan</label>
<select name="kucing" class="form-control mb-2">
<option value="Joko-3000000">Joko (3000k)</option>
<option value="Juminten-5000000">Juminten (5000k)</option>
<option value="Iput-4000000">Iput (4000k)</option>
<option value="Nyimeng-1500000">Nyimeng (1500k)</option>
<option value="Sukijat-2000000">Sukijat (2000k)</option>
<option value="Kurniawan-3500000">Kurniawan (3500k)</option>
</select>

<label>Alamat Rumah</label>
<textarea name="alamat" class="form-control mb-2" placeholder="Tulis Alamat Rumah Anda"></textarea>

<label>Tambahan untuk meng</label><br>

<input type="checkbox" name="tambahan[]" value="Vaksin-600000"> Vaksin (600k)<br>
<input type="checkbox" name="tambahan[]" value="Aksesoris-200000"> Baju & Aksesoris (200k)<br>
<input type="checkbox" name="tambahan[]" value="Snack-100000"> Snack (100k)<br>
<input type="checkbox" name="tambahan[]" value="Kandang-1000000"> Kandang (1000k)

<br><br>

<label>Metode Pembayaran</label>
<select name="pembayaran" class="form-control mb-3">
<option>Qris</option>
<option>Dana</option>
<option>Gopay</option>
<option>Ovo</option>
</select>

<button class="btn btn-warning w-100">Adopsi Sekarang</button>

</form>

</div>

</body>
</html>