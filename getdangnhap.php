<?php
    include"Connect.php";

if ($_SERVER['REQUEST_METHOD']=='POST') {

    $sdt = $_POST['sdt'];
    $matkhau = $_POST['matkhau'];

    $sql = "SELECT loaitk FROM taikhoan WHERE Sdt = $sdt AND Matkhau = $matkhau";
    $data = mysqli_query($conn,$sql);
    if ($data ) {
        While($row = mysqli_fetch_assoc($data)){
            $quyen = $row['loaitk'];
        }
        if($quyen == 1 ){
            $result["success"] = "1";
            echo json_encode($result);
            mysqli_close($conn);

        }else if($quyen == 2){
            $result["success"] = "2";
            echo json_encode($result);
            mysqli_close($conn);
        }   
    } else {

        $result["success"] = "0";
        $result["message"] = "error";

        echo json_encode($result);
        mysqli_close($conn);
    }
   
   }

?>