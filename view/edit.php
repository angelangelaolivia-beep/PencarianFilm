<?php
include "../config/koneksi.php";

$id = $_GET['id'];

$query = mysqli_query($conn, "SELECT * FROM film WHERE id_film='$id'");
$data = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Film</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #050505, #181818);
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
        }

        .edit-card {
            width: 520px;
            background: #141414;
            padding: 35px;
            border-radius: 18px;
            box-shadow: 0 0 35px rgba(229, 9, 20, 0.45);
        }

        h1 {
            text-align: center;
            color: #e50914;
            font-size: 48px;
            margin-bottom: 10px;
        }

        .subtitle {
            text-align: center;
            color: #aaa;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 16px;
        }

        label {
            display: block;
            margin-bottom: 7px;
            font-weight: bold;
        }

        input,
        textarea {
            width: 100%;
            padding: 13px;
            border-radius: 8px;
            border: 1px solid #333;
            background: #242424;
            color: white;
            font-size: 15px;
            outline: none;
        }

        input:focus,
        textarea:focus {
            border-color: #e50914;
        }

        textarea {
            height: 110px;
            resize: none;
        }

        .button-group {
            display: flex;
            justify-content: space-between;
            margin-top: 25px;
        }

        .btn-kembali,
        .btn-update {
            padding: 12px 25px;
            border-radius: 8px;
            text-decoration: none;
            border: none;
            font-weight: bold;
            cursor: pointer;
        }

        .btn-kembali {
            background: #333;
            color: white;
        }

        .btn-update {
            background: #e50914;
            color: white;
        }

        .btn-kembali:hover {
            background: #555;
        }

        .btn-update:hover {
            background: #b20710;
        }
    </style>
</head>

<body>

    <div class="edit-card">

        <h1>Edit Film</h1>
        <p class="subtitle">Perbarui data film yang dipilih</p>

        <form action="../proses/update.php" method="POST">

            <input type="hidden" name="id_film" value="<?= $data['id_film']; ?>">

            <div class="form-group">
                <label>Judul Film</label>
                <input type="text" name="judul" value="<?= $data['judul']; ?>">
            </div>

            <div class="form-group">
                <label>Genre</label>
                <input type="text" name="genre" value="<?= $data['genre']; ?>">
            </div>

            <div class="form-group">
                <label>Tahun</label>
                <input type="text" name="tahun" value="<?= $data['tahun']; ?>">
            </div>

            <div class="form-group">
                <label>Rating</label>
                <input type="text" name="rating" value="<?= $data['rating']; ?>">
            </div>

            <div class="form-group">
                <label>Deskripsi</label>
                <textarea name="sinopsis"><?= $data['deskripsi'] ?? ''; ?></textarea>
            </div>

            <div class="form-group">
                <label>Poster</label>
                <input type="text" name="poster" value="<?= $data['poster']; ?>">
            </div>

            <div class="button-group">
                <a href="index.php" class="btn-kembali">Kembali</a>
                <button type="submit" class="btn-update">Update Film</button>
            </div>

        </form>

    </div>

</body>
</html>