<?php
    $kode  = $_POST['kode'];
    $merk  = $_POST['merk'];
    $warna = $_POST['warna'];
	$gambar = $_FILES['gambar']['name'];
    $hargasewa = $_POST['hargasewa'];

   
    $asal = $_FILES['gambar']['tmp_name'];

    move_uploaded_file($asal,'upload/' .$gambar);
    
    $con = mysqli_connect("localhost","root","","dbrentalkamera");
    $sql = "INSERT INTO tbkamera(kode, merk, warna, hargasewa) VALUES ('$kode', '$merk','$warna','$hargasewa') ";

   $json["hasil"]=array();
    if($con->query($sql) === TRUE) {
        $json["hasil"]["respon"]=true;
    }else{
        $json["hasil"]["respon"]=false;
    }
    echo json_encode($json);
?>