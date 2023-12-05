<div class="navbar">
  <div class="navbar-menu">
    <?php 
    $arole = $_SESSION['arole'] ?? null;
    $displayItems = [
      0 => ['Trang Chủ', 'Quản Lý Tour Du Lịch', 'Quản Lý Tài Khoản Nhân Viên', 'Quản Lý Tài Khoản Người Dùng', 'Quản Lý Đặt Tour', 'Quản Lý Phản Hồi', 'Quản Lý Góp Ý', 'Quản Lý Trang Thông Tin', 'Báo Cáo Thống Kê'],
      1 => ['Quản Lý Tour Du Lịch', 'Quản Lý Trang Thông Tin', 'Quản Lý Phản Hồi'],
      2 => ['Quản Lý Phản Hồi', 'Quản Lý Góp Ý', 'Quản Lý Đặt Tour'],
      3 => ['Báo Cáo Thống Kê']
    ];
    $items = $displayItems[$arole] ?? [];
    ?>
    <?php if (in_array('Dashboard', $items)) { ?>
    <div class="navbar-menu__item">
      <a href="dashboard.php" class="navbar-menu__link">
        <i class="fa-solid fa-house"></i>
        <span class="navbar-menu__text">Dashboard</span>
      </a>
    </div>
    <?php } ?>
    <?php if (in_array('Quản Lý Tour Du Lịch', $items)) { ?>
    <div class="navbar-menu__item navbar-advance">
      <div href="" class="navbar-menu__link">
        <i class="navbar-icon fa-solid fa-plane-departure"></i>
        <span class="navbar-menu__text">Quản Lý Tour Du Lịch</span>
        <i class="navbar-icon fa-solid fa-chevron-right"></i>
      </div>
      <ul class="navbar-dropdown">
        <li class="navbar-dropdown__item"><a href="create.php" class="navbar-dropdown__link">Tạo TK</a><i
            class="fa-solid fa-plus navbar-dropdown__icon"></i></li>
        <li class="navbar-dropdown__item"><a href="manage-packages.php" class="navbar-dropdown__link">Quản Lý</a><i
            class="fa-regular fa-pen-to-square navbar-dropdown__icon"></i></li>
      </ul>
    </div>
    <?php } ?>
    <?php if (in_array('Quản Lý Tài Khoản Nhân Viên', $items)) { ?>
    <div class="navbar-menu__item navbar-advance--staff">
      <div href="" class="navbar-menu__link">
        <i class="fa-regular fa-user"></i>
        <span class="navbar-menu__text">Quản Lý Tài Khoản Nhân Viên</span>
        <i class="navbar-icon fa-solid fa-chevron-right"></i>
      </div>
      <ul class="navbar-dropdown">
        <li class="navbar-dropdown__item"><a href="create-staff.php" class="navbar-dropdown__link">Tạo TK</a><i
            class="fa-solid fa-plus navbar-dropdown__icon"></i></li>
        <li class="navbar-dropdown__item"><a href="manage-staff.php" class="navbar-dropdown__link">Quản Lý</a><i
            class="fa-regular fa-pen-to-square navbar-dropdown__icon"></i></li>
      </ul>
    </div>
    <?php } ?>
    <?php if (in_array('Quản Lý Tài Khoản Người Dùng', $items)) { ?>
    <div class="navbar-menu__item">
      <a href="manage-users.php" class="navbar-menu__link">
        <i class="navbar-icon fa-solid fa-users"></i>
        <span class="navbar-menu__text">Quản Lý Tài Khoản Người Dùng</span>
      </a>
    </div>
    <?php } ?>
    <?php if (in_array('Quản Lý Đặt Tour', $items)) { ?>
    <div class="navbar-menu__item">
      <a href="manage-bookings.php" class="navbar-menu__link">
        <i class="navbar-icon fa-solid fa-list-check"></i>
        <span class="navbar-menu__text">Quản Lý Đặt Tour</span>
      </a>
    </div>
    <?php } ?>
    <?php if (in_array('Quản Lý Phản Hồi', $items)) { ?>
    <div class="navbar-menu__item">
      <a href="manage-issues.php" class="navbar-menu__link">
        <i class="navbar-icon fa-regular fa-compass"></i>
        <span class="navbar-menu__text">Quản Lý Phản Hồi</span>
      </a>
    </div>
    <?php } ?>
    <?php if (in_array('Quản Lý Góp Ý', $items)) { ?>
    <div class="navbar-menu__item">
      <a href="manage-enquires.php" class="navbar-menu__link">
        <i class="navbar-icon fa-solid fa-circle-exclamation"></i>
        <span class="navbar-menu__text">Quản Lý Góp Ý</span>
      </a>
    </div>
    <?php } ?>
    <?php if (in_array('Quản Lý Trang Thông Tin', $items)) { ?>
    <div class="navbar-menu__item">
      <a href="manage-pages.php" class="navbar-menu__link">
        <i class="navbar-icon fa-solid fa-pager"></i>
        <span class="navbar-menu__text">Quản Lý Trang Thông Tin</span>
      </a>
    </div>
    <?php } ?>
    <?php if (in_array('Báo Cáo Thống Kê', $items)) { ?>
    <div class="navbar-menu__item">
      <a href="statistic.php" class="navbar-menu__link">
        <i class="fa-solid fa-chart-column"></i>
        <span class="navbar-menu__text">Báo Cáo Thống Kê</span>
      </a>
    </div>
    <?php } ?>
  </div>
</div>