<?php
    $id = $_POST['id'];

	$con = mysqli_connect("localhost","root","","db_rentalsepeda");
	$sql = "DELETE FROM tbuser where id='$id'";
	$json["hasil"]=array();
    if($con->query($sql) === TRUE) {
		$json["hasil"]["respon"]=true;
	}else{
		$json["hasil"]["respon"]=false;
	}
	echo json_encode($json);
?>