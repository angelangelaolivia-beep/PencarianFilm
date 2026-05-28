<?php

include "../controller/FilmController.php";

$controller = new FilmController();

$controller->hapusData($_GET['id']);

header("location:../view/index.php");

?>