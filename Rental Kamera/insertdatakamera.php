<?php
	$kodekamera = $_POST['kodekamera'];
	$merkkamera = $_POST['merkkamera'];
    $warnakamera = $_POST['warnakamera'];
    $hargasewa = $_POST['hargasewa'];

    $gambarkamera = $_FILES['gambarkamera']['name'];
    $asal = $_FILES['gambarkamera']['tmp_name'];

    move_uploaded_file($asal, 'upload/' .$gambarkamera);

	$con = mysqli_connect("localhost	","root","","dbrentalkamera");
	$sql = "INSERT INTO tbadddata (kodekamera , merkkamera , warnakamera , gambarkamera, hargasewa) VALUES ('$kodekamera', '$merkkamera', '$warnakamera', '$gambarkamera', '$hargasewa')  ";
	$json["hasil"]=array();
    if($con->query($sql) === TRUE) {
		$json["hasil"]["respon"]=true;
	}else{
		$json["hasil"]["respon"]=false;
	}
	echo json_encode($json);
?>