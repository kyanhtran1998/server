<?php

if ($_SERVER['REQUEST_METHOD'] =='POST'){

    $sdt = $_POST['sdt'];
    $matkhau = $_POST['matkhau'];

    include"Connect.php";

    $sql = "INSERT INTO taikhoan(Sdt,Matkhau) VALUES ($sdt,$matkhau)";
    if (  mysqli_num_rows(mysqli_query($conn, $sql)) == 1 ) {
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