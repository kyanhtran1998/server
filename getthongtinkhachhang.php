<?php
	include"Connect.php";
	if ($_SERVER['REQUEST_METHOD']=='POST') {
	$tenkhachhang= $_POST['tenkh'];
	$sodienthoai=  $_POST['sdtkh'];
	$diachi= $_POST['diachikh'];

	$query = "INSERT INTO donhang(Madonhang,Tenkhachhang, Diachi, Sodienthoai) VALUES (Null,'$tenkhachhang','$diachi','$sodienthoai')";
	if(mysqli_query($conn,$query)){
		$iddonhang = $conn -> insert_id;
		echo $iddonhang;
	}else{
		echo "loiii";
	}

}
?>