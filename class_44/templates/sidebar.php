  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>student_list</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="index.php?Page=student_add">
              <i class="bi bi-circle"></i><span>Add_Students</span>
            </a>
          </li>
          <li>
            <a href="index.php?Page=student_list">
              <i class="bi bi-circle"></i><span>View_All Student</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#com-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Teachers_List</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="com-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="index.php?Page=teacher_add">
              <i class="bi bi-circle"></i><span>Add_Teacher</span>
            </a>
          </li>
          <li>
            <a href="index.php?Page=teacher_list">
              <i class="bi bi-circle"></i><span>View_All Teacher</span>
            </a>
          </li>
          <li>
        </ul>
      </li><!-- Teacher side bar End Components Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="register.php">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="login.php">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->