<?php
$tenNguoiMua = $_POST['tenNmua'];
$NgaySinh = $_POST['NgaySinh'];
$diachi = $_POST['diachi'];
$phone = $_POST['phone'];
$DateHD = $_POST['DateHD'];
$tienmua = $_POST['tienmua'];
$tiencoc = $_POST['tiencoc'];
$tienconlai = $_POST['tienconlai'];


require_once "connect.php";


$themhd = "INSERT INTO Full_Contract
-- XOA 1 COT Year_Of_Birth ,  Property_ID,
(Customer_Name,SSN,Customer_Address,Mobile,Date_Of_Contract,Price,Deposit,Remain,Status) 
VALUES ('$tenNguoiMua','$NgaySinh','$diachi','$phone','$DateHD','$tienmua','$tiencoc','$tienconlai','1')";
// echo $themhd; exit;

if (mysqli_query($conn,$themhd)){
    header("Location:ViewContract.php?success=1");
}
else{
    echo    "them that bai";
}

?>