<?php
session_start();
error_reporting(0);
include('utils/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index-staff.php');
}
else{
$pid=intval($_GET['pid']);	
if(isset($_POST['submit']))
{
$pname=$_POST['fullname'];
$pmobile=$_POST['mobile'];	
$pusername=$_POST['username'];
$pinputrole=$_POST['inputrole'];
$ppassword=$_POST['password'];
$sql="update tbladmin set FullName=:pname,MobileNumber=:pmobile,UserName=:pusername,role=:pinputrole,password=:ppassword where id=:pid";
$query = $dbh->prepare($sql);
$query->bindParam(':pname',$pname,PDO::PARAM_STR);
$query->bindParam(':pmobile',$pmobile,PDO::PARAM_STR);
$query->bindParam(':pusername',$pusername,PDO::PARAM_STR);
$query->bindParam(':pinputrole',$pinputrole,PDO::PARAM_STR);
$query->bindParam(':ppassword',$ppassword,PDO::PARAM_STR);
$query->bindParam(':pid',$pid,PDO::PARAM_STR);
$query->execute();
$msg="Account Updated Successfully";
}
	?>
<!DOCTYPE HTML>
<html>

<head>
  <title>Travel Admin Update Account</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
  <link rel="stylesheet" href="./css/utils.css ?v=<?php echo time(); ?>" type='text/css'>
  <link rel="stylesheet" href="./css/global.css ?v=<?php echo time(); ?>" type='text/css'>
  <link rel="stylesheet" href="./css/main.css ?v=<?php echo time(); ?>" type='text/css'>
  <link rel="stylesheet" href="./css/formgroupglb.css ?v=<?php echo time(); ?>" type='text/css'>
  <link rel="stylesheet" href="./css/updatepackage.css ?v=<?php echo time(); ?>" type='text/css'>
</head>

<body>
  <?php include('utils/header.php');?>
  <div class="main-container">
    <div class="main-left">
      <?php include('utils/navbar.php');?>
    </div>
    <div class="main-right">
      <div class="main-navigation">
        <div class="main-navigation__item"><a href="dashboard.php">Home</a><i
            class="fa-solid fa-chevron-right"></i>Update
          Account
        </div>
      </div>
      <div class="main-content">
        <h3 class="main-heading">Update Account</h3>
        <?php if($error){?><div class="notify notify--error">
          <strong>ERROR</strong>:<?php echo htmlentities($error); ?>
        </div><?php } 
				else if($msg){?><div class="notify notify--success"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?>
        </div><?php }?>

        <div class="main-form">
          <?php 
$pid=intval($_GET['pid']);
$sql = "SELECT * from tbladmin where id=:pid";
$query = $dbh -> prepare($sql);
$query -> bindParam(':pid', $pid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $result)
{	?>
          <form class="form-control" name="package" action="" method="post" enctype="multipart/form-data">
            <div class="form-row">
              <div class="form-group form-column">
                <label for="fullname" class="form-label">Full Name</label>
                <input type="text" class="form-input" name="fullname" id="fullname" placeholder="Create User"
                  value="<?php echo htmlentities($result->FullName);?>" required>
              </div>
              <div class="form-group form-column">
                <label for="mobile" class="form-label">Mobile</label>
                <input type="text" class="form-input" name="mobile" id="mobile" placeholder="Mobile"
                  value="<?php echo htmlentities($result->MobileNumber);?>" required>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group form-column">
                <label for="username" class="form-label">UserName</label>
                <input type="text" class="form-input" name="username" id="username" placeholder="UserName"
                  value="<?php echo htmlentities($result->UserName);?>" required>
              </div>
              <div class="form-group form-column">
                <label for="inputrole" class="form-label">Role</label>
                <select id="inputrole" name="inputrole"
                  style="border: 1px solid #ccc; padding: 5px; border-radius: 5px;" required>
                  <option value="0" <?php if ($result->role == 0) echo "selected"; ?>>Nhân Viên Quản Lý</option>
                  <option value="1" <?php if ($result->role == 1) echo "selected"; ?>>Nhân Viên Chăm Sóc Khách Hàng
                  </option>
                  <option value="2" <?php if ($result->role == 2) echo "selected"; ?>>Nhân Viên Thống Kê</option>
                  <option value="3" <?php if ($result->role == 3) echo "selected"; ?>>Nhân Viên Page</option>
                </select>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group">
                <label for="" class="form-label">Password: </label>
                <input type="text" name="password" id="password" class="form-input" placeholder="Password"
                  value="<?php echo htmlentities($result->Password);?>" required>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="form-label">Cập Nhật Lần Cuối</label>
              <div class="col-sm-8">
                <?php echo htmlentities($result->updationDate);?>
              </div>
            </div>
            <?php }} ?>
            <div class="form-group form-btn">
              <button type="submit" name="submit" class="btn--primary btn">Update</button>
            </div>
          </form>
        </div>
      </div>
      <div class="main-footer">
        <?php include('utils/footer.php');?>
      </div>
    </div>
  </div>
</body>

</html>
<?php } ?>