<?php

include "../model/FilmModel.php";

class FilmController{

    public $model;

    public function __construct(){

        $this->model = new FilmModel();
    }

    public function tampilData($keyword=""){

        return $this->model->tampilFilm($keyword);
    }

    public function simpanData(
        $judul,
        $genre,
        $tahun,
        $rating,
        $sinopsis,
        $poster
    ){

        $this->model->tambahFilm(
            $judul,
            $genre,
            $tahun,
            $rating,
            $sinopsis,
            $poster
        );
    }

    public function editData($id){

        return $this->model->editFilm($id);
    }

    public function updateData(
        $id,
        $judul,
        $genre,
        $tahun,
        $rating,
        $sinopsis,
        $poster
    ){

        $this->model->updateFilm(
            $id,
            $judul,
            $genre,
            $tahun,
            $rating,
            $sinopsis,
            $poster
        );
    }

    public function hapusData($id){

        $this->model->hapusFilm($id);
    }

}

?>