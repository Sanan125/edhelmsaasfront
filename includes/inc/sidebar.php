<?php
// Get current file and folder
$current_file = basename($_SERVER['PHP_SELF']);
$current_folder = basename(dirname($_SERVER['PHP_SELF']));
?>

<div class="sidebar">
    <div class="position-absolute top-0 end-0 m-2 btn btn-secondary btn-sm" id="toggleArrow">
        <i class="fas fa-angle-left" id="arrowIcon"></i>
    </div>

    <ul class="nav flex-column">

    <li class="nav-item <?php echo ($current_folder == 'dashboard') ? 'active' : ''; ?>" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboard">
        <a class="nav-link" href="../dashboard">
<img src="../assests/images/dashboard.svg" alt="Dashboard Icon" width="18" height="18" style="margin-right: 8px;" >
             <span class="nav-text">Dashboard</span>
        </a>
    </li>

    <li class="nav-item <?php echo ($current_folder == 'student') ? 'active' : ''; ?>" data-bs-toggle="tooltip" data-bs-placement="right" title="Students">
        <a class="nav-link" href="../student">
<img src="../assests/images/student.svg" alt="Students Icon" width="18" height="18" style="margin-right: 8px;">
             <span class="nav-text">Students</span>
        </a>
    </li>

    <li class="nav-item <?php echo ($current_folder == 'parent') ? 'active' : ''; ?>" data-bs-toggle="tooltip" data-bs-placement="right" title="Parents">
        <a class="nav-link" href="../parent">
<img src="../assests/images/parents.svg" alt="Parents Icon" width="18" height="18" style="margin-right: 8px;">
<span class="nav-text">Parents</span>
        </a>
    </li>

    <li class="nav-item <?php echo ($current_folder == 'teacher') ? 'active' : ''; ?>" data-bs-toggle="tooltip" data-bs-placement="right" title="Teachers">
        <a class="nav-link" href="../teacher">
<img src="../assests/images/teacher.svg" alt="Teachers Icon" width="18" height="18" style="margin-right: 8px;">
            <span class="nav-text">Teachers</span>
        </a>
    </li>

    <li class="nav-item <?php echo ($current_folder == 'class') ? 'active' : ''; ?>" data-bs-toggle="tooltip" data-bs-placement="right" title="Classes">
        <a class="nav-link" href="../class">
<img src="../assests/images/classes.svg" alt="Classes Icon" width="18" height="18" style="margin-right: 8px;">
             <span class="nav-text">Classes</span>
        </a>
    </li>

    <li class="nav-item <?php echo ($current_folder == 'subject') ? 'active' : ''; ?>" data-bs-toggle="tooltip" data-bs-placement="right" title="Subject">
        <a class="nav-link" href="../subject">
<img src="../assests/images/subject.svg" alt="Subject Icon" width="18" height="18" style="margin-right: 8px;">
            <span class="nav-text">Subject</span>
        </a>
    </li>

    <li class="nav-item <?php echo ($current_folder == 'attendance') ? 'active' : ''; ?>" data-bs-toggle="tooltip" data-bs-placement="right" title="Attendance">
        <a class="nav-link" href="../attendance">
<img src="../assests/images/attendance.svg" alt="Attendance Icon" width="18" height="18" style="margin-right: 8px;">
            <span class="nav-text">Attendance</span>
        </a>
    </li>

    <li class="nav-item <?php echo ($current_folder == 'fees') ? 'active' : ''; ?>" data-bs-toggle="tooltip" data-bs-placement="right" title="Fees">
        <a class="nav-link" href="../fees">
<img src="../assests/images/fees.svg" alt="Fees Icon" width="18" height="18" style="margin-right: 8px;">
            <span class="nav-text">Fees</span>
        </a>
    </li>

    <li class="nav-item <?php echo ($current_folder == 'exams') ? 'active' : ''; ?>" data-bs-toggle="tooltip" data-bs-placement="right" title="Exams">
        <a class="nav-link" href="../exams">
<img src="../assests/images/exam.svg" alt="Exams Icon" width="18" height="18" style="margin-right: 8px;">
            <span class="nav-text">Exams</span>
        </a>
    </li>

    <li class="nav-item <?php echo ($current_folder == 'announcements') ? 'active' : ''; ?>" data-bs-toggle="tooltip" data-bs-placement="right" title="Announcement">
        <a class="nav-link" href="../announcements">
<img src="../assests/images/anouncment.svg" alt="Announcements Icon" width="18" height="18" style="margin-right: 8px;">
             <span class="nav-text">Announcements</span>
        </a>
    </li>

    <!-- <li class="nav-item <?php echo ($current_folder == 'settings') ? 'active' : ''; ?>
        <a class="nav-link" href="../settings">
            <i class="fas fa-cog"></i> <span class="nav-text">Settings</span>
        </a>
    </li> -->

    <!-- <li class="nav-item <?php echo ($current_file == 'logout.php') ? 'active' : ''; ?>">
        <a class="nav-link" href="../admin/logout.php">
<img src="../assests/images/logout.svg" alt="Logout Icon" width="17" height="17" style="margin-right: 8px;">
            <span class="nav-text">Logout</span>
        </a>
    </li> -->

</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const sidebar = document.querySelector('.sidebar');
    const toggleArrow = document.getElementById('toggleArrow');
    const arrowIcon = document.getElementById('arrowIcon');

    const sidebarCollapsedState = localStorage.getItem('sidebarCollapsed');

    // Initialize Bootstrap tooltips
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    const tooltips = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl, {
            trigger: 'hover',
            placement: 'right'
        });
    });

    function updateTooltipsState(collapsed) {
        tooltips.forEach(t => collapsed ? t.enable() : t.disable());
    }

    // Set initial state
    if (sidebarCollapsedState === 'true') {
        sidebar.classList.add('collapsed');
        arrowIcon.classList.add('rotate');
        updateTooltipsState(true);
        toggleArrow.setAttribute('title', 'Expand Sidebar');
    } else {
        updateTooltipsState(false);
    }

    // Handle toggle
    toggleArrow.addEventListener('click', function () {
        const isNowCollapsed = sidebar.classList.toggle('collapsed');
        arrowIcon.classList.toggle('rotate');
        localStorage.setItem('sidebarCollapsed', isNowCollapsed);
        updateTooltipsState(isNowCollapsed);
        toggleArrow.setAttribute('title', isNowCollapsed ? 'Expand Sidebar' : 'Collapse Sidebar');
    });
});
</script>
