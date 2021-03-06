<!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-0">
          <i class="fas fa-terminal"></i>
        </div>
        <div class="sidebar-brand-text mx-3">WPU Admin</div>
      </a>


      <!-- Divider -->
      <hr class="sidebar-divider my">

    <!--Query Menu -->
<?php
$role_id = $this->session->userdata('role_id');
$queryMenu = "SELECT `user_menu`.`id`,`menu`
            FROM `user_menu` JOIN `user_access_menu` 
            ON `user_menu`.`id` = `user_access_menu`.`menu_id`
            WHERE `user_access_menu`.`role_id` = $role_id 
            ORDER BY `user_access_menu`.`menu_id` ASC";

            $menu = $this->db->query($queryMenu)->result_array();

            ?>

<!--Looping menu-->





      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->









      <!-- Heading -->
      <div class="sidebar-heading">
        User
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-user-alt"></i>
          <span>My Profile</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li>

      <!-- Nav Item - Tables -->
        <hr class="sidebar-divider">
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/logout');?>">
          <i class="fas fa-fw fa-power-off"></i>
          <span>Log out</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">