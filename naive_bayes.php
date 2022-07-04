<?php
require 'koneksi.php';

function totalDataTraining(){
    global $con;
    return (int) mysqli_fetch_row(mysqli_query($con, "SELECT COUNT(*) FROM pabrik"))[0];
}

function jumlahDataKelas(){
    global $con;
    $query = "SELECT COUNT(*) FROM pabrik WHERE pilih=";

    $jumlahDataPilih['Ya'] = (int) mysqli_fetch_row(mysqli_query($con, $query . "'Ya'"))[0];
    $jumlahDataPilih['Tidak'] = (int) mysqli_fetch_row(mysqli_query($con, $query . "'Tidak'"))[0];
    return $jumlahDataPilih;
}

function priorProbability(){
    $kelas['Ya'] = jumlahDataKelas()['Ya'] / totalDataTraining();
    $kelas['Tidak'] = jumlahDataKelas()['Tidak'] / totalDataTraining();
    return $kelas;

}

function conditionalProbability($nama_kolom, $nilai){
    global $con;
    $query = "SELECT COUNT($nama_kolom) FROM pabrik WHERE $nama_kolom = '$nilai' AND pilih=";
    $conditionalProbability['Ya'] = (int) mysqli_fetch_row(mysqli_query($con, $query . "'Ya'"))[0] / jumlahDataKelas()['Ya'];
    $conditionalProbability['Tidak'] = (int) mysqli_fetch_row(mysqli_query($con, $query . "'Tidak'"))[0] / jumlahDataKelas()['Tidak'];

    return $conditionalProbability;
}

function posteriorProbability($data){
    $atribut['harga_tanah'] = conditionalProbability('harga_tanah', $data['harga_tanah']);
    $atribut['jarak_bahan'] = conditionalProbability('jarak_bahan', $data['jarak_bahan']);
    $atribut['jarak_pasar'] = conditionalProbability('jarak_pasar', $data['jarak_pasar']);
    $atribut['transportasi'] = conditionalProbability('transportasi', $data['transportasi']);
    $atribut['tenaga_kerja'] = conditionalProbability('tenaga_kerja', $data['tenaga_kerja']);
    

    $probabilitas['Ya'] = $atribut['harga_tanah']['Ya'] * $atribut['jarak_bahan']['Ya'] * $atribut['jarak_pasar']['Ya'] * $atribut['transportasi']['Ya'] * $atribut['tenaga_kerja']['Ya'] * priorProbability()['Ya'];
    $probabilitas['Tidak'] = $atribut['harga_tanah']['Tidak'] * $atribut['jarak_bahan']['Tidak'] * $atribut['jarak_pasar']['Tidak'] * $atribut['transportasi']['Tidak'] * $atribut['tenaga_kerja']['Tidak'] * priorProbability()['Tidak'];

    if ($probabilitas['Ya'] > $probabilitas['Tidak']) {
        return 'Ya';
    }

    elseif ($probabilitas['Ya'] < $probabilitas['Tidak']) {
        return 'Tidak';
    }
}

