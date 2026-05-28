<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet"
href="../assets/style.css">

</head>

<body>

<div class="container">

<h1>Tambah Film</h1>

<form action="../proses/simpan.php"
method="POST">

<input type="text"
name="judul"
placeholder="Judul Film">

<input type="text"
name="genre"
placeholder="Genre">

<input type="number"
name="tahun"
placeholder="Tahun">

<input type="text"
name="rating"
placeholder="Rating">

<textarea
name="sinopsis"
placeholder="Sinopsis"></textarea>

<input type="text"
name="poster"
placeholder="Nama file poster">

<button type="submit">
Simpan
</button>

</form>

</div>

</body>
</html>