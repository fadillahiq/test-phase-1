<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h2 class="text-center">Test PT Berdhaya Gemilang Mandiri</h2>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="siswa1">Siswa 1</label>
                        <input type="text" name="nama1" id="siswa1" class="form-control mb-1" placeholder="Nama Siswa 1" required>
                        <input type="text" name="nilai1" class="form-control" placeholder="Nilai Siswa 1" required>
                    </div>
                    <div class="form-group">
                        <label for="siswa2">Siswa 2</label>
                        <input type="text" name="nama2" id="siswa2" class="form-control mb-1" placeholder="Nama Siswa 2" required>
                        <input type="text" name="nilai2" class="form-control" placeholder="Nilai Siswa 2" required>
                    </div>
                    <div class="form-group">
                        <label for="siswa3">Siswa 3</label>
                        <input type="text" name="nama3" id="siswa3" class="form-control mb-1" placeholder="Nama Siswa 3" required>
                        <input type="text" name="nilai3" class="form-control" placeholder="Nilai Siswa 3" required>
                    </div>
                    <div class="form-group">
                        <label for="siswa4">Siswa 4</label>
                        <input type="text" name="nama4" id="siswa4" class="form-control mb-1" placeholder="Nama Siswa 4" required>
                        <input type="text" name="nilai4" class="form-control" placeholder="Nilai Siswa 4" required>
                    </div>
                    <div class="form-group">
                        <label for="siswa5">Siswa 5</label>
                        <input type="text" name="nama5" id="siswa5" class="form-control mb-1" placeholder="Nama Siswa 5" required>
                        <input type="text" name="nilai5" class="form-control" placeholder="Nilai Siswa 5" required>
                    </div>
                    <input class="btn btn-success btn-sm col-12" type="submit" name="submit" value="Submit" />
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>

</html>

<?php
if (isset($_POST['submit'])) {
    $nama1 = $_REQUEST["nama1"];
    $nilai1 = $_REQUEST["nilai1"];

    $nama2 = $_REQUEST["nama2"];
    $nilai2 = $_REQUEST["nilai2"];

    $nama3 = $_REQUEST["nama3"];
    $nilai3 = $_REQUEST["nilai3"];

    $nama4 = $_REQUEST["nama4"];
    $nilai4 = $_REQUEST["nilai4"];

    $nama5 = $_REQUEST["nama5"];
    $nilai5 = $_REQUEST["nilai5"];

    echo "<div class='container'>";
    echo "<div class='card mt-3'>";
    echo "<div class='card-header'>Hasil</div>";
    echo "<div class='card-body'>";
    
    echo "<fieldset class='form-group border p-3'>";
    echo "<legend class='w-auto px-2'>Siswa 1</legend>";
    echo "Nama Murid : " . $nama1;
    echo "<br>";
    $predikat1 = $nilai1 > 100 || $nilai1 < 0 ? "Nilai : Range yang diperbolehkan 0-100 !"
        : ($nilai1 >= 80 ? "Nilai : A"
            : ($nilai1 >= 60 ? "Nilai : B"
                : ($nilai1 >= 40 ? "Nilai : C"
                    : "Nilai : D")));
    echo $predikat1;
    echo "</fieldset>";

    echo "<fieldset class='form-group border p-3'>";
    echo "<legend class='w-auto px-2'>Siswa 2</legend>";
    echo "Nama Murid : " . $nama2;
    echo "<br>";
    $predikat2 = $nilai2 > 100 || $nilai2 < 0 ? "Range yang diperbolehkan 1-100 !"
        : ($nilai2 >= 80 ? "Nilai : A"
            : ($nilai2 >= 60 ? "Nilai : B"
                : ($nilai2 >= 40 ? "Nilai : C"
                    : "Nilai : D")));
    echo $predikat2;
    echo "</fieldset>";

    echo "<fieldset class='form-group border p-3'>";
    echo "<legend class='w-auto px-2'>Siswa 3</legend>";
    echo "Nama Murid : " . $nama3;
    echo "<br>";
    $predikat3 = $nilai3 > 100 || $nilai3 < 0 ? "Range yang diperbolehkan 1-100 !"
        : ($nilai3 >= 80 ? "Nilai : A"
            : ($nilai3 >= 60 ? "Nilai : B"
                : ($nilai3 >= 40 ? "Nilai : C"
                    : "Nilai : D")));
    echo $predikat3;
    echo "</fieldset>";

    echo "<fieldset class='form-group border p-3'>";
    echo "<legend class='w-auto px-2'>Siswa 4</legend>";
    echo "Nama Murid : " . $nama4;
    echo "<br>";
    $predikat4 = $nilai4 > 100 || $nilai4 < 0 ? "Range yang diperbolehkan 1-100 !"
        : ($nilai4 >= 80 ? "Nilai : A"
            : ($nilai4 >= 60 ? "Nilai : B"
                : ($nilai4 >= 40 ? "Nilai : C"
                    : "Nilai : D")));
    echo $predikat4;
    echo "</fieldset>";

    echo "<fieldset class='form-group border p-3'>";
    echo "<legend class='w-auto px-2'>Siswa 5</legend>";
    echo "Nama Murid : " . $nama5;
    echo "<br>";
    $predikat5 = $nilai5 > 100 || $nilai5 < 0 ? "Range yang diperbolehkan 1-100 !"
        : ($nilai5 >= 80 ? "Nilai : A"
            : ($nilai5 >= 60 ? "Nilai : B"
                : ($nilai5 >= 40 ? "Nilai : C"
                    : "Nilai : D")));
    echo $predikat5;
    echo "</fieldset>";

    echo "</div>";
    echo "</div>";
    echo "</div>";
}
?>