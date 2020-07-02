<?php
	include"Connect.php";
	$query = "SELECT * FROM sanpham";
	$data = mysqli_query($conn,$query);
	$arrsanpham = array();
	While($row = mysqli_fetch_assoc($data)){
		array_push($arrsanpham,new Sanpham(
			$row['idsp'],
			$row['Tensp'],
			$row['Gia'],
			$row['Hinhanh'],
			$row['Mota'],
			$row['Loaisp']));
	}
	echo json_encode($arrsanpham);
	class Sanpham{
		function Sanpham($idsp,$tensp,$gia,$hinhanh,$mota,$loaisp){
			$this-> idsp = $idsp;
			$this-> tensp = $tensp;
			$this-> gia = $gia;
			$this-> hinhanh = $hinhanh;
			$this-> mota = $mota;
			$this-> loaisp = $loaisp;
		}
	}

?>