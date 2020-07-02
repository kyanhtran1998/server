<?php
	include"Connect.php";
	$Madonhang = $_GET['Madonhang'] ;
	$query = "SELECT `Tensp`, `Soluong`, `Giatien`, `idsp` FROM `chitietdonhang` WHERE Madonhang LIKE '%$Madonhang%'";
	$data = mysqli_query($conn,$query);
	$arrsanpham = array();
	While($row = mysqli_fetch_assoc($data)){
		array_push($arrsanpham,new Sanpham(
			$row['Tensp'],
			$row['Soluong'],
			$row['Giatien'],
			$row['idsp']));
	}
	echo json_encode($arrsanpham);
	class Sanpham{
		function Sanpham($Tensp,$Soluong,$Giatien,$idsp){
			$this-> Tensp = $Tensp;
			$this-> Soluong = $Soluong;
			$this-> Giatien = $Giatien;
			$this-> idsp = $idsp;
		}
	}

?>