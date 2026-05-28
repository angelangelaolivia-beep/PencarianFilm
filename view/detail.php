<?php
include "../config/koneksi.php";

$id = $_GET['id'];

$query = mysqli_query($conn, "SELECT * FROM film WHERE id_film='$id'");
$data = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Detail Film</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #111;
            color: white;
        }

        .detail-container {
            min-height: 100vh;
            padding: 60px;
            background: linear-gradient(to right, #000 35%, rgba(0,0,0,0.6));
        }

        .detail-card {
            display: flex;
            gap: 40px;
            max-width: 1000px;
            margin: auto;
            background: #181818;
            padding: 35px;
            border-radius: 18px;
            box-shadow: 0 0 30px rgba(229, 9, 20, 0.35);
        }

        .poster img {
            width: 280px;
            height: 400px;
            object-fit: cover;
            border-radius: 15px;
        }

        .info h1 {
            color: #e50914;
            font-size: 42px;
            margin-bottom: 15px;
        }

        .meta {
            color: #bbb;
            margin-bottom: 20px;
        }

        .rating {
            color: #ffd700;
            font-size: 20px;
            margin-bottom: 20px;
        }

        .deskripsi {
            line-height: 1.7;
            color: #ddd;
            margin-bottom: 30px;
        }

        .btn-kembali {
            display: inline-block;
            background: #e50914;
            color: white;
            padding: 12px 22px;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
        }

        .btn-kembali:hover {
            background: #b20710;
        }
    </style>
</head>
<body>

<div class="detail-container">

    <div class="detail-card">

        <div class="poster">
            <img src="../assets/poster/<?= $data['poster']; ?>" alt="<?= $data['judul']; ?>">
        </div>

        <div class="info">
            <h1><?= $data['judul']; ?></h1>

            <div class="meta">
                <?= $data['genre']; ?> | <?= $data['tahun']; ?>
            </div>

            <div class="rating">
                ⭐ <?= $data['rating']; ?>/10
            </div>

            <p class="deskripsi">
                <?= $data['sinopsis']; ?>
            </p>

            <a href="index.php" class="btn-kembali">Kembali</a>
        </div>

    </div>

</div>

</body>
</html>