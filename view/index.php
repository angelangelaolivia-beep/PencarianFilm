<?php

include "../controller/FilmController.php";

$controller = new FilmController();

$keyword = "";

if(isset($_GET['keyword'])){
    $keyword = $_GET['keyword'];
}

$dataFilm = $controller->tampilData($keyword);

?>

<!DOCTYPE html>
<html>
<head>

<title>Movie Finder</title>

<link rel="preconnect"
href="https://fonts.googleapis.com">

<link rel="preconnect"
href="https://fonts.gstatic.com"
crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
rel="stylesheet">

<link rel="stylesheet"
href="../assets/style.css">

</head>

<body>

<div class="container">

<h1>🎬 Movie Finder</h1>

<form method="GET" class="search-box">

<input type="text"
name="keyword"
placeholder="Cari film..."
value="<?= $keyword ?>">

<button type="submit">
Cari
</button>

</form>

<a href="tambah.php">
<button class="btn-tambah">
+ Tambah Film
</button>
</a>

<div class="film-container">

<?php

while($film=mysqli_fetch_array($dataFilm)){

?>

<div class="card">

<img src="../assets/poster/<?= $film['poster'] ?>">

<div class="card-body">

<h2><?= $film['judul'] ?></h2>

<p class="genre">
<?= $film['genre'] ?> • <?= $film['tahun'] ?>
</p>

<p class="rating">
⭐ <?= $film['rating'] ?>
</p>

<p class="sinopsis">
<?= $film['sinopsis'] ?>
</p>

<div class="aksi">

<a href="edit.php?id=<?= $film['id_film'] ?>">
<button>Edit</button>
</a>

<a href="../proses/hapus.php?id=<?= $film['id_film'] ?>">
<button class="hapus">
Hapus
</button>
</a>

</div>

</div>

</div>

<?php
}
?>

</div>

</div>

</body>
</html>