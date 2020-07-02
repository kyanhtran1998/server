<?php
	include"Connect.php";
	$query = "SELECT Sdt FROM taikhoan";
	$data = mysqli_query($conn,$query);
	$arrsanpham = array();
	While($row = mysqli_fetch_assoc($data)){
		array_push($arrsanpham,new tkhoan($row['Sdt']));
	}
	echo json_encode($arrsanpham);
	class tkhoan{
		function tkhoan($Sdt){
			$this-> Sdt = $Sdt;
		}
	}

?>