<?php
  $id = $_POST['id'];
	$email = $_POST['email'];
	$nama = $_POST['nama'];
	$noktp = $_POST['noktp'];
	$nohp = $_POST['nohp'];
	$alamat = $_POST['alamat'];
	$con = mysqli_connect("localhost","root","","dbrentalkamera");
	$sql = "UPDATE tbuser SET email='$email', nama='$nama', noktp='$noktp', nohp='$nohp', alamat='$alamat' WHERE id='$id'";
	$json["hasil"]=array();
    if($con->query($sql) === TRUE) {
		$json["hasil"]["respon"]=true;
	}else{
		$json["hasil"]["respon"]=false;
	}
	echo json_encode($json);
?>
?>