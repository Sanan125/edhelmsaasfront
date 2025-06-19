<?php
// Get current file and folder
$current_file = basename($_SERVER['PHP_SELF']);
$current_folder = basename(dirname($_SERVER['PHP_SELF']));

?>

<div class="sidebar">
    <div class="sidebar-header">
        <h3><b>EDHELM</b></h3>
    </div>
    <ul class="nav flex-column">

        
          <li class="nav-item <?php echo ($current_folder == 'dashboard') ? 'active' : ''; ?>">
            <a class="nav-link" href="../dashboard">
                <i class="fas fa-users"></i> Dashboard
            </a>
        </li>

        <li class="nav-item <?php echo ($current_folder == 'student') ? 'active' : ''; ?>">
            <a class="nav-link" href="../student">
                <i class="fas fa-users"></i> Students
            </a>
        </li>

        <li class="nav-item <?php echo ($current_folder == 'parent') ? 'active' : ''; ?>">
            <a class="nav-link" href="../parent">
                <i class="fas fa-users"></i> Parents
            </a>
        </li>

        <li class="nav-item <?php echo ($current_folder == 'teacher') ? 'active' : ''; ?>">
            <a class="nav-link" href="../teacher">
                <i class="fas fa-chalkboard-teacher"></i> Teachers
            </a>
        </li>

        <li class="nav-item <?php echo ($current_folder == 'class') ? 'active' : ''; ?>">
            <a class="nav-link" href="../class">
                <i class="fas fa-school"></i> Classes
            </a>
        </li>

        <li class="nav-item <?php echo ($current_folder == 'subject') ? 'active' : ''; ?>">
            <a class="nav-link" href="../subject">
                <i class="fas fa-calendar-alt"></i> Subject
            </a>
        </li>

        <li class="nav-item <?php echo ($current_folder == 'attendance') ? 'active' : ''; ?>">
            <a class="nav-link" href="../attendance">
                <i class="fas fa-calendar-alt"></i> Attendance
            </a>
        </li>

        <li class="nav-item <?php echo ($current_folder == 'fees') ? 'active' : ''; ?>">
            <a class="nav-link" href="../fees">
                <i class="fas fa-money-bill-wave"></i> Fees
            </a>
        </li>

        <li class="nav-item <?php echo ($current_folder == 'exams') ? 'active' : ''; ?>">
            <a class="nav-link" href="../exams">
                <i class="fas fa-book"></i> Exams
            </a>
        </li>

        <li class="nav-item <?php echo ($current_folder == 'announcements') ? 'active' : ''; ?>">
            <a class="nav-link" href="../announcements">
                <i class="fas fa-bullhorn"></i> Announcements
            </a>
        </li>

        <li class="nav-item <?php echo ($current_folder == 'sign-in') ? 'active' : ''; ?>">
            <a class="nav-link" href="../sign-in">
                <i class="fas fa-user-plus"></i> Sign-In
            </a>
        </li>

        <li class="nav-item <?php echo ($current_folder == 'sign-up') ? 'active' : ''; ?>">
            <a class="nav-link" href="../sign-up">
                <i class="fas fa-user-plus"></i> Sign-Up
            </a>
        </li>

        <li class="nav-item <?php echo ($current_folder == 'settings') ? 'active' : ''; ?>">
            <a class="nav-link" href="../settings">
                <i class="fas fa-cog"></i> Settings
            </a>
        </li>

        <li class="nav-item <?php echo ($current_file == 'logout.php') ? 'active' : ''; ?>">
            <a class="nav-link" href="../admin/logout.php">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
        </li>

    </ul>
</div>
