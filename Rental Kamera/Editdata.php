
<?php
    $id = $_POST['id'];
	$nama = $_POST['nama'];
    $email = $_POST['email'];
	$nohp = $_POST['nohp'];
	$alamat = $_POST['alamat'];
	$noktp = $_POST['noktp'];
	$con = mysqli_connect("localhost","root","","dbrentalkamera");
	$sql = "UPDATE tbuser SET  nama='$nama',email='$email', noktp='$noktp', nohp='$nohp', alamat='$alamat' WHERE id='$id'";
	$json["hasil"]=array();
    if($con->query($sql) === TRUE) {
		$json["hasil"]["respon"]=true;
	}else{
		$json["hasil"]["respon"]=false;
	}
	echo json_encode($json);

?>