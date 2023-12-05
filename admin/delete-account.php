<?php 
session_start();
include('utils/config.php');

 $uid=intval($_GET['gid']);
 $sql = "DELETE FROM tbladmin WHERE id=:uid";
 $query = $dbh -> prepare($sql);
 $query -> bindParam(':uid', $uid, PDO::PARAM_STR);
 if( $query->execute()){
  $_SESSION['notideleteus'] = "Bạn đã xóa tài khoản thành công";
  echo "<script type='text/javascript'> document.location = 'manage-staff.php'; </script>";
 }
 else{
  $_SESSION['notideleteuser'] = "Bạn đã xóa tài khoản thất bại";
 }
?>