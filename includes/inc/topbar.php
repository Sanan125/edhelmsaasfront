<div class="top-bar">
<nav class="navbar px-2 py-3">
  <div class="container-fluid d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center">

    <!-- Left Side: Title + Notification + Profile (Stack on mobile, inline on desktop) -->
    <div class="d-flex flex-column flex-md-row w-100">

      <!-- Top Row: Title and Toggle (Mobile Only Layout Control) -->
      <div class="d-flex justify-content-between align-items-center w-100 mb-2 mb-md-0">
        <!-- Dashboard / Admin Title -->
        <!-- Logo – sirf mobile par nazar aaye, md aur us se bade screens par gayab  -->
         <a href="../dashboard/">
<img src="../assests/images/edhelm-logo-1024x465.png"
     alt="Logo"
     class="img-fluid mb-2 d-block "
     style="max-height: 38px;">
</a>

        <!-- Toggle Button: Mobile Only --> 
        <div class="d-md-none">
        <button id="sidebarToggle" class="btn btn-primary">
            <i class="fas fa-bars"></i>
          </button>
        </div>
      </div>

      <!-- Bottom Row: Notifications + Profile (below title on mobile, inline on desktop) -->
      <div class="d-flex align-items-center gap-4 ms-md-auto">
        <!-- Notification Bell -->
        <div class="dropdown position-relative">
          <a href="#" class="d-flex align-items-center text-light text-decoration-none dropdown-toggle" id="notificationDropdown" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-bell fs-5"></i>
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">3</span>
          </a>

          <!-- Notification Dropdown -->
          <ul class="dropdown-menu dropdown-menu-end custom-dropdown-width fade" aria-labelledby="notificationDropdown" style="border-radius: 10px; padding: 10px;">
            <li class="dropdown-item text-dark d-flex justify-content-between align-items-center" style="border-radius: 8px; padding: 10px;">
              <span><b>Notification (4)</b></span>
              <a href="#" class="markallread text-primary" style="text-decoration: none;">Mark All as Read <i class="fas fa-check-circle ms-2"></i></a>
            </li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="#" style="padding: 10px;">
                <i class="bi bi-rocket-takeoff me-3" style="font-size: 18px; color: #0977d6;"></i>
                <div><b>New message from Sarah</b><br><small class="text-muted">10 min ago</small></div>
              </a>
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="#" style="padding: 10px;">
                <i class="bi bi-rocket-takeoff me-3" style="font-size: 18px; color: #0977d6;"></i>
                <div><b>John commented on your post</b><br><small class="text-muted">15 min ago</small></div>
              </a>
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="#" style="padding: 10px;">
                <i class="bi bi-rocket-takeoff me-3" style="font-size: 18px; color: #0977d6;"></i>
                <div><b>3 new assignments are due</b><br><small class="text-muted">30 min ago</small></div>
              </a>
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="#" style="padding: 10px;">
                <i class="bi bi-rocket-takeoff me-3" style="font-size: 18px; color: #0977d6;"></i>
                <div><b>Your profile has been updated</b><br><small class="text-muted">1 hour ago</small></div>
              </a>
            </li>
            <li><hr class="dropdown-divider"></li>
            <li class="text-center">
              <a class="dropdown-item view d-flex justify-content-center align-items-center" href="#">
                <b>View all notifications</b> <i class="fas fa-arrow-right ms-2"></i>
              </a>
            </li>
          </ul>
        </div>

        <!-- Profile Dropdown -->
        <div class="dropdown">
          <a href="#" class="d-flex align-items-center text-dark text-decoration-none dropdown-toggle" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="../assests/images/default.png" alt="Profile" class="rounded-circle me-2" width="30" height="30">
            <span class="text-light">Mr. Admin</span>
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
            <li><a class="dropdown-item" href="../profile">Profile</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Logout</a></li>
          </ul>
        </div>
      </div>

    </div>

  </div>
</nav>

 
</div>


<!-- Mobile Sidebar -->
<div id="mobileSidebar" style="
  position: fixed;
  top: 0;
  right: 0;
  height: 100%;
  width: 250px;
  background: var(--sidebar-bg);
  box-shadow: -2px 0 8px rgba(0,0,0,0.2);
  transform: translateX(100%);
  transition: transform 0.3s ease;
  z-index: 1050;
  overflow-y: auto;
  display: none;
">

  <div class="sidebar-header p-3 border-bottom">
    <h4><b>EDHELM</b></h4>
  </div>
  <ul class="nav flex-column p-2">
    <li class="nav-item"><a class="nav-link" href="../dashboard"><i class="fas fa-users me-2"></i> Dashboard</a></li>
    <li class="nav-item"><a class="nav-link" href="../student"><i class="fas fa-users me-2"></i> Students</a></li>
    <li class="nav-item"><a class="nav-link" href="../parent"><i class="fas fa-users me-2"></i> Parents</a></li>
    <li class="nav-item"><a class="nav-link" href="../teacher"><i class="fas fa-chalkboard-teacher me-2"></i> Teachers</a></li>
    <li class="nav-item"><a class="nav-link" href="../class"><i class="fas fa-school me-2"></i> Classes</a></li>
    <li class="nav-item"><a class="nav-link" href="../subject"><i class="fas fa-calendar-alt me-2"></i> Subject</a></li>
    <li class="nav-item"><a class="nav-link" href="../attendance"><i class="fas fa-calendar-alt me-2"></i> Attendance</a></li>
    <li class="nav-item"><a class="nav-link" href="../fees"><i class="fas fa-money-bill-wave me-2"></i> Fees</a></li>
    <li class="nav-item"><a class="nav-link" href="../exams"><i class="fas fa-book me-2"></i> Exams</a></li>
    <li class="nav-item"><a class="nav-link" href="../announcements"><i class="fas fa-bullhorn me-2"></i> Announcements</a></li>
    <li class="nav-item"><a class="nav-link" href="../settings"><i class="fas fa-cog me-2"></i> Settings</a></li>
    <li class="nav-item"><a class="nav-link" href="../admin/logout.php"><i class="fas fa-sign-out-alt me-2"></i> Logout</a></li>
  </ul>
</div>

<!-- Overlay background -->
<div id="sidebarOverlay" style="
  display: none;
  position: fixed;
  top: 0; left: 0; right: 0; bottom: 0;
  background: rgba(0,0,0,0.4);
  z-index: 1040;
"></div>

<script>
  // toggleBtn
  const sidebar = document.getElementById('mobileSidebar');
  const overlay = document.getElementById('sidebarOverlay');
  const toggleBtn = document.getElementById('sidebarToggle');

  toggleBtn.addEventListener('click', () => {
    sidebar.style.display = 'block';
    setTimeout(() => {
      sidebar.style.transform = 'translateX(0)';
      overlay.style.display = 'block';
      document.body.style.overflow = 'hidden';
    }, 10);
  });

  overlay.addEventListener('click', () => {
    sidebar.style.transform = 'translateX(100%)';
    overlay.style.display = 'none';
    document.body.style.overflow = '';
    setTimeout(() => {
      sidebar.style.display = 'none';
    }, 300);
  });
</script>