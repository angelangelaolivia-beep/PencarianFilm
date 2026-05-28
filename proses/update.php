<?php

include "../controller/FilmController.php";

$controller = new FilmController();

$controller->updateData(
    $_POST['id_film'],
    $_POST['judul'],
    $_POST['genre'],
    $_POST['tahun'],
    $_POST['rating'],
    $_POST['sinopsis'],
    $_POST['poster']
);

header("location:../view/index.php");

?>