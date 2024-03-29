<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
$role=$_SESSION['arole']
?>
<div class="header">
  <div class="header-container">
    <a class="header-logo" href="dashboard.php">
      <svg width="121" height="41" viewBox="0 0 121 41" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect width="40.2376" height="40.1692" rx="12" fill="#3B71FE" />
        <path
          d="M12.5128 22.3138L17.4284 22.1693L19.021 18.7185C19.1915 18.3492 18.8738 17.9456 18.4768 18.0342C17.1586 18.3282 15.3033 18.8151 14.2617 19.3359C13.2616 19.836 12.5115 20.8675 12.0818 21.6566C11.911 21.9703 12.1558 22.3243 12.5128 22.3138Z"
          fill="white" />
        <path
          d="M28.619 31.628L24.4042 24.2522C24.0338 23.604 23.1092 23.5743 22.6953 24.1956C21.4016 26.1376 19.6037 28.7833 18.7615 29.8359C17.6949 31.1693 16.5393 31.3915 16.0949 31.3359C14.8727 31.2804 12.0949 31.0693 10.7616 30.6693C9.42823 30.2693 10.1217 29.4507 10.7616 29.1693C11.5254 28.8333 13.4282 28.2359 14.7616 27.8359C16.0949 27.436 17.0949 25.8915 17.4282 25.1693L22.4282 15.6692C23.706 13.0581 26.7282 7.86919 28.5949 8.00252C30.4616 8.13585 29.9282 10.1692 29.4282 11.1692L26.7571 16.9828C26.6528 17.2099 26.6367 17.466 26.713 17.704C27.6984 20.7776 29.5828 26.6717 30.0949 28.3359C30.5188 29.7134 29.918 30.9716 29.3468 31.709C29.1509 31.9619 28.7777 31.9057 28.619 31.628Z"
          fill="white" />
        <path
          d="M65.5336 26.5846H69.0336L64.2736 12.5846H60.1936L55.4336 26.5846H58.9336L59.6336 24.3846H64.8336L65.5336 26.5846ZM60.5936 21.3846L62.2336 16.2446L63.8736 21.3846H60.5936ZM71.6273 15.7046C72.6073 15.7046 73.4273 14.8846 73.4273 13.9046C73.4273 12.9246 72.6073 12.1046 71.6273 12.1046C70.6473 12.1046 69.8273 12.9246 69.8273 13.9046C69.8273 14.8846 70.6473 15.7046 71.6273 15.7046ZM70.1273 26.5846H73.1273V16.5846H70.1273V26.5846ZM78.3227 18.3646V16.5846H75.3227V26.5846H78.3227V22.0646C78.3227 20.0846 80.0827 19.5846 81.3227 19.7846V16.3846C80.0627 16.3846 78.7227 17.0246 78.3227 18.3646ZM88.878 19.4646V16.5846H86.818V13.7846L83.818 14.6846V16.5846H82.218V19.4646H83.818V23.0046C83.818 25.8046 84.958 26.9846 88.878 26.5846V23.8646C87.558 23.9446 86.818 23.8646 86.818 23.0046V19.4646H88.878ZM93.7719 18.3646V16.5846H90.7719V26.5846H93.7719V22.0646C93.7719 20.0846 95.5319 19.5846 96.7719 19.7846V16.3846C95.5119 16.3846 94.1719 17.0246 93.7719 18.3646ZM105.141 16.5846V17.5246C104.481 16.7646 103.501 16.3046 102.161 16.3046C99.5413 16.3046 97.3813 18.6046 97.3813 21.5846C97.3813 24.5646 99.5413 26.8646 102.161 26.8646C103.501 26.8646 104.481 26.4046 105.141 25.6446V26.5846H108.141V16.5846H105.141ZM102.761 24.0246C101.381 24.0246 100.381 23.0846 100.381 21.5846C100.381 20.0846 101.381 19.1446 102.761 19.1446C104.141 19.1446 105.141 20.0846 105.141 21.5846C105.141 23.0846 104.141 24.0246 102.761 24.0246ZM116.722 16.5846L114.642 22.9246L112.562 16.5846H109.242L112.942 26.5846H116.342L120.042 16.5846H116.722Z"
          fill="#353945" />
      </svg>
    </a>
    <h2 class="header-heading">Quản Lý Toàn Bộ Website Du Lịch</h2>
    <div class="header-action">
      <a href="#" class="header-action__link"><i class="fa-regular fa-bookmark header-action__icon"></i></a>
      <a href="#" class="header-action__link"><i class="fa-regular fa-bell header-action__icon"></i></a>
      <a href="#" class="header-action__link"><i class="fa-regular fa-comments header-action__icon"></i></a>
    </div>
    <div class="header-admin">
      <i class="fa-solid fa-user-gear"></i>
      <div class="header-info">
        <p class="header-info__title">Xin Chào</p>
        <span class="header-info__name"><?php if($role == 0) echo "Quản Lý";
        else if ($role == 1) echo "Nhân Viên Chăm Sóc";
        else if ($role == 2) echo "Nhân Viên Thống Kê";
        else if ($role == 3) echo "Nhân Viên Page"?></span>
      </div>
      <i class="fa-solid fa-chevron-down"></i>
      <!-- <i class="fa-solid fa-chevron-up"></i> -->
      <ul class="header-dropdown">
        <li class="header-dropdown__item"> <a href="change-password-acc.php" class="header-dropdown__link"><i
              class="fa-regular fa-address-card header-dropdown__icon"></i>Thông Tin Tài Khoản</a> </li>
        <li class="header-dropdown__item"> <a href="logout.php" class="header-dropdown__link"><i
              class="fa-solid fa-arrow-right-from-bracket header-dropdown__icon"></i>Đăng Xuất</a> </li>
      </ul>
    </div>
  </div>
</div>