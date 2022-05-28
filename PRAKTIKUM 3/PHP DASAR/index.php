<?php
include("function/function.php");
include("data/dataset.php");
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Praktikum 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<!-- http://localhost:1109/pemWeb/praktikum3/ -->

<body>

    <div class="container">
        <div class="row">
            <!-- soal 1 A -->
            <?php include_once("components/1a.php") ?>

            <!-- soal 1 b -->
            <?php include_once("components/1b.php") ?>

            <!-- soal 2a -->
            <?php include_once("components/2a.php") ?>

            <!-- soal 2b -->
            <?php include_once("components/2b.php") ?>

            <!-- soal 3a -->
            <?php include_once("components/3a.php") ?>

            <!-- soal 3b -->
            <?php include_once("components/3b.php") ?>

            <!-- soal 3c -->
            <?php include_once("components/3c.php") ?>

            <!-- soal 3d -->
            <?php include_once("components/3d.php") ?>

            <!-- soal 3e -->
            <?php include_once("components/3e.php") ?>

            <!-- soal 3f -->
            <?php include_once("components/3f.php") ?>

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>