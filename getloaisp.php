<?php
	include"Connect.php";
	$query = "SELECT * FROM Loaisp";
	$data = mysqli_query($conn,$query);
	$arrloaisp = array();
	While($row = mysqli_fetch_assoc($data)){
		array_push($arrloaisp,new Loaisp(
			$row['id'],
			$row['Tenloai'],
			$row['Imageloaisp']));
	}
	echo json_encode($arrloaisp);
	class Loaisp{
		function Loaisp($id,$Tenloai,$Imageloaisp){
			$this->id = $id;
			$this->Tenloai = $Tenloai;
			$this->Imageloaisp = $Imageloaisp;
		}
	}



?>