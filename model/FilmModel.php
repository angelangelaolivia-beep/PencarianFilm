<?php

include "../config/koneksi.php";

class FilmModel{

    public function tampilFilm($keyword=""){

        global $conn;

        $sql = "SELECT * FROM film
                WHERE judul LIKE '%$keyword%'
                OR genre LIKE '%$keyword%'
                ORDER BY id_film DESC";

        return mysqli_query($conn,$sql);
    }

    public function tambahFilm(
        $judul,
        $genre,
        $tahun,
        $rating,
        $sinopsis,
        $poster
    ){

        global $conn;

        $sql = "INSERT INTO film
                VALUES(
                '',
                '$judul',
                '$genre',
                '$tahun',
                '$rating',
                '$sinopsis',
                '$poster'
                )";

        mysqli_query($conn,$sql);
    }

    public function editFilm($id){

        global $conn;

        $sql = "SELECT * FROM film
                WHERE id_film='$id'";

        return mysqli_query($conn,$sql);
    }

    public function updateFilm(
        $id,
        $judul,
        $genre,
        $tahun,
        $rating,
        $sinopsis,
        $poster
    ){

        global $conn;

        $sql = "UPDATE film SET
                judul='$judul',
                genre='$genre',
                tahun='$tahun',
                rating='$rating',
                sinopsis='$sinopsis',
                poster='$poster'
                WHERE id_film='$id'";

        mysqli_query($conn,$sql);
    }

    public function hapusFilm($id){

        global $conn;

        $sql = "DELETE FROM film
                WHERE id_film='$id'";

        mysqli_query($conn,$sql);
    }

}

?>