<?php

include "../controller/FilmController.php";

$controller = new FilmController();

$id = $_GET['id'];

$query = $controller->editData($id);

$data = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet"
href="../assets/style.css">

</head>

<body>

<div class="container">

<h1>Edit Film</h1>

<form action="../proses/update.php"
method="POST">

<input type="hidden"
name="id"
value="<?= $data['id_film'] ?>">

<input type="text"
name="judul"
value="<?= $data['judul'] ?>">

<input type="text"
name="genre"
value="<?= $data['genre'] ?>">

<input type="number"
name="tahun"
value="<?= $data['tahun'] ?>">

<input type="text"
name="rating"
value="<?= $data['rating'] ?>">

<textarea
name="sinopsis"><?= $data['sinopsis'] ?></textarea>

<input type="text"
name="poster"
value="<?= $data['poster'] ?>">

<button type="submit">
Update
</button>

</form>

</div>

</body>
</html>