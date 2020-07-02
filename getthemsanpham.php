<?php

if ($_SERVER['REQUEST_METHOD'] =='POST'){

     $tensanpham = $_POST['tensanpham'];
    $giasanpham = $_POST['giasanpham'];
    $motasanpham = $_POST['motasanpham'];
    $linkhinhanhsanpham = $_POST['linkhinhanhsanpham'];
    $loaisp = $_POST['loaisp'];

    include"Connect.php";   

    $sql = "INSERT INTO `sanpham`(`idsp`, `Tensp`, `Gia`, `Hinhanh`, `Mota`, `Loaisp`) VALUES (NULL,'$tensanpham',$giasanpham,'$linkhinhanhsanpham','$motasanpham',$loaisp)";

    if (mysqli_query($conn, $sql)) {
        $result["success"] = "1";
        echo json_encode($result);
        mysqli_close($conn);

    } else {
        $result["success"] = "0";
        echo " that bại ";
        echo json_encode($result);
        mysqli_close($conn);
    }
}

?>