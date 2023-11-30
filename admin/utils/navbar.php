<div class="navbar">
  <div class="navbar-menu">
    <?php 
    $arole = $_SESSION['arole'] ?? null;
    $displayItems = [
      0 => ['Dashboard', 'Manager Tour', 'Manager Staff', 'Manager User', 'Manager Booking', 'Manager Issues', 'Manager Enquiries', 'Manager Pages', 'Statistic Bookings'],
      1 => ['Manager Tour', 'Manager Pages', 'Manager Issues'],
      2 => ['Manager Issues', 'Manager Enquiries', 'Manager Booking'],
      3 => ['Statistic Bookings']
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
    <?php if (in_array('Manager Tour', $items)) { ?>
    <div class="navbar-menu__item navbar-advance">
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
    <?php } ?>
    <?php if (in_array('Manager Staff', $items)) { ?>
    <div class="navbar-menu__item navbar-advance--staff">
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
    <?php } ?>
    <?php if (in_array('Manager User', $items)) { ?>
    <div class="navbar-menu__item">
      <a href="manage-users.php" class="navbar-menu__link">
        <i class="navbar-icon fa-solid fa-users"></i>
        <span class="navbar-menu__text">Manager User</span>
      </a>
    </div>
    <?php } ?>
    <?php if (in_array('Manager Booking', $items)) { ?>
    <div class="navbar-menu__item">
      <a href="manage-bookings.php" class="navbar-menu__link">
        <i class="navbar-icon fa-solid fa-list-check"></i>
        <span class="navbar-menu__text">Manager Booking</span>
      </a>
    </div>
    <?php } ?>
    <?php if (in_array('Manager Issues', $items)) { ?>
    <div class="navbar-menu__item">
      <a href="manage-issues.php" class="navbar-menu__link">
        <i class="navbar-icon fa-regular fa-compass"></i>
        <span class="navbar-menu__text">Manager Issues</span>
      </a>
    </div>
    <?php } ?>
    <?php if (in_array('Manager Enquiries', $items)) { ?>
    <div class="navbar-menu__item">
      <a href="manage-enquires.php" class="navbar-menu__link">
        <i class="navbar-icon fa-solid fa-circle-exclamation"></i>
        <span class="navbar-menu__text">Manager Enquiries</span>
      </a>
    </div>
    <?php } ?>
    <?php if (in_array('Manager Pages', $items)) { ?>
    <div class="navbar-menu__item">
      <a href="manage-pages.php" class="navbar-menu__link">
        <i class="navbar-icon fa-solid fa-pager"></i>
        <span class="navbar-menu__text">Manager Pages</span>
      </a>
    </div>
    <?php } ?>
    <?php if (in_array('Statistic Bookings', $items)) { ?>
    <div class="navbar-menu__item">
      <a href="statistic.php" class="navbar-menu__link">
        <i class="fa-solid fa-chart-column"></i>
        <span class="navbar-menu__text">Statistic Bookings</span>
      </a>
    </div>
    <?php } ?>
  </div>
</div>
