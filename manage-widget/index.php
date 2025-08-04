<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Manage Widgets</title>
    <?php 
        $basePath = '../'; // adjust if this file is in a subfolder
        include('../includes/inc/header.php'); 
    ?>
</head>
<body>
<?php include('../includes/inc/topbar.php'); ?>
<?php include('../includes/inc/sidebar.php'); ?>

<div class="main-content p-4">
    <?php include('../includes/inc/breadcrumb.php'); ?>

    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="mb-0">Manage Dashboard Widgets</h2>
            <a href="dashboard.php" class="btn btn-sm btn-outline-primary">
                <i class="fas fa-arrow-left me-1"></i> Back to Dashboard
            </a>
        </div>

        <form id="widgetForm" class="p-3 bg-white shadow-sm rounded">
            <div class="form-check form-switch mb-3">
                <input class="form-check-input" type="checkbox" id="calendar" />
                <label class="form-check-label" for="calendar">School Calendar</label>
            </div>

            <div class="form-check form-switch mb-3">
                <input class="form-check-input" type="checkbox" id="timetable" />
                <label class="form-check-label" for="timetable">Student Time Table</label>
            </div>

            <div class="form-check form-switch mb-3">
                <input class="form-check-input" type="checkbox" id="exam" />
                <label class="form-check-label" for="exam">Final Exam Sheet</label>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Save Settings</button>
        </form>
    </div>
</div>

<?php include('../includes/inc/footer.php'); ?>

<script>
    const widgetForm = document.getElementById('widgetForm');

    // Load saved widget states from localStorage
    ['calendar', 'timetable', 'exam'].forEach(id => {
        if (localStorage.getItem(id) !== 'off') {
            document.getElementById(id).checked = true; // Default ON
        }
    });

    widgetForm.addEventListener('submit', function(e) {
        e.preventDefault();
        ['calendar', 'timetable', 'exam'].forEach(id => {
            localStorage.setItem(id, document.getElementById(id).checked ? 'on' : 'off');
        });
        alert('✅ Widget settings saved!');
    });
</script>

</body>
</html>
