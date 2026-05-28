<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "db_film"
);

if(!$conn){
    die("Koneksi gagal");
}

?>