<?php 
session_start();
include('utils/config.php');

 $did=intval($_GET['did']);
 $sql = "DELETE FROM TblTourPackages WHERE PackageId=:did";
 $query = $dbh -> prepare($sql);
 $query -> bindParam(':did', $did, PDO::PARAM_STR);
 if( $query->execute()){
  // echo "<script type='text/javascript'> alert('Xóa Thành Công'); </script>";
  echo "<script type='text/javascript'> document.location = 'manage-packages.php'; </script>";
  $_SESSION['notidelete'] = "ban xoa thanh cong roi nha";
 }
 else{
  $_SESSION['notideleteer'] = "ban xoa that bai roi nha";

 }
?>