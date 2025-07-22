<?php
// Get current file and folder
$current_file = basename($_SERVER['PHP_SELF']);
$current_folder = basename(dirname($_SERVER['PHP_SELF']));

?>

<div class="sidebar">
    <!-- <div class="sidebar-header">
        <a href="../dashboard">
       <img src="../assests/images/edhelm-logo-1024x465.png" alt="Logo" class="img-fluid mb-2" style="max-height: 38px;">
 
        </a>
    </div> -->

    <div class="position-absolute top-0 end-0 m-2 btn btn-secondary btn-sm" id="toggleArrow">
        <i class="fas fa-angle-left" id="arrowIcon"></i>
    </div>

    <ul class="nav flex-column">

    <li class="nav-item <?php echo ($current_folder == 'dashboard') ? 'active' : ''; ?>">
        <a class="nav-link" href="../dashboard">
            <i class="fas fa-users"></i> <span class="nav-text">Dashboard</span>
        </a>
    </li>

    <li class="nav-item <?php echo ($current_folder == 'student') ? 'active' : ''; ?>">
        <a class="nav-link" href="../student">
            <i class="fas fa-users"></i> <span class="nav-text">Students</span>
        </a>
    </li>

    <li class="nav-item <?php echo ($current_folder == 'parent') ? 'active' : ''; ?>">
        <a class="nav-link" href="../parent">
            <i class="fas fa-users"></i> <span class="nav-text">Parents</span>
        </a>
    </li>

    <li class="nav-item <?php echo ($current_folder == 'teacher') ? 'active' : ''; ?>">
        <a class="nav-link" href="../teacher">
            <i class="fas fa-chalkboard-teacher"></i> <span class="nav-text">Teachers</span>
        </a>
    </li>

    <li class="nav-item <?php echo ($current_folder == 'class') ? 'active' : ''; ?>">
        <a class="nav-link" href="../class">
            <i class="fas fa-school"></i> <span class="nav-text">Classes</span>
        </a>
    </li>

    <li class="nav-item <?php echo ($current_folder == 'subject') ? 'active' : ''; ?>">
        <a class="nav-link" href="../subject">
            <i class="fas fa-calendar-alt"></i> <span class="nav-text">Subject</span>
        </a>
    </li>

    <li class="nav-item <?php echo ($current_folder == 'attendance') ? 'active' : ''; ?>">
        <a class="nav-link" href="../attendance">
            <i class="fas fa-calendar-alt"></i> <span class="nav-text">Attendance</span>
        </a>
    </li>

    <li class="nav-item <?php echo ($current_folder == 'fees') ? 'active' : ''; ?>">
        <a class="nav-link" href="../fees">
            <i class="fas fa-money-bill-wave"></i> <span class="nav-text">Fees</span>
        </a>
    </li>

    <li class="nav-item <?php echo ($current_folder == 'exams') ? 'active' : ''; ?>">
        <a class="nav-link" href="../exams">
            <i class="fas fa-book"></i> <span class="nav-text">Exams</span>
        </a>
    </li>

    <li class="nav-item <?php echo ($current_folder == 'announcements') ? 'active' : ''; ?>">
        <a class="nav-link" href="../announcements">
            <i class="fas fa-bullhorn"></i> <span class="nav-text">Announcements</span>
        </a>
    </li>

    <li class="nav-item <?php echo ($current_folder == 'settings') ? 'active' : ''; ?>">
        <a class="nav-link" href="../settings">
            <i class="fas fa-cog"></i> <span class="nav-text">Settings</span>
        </a>
    </li>

    <li class="nav-item <?php echo ($current_file == 'logout.php') ? 'active' : ''; ?>">
        <a class="nav-link" href="../admin/logout.php">
            <i class="fas fa-sign-out-alt"></i> <span class="nav-text">Logout</span>
        </a>
    </li>

</ul>

</div>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const sidebar = document.querySelector('.sidebar');
    const toggleArrow = document.getElementById('toggleArrow');
    const arrowIcon = document.getElementById('arrowIcon');
    const mainContent = document.querySelector('.main-content');

    const sidebarCollapsedState = localStorage.getItem('sidebarCollapsed');

    if (sidebarCollapsedState === 'true') {
        sidebar.classList.add('collapsed');
        arrowIcon.classList.add('rotate');
    }

    toggleArrow.addEventListener('click', function () {
        const isNowCollapsed = sidebar.classList.toggle('collapsed');
        arrowIcon.classList.toggle('rotate');

        // Save state
        localStorage.setItem('sidebarCollapsed', isNowCollapsed);
    });
});
</script>