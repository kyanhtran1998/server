<?php
	include"Connect.php";
	$json = $_POST['json'];
	$data = json_decode($json,true);
	foreach ($data as $value) {
		$madonhang = $value['madonhang'];
		$tensanpham = $value['tensanpham'];
		$soluong= $value['soluongsanpham'];
		$giatien = $value['giasanpham'];
		$idsp = $value['masanpham'];
		 $query ="INSERT INTO `chitietdonhang`(idma,Tensp,Soluong,Giatien,Madonhang,idsp) VALUES (null,'$tensanpham','$soluong','$giatien','$madonhang','$idsp')";
		$dulieu = mysqli_query($conn,$query);

	}	


	if($dulieu){
		echo "1";
	}
?>