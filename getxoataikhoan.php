<?php

if ($_SERVER['REQUEST_METHOD'] =='POST'){
    $sdt = $_POST['sdt'];
    include"Connect.php";   

    $sql = "DELETE FROM `taikhoan` WHERE Sdt = $sdt";

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