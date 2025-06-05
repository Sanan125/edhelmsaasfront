<!-- sidebar.php -->
<?php
// Get the current page name
$current_page = basename($_SERVER['PHP_SELF']);
?>
<div class="sidebar">
    <div class="sidebar-header">
        <h3><b>EDHELM</b></h3>
    </div>
    <ul class="nav flex-column">
        <li class="nav-item <?php echo ($current_page == 'dashboard.php') ? 'active' : ''; ?>">
            <a class="nav-link" href="../admin/dashboard.php">
                <i class="fas fa-tachometer-alt"></i> Dashboard
            </a>
        </li>
        <li class="nav-item <?php echo ($current_page == 'student.php') ? 'active' : ''; ?>">
            <a class="nav-link" href="../admin/student.php">
                <i class="fas fa-users"></i> Students
            </a>
        </li>
        <li class="nav-item <?php echo ($current_page == 'parent.php') ? 'active' : ''; ?>">
            <a class="nav-link" href="../admin/parent.php">
                <i class="fas fa-users"></i> Parents
            </a>
        </li>
        <li class="nav-item <?php echo ($current_page == 'teacher.php') ? 'active' : ''; ?>">
            <a class="nav-link" href="../admin/teacher.php">
                <i class="fas fa-chalkboard-teacher"></i> Teachers
            </a>
        </li>
        <li class="nav-item <?php echo ($current_page == 'class.php') ? 'active' : ''; ?>">
            <a class="nav-link" href="../admin/class.php">
                <i class="fas fa-school"></i> Classes
            </a>
        </li>
        <li class="nav-item <?php echo ($current_page == 'subject.php') ? 'active' : ''; ?>">
            <a class="nav-link" href="../admin/subject.php">
                <i class="fas fa-calendar-alt"></i> Subject
            </a>
        </li>
        <li class="nav-item <?php echo ($current_page == 'attendance.php') ? 'active' : ''; ?>">
            <a class="nav-link" href="../admin/attendance.php">
                <i class="fas fa-calendar-alt"></i> Attendance
            </a>
        </li>
        <li class="nav-item <?php echo ($current_page == 'fees.php') ? 'active' : ''; ?>">
            <a class="nav-link" href="#">
                <i class="fas fa-money-bill-wave"></i> Fees
            </a>
        </li>
        <li class="nav-item <?php echo ($current_page == 'exams.php') ? 'active' : ''; ?>">
            <a class="nav-link" href="#">
                <i class="fas fa-book"></i> Exams
            </a>
        </li>
        <li class="nav-item <?php echo ($current_page == 'announcements.php') ? 'active' : ''; ?>">
            <a class="nav-link" href="#">
                <i class="fas fa-bullhorn"></i> Announcements
            </a>
        </li>
        <li class="nav-item <?php echo ($current_page == 'settings.php') ? 'active' : ''; ?>">
            <a class="nav-link" href="#">
                <i class="fas fa-cog"></i> Settings
            </a>
        </li>
        <li class="nav-item <?php echo ($current_page == 'logout.php') ? 'active' : ''; ?>">
            <a class="nav-link" href="#">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
        </li>
    </ul>
</div>





