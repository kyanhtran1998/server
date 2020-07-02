<?php

if ($_SERVER['REQUEST_METHOD'] =='POST'){
    $idsp = $_POST['idsp'];
    $tensanpham = $_POST['tensanpham'];
    $giasanpham = $_POST['giasanpham'];
    $motasanpham = $_POST['motasanpham'];
    $linkhinhanhsanpham = $_POST['linkhinhanhsanpham'];
    $loaisp = $_POST['loaisp'];

    include"Connect.php";   

    $sql = "UPDATE `sanpham` SET Tensp= '$tensanpham',Gia=$giasanpham,Hinhanh='$linkhinhanhsanpham',Mota='$motasanpham',Loaisp=$loaisp WHERE idsp =$idsp";

    if (mysqli_query($conn, $sql)) {
        $result["success"] = "1";
        echo json_encode($result);
        mysqli_close($conn);

    } else {
        $result["success"] = "0";
        echo json_encode($result);
        mysqli_close($conn);
    }
}

?>