<?php
    $noktp = $_POST['noktp'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $nohp = $_POST['nohp'];
    $alamat = $_POST['alamat'];

    $con = mysqli_connect("localhost", "root", "", "db_rentalsepeda");

    $json["Result"]["STATUS"] = "FAILED";
    
    if ($noktp != "" && $email != "" && $password != "" && $nama != "" && $nohp != "" && $alamat != "") {

        $sql = "INSERT into tbuser (noktp, email, password, nama, nohp, alamat, roleuser) values ('$noktp', '$email', '$password', '$nama', '$nohp', '$alamat', 2)";

        if ($con->query($sql) === TRUE) {
            $json["Result"]["STATUS"] = "SUCCESS";
        }
    }
    echo json_encode($json);
?>