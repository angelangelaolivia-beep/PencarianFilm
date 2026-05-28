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

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins', sans-serif;
}

body{
    background:#111;
    color:white;
}

.container{
    width:90%;
    margin:auto;
    padding:40px 0;
}

h1{
    font-size:50px;
    color:#e50914;
    margin-bottom:25px;
}

.top-bar{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:35px;
    flex-wrap:wrap;
    gap:15px;
}

.search-box{
    display:flex;
    gap:10px;
}

.search-box input{
    width:280px;
    padding:12px;
    border:none;
    border-radius:8px;
    outline:none;
    background:#222;
    color:white;
}

.search-box button{
    padding:12px 18px;
    border:none;
    border-radius:8px;
    background:#e50914;
    color:white;
    cursor:pointer;
    font-weight:bold;
}

.btn-tambah{
    padding:12px 20px;
    border:none;
    border-radius:8px;
    background:#e50914;
    color:white;
    cursor:pointer;
    font-weight:bold;
}

.film-container{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
    gap:25px;
}

.card{
    background:#1b1b1b;
    border-radius:15px;
    overflow:hidden;
    transition:0.3s;
    box-shadow:0 5px 20px rgba(0,0,0,0.4);
}

.card:hover{
    transform:translateY(-8px);
}

.card img{
    width:100%;
    height:320px;
    object-fit:cover;
}

.card-body{
    padding:18px;
}

.card-body h2{
    font-size:22px;
    margin-bottom:10px;
}

.genre{
    color:#bbb;
    margin-bottom:10px;
}

.rating{
    color:#ffd700;
    margin-bottom:15px;
}

.sinopsis{
    color:#ddd;
    font-size:14px;
    line-height:1.6;
    margin-bottom:20px;

    display:-webkit-box;
    -webkit-line-clamp:3;
    -webkit-box-orient:vertical;
    overflow:hidden;
}

.aksi{
    display:flex;
    flex-direction:column;
    gap:10px;
}

.aksi a{
    text-decoration:none;
}

.btn-detail,
.btn-edit,
.btn-hapus{
    width:100%;
    padding:10px;
    border:none;
    border-radius:8px;
    cursor:pointer;
    font-weight:bold;
}

.btn-detail{
    background:#e50914;
    color:white;
}

.btn-edit{
    background:#333;
    color:white;
}

.btn-hapus{
    background:#555;
    color:white;
}

.btn-detail:hover{
    background:#b20710;
}

.btn-edit:hover{
    background:#444;
}

.btn-hapus:hover{
    background:#777;
}

</style>

</head>

<body>

<div class="container">

<h1>🎬 Movie Finder</h1>

<div class="top-bar">

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

</div>

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
⭐ <?= $film['rating'] ?>/10
</p>

<p class="sinopsis">
<?= $film['sinopsis'] ?>
</p>

<div class="aksi">

<a href="detail.php?id=<?= $film['id_film'] ?>">
<button class="btn-detail">
Lihat Detail
</button>
</a>

<a href="edit.php?id=<?= $film['id_film'] ?>">
<button class="btn-edit">
Edit Film
</button>
</a>

<a href="../proses/hapus.php?id=<?= $film['id_film'] ?>"
onclick="return confirm('Yakin ingin menghapus film ini?')">

<button class="btn-hapus">
Hapus Film
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