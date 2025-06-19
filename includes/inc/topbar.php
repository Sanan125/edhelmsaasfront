<nav class="navbar navbar-light  py-2 ">
      <div class="container-fluid d-flex justify-content-between align-items-center">
        <!-- Left: Site Logo/Title -->
        <span class="navbar-brand mb-0 h3 text-dark">Dashboard / Admin</span>
        <!-- Right: Icons -->
        <div class="d-flex align-items-center gap-4">
          <!-- Bell Icon with Badge -->
         <div class="dropdown position-relative">
    <!-- Bell Icon -->
    <a href="#" class="d-flex align-items-center text-dark text-decoration-none dropdown-toggle" id="notificationDropdown" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fas fa-bell fs-5"></i> 
        <!-- Badge for the number of notifications -->
        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
            3
        </span>
        </a>
          
            <!-- Dropdown for notifications -->
          <!-- Notification Dropdown -->
  <!-- Include Font Awesome CDN for icons -->

    <!-- Dropdown for notifications -->
    <ul class="dropdown-menu dropdown-menu-end custom-dropdown-width fade" aria-label ledby="notificationDropdown" style="border-radius: 10px; padding: 10px;" id="notificationDropdownMenu">
        <!-- Notification Header -->
     <li class="dropdown-item text-dark d-flex justify-content-between align-items-center" style="border-radius: 8px; padding: 10px;" onmouseover="this.style.backgroundColor='#ffffff'">
    <span><b>Notification (4)</b></span>
    
    <!-- Mark All as Read Link with Icon -->
    <a href="#" class="markallread text-primary" style="text-decoration: none; ">
        Mark All as Read &nbsp<i class="fas fa-check-circle me-2"></i>
    </a>
</li>
        <li><hr class="dropdown-divider"></li>

        <!-- Notification Items -->
        <li>
            <a class="dropdown-item d-flex align-items-center" href="#" style="padding: 10px;">
                <i class="bi bi-rocket-takeoff me-3" style="font-size: 18px; color: #0977d6;"></i>
                <div>
                    <div><b>New message from Sarah</b></div>
                    <span class="text-muted"><small>10 min ago</small></span>
                </div>
            </a>
        </li>

        <li>
            <a class="dropdown-item d-flex align-items-center" href="#" style="padding: 10px;">
                <i class="bi bi-rocket-takeoff me-3" style="font-size: 18px; color: #0977d6;"></i>
                <div>
                    <div><b>John commented on your post</b></div>
                    <span class="text-muted"><small>15 min ago</small></span>
                </div>
            </a>
        </li>

        <li>
            <a class="dropdown-item d-flex align-items-center" href="#" style="padding: 10px;">
                <i class="bi bi-rocket-takeoff me-3" style="font-size: 18px; color: #0977d6;"></i>
                <div>
                    <div><b>3 new assignments are due</b></div>
                    <span class="text-muted"><small>30 min ago</small></span>
                </div>
            </a>
        </li>

        <li>
            <a class="dropdown-item d-flex align-items-center" href="#" style="padding: 10px;">
                <i class="bi bi-rocket-takeoff me-3" style="font-size: 18px; color: #0977d6;"></i>
                <div>
                    <div><b>Your profile has been updated</b></div>
                    <span class="text-muted"><small>1 hour ago</small></span>
                </div>
            </a>
        </li>

        <li><hr class="dropdown-divider"></li>

        <li class="text-center w-100">
    <a class="dropdown-item view d-flex justify-content-center align-items-center" href="#" onmouseover="this.style.color='#0977d6'; this.style.backgroundColor='#ffffff'" onmouseout="this.style.color=''; this.style.backgroundColor=''">
        <b>View all notifications</b>
        <!-- Arrow icon -->
        <i class="fas fa-arrow-right ms-2"></i>
    </a>
</li>
    </ul>
</div>
          <!-- Profile Dropdown -->
          <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-dark text-decoration-none dropdown-toggle" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="../assests/images/default.png" alt="Profile" class="rounded-circle me-2" width="30" height="30">
              <span>Mr. Admin</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
              <li><a class="dropdown-item" href="../profile.php">Profile</a></li>
              <li><a class="dropdown-item" href="#">Settings</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Logout</a></li>
            </ul>
          </div>
          
        </div>
      </div>
    </nav>

        
        <!-- Row 1: Summary Cards -->
    <div class="row mb-4 pt-4 mx-5">
  <div class="col-md-3">
    <div class="info-card student-card text-white d-flex justify-content-between align-items-center p-3 mb-3 mt-3">
      <div>
        <h2>44</h2>
        <p>Student</p>
      </div>
      <i class="fas fa-user-graduate fa-2x"></i>
    </div>
  </div>
  <div class="col-md-3">
    <div class="info-card parent-card text-white d-flex justify-content-between align-items-center p-3 mb-3 mt-3">
      <div>
        <h2>10</h2>
        <p>Parents</p>
      </div>
      <i class="fas fa-user fa-2x"></i>
    </div>
  </div>
  <div class="col-md-3">
    <div class="info-card teacher-card text-white d-flex justify-content-between align-items-center p-3 mb-3 mt-3">
      <div>
        <h2>12</h2>
        <p>Teacher</p>
      </div>
      <i class="fas fa-chalkboard-teacher fa-2x"></i>
    </div>
  </div>
  <div class="col-md-3">
    <div class="info-card subject-card text-white d-flex justify-content-between align-items-center p-3 mb-3 mt-3">
      <div>
        <h2>35</h2>
        <p>Subject</p>
      </div>
      <i class="fas fa-book fa-2x"></i>
    </div>  
  </div>
</div>