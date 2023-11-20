<div class="navbar">
  <div class="navbar-menu">
    <div class="navbar-menu__item">
      <a href="dashboard.php" class="navbar-menu__link">
        <i class="fa-solid fa-house"></i>
        <span class="navbar-menu__text">Dashboard</span>
      </a>
    </div>
    <div class="navbar-menu__item <?php if (!isset($_SESSION['arole']) || $_SESSION['arole'] === 0) echo 'enable-buttons';?>">
      <div href="" class="navbar-menu__link">
        <i class="navbar-icon fa-solid fa-plane-departure"></i>
        <span class="navbar-menu__text">Manager Tour</span>
        <i class="navbar-icon fa-solid fa-chevron-right"></i>
      </div>
      <ul class="navbar-dropdown">
        <li class="navbar-dropdown__item"><a href="create.php" class="navbar-dropdown__link">Create</a><i
            class="fa-solid fa-plus navbar-dropdown__icon"></i></li>
        <li class="navbar-dropdown__item"><a href="manage-packages.php" class="navbar-dropdown__link">Manager</a><i
            class="fa-regular fa-pen-to-square navbar-dropdown__icon"></i></li>
      </ul>
    </div>
    <div class="navbar-menu__item <?php if (!isset($_SESSION['arole']) || $_SESSION['arole'] === 2) echo 'enable-button'; else {
      echo '';
    }?>">
      <div href="" class="navbar-menu__link">
      <i class="fa-regular fa-user"></i>
        <span class="navbar-menu__text">Manager Staff</span>
        <i class="navbar-icon fa-solid fa-chevron-right"></i>
      </div>
      <ul class="navbar-dropdown">
        <li class="navbar-dropdown__item"><a href="create-staff.php" class="navbar-dropdown__link">Create</a><i
            class="fa-solid fa-plus navbar-dropdown__icon"></i></li>
        <li class="navbar-dropdown__item"><a href="manage-staff.php" class="navbar-dropdown__link">Manager</a><i
            class="fa-regular fa-pen-to-square navbar-dropdown__icon"></i></li>
      </ul>
    </div>
    <div class="navbar-menu__item <?php if (!isset($_SESSION['arole']) || $_SESSION['arole'] === 0) echo 'enable-buttons';?>">
      <a href="manage-users.php" class="navbar-menu__link">
        <i class="navbar-icon fa-solid fa-users"></i>
        <span class="navbar-menu__text">Manager User</span>
      </a>
    </div>
    <div class="navbar-menu__item <?php if (!isset($_SESSION['arole']) || $_SESSION['arole'] === 0) echo 'enable-buttons';?>">
      <a href="manage-bookings.php" class="navbar-menu__link">
        <i class="navbar-icon fa-solid fa-list-check"></i>
        <span class="navbar-menu__text">Manager Booking</span>
      </a>
    </div>
    <div class="navbar-menu__item <?php if (!isset($_SESSION['arole']) || $_SESSION['arole'] === 1) echo 'enable-buttons';?>">
      <a href="manage-issues.php" class="navbar-menu__link">
        <i class="navbar-icon fa-regular fa-compass"></i>
        <span class="navbar-menu__text">Manager Issues</span>
      </a>
    </div>
    <div class="navbar-menu__item <?php if (!isset($_SESSION['arole']) || $_SESSION['arole'] === 1) echo 'enable-buttons';?>">
      <a href="manage-enquires.php" class="navbar-menu__link">
        <i class="navbar-icon fa-solid fa-circle-exclamation"></i>
        <span class="navbar-menu__text">Manager Enquiries</span>
      </a>
    </div>
    <div class="navbar-menu__item <?php if (!isset($_SESSION['arole']) || $_SESSION['arole'] === 3) echo 'enable-buttons';?>">
      <a href="manage-pages.php" class="navbar-menu__link">
        <i class="navbar-icon fa-solid fa-pager"></i>
        <span class="navbar-menu__text">Manager Pages</span>
      </a>
    </div>
    <div class="navbar-menu__item <?php if (!isset($_SESSION['arole']) || $_SESSION['arole'] === 2) echo 'enable-buttons' ;?>">
      <a href="statistic.php" class="navbar-menu__link">
        <i class="fa-solid fa-chart-column"></i>
        <span class="navbar-menu__text">Statistic Bookings</span>
      </a>
    </div>
  </div>
</div>