<?php
    require 'naive_bayes.php';
    $con = mysqli_connect('localhost','root','','data_training');
    $hasil = '';
   
    if(isset($_POST['submit'])){
        $data = [
            "harga_tanah" => $_POST['harga_tanah'],
            "jarak_bahan" => $_POST['jarak_bahan'],
            "jarak_pasar" => $_POST['jarak_pasar'],
            "transportasi" => $_POST['transportasi'],
            "tenaga_kerja" => $_POST['tenaga_kerja'],
        ];

        $hasil = posteriorProbability($data);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naive Bayes</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <style>
        
    </style>
</head>
<body>
    <p class="h3 text-center">Penentuan Lokasi Pabrik</p>
  
    <form action="" method="POST">
        <label for="harga_tanah">Harga Tanah</label>
        <select name="harga_tanah" id="harga_tanah">
            <option value="Murah">Murah</option>
            <option value="Mahal">Mahal</option>
        </select>

        <label for="jarak_bahan">Jarak Bahan</label>
        <select name="jarak_bahan" id="jarak_bahan">
            <option value="Dekat">Dekat</option>
            <option value="Sedang">Sedang</option>
            <option value="Jauh">Jauh</option>
        </select>

        <label for="jarak_pasar">Jarak Pasar</label>
        <select name="jarak_pasar" id="jarak_pasar">
            <option value="Dekat">Dekat</option>
            <option value="Sedang">Sedang</option>
            <option value="Jauh">Jauh</option>
        </select>

        <label for="transportasi">Transportasi</label>
        <select name="transportasi" id="transportasi">
            <option value="Banyak">Banyak</option>
            <option value="Sedikit">Sedikit</option>
        </select>

        <label for="tenaga_kerja">Tenaga Kerja</label>
        <select name="tenaga_kerja" id="tenaga_kerja">
            <option value="Banyak">Banyak</option>
            <option value="Sedikit">Sedikit</option>
        </select>

        <button type="submit" name="submit">SUBMIT</button>
    </form>

    <p class="h3">Dipilih: <?= $hasil;?></p>
</body>
</html>