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
    <link rel="stylesheet" href="style/style.css">
    <link rel="shortcut icon" href="img/spongebob.jpg" type="image/x-icon">
</head>
<body>
    <div class="container-fluid register ">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                <h3>Naive Bayes Simulator</h3>
                <p>Penentuan Lokasi Pabrik berdasarkan beberapa parameter</p>
                <h3>Dipilih: <?= $hasil;?></h3>
            </div>
            <div class="col-md-9 register-right">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Penentuan Lokasi Pabrik</h3>
                        <div class="row register-form">  
                            <form action="" method="POST">
                                <div class="col-md-6">
                                    <div class="mb-3 form-group">
                                        <label for="harga_tanah" class="form-label">Harga Tanah</label>
                                        <select class="form-control" name="harga_tanah" id="harga_tanah">
                                            <option class="hidden"  selected disabled>-Pilih-</option>
                                            <option value="Murah">Murah</option>
                                            <option value="Mahal">Mahal</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 form-group">
                                        <label for="jarak_bahan" class="form-label">Jarak Bahan</label>
                                        <select class="form-control" name="jarak_bahan" id="jarak_bahan">
                                            <option class="hidden"  selected disabled>-Pilih-</option>
                                            <option value="Dekat">Dekat</option>
                                            <option value="Sedang">Sedang</option>
                                            <option value="Jauh">Jauh</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 form-group">
                                        <label for="jarak_pasar" class="form-label">Jarak Pasar</label>
                                        <select class="form-control" name="jarak_pasar" id="jarak_pasar">
                                            <option class="hidden"  selected disabled>-Pilih-</option>
                                            <option value="Dekat">Dekat</option>
                                            <option value="Sedang">Sedang</option>
                                            <option value="Jauh">Jauh</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 form-group">
                                        <label for="transportasi" class="form-label">Transportasi</label>
                                        <select class="form-control" name="transportasi" id="transportasi">
                                            <option class="hidden"  selected disabled>-Pilih-</option>
                                            <option value="Banyak">Banyak</option>
                                            <option value="Sedikit">Sedikit</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 form-group">
                                        <label for="tenaga_kerja" class="form-label">Tenaga Kerja</label>
                                        <select class="form-control" name="tenaga_kerja" id="tenaga_kerja">
                                            <option class="hidden"  selected disabled>-Pilih-</option>
                                            <option value="Banyak">Banyak</option>
                                            <option value="Sedikit">Sedikit</option>
                                        </select>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary">SUBMIT</button>
                                </div> 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
