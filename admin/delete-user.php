<?php 
session_start();
include('utils/config.php');

 $uid=intval($_GET['uid']);
 $sql = "DELETE FROM tblusers WHERE id=:uid";
 $query = $dbh -> prepare($sql);
 $query -> bindParam(':uid', $uid, PDO::PARAM_STR);
 if( $query->execute()){
  // echo "<script type='text/javascript'> alert('Xóa Thành Công'); </script>";
  $_SESSION['notideleteus'] = "Bạn đã xóa tài khoản thành công";
  echo "<script type='text/javascript'> document.location = 'manage-users.php'; </script>";
 }
 else{
  $_SESSION['notideleteuser'] = "Bạn không xóa tài khoản";
 }
?>