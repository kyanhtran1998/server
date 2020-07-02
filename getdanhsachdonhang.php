<?php
	include"Connect.php";
	$query = "SELECT * FROM donhang";
	$data = mysqli_query($conn,$query);
	$arrsanpham = array();
	While($row = mysqli_fetch_assoc($data)){
		array_push($arrsanpham,new Sanpham(
			$row['Madonhang'],
			$row['Tenkhachhang'],
			$row['Diachi'],
			$row['Sodienthoai']));
	}
	echo json_encode($arrsanpham);
	class Sanpham{
		function Sanpham($Madonhang,$Tenkhachhang,$Diachi,$Sodienthoai){
			$this-> Madonhang = $Madonhang;
			$this-> Tenkhachhang = $Tenkhachhang;
			$this-> Diachi = $Diachi;
			$this-> Sodienthoai = $Sodienthoai;
		}
	}

?>