<?php
session_start();
error_reporting(0);
include('utils/config.php');
if(strlen($_SESSION['alogin'])==0)
{	
header('location:index-staff.php');
}
else{
if(isset($_POST['submit']))
{
$pname=$_POST['fullname'];
$pmobile=$_POST['mobile'];	
$pusername=$_POST['username'];
$ppassword=$_POST['password'];	
$pinputrole=$_POST['inputrole'];
$con ="SELECT UserName FROM tbladmin WHERE UserName=:pusername";
  $check = $dbh -> prepare($con);
  $check-> bindParam(':pusername', $pusername, PDO::PARAM_STR);
  $check-> execute();
  if ($check -> rowCount() > 0 || empty($pusername)) {
    $error="Username đã trùng trong cơ sở dữ liệu";
  }
  else {
    $sql="INSERT INTO tbladmin(FullName,MobileNumber,UserName,Password,role) VALUES(:pname,:pmobile,:pusername,:ppassword,:pinputrole)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':pname',$pname,PDO::PARAM_STR);
    $query->bindParam(':pmobile',$pmobile,PDO::PARAM_STR);
    $query-> bindParam(':pusername', $pusername, PDO::PARAM_STR);
    $query->bindParam(':ppassword',$ppassword,PDO::PARAM_STR);
    $query->bindParam(':pinputrole',$pinputrole,PDO::PARAM_STR);
    $query->execute();
    $lastInsertId = $dbh->lastInsertId();
    if($lastInsertId)
    {
    $msg="Account Staff Created Successfully";
    }
    else 
    {
    $error="Something went wrong. Please try again";
    }
  }  
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Package</title>
  <link rel="shortcut icon"
    href="https://cdn-icons-png.flaticon.com/512/1257/1257385.png?w=740&t=st=1670319127~exp=1670319727~hmac=3df5cfb7b4b4084477c31021f476ce730b54abf3c78aacf2ff06db0c21295839"
    type="image/x-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./css/reset.css?v=<?php echo time(); ?>" type='text/css'>
  <link rel="stylesheet" href="./css/global.css ?v=<?php echo time(); ?>" type='text/css'>
  <link rel="stylesheet" href="./css/main.css ?v=<?php echo time(); ?>" type='text/css'>
  <link rel="stylesheet" href="./css/utils.css ?v=<?php echo time(); ?>" type='text/css'>
  <link rel="stylesheet" href="./css/formgroupglb.css ?v=<?php echo time(); ?>" type='text/css'>
</head>

<body>
  <div class="wrapper">
    <?php include('utils/header.php');?>
    <div class="main-container">
      <div class="main-left">
        <?php include('utils/navbar.php');?>
      </div>
      <div class="main-right">
        <div class="main-navigation">
          <div class="main-navigation__item"><a href="dashboard.php">Home</a><i
              class="fa-solid fa-chevron-right"></i>Create
          </div>
        </div>
        <div class="main-content">
          <h3 class="main-heading">Create Account Staff</h3>
          <?php if($error){?><div class="notify notify--error">
            <strong>ERROR</strong>:<?php echo htmlentities($error); ?>
          </div><?php } 
				else if($msg){?><div class="notify notify--success"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?>
          </div><?php }?>
          <div class="main-form">
            <form class="form-control" name="package" action="" method="post" enctype="multipart/form-data">
              <div class="form-row">
                <div class="form-group form-column">
                  <label for="fullname" class="form-label">Tên TK</label>
                  <input type="text" class="form-input" name="fullname" id="fullname" placeholder="Create User"
                    required>
                </div>
                <div class="form-group form-column">
                  <label for="mobile" class="form-label">Số Điện Thoại</label>
                  <input type="text" class="form-input" name="mobile" id="mobile" placeholder="Mobile" required>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group form-column">
                  <label for="username" class="form-label">Tên Người Dùng</label>
                  <input type="text" class="form-input" name="username" id="username" placeholder="UserName" required>
                </div>
                <div class="form-group form-column">
                  <label for="password" class="form-label">Mật Khẩu</label>
                  <input type="password" name="password" id="password" placeholder="Password" required>
                </div>
              </div>
              <div class="form-group">
                <label for="inputrole" class="form-label">Chức Vụ</label>
                <select id="inputrole" name="inputrole"
                  style="border: 1px solid #ccc; padding: 5px; border-radius: 5px;" required>
                  <option value="" disabled selected>Chọn Chức Vụ</option>
                  <!-- <option value="0">Quản Lý</option> -->
                  <option value="1">Nhân Viên Quản Lý Website</option>
                  <option value="2">Nhân Viên Chăm Sóc Khách Hàng</option>
                  <option value="3">Nhân Viên Thống Kê</option>
                </select>
              </div>
              <div class="form-group form-btn">
                <button type="submit" name="submit" class="btn--primary btn">Create</button>
                <button type="reset" class="btn--inverse btn">Reset</button>
              </div>
            </form>
          </div>
        </div>
        <div class="main-footer">
          <?php include('utils/footer.php');?>
        </div>
      </div>
    </div>
  </div>

</body>

</html>
<?php } ?>