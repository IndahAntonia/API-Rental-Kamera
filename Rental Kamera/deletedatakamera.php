<?php
	$id = $_POST['id'];
	$con = mysqli_connect("localhost","root","","dbrentalkamera");
	$sql = "DELETE FROM tbadddata where id = $id";
	$json["hasil"]=array();
    if($con->query($sql) === TRUE) {
		$json["hasil"]["respon"]=true;
	}else{
		$json["hasil"]["respon"]=false;
	}
	echo json_encode($json);
?>