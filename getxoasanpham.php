<?php

if ($_SERVER['REQUEST_METHOD'] =='POST'){
    $idsp = $_POST['idsp'];
    include"Connect.php";   

    $sql = "DELETE FROM `sanpham` WHERE idsp = $idsp";

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