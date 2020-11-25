<?php
    $kode = $_POST['kode'];
    $merk = $_POST['merk'];
    $jenis = $_POST['jenis'];
    $warna = $_POST['warna'];
    $hargasewa = $_POST['hargasewa'];

    $con = mysqli_connect("localhost", "root", "", "db_rentalsepeda");

    $json["Result"]["STATUS"] = "FAILED";
    
    if ($merk != "" && $jenis != "" && $warna != "" && $hargasewa != "") {

        $sql = "INSERT into tbsepeda (kode, merk, jenis, warna, hargasewa) values ('$kode', '$merk', '$jenis', '$warna', '$hargasewa')";

        if ($con->query($sql) === TRUE) $json["Result"]["STATUS"] = "SUCCESS";
    }
    
    echo json_encode($json);
?>